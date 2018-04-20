<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							<?php 
							$all_category=$this->Super_admin_model->all_published_category();
							foreach ($all_category as $category_info) {
							
							?>
																					
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><?php echo $category_info->category_name; ?></a></h4>
								</div>
							</div>
							<?php } ?>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php $all_published_brand=$this->Super_admin_model->get_published_brand_info();
								foreach ($all_published_brand as $all_published_brands) {
								
									?>
									<li><a href="#"> <span class="pull-right">(50)</span><?php echo $all_published_brands->brand_name;?></a></li>
									<?php }?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>