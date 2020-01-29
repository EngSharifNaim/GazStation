<div id="modal_theme_info_supplier" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title"><i class="icon icon-users2"></i>بيانات المورد الجديد</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <div class="card-header customer_exist" style="display: none">
                        <div class="alert alert-styled-left alert-styled-custom alert-arrow-left alpha-teal border-teal alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">هذا المشترك موجود مسبقا ! بامكانك تحديث بياناته من خلال الضغط على زر حفظ</span>
                        </div>
                    </div>
                    <br>
                    <div class="card-body">

                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-users"></i></span>
                                                </span>
                                            <input type="text" name="new_customerName" id="new_customerName" class="form-control" placeholder="لاسم رباعي">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-indent-decrease"></i></span>
                                                </span>
                                            <input type="number" onchange="check_id()" id="new_customerId" name="customerId" class="form-control" placeholder="رقم الهوية">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-mobile3"></i></span>
                                                </span>
                                            <input type="number" class="form-control" placeholder="رقم الجوال">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-group-float">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-location4"></i></span>
                                                </span>
                                                <input type="text" name="new_customerAddress" id="new_customerAddress" class="form-control" placeholder="العنوان بالكامل">
                                            </div>
                                        </div>                                        </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">اغلاق</button>
                                <button type="button" class="btn bg-primary"><i class="icon icon-database-insert"></i>  حفظ</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
