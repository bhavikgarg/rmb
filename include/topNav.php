<?php

require 'config/config.php';

$username = $_SESSION['username'];  // replace with SESSION username
$groupName = $_SESSION['group'];   // replace with SESSION group name

$sql = "SELECT * from goodies WHERE sendTo = '".$username."' OR sendTo = '".$groupName."'";
$countUnSeen = "SELECT count(*) c from goodies WHERE isSeen = 'n' AND sendTo = '".$username."' OR sendTo = '".$groupName."'";

$res = mysqli_query($con, $countUnSeen);
if($r = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
   $count = $r['c'];
}

$result = mysqli_query($con, $sql);

?>
<nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"></span>
                </a>
                
                  
              </li> -->
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu" id = 'notifications'>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  
                    <?php
                      if(isset($count) && !empty($count) && $count > 0)
                      {
                        echo "<span class='label label-warning' id = 'countLabel'>".$count."</span>";
                      }
                    ?>
                  
                </a>
                <ul class="dropdown-menu">
                  <?php 
                    if(isset($count) && !empty($count) && $count > 0)
                    {
                      echo "<li class='header'>You have ".$count." new notifications</li>";
                    }
                    else
                    {
                      echo "<li class='header'>You have no new notifications</li>"; 
                    }
                  ?>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    <?php
                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        if($row['isSeen'] == 'y')
                        {
                          $color = 'white';
                        }
                        else
                        {
                          $color = '#d2d6de';
                        }
                        
                        echo "<li style = 'background-color : ".$color."'  class = 'loadGoodies' id = ".$row['id']."><a href = '#'><i class='fa fa-shopping-cart'></i> Recieved goodie from ".$row['sentBy']."</li>";
                      }
                    ?>
                      
                    </ul>
                  </li>
                  <li class="footer" id = 'viewAllGoodies'><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                
                  
              </li> -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/img/avatar.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php /*echo $_SESSION['name'];*/ ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets/img/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['username'] ?>
                      <small>Username : <?php echo $_SESSION['username'] ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#"></a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#"></a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#"></a>
                      </div>
                    </div><!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>