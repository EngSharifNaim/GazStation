<div class="card">

    <div class="card-body">
        <div class="row">
            <div class="col col-md-6">
                <div class="row">
                    @foreach($items as $item)
                        <div class="col-sm-6 col-xl-3 item-button">
                            <div class="card card-body bg-blue-300 has-bg-image" onclick="newTiket({{$item->size . ',' . $item->price . ',' . $item->id . ',' . $item->store_item}})">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{$item->name}}</h3>
                                        <span class="text-uppercase font-size-lg">{{$item->price}}  شيكل</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="col-sm-6 col-xl-3 item-button">
                            <div class="card card-body bg-success has-bg-image" data-toggle="modal" data-target="#modal_theme_info_newItem">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="mb-0"><i class="icon icon-add-to-list"></i>   صنف جديد </h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>


                </div>
            </div>
            <div class="col col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">تفاضيل الفتورة</h6>

                            </div>

                            <div class="card-body">
                                <form id="send_order" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>جديد</label>
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info"> <i class="icon-user-plus"></i></a>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>الحساب</label>
                                                <select name="Customers" id="Customers" class="form-control select2 select2-hidden-accessible" data-placeholder="الزبون" tabindex="-1" aria-hidden="true">
                                                    <option></option>
                                                    @foreach($customers as $customer)
                                                        <option name="{{$customer->name}}" value="{{$customer->id}}" data-name="{{$customer->name}}" data-amount="{{$customer->amount}}" @if($customer->id == 29) selected @endif>{{$customer->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" hidden name="item_storeid" id="item_storeid" class="form-control" value="0" placeholder="رقم الحساب">
                                                <input type="text" hidden name="itemId" id="itemId" class="form-control" value="0" placeholder="رقم الحساب">
                                                <input type="text" hidden name="customerId" id="customerId" class="form-control" value="0" placeholder="رقم الحساب">
                                                <label>اسم الزبون</label>
                                                <input type="text" name="customerName" id="customerName" class="form-control" value="مبيعات نقدية" placeholder="رقم الحساب">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>الرصيد</label>

                                                <input type="text" name="amount" disabled id="amount" class="form-control" placeholder="الرصيد">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" hidden name="butSize" id="butSize" class="form-control" placeholder="الحجم">
                                                <label>الحجم</label>
                                                <input type="text" disabled="" id="butSize_d" class="form-control" placeholder="الحجم">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" hidden name="butPrice" id="butPrice" class="form-control" placeholder="السعر">
                                                <label>السعر</label>
                                                <input type="text" disabled="" id="butPrice_d" class="form-control" placeholder="السعر">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>الكمية</label>
                                                <input type="number" name="butQty" id="butQty" onchange="changeQty()" value="1" class="form-control" placeholder="الكمية">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" hidden name="totalPrice" id="totalPrice" class="form-control" placeholder="الاجمالي">
                                                <label>الاجمالي</label>
                                                <input type="text" disabled="" id="totalPrice_d" class="form-control" placeholder="الاجمالي">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>قيمة الخصم</label>
                                                <input type="number" onchange="afterdiscount()" name="discount" id="discount" value="0" class="form-control" placeholder="الخصم">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>الاجمالي بعد الخصم</label>
                                                <input type="number" name="total_after_discount" id="total_after_discount" value="0" class="form-control" placeholder="الخصم">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>نقدي</label>
                                                <input type="number" onchange="paidmethod()" name="prepaid_amount" id="prepaid_amount" value="0" class="form-control" placeholder="الخصم">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>آجل</label>
                                                <input type="number" name="postpaid_amount" id="postpaid_amount" value="0" class="form-control" placeholder="الخصم">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-elements d-flex align-items-center">
                                        <ul class="list-inline list-inline-condensed mb-0">
                                            <li class="list-inline-item"><a class="btn btn-light border-transparent"><input checked name="print_tiket" type="checkbox">طباعة تذكرة</a></li>
                                            <li class="list-inline-item"><button type="submit" value="noprint" id="saveWithOutPrint" class="btn btn-dark">حفظ الطلبية <i class="icon-store ml-2"></i></button></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#send_order').on('submit', function(event){
            event.preventDefault();
            if($('#butSize').val() == '')
            {
                alert('الرجاء اختيار صنف المبيعات')
            }
            else {
                $.ajax({
                    url: '{{route("send_order")}}',
                    method: 'post',
                    data: new FormData(this),
                    // dataType:'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $('#saveWithOutPrint').attr('disabled', 'disabled');
                    },
                    success: function (data) {
                        if (data.error) {
                            var error_html = '';
                            for (var count = 0; count < data.error.length; count++) {
                                error_html += '<p>' + data.error[count] + '</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                        } else {
                            $('#saveWithOutPrint').attr('disabled', false);

                            if (data.print) {
                                send_Form();
                            } else {
                                alert(data.msg);
                            }

                        }
                    }
                })
            }
        });

    })
    function newTiket(butSize,butPrice,itemId,store_item) {
        // alert(parseFloat(butPrice));
        $('#itemId').val(itemId);
        $('#butSize').val(butSize);
        $('#item_storeid').val(store_item);
        $('#butSize_d').val(butSize);
        $('#butPrice').val(butPrice);
        $('#butPrice_d').val(butPrice);
        $('#totalPrice').val(parseInt($('#butQty').val()) * parseInt(butPrice));
        $('#total_after_discount').val(parseInt($('#butQty').val()) * parseInt(butPrice));
        $('#prepaid_amount').val(parseInt($('#butQty').val()) * parseInt(butPrice));
        $('#totalPrice_d').val(parseInt($('#butQty').val()) * parseInt(butPrice));
    }
    function changeQty() {

        $('#totalPrice').val(parseFloat($('#butPrice').val()) * parseFloat($('#butQty').val()));
        $('#prepaid_amount').val(parseFloat($('#butPrice').val()) * parseFloat($('#butQty').val()));
        $('#totalPrice_d').val(parseFloat($('#butPrice').val()) * parseFloat($('#butQty').val()));
    }
    function paidmethod() {

        $('#postpaid_amount').val(parseFloat($('#total_after_discount').val()) - parseFloat($('#prepaid_amount').val()));
    }
    function afterdiscount() {

        $('#total_after_discount').val(parseFloat($('#totalPrice').val()) - parseFloat($('#discount').val()));
        $('#prepaid_amount').val(parseFloat($('#total_after_discount').val()));
    }

    $("#Customers").change(function () {
        // alert($(this).find(':selected').data('amount'));
        $('#customerName').val('');
        $('#customerId').val($(this).val());
        $('#customerName').val($(this).find(':selected').data('name'));
        $('#amount').val($(this).find(':selected').data('amount'));
    });

    function send_Form() {
        var strWindowFeatures = "location=no,height=700,width=600,scrollbars=yes,status=yes";
        var URL =window.location.origin + "/blog/public/home/tiket" + "/" + $('#customerName').val();
        var win = window.open(URL, "_blank", strWindowFeatures);
        location.reload();

    }
    function item_report(id,period) {
        var strWindowFeatures = "location=no,height=700,width=900,scrollbars=yes,status=yes";
        var URL =window.location.origin + "/blog/public/itemReport/" + id + '/' + period;
        var win = window.open(URL, "_blank", strWindowFeatures);

    }
    function customerReport(id) {
        var strWindowFeatures = "location=no,height=700,width=1000,scrollbars=yes,status=yes";
        var URL =window.location.origin + "/blog/public/customerReport/" + id;
        var win = window.open(URL, "_blank", strWindowFeatures);

    }
</script>
<script type="text/javascript">
    $(".select2").select2();
</script>

