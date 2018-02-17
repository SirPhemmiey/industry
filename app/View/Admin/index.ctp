<!-- Category Tabs -->

<div class="row">


    <div class="panel panel-flat">
        <div class="panel-heading">

            <div class="form-group  has-feedback has-feedback-left">
                <label>Please Choose what you want to track...</label>
                <div class="multi-select">
                    <select class="multiselect-filtering" id="name_of_track">
                    <option value=""></option>
                       <option value="products">Products</option>
                       <option value="primary_categories">Sub Categories</option>
                       <option value="parent_categories">Parent Categories</option>
                       <!-- <option value="company">Company</option> -->
                    </select>
                </div>
            </div>
            
        </div>


        <div class="panel-body">

        </div>
    </div>

</div>
<!--Close Category Tabs -->

<script>
    $(document).on('change', '#name_of_track', function() {
        var selectedName = $("#name_of_track option:selected").val();
        $.ajax({
            type : "POST",
            url : "<?php echo $this->webroot;?>admin/chooseNames",
            async : true,
            data : {nameValue : selectedName} ,
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