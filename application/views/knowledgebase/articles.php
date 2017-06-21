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
			
				<!-- Modal -->
                <div class="modal fade modal-white" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Delete this article?</h4>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<button class="btn btn-info" data-dismiss="modal">DELETE</button>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
				<!-- END Modal-->
				<!-- Modal2 -->
                <div class="modal fade modal-white" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                            </div>
                            <div class="modal-body">                            
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-lg-12 controls">
                                            <input type="text" name="sitedesc" id="sitedesc" class="form-control" placeholder="Category name">
                                        </div>
                                    </div>
                                </div>                 
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
								<button class="btn btn-info" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>
				<!-- END Modal2-->
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>                

                <div class="box">
                    <a href="<?php echo base_url("knowledgebase/add");?>" class="btn btn-info">ADD NEW</a>
					<br/>
					<br/>        
                    <div class="table-responsive">
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Article Name</th>
									<th>Writer</th>
									<th>Date</th>
									<th>Category</th>
									<th>Publish</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                               
                                    <td>1</td>
									<td>How to Create Website</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td>Website</td>
									<td> 
										<div class="make-switch switch-mini">
											<input type="checkbox" checked />
										</div>
									</td>
									<td><a href="<?php echo base_url("knowledgebase/update");?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <tr>   
									<td>2</td>
                                    <td>How to Send Mail</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td>Webmile</td>
									<td> 
										<div class="make-switch switch-mini">
											<input type="checkbox" checked />
										</div>
									</td>
									<td><a href="<?php echo base_url("knowledgebase/update");?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
									
                                </tr>
								<tr>
									<td>3</td>
									<td>Buying New Theme</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td>Web Builder</td>
									<td> 
										<div class="make-switch switch-mini">
											<input type="checkbox" checked />
										</div>
									</td>
									<td><a href="<?php echo base_url("knowledgebase/update");?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
								</tr>	
									
                                <tr>   
									<td>4</td>
									<td>Extend Active Date</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td>Website</td>
									<td> 
										<div class="make-switch switch-mini">
											<input type="checkbox" checked />
										</div>
									</td>
									<td><a href="<?php echo base_url("knowledgebase/update");?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                </tr>                                                       
                            </tbody>
                        </table>
                    </div>

                    <p class="text-right">
                        1-12 of 46
                        <a class="btn btn-circle disabled" href="#"><i class="fa fa-angle-left"></i></a>
                        <a class="btn btn-circle" href="#"><i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
                <!-- END Main Content -->