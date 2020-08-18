<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alwayspreset - Purchase</title>

  <!-- Bootstrap core CSS -->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- Custom fonts for this template -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shards.min.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <!--<link href="css/absolute-center.css" rel="stylesheet">-->
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '379924209574706');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=379924209574706&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

</head>

  <body id="page-top">
    <script>
      window.addEventListener("load", () => {
        let content = [];
        let value = 0;
        <?php
          foreach($setid as $set) {
            echo "content.push({";
            echo "  id: \"{$set}\",";
            echo "  quantity: 1";
            echo "});";
          }
          echo "value = {$price};";
        ?>
        fbq('track', 'Purchase', {
          content: content,
          currency: 'THB',
          value: value
        }, false);
      });
    </script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-shrink">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./">Alwayspreset</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          เมนู
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/">กลับหน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a id="contact" class="nav-link js-scroll-trigger" href="http://m.me/alwayspreset">ติดต่อเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="download.html">ดาวน์โหลดสินค้า</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="container mb-4">
    <div class="row justify-content-center">

      <div class="col col-12 col-sm-8 col-md-8 col-lg-6">
        <div class="card card-body">
          <h2 style="color: #00ad11;">เสร็จสิ้น!</h2>
          <h5>เว็ปไซต์ได้ทำบันทึกข้อมูลคุณลูกค้าเรียบร้อยแล้ว</h5>
          <p>กรุณา<a href="http://m.me/alwayspreset" target="_blank">ติดต่อแอดมิน</a> เพื่อรับรหัสดาวน์โหลด</p>
        </div>
      </div>
    </div>
  </section>
    <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Alwayspreset 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <!-- <script src="js/set.js"></script> -->

  
  
  <!-- Shards -->
  <script src="js/shards.min.js"></script>
  
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/236cc9cd4c.js"></script>
</body>

</html>
