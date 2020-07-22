<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?mgHead()?>
<script type="text/javascript" src="<?=PATH_TEMPLATE?>/js/sidebar-menu.js"></script>
</head>
<body>

	<div id="wrapper">
		<div id="header">
			<div class="menu">
				<?=$menu?>
			</div>	
		</div>
		<div>
			<button onclick="hiddenOrNot()" class="button_hide"><i class="fa fa-bars" aria-hidden="true"></i></button>
		</div>
		<style>
			.button_hide i{
				width: 20px;
			align-items: center;
			justify-content: center;
			font-size: 30px !important;
			}
			.button_hide{
				width: 60px;
				height:40px;
				background-color: #333;
				color:#f6f6f6;
				font-family: Montserrat,sans-serif;
				border-bottom: 0.8px solid #778;
				border-right: 0.8px solid #778;
				border-left:0;
				border-top:0;
				cursor:pointer;
				opacity:0.6;
				transition: 0.7s;
				box-shadow: 0 4px 5px #b1b8bf;
			}
			.button_hide:hover{
				opacity:1;

			}
		</style>
		<div id="sidebar">
		<div class="sidebarmenu">
			<ul id="sidebarmenu1">
				<?=$category_list?>
			</ul>
		</div>

		<script>
			var sidebarh = document.getElementById('sidebar');
			function hiddenOrNot(){
				if (sidebarh.style.visibility==='hidden'){
					sidebarh.style.visibility='visible';
				}else{
					sidebarh.style.visibility='hidden';
				}
			}
			// var sidebarh = document.getElementById('sidebar');
			// function hiddenOrNot(){
			// 	if (sidebarh.style ==="visibility:hidden;"){
			// 		sidebarh.style = "visibility:visible;";
			// 	} else{
			// 		sidebarh.style ="visibility:hidden;";
			// 	}
			// }
		</script>
		</div>	
		<div id="content">

		