<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit Brands</a>
				</li>
			</ul>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Brand Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<h3 style="color:green">
						<?php 
						$message=$this->session->userdata('message');
						if ($message) {
							echo $message;
							$this->session->unset_userdata('message');
						}
						?>
					</h3>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url();?>update-brand" method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Brand Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="brand_name" value="<?php echo $single_brand_info->brand_name;?>">								
                                <input type="hidden" class="span6 typeahead" name="brand_id" value="<?php echo $single_brand_info->brand_id;?>">
                            </div>
							</div>							
         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="2" name="brand_description">
                                value="<?php echo $single_brand_info->brand_description;?>"
                                </textarea>
							  </div>
							</div>							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="cat_submit">Update Brand</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->