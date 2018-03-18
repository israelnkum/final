<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Information Technology Student Union</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/itsu.jpeg"/>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light"  id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img style="height:auto; width:48px; border-radius:20px;" src="img/itsu.jpeg"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#page-top">Home</a>
            </li>

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item js-scroll-trigger" href="index.php#academic_calendar">Academic calendar</a>
      <a class="dropdown-item" href="#">Teaching time table</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item js-scroll-trigger" href="index.php#accordion">Lectures</a>
      <a class="dropdown-item" href="pastQuestion.php">Past Question</a>
      <a class="dropdown-item" href="https://records.ttuportal.com" target="_blank">Semester online resgistration steps</a>
      <a class="dropdown-item" href="https://ttuportal.com" target="_blank">Semester  resgistration</a>
    </div>
      </li>


      <li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    New &amp; Event(s)
   </a>
          
   <div style="outline:none;" class="dropdown-menu" aria-labelledby="navbarDropdown">
   <a class="dropdown-item js-scroll-trigger" href="index.php#latestNews">Latest news</a>
   <a class="dropdown-item js-scroll-trigger" href="index.php#upcomingEvent">Up coming event(s)</a>
       <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="photosGallery.php">Photo Gallery</a>
   </div>
   </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Contact us</a>
            </li>

          </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php if (isset($_GET['msg'])) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $_GET['msg'];?>
                        </div>
                    <?php }?>
                </li>
            </ul>

        </div>

      </div>
    </nav>
