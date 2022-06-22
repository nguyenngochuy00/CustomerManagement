<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Quản lý khách hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  .jumbotron {
    background-color: cornflowerblue;
    color: #ffffff;
    padding: 100px 25px;
  }

  .container-fluid {
    padding: 60px 50px;
  }

  .bg-grey {
    background-color: #f6f6f6;
  }

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

  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }

  .form-control:hover {
    border-color: black !important;
  }

  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }

  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }

  .carousel-control.right,
  .carousel-control.left {
    background-image: none;
    color: darkcyan;
  }

  .carousel-indicators li {
    border-color: darkcyan;
  }

  .carousel-indicators li.active {
    background-color: darkcyan;
  }

  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }

  .item span {
    font-style: normal;
  }
</style>

<body id="myPage">
  <!-- nav-bar: một thanh điều hướng có thể mở rộng hoặc thu gọn, 
                tùy thuộc vào kích thước màn hình. -->
  <!-- navbar-fixed-top: Thanh điều hướng cũng có thể được cố định 
                          ở đầu hoặc cuối trang. -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <!-- container: cung cấp một vùng chứa có chiều rộng cố định đáp ứng -->
    <div class="container">
      <a class="navbar-brand" href="index.php">MuerShop</a>
      <!-- collapse : chỉ ra một phần tử có thể thu gọn; đây là nội dung sẽ 
                      được hiển thị hoặc ẩn bằng một lần nhấp vào nút. -->
      <!-- navbar-collapse: co thanh bar cho vừa màn hình -->
      <div class="collapse navbar-collapse" id="myNavbar">
        <!-- navbar-nav: các mục menu xuất hiện trên Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php">ĐĂNG KÝ</a></li>
          <li><a href="signin.php">ĐĂNG NHẬP</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron: Một jumbotron chỉ ra một hộp lớn để kêu gọi sự chú ý nhiều hơn 
                  đến một số nội dung hoặc thông tin đặc biệt.
	     Một jumbotron được hiển thị dưới dạng một hộp màu xám với các góc tròn. 
       Nó cũng phóng to kích thước phông chữ của văn bản bên trong nó. -->
  <div class="jumbotron text-center">
    <legend style="color: white;">
      <h1>QUẢN LÝ KHÁCH HÀNG</h1>
    </legend>
    <p>CÔNG TY CỔ PHẦN CÔNG NGHỆ MUERSHOP</p>
  </div>

  <!-- container-fluid : cung cấp 1 vùng chứa có chiều rộng đầy đủ, mở rộng toàn bộ 
                          chiều rộng của chế độ xem -->
  <div class="container-fluid text-center bg-grey">
    <legend style="color: darkcyan;">
      <h2>KHÁCH HÀNG TIÊU BIỂU</h2>
    </legend><br>

    <div class="row text-center">
      <!-- col-sm-4 : cho máy tính bảng - màn hình rộng bằng hoặc lớn hơn 768px -->
      <div class="col-sm-4">
        <!-- thumbnail : tạo một thư viện hình ảnh. -->
        <div class="thumbnail">
          <img src="1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Khách hàng kim cương</strong></p>
          <p>Nguyễn Văn A</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="2.jpg" alt="New York" width="400" height="300">
          <p><strong>Khách hàng vàng</strong></p>
          <p>Nguyễn Văn B</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="3.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Khách hàng bạc</strong></p>
          <p>Nguyễn Văn C</p>
        </div>
      </div>
    </div>

    <legend style="color: darkcyan;">
      <h2>THÔNG ĐIỆP CỦA CÔNG TY</h2>
    </legend>

    <!-- myCarousel : để điều khiển bằng chuyền hđ bthg -->
    <!-- carousel : chỉ định rằng khối div này chứa 1 băng chuyền -->
    <!-- slide : thêm hiệu ứng chuyển tiếp và hoạt ảnh css, làm cho các mục trượt 
                  khi hiển thị 1 mục mới -->
    <!-- data-ride : thuộc tính cho Boostrap bắt đầu tạo hoạt ảnh băng chuyền ngay 
                      lập tức khi trang tải -->
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- carousel-indicators : các chỉ số đc chỉ định trong 1 danh sách có thứ tự -->
      <ol class="carousel-indicators">
        <!-- data-target : thuộc tính trỏ đến id của băng chuyền -->
        <!-- data-slide-to : chỉ định trang trình bày sẽ đi đến khi nhấp vào dấu chấm cụ thể -->
        <!-- active : đc thêm vào 1 trong các trang trình bày. Nếu ko, băng chuyền sẽ ko hiển thị -->
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- carousel-inner : các trang trình bày đc chỉ định trong 1 thẻ div -->
      <div class="carousel-inner" role="listbox">
        <!-- item : nd dcuar mỗi trang chiếu đc xđ trong 1 thẻ div -->
        <div class="item active">
          <h4>"Quản trị viên cần có trách nhiệm, đảm bảo thông tin khách hàng chính xác"<br><span>Chủ tịch Công ty cổ
              phần Công nghệ MuerShop</span></h4>
        </div>

        <div class="item">
          <h4>"Nhân viên quản trị cần học hỏi, nâng cao nghiệp vụ, kĩ năng, đảm bảo thông tin khách hàng được bảo mật an
            toàn nhất"<br><span>Tổng giám đốc Công ty cổ phần Công nghệ MuerShop</span></h4>
        </div>

        <div class="item">
          <h4>"Khách hàng là thượng đế, nhân viên quản trị cần là người hỗ trợ khách hàng mọi lúc"<br><span>Giám đốc kĩ
              thuật Công ty Cổ phần Công nghệ MuerShop</span></h4>
        </div>
      </div>

      <!-- data-slide : chấp nhận các từ khóa trc hoặc tiếp theo, các từ khóa này sẽ thay đổi vị trí 
                        trang chiếu so vs vị trí hiện tại của nó -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <!-- sr-only : ẩn 1 phần tử đối vs tất cả các thiết bị ngoại trừ trình đọc màn hình -->
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <img src="4.jpg" class="w3-image w3-greyscale-min" style="width:100%">

  <!-- container-fluid : cung cấp 1 vùng chứa có chiều rộng đầy đủ, mở rộng toàn bộ chiều rộng của chế độ xem -->
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top" style="color: darkcyan;">
      <span class="glyphicon glyphicon-chevron-up" style="color: darkcyan;"></span>
    </a>

    <p style="font-size: 20px;">Bản quyền thuộc về <a href="https://www.w3schools.com" title="Visit w3schools">www.muershop.com</a></p>
  </footer>

  <script>
    $(document).ready(function () {
      // thêm cuộn mượt mà vào tất cả các liên kết trong navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
        // đảm bảo this.hash có 1 gtri trc khi ghi đè hành vi mặc định
        if (this.hash !== "") {
          // ngăn chặn hành vi nhấp neo mặc định
          event.preventDefault();

          // lưu trữ băm
          var hash = this.hash;

          // sd phg thức jquery animate để thêm cuộn trang mượt mà
          // số tùy chọn 900 chỉ định số mili giây để cuộn đến khu vực đc chỉ định
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function () {

            // thêm băm (#) vào url khi cuộn xong
            window.location.hash = hash;
          });
        } 
      });

      $(window).scroll(function () {
        $(".slideanim").each(function () {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>
</body>

</html>