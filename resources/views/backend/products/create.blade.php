@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Product_Create</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{asset('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('asset/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('asset/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('asset/plugins/summernote/summernote-bs4.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Dashboard</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Dashboard v1</li>
			</ol>
		</div><!-- /.col -->
	</div>
</div>
@endsection


@section('content')
<!-- Content -->
<div class="container-fluid">
	<!-- Main row -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tạo sản phẩm</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên sản phẩm</label>
							<input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm ">
						</div>
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							<select class="form-control select2" style="width: 100%;">
								<option>--Chọn danh mục---</option>
								<option>Điện thoại</option>
								<option>Máy tính</option>
								<option>Máy ảnh</option>
								<option>Phụ kiện</option>
							</select>
						</div>
						<div class="form-group">
							<label>Thương hiệu sản phẩm</label>
							<select class="form-control select2" style="width: 100%;">
								<option>--Chọn thương hiệu---</option>
								<option>Apple</option>
								<option>Samsung</option>
								<option>Nokia</option>
								<option>Oppo</option>
							</select>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Giá khuyến mại</label>
									<input type="text" class="form-control" placeholder="Điền giá khuyến mại">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Giá bán</label>
									<input type="text" class="form-control" placeholder="Điền giá gốc">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mô tả sản phẩm</label>
							<textarea class="textarea" placeholder="Place some text here"
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Hình ảnh sản phẩm</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFile">
									<label class="custom-file-label" for="exampleInputFile">Choose file</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text" id="">Upload</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Trạng thái sản phẩm</label>
							<select class="form-control select2" style="width: 100%;">
								<option>--Chọn trạng thái---</option>
								<option>Đang nhập</option>
								<option>Mở bán</option>
								<option>Hết hàng</option>
							</select>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-default">Huỷ bỏ</button>
						<button type="submit" class="btn btn-sucess">Tạo mới</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

@endsection


@section('script')
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/plugins/moment/moment.min.js"></script>
<script src="asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>

@endsection