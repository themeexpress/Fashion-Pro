<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Brand</a></li>
			</ul>
			<h3 style="color:green">
						<?php 
						$message=$this->session->userdata('message');
						if ($message) {
							echo $message;
							$this->session->unset_userdata('message');
						}
						?>
					</h3>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-tasks"></i><span class="break"></span>Brand</h2>						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Brand Name</th>
								  <th>Brand Description</th>				  
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
						  	 foreach ($all_brand_info as $value_all_brand_info) {						  	 	
						  	?>
							<tr>
								<td><?php echo $value_all_brand_info->brand_name;?></td>
								<td class="center"><?php echo $value_all_brand_info->brand_description;?></td>
								<?php if ($value_all_brand_info->publication_status==1){
								?>
								<td class="center">
									<span class="label label-success">Published</span>
								</td>
								<?php }else{?>
								<td class="center">
									<span class="label label-danger">Unpublished</span>
								</td>
								<?php }?>
								<td class="center">
									 <?php if($value_all_brand_info->publication_status==1){?>
									<a class="btn btn-danger" href="<?php echo base_url()?>unpublished-brand/<?php echo $value_all_brand_info->brand_id;?>">
										<i class="halflings-icon white thumbs-down"></i> 
									</a>
									<?php }else{ ?>
									<a class="btn btn-success" href="<?php echo base_url()?>published-brand/<?php echo $value_all_brand_info->brand_id;?>">
										<i class="halflings-icon white thumbs-up"></i> 
									</a>
									<?php } ?>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-brand/<?php echo $value_all_brand_info->brand_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>									
									<a class="btn btn-danger" href="<?php echo base_url()?>delete-brand/<?php echo $value_all_brand_info->brand_id;?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->