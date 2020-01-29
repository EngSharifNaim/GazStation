<div id="modal_theme_info_newItem" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title"><i class="icon icon-users2"></i>بيانات الصنف الجديد</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">

                    <br>
                    <div class="card-body">

                        <form method="post" name="add_item" id="add_item">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-users"></i></span>
                                                </span>
                                            <input type="text" name="itemName" id="itemName" class="form-control" placeholder="اسم الصنف">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <select onchange="showStore()" name="isStore" id="isStore" class="form-control">
                                            <optgroup >نوع الصنف</optgroup>

                                                <option value="1">صنف مخزني</option>
                                                <option value="0">صنف غير مخزني</option>

                                        </select>

                                    </div>
                                </div>

                                <div id="store_item_div" class="col-md-6" style="display: none">
                                    <div class="form-group form-group-float">
                                        <select name="storeItem" id="storeItem" class="form-control">
                                            <option value="0">اختر الصنف المخزني</option>
                                            @foreach($store_items as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group form-group-float">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-expand"></i></span>
                                                </span>
                                                <input type="text" name="new_itemSize" id="new_itemSize" class="form-control" placeholder="الحجم">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group form-group-float">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-price-tag"></i></span>
                                                </span>
                                                <input type="text" name="new_itemPrice" id="new_itemPrice" class="form-control" placeholder="السعر">
                                            </div>
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
    function showStore(){
        if(document.getElementById('isStore').value == 0){
            $('#store_item_div').show();
        }
        else
        {
            $('#store_item_div').hide();

        }
    }
    $('#add_item').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{route("newItem")}}',
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

</script>
