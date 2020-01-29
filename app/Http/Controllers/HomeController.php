<?php

namespace App\Http\Controllers;

use Auth;
use App\Sanad;
use App\Store;
use App\Suplier;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Item;
use App\Customer;
use App\Order;
use App\OrderDetails;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::where('store',0)->get();
        $store_items = Item::where('store_item','0')->get();
        $stores = Store::where('deleted_at','=',Null)->get();
        $customers = Customer::all();
        $suppliers = Suplier::all();
//        $items = Item::all();
        $orders_in = Order::where('type','مشتريات')->get();
        $orders_out = Order::where('type','مبيعات')->get();
        $sanads_in = Sanad::where('type','in')
        ->orderBy('created_at','DESC')
        ->get();
        $sanads_out = Sanad::where('type','out')
        ->orderBy('created_at','DESC')
        ->get();

        $page = 'صفحة التذاكر الرئيسية';
        return view('home',compact('sanads_in','sanads_out','items','customers','suppliers','store_items','items','orders_in','orders_out','store_items','stores'));
    }
    public function addItem(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->size = $request->new_itemSizee;
        $item->price =  $request->new_itemPrice;
        $item->save();
        return back();
    }

    public function send_order(Request $request){
        $order = new Order();
        $order->customer_id = $request->Customers;
        $order->user_id = Auth::user()->id;
        $order->amount = $request->totalPrice;
        $order->discount = $request->discount;
        $order->type = 'مبيعات';
        $order->save();

        $sanad = new Sanad();
        $sanad->customer_id = $request->Customers;
        $order->user_id = Auth::user()->id;
        $sanad->amount = $request->prepaid_amount;
        $sanad->type = 'out';
        $sanad->save();


        $orderDetails = new OrderDetails();
        $orderDetails->order_id = $order->id;
        $orderDetails->item_id =$request->itemId;
        $orderDetails->item_price =$request->butPrice;
        $orderDetails->item_qty =$request->butQty;
        $orderDetails->item_total_price =(int)$request->butPrice * (int)$request->butQty;
        $orderDetails->save();

        $store_minus = $request->butQty * $request->butSize;

        $store = Store::where('item_id',$request->item_storeid)
            ->where('deleted_at','=' ,NULL)
            ->first();
//        $store->item_qty = 30;
        $newQty = $store->item_qty - $store_minus/1000;
        if ($newQty<=0){
            $store->item_qty = 0;
            $store->deleted_at = Carbon::now();
            $store->save();


            $store = Store::where('item_id',$request->item_storeid)
                ->where('deleted_at','=' ,NULL)
                ->first();
            $store->item_qty = $store->item_qty + $newQty;
            $store->save();
        }
        else
        {
            $store->item_qty = $newQty;
            $store->save();

        }

        if($request->print_tiket)
        {
            $print = true;
        }
        else
            $print = false;

        return response()->json([
            'success' => 'yes',
            'print' => $print,
            'msg' => 'تم الحفظ بنجاح'
        ]);

    }
    public function send_customer(Request $request){
        $customer = new Customer();
        $customer->name = $request->new_customerName;
        $customer->id_no = $request->new_customerId;
        $customer->mobile = $request->new_customerMobile;
        $customer->address = $request->new_customerAddress;
        $customer->amount = 0;
        $customer->save();


        return response()->json([
            'success' => 'yes',
            'msg' => 'تم الحفظ بنجاح'
        ]);

    }

    public function newItem(Request $request){
        $item = new Item();
        $item->size = $request->new_itemSize;
        $item->price =  $request->new_itemPrice;
        $item->name = $request->itemName;
        $item->store = $request->isStore;
        $item->store_item = $request->storeItem;
        $item->save();

        $store = new Store();
        $store->item_id = $item->id;
        $store->item_name = $item->name;
        $store->item_qty = 0;
        $store->last_price = $item->price;
        $store->save();

        return response()->json([
            'success' => 'yes',
            'msg' => 'تم الحفظ بنجاح'
        ]);

    }
    public function tiket($name){
        $tiket = Order::where('id','>',0)->orderBy('id','DESC')->first();
        $orderDetails = OrderDetails::where('order_id',$tiket->id)->get();
        $customer = Customer::where('id',$tiket->customer_id)->first()->name;
        $custname = $name;
        return view('tiketTemplate',compact('tiket','customer','orderDetails','custname'));
    }

    public function customers(){
        $customers = Customer::where('deleted_at',NULL);
        $page = 'صفحة الزبائن';
        return view('customers',compact('customers','page'));

    }
    public function supliers(){
        $suppliers = Suplier::all();
        $customers = Customer::all();
        $page = 'صفحة الموردين';
        return view('suppliers',compact('suppliers','customers','page'));

    }
    public function itemReport($id,$period){

        $items = DB::table('order_details')
            ->where('item_id',$id)
            ->where('order_details.created_at','>',Carbon::now()->subDays($period))
        ->join('items','items.id','=','order_details.item_id')
            ->join('orders','orders.id','=','order_details.order_id')
            ->join('users','users.id','=','orders.user_id')
        ->select('users.name as user_name','items.name','items.id','order_details.item_price','order_details.item_total_price','order_details.item_qty','order_details.created_at')
        ->get();

        $itemName = Item::find($id)->name;
        $page = 'صفحة الموردين';
        return view('itemReport',compact('items','page','itemName'));

    }
    public function sanadReport($period){

        $sanads = Sanad::where('created_at','>',Carbon::now()->subDays($period))->get();

        if ($period == 1)
            $periodName = 'آخر يوم';
        if ($period == 7)
            $periodName = 'آخر اسبوع';
        if ($period == 30)
            $periodName = 'آخر شهر';
        return view('sanadReport',compact('sanads','periodName'));

    }
    public function customerReport($id){

        $orders = DB::table('orders')
            ->where('orders.customer_id',$id)
        ->join('customers','customers.id','=','orders.customer_id')
            ->join('order_details','order_details.order_id','=','orders.id')
        ->select('orders.id','orders.created_at','orders.amount','orders.discount','orders.paid','orders.notpaid','order_details.item_id','order_details.item_qty','order_details.item_price')
        ->get();

        $customerdata['name'] = Customer::find($id)->name;
        $customerdata['id'] = Customer::find($id)->id;
        $page = 'صفحة الموردين';
        return view('customerReport',compact('orders','page','customerdata'));

    }
    public function customerReport_filter(Request $request){

        $orders = DB::table('orders')
            ->where('orders.customer_id',$request->customer_id)
            ->whereBetween('orders.created_at',[$request->begin_date,$request->end_date])
        ->join('customers','customers.id','=','orders.customer_id')
            ->join('order_details','order_details.order_id','=','orders.id')
        ->select('orders.id','orders.created_at','orders.amount','orders.discount','orders.paid','orders.notpaid','order_details.item_id','order_details.item_qty','order_details.item_price')
        ->get();

        $customerdata['name'] = Customer::find($request->customer_id)->name;
        $customerdata['id'] = $request->customer_id;
        $page = 'صفحة الموردين';
        return view('customerReport',compact('orders','page','customerdata'));

    }

    public function editPrices(Request $request){
        $i=0;
        foreach ($request->itemEditId as $id){
            $item = Item::find($id);
            $item->name = $request->itemEditName[$i];
            $item->price = $request->itemEditPrice[$i];
            $item->save();
            $i++;

        }

        return back();
    }

    public function in_order(Request $request){
//        return $request;
        $order = new Order();
        $order->supplier_id = $request->order_supplier_name;
        $order->user_id = Auth::user()->id;
        $order->amount = $request->order_item_qty * $request->order_item_price;
        $order->type = 'مشتريات';
        $order->save();

        $orderDetails = new OrderDetails();
        $orderDetails->order_id = $order->id;
        $orderDetails->item_id =$request->order_item_name;
        $orderDetails->item_price =$request->order_item_price;
        $orderDetails->item_qty =$request->order_item_qty;
        $orderDetails->item_total_price =$request->order_item_qty * $request->order_item_price;
        $orderDetails->save();

        $storeItem = Store::where('item_id',$request->order_item_name)->first();
        if($storeItem->last_price == $request->order_item_price)
        {
            $storeItem->item_qty += $request->order_item_qty;
        }
        else
        {
            $storeItem = new Store();
            $storeItem->item_id = $request->order_item_name;
            $storeItem->item_name = Item::find($request->order_item_name)->name;
            $storeItem->item_qty = $request->order_item_qty;
            $storeItem->last_price = $request->order_item_price;
        }
        $storeItem->save();
        return back();
    }

    public function delete_customer($id)
    {
       $customer =  Customer::find($id);
        $customer->deleted_at = Carbon::now();
        $customer->save();
        return back();
    }
}
