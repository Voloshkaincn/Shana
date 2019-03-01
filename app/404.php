<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="HandheldFriendly" content="true">

  <meta name="description" content="This is description">
  <meta name="keywords" content="keywords">
  <title>Simpatio</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">

  <style>
    #page-preloader {
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background: #fff;
      z-index: 100500;
    }
    #page-preloader .spinner {
      width: 300px;
      height: 300px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin: -150px 0 0 -150px;
      background: url('img/logo.svg') no-repeat 50% 50%;
      background-size: contain;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }
    @-webkit-keyframes preloader-anim {
      0% {
        opacity: 0;
        -webkit-transform: translateY(300px);
        transform: translateY(300px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }
    @keyframes preloader-anim {
      0% {
        opacity: 0;
        -webkit-transform: translateY(300px);
        -ms-transform: translateY(300px);
        transform: translateY(300px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
      }
    }
    .preloader-anim {
      -webkit-animation-name: preloader-anim;
      animation-name: preloader-anim;
    }
  </style>

  <!-- Styles -->
    <!-- Libs -->
      <link rel="stylesheet" type="text/css" href="css/libs.css">
    <!-- Common -->
      <link rel="stylesheet" type="text/css" href="css/common.css">
    <!-- Custom -->
      <link rel="stylesheet" type="text/css" href="css/404.css">

  <!--[if lt IE 9]>v
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  
  <!-- START Preloader -->
    <div id="page-preloader"><span class="spinner preloader-anim"></span></div>
  <!-- Finish Preloader -->

  <?php
    include 'php-components/header.php';
  ?>

  <main class="main">
    <section>
      <div class="container">
        <img src="img/404.svg" alt="404 Image">
        <div class="content">
          <h1><span class="red">404</span>Запрашиваемая страница не существует!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis <a href="#">google.com</a> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
          <a href="../" class="button">На главную</a>
        </div>
      </div>
    </section>
  </main>
    
  <?php
    include 'php-components/footer.php';
  ?>
  
  <!-- Scripts -->
    <!-- Libs -->
      <script defer src="js/libs.min.js"></script>
    <!-- Common -->
      <script defer src="js/common.min.js"></script>
</body>
</html>