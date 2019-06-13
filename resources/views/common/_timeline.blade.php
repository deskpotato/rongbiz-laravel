<div class="container">
    <div class="row">
        <div class="col-md-12 about">
            <div class="about-body">
                <div class="about-content process-content">
                    <div class="process-timeline draggable ui-widget-content">
                        <div id="draggable">
                            <div class="process-body">
                                <div class="process-row">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    <div class="process-content">
                                        <h2> 2012年6月 </h2>
                                        <p>中国<br />容商天下<br />首次提出“C2P工业互联网生态云”<br />概念，并着手规划和开发
                  </p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2013年4月 </h2>
                                        <p>  德国<br />提出“工业4.0”</p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2013年8月 </h2>
                                        <p> 中国<br />容商天下<br />“工业云”完成开发<br />并上线运营</p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2014年3月 </h2>
                                        <p> 美国<br />GE、Intel、Cisco、AT&T、IBM <br />成立“工业互联网联盟”</p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2015年3月 </h2>
                                        <p>中国<br />发布“互联网+”行动计划</p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2015年5月 </h2>
                                        <p> 中国<br />发布“中国制造2025”<br />行动纲领</p>
                                    </div>
                                </div>
                                <div class="process-row ">
                                    <div class="process-time">
                                        <div class="time-con"></div>
                                    </div>
                                    
                                    <div class="process-content">
                                        <h2> 2016年5月 </h2>
                                        <p>
                                            中国<br />发布“中国制造2025”<br />行动纲领
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <span id="processLeft"></span>
                    <span id="processRight"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('static/common/js/jquery-ui.min.js') }}"></script>

<script>
    $(function(){
        var aboutWidth = $(".about").width();
        $(".process-timeline").width(aboutWidth);
        var lastRightSpeed = 40; //控制拖动到最右边点是否对准时间刻度线上
        var processtimelineW = $(".process-timeline").width();
        var processrowLength = $(".process-body").find('.process-row').length;
        var processbodyNumber = processrowLength*200;
        $(".process-body").css({"width":processbodyNumber});

        if(processrowLength < 5) 
        {
            $("#draggable").draggable('disable');
            return;
        }
        $("#processLeft").click(function(){
            var processContentW = $(".process-content").width();
            var processBodyW = $(".process-body").width();
            var processBodyML = parseInt($(".ui-draggable").css("left"));
            if ( (Math.abs(processBodyML)+processtimelineW) >= processBodyW ) {
                return;
            }
            $(".ui-draggable").css({"left":processBodyML-50});
        });
        $("#processRight").click(function(){
            var processBodyML = parseInt($(".ui-draggable").css("left"));
            if (processBodyML == 0) {
                return;
            }
            $(".ui-draggable").css({"left":processBodyML+50});
        });

        $(document).keydown(function(event){
            if (event.keyCode == 39) {
               $("#processLeft").click();
            }
            if (event.keyCode == 37) {
               $("#processRight").click();
            }
        });

        $("#draggable").draggable({
            cursor: "move",
            axis: 'x',
            grid: [50, 20],
            stop: function(event, ui){
                var FleftNumber = parseInt($("#draggable").css("left"));
                if (FleftNumber > 0) {
                    $("#draggable").animate({"left": 0}, 500);
                    return;
                };
                var leftNumber = Math.abs(FleftNumber);
                leftNumber = leftNumber + processtimelineW;
                if (leftNumber > processbodyNumber) 
                {
                    leftNumber = processbodyNumber;
                    $("#draggable").animate({"left": -(leftNumber-processtimelineW + lastRightSpeed)}, 500);
                }
            }
        });
    })
</script>
