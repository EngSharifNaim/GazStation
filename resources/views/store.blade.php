<div class="row">
    <div class="col col-md-6">
        <div class="card">
            <div class="page-header page-header-light" style="border: 1px solid #ddd;">
                <div class="page-header-content header-elements-inline">
                    <div class="page-title">
                        <h5>
                            <i class="icon-arrow-right6 mr-2"></i>
                            <span class="font-weight-semibold">جرد مخزن</span>
                            <small class="d-block text-muted">الاجمالي : {{count($stores)}}</small>
                        </h5>
                    </div>

                    <div class="header-elements d-flex align-items-center">
{{--                        <button class="btn btn-dark">طباعة كشف <i class="icon-printer2"></i></button>--}}
                    </div>
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
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">رقم</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">اسم الصنف</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">اخر سعر</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">الكمية الحالية</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">الاجمالي</th>
                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stores as $store_item)
                                <tr role="row" class="odd">
                                    <td>
                                        {{$store_item->item_id}}
                                    </td>
                                    <td class="sorting_1">{{$store_item->item_name}}</td>
                                    <td>{{$store_item->last_price}}</td>
                                    <td>{{$store_item->item_qty}}</td>
                                    <td>{{$store_item->last_price * $store_item->item_qty}}</td>

                                    <td class="text-center">
{{--                                        <div class="list-icons">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <a href="#" class="list-icons-item" data-toggle="dropdown">--}}
{{--                                                    <i class="icon-menu9"></i>--}}
{{--                                                </a>--}}

{{--                                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> طباعة كشف حساب</a>--}}
{{--                                                    <a href="#" class="dropdown-item"><i class="icon-database-edit2"></i> تعديل بيانات</a>--}}
{{--                                                    <a href="#" class="dropdown-item"><i class="icon-droplet2"></i> حذف من القائمة</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
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
                            <span class="font-weight-semibold">قائمة الاصناف</span>
                            <small class="d-block text-muted">الاجمالي : {{count($items)}}</small>
                        </h5>
                    </div>

                    <div class="header-elements d-flex align-items-center">
                        <ul class="list-inline list-inline-condensed mb-0">
                            <li class="list-inline-item"><a href="#" class="btn btn-primary border-transparent" data-toggle="modal" data-target="#modal_theme_info_newItem">اضافة صنف جديد <i class="icon-database-insert"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn btn-dark border-transparent" data-toggle="modal" data-target="#modal_theme_info_editPrices">تعديل أسعار الأصناف <i class="icon-database-edit2"></i></a></li>
                        </ul>
                    </div>
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
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">رقم</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">اسم الصنف</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">السعر</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">الحجم</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">الحالة</th>
                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr role="row" class="odd">
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td class="sorting_1">{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->size}}</td>
                                    <td></td>

                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" onclick="item_report({{$item->id . ',' . 1}})" class="dropdown-item"><i class="icon-printer"></i> مبيعات اليوم</a>
                                                    <a href="#" onclick="item_report({{$item->id . ',' . 7}})" class="dropdown-item"><i class="icon-database-edit2"></i> مبيعات آخر اسبوع</a>
                                                    <a href="#" onclick="item_report({{$item->id . ',' . 30}})" class="dropdown-item"><i class="icon-droplet2"></i> مبيعات اخر شهر</a>
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
@include('modals.editPrices')
