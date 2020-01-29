<div id="modal_theme_info_order_in" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title"><i class="icon icon-users2"></i>طلبية مستريات جديدة</h6>
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

                        <form name="in_order" id="in_order" method="post" action="{{url('/in_order')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-users"></i></span>
                                                </span>
                                            <select type="text" name="order_supplier_name" id="order_supplier_name" class="form-control" placeholder="ختر المورد">
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-indent-decrease"></i></span>
                                                </span>
                                            <select type="text" name="order_item_name" id="order_item_name" class="form-control" placeholder="الصنف">
                                                @foreach($stores as $store)
                                                    <option value="{{$store->item_id}}">{{$store->item_name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-list-numbered"></i></span>
                                                </span>
                                            <input type="number" name="order_item_qty" id="order_item_qty" class="form-control" placeholder="الكمية">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-price-tag"></i></span>
                                                </span>
                                            <input type="number" name="order_item_price" id="order_item_price" class="form-control" placeholder="السعر">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="button" class="btn btn-dark" id="close_modal" data-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn bg-primary"><i class="icon icon-database-insert"></i>  حفظ</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#customer_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{route("send_customer")}}',
            method:'post',
            data:  new FormData(this),
            // dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    $('#saveWithOutPrint').attr('disabled', false);


                    alert(data.msg);
                    location.reload();



                }
            }
        })
    });
    $('#close_modal').on('click',function () {
        $('#saveWithOutPrint').attr('disabled', false);

    })
</script>
