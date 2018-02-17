                        <script src="<?php echo $this->webroot;?>js/pace.min.js"></script>
                       <script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
                      
                        <script src="<?php echo $this->webroot;?>js/datatables.min.js"></script>
                         <script src="<?php echo $this->webroot;?>js/select2.min.js"></script>
                    <script src="<?php echo $this->webroot;?>js/datatables_basic.js"></script>
                        
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Products</th>
                                    <th>Products Category</th>
                                    <th>Parent Category</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(!empty($data)){
                                    $counter = 1;
                                foreach($data as $products){?>
                                <?php
                                    $productsId = $products['Product']['products_id'];
                                $productsCat = $products['PrimaryCategory']['primary_categories_name'];
                                $parentCat = $products['ParentCategory']['parent_categories_name'];?>
                                <tr>
                                    <td><?php echo $counter++;?></td>
                                    <td id="<?php echo $products['Product']['products_id'];?>"><a href="<?php echo $this->webroot;?>fmcg/productEdit?productID=<?php echo $productsId;?>"><?php echo ucwords($products['Product']['products_name']);?></a></td>
                                    <td><a href="<?php echo $this->webroot;?>fmcg/productEdit?productCat=<?php echo $productsCat;?>"><?php echo $products['PrimaryCategory']['primary_categories_name'];?></a></td>
                                    <td><a href="<?php echo $this->webroot;?>fmcg/productEdit?parentCat=<?php echo $parentCat;?>"><?php echo $products['ParentCategory']['parent_categories_name'];?></a></td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
<script>
    
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

</script>

