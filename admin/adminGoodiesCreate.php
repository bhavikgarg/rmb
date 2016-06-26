<?php
	require '../config/config.php';
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
						        	<span class="help-block">Goodie is sent to all happy customers by default. To send to others , select from below options</span>
						        	</p>

						        </div>
						        </div>
										
								<div class="form-group">
						          <label class="col-sm-2 control-label">Send this goodie to </label>
						            <div class="col-sm-10">


						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="all" id = 'all'>
						                &nbsp; All Members of Group &nbsp;&nbsp;
						              </label>
						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="member" id = 'pMember'>
						                &nbsp; Particular Member of a group &nbsp;&nbsp;
						              </label>
						              <label class="col-md-4">
						                <input type="radio" name="sendTo" class="minimal" value="customers" id = 'customers' checked = "true">
						                &nbsp; All Happy Customers &nbsp;&nbsp;
						              </label>
						            
						            
						            <span class = 'help-block' style = 'color : red' id = 'sendToErr'></span>
						            </div>
						        </div>
						        <br><br>
						        <div id = 'selectGroup' class="col-md-8 col-md-offset-2" style = "display : none">
						        	<div class="form-group">
							          <label for="description" class="col-sm-4 control-label">Select Group Name</label>
							          <div class="col-sm-6">
							              <select class = 'form-control groupSelect' name = 'groupName' id = 'groupName'>
							              <!-- to be filled in dynamically -->
							              </select>
							          </div>
							        </div>
						        </div>

						        
								<div id = 'memberOfGroup' class="col-md-10 col-md-offset-1" style = "display : none">
						        	<div class="form-group">
							          <label for="description" class="col-sm-4 control-label">Select Group Name</label>
							          <div class="col-sm-6">
							              <select class = 'form-control groupSelect' name = 'group' id = 'groupName' onchange="loadMembers(this.value)">
							              <!-- to be filled in dynamically -->
							              </select>
							          </div>
							        </div>

									<div id = 'memberTableDiv' style = "display : none">

										<table class="table table-bordered table-striped" id = 'memberTable'>
											<thead>
												<tr>
													<th></th>
													<th>Member Name</th>
													<th>Email ID</th>
												</tr>
											</thead>
											<tbody id = "t">
											</tbody>
										</table>


									</div>						        
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
<script src = "assets/js/admingoodies.js"></script>
