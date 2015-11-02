<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Hightr</title>
    <link rel="shortcut icon" href="{!! asset('/facicon.ico') !!}" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('ckeditor/samples/css/samples.css') }}" />
    <link rel="stylesheet" href="{{ asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}" />
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckeditor/samples/sample.js') }}"></script>
    <script>

        function showResultTag(str) {


            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                    document.getElementById("livesearch").style.height="200px";
                    document.getElementById("livesearch").style.overflow="auto";
                }
            }

            xmlhttp.open("GET","admin/search?q="+str,true);
            xmlhttp.send();
        }
        function goBackTag() {
            document.getElementById("livesearch").style.height="0px";
        }
        function getTag(str){

        }


    </script>
</head>
<body>

	@yield('body')
    <script src="{{ asset('assets/scripts/frontend.js') }}" type="text/javascript"></script>
    <script src="{!! asset('js/jquery-1.11.2.min.js') !!}" ></script>
    <!-- jQuery
    <script src="{{ asset('templates/sb-admin-2/bower_components/jquery/dist/jquery.min.js') }}"></script>-->

    <!-- Bootstrap Core JavaScript
    <script src="{{ asset('templates/sb-admin-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>-->

    <!-- Metis Menu Plugin JavaScript
    <script src="{{ asset('templates/sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>-->

    <!-- Morris Charts JavaScript
    <script src="{{ asset('templates/sb-admin-2/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('templates/sb-admin-2/bower_components/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('templates/sb-admin-2/js/morris-data.js') }}"></script>-->

    <!-- Custom Theme JavaScript
    <script src="{{ asset('templates/sb-admin-2/dist/js/sb-admin-2.js') }}"></script>-->
    </body>

</html>