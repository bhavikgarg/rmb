<?php

	session_start();
	$group = $_SESSION['group'];
	require 'config/config.php';
?>
				        <div id="message" class="col-sm-12"> 
						    <!-- This div is for taking error messages -->
						</div>


						<div class="box box-info">
						    <div class="box-header with-border">
						        <h3 class="box-title">Create New Goodies</h3>
						        
						    </div><!-- /.box-header -->
						    <!-- form start -->
						    <form class="form-horizontal" id = 'goodiesForm'>
						      <div class="box-body">
						      <br><br>
						        
											
								<div class="form-group">
						          <label for="description" class="col-sm-2 control-label">Goodie Description</label>
						          <div class="col-sm-4">
						              <textarea name = 'description' id = 'description' class = 'form-control' rows="1"></textarea>
						              <span class = 'help-block' style = 'color : red' id = 'descriptionError'></span>
						          </div>
						          <label for="date" class="col-sm-2 control-label">Validity : </label>
						          <div class="col-sm-4">
						            <div class="input-group">
						              <div class="input-group-addon">
						                <i class="fa fa-calendar"></i>
						              </div>
						              <input type="date" class="form-control"  name = 'validity' id = 'validity'>
						              <span class = 'help-block' style = 'color : red' id = 'validityError'></span>
						            </div><!-- /.input group -->
						          </div>
						        </div>
											
						        <br>
										
						        <div class="row">
						        <div class="col-sm-2"></div>
						        <div class="col-sm-10">
						        	<p>
						        	<span class="help-block">Goodie is sent to RMB admin by default. To send to others , select from below options</span>
						        	</p>

						        </div>
						        </div>
										
								<div class="form-group">
						          <label class="col-sm-2 control-label">Send this goodie to </label>
						            <div class="col-sm-10">


						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="member" id = 'member'>
						                &nbsp; Member of your group &nbsp;&nbsp;
						              </label>
						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="customers" id = 'customers'>
						                &nbsp; All your Happy Customers &nbsp;&nbsp;
						              </label>
						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="rmb" id = 'rmb' checked = "true">
						                &nbsp; RMB Admin &nbsp;&nbsp;
						              </label>
						            
						            
						            <span class = 'help-block' style = 'color : red' id = 'sendToErr'></span>
						            </div>
						        </div>
						        
						        <br><br>
								<div id = 'memberTableDiv' class="col-md-6 col-md-offset-3" style = 'display : none'>

								<table id="memberTable" class="table table-bordered table-striped">
				                    <thead>
				                      <tr>
				                      	<th></th>
				                        <th>Member Name</th>
				                        <th>Email ID</th>
				                      </tr>
				                    </thead>
				                    <tbody>
				                      <?php
				                        $getAllMembers = "SELECT distinct(EMAILID), USERNAME from grouprecord WHERE GNAME = '".$group."'";
				                        $result = mysqli_query($con, $getAllMembers);
				                        $count = 0;
				                        $htmlString = "";
				                        while($row = mysqli_fetch_array($result , MYSQLI_ASSOC))
				                        {
				                        	$radio = "<input type = 'radio' name = 'selectMember' value = '".$row['USERNAME'].",".$row['EMAILID']."'>";	
				                          	$htmlString .= "<tr><td>".$radio."</td><td>".$row['USERNAME']."</td><td>".$row['EMAILID']."</td></tr>";
				                        }
				                        echo $htmlString;
				                      ?>
				                    </tbody>
				                  </table>


								</div>						        
											
						      </div><!-- /.box-body -->
						      <div class="box-footer">
						        <div class="button-group pull-right">
						  				<button type="button" name = "submit" class="btn btn-success" id = 'submitGoodie'>Send Goodie</button>
						          <button type="reset" class="btn btn-danger">Reset</button>
						        </div>
						        <a href = 'home.php'><button type="button" class="btn btn-warning">Cancel</button></a>
						      </div><!-- /.box-footer -->
						    </form>
						</div>

					


<!-- including the js files -->
<script src = "assets/js/goodies.js"></script>
