<div class="row">
    <div class="col-md-12">

        <!-- Parent Category -->
        <form action="<?php echo $this->webroot;?>telecommunication/addParentCategory" method="post">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Add Parent Category</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a data-action="collapse"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                  <?php if(isset($successParent)){?>
                    <script>
                         bootbox.alert("<?php echo $successParent;?>");
                    </script>
                <?php }?>
                 <?php if(isset($duplicateParent)){?>
                    <script>
                         bootbox.alert("<?php echo $duplicateParent;?>");
                    </script>
                <?php }?>
                 <?php if(isset($errorParent)){?>
                  <script>
                         bootbox.alert("<?php echo $errorParent;?>");
                    </script>
                <?php }?>
                <div class="panel-body">
                   
                     <div class="form-group">
                       <label>Parent Category name: </label>
                        <input type="text" id="name" class="form-control" placeholder="Enter the Parent Category name" name="data[ParentCategory][parent_categories_name]">
                    </div>
                    
                    <div class="form-group">
                        <label>Industry:</label>
                        <div class="multi-select-full">
                            <select name="data[ParentCategory][industries_id]" class="multiselect-filtering">
                                <option value="">Please select an Industry</option>
                                <?php if(isset($industry_name)){?>
                                <?php foreach($industry_name as $industry){?>
                                <option value="<?php echo $industry['Industry']['industries_id']?>"><?php echo $industry['Industry']['industries_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="add">Add Parent Category <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /Parent Category -->

    </div>

</div>
<script>
    $(document).on('click', '#add', function(){
        var name = $("#name").val();
    if(name == ''){
        alert("The Parent name field cannot be empty");
        return false;
    }
    });
</script>