<div class="row">
    <div class="col col-md-6">
        <div class="card">
            <div class="page-header page-header-light" style="border: 1px solid #ddd;">
                <div class="page-header-content header-elements-inline">
                    <div class="page-title">
                        <h5>
                            <i class="icon-arrow-right6 mr-2"></i>
                            <span class="font-weight-semibold">ايصالات دفع</span>
                            <small class="d-block text-muted">الاجمالي : {{count($sanads_in)}}</small>
                        </h5>
                    </div>

                    <div class="header-elements d-flex align-items-center">
                        <div class="header-elements d-flex align-items-center">
                            <ul class="list-inline list-inline-condensed mb-0">
                                <li class="list-inline-item"><a href="#" class="btn btn-primary border-transparent" data-toggle="modal" data-target="#modal_theme_info">اضافة طلبية جديدة <i class="icon-database-insert"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="btn btn-dark border-transparent">طباعة كشف <i class="icon-printer4"></i></a></li>
                            </ul>
                        </div>                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                    <div class="datatable-scroll">
                        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">رقم السند</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">من حساب</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">التاريخ</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">المبلغ</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"></th>
                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sanads_in as $sanad)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {{$sanad->id}}
                                    </td>
                                    <td>{{$sanad->customer->name}}</td>
                                    <td>{{$sanad->created_at}}</td>
                                    <td>{{$sanad->amount}}</td>
                                    <td>

                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> طباعة كشف حساب</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-database-edit2"></i> تعديل بيانات</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-droplet2"></i> حذف من القائمة</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="col col-md-6">
        <div class="card">
            <div class="page-header page-header-light" style="border: 1px solid #ddd;">
                <div class="page-header-content header-elements-inline">
                    <div class="page-title">
                        <h5>
                            <i class="icon-arrow-right6 mr-2"></i>
                            <span class="font-weight-semibold">ايصالات قبض</span>
                            <small class="d-block text-muted">الاجمالي : {{count($sanads_out)}}</small>
                        </h5>
                    </div>

                    <div class="header-elements d-flex align-items-center">
                        <div class="header-elements d-flex align-items-center">
                            <ul class="list-inline list-inline-condensed mb-0">
{{--                                <li class="list-inline-item"><a href="#" class="btn btn-primary border-transparent" data-toggle="modal" data-target="#modal_theme_info">اضافة طلبية جديدة <i class="icon-database-insert"></i></a></li>--}}
                                <li class="list-inline-item"><a href="#" onclick="sanads_report(1)" class="btn btn-dark border-transparent">طباعة كشف يومي<i class="icon-printer4"></i></a></li>
                                <li class="list-inline-item"><a href="#" onclick="sanads_report(7)" class="btn btn-dark border-transparent">طباعة كشف اسبوعي<i class="icon-printer4"></i></a></li>
                                <li class="list-inline-item"><a href="#" onclick="sanads_report(30)" class="btn btn-dark border-transparent">طباعة كشف شهري<i class="icon-printer4"></i></a></li>
                            </ul>
                        </div>                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                    <div class="datatable-scroll">
                        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">رقم السند</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">من حساب</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">التاريخ</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">المبلغ</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"></th>
                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sanads_out as $sanad)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {{$sanad->id}}
                                    </td>
                                    <td>{{$sanad->customer->name}}</td>
                                    <td>{{$sanad->created_at}}</td>
                                    <td>{{$sanad->amount}}</td>
                                    <td>

                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> طباعة كشف حساب</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-database-edit2"></i> تعديل بيانات</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-droplet2"></i> حذف من القائمة</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@include('modals.orderIn')
<script>
    function sanads_report(period) {
        var strWindowFeatures = "location=no,height=700,width=900,scrollbars=yes,status=yes";
        var URL = window.location.origin + "/blog/public/sanadReport/" + period;
        var win = window.open(URL, "_blank", strWindowFeatures);
    }
</script>
