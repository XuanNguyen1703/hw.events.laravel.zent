<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Event</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
	<style type="text/css" media="screen">
		body{
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<a type="button" data-toggle="modal" data-target="#modal-add" class="btn btn-success btn-add">Add</a>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Content</th>
						<th>Time</th>
						<th>Location</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					
					@foreach ($events as $event)
					<tr>
						<td>{{$event->id}}</td>
						<td>{{$event->title}}</td>
						<td>{{$event->content}}</td>
						<td>{{$event->time}}</td>
						<td>{{$event->location}}</td>
						<td>{{$event->created_at}}</td>
						<td>{{$event->updated_at}}</td>
						<td>
							<button data-url="{{asset('')}}events-ajax/{{$event->id}}" type="button" data-toggle="modal" data-target="#modal-show" class="btn btn-info btn-show">Details</button>
							<button data-url="{{asset('')}}events-ajax/{{$event->id}}" type="button"  class="btn btn-warning btn-edit">Edit</button>
							<button data-url="{{asset('')}}events-ajax/{{$event->id}}" type="button" class="btn btn-danger btn-delete">Delete</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
{{-- Modal show chi tiết todo --}}
	<div class="modal fade" id="modal-show">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Detail</h4>
				</div>
				<div class="modal-body" style="text-align: center;">
					<table cellspacing="0" class="table table-bordered table-detail table-striped">
						<colgroup>
							<col style="width: 25%;"><col>
						</colgroup>
						<tbody>
							<tr>
								<td rel="only_ship_to">Title</td>
								<td id="title"></td>
							</tr>
							<tr>
								<td rel="only_ship_to">content</td>
								<td id="content"></td>
							</tr>
							<tr>
								<td rel="brand">time</td>
								<td id="time"></td>
							</tr>
							<tr>
								<td rel="origin">location</td>
								<td id="location"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> 
	{{-- Modal thêm mới todo --}}
<div class="modal fade" id="modal-add">
	<div class="modal-dialog">
		<div class="modal-content">

			<form action="" data-url="{{ route('events-ajax.store') }}" id="form-add" method="POST" role="form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add event</h4>
			</div>
			<div class="modal-body">
				
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" id="title-add" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="">Content</label>
						<input type="text" class="form-control" id="content-add" placeholder="Content">
					</div>
					<div class="form-group">
						<label>Time</label>
						<input id="time-add" class="datepicker form-control" name="time" placeholder="time">	
					</div>
					<br>
					<div class="form-group">
						<label for="">Location</label>
						<input type="text" class="form-control" id="location-add" placeholder="Location">
					</div>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
			</div>
			</form>
		</div>
	</div>
</div>

	{{-- Modal sửa todo --}}
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">

			<form action="" id="form-edit" method="POST" role="form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit event</h4>
			</div>
			<div class="modal-body">
				
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" id="title-edit" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="">Content</label>
						<input type="text" class="form-control" id="content-edit" placeholder="Content">
					</div>
					<div class="form-group">
						<label>Time</label>
						<input id="time-edit" class="datepicker form-control" name="time" placeholder="time">	
					</div>
					<br>
					<div class="form-group">
						<label for="">Location</label>
						<input type="text" class="form-control" id="location-edit" placeholder="Location">
					</div>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>
				
			</div>
			</form>
		</div>
	</div>
</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('.datepicker').datepicker({
		    	format: 'yyyy-mm-dd'
		    });
	</script>
	<script type="text/javascript" charset="utf-8">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).ready(function () {
			
			//bắt sự kiện click vào nút show
			$('.btn-show').click(function () {
				//hiện modal show lên
				//$('#show').modal('show');
				//lấy dữ liệu từ attribute data-url lưu vào biến url
				var url=$(this).attr('data-url');
				// alert(url)
				$.ajax({
					//sử dụng phương thức get
					type: 'get',
					url: url,
					//nếu thực hiện thành công thì chạy vào success
					success: function (response) {
						console.log(response)
						//hiển thị dữ liệu được controller trả về vào trong modal
						$('#title').text(response.data.title);
						$('#content').text(response.data.content);
						$('#time').text(response.data.time);
						$('#location').text(response.data.location);
						$('#created_at').text(response.data.created_at);
						$('#updated_at').text(response.data.updated_at);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						//xử lý lỗi tại đây
					}
				})
			})

			$('#form-add').submit(function (e) {
				e.preventDefault();
				//lấy attribute data-url của form lưu vào biến url
				var url=$(this).attr('data-url');
				$.ajax({
					//sử dụng phương thức post
					type: 'post',
					url: url,
					data: {
						//lấy dữ liệu từ ô input trong form thêm mới
						title: $('#title-add').val(),
						content: $('#content-add').val(),
						time: $('#time-add').val(),
						location: $('#location-add').val(),
					},
					success: function (response) {
						toastr.success('Add new Event success!')
						//ẩn modal add đi
						$('#modal-add').modal('hide');
						setTimeout(function () {
							window.location.href="{{ route('events-ajax.index') }}";
						},800);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						//xử lý lỗi tại đây
					}
				})
			})
			$('.btn-delete').click(function () {
				//lấy attribute data-url của nút xoá lưu vào url
				var url=$(this).attr('data-url');
				if (confirm("Are you sure?")){
				$.ajax({
					//sử dụng phương thức get
					type: 'delete',
					url: url,

					//nếu thực hiện thành công thì chạy vào success
					success: function (response) {
						toastr.warning('delete event success!')
						setTimeout(function () {
					window.location.href="{{ route('events-ajax.index') }}";
				},800);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						//xử lý lỗi tại đây
					}
				})
				}
			})

			//bắt sự kiện click vào nút edit
			$('.btn-edit').click(function (e) {
				//mở modal edit lên
				$('#modal-edit').modal('show');
				e.preventDefault();
				//lấy data-url của nút edit
				var url=$(this).attr('data-url');
				$.ajax({
					//phương thức get
					type: 'get',
					url: url,
					success: function (response) {
						//đưa dữ liệu controller gửi về điền vào input trong form edit.
						$('#title-edit').val(response.data.title);
						$('#content-edit').val(response.data.content);
						$('#time-edit').val(response.data.time);
						$('#location-edit').val(response.data.location);
						//thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
						$('#form-edit').attr('data-url','{{ asset('events-ajax/') }}/'+response.data.id)
					},
					error: function (error) {
						
					}
				})
			})

			$('#form-edit').submit(function (e) {
				e.preventDefault();
				var url=$(this).attr('data-url');
				$.ajax({
					//phương thức put
					type: 'put',
					url: url,
					//lấy dữ liệu trong form
					data: {
						title: $('#title-edit').val(),
						content: $('#content-edit').val(),
						time: $('#time-edit').val(),
						location: $('#location-edit').val(),
					},
					success: function (response) {
						toastr.success('edit event success!')
						$('#modal-edit').modal('hide');
						setTimeout(function () {
							window.location.href="{{ route('events-ajax.index') }}";
						},800);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						//xử lý lỗi tại đây
					}
				})
			})
		})
	</script>
</body>

</html>