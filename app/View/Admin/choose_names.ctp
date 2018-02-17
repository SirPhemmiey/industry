						<script src="<?php echo $this->webroot;?>js/pace.min.js"></script>
                       <script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
                      
                        <script src="<?php echo $this->webroot;?>js/datatables.min.js"></script>
                         <script src="<?php echo $this->webroot;?>js/select2.min.js"></script>
                    <script src="<?php echo $this->webroot;?>js/datatables_basic.js"></script>
                        
						<table class="table table-bordered datatable">
						<?php
						if(!empty($data)){
                                    $counter = 1;
						?>
							<thead>
								<tr>
								    <th>Serial No</th>
									<th>Products</th>
									<th>Sub Category</th>
                                    <th>Parent Category</th>
                                    <th>Date Added</th>
								</tr>
							</thead>
							<tbody>
							<?php 
                                foreach($data as $products){?>
                                <?php
                                $raw_date = $products['Product']['date'];
                                //    $productsId = $products['Product']['products_id'];
                                //$productsCat = $products['PrimaryCategory']['primary_categories_name'];
                                //$parentCat = $products['ParentCategory']['parent_categories_name'];?>
								<tr>
									<td><?php echo $counter++;?></td>
									<td id="<?php echo $products['Product']['products_id'];?>"><?php echo ucwords($products['Product']['products_name']);?></td>
									<td><?php echo $products['PrimaryCategory']['primary_categories_name'];?></td>
                                    <td><?php echo $products['ParentCategory']['parent_categories_name'];?></td>
                                    <td><?php echo $products['Product']['date'];?></td>
								</tr>
								<?php }?>
							</tbody>
							<?php }?>

							<?php
						if(!empty($data_parent)){
                                    $counter = 1;
						?>
							<thead>
								<tr>
								    <th>Serial No</th>
                                    <th>Parent Category</th>
                                    <th>Date Added</th>
								</tr>
							</thead>
							<tbody>
							<?php 
                                foreach($data_parent as $parent_cat){?>
                                <?php
                                $raw_date = $parent_cat['ParentCategory']['date'];
                                //    $productsId = $products['Product']['products_id'];
                                //$productsCat = $products['PrimaryCategory']['primary_categories_name'];
                                //$parentCat = $products['ParentCategory']['parent_categories_name'];?>
								<tr>
									<td><?php echo $counter++;?></td>
                                    <td><?php echo $parent_cat['ParentCategory']['parent_categories_name'];?></td>
                                    <td><?php echo $parent_cat['ParentCategory']['date'];?></td>
								</tr>
								<?php }?>
							</tbody>
							<?php }?>

								<?php
						if(!empty($data_primary)){
                                    $counter = 1;
						?>
							<thead>
								<tr>
								    <th>Serial No</th>
                                    <th>Primary Category</th>
                                    <th>Date Added</th>
								</tr>
							</thead>
							<tbody>
							<?php 
                                foreach($data_primary as $primary_cat){?>
                                <?php
                                $raw_date = $primary_cat['PrimaryCategory']['date'];
                                //    $productsId = $products['Product']['products_id'];
                                //$productsCat = $products['PrimaryCategory']['primary_categories_name'];
                                //$parentCat = $products['ParentCategory']['parent_categories_name'];?>
								<tr>
									<td><?php echo $counter++;?></td>
                                    <td><?php echo $primary_cat['PrimaryCategory']['primary_categories_name'];?></td>
                                    <td><?php echo $primary_cat['PrimaryCategory']['date'];?></td>
								</tr>
								<?php }?>
							</tbody>
							<?php }?>

									<?php
						if(!empty($data_company)){
                                    $counter = 1;
						?>
							<thead>
								<tr>
								    <th>Serial No</th>
                                    <th>Company</th>
                                    <th>Date Added</th>
								</tr>
							</thead>
							<tbody>
							<?php 
                                foreach($data_company as $company){?>
                                <?php
                                $raw_date = $company['Company']['date'];
                                //    $productsId = $products['Product']['products_id'];
                                //$productsCat = $products['PrimaryCategory']['primary_categories_name'];
                                //$parentCat = $products['ParentCategory']['parent_categories_name'];?>
								<tr>
									<td><?php echo $counter++;?></td>
                                    <td><?php echo $company['Company']['companies_name'];?></td>
                                    <td><?php echo $company['Company']['date'];?></td>
								</tr>
								<?php }?>
							</tbody>
							<?php }?>
							
						</table>
<script>
    
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

</script>

