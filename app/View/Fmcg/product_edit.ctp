
<div class="row">
<div class="col-md-12">
<form action="<?php echo $this->webroot;?>fmcg/productEdit" enctype="multipart/form-data" method="post" id="myForm">
<div class="panel panel-flat">
<div class="panel-heading">
<div class="row">

<?php if(isset($product_name)){?>
<div class="col-md-10 col-md-offset-1">
    <h3 class="panel-title"></h3>
    <?php foreach($product_name as $forImage)?>
    <?php $img = $forImage['Product']['products_image'];?>
      
        <img  src="<?php echo $this->webroot;?>img/<?php echo $img; ?>" alt="" class="img-rounded" height="150" width="150">
        <button type="button" id="image_btn" class="btn btn-sm btn-primary"><i class="icon-camera"></i> Change Picture</button>
       
</div>
<?php }?>
<?php if(isset($product_cat)){?>
<div class="col-md-10 col-md-offset-1">
     <h5>Showing List of Products in : </h5>
    <b>Category</b> : <span class="panel-title"><?php echo ucwords($getCat);?></span> <br>
    <b>Company</b> : <span class="panel-title">All</span> <br>
    <b>Industry</b> : <span class="panel-title">FMCG</span> <br>
</div>
<?php }?>
<?php if(isset($productCompID)){?>
<div class="col-md-10 col-md-offset-1">
    <h5>Showing All Products in : </h5>
    <b>Category</b> : <span class="panel-title">All</span> <br>
    <b>Industry</b> : <span class="panel-title">FMCG</span> <br>
    <b>Company</b> : <span class="panel-title"><?php echo $company_name;?></span>
</div>
<?php }?>
<?php if(isset($parentProductCompID)){?>
<div class="col-md-10 col-md-offset-1">
    <h5>Showing All Products in : </h5>
    <b>Sub Category</b> : <span class="panel-title">All</span> <br>
    <b>Parent Category</b> : <span class="panel-title"><?php echo ucwords($getParentCat);?></span> <br>
    <b>Industry</b> : <span class="panel-title">FMCG</span> <br>
    <b>Company</b> : <span class="panel-title">All</span>
</div>
<?php }?>
<div class="col-md-10 col-md-offset-5">
    <h4>
    <div class="dropdown"> 
    <button type="button" class="btn dropdown-toggle btn-primary btn-sm" id="dropdownMenu1" data-toggle="dropdown"><i class="icon-plus22"></i> Add New <span class="caret"></span> </button> 
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
     <li role="presentation" > <a role="menuitem"  href="<?php echo $this->webroot;?>fmcg/addProducts">Product</a> </li> 
     <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>fmcg/addSubCategory">Sub Category</a> </li> 
     <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>fmcg/addParentCategory"> Parent Category </a> </li>
     <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>fmcg/addCompany"> Company </a> </li>  
 </ul> </div>
    </h4>

</div>
<div class="col-md-9">
    <a href="<?php echo $this->webroot;?>fmcg/deleteProduct"><button type="button" class="btn btn-primary btn-sm">Delete Product</button></a>
</div>
</div>
</div>


<div class="panel-body">

<div class="row">
<div class="col-md-10 col-md-offset-1">
    <?php if(isset($product_name)){?>
        <?php foreach($product_name as $name){?>
            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" id="product_name" required name="data[Product][products_name]" class="form-control" value="<?php echo $name['Product']['products_name']; ?>">
                <input type="hidden" name="data[Product][products_id]" value="<?php echo $name['Product']['products_id'];?>">
                <input type="hidden" name="data[Product][companies_id]" value="<?php echo $name['Product']['companies_id'];?>">
            </div>

                <div class="form-group">
                    <label>Sub Category:</label>
                    <div class="multi-select-full">
                        <select required name="data[ProductsCategory][primary_categories_id][]" class="multiselect-filtering" multiple="multiple">
                            <?php if(isset($PrimaryAndParentCat)){?>
                                <?php foreach($PrimaryAndParentCat as $cat){?>
                                    <option selected value="<?php echo $cat['PrimaryCategory']['primary_categories_id'];?>">
                                        <?php echo ucfirst($cat['PrimaryCategory']['primary_categories_name']);?>
                                    </option>
                                    <?php }} ?>
                                     <?php if(isset($specificPrimaryCat)){?>
                                <?php foreach($specificPrimaryCat as $cat){?>
                                    <option value="<?php echo $cat['PrimaryCategory']['primary_categories_id'];?>">
                                        <?php echo ucfirst($cat['PrimaryCategory']['primary_categories_name']);?>
                                    </option>
                                    <?php }} ?>
                        </select>
                    </div>
                </div>
                
                   <div class="form-group">
                    <label>Parent Category:</label>
                    <div class="multi-select-full">
                        <select required name="data[Product][parent_categories_id]" class="multiselect-filtering">
                            <?php if(isset($PrimaryAndParentCat)){?>
                                <?php foreach($PrimaryAndParentCat as $catSelect){?>
                                    <option selected value="<?php echo $catSelect['ParentCategory']['parent_categories_id'];?>">
                                        <?php echo ucfirst($catSelect['ParentCategory']['parent_categories_name']);?>
                                    </option>
                                    <?php }} ?>
                                     <?php if(isset($specificParentCat)){?>
                                <?php foreach($specificParentCat as $cat1){?>
                                    <option value="<?php echo $cat1['ParentCategory']['parent_categories_id'];?>">
                                        <?php echo ucfirst($cat1['ParentCategory']['parent_categories_name']);?>
                                    </option>
                                    <?php }} ?>
                        </select>
                    </div>
                </div>
                
                  <div class="form-group">
                    <label>Company:</label>
                    <div class="multi-select-full">
                        <select required name="data[Product][companies_id]" class="multiselect-filtering">
                            <?php if(isset($PrimaryAndParentCat)){?>
                                <?php foreach($PrimaryAndParentCat as $catSelect){?>
                                    <option selected value="<?php echo $catSelect['Company']['companies_id'];?>">
                                        <?php echo ucfirst($catSelect['Company']['companies_name']);?>
                                    </option>
                                    <?php }} ?>
                                     <?php if(isset($specificCompany)){?>
                                <?php foreach($specificCompany as $coy){?>
                                    <option value="<?php echo $coy['Company']['companies_id'];?>">
                                        <?php echo ucfirst($coy['Company']['companies_name']);?>
                                    </option>
                                    <?php }} ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Product Image:</label>
                     <?php $image = $name['Product']['products_image'];?>
                    <input type="file" id="product_image" class="file-styled" name="data[Product][products_image]">
                    <span class="help-block">Accepted formats: .gif, .png, .jpg Max file size 2Mb</span>
</div>

<div class="form-group">
    <label>Related Tags:</label>
    <?php $tags = $name['Product']['tags'];?>
    <input type="text" id="tags" value="<?php if(!empty($tags)){ echo ucfirst($tags);}?>" required class="form-control" name="data[Product][tags]">
</div>

<div class="form-group">
    <label>Product Description:</label>
    <?php $Pdesc = $name['Product']['products_description'];?>
    <textarea rows="5" id="product_description" required id="prodDesc" cols="5" onkeyup="countChar(this)" class="form-control" name="data[Product][products_description]" placeholder="Enter the product description"><?php echo ucfirst($Pdesc);?></textarea>
    <span class="help-block">Max length: 150 characters <p id="charNum" style="color:red;"></p></span>
</div>
        <?php }?>
<div class="text-right">
    <button type="button" class="btn btn-primary" id="update">Update <i class="icon-arrow-right14 position-right"></i></button>
</div>
</div>
</div>
<?php }?>
</form>


<?php if(isset($product_cat)){?>
<table class="table datatable table-bordered">
<thead>
<tr>
<th>Serial No</th>
<th>List of Products</th>
<th>Companies</th>
</tr>
</thead>
<tbody>
<?php 
if(!empty($product_cat)){
$counter = 1;
foreach($product_cat as $products){?>
<?php
$productsId = $products['Product']['products_id'];
$companyID = $products['Company']['companies_id'];?>
    <tr>
        <td>
            <?php echo $counter++;?>
        </td>
        <td id="<?php echo $products['Product']['products_id'];?>">
            <a href="<?php echo $this->webroot;?>fmcg/productEdit?productID=<?php echo $productsId;?>">
                <?php echo ucwords($products['Product']['products_name']);?>
            </a>
        </td>
        <td>
           <a href="<?php echo $this->webroot;?>fmcg/productEdit?ProductCompanyID=<?php echo $companyID;?>">
                <?php echo $products['Company']['companies_name'];?>
            </a>
        </td>
    </tr>
    <?php }}?>
</tbody>
</table>

<?php } ?>
<?php if(isset($productCompID)){?>
	<table class="table table-bordered datatable">
							<thead>
								<tr>
								    <th>Serial No</th>
									<th>Products</th>
									<th>Sub Category</th>
                                    <th>Parent Category</th>
								</tr>
							</thead>
							<tbody>
							<?php 
                                if(!empty($productCompID)){
                                    $counter = 1;
                                foreach($productCompID as $products){?>
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
<?php }?>
<?php if(isset($parentProductCompID)){?>
    <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Products</th>
                                    <th>Sub Category</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(!empty($parentProductCompID)){
                                    $counter = 1;
                                foreach($parentProductCompID as $prod){?>
                                <?php
                                    $productsId = $prod['Product']['products_id'];
                                $parentProductsCat = $prod['PrimaryCategory']['primary_categories_name'];
                                $productsCat = $prod['PrimaryCategory']['primary_categories_name'];
                                $productCompanyID = $prod['Company']['companies_id'];?>
                                <tr>
                                    <td><?php echo $counter++;?></td>
                                    <td id="<?php echo $prod['Product']['products_id'];?>"><a href="<?php echo $this->webroot;?>fmcg/productEdit?productID=<?php echo $productsId;?>"><?php echo ucwords($prod['Product']['products_name']);?></a></td>
                                    <td><a href="<?php echo $this->webroot;?>fmcg/productEdit?productCat=<?php echo $productsCat;?>"><?php echo $prod['PrimaryCategory']['primary_categories_name'];?></a></td>
                                    <td><a href="<?php echo $this->webroot;?>fmcg/productEdit?ProductCompanyID=<?php echo $productCompanyID;?>"><?php echo $prod['Company']['companies_name'];?></a></td>
                                    
                                    
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
<?php }?>
</div>

</div>

</div>

<!-- /form centered -->
<script>
function limitText(field, maxChar) {
$("#prodDesc").attr('maxlength', 150);
}
limitText();

function countChar(val) {
var len = val.value.length;
if (len >= 150) {
val.value = val.value.substring(0, 150);
} else {
$('#charNum').text(150 - len);
}
};
$(document).ready(function () {

$("#tags").tagit();
$(document).on('click', '#update', function () {
// bootbox.confirm("Are you sure you want to make changes?.", function(){
       var product_description = $("#product_description").val();
        var tags = $("#tags").val();
        var product_name = $("#product_name").val();
        if(product_description == '' || tags == '' || product_name == ''){
            alert("Fields cannot be empty");
        }
else{
    swal({
title: "Do you really want to make changes?",
text: "You will not be able to revert the changes!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#EF5350",
confirmButtonText: "Yes, update it.",
cancelButtonText: "No, cancel pls.",
closeOnConfirm: false,
closeOnCancel: false
},
function (isConfirm) {
if (isConfirm) {
    
    $("#myForm").ajaxForm({
           success: function () {
        //alert("Update is successful.");
        swal({
            title: "Done!",
            text: "Update was successful.",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    },
    error: function (error) {
            //$("#updating").html("An error occured " + error);
            swal({
                title: "Oops...",
                text: "Something went wrong!",
                confirmButtonColor: "#EF5350",
                type: "error"
            });
        } //Close error
    }).submit();
     
} //EndIf
else {
swal({
    title: "Cancelled",
    text: "No changes was made :-)",
    confirmButtonColor: "#2196F3",
    type: "error"
});
} //End else
}); //End combination

}
});//Close the click handler

  $(document).ajaxStop(function(){
        window.location = '<?php echo $this->webroot;?>fmcg';
    });

 $("#image_btn").click(function () {
             $("#product_image").trigger('click');
        });
});
</script>