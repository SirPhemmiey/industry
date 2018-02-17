<div class="row">
     <div class="col-md-12">

        <!-- Basic layout-->
        <form action="<?php echo $this->webroot;?>fmcg/addSubCategory" method="post">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Add Sub Category</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a data-action="collapse"></a>
                            </li>
                        </ul>
                    </div>
                </div>

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
                <div class="panel-body">


                    <div class="form-group">
                        <label>Sub Category Name:</label>
                        <input type="text" class="form-control" placeholder="Enter the Sub category name" name="data[PrimaryCategory][primary_categories_name]" id="name">
                    </div>

                    <div class="form-group">
                        <label>Parent Category:</label>
                        <div class="multi-select-full">
                            <select name="data[PrimaryCategory][parent_categories_id]" class="multiselect-filtering" id="parentCat">
                               <option value="Please Category">Please select a Parent Category</option>
                                <?php if(isset($specificParentCategory)){?>
                                <?php foreach($specificParentCategory as $parent){?>
                                <option value="<?php echo $parent['ParentCategory']['parent_categories_id']?>"><?php echo $parent['ParentCategory']['parent_categories_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>
                    
                       <div class="form-group">
                        <label>Industry:</label>
                        <div class="multi-select-full">
                            <select name="data[PrimaryCategory][industries_id]" class="multiselect-filtering" id="industryCat">
                                <option value="Please Industry">Please select an Industry</option>
                                <?php if(isset($industry_name)){?>
                                <?php foreach($industry_name as $industry){?>
                                <option value="<?php echo $industry['Industry']['industries_id']?>"><?php echo $industry['Industry']['industries_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="add">Add Sub Category <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /Sub Category -->

    </div>

</div>
<script>
    $(document).on('click', '#add', function(){
        var name = $("#name").val();
    if(name == ''){
        alert("The Sub Category name field cannot be empty");
        return false;
    }
    });
</script>