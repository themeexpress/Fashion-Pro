<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Brands</a>
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
						<form class="form-horizontal" action="<?php echo base_url();?>save-brand" method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Brand Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="brand_name" id="brand_name">								
							  </div>
							</div>							
         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="2" name="brand_description"></textarea>
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
							  <button type="submit" class="btn btn-primary" name="cat_submit">Save Brand</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->