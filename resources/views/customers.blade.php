    <div class="card">
        <div class="page-header page-header-light" style="border: 1px solid #ddd;">
            <div class="page-header-content header-elements-inline">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-right6 mr-2"></i>
                        <span class="font-weight-semibold">صفحة الزبائن</span>
                        <small class="d-block text-muted">الاجمالي : {{count($customers)}}</small>
                    </h5>
                </div>

                <div class="header-elements d-flex align-items-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info">زبون جديد <i class="icon-user-plus"></i></button>
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
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">الإسم</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">الجوال</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">الرصيد</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">العنوان</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">الحالة</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$customer->name}}</td>
                            <td>{{$customer->mobile}}</td>
                            <td>{{$customer->amount}}</td>
                            <td>{{$customer->address}}</td>
                            <td>
                            </td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" onclick="customerReport({{$customer->id}})" class="dropdown-item"><i class="icon-printer"></i> طباعة كشف حساب</a>
{{--                                            <a href="#" class="dropdown-item"><i class="icon-database-edit2"></i> تعديل بيانات</a>--}}
{{--                                            <a href="{{url('delete_customer/' . $customer->id)}}" class="dropdown-item"><i class="icon-droplet2"></i> حذف من القائمة</a>--}}
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
