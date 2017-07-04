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

                <?php echo $this->session->flashdata("warning")?>  

                <!-- BEGIN Main Content -->              
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <div>
                                    <?php foreach ($announcements as $announ): ?>
                                    <form class="mail-compose form-horizontal" action="<?php echo base_url("announcement/update");?>" method="post">
										<input type="hidden" >
                                        <div class="form-group">
											<label for="inputlasttname" class="col-sm-1 control-label">Title</label>
												<div class="col-sm-11">
													<input type="text" class="form-control" name="title" value="<?php echo $announ->student_id;?>">
												</div>
										</div> 
										<p><textarea class="form-control wysihtml5" rows="6" name="content">textarea wyswyg</textarea></p>
										<p>
											<input type="submit" class="btn" value="Submit" name="submit">                                   
										</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->