<?php
	require 'config/config.php';
?>
					<div class="row">
				        <div id="message" class="col-sm-12"> 
						    <!-- This div is for taking error messages -->
						</div>
					</div>	

						<div class="box box-info">
						    <div class="box-header with-border">
						        <h3 class="box-title">Post a Reference</h3>
						        
						    </div><!-- /.box-header -->
						    <!-- form start -->
						    <form class="form-horizontal" id = 'referenceForm'>
						      <div class="box-body">
						      <br><br>
						        
											
								<div class="form-group">
						          <label for="Reference" class="col-sm-2 control-label">Reference</label>
						          <div class="col-sm-4">
						              <textarea name = 'reference' id = 'reference' class = 'form-control' rows="2"></textarea>
						              <span class = 'help-block' style = 'color : red' id = 'referenceError'></span>
						          </div>

						          <label for="remark" class="col-sm-2 control-label">Any Remark</label>
						          <div class="col-sm-4">
						              <textarea name = 'remark' id = 'remark' class = 'form-control' rows="2"></textarea>
						              <span class = 'help-block' style = 'color : red' id = 'remarkError'></span>
						          </div>
						          
						        </div>
											
						        
										
						        
										
								<div class="form-group">
						          <label class="col-sm-2 control-label">Select Category </label>
						            


						              <label class="col-md-4">
						                <select name = "category" id = "category" class="form-control categorySelect" onchange = load(this.value)></select>
						              </label>
						              
						            <span class = 'help-block' style = 'color : red' id = 'categoryErr'></span>
						            
						        </div>

						        <div class="row">
						        	<div class="col-sm-10 col-sm-offset-2">
						        		<div id = 'tableDiv'>
						        		</div>
						        	</div>
						        </div>
						        
						        <div class="row">
						        	<div class="col-sm-2 col-sm-offset-2">
						        		<h4> User Information </h4>
						        		<hr>	
						        	</div>

						        </div>

						        <div class="form-group">
						          <label for="name" class="col-sm-2 control-label">Name</label>
						          <div class="col-sm-4">
						              <input type = "text" name = "name" id = "name" class="form-control">
						              <span class = 'help-block' style = 'color : red' id = 'nameError'></span>
						          </div>
						        </div>

						        <div class="form-group">
						          <label for="address" class="col-sm-2 control-label">Address</label>
						          <div class="col-sm-4">
						              <input type = "text" name = "address" id = "address" class="form-control">
						              <span class = 'help-block' style = 'color : red' id = 'addressError'></span>
						          </div>
						        </div>

						        <div class="form-group">
						          <label for="name" class="col-sm-2 control-label">Contact</label>
						          <div class="col-sm-4">
						              <input type = "number" name = "contact" id = "contact" class="form-control">
						              <span class = 'help-block' style = 'color : red' id = 'contactError'></span>
						          </div>
						        </div>

						        <div class="form-group">
						          <label for="name" class="col-sm-2 control-label">Email ID</label>
						          <div class="col-sm-4">
						              <input type = "email" name = "email" id = "email" class="form-control">
						              <span class = 'help-block' style = 'color : red' id = 'emailError'></span>
						          </div>
						        </div>  

						        <br><br>
													        
											
						      </div><!-- /.box-body -->
						      <div class="box-footer">
						        <div class="button-group pull-right">
						  			<button type="submit" name = "submit" class="btn btn-success" id = 'postReference'>Post Reference</button>
						          <button type="reset" class="btn btn-danger">Reset</button>
						        </div>
						        <a href = 'home.php'><button type="button" class="btn btn-warning">Cancel</button></a>
						      </div><!-- /.box-footer -->
						    </form>
						</div>

					


<!-- including the js files -->
<script src = "assets/js/reference.js"></script>
