            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-bullhorn"></i> ANNOUNCEMENT</h1>
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
                        <li class="active">Announcement</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <?php echo $nama_variable_flash?>
			
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
				
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>                

                <div class="box">
                    <a href="<?php echo base_url("announcement/add");?>" class="btn btn-info">ADD NEW</a>
					<br/>
					<br/>        
                        <table class="table table-advance" id="announcement-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>#</th>
                                    <th>Article Name</th>
									<th>Writer</th>
									<th>Date</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $counter = 0;
                                foreach($announcement as $list){
                                    $counter++;
                            ?>
                            <tr>   
                                    <td><?php $counter;?></td>
                                    <td><?php echo $list['title_announcement']?></td>
                                    <td>Administrator</td>
                                    <td>30/05/2017</td>
                                    <td><a href="<?php echo base_url('announcement/update')?>" class="glyphicon glyphicon-pencil"></a></td>
                                    <td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                            <?php  } ?>
                                <!--tr>                               
                                    <td>1</td>
									<td>How to Create Website</td>
									<td>Administrator</td>
									<td>30/05/2017</td>									
									<td><a href="<?php echo base_url('announcement/update')?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                    
                                </tr>
                                <tr>   
									<td>2</td>
                                    <td>How to Send Mail</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td><a href="<?php echo base_url('announcement/update')?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
									
                                </tr>
								<tr>
									<td>3</td>
									<td>Buying New Theme</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td><a href="<?php echo base_url('announcement/update')?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
								</tr>	
									
                                <tr>   
									<td>4</td>
									<td>Extend Active Date</td>
									<td>Administrator</td>
									<td>30/05/2017</td>
									<td><a href="<?php echo base_url('announcement/update')?>" class="glyphicon glyphicon-pencil"></a></td>
									<td><a data-toggle="modal" data-target="#delete" class="glyphicon glyphicon-trash"></a></td>
                                </tr -->                                                       
                            </tbody>
                        </table>
                </div>
                <!-- END Main Content -->