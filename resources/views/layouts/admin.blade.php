<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>system</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="#" >
		<link rel ="stylesheet" href="">
		<link rel="stylesheet" type="text/css" href="{{asset('urc_asset/js/bootstrap3/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('urc_asset/js/font-awesome/css/font-awesome.min.css')}}" />
		<link rel="stylesheet" href="css/private_message.css" />

		
		<link rel="stylesheet" type="text/css" href="{{asset('urc_asset/css/style.css?v=1.0.6')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('urc_asset/js-beta/colorbox/colorbox.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('urc_asset/css/admin_menu.css')}}" />

		<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css"/>



		<script type="text/javascript" src="{{asset('urc_asset/js/jquery/jquery-1.10.2.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js/bootstrap3/js/bootstrap.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('urc_asset/js/jquery-ui/jquery-ui.js')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js/jquerytools/jquery.tools.min.js?v=1')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js/jqueryform/jquery.form.min.js?v=1')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js-beta/colorbox/jquery.colorbox-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js/private_notificationl.js')}}"></script>

		<script src="{{asset('urc_asset/js/vue.js?v=2.4.2')}}"></script>



		<script type="text/javascript" src="{{asset('urc_asset/js/json/json2.js?v=1')}}"></script>
		<script type="text/javascript" src="{{asset('urc_asset/js/functions.inc.js?v=2')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('urc_asset/css/page.css?v=1.0.4')}}" />
		<!--me-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		
   		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
		<script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
   	
    	<!--//me-->
		<div class="top-bar">
			<span class="head_info" style="float:left; margin:0 0 0 20px;"></span>
			<span class="head_info" style="display: inline-flex;float:right; text-align:right;margin:0 20px 0 0;">
				<a href="{{route('logout')}}"><b>ចាកចេញ</b><a>
			</span>

			<div style="clear:both;"></div>

			<div style="position:fixed;top:38px;width:100%;">
				<div style="width:700px;margin:auto;">
					<div id="gm"></div>
				</div>
			</div>
		</div>


		<div class="b_header" id="b_header">
			<div style="border:0px solid #ddd; text-align:center">
				<img src="{{asset('images/banner-top-dev.jpg')}}" style="border-left:1px solid #ddd; border-right:1px solid #ddd;" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="b_menu" id="b_menu" style="width:961px; margin:auto; margin-bottom: 5px;">
			<div style="background:#f3f3f3;border:1px solid #ccc;">
				<div class="w_menu" style="">
					<ul>
						<li><a style="width:auto !important; padding:0 2px;" class="menu" href="#">ព័ត៌មានទូទៅ</a></li>
						<li><a style="width:auto !important; padding:0 2px;" class="menu" href="#">ស្ថានភាពទូទៅរបស់គ្រួសារ</a></li>
						<li><a style="width:auto !important; padding:0 2px;" class="menu" href="#">ព័ត៌ចុះបញ្ជីមូលដ្ឋានសុខាភិបាលមានទូទៅ</a></li>
						<li><a style="width:auto !important; padding:0 2px;" class="menu" href="#">ព័ត៌ចុះបញ្ជីមូលដ្ឋានសុខាភិបាលមានទូទៅ</a></li>												
					</ul>			
				<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
			
		<div class="wrap" id="wrap">	
			<!-- content -->
			@yield('content')
			<!-- end content -->
		</div>
		<div class="b_footer" id="b_footer">
			<table class="tb_none tb_grid" style="width:980px; margin:auto;">
				<tr>
					<td style="width:170px;">
						<img src="{{asset('images/usaid.png')}}" />
					</td>
					<td style="text-align:center;">
						<div>រក្សាសិទ្ធិគ្រប់បែបយ៉ាងដោយនាយកដ្ឋានផែនការនិង ព័ត៌មានសុខាភិបាលនៃក្រសួងសុខាភិបាល DPHI/MoH. 2013</div>
					</td>
					<!--<td style="width:265px;">
						<img style="height:54px;" src="images/bhs.jpg" />
						<img style="height:54px;" src="images/urc.png" />
					</td>-->
				</tr>
			</table>
		</div>

<?php //require('include/message.php'); ?>
<script type="text/ecmascript">
//	$('#datatable').dataTable( {
//			"responsive": true,
//			//"paging": false,
//			"bInfo" : false,
//			"order": [[ 1, "desc" ]],
//			 "columnDefs": [ {
//				//"targets": [2,3],
//				"orderable": false
//				} ],
//		});
	$('.datatable1').dataTable({
			"responsive": true,
			//"paging": false,
			"retrieve": true,
			"bInfo" : false,
			"order": [[ 1, "desc" ]],
			"columnDefs": [{
//					//"targets": [2,3],
				"orderable": false,
			}],
		});		
</script>
<link href="js/intro/introjs.css" rel="stylesheet">
<script src="js/intro/intro.js"></script>
</body>
</html>