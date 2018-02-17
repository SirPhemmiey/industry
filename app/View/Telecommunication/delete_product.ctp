<div class="row">
    <div class="col-md-12">

        <!-- Parent Category -->
        <form action="<?php echo $this->webroot;?>telecommunication/deleteProduct" method="post" id="myForm">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Delete Product</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a data-action="collapse"></a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="panel-body">
                   
                   
                    
                    <div class="form-group">
                        <label>Product name:</label>
                        <div class="multi-select-full">
                            <select name="data[Product][products_id]" class="multiselect-filtering">
                                <option value="">Please select a product...</option>
                                <?php if(isset($allProducts)){?>
                                <?php foreach($allProducts as $products){?>
                                <option value="<?php echo $products['Product']['products_id']?>"><?php echo $products['Product']['products_name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>


                    <div class="text-right">
                        <button type="button" class="btn btn-primary" id="delete">Delete Product <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /Parent Category -->

    </div>

</div>
<script>
    $(document).on('click', '#delete', function(){

    swal({
title: "Do you really want to delete this product?",
text: "You will not be able to revert your actions!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#EF5350",
confirmButtonText: "Yes, delete it.",
cancelButtonText: "No, cancel please.",
closeOnConfirm: false,
closeOnCancel: false
},
function (isConfirm) {
if (isConfirm) {
    
    $("#myForm").ajaxForm({
           success: function () {
        swal({
            title: "Done!",
            text: "The Product was successfully deleted.",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    },
    error: function (error) {
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
    text: "No changes was made.",
    confirmButtonColor: "#2196F3",
    type: "error"
});
} //End in-else
}); //End combination
    });
    
    $(document).ajaxStop(function(){
        window.location.reload();
    });
</script>