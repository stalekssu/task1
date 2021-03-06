<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">

    <title>Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 1.0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image:url(../../images/image1.jpg);
  height: 100%;
}

.circle:hover {
  border-radius: 30%;
}

.flood-right:hover {
 color: white;
 -webkit-box-shadow: inset 1170px 0 0 0 #ff401a;
 -moz-box-shadow: inset 1170px 0 0 0 #ff401a;
 -ms-box-shadow: inset 1170px 0 0 0 #ff401a;
 -o-box-shadow: inset 1170px 0 0 0 #ff401a;
 box-shadow: inset 1170px 0 0 0 #ff401a;
}
    </style>
  </head>

  <body> 
    <!-- Start BackGround -->
    <div class="bgimg-1">
    <!-- Start Header -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">Toggle navigation1</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse right">
            <?php if ($this->getUser()) { ?>
            <a class="navbar-brand navbar-right" href="<?= $this->path('logout')?>">logout</a>
            <a class="navbar-brand navbar-right" href="<?= $this->path('profile')?>"><?= $this->getUser()['login'] ?></a>
            <?php } else { ?>
            <a class="navbar-brand navbar-right" href="<?= $this->path('loginForm')?>">Sign in</a>
            <a class="navbar-brand navbar-right" href="<?= $this->path('registerForm')?>">Sign up</a>
            <?php } ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- End Header -->
    <!-- Start Contetnt -->
    
    <div class="container" style="margin-top: 50px;">
 
      <?php include $content; ?>
    <!-- End Content -->
      <hr>

      <!-- Start Fotter -->
      <footer>
        <p>&copy; 2018 Company, Inc.</p>
      </footer>
      <!-- End Footer -->
    </div> <!-- /container -->
  </div>
     <!-- End BackGround -->
</body>

</html>