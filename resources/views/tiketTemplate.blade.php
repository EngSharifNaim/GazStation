
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
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input style="font-size: 20px" type="text" class="form-control" value="رقم التذكر: {{$tiket->id}}">
                                    </div>

                                    <div class="col-sm-6">
                                        <input style="font-size: 20px" type="text" class="form-control" value="الزبون: {{$custname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input style="font-size: 20px" type="text" class="form-control" value="التاريخ و الوقت : {{$tiket->created_at}}">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>                </div>

                <div class="table-responsive border">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الصنف</th>
                            <th>الكمية</th>
                            <th>السعر</th>
                            <th>الاجمالي</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderDetails as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{App\Item::where('id',$item->item_id)->first()->name}}</td>
                            <td>{{$item->item_qty}}</td>
                            <td>{{$item->item_price}}</td>
                            <td>{{$item->item_total_price}}</td>
                        </tr>
                            @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>المجموع</td>
                            <td>{{$tiket->amount}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>مدفوع نقدي</td>
                            <td>{{$tiket->amount}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>الخصم</td>
                            <td>{{$tiket->discount}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>المبلغ بعد الخصم</td>
                            <td>{{$tiket->amount - $tiket->discount}}</td>
                        </tr>
                        <tr>
                            <td style="border: #ffffff "></td>
                            <td></td>
                            <td></td>
                            <td>آجل</td>
                            <td>0</td>
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