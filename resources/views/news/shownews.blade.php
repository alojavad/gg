@extends('app')

@section('content')
<div class="row">
    &nbsp;
</div>
<div class="col-md-3">
    <?php
    include ('js/date_time.php');
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
    ?>
    <div style="margin:0px auto; width:400px;padding:5px;border:1px solid #ccc;background:#FFF9F9;">
        <div style="text-align:center; direction:rtl; font:bold 15px/22px tahoma; direction:rtl; color:#093;"><?php echo " امروز $day_name ۱۳$year_number/$month_number/$day_number"; ?></div><br />
    </div>
    <div class="row">
    &nbsp;
    </div>
    @for ($i=0;$i<7;$i++)
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">fdsfdsf</div>
        <div class="panel-body">
            fsdfsdfdsf
        </div>
    </div>
</div>
    @endfor
</div>
<?php
try {
    echo $dat;
} catch (Exception $e) {
    echo '';
}
?>

<div class="col-md-6" dir="rtl">

<div class="panel" style="border-color: silver">
    <div class="panel-body">


    <div style="margin-bottom:15px; padding-right: 10px; padding-left: 10px;">
        <div class="news_toolbar">
            <div class="news_nav news_id_c"><span class="news_nav_title">کد خبر: </span>{!! $data->id !!}</div>
            <div class="news_nav news_comments">
                <span class="news_nav_title">تعداد نظرات: </span>
                <a href="#comments">{!! $data->id !!}نظر</a>
            </div>
            <div class="news_nav news_pdate_c">
                <span class="news_nav_title">تاریخ انتشار: </span>{!!$data->created_at!!}</div>
            <div class="wrapper"></div>
        </div> 	<div class="news_tools">
            <div class="news_path">
                <a href="{!! route('home') !!}">صفحه نخست</a>
            </div>
            <div title="نسخه چاپی" class="news_print_botton" onclick="window.open(&quot;/fa/print/210229&quot;, &quot;printwin&quot;,&quot;left=200,top=200,width=820,height=550,toolbar=1,resizable=0,status=0,scrollbars=1&quot;);"></div>
            <div title="ارسال به دوستان" class="news_emails_botton" onclick="window.open(&quot;/fa/send/210229&quot;, &quot;sendmailwin&quot;,&quot;left=200,top=100,width=370,height=400,toolbar=0,resizable=0,status=0,scrollbars=1&quot;);"></div>
            <a title="ذخیره" class="news_save_botton" href="/"></a>
            <a href="#" class="news_size_down"></a>
            <a href="#" class="news_size_reset"></a>
            <a href="#" class="news_size_up"></a>
            <div class="wrapper"></div>
        </div>
    </div>




    <div style="direction: rtl;">
        <div class="rutitr" style="text-align:center"></div>

        <div class="title" style="text-align:center;margin-bottom: 10px;margin-top: 4px;">
            <h1 style="padding: 0px;margin: 0px" class="title">
                <a href="#">{!! $data->title !!}</a> 	</h1>
        </div>


        <div class="subtitle" style="margin-bottom: 10px;text-align: justify;">{!!$data->abst !!}</a></div>
        <div class="body" style="text-align: justify;padding: 10px;">
            <a class="entekhab_lead2" href="">پایگاه خبری Hightr</a>
            <div align="justify">
                <br>
                <div align="center">
                    @if ($data->image !='')
                    <img style="border: medium none;" alt="{!!$data->abst!!}" src="{!!$data->image!!}" height="357" width="520"><br>
                    @endif

                </div>
                {!!$data->descr!!}</div>
            <div class="wrapper"></div>
        </div>

    </div>
    <div style="width: 100%;padding-top: 10px;">
    </div>
    <div style="width: 100%;">
        <div style="width: 610px;">
            <div style="width: 200px; float: right;padding-top: 14px;">
                <span style="padding: 0px 5px;" class="news_nav_toolbar"><a href="/" style="text-decoration: none;color: #000;"><img alt="" src="{!! asset('/images/home.gif')!!}" border="0"></a></span>
                <span style="padding: 0px 5px;" class="news_nav_toolbar" onclick="window.open(&quot;/fa/send/210229&quot;, &quot;sendmailwin&quot;,&quot;left=200,top=100,width=370,height=300,toolbar=0,resizable=0,status=0,scrollbars=1&quot;);"><img src="{!! asset('/images/email.gif')!!}" border="0" alt="send"></span>
                <span style="padding: 0px 5px;" class="news_nav_toolbar" onclick="window.open(&quot;/fa/print/210229&quot;, &quot;printwin&quot;,&quot;left=200,top=200,width=820,height=550,toolbar=1,resizable=0,status=0,scrollbars=1&quot;);"><img src="{!! asset('/images/print.gif')!!}" border="0" alt="print"></span>
                <a href="" style="padding: 0px 5px;" class="news_nav_toolbar"><img src="{!!asset('/images/save.gif')!!}" border="0" alt="print"></a>
            </div>
            <div class="share_to_con">
                <a href="http://www.facebook.com/share.php?u=http://www.entekhab.ir/fa/news/{!!$data->title!!}"  title="" rel="nofollow" target="_blank"> <img src="{!! asset('/images/kh_fb.gif')!!}" alt=""> </a>
                <a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=http://entekhab.ir/fa/news/210229/{!!$data->title!!}" rel="nofollow" title="" target="_blank"> <img src="{!! asset('/images/kh_g.gif')!!}" alt=""> </a>
                <a href="http://twitter.com/home?status={!!$data->title!!}" title="" rel="nofollow" target="_blank"> <img src="{!! asset('/images/kh_tw.gif')!!}" alt=""> </a>
                <div class="wrapper"></div>
            </div>
            <div class="wrapper"></div>
        </div>
    </div>






<div style="width: 580px; margin: 0px auto;">
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="http://entekhab.ir/fa/ads/redirect/a/273" target="_blank"><img alt="" style="width:130px;height:103px;border:0px;" src="/files/adv//273_844.jpg"></a></div>
        <div style="padding-bottom:5px;"><a href="http://entekhab.ir/fa/ads/redirect/a/686" target="_blank"><img alt="" style="width:130px;height:130px;border:0px;" src="/files/adv//881_272.jpg"></a></div>
        <div style="padding-bottom:5px;"><a href="http://entekhab.ir/fa/ads/redirect/a/612" target="_blank"><img alt="" style="width:130px;height:105px;border:0px;" src="/files/adv//754_119.jpg"></a></div>
    </div>
    <div class="wrapper"></div>
</div>

        </div>
</div>




<!-- Start Comments -->





<div class="contain" style="height: 33px;background: url('../images/bg_sar.gif') repeat-x;overflow: hidden">
    <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
    <a href="#" class="comments_topic">نظرات بینندگان</a>
    <div class="com_title_n">در انتظار بررسی: <span>{!! $data->id !!}</span>
    </div> 	<div class="com_title_p">انتشار یافته: <span>{!! $data->id !!}</span></div>
    <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
    <div class="wrapper"></div>
</div>



<div class="panel" style="border-color: silver">
    <div class="panel-body">






            <!--start comment -->



            @foreach ($comment as $db)


            <div style="width: 100%;margin-bottom: 25px;" id="comm_1928054">
                <!-- Start Comment Info Bar -->
                <div class="comm_info_bar">
                    <div class="comm_info">
                        <img alt="" src="{!! asset('/images/r_c_info.gif')!!}" class="fr_img">
                        <div class="comm_info_content">
                            <div class="comm_info_name">{!! $db -> name !!}</div> 			                   <span class="comm_sep">|</span> 			                   <div class="comm_info_country"><img title="Iran, Islamic Republic of" alt="Iran, Islamic Republic of" src="{!! asset('/images/ir.gif')!!}" border="0"></div>
                            <span class="comm_sep">|</span>
                            <div class="comm_info_date">{!! $db -> created_at !!}</div>
                        </div>
                        <img alt="" src="{!! asset('/images/l_c_info.gif')!!}" class="fr_img">
                    </div>
                    <div class="comm_rating">
                        <div class="rating_down" id="down_rate_1928054">{!! $db -> vote_down !!}</div>
                        <a onclick="commentDown(1928054);" class="rate_down_link" id="down_button_1928054"></a>
                        <a onclick="commentUp(1928054);" class="rate_up_link" id="up_button_1928054"></a>
                        <div class="rating_up" id="up_rate_1928054">{!! $db -> vote_up !!}</div>
                    </div>
                    <div class="comm_answer_link">
                        <a style="cursor:pointer" onclick="showreplay()">پاسخ</a>

                    </div>
                    <div class="wrapper"></div>
                </div>
                <div class="comments">
                    <img style="padding-left:3px;" src="../images/comments.gif" alt="">{!! $db -> descr !!}</div>
                <div id="answer_container_1928054" class="comments_form_container"></div>
                <div class="wrapper"></div>
                @foreach ($replay as $dbr)
                @if ($db->id == $dbr->comment_id)

                <div class="comm_answer">


                    <!-- <div class="comm_answer_title">پاسخ</div>-->

                    <div class="comm_answer_content">
                        <div class="comm_answer_line">
                            <div style="margin-bottom: 5px;">
                                <img alt="" src="{!!asset('/images/r_replay.gif')!!}" class="fr_img">
                                <div class="comment_answer_c">
                                    <div class="comment_answer_2">{!! $dbr->name!!}</div> 			                            <span>|</span>
                                    <img title="Iran, Islamic Republic of" alt="Iran, Islamic Republic of" src="{!!asset('/images/ir.gif')!!}" border="0" class="fr_img"> 			                            <span>|</span>
                                    <div class="comment_answer_5">{!! $dbr->created_at!!}</div>
                                    <div class="wrapper"></div>
                                </div>
                                <img alt="" src="{!!asset('/images/l_replay.gif')!!}" class="fr_img">
                                <div class="wrapper"></div>
                            </div>
                            <img style="padding-left:3px; border:0px;" src="{!!asset('/images/comments.gif')!!}" alt="">{!! $dbr->descr!!}</div>
                        <div class="wrapper"></div>


                    </div>
                    <div class="b_pasokh"></div>
                    <div class="wrapper"></div>
                </div>


                @endif
                @endforeach

                <!-- End Comment Info Bar -->

                <div id="answer_container_1928054" class="col-md-11" >
                    <div class="panel" style="border-color: silver;background-color: coral">
                        <div class="panel-body">

                            <form id="form-replay" class="form-horizontal" role="form" method="POST" action="{{ url('/news/sreplay') }}/{!!$db->id!!}">

                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div class="col-md-2">

                                    <button type="submit" class="btn btn-default">Replay</button>
                                </div>

<div class="col-md-10">

    <textarea class="form-control" id="InputDesc" name="descript"></textarea>
</div>



                            </form>

</div>
                        </div>



            </div>




            <!-- end of comment -->


            <div id="_ff_c"><embed type="application/x-shockwave-flash" src="/fa/comments/embed" width="1" height="1" style="undefined" id="_ff_" name="_ff_" quality="high" allowscriptaccess="always"></div>
            <script type="text/javascript">eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('2 6(){g h.i("7")};2 j(0){$.9(\'0\',0,{a:b,c:\'/\'})};2 k(){4 0="";$.l(\'/d/e/m\',{},2(3){3=n(\'(\'+3+\')\');0=3[\'0\'];$.9(\'0\',0,{a:b,c:\'/\'});4 f=6();f.o(0)})};4 5=p q("/d/e/r","7",\'1\',\'1\',\'8\');5.s("t","u");5.v("w");',33,33,'uid||function|data|var|so|get_FF|_ff_||cookie|expires|365|path|fa|comments|ff|return|document|getElementById|setUID|genUID|post|userid|eval|setData|new|SWFObject|embed|addParam|allowScriptAccess|always|write|_ff_c'.split('|'),0,{}))</script>
            <!-- End Comments --> 				<div class="wrapper"></div>



    <script>
        CKEDITOR.replace('desc');
    </script>



</div>

        @endforeach
        <div class="panel" style="border-color: silver">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/news/scommand') }}/{!!$data->id!!}">

                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="col-md-2">

                        <button type="submit" class="btn btn-default">Comment</button>
                    </div>
                    <div class="col-md-10">

                        <textarea class="form-control" id="InputDesc" name="descrip"></textarea>
                    </div>

                </form>
            </div>


        </div>
</div>
</div>
</div>





<div class="col-md-3">
    @for ($i=0;$i<3;$i++)
    <div class="panel panel-default">
            <div class="panel-title">fdsfdsf</div>
                <div class="image">
                    <a href="news/..." target="_blank">
                        <script>
                            function opacUp(){
                                document.getElementById("spec1").style.opacity=".5";
                            }
                        </script>
                        <img src="..." id="spec1" style="width: 300px;height: 230px"
                             alt="..." class="img-thumbnail" onmouseover="opacUp()">

                    </a>
                </div>
                <div class="row">
                    &nbsp;
                </div>


    </div>
    @endfor
</div>



@endsection
