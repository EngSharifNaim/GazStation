
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{url('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{url('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{url('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->
    <script src="{{url('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/anytime.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

    <script src="{{url('global_assets/js/demo_pages/picker_date_rtl.js')}}"></script>

    <!-- Theme JS files -->
    <script src="{{url('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>


<!-- Page content -->
<div class="page-content" style="text-align: center">

    <!-- Main content -->
    <div class="content-wrapper" style="text-align: center">

        <!-- Page header -->
        <div class="page-header page-header-light" style="text-align: center;padding: 20px;">

            <div class="media" style="text-align: center">
                <div class="mr-3" style="text-align: center;width: 100%">
                    <a href="#" style="text-align: center">
                        <img src="{{url('images/logo.png')}}" class="rounded-circle" width="150" height="150" alt="">
                    </a>
                </div>
            </div>

        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">


            <!-- Both borders -->
            <div class="card" style="font-size: 20px">
                <div class="card-body">
                    <form action="{{url('customerReport')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col col-md-5">
                                <div class="input-group">
                                    <div class="input-group">
                                        <input type="date" name="begin_date" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col col-md-5">
                                <div class="input-group">
                                    <div class="input-group">
                                        <input type="date" name="end_date" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col col-md-2">
                                <div class="input-group">
                                    <input type="text" hidden name="customer_id" value="{{$customerdata['id']}}">
                                    <button type="submit" class="btn btn-primary">عرض النتائج</button>
                                </div>

                            </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h4>كشف حركة مبيعات للزبون : ({{$customerdata['name']}})</h4>
                        </div>
                    </div>
                </div>

                <div class="table-responsive border">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>التاريخ</th>
                            <th>اجمالي الفاتورة</th>
                            <th>خصم</th>
                            <th>اجمالي بعد الخصم</th>
                            <th>دائن</th>
                            <th>مدين</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{Date('Y-m-d',strtotime($order->created_at))}}</td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->discount}}</td>
                                <td>{{$order->amount - $order->discount}}</td>
                                <td>{{$order->paid}}</td>
                                <td>{{$order->amount}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{App\Item::find($order->item_id)->name}}</td>
                                <td>{{$order->item_qty}}</td>
                                <td>{{$order->item_price}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{$orders->sum('paid')}}</td>
                            <td>{{$orders->sum('amount')}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>الرصيد</td>
                            <td>{{$orders->sum('amount') - $orders->sum('paid')}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /both borders -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler">
                    نشكر ثقتكم بنا
                </button>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
