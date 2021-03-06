<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PERPUSTAKAAN</title>

<link href="<?php echo config_item('css');?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo config_item('css');?>datapicker3.css" rel="stylesheet">
<link href="<?php echo config_item('css');?>styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>PERPUS</span>TAKAAN</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> FARHANA <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
			<li><a href="widgets.html"><span class="glyphicon glyphicon-user"></span> Data Mater Anggota</a></li>
			<li><a href="charts.html"><span class="glyphicon glyphicon-briefcase"></span> Data Master Buku</a></li>
			<li><a href="tables.html"><span class="glyphicon glyphicon-list-alt"></span> Data Master Kategori</a></li>
			<li><a href="forms.html"><span class="glyphicon glyphicon-user"></span> Data Master Pustakawan</a></li>
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Transaksi <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Peminjaman Buku
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span>Pengembalian
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Site Traffic Overview</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div style="background-color: #B1E693; width: 90%; margin:0 auto;">
        		<h2 style="color: #342b38;"><b>AAA</b></h2>
    		</div>
		</div><!--/.row-->


			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

    <script src="<?php echo config_item('js');?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo config_item('js');?>bootstrap.min.js"></script>
	<script src="<?php echo config_item('js');?>chart.min.js"></script>
	<script src="<?php echo config_item('js');?>chart-data.js"></script>
	<script src="<?php echo config_item('js');?>easypiechart.js"></script>
	<script src="<?php echo config_item('js');?>easypichart-data.js"></script>
	<script src="<?php echo config_item('js');?>bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
