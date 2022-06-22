<?php
	// đc sử dụng để nhúng mã PHP từ 1 tệp khác. Nếu tệp ko đc tìm thấy, 1 lỗi nghiêm trọng sẽ xảy ra và chương trình dừng lại
	// nếu tệp đc đưa vào trc đó, câu lệnh này sẽ ko bao gồm lại tệp đó
	require_once ('config.php');
	
	// isset : kiểm tra xem 1 biến có đc đặt hay ko, có nghĩa là biến đó phải đc khai báo và ko phải là NULL
			// Hàm này trả về true nếu biến tồn tại và ko phải là NULL, ngược lại, nó trả về false
	// $_POST : là 1 biến siêu toàn cục PHP đc sd để thu thập data biểu mẫu sau khi gửi biểu mẫu HTML vs method="post"
	// ý nghĩa : ktra xem trong data post có id hay ko để ko bị gặp lỗi
	if (isset($_POST['id'])) {
		$id = $_POST['id'];

		$sql = 'delete from khachhang where id = '.$id;
		crud($sql);

		echo 'Xoá khách hàng thành công';
	}
?>