<!DOCTYPE html>
<html lang="tr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Online çekiliş yaparak, katılımcılar arasında kazananı belirleyin! Kazananlar ve yedekleri seçin.">

    <link rel="canonical" href="index.htm">

    <title>Online Çekiliş Yap -BROS </title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://i.imgyukle.com/2021/06/15/O09pLc.png">
    <link rel="icon" href="https://i.imgyukle.com/2021/06/15/O09pLc.png">

    <!-- Global site tag (gtag.js) - Google Analytics 
   
	
	<script data-ad-client="ca-pub-9413002266560243" async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->

</head>

<body>
  <div id="overlay">
     <div id="loader"></div>
   </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <div class="navbar-left">
        <button class="navbar-toggler" type="button">&#9776;</button>
          <a href="index.html"><img class="logo-dark" src="https://i.imgyukle.com/2021/06/15/O0fh6h.png" alt="Online Çekiliş Yap" style="height:40px;"></a>
          <a href="index.html"><img class="logo-light" src="https://i.imgyukle.com/2021/06/15/O0fh6h.png" alt="Online Çekiliş Yap" style="height:40px;"></a>
      </div>

      <section class="navbar-mobile">
        <nav class="nav nav-navbar ml-auto">
          <a class="nav-link" href="index.html">Çekiliş Yap</a>
          <a class="nav-link" href="yazı tura.php">yazı-tura</a>
          <a class="nav-link" href="zar atma.php">zar atma</a>
        
        </nav>


        <div class="d-inline-flex ml-30">
          <a class="btn btn-round btn-info" href="login.html">Giriş Yap</a>
        </div>
      </section>

    </div>
  </nav><!-- /.navbar -->

<!-- Header -->
<header class="header" style="background-image: url(assets/img/bg.png)"><!-- bu normal bg -->
  <div class="container text-center">

    <div class="row">
      <div class="col-md-8 mx-auto">

        <h1>Online Yazı-Tura</h1>
        <p class="lead-2">Ücretsiz yazı-tura at, kazananı belirle!<br> Yazı-turayı hızlı bir şekilde yapmak için, ücretsiz çekiliş aracımızı kullanabilirsiniz.</p>

      </div>
    </div>

  </div>
</header><!-- /.header -->


<!-- Main Content -->
<main class="main-content">

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Contact form
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section py-8">
    <div class="container">
      <div class="row">
              
        <form id="update"  method="post" class="col-md-8 mx-auto p-6 bg-secondary rounded">
          <center><h3 class="section-heading">Yazı - Turaya Hoşgeldiniz</h3> <br> 
            <font color="black" face="tahoma">1. isim :</font>	<input type="text" name="isim1" required><br><br>
            <font color="black" face="tahoma">2. isim :</font>	<input type="text" name="isim2" required><br><br><br>
               <input class="btn" type="submit" value="BAŞLA" name="gonder" style="background-color:tomato;color:white;width:100%;border-radius: 10px;"> </center>
              <?php 
                session_start();
                if (isset($_POST['gonder'])) {
                  $isim1=$_POST['isim1'];
                  $isim2=$_POST['isim2'];
                  $_SESSION['isim1']=$isim1;
                  $_SESSION['isim2']=$isim2;
                  header("Location: \BrosCekilis\yazı\yazı.php");
                              }
              ?>
               <hr/>
        <p>
          <center><h5>Kurallar</h5></center>
          1. İlk önce oyuna başlamadan önce isimlerinizi yazınız.<br> 
          2. İlk isim solda ki bölümü - ikinci isim ise sağda ki bölümü temsil etmektedir.<br>
          3. Başla butonuna bastıktan sonra oyun sayfasına yönlendirileceksiniz ve para at butonuna  basarak oyuna başlayacaksınız.<br>
          4. Doğru tahmin yapan kazanır.<br>
          5. Gelecek olan tahmin tamamen rastgeledir. Bol Şanslar İyi Oyunlar...<br>

    	  </p>
            </form>
            

        <div id="result"></div>

      </div>
        
      </div>

    </div>
  </section>

</main>

<!--Bu kısım arada kalan çekiliş sayısını ve yorum sayısını gösterir.-->

<section class="section text-white" style="background-color: #D9BDAD; padding: 50px 0;">
  <div class="container">
    <div class="row gap-y">
      <div class="col-md-6">
        <div class="row">
          <div class="col-6">
            <h4 class="lead-7 text-right" data-provide="countup" data-from="24218" data-to="24218"></h4>
          </div>

          <div class="col-6">
            <p class="small text-uppercase ls-2 mb-2">Yapılan Yazı-turalar</p>
            <p><i class="icon-layers lead-4 mb-0"></i></p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-6">
            <h4 class="lead-7 text-right" data-provide="countup" data-from="118165140" data-to="118165140"></h4>
          </div>

          <div class="col-6">
            <p class="small text-uppercase ls-2 mb-2">Yüklenen Yorum</p>
            <p><i class="icon-trophy lead-4 mb-0"></i></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer id="footer" class="footer py-8">
  <div class="container">
    <div class="row gap-y">

      <div class="col-md-4">
        <h6 class="mb-4"><strong>Araçlarımız</strong></h6>
        <div class="nav flex-column">
          <a class="nav-link" href="index.html">Çekiliş Yap</a>
          <a class="nav-link" href="yazı tura.php">yazı-tura</a>
          <a class="nav-link" href="zar atma.php">zar atma</a>
          <a class="nav-link" href="login.html">Giriş Yap</a>
        </div>
      </div>

      <div class="col-md-8">
        <h6 class="mb-4"><strong>Online Çekiliş Yap</strong></h6>
        <p>Online Çekiliş Yap sitesinde, sen de istediğin çekilişi yaparak, kazananları belirle!<br></p>
        <small class="opacity-70">Copyright © Bros Çekiliş Yap Tüm Hakları Saklıdır.</small>
      </div>

    </div>
  </div>
</footer><!-- /.footer -->

<!-- Scripts -->
<script src="assets/js/page.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
	$('#check_ok').click(function() {
		$('#result').html('<img style="width:20px; height:20px;" src="spiffy.gif" />');
		$.ajax({
			type: 'POST',
			url: 'jPost.php',
			data: $("#update").serialize(),
			success: function(dt) {
				$("#result").html(dt);
			}
		});
	});

	$("#unique").on({
		mouseenter: function() {
			$("#help-unique").toggle(200, function() {});
		},
		mouseleave: function() {
			$("#help-unique").toggle(10, function() {});
		}
	});
	$("#multi").on({
		mouseenter: function() {
			$("#help-multi").toggle(200, function() {});
		},
		mouseleave: function() {
			$("#help-multi").toggle(10, function() {});
		}
	});
</script>

</body>
</html>
