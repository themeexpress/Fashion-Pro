<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Sub category</a>
				</li>
			</ul>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Sub Category Information</h2>
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
						<form class="form-horizontal" action="<?php echo base_url();?>save-sub-category" method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Sub Category Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="sub_cat_name" id="sub_cat_name">								
							  </div>
                            </div>                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Category Name</label>
                              <select name="category_id">
									<option>Select Category</option>
									<?php foreach($all_published_category_info as $all_published_category){ ?>
									<option value="<?php echo $all_published_category->category_id;?>"><?php echo $all_published_category->category_name;?></option>	
									<?php } ?>								
								</select>	
							</div>        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Sub Category Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="sub_cat_description"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Publication Status</label>
							  <div class="controls">
								<select name="publication_status">
									<option>Select Option</option>
									<option value="1">Published</option>
									<option value="0">Unpublished</option>
								</select>								
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="sub_cat_submit">Save Sub Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->