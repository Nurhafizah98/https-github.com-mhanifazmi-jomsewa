    <?php
    $url = "$_SERVER[REQUEST_URI]";

    if ($url == "/jomsewa/home.php") 
    {
    	$active1 = "active";
    	$active2 = "";
    	$active3 = "";
    	$active4 = "";
    	$active5 = "";
    	$active6 = "";
    	$active7 = "";
    	$active8 = "";
    	$active9 = "";

    }

    if ($url == "/jomsewa/announcement.php") 
    {
      $active1 = "";
      $active2 = "active";
      $active3 = "";
      $active4 = "";
      $active5 = "";
      $active6 = "";
      $active7 = "";
      $active8 = "";
      $active9 = "";

    }

    if ($url == "/jomsewa/user.php" || $url == "/jomsewa/user_view.php" || $url == "/jomsewa/user_edit.php") 
    {
      $active1 = "";
      $active2 = "";
      $active3 = "";
      $active4 = "";
      $active5 = "";
      $active6 = "";
      $active7 = "";
      $active8 = "";
      $active9 = "active";

    }

    if ($url == "/jomsewa/car.php" || $url == "/jomsewa/car_view.php" || $url == "/jomsewa/car_add.php" || strpos($url, "maintenance.php") || strpos($url, "maintenance_add.php") || strpos($url, "maintenance_view.php")) 
    {
      $active1 = "";
      $active2 = "";
      $active3 = "";
      $active4 = "";
      $active5 = "";
      $active6 = "active";
      $active7 = "";
      $active8 = "";
      $active9 = "";

    }

    if ($url == "/jomsewa/driver.php" || $url == "/jomsewa/driver_add.php" || $url == "/jomsewa/driver_view.php" || strpos($url, "driver_edit.php")) 
    {
      $active1 = "";
      $active2 = "";
      $active3 = "";
      $active4 = "";
      $active5 = "";
      $active6 = "";
      $active7 = "active";
      $active8 = "";
      $active9 = "";

    }

    if ($url == "/jomsewa/booking.php" || $url == "/jomsewa/sewa.php" || $url == "/jomsewa/taxi.php") 
    {
      $active1 = "";
      $active2 = "";
      $active3 = "active";
      $active4 = "";
      $active5 = "";
      $active6 = "";
      $active7 = "";
      $active8 = "";
      $active9 = "";

    }

    if ($url == "/jomsewa/reload.php") 
    {
      $active1 = "";
      $active2 = "active";
      $active3 = "";
      $active4 = "";
      $active5 = "";
      $active6 = "";
      $active7 = "";
      $active8 = "";
      $active9 = "";

    }

    ?>

    <div class="col-sm-2 sidenav hidden-xs">
      <div class="logo">
      	<?php
          if ($row_setting['style'] == 1) {
            echo "<img style='width: 100%; height: 100%;' src='img/logo2.png'>";
          }
          else
          {
             echo "<img style='width: 100%; height: 100%;' src='img/logo.png'>";
          };
  		?>
      </div>
      <ul class="nav nav-pills nav-stacked">
        <li class="<?=$active1?>"><a href="home.php"><i class="icon fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="<?=$active2?>"><a href="announcement.php"><i class="icon fas fa-scroll"></i> Announcement</a></li>
        <li class="<?=$active3?>"><a href="booking.php"><i class="icon fas fa-book"></i> Booking</a></li>
        <li class="<?=$active4?>"><a href="reload.php"><i class="icon fas fa-money-bill-alt"></i>Reload</a></li>
        <li class="<?=$active6?>"><a href="car.php"><i class="icon fas fa-car"></i> Car Manager</a></li>
        <li class="<?=$active7?>"><a href="driver.php"><i class="icon fas fa-user-tie"></i> Driver Manager</a></li>
        <li class="<?=$active8?>"><a href="report_date1.php"><i class="icon fas fa-folder"></i> Report Income</a></li>
        <li class="<?=$active8?>"><a href="report_driver.php"><i class="icon fas fa-folder"></i> Report Driver</a></li>
        <li class="<?=$active8?>"><a href="report_customer.php"><i class="icon fas fa-folder"></i> Report Customer</a></li>
        <li class="<?=$active9?>"><a href="user.php"><i class="icon fas fa-user"></i> Profile</a></li>
      </ul><br>
    </div>