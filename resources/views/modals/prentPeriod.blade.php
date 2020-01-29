<div id="#modal_theme_print_period_{{$customer->id}}" class="modal fade"  style="padding-right: 15px;">
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

                        <form method="post" name="send_report_period_{{$customer->id}}" id="send_report_period_{{$customer->id}}">
                            @csrf
                            <div class="row">
                                <div class="mb-4">
                                    <h6 class="font-weight-semibold">Basic options</h6>
                                    <p>The basic setup requires targetting an input element and invoking the picker.</p>
                                    <div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
                                        <input type="text" class="form-control pickadate picker__input" placeholder="Try me…" readonly="" id="P1242019796" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P1242019796_root"><div class="picker" id="P1242019796_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">January</div><div class="picker__year">2020</div><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P1242019796_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P1242019796_table" title="Next month"> </div></div><table class="picker__table" id="P1242019796_table" role="grid" aria-controls="P1242019796" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1577570400000" role="gridcell" aria-label="29 December, 2019">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1577656800000" role="gridcell" aria-label="30 December, 2019">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1577743200000" role="gridcell" aria-label="31 December, 2019">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1577829600000" role="gridcell" aria-label="1 January, 2020">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1577916000000" role="gridcell" aria-label="2 January, 2020">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578002400000" role="gridcell" aria-label="3 January, 2020">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578088800000" role="gridcell" aria-label="4 January, 2020">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578175200000" role="gridcell" aria-label="5 January, 2020">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578261600000" role="gridcell" aria-label="6 January, 2020">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578348000000" role="gridcell" aria-label="7 January, 2020">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578434400000" role="gridcell" aria-label="8 January, 2020">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1578520800000" role="gridcell" aria-label="9 January, 2020" aria-selected="true" aria-activedescendant="true">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578607200000" role="gridcell" aria-label="10 January, 2020">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578693600000" role="gridcell" aria-label="11 January, 2020">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578780000000" role="gridcell" aria-label="12 January, 2020">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578866400000" role="gridcell" aria-label="13 January, 2020">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1578952800000" role="gridcell" aria-label="14 January, 2020">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579039200000" role="gridcell" aria-label="15 January, 2020">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579125600000" role="gridcell" aria-label="16 January, 2020">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579212000000" role="gridcell" aria-label="17 January, 2020">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579298400000" role="gridcell" aria-label="18 January, 2020">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1579384800000" role="gridcell" aria-label="19 January, 2020">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579471200000" role="gridcell" aria-label="20 January, 2020">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579557600000" role="gridcell" aria-label="21 January, 2020">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579644000000" role="gridcell" aria-label="22 January, 2020">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579730400000" role="gridcell" aria-label="23 January, 2020">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579816800000" role="gridcell" aria-label="24 January, 2020">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579903200000" role="gridcell" aria-label="25 January, 2020">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1579989600000" role="gridcell" aria-label="26 January, 2020">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1580076000000" role="gridcell" aria-label="27 January, 2020">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1580162400000" role="gridcell" aria-label="28 January, 2020">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1580248800000" role="gridcell" aria-label="29 January, 2020">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1580335200000" role="gridcell" aria-label="30 January, 2020">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1580421600000" role="gridcell" aria-label="31 January, 2020">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580508000000" role="gridcell" aria-label="1 February, 2020">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580594400000" role="gridcell" aria-label="2 February, 2020">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580680800000" role="gridcell" aria-label="3 February, 2020">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580767200000" role="gridcell" aria-label="4 February, 2020">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580853600000" role="gridcell" aria-label="5 February, 2020">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1580940000000" role="gridcell" aria-label="6 February, 2020">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1581026400000" role="gridcell" aria-label="7 February, 2020">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1581112800000" role="gridcell" aria-label="8 February, 2020">8</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1579384800000" aria-controls="P1242019796" disabled="disabled">Today</button><button class="picker__button--clear" type="button" data-clear="1" aria-controls="P1242019796" disabled="disabled">Clear</button><button class="picker__button--close" type="button" data-close="true" aria-controls="P1242019796" disabled="disabled">Close</button></div></div></div></div></div></div>
                                    </div>
                                </div>

                            </div>

                            <div class="text-right">
                                <button type="button" class="btn btn-dark" id="close_modal" data-dismiss="modal">اغلاق</button>
                                <button type="button" onclick="customerReport({{$customer->id}})" class="btn bg-primary"><i class="icon icon-database-insert"></i>  عرض التقرير</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

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
