<div id="modal_theme_info_editPrices" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title"><i class="icon icon-users2"></i>تعديل الأسعار</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">

                    <br>
                    <div class="card-body">

                        <form method="post" name="edit_prices" action="{{url('/editPrices')}}" id="edit_prices">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <span class="form-control btn-warning">اسم الصنف</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <span class="form-control btn-warning">سعر الصنف</span>
                                    </div>
                                </div>
                            </div>

                        @foreach($items as $item)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-store"></i></span>
                                                </span>
                                            <input type="text" hidden name="itemEditId[]" id="itemEditId" value="{{$item->id}}" class="form-control">
                                            <input type="text" name="itemEditName[]" id="itemEditName" value="{{$item->name}}" class="form-control" placeholder="اسم الصنف">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-price-tag"></i></span>
                                                </span>
                                            <input type="text" name="itemEditPrice[]" id="itemEditPrice" value="{{$item->price}}" class="form-control" placeholder="اسم الصنف">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
