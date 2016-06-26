
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div id="message"> 

		</div>
	</div>
</div>	
						<!-- data-toggle="modal" data-target="#uploadModal" -->
						<div class="box box-info" id = 'formDiv'>
						    <div class="box-header with-border">
						        <h3 class="box-title">Happy Customers</h3>
						        <button type="button" id = 'importExcelBTN' class = 'btn btn-info pull-right' >Import Excel Data</button>
						    </div><!-- /.box-header -->
						    <!-- form start -->
						    <form class="form-horizontal" id = 'goodiesForm'>
						      <div class="box-body">
						      <br><br>
						        
											
								<div class="form-group">
						          <label for="name" class="col-sm-2 control-label">Name</label>
						          <div class="col-sm-9">
						              <input type = 'text' class = 'form-control' id = 'name' name = 'name'>
						              <span class = 'help-block' style = 'color : red' id = 'nameError'></span>
						          </div>
						          
						        </div>

						        <div class="form-group">
						          <label for="email" class="col-sm-2 control-label">Email</label>
						          <div class="col-sm-9">
						              <input type = 'email' class = 'form-control' id = 'email' name = 'email'>
						              <span class = 'help-block' style = 'color : red' id = 'emailError'></span>
						          </div>
						          
						        </div>
						        <div class="form-group">
						          <label for="contact" class="col-sm-2 control-label">Contact</label>
						          <div class="col-sm-9">
						              <input type = 'number' class = 'form-control' id = 'contact' name = 'contact'>
						              <span class = 'help-block' style = 'color : red' id = 'contactError'></span>
						          </div>
						          
						        </div>
						        <div class="form-group">
						          <label for="address" class="col-sm-2 control-label">Address</label>
						          <div class="col-sm-9">
						              <textarea class = 'form-control' id = 'address' name = 'address' maxlength="200"></textarea>
						              <span class = 'help-block' style = 'color : red' id = 'addressErr'></span>
						          </div>
						          
						        </div>
											
						        <div class="form-group">
						          <label for="site" class="col-sm-2 control-label">Website (if any)</label>
						          <div class="col-sm-9">
						              <input type = 'text' class = 'form-control' id = 'website' name = 'website'>
						              <span class = 'help-block' style = 'color : red' id = 'websiteErr'></span>
						          </div>
						          
						        </div>
										
						        <div class="form-group">
						          
						          <label for="dob" class="col-sm-2 control-label">D.O.B : </label>
						          <div class="col-sm-4">
						            <div class="input-group">
						              <div class="input-group-addon">
						                <i class="fa fa-calendar"></i>
						              </div>
						              <input type="date" class="form-control"  name = 'dob' id = 'dob'>
						              <span class = 'help-block' style = 'color : red' id = 'dobErr'></span>
						            </div><!-- /.input group -->
						          </div>

						          <label for="doa" class="col-sm-2 control-label">D.O.A : </label>
						          <div class="col-sm-3">
						            <div class="input-group">
						              <div class="input-group-addon">
						                <i class="fa fa-calendar"></i>
						              </div>
						              <input type="date" class="form-control"  name = 'doa' id = 'doa'>
						              <span class = 'help-block' style = 'color : red' id = 'doaErr'></span>
						            </div><!-- /.input group -->
						          </div>
						        </div>
										
								
											
						      </div><!-- /.box-body -->
						      <div class="box-footer">
						        <div class="button-group pull-right">
						  				<button type="button" name = "submit" class="btn btn-success" id = 'submitApplication'>Submit</button>
						          <button type="reset" class="btn btn-danger">Reset</button>
						        </div>
						        <a href = 'home.php'><button type="button" class="btn btn-warning">Cancel</button></a>
						      </div><!-- /.box-footer -->
						    </form>
						</div>
						<div id = 'uploadDiv' style="display : none">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="box box-info" id = 'formDiv'>
									    <div class="box-header with-border">
									        <h3 class="box-title">Upload Excel</h3>
									        <button type="button" id = 'formBTN' class = 'btn btn-info pull-right' >Back to Form</button>
									    </div><!-- /.box-header -->
									    <!-- form start -->
									    <form class="form-horizontal" runat = "server" id = 'fileUploadForm'>
									      <div class="box-body">
									      <br><br>
									        
														
											<div class="form-group">
									          <label for="name" class="col-sm-2 control-label">Select File</label>
									          <div class="col-sm-9">
									              <input type = 'file' id = 'file' name = 'file'>
									              <span class="help-block" id = 'fileError' style = 'color : red'></span>
									          </div>
									          
									        </div>

									        <div class = "row">

									        <div class="col-sm-9 col-sm-offset-2">
									        	<span>To download the sample format for uploading happy customer data , click <a href = 'download.php?name=demo.xlsx'>Here</a></span>

									        </div>	
									        </div>
									        
													
											
														
									      </div><!-- /.box-body -->
									      <div class="box-footer">
									        <div class="button-group pull-right">
									  				<button type="submit" name = "upload" class="btn btn-success" id = 'upload'>
									  					Upload
									  				</button>
									          <button type="reset" class="btn btn-danger">Reset</button>
									        </div>
									        <a href = 'home.php'><button type="button" class="btn btn-warning">Cancel</button></a>
									      </div><!-- /.box-footer -->
									    
									</div>		
								</form>			
								</div>
							</div>
						</div>
					

<script type="text/javascript" src = 'assets/js/customers.js'></script>	        