<?php session_start();?>
<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="pic.png">
          <span class="nav-item">Muso</span>
        </a></li>
        <li><a href="index.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="add_posts.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">add posts</span>
        </a></li>
        <li><a href="view_posts.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">view posts</span>
        </a></li>
        <li><a href="add_leader.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">add leaders</span>
        </a></li>
        <li><a href="view_leader.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">view leaders</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="../logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
