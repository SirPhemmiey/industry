
<div class="row">
<div class="col-md-12">
<form action="<?php echo $this->webroot;?>electronics/addProducts" enctype="multipart/form-data" method="post">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>Add Products</h3>
                </div>
            </div>
        </div>

        
        <div class="panel-body">

            <div class="row">
                <?php if(isset($success)){?>
                    <script>
                         bootbox.alert("<?php echo $success;?>");
                    </script>
                <?php }?>
                 <?php if(isset($duplicate)){?>
                    <script>
                         bootbox.alert("<?php echo $duplicate;?>");
                    </script>
                <?php }?>
                 <?php if(isset($error)){?>
                  <script>
                         bootbox.alert("<?php echo $error;?>");
                    </script>
                <?php }?>
                <div class="col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <label>Product Name:</label>
                                <input type="text" required name="data[Product][products_name]" class="form-control" id="products_name">
                            </div>
                            
                                <div class="form-group">
                                    <label>Sub Category:</label>
                                    <div class="multi-select-full">
                                        <select required name="data[Product][primary_categories_id][]" class="multiselect-filtering" multiple="multiple">
                                               <option value="">None</option>
                                                <?php foreach($allPrimaryCat as $cat){?>
                                                    <option value="<?php echo $cat['PrimaryCategory']['primary_categories_id'];?>">
                                                        <?php echo $cat['PrimaryCategory']['primary_categories_name'];?>
                                                    </option>
                                                    <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Parent Category:</label>
                                    <div class="multi-select-full">
                                        <select required name="data[Product][parent_categories_id]" class="multiselect-filtering">
                                               <option value="">None</option>
                                                <?php foreach($allParentCat as $cat1){?>
                                                    <option value="<?php echo $cat1['ParentCategory']['parent_categories_id'];?>">
                                                        <?php echo $cat1['ParentCategory']['parent_categories_name'];?>
                                                    </option>
                                                    <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                    <div class="form-group">
                                    <label>Company:</label>
                                    <div class="multi-select-full">
                                        <select required name="data[Product][companies_id]" class="multiselect-filtering">
                                            <option value="">Please select a company</option>
                                                <?php foreach($companies as $coy){?>
                                                    <option value="<?php echo $coy['Company']['companies_id'];?>">
                                                        <?php echo $coy['Company']['companies_name'];?>
                                                    </option>
                                                    <?php }?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Product Image:</label>
                                    <input type="file" required class="file-styled" name="data[Product][products_image]" id="products_image">
                                    <span class="help-block">Accepted formats: .gif, .png, .jpg Max file size 2Mb</span>
                </div>

                <div class="form-group">
                    <label>Related Tags:</label>
                    <input type="text" id="tags" value="" required class="form-control" name="data[Product][tags]">
                </div>

                <div class="form-group">
                    <label>Product Description:</label>
                    <textarea rows="5" id="products_description" required id="prodDesc" cols="5" onkeyup="countChar(this)" class="form-control" name="data[Product][products_description]" placeholder="Enter the product description"></textarea>
                    <span class="help-block">Max length: 150 characters <p id="charNum" style="color:red;"></p></span>

                </div>

                <div class="text-right">
                <div id="updating"></div>
                    <button type="submit" class="btn btn-primary" id="add">Add <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </div>
        </div>
</form>
        </div>
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
$(document).ready(function (){
$("#tags").tagit();
$(document).on('click', '#add', function (){
    // bootbox.confirm("Are you sure you want to make changes?.", function(){
        var products_description = $("#products_description").val();
        var tags = $("#tags").val();
        var products_image = $("#products_image").val();
        var products_name = $("#products_name").val();
        if(products_description == '' || tags == '' || products_image == '' || products_name == ''){
            alert("Fields cannot be empty");
        }
//  else{
//        $.ajax({
//        url : "<?php echo $this->webroot;?>banking/addProducts",
//        type : "POST",
//        async : true,
//        data : $("form").serialize(),
//        beforeSubmit : $("#updating").html("Please wait..."),
//        success : function(response){
//            $("#updating").html(response);
//            if(response == "success"){
//                 //bootbox.alert("Product was added successfully.");
//                 alert("Product was added successfully");
//            }
//            if(response == "duplicate"){
//                //bootbox.alert("The Product already exist.");
//                 alert("Product already exist");
//            }
//        }
//    });
//  }
});

});
</script>