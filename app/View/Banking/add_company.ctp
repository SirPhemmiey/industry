<div class="row">
    <div class="col-md-12">

        <!-- Parent Category -->
        <form action="<?php echo $this->webroot;?>banking/addCompany" method="post">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Add Company</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a data-action="collapse"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                  <?php if(isset($successCompany)){?>
                    <script>
                         bootbox.alert("<?php echo $successCompany;?>");
                    </script>
                <?php }?>
                 <?php if(isset($duplicateCompany)){?>
                    <script>
                         bootbox.alert("<?php echo $duplicateCompany;?>");
                    </script>
                <?php }?>
                 <?php if(isset($errorCompany)){?>
                  <script>
                         bootbox.alert("<?php echo $errorCompany;?>");
                    </script>
                <?php }?>
                <div class="panel-body">
                   
                     <div class="form-group">
                       <label>Company name: </label>
                        <input type="text" id="name" class="form-control" placeholder="Enter the Parent Category name" name="data[Company][companies_name]">
                    </div>
                    
                    <div class="form-group">
                        <label>Industry:</label>
                        <div class="multi-select-full">
                            <select name="data[Company][industries_id]" class="multiselect-filtering">
                                <option value="">Please select an Industry</option>
                                <?php if(isset($industry_name)){?>
                                <?php foreach($industry_name as $industry){?>
                                <option value="<?php echo $industry['Industry']['industries_id']?>"><?php echo $industry['Industry']['industries_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="add">Add Company <i class="icon-arrow-right14 position-right"></i></button>
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
        alert("The Company name field cannot be empty");
        return false;
    }
    });
</script>