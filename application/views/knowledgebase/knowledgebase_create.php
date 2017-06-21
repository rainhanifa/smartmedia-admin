            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-lightbulb-o"></i> ARTICLES</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url("dashboard");?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Articles</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>                

                <div class="box">
                    <div class="col sm-12">     
						<div class="mail-content-announcement">
							<form class="mail-compose form-horizontal" action="#">
								<div class="form-group">
									<label for="inputlasttname" class="col-sm-1 control-label">Title</label>
										<div class="col-sm-11">
											<input type="text" class="form-control" placeholder>
										</div>		
								</div>
								<div class="form-group">		
									<label for="inputcountry" class="col-sm-1 control-label">Category</label>
									<div class="col-sm-11">
										<select class="form-control">
											<option>Category</option>
											<option>Website</option>
											<option>Web Builder</option>
											<option>Hosting</option>
											<option>Voucher</option>
											<option>Payment</option>
										</select>
									</div>
								</div>	
								
								<div class="col sm-10">		
									<p><textarea class="form-control wysihtml5" rows="6"></textarea></p>
								</div>	
								<p>
									<input type="button" class="btn" value="Submit">
								</p>
							</form>	
						</div>								
					</div>		             
                </div>
                <!-- END Main Content -->

                
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
                