<?php include('config.php');
session_start();

$username = $_SESSION["username"];
$password = $_SESSION["password"];

$query_admin = $mysqli->query("SELECT * FROM `admin` WHERE username='$username' AND password='$password'");
$row_admin = $query_admin->fetch_assoc();
$totalRows_admin = $query_admin->num_rows;

$admin_id = $row_admin['admin_id'];
$pass = $_GET['pass'];

$query_maintenance = $mysqli->query("SELECT * FROM `maintenance` WHERE car_id='$pass' ORDER BY date DESC");
$row_maintenance = $query_maintenance->fetch_assoc();
$totalRows_maintenance = $query_maintenance->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOM SEWA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if ($row_setting['style'] == 1) {
    echo "<link rel='stylesheet' href='vendor/style2.css'>";
  }
  else
  {
     echo "<link rel='stylesheet' href='vendor/style.css'>";
  };
  ?>
  
  <link rel="stylesheet" href="vendor/fontawesome.css">
  <link rel="stylesheet" href="vendor/style3.css">
  <script src="vendor/jquery.js"></script>
  <script src="vendor/bootstrap.js"></script>
  <script src="vendor/fontawesome.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<?php include('sidenav_mobile.php'); ?>
<div class="container-fluid">
  <div class="content">
<?php include('sidenav.php'); ?>

<?php include('topnav.php'); ?>

    <div class="container col-sm-10">

      <div class="well">
        <h4 class="uppercase">Car Manager</h4>
        <div class="table-responsive">     
          <a href="maintenance_add.php?pass=<?=$pass?>"><button class="btn btn-primary" style="width: 150px; float: right; margin-bottom: 10px;">Add Maintenance</button></a>
          <table class="table table-bordered">
            <thead>
              <tr class="text-centered">
                <th style="width: 10%;">#</th>
                <th style="width: 50%;">Date</th>
                <th style="width: 40%;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              do
              {
                $i++;
                ?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=date('d M Y', strtotime($row_maintenance['date'])) ?></td>
                    <td>
                      <a href="maintenance_view.php?date=<?=$row_maintenance['maintenance_id']?>&pass=<?=$pass?>"><button class="btn btn-round btn-success"><i class="icon fas fa-eye"></i></button></a>
                    </td>
                  </tr>
                <?php

              }while($row_maintenance = $query_maintenance->fetch_assoc());
              ?>
              
            </tbody>
          </table>
          </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
