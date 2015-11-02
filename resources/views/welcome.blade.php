<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{!! Inspiring::quote() !!}</div>
			</div>
		</div>
	</body>
</html>

<div class="col1">

    <!--
     <div class="box" style="position: relative;">
         <div class="box_title_container">
             <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img" style="margin-left: 3px;">
             <div class="box_title">
                 پیشنهاد انتخاب
             </div>
             <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
             <div class="wrapper"></div>
         </div>
         <div class="cycle_box_content">
             <div id="pishnehad_2" class="pishnahad_news">
                 <div class="pishnahad_news cycle_7" style="height: 173px; position: relative; overflow: hidden;">
                     <div class="cycle_film_item" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 2; opacity: 1;">
                         <a href="/fa/news/209666" target="_blank">
                             <img class="cycle_film_pic" alt="" src="{!! asset('/images/94878_281.jpg')!!}" width="187">
                         </a>
                         <div class="title6">
                             <a href="/fa/news/209666" target="_blank" style="line-height: 150%">روایت یک منبع قضایی از دلیل بازداشت بقایی: او از مدت‌ها قبل احضار شده بود و نمی‌آمد</a>
                         </div>
                         <div class="wrapper"></div>
                     </div>
                     <div class="cycle_film_item" style="position: absolute; top: 0px; left: 197px; display: none; z-index: 1;">
                         <a href="/fa/news/209638" target="_blank">
                             <img class="cycle_film_pic" alt="" src="{!! asset('/images/94861_243.jpg')!!}" width="187">
                         </a>
                         <div class="title6">
                             <a href="/fa/news/209638" target="_blank" style="line-height: 150%">مفتي سعودي فتواي جهاد نکاح با محارم را صادر کرد!</a>
                         </div>
                         <div class="wrapper"></div>
                     </div>

                 </div>
             </div>
         </div>
         <div class="next_prev">
             <a href="#" class="r_cycle_prev" id="prev7"></a>
             <img alt="" src="{!! asset('/images/sp_r_cycle.gif')!!}" class="fr_img" style="margin-left: 5px;">
             <a href="#" class="r_cycle_next" id="next7"></a>
         </div>

         <div class="b_curv_cycle">
             <img alt="" src="{!! asset('/images/b_r_cycle.gif')!!}" class="fr_img">
             <img alt="" src="{!! asset('/images/b_l_cycle.gif')!!}" class="fl_img">
             <div class="wrapper"></div>
         </div>
     </div>
     -->



    <div class="box">
        <div class="box_title_container">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img" style="margin-left: 3px;">
            <div class="box_title">
                یادداشت
            </div>
            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
        <div class="box_content">

            @foreach ($note as $db)
            <div style="margin-bottom: 10px;width: 100%;">
                <a class="picLink" href="news/" target="_blank">
                    <img alt="{!!$db->title!!}" class="fr" src="{!! $db->image!!}" width="60" style="margin-left: 5px;">
                </a>
                <div class="rutitr"></div>
                <a class="title5" href="news/{!!$db->id!!}" title="08:00 - 1394/03/20" target="_blank">
                    <img src="{!! asset('/images/dot.gif')!!}" border="0" alt="">{!! $db->title !!}</a><br>
                <div class="wrapper"></div>
            </div>
            @endforeach

            <div class="wrapper"></div>
        </div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}">
            </a>
        </div>
    </div>
    <div class="wrapper"></div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>
    <div class="box">
        <div class="box_title_container">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img" style="margin-left: 3px;">
            <div class="box_title">
                گزارش
            </div>
            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
        <div class="box_content">
            @foreach ($report as $db)
            <div style="margin-bottom: 10px;width: 100%;">
                <a class="picLink" href="news/{!!$db->id!!}" target="_blank">
                    <img alt="{!!$db->title!!}" class="fr" src="{!! $db->image !!}" width="60" style="margin-left: 5px;">
                </a>
                <div class="rutitr"></div>
                <a class="title5" href="news/{!!$db->id!!}" title="08:00 - 1394/03/02" target="_blank">
                    <img src="{!! asset('/images/dot.gif')!!}" border="0" alt="">{!! $db->title !!}</a><br>
                <div class="wrapper"></div>
            </div>
            @endforeach



            <div class="wrapper"></div>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>
    <div class="box">
        <div class="box_title_container">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img" style="margin-left: 3px;">
            <div class="box_title">
                گفتگو
            </div>
            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
        <div class="box_content">
            @foreach ($talk as $db)
            <div style="margin-bottom: 10px;width: 100%;">
                <a class="picLink" href="news/{!!$db->id!!}" target="_blank">
                    <img alt="{!!$db->title!!}" class="fr" src="{!! $db->image !!}" width="60" style="margin-left: 5px;">
                </a>
                <div class="rutitr"></div>
                <a class="title5" href="news/{!!$db->id!!}" title="10:08 - 1394/03/17" target="_blank">
                    <img src="{!! asset('/images/dot.gif')!!}" border="0" alt="">{!! $db->title !!}</a><br>
                <div class="wrapper"></div>
            </div>
            @endforeach

            <div class="wrapper"></div>
        </div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>






</div>


<div class="col2">
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('images/890_775.gif')!!}"></a>
        </div> </div>
    <div class="wrapper"></div>
    <div class="wrapper"></div>
    <div style="width: 100%;margin-bottom: 5px;">
        <div class="titr1_title" dir="rtl">تیتر یک</div>
        <div class="titr1_content">
            <div class="titr1_news">
                <div class="titr1_items">
                    <div style="text-align: right;">
                        @if ($one!="")
                        {!!$one->refre!!}
                        @endif
                    </div>
                    @if ($one!="")
                    <div class="titr1_item">
                        <a class="picLink" href="news/{!!$one->id!!}" target="_blank" title="@if ($one!=""){!!$one->title!!}@endif">
                        <img alt=""@if ($one!=""){!!$one->title!!}@endif" src="@if ($one!=""){!!$one->image!!}@endif" border="0" width="354" height="235" class="titr1_img">
                        </a>
                        <div class="titr1_text">
                            <div class="rutitr" style="text-align: center;">

                            </div>
                            <div style="text-align: center;">
                                <img alt="" src="{!! asset('images/tik.gif')!!}" border="0" class="fr_img">
                                <a class="title8" href="news/{!!$one->id!!}" target="_blank" title="@if ($one!=""){!!$one->title!!}@endif" style="font-family: nassim-bold;">
                                @if ($one!=""){!!$one->title!!}@endif
                                </a>
                            </div>
                            <div class="lead1">@if ($one!=""){!!$one->abst!!}@endif</div>
                            <div class="wrapper"></div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="titr1_pager">
            <div class="titr1_btn_holder">
                <a href="#" class="titr1_next"></a>
            </div>
            <img alt="" src="{!! asset('/images/sp_b_cycle_titr1.gif')!!}" class="fr_img">

            <div class="titr1_btn_holder">
                <a href="#" class="titr1_prev"></a>
            </div>
            <div class="wrapper"></div>
        </div>
        <img alt="" src="{!! asset('images/b_kh_v.gif')!!}" class="body_img">
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('images/890_775.gif')!!}"></a>
        </div>
    </div>

    <div class="wrapper"></div>
    <!-- end of titr aval -->
    <!-- vasate site  -->
    <div class="r_box">
        <div class="r_box_title" style="text-align: right">خبر ویژه</div>


        <div class="r_box_content">

            @foreach ($spec as $db)

            <div style="width: 100%;direction: rtl;">
                <div align="justify" class="rutitr"></div>
                <div style="margin-bottom: 5px;text-align: justify;">
                    <img alt="" src="{!! asset('images/tik.gif')!!}" border="0">
                    <a class="title3" href="news/{!!$db->id!!}" title="{!! $db->title !!}"target="_blank">{!! $db->title !!}</a> 				</div>
                <a class="picLink" href="news/{!!$db->id!!}" target="_blank">
                    <img alt="{!! $db->abst !!}" class="fl" src="{!! $db->image !!}" width="101" style="margin-right: 8px;"> 				</a>
                <div class="lead1">{!! $db->abst !!}</div>
                <div class="wrapper"></div>
                <div class="wrapper"></div> 			</div>
            <div class="sp_kh"></div>

            @endforeach

        </div>











        <img alt="" src="{!! asset('images/b_kh_v.gif')!!}" class="body_img">
    </div>
    <div class="wrapper"></div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>
    <!-- end of vasat -->















    <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">


        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!--
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div role="tabpanel">



    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">خبری</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ورزشی</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">تکنولوژی</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">اجتماعی</a></li>

            <li >&nbsp;</li>
            <li><a href="{!! url('/') !!}">Home</a></li>
            <li >&nbsp;</li>
            <li><a href="{!! url('/tag') !!}">Tag</a></li>
            <li >&nbsp;</li>
            <li><a href="{!! url('/news/create') !!}">Add News</a></li>
            <li >&nbsp;</li>
            <li><button type="button" class="btn btn-lg btn-info" onclick="location.href='{!! route("laravel1") !!}'" >laravel(persian)</button></li>
            <li >&nbsp;</li>
        <!--
            <li ><button type="button" class="btn btn-lg btn-info" ><a href="{!!URL::to('forum')!!}">Forum</a> </button></li>
            <li >&nbsp;</li>
            </ul>
            -->










    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
        <li><a href="{!! url('/auth/login') !!}">Login</a></li>
        <li><a href="{!! url('/auth/register') !!}">Register</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{!! Auth::user()->name !!} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{!! url('/news/create') !!}">Add news</a></li>
                <li><a href="{!! url('/tag') !!}">Tag</a></li>
                <li><a href="{!! url('/laravel/laravel') !!}">Laravel</a></li>
                <li><a href="{!! url('/auth/logout') !!}">Logout</a></li>
            </ul>
        </li>
        @endif
    </ul>





    <div class="col-md-12"  style="align-content: center;">

    <div class="col-md-4" style="float: left">



    <div class="col-md-4" style="float: left">
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper">

        </div>

        <div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
        <div class="wrapper"> </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper"></div>


        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="c_tabs">

            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @if ($specss!="")
                    <div class="item active" style="height: 250px">
                        <a href="/news/{!!$specss->id!!}" target="_blank">
                            <img src="{!! $specss->image !!}" alt="{!! $specss->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $specss->title !!}
                        </div>
                    </div>
                    @endif
                    @foreach ($specs as $db)
                    <div class="item" style="height: 250px">
                        <a href="/news/{!!$db->id!!}" target="_blank">
                            <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $db->title !!}
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
            <div class="c_tabs_content content_tabs">
                <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
                    <div style="width: 100%; height: 100%;">
                        @if ($bests!="")
                        @foreach ($bests as $db)
                        @if (($db->id %2)==0)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                        </div>
                        @endif
                        @if (($db->id %2)==1)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                        </div>
                        @endif
                        @endforeach
                        @endif



                        <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
                    </div>
                </div>




            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>

        <div class="c_tabs">
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>

            <div class="c_tabs_content content_tabs jquery_odd_background">
                <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
                    @if ($lasts!="")
                    @foreach ($lasts as $db)
                    @if (($db->id %2)==0)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @if (($db->id %2)==1)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @endforeach
                    @endif



                </div>






            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>
    </div>
    <div class="adv_col">



        <div class="wrapper"></div>
    </div>
    </div>


    <div class="col-md-4" style="float: left">



    <div class="col-md-4" style="float: left">
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper">

        </div>

        <div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
        <div class="wrapper"> </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper"></div>


        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="c_tabs">

            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @if ($speckk!="")
                    <div class="item active" style="height: 250px">
                        <a href="/news/{!!$speckk->id!!}" target="_blank">
                            <img src="{!! $speckk->image !!}" alt="{!! $speckk->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $speckk->title !!}
                        </div>
                    </div>
                    @endif
                    @foreach ($speck as $db)
                    <div class="item" style="height: 250px">
                        <a href="/news/{!!$db->id!!}" target="_blank">
                            <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $db->title !!}
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
            <div class="c_tabs_content content_tabs">
                <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
                    <div style="width: 100%; height: 100%;">
                        @if ($bestk!="")
                        @foreach ($bestk as $db)
                        @if (($db->id %2)==0)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                        </div>
                        @endif
                        @if (($db->id %2)==1)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                        </div>
                        @endif
                        @endforeach
                        @endif



                        <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
                    </div>
                </div>




            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>

        <div class="c_tabs">
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>

            <div class="c_tabs_content content_tabs jquery_odd_background">
                <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
                    @if ($lastk!="")
                    @foreach ($lastk as $db)
                    @if (($db->id %2)==0)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @if (($db->id %2)==1)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @endforeach
                    @endif



                </div>






            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>
    </div>
    <div class="adv_col">



        <div class="wrapper"></div>
    </div>
    </div>


    <div class="col-md-4" style="float: left">



    <div class="col-md-4" style="float: left">
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper">

        </div>

        <div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
        <div class="wrapper"> </div>
        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="wrapper"></div>


        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;">
                <a href="{!! url('/') !!}" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
        </div>
        <div class="c_tabs">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @if ($spectt!="")
                    <div class="item active" style="height: 250px">
                        <a href="/news/{!!$spectt->id!!}" target="_blank">
                            <img src="{!! $spectt->image !!}" alt="{!! $spectt->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $spectt->title !!}
                        </div>
                    </div>
                    @endif
                    @foreach ($spect as $db)
                    <div class="item" style="height: 250px">
                        <a href="/news/{!!$db->id!!}" target="_blank">
                            <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                        <div class="carousel-caption">
                            {!! $db->title !!}
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
            <div class="c_tabs_content content_tabs">
                <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
                    <div style="width: 100%; height: 100%;">
                        @if ($bestt!="")
                        @foreach ($bestt as $db)
                        @if (($db->id %2)==0)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                        </div>
                        @endif
                        @if (($db->id %2)==1)
                        <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                            <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                            <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                        </div>
                        @endif
                        @endforeach
                        @endif



                        <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
                    </div>
                </div>




            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>

        <div class="c_tabs">
            <div class="c_tabs_title title_tabs" dir="rtl">
                <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
                <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

                <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>

            <div class="c_tabs_content content_tabs jquery_odd_background">
                <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
                    @if ($lastt!="")
                    @foreach ($lastt as $db)
                    @if (($db->id %2)==0)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @if (($db->id %2)==1)

                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                    </div>
                    @endif
                    @endforeach
                    @endif



                </div>






            </div>
            <div class="b_curv1" style="margin-bottom: 5px;">
                <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
                <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
                <div class="wrapper"></div>
            </div>
        </div>

        <div class="ads" style="display:none;">
            <div style="padding-bottom:5px;"><a href="/" target="_blank">
                    <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
            </div>
        </div>
        <div class="wrapper"></div>
    </div>
    <div class="adv_col">



        <div class="wrapper"></div>
    </div>
    </div>








    </div>
    </div>


    </nav>








</div>
