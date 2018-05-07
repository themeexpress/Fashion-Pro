<script type="text/javascript">
	function checkDelete(){
		var check=confirm("Are you really delete this??");
		if (check) {
			return true;
		}else {
			return false;
		}
	}
</script>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Category</a></li>
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
						<h2><i class="icon-tasks"></i><span class="break"></span>Category</h2>						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category Name</th>
								  <th>Category Description</th>	  
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
						  	 foreach ($all_category_info as $value_all_category_info) {						  	 	
						  	?>
							<tr>
								<td><?php echo $value_all_category_info->category_name;?></td>
								<td class="center"><?php echo $value_all_category_info->category_name;?></td>
								<?php if ($value_all_category_info->publication_status==1){
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
									<?php if($value_all_category_info->publication_status==1){?>
									<a class="btn btn-danger" href="<?php echo base_url()?>unpublish-category/<?php echo $value_all_category_info->category_id;?>">
										<i class="halflings-icon white thumbs-down"></i> 
									</a>
									<?php }else{?>
									<a class="btn btn-success" href="<?php echo base_url()?>publish-category/<?php echo $value_all_category_info->category_id;?>">
										<i class="halflings-icon white thumbs-up"></i> 
									</a>
									<?php }?>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-category/<?php echo $value_all_category_info->category_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()?>delete-category/<?php echo $value_all_category_info->category_id;?>" onclick="return checkDelete();">
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