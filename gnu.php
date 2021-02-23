<!DOCTYPE html>
<html lang="en">
<head>
	<title>GNU-V</title>
  <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <style type="text/css">
            .example{
            margin: 20px;
            }
        </style> 
  	  <link rel="stylesheet" type="fi/css" href="fi.css">
  		<style type="text/css">
          nav{
              background-color:#888844   ;
          }
          nav a{
              display:inline-block;
              padding:10px;
              font-size:20px;
              color:white;
              text-decoration:none;
          }
          nav a:hover{
              background-color: #ecc6d9  ;
              color: #3d3d5c;
              text-decoration:none;
          }
          p {
          margin-top: 0px;
          margin-bottom: 10px;
          margin-right: 10px;
          margin-left: 55px;
          }
                    * {
            box-sizing:border-box
          }
          h2 {
            text-align: center;
          }
          /* Slideshow container */
          .slideshow-container {
           /* max-width: 500px;*/
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
          /* Định dạng nội dung Caption */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }
           
          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }
           
          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1s;
            animation-name: fade;
            animation-duration: 5s;
          }
           
          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
           
          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
                   
              </style>
          </head>


  <body >
<!-- header-->
<div class="slideshow-container">
 
  <div class="mySlides fade">
    <img  width="100%" src="gnuu.jpg">
    
  </div>
 
  <div class="mySlides fade">
    <img width="100%"  src="11323.png" >
    
  </div>
 
   <div class="mySlides fade">
    <img width="100%"  src="1.png" >
    
  </div>
</div>
<br>
 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> </div>
  <script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 7s
      setTimeout(showSlides, 7000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
   </script>

<!-- menu-->
    <nav>
     <p>   <a href="http://localhost/gnu/gnu.php"> Trang chủ </a>
        <a href="http://localhost/gnu/video.php"> Video </a>
        <a href= "http://localhost/gnu/bxh.php" > Bảng xếp hạng </a>
        <a href="http://localhost/gnu/signup.php"> Đăng kí/Tạo tài khoản </a>
        <a href="http://localhost/gnu/casting.html"> Casting </a>
        <a href="http://localhost/gnu/search.php"> Tìm kiếm </a>
        <a href="#"> Các hoạt động </a>
        <?php if(isset($_SESSION['id'])): ?>
          <a class="link" href="http://localhost/gnu/logout.php" style="text-decoration:none">Đăng xuất</a>
        <?php else: ?>
          <a class="link" href="http://localhost/gnu/login.php" style="text-decoration:none">Đăng nhập</a>
        <?php endif; ?>
    </nav>
    <br/>
     <center><h1> GNU TEAM - GNU VIDEO</h1></center>
    <h3><center>VIDEO THỊNH HÀNH</center></h3>

<!-- video đề xuất-->

    <p>
    <a href="http://localhost/gnu/video.php"><img width="30%" src="picho1.png" title="Vì một người-Hờơơ"></a>
    <a href="http://localhost/gnu/video.php"><img width="31.4%" src="picho2.png" title="Như những gì anh nói-Hờơơ"></a>
    <a href="http://localhost/gnu/video.php"><img width="29.5%" src="picho3.png" title="3107-hòooo"></a>
    <a href="http://localhost/gnu/video.php"><img width="30%" src="cut1.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><img height="318xp" width="403.3xp" src="phanh1.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><img height="318xp" width="379xp" src="cut2.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><h3><p>MORE</h3></a></p>
   	 </div>
      </body>
      </html>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #7a7a52;"
              "text-decoration-color: : #ffe6e6" >
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"
             style="color:  #ffe6e6">

        <!-- Content -->
        <h3 class="text-uppercase font-weight-bold">GNU TEAM</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 50Spx;">
        <p>Hãy tham gia với chúng tôi, thỏa sức đam mê với âm nhạc
        đem tình yêu với âm nhạc truyền tải tới 
         mọi người.</p>

      </div>
      <!-- Grid column -->
     <div style="color:  #ffe6e6">    
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"
              style="color:  #ffe6e6">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Products</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px";>
        <p>
          <a href="#!" style="color:#ffe6e6">Đoán xem</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">Đoán xem</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">Đoán xem :)))</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">mlem mlem mlem</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Useful links</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://www.facebook.com/GNU-V-101357485107560/"style="color: #ffe6e6">Facebook</a>
        </p>
        <p>
          <a href="#"style="color: #ffe6e6">Zalo</a>
        </p>
        <p>
          <a href="http://localhost/gnu/casting.html"style="color: #ffe6e6">Casting</a>
        </p>
        <p>
          <a c href="https://www.facebook.com/GNU-V-101357485107560/"style="color: #ffe6e6">Báo cáo + Tư vấn</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Contact</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Vietnam: 2020-12-13  VN</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> lan43223@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +86 995 6657</p>
        <p>
          <i class="fas fa-print mr-3"></i> đoán xem :)))</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"
        style="color:  #ffe6e6"    >© 2020 Copyright:
    <a href="https://www.facebook.com/wings0202" style="color: #ffe6e6"> Nguyen Thi Minh Lan </a>
  </div>
  <!-- Copyright -->
</div>
</footer>
<!-- Footer -->
     