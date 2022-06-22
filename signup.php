<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    @charset "ISO-8859-1";

    * {
        margin: 0;
        padding: 0;
    }

    .hero {
        height: 100%;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
        background-position: center;
        background-size: cover;
        position: absolute;
    }

    .form-box {
        top: 100px;
        width: 420px;
        height: 560px;
        position: relative;
        margin: 6% auto;
        background: #fff;
        padding: 5px;
        box-shadow: 0 0 20px 9px #ff61241f;
        border-radius: 15px;
    }

    .input-group {
        top: 180px;
        width: 280px;
        transition: .5s;
        margin-left: 40px;
        margin-top: 100px;
    }

    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
        position: relative;
        left: 30px;
    }

    .submit-btn {
        width: 80%;
        padding: 10px 30px;
        cursor: pointer;
        background: linear-gradient(to right, #ff2453, #fbff24);
        display: block;
        margin: auto;
        border: 0;
        outline: none;
        border-radius: 30px;
        position: relative;
        left: 30px;
    }

    .check-box {
        margin: 30px 10px 30px 0;
        position: relative;
        left: 30px;
    }

    span {
        color: #777;
        font-size: 12px;
        bottom: 63px;
        position: absolute;
        left: 50px;
        bottom: 237px;
        left: 105px;
    }
</style>

<body>
    <div class="hero">
        <div class="form-box">
            <!-- phương thức đẩy dữ liệu post lên php -->
            <!-- input-group: là vùng chứa để nâng cao đầu vào bằng cách thêm biểu tượng, văn bản hoặc nút vào phía 
                                trước hoặc phía sau trường nhập dưới dạng "văn bản trợ giúp". -->
            <form id="register" method="POST" action="" class="input-group">
                <input type="text" name="name" class="input-field" placeholder="Họ tên" 
                        pattern="(?:[A-Z]\p{L}+ ){1,3}[A-Z]\p{L}+" title="Vui lòng nhập đúng họ tên" required>
                <input type="text" name="username" class="input-field" placeholder="Tên đăng nhập" required>
                <input type="password" name="password" class="input-field" placeholder="Mật khẩu" 
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" 
                        title="Mật khẩu có tối thiểu 8 ký tự, ít nhất 1 chữ cái viết hoa, 1 chữ cái viết thường, 1 số và 1 ký tự đặc biệt" required>
                <input type="email" name="email" class="input-field" placeholder="Email"
                        pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Vui lòng nhập đúng email" required>
                <input type="checkbox" class="check-box"> <span>Tôi đồng ý với các điều khoản !</span>
                <button type="submit" class="submit-btn">Đăng Ký</button>
            </form>
        </div>
    </div>

</body>

</html>

<?php
    session_start();

    // đc sử dụng để nhúng mã PHP từ 1 tệp khác. Nếu tệp ko đc tìm thấy, 1 lỗi nghiêm trọng sẽ xảy ra và chương trình dừng lại
	// nếu tệp đc đưa vào trc đó, câu lệnh này sẽ ko bao gồm lại tệp đó
    require_once ('config.php');

    function signup() {
        // $_POST : là 1 biến siêu toàn cục PHP đc sd để thu thập data biểu mẫu sau khi gửi biểu mẫu HTML vs method="post"
        if(!empty($_POST)) {  
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // insert : chèn các bản ghi mới trong 1 bảng
            $sql = "insert into admin(name, username, password, email) values ('$name', '$username', '$password', '$email')";   
            
            crud($sql);

            // header : gửi 1 tiêu đề HTTP thô tới máy khách
            header('Location: signin.php');
            die();
        }
    }

    signup();
?>
