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
								  <th>Pruduct Name</th>
								  <th>Short Description</th> 								  
								  <th>Price</th>
                                  <th>Sale Price</th>                                  
                                  <th>Is Featured</th>
                                  <th>Image</th> 
                                  <th>Status</th> 
                                  <th>Actions</th>                                   
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
						  	 foreach ($products_info as $product_info) {						  	 	
						  	?>
							<tr>
								<td><?php echo $product_info->product_name;?></td>
                                <td><?php $this->load->helper('text');
                                $string=$product_info->product_short_description;
                                echo word_limiter($string, 6);
                                ?></td>                               
                                <td><?php echo $product_info->product_price;?></td>                                
                                <td><?php echo $product_info->product_sale_price;?></td>
                                <td><?php echo $product_info->is_featured;?></td>
                                <td><img style="height:80px;width:80px;" src="<?php echo $product_info->product_image;?>"></td>
                                <?php if ($product_info->publication_status==1){
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
									<?php if($product_info->publication_status==1){?>
									<a class="btn btn-danger" href="<?php echo base_url()?>unpublish-product/<?php echo $product_info->product_id;?>">
										<i class="halflings-icon white thumbs-down"></i> 
									</a>
									<?php }else{?>
									<a class="btn btn-success" href="<?php echo base_url()?>publish-product/<?php echo $product_info->product_id;?>">
										<i class="halflings-icon white thumbs-up"></i> 
									</a>
									<?php }?>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-product/<?php echo $product_info->product_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()?>delete-product/<?php echo $product_info->product_id;?>" onclick="return checkDelete();">
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