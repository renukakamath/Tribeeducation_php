<?php include 'connection.php' ;
extract($_GET);
$uid=$_SESSION['uid'];
?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="user_viewproduct.php">view product</a>
<a href="user_viewcart.php">view cart</a>
<a href="user_viewchildren.php">view children</a>
<a href="user_addreview.php">add review</a>
<a href="user_viewnotification.php">view notification</a>
<a href="tribe_login.php">logout</a>
 -->

	<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>tribe- education and marketing system</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              tribe- education and marketing system
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="tribe_user.php"> Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="user_viewproduct.php">view product</a>
                </li>

                <li class="nav-item ">
	
                  <a class="nav-link" href="user_viewcart.php">user view cart </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="user_viewchildren.php">view children </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="user_addreview.php"> add review</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="user_viewnotification.php">view notification</a>
                </li>
                 
                 <li class="nav-item">
                  <a class="nav-link" href="tribe_login.php">login</a>
                </li>
                  
              </ul>
            </div>
        </nav>
      </div>
    </header>