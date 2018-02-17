<!-- Category Tabs -->

<div class="row">


    <div class="panel panel-flat">
        <div class="panel-heading">

            <div class="form-group  has-feedback has-feedback-left">
                <label>Please Choose a Company...</label>
                <div class="multi-select">
                    <select class="multiselect-filtering" id="banks">
                        <?php
                        echo "<option>Please Choose your Preferred Company</option>";
                        foreach($query as $company){?>
                        <option value="<?php echo $company['Company']['companies_id'];?>"> <?php echo strtoupper($company['Company']['companies_name'])?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <a href="<?php echo $this->webroot;?>banking/deleteProduct"><button type="button" class="btn btn-primary btn-sm">Delete Product</button></a>
            <div class="col-md-offset-5">
                <h4>
                    <div class="dropdown"> 
                        <button type="button" class="btn dropdown-toggle btn-primary btn-sm" id="dropdownMenu1" data-toggle="dropdown"><i class="icon-plus22"></i> Add New <span class="caret"></span> </button> 
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation" > <a role="menuitem"  href="<?php echo $this->webroot;?>banking/addProducts">Product</a> </li> 
                            <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>banking/addSubCategory">Sub Category</a> </li> 
                            <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>banking/addParentCategory"> Parent Category </a> </li>
                            <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>banking/addCompany"> Company </a> </li>
                            <li role="presentation"> <a role="menuitem"  href="<?php echo $this->webroot;?>banking/updateCompany"> Update Company </a> </li>  
                        </ul> </div>
                        
                </h4>
            </div>
            
        </div>


        <div class="panel-body">

        </div>
    </div>

</div>
<!--Close Category Tabs -->

<script>
    $(document).on('change', '#banks', function() {
        var selectedBank = $("#banks option:selected").val();
        $.ajax({
            type : "POST",
            url : "<?php echo $this->webroot;?>banking/chooseBanks",
            async : true,
            data : {bankValue : selectedBank} ,
            beforeSubmit : $(".panel-body").html("Loading..."),
            success : function(response){
                $(".panel-body").html(response);
            },
            error : function(error){
                $(".panel-body").html("An error occured " + error);
            }
        });
    });
</script>