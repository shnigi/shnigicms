<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location:index.php'); die();
    }
?>

<!doctype html>
<html>
<head>
  <?php include 'head.php';?>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Shnigi CMS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>

   <div class="container">
     <div id="forms"></div>
   </div>
</body>

<script src="databaseSchema.js"></script>
<script src="handleData.js"></script>
</script>
</html>