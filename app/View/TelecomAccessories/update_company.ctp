<div class="row">
    <div class="col-md-12">

        <!-- Parent Category -->
        <form action="<?php echo $this->webroot;?>telecomAccessories/updateCompany" method="post" enctype="multipart/form-data">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Update Company</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a data-action="collapse"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                  <?php if(isset($successEditCompany)){?>
                    <script>
                         bootbox.alert("<?php echo $successEditCompany;?>");
                    </script>
                <?php }?>
                 <?php if(isset($errorEditCompany)){?>
                  <script>
                         bootbox.alert("<?php echo $errorEditCompany;?>");
                    </script>
                <?php }?>
                <div class="panel-body">
                <!--     <?php if(isset($company_name)){?>
                <?php foreach($company_name as $companyImage):?>
                <img src="<?php echo $this->webroot;?>company_pictures/<?php echo $companyImage['Company']['picture'];?>" alt="Company-image" class="img-rounded" height="150" width="150">
            <?php endforeach;?>
                <?php }?> -->
                <img src="" alt="Company-image" height="150" width="150" id="img">
                    <div class="form-group">
                        <label>Company Name:</label>
                        <div class="multi-select-full">
                            <select name="data[Company][companies_id]" class="multiselect-filtering" id="companies">
                                <option value="">Please select a Company</option>
                                <?php if(isset($company_name)){?>
                                <?php foreach($company_name as $company){?>
                                <option value="<?php echo $company['Company']['companies_id']?>"><?php echo $company['Company']['companies_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>

                                 <div class="form-group">
                                    <label>Company Image:</label>
                                    <input type="file" required class="file-styled" name="data[Company][picture]" id="">
                                    <span class="help-block">Accepted formats: .gif, .png, .jpg Max file size 2Mb</span>
                </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="add">Update <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /Parent Category -->

    </div>

</div>
<script>
    $("#companies").on('change', function() {
        var selectedCompany = $("#companies option:selected").val();
        $.ajax({
            type : "POST",
            url : "<?php echo $this->webroot;?>telecomAccessories/chooseCompany",
            async : true,
            data : {companyValue : selectedCompany} ,
            //beforeSubmit : $(".panel-body").html("Loading..."),
            success : function(response){
                alert(response);
                //$(".panel-body").html(response);
                $("img#img").attr('src', '<?php echo $this->webroot;?>img/'+response);
            },
            error : function(error){
                //$(".panel-body").html("An error occured " + error);
                alert("An error occured" + error);
            }
        });
    });
</script>