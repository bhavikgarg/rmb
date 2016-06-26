<section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="../assets/img/avatar.png" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                    <p><?php echo $_SESSION['username'] ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                  <li class="header">RMB NAVIGATION</li>
                  <li class="active">
                    <a href="#">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
                    </a>
                  
                  </li>

                  <li>
                    <a href="allUsers.php">
                      <i class="fa fa-users"></i> <span>View All Users</span> 
                    </a>
                  
                  </li>
                  
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-share"></i> <span>Industry </span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      
                      <li id = 'adminIndustryLI'>
                        <a href="#"><i class="fa fa-circle-o"></i> Manage Industry</a>
                        
                      </li>             
                    </ul>
                  </li> 

                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-flask"></i> <span>Goodies</span> 
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      
                      <li  id = 'adminGoodiesLI'>
                        <a href="#"><i class="fa fa-circle-o"></i> Create Goodies </a>
                        
                      </li>
                      <li id = 'adminRecievedGoodiesLI'>
                        <a href="#"><i class="fa fa-circle-o"></i> Recieved Goodies </a>
                        
                      </li>
                      <li id = 'adminSentGoodiesLI'>
                        <a href="#"><i class="fa fa-circle-o"></i> Sent Goodies </a>
                        
                      </li>
                      
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-flask"></i><span>Happy Customers</span> 
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      
                      <li  id = 'customersLI'>
                        <a href="#"><i class="fa fa-circle-o"></i> Create Happy Customers </a>
                        
                      </li>
                      <!-- id = 'allCustomersLI' -->
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-flask"></i><span>View Happy Customers</span> 
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                        <ul class="treeview-menu">
                      
                          <li  id = 'allCustomersLI'>
                            <a href="#"><i class="fa fa-circle-o"></i>My Happy Customers</a>
                            
                          </li>
                          <li id = 'adminUserHCLI'>
                            <a href="#"><i class="fa fa-circle-o"></i>User's Happy Customers </a>
                            
                          </li>
                          
                          
                        </ul>  
                      </li>
                      
                      
                    </ul>
                  </li>

                </ul>
      </section>
