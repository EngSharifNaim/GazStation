@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Basic datatable -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">الموظف : {{Auth::user()->name}}</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                    <li class="nav-item"><a href="#justified-left-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> التذاكر</a></li>
                    <li class="nav-item"><a href="#justified-left-tab2" class="nav-link" data-toggle="tab"><i class="icon-users2 mr-2"></i> الزبائن</a></li>
                    <li class="nav-item"><a href="#justified-left-tab3" class="nav-link" data-toggle="tab"><i class="icon-user mr-2"></i> الموردين</a></li>
                    <li class="nav-item"><a href="#justified-left-tab4" class="nav-link" data-toggle="tab"><i class="icon-store mr-2"></i> ادارة المخازن و الاصناف</a></li>
                    <li class="nav-item"><a href="#justified-left-tab5" class="nav-link" data-toggle="tab"><i class="icon-store mr-2"></i> فواتير</a></li>
                    <li class="nav-item"><a href="#justified-left-tab6" class="nav-link" data-toggle="tab"><i class="icon-store mr-2"></i> سندات</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> تقارير</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#justified-left-tab3" class="dropdown-item" data-toggle="tab">كشف مبيعات صنف</a>
                            <a href="#justified-left-tab4" class="dropdown-item" data-toggle="tab">كشف حساب زبون</a>
                            <a href="#justified-left-tab4" class="dropdown-item" data-toggle="tab">كشف حساب تاجر</a>
                            <a href="#justified-left-tab4" class="dropdown-item" data-toggle="tab">كشف تفصيلي</a>
                        </div>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="justified-left-tab1">
                        @include('tiket')
                    </div>

                    <div class="tab-pane fade" id="justified-left-tab2">
                        @include('customers')
                    </div>

                    <div class="tab-pane fade" id="justified-left-tab3">
                        @include('suppliers')
                    </div>

                    <div class="tab-pane fade" id="justified-left-tab4">
                        @include('store')
                    </div>
                    <div class="tab-pane fade" id="justified-left-tab5">
                        @include('orders')
                    </div>
                    <div class="tab-pane fade" id="justified-left-tab6">
                        @include('sanads')

                    </div>
                </div>
            </div>
        </div>



    </div>
    @include('modals.customerModal')
{{--    @include('modals.supplierModal')--}}
    @include('modals.newItem')

@endsection

    <script type="text/javascript">
       function gazbut(but,price) {
        // alert(but);
           $('#butsize').val(but);
           $('#butprice').val(price);
           $('#totalprice').val(parseInt($('#butqty').val()) * parseInt($('#butprice').val()) );
       }
       function changeqty() {
        // alert(but);
           $('#totalprice').val(parseInt($('#butqty').val()) * parseInt($('#butprice').val()) );
       }

       $('#tiket').on('keyup keypress', function(e) {
           var keyCode = e.keyCode || e.which;
           if (keyCode === 13) {
               e.preventDefault();
               return false;
           }
       });
    </script>

