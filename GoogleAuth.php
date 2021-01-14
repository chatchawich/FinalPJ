<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Development Task</title>
    <link rel="icon" type="image/png" href="./img/psu-logo.png">
    <meta name="description" content="Core HTML Project">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="./vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/select2/select2.min.css">
    <link rel="stylesheet" href="./vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/lightcase/lightcase.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" rel="stylesheet">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
    <!--Get your own code at fontawesome.com-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    
</head>

<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">


            <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="/__/firebase/8.2.2/firebase-app.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
                https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="/__/firebase/8.2.2/firebase-analytics.js"></script>

            <!-- Initialize Firebase -->
            <script src="/__/firebase/init.js"></script>


	<div class="boxed-page">
		<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a href="./index.html" class="navbar-brand">
            <img src="./img/psu-full-logo.png" height="60" alt=""></a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.html">หน้าแรก</a>
                <li class="nav-item">
                    <a class="nav-link" href="./personnel.html">บุคลากร</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ทรานสคริปกิจกรรม
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="https://student.psu.ac.th/TS234/">ระบบทรานสคริปกิจกรรม</a>
                      <a class="dropdown-item" href="https://transcript.psu.ac.th/">ระบบทรานสคริปกิจกรรมสำหรับนักศึกษารหัส 60</a>
                      <a class="dropdown-item" href="https://activity.psu.ac.th/content/files/n125_ts.pdf">คู่มือปฏิบัติงาน กิจกรรมเสริมหลักสูตร</a>
                    </div>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ข่าวสาร
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./news.release.html">ข่าวประชาสัมพันธ์</a>
                        <a class="dropdown-item" href="./news.calendar.of.events.html">ปฏิทินกิจกรรม</a>
                        <a class="dropdown-item" href="./news.register.online.activity.html">สมัครกิจกรรมออนไลน์</a>
                        <a class="dropdown-item" href="./news.articles.knowledge.html">บทความ-ความรู้</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        เอกสาร
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./document.news.release.html">ประกาศ-ระเบียบ</a>
                        <a class="dropdown-item" href="./document.form.html">แบบฟอร์ม</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        องค์การนักศึกษา
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./student.organizations.su.html">องค์การบริหาร องค์การนักศึกษา</a>
                        <a class="dropdown-item" href="./student.organizations.sapa.html">สภานักศึกษา องค์การนักศึกษา</a>
                        <a class="dropdown-item" href="./student.organizations.club.html">ชมรมนักศึกษา</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ถาม-ตอบ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./qna.ssorted.problems.html">สารพันปัญหา</a>
                        <a class="dropdown-item" href="./qna.frequently.asked.questions.html">คำถามที่พบบ่อย</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./media_gallery.html">สื่อ</a>
                <li class="nav-item">
                    <a class="nav-link" href="./login.html">
                        <i class="fas fa-address-card" style='font-size:30px;color:red'></i>
                    </a>
                <li class="nav-item">
                
            </ul>
        </div>
    </div>    
</nav>

<div class="jumbotron d-flex align-items-center" style="background-image: url(./img/psu.jpg)">
    <div class="container text-center">

    <!-- Blog -->
    <div class="col-md-12 blog-holder">
        <div class="row">
            <!-- Blog Item -->
            <div class="col-md-4 blog-item-wrapper">
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#"><img src="./icons/Student Development Task.gif" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="form-popup" id="myForm">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Blog Item -->
            <!-- Blog Item -->
            <div class="col-md-8 blog-item-wrapper">
                <div class="blog-item">
                    <div class="blog-text">
                        <div class="form-popup" id="myForm">
                            <form action="#" class="form-container">
                              <h1>Login</h1><br>
                          
                              <label for="email"><b>Email&nbsp; &nbsp; &nbsp; &nbsp;</b></label> 
                              <input type="text" placeholder="Enter Email" name="email" required> <br><br>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required> <br><br>
                          
                              <button type="submit" class="btn">
                                  <a href=" ">Login</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Blog Item -->
            
        </div>
    </div> 
  </div>

      
  </div>
      <!-- External JS -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
      <script src="./vendor/bootstrap/popper.min.js"></script>
      <script src="./vendor/bootstrap/bootstrap.min.js"></script>
      <script src="./vendor/select2/select2.min.js "></script>
      <script src="./vendor/owlcarousel/owl.carousel.min.js"></script>
      <script src="./vendor/isotope/isotope.min.js"></script>
      <script src="./vendor/lightcase/lightcase.js"></script>
      <script src="./vendor/waypoints/waypoint.min.js"></script>
      <script src="./vendor/countTo/jquery.countTo.js"></script>
  
      <!-- Main JS -->
      <script src="./js/app.min.js "></script>
      <script src="./localhost:35729/livereload.js"></script>
  </body>
  </html>