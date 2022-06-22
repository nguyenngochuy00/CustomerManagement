<?php
	// đc sử dụng để nhúng mã PHP từ 1 tệp khác. Nếu tệp ko đc tìm thấy, 1 lỗi nghiêm trọng sẽ xảy ra và chương trình dừng lại
	// nếu tệp đc đưa vào trc đó, câu lệnh này sẽ ko bao gồm lại tệp đó
	require_once ('config.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Danh sách khách hàng</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
	.navbar {
		margin-bottom: 0;
		background-color: darkcyan;
		z-index: 9999;
		border: 0;
		font-size: 12px !important;
		line-height: 1.42857143 !important;
		letter-spacing: 4px;
		border-radius: 0;
	}

	.navbar li a,
	.navbar .navbar-brand {
		color: #fff !important;
	}

	.navbar-nav li a:hover,
	.navbar-nav li.active a {
		color: darkcyan !important;
		background-color: #fff !important;
	}

	.navbar-default .navbar-toggle {
		border-color: transparent;
		color: #fff !important;
	}
</style>

<body style="background-color: #f6f6f6;">
	<!-- nav-bar: một thanh điều hướng có thể mở rộng hoặc thu gọn, tùy thuộc vào kích thước màn hình. -->
  	<!-- navbar-fixed-top: Thanh điều hướng cũng có thể được cố định ở đầu hoặc cuối trang. -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<!-- container: cung cấp một vùng chứa có chiều rộng cố định đáp ứng -->
		<div class="container">
			<a class="navbar-brand" href="list.php">MuerShop</a>
			<div class="abc" id="myNavbar">
				<!-- navbar-nav: các mục menu xuất hiện trên Navbar -->
				<ul class="nav navbar-nav">
					<li><a  style="text-decoration: none; padding: 20px;" href="signout.php">ĐĂNG XUẤT</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container"  style="background-color: #D8F2FB; box-shadow: 0 0 20px 9px #ff61241f; border-radius: 15px;">
		<!-- panel : là 1 hộp có viền vs 1 số đệm xung quanh nội dung của nó -->
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="text-center">
					<legend style="color: cornflowerblue;">
						<br><h1>DANH SÁCH KHÁCH HÀNG</h1>
					</legend>
				</div>
				<!-- phương thức lấy dữ liệu get lên php -->
				<form method="get">
					<input type="text" name="search-name" class="form-control" style="margin-top: 15px; margin-bottom: 15px;"
							placeholder="Tìm kiếm theo tên khách hàng">
				</form>
			</div>

			<div class="panel-body">
				<!-- table-bordered : thêm đường viền trên tất cả các cạnh của bảng và các ô -->
				<!-- table-hover : thêm hiệu ứng di chuột (màu nền xám) trên các hàng của bảng: -->
				<table class="table table-bordered table-hover table-info text-center">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ và tên</th>
							<th>Số điện thoại</th>
							<th>Email</th>
							<th>Địa chỉ</th>
							<th>Thao tác</th>
						</tr>
					</thead>

					<tbody>
						<?php		
							// isset : kiểm tra xem 1 biến có đc đặt hay ko, có nghĩa là biến đó phải đc khai báo và ko phải là NULL
									// Hàm này trả về true nếu biến tồn tại và ko phải là NULL, ngược lại, nó trả về false
							// $_GET : 1 biến siêu toàn cục PHP đc sử dụng để thu thập dữ liệu biểu mẫu sau khi gửi biểu mẫu HTML vs method="get"   
							if (isset($_GET['search-name']) && $_GET['search-name'] != '') {
								// toán tử like đc sử dụng trong mệnh đề where để tìm kiếm 1 mẫu đc chỉ định trong 1 cột
								// dấu % đại diện cho 0, 1 hoặc nhiều kí tự
								$sql = 'select * from khachhang where name like "%'.$_GET['search-name'].'%"';
							} else {
								$sql = 'select * from khachhang';
							}

							$customerList = select($sql);

							$idx = 1;
							// foreach : chỉ hđ trên mảng và đc sd để lặp qua từng cặp khóa/ giá trị trong 1 mảng
							// ý nghĩa : đổ dữ liệu vào bảng
							foreach ($customerList as $cusList) {
								echo '<tr>							
										<td>'.($idx++).'</td>
										<td>'.$cusList['name'].'</td>
										<td>'.$cusList['phone'].'</td>
										<td>'.$cusList['email'].'</td>
										<td>'.$cusList['address'].'</td>
										<td><button class="btn btn-warning" onclick=\'window.open("add_update.php?id='.$cusList['id'].'","_self")\'>Sửa</button>	
											<button class="btn btn-danger" onclick="deleteCustomer('.$cusList['id'].')">Xóa</button>	
										</td>
									</tr>';
									// _self : mở tài liệu đc liên kết trong cùng 1 khung khi nó đc nhấp vào (đây là mặc định)
							}
						?>
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('add_update.php', '_self')">Thêm khách hàng</button><br>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteCustomer(id) {
			option = confirm('Bạn có chắc chắn muốn xoá khách hàng này không?')
			if (!option) {
				return;
			}

			console.log(id)
			// ý nghĩa : bộ giao thức post
			// $.post : yêu cầu dữ liệu từ máy chủ bằng cách sử dụng yêu cầu HTTP POST
			$.post('delete.php', {
				// ý nghĩa : chuyển 1 số dữ liệu để gửi cùng vs yêu cầu
				'id': id
				// data : giữ nd của trang đc yêu cầu 
			}, function (data) {
				// ý nghĩa : hàm để xem dữ liệu
				// alert : hiển thị 1 hộp cảnh báo vs 1 thông báo đc chỉ định và 1 nút OK
				alert(data)	
				// reload : tải lại tài liệu hiện tại
				location.reload()	
			})
		}
	</script>
</body>

</html>