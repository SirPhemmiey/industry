
<!-- Main Form -->
<?php foreach($data as $value){?>
<form action="" method="post">
<div class="panel panel-flat">
<div class="panel-heading">
    <h5 class="panel-title">Industry: <b><a href="<?php echo $this->webroot;?>fmcg">FMCG</a></b></h5>
    <h5 style="text-align:center"><strong>Convinience Products</strong></h5>
<div class="heading-elements">
<ul class="icons-list">
<li><a data-action="collapse"></a></li>
</ul>
</div>
</div>

<div class="panel-body">
<div class="row">
<?php //foreach($data as $value){?>
<!--Company-->
<div class="col-md-6">
<div class="form-group  has-feedback has-feedback-left">
    <label>Company name:</label>
    <input type="text" readonly id="company_name" class="form-control" value="<?php echo $value['Fmcg']['companies']?>">
    <input type="hidden" name="data[Fmcg][companies_id]" value="<?php echo $value['Fmcg']['companies_id'];?>" />
    <div class="form-control-feedback">
        <i class="icon-pencil7"></i>
    </div>
</div>
  <!--Close Company-->
   
   <!--Food-->
    <fieldset class="text-semibold" id="food_products">
        <legend><i class="icon-reading position-left"></i><strong> Food</strong></legend>
<div class="form-group  has-feedback has-feedback-left">
    <label>Fish and Fish Products:</label>
    <div class="multi-select-full">
        <select name="data[Fmcg][fish_and_fish_products][]" class="multiselect-filtering" multiple="multiple" id="fishProducts">
            <?php
    $theCompanies= $value['Fmcg']['fish_and_fish_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
            ?>
        </select>
    </div>
    <br>
    <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameFishProducts' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addFishProducts' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
</div>

    <div class="form-group  has-feedback has-feedback-left">
        <label>Fruit and Vegetables :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][fruits_and_vegetables][]" class="multiselect-filtering" multiple="multiple" id="fruits">
                <?php
                               $theCompanies= $value['Fmcg']['fruits_and_vegetables'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameFruits' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addFruits' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>

    <div class="form-group  has-feedback has-feedback-left">
        <label>Vegetable and Animal Oil and Fats :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][vegetable_and_animal_oil][]" class="multiselect-filtering" multiple="multiple" id="vegetables">
                <?php
                               $theCompanies= $value['Fmcg']['vegetable_and_animal_oil'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
         <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameVegetables' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addVegetables' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Diary Products :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][diary_products][]" class="multiselect-filtering" multiple="multiple" id="diary">
                <?php
                               $theCompanies= $value['Fmcg']['diary_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
         <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameDiary' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addDiary' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    

    <div class="form-group  has-feedback has-feedback-left">
        <label>Grain Mill Products :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][grandmill_products][]" class="multiselect-filtering" multiple="multiple" id="grain">
                <?php
                               $theCompanies= $value['Fmcg']['grandmill_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
         <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameGrain' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addGrain' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
        <div class="form-group  has-feedback has-feedback-left">
            <label>Starch and Starch Products Products :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][starch_and_starch_products][]" class="multiselect-filtering" multiple="multiple" id="starch">
                    <?php
                               $theCompanies= $value['Fmcg']['starch_and_starch_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameStarch' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addStarch' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Animal Feeds :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][animal_feeds][]" class="multiselect-filtering" multiple="multiple" id="animal">
                    <?php
                               $theCompanies= $value['Fmcg']['animal_feeds'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameAnimal' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addAnimal' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Bakery Products :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][bakery_products][]" class="multiselect-filtering" multiple="multiple" id="bakery">
                    <?php
                               $theCompanies= $value['Fmcg']['bakery_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameBakery' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addBakery' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Sugar :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][sugar][]" class="multiselect-filtering" multiple="multiple" id="sugar">
                    <?php
                               $theCompanies= $value['Fmcg']['sugar'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSugar' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSugar' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Cocoa, Chocolate and Confectionery :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][coc_sug_choc_confec][]" class="multiselect-filtering" multiple="multiple" id="cocoa">
                    <?php
                               $theCompanies= $value['Fmcg']['coc_sug_choc_confec'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCocoa' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCocoa' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Macaroni/Noodles :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][macaroni][]" class="multiselect-filtering" multiple="multiple" id="macaroni">
                    <?php
                               $theCompanies= $value['Fmcg']['macaroni'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMacaroni' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMacaroni' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Food Condiments :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][food_condiments][]" class="multiselect-filtering" multiple="multiple" id="food">
                    <?php
                               $theCompanies= $value['Fmcg']['food_condiments'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameFood' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addFood' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Agriculture :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][agriculture][]" class="multiselect-filtering" multiple="multiple" id="agric">
                    <?php
                               $theCompanies= $value['Fmcg']['agriculture'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameAgric' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addAgric' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Lighter :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][lighter][]" class="multiselect-filtering" multiple="multiple" id="lighter">
                    <?php
                               $theCompanies= $value['Fmcg']['lighter'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameLighter' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addLighter' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
        
        <div class="form-group  has-feedback has-feedback-left">
            <label>Other Food Products :</label>
            <div class="multi-select-full">
                <select name="data[Fmcg][other_food_products][]" class="multiselect-filtering" multiple="multiple" id="otherFood">
                    <?php
                               $theCompanies= $value['Fmcg']['other_food_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                    ?>
                </select>
            </div>
            <br>
             <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOtherFood' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOtherFood' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
        </div>
    

</fieldset>
</div>
<!--Close Food-->



<!--Cleaning products-->
<div class="col-md-6">
<fieldset id="cleaning_products">
    <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/bitcoin-safety-shopping-shield-symbol.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Cleaning Products</strong> </legend>

    <div class="form-group  has-feedback has-feedback-left">
        <label>Soap :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][soap][]" class="multiselect-filtering" multiple="multiple" id="soap">
                <?php
                               $theCompanies= $value['Fmcg']['soap'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
          <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSoap' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSoap' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Detergent :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][detergent][]" class="multiselect-filtering" multiple="multiple" id="detergent">
                <?php
                               $theCompanies= $value['Fmcg']['detergent'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
          <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameDetergent' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addDetergent' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Airfreshner :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][airfreshner][]" class="multiselect-filtering" multiple="multiple" id="airfreshner">
                <?php
                               $theCompanies= $value['Fmcg']['airfreshner'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
          <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameAirfreshner' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addAirfreshner' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Disinfectant :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][disinfectant][]" class="multiselect-filtering" multiple="multiple" id="disinfectant">
                <?php
                               $theCompanies= $value['Fmcg']['disinfectant'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
          <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameDisinfectant' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addDisinfectant' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Cleaning Preparations (liquid) :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][cleaning_preparations][]" class="multiselect-filtering" multiple="multiple" id="cleaning">
                <?php
                               $theCompanies= $value['Fmcg']['cleaning_preparations'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
          <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCleaning' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCleaning' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>

</fieldset>
</div>
<!--Close Cleaning products -->

<!--Personal care products-->
<div class="col-md-6">
<fieldset id="personal_care">
    <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/wallet.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Personal Care Products</strong> </legend>

    <div class="form-group  has-feedback has-feedback-left">
        <label>Cream :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][cream][]" class="multiselect-filtering" multiple="multiple" id="cream">
                <?php
                               $theCompanies= $value['Fmcg']['cream'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCream' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCream' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Perfume :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][perfume][]" class="multiselect-filtering" multiple="multiple" id="perfume">
                <?php
                               $theCompanies= $value['Fmcg']['perfume'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNamePerfume' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addPerfume' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Shaving Gels:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][shaving_gels][]" class="multiselect-filtering" multiple="multiple" id="gels">
                <?php
                               $theCompanies= $value['Fmcg']['shaving_gels'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameGels' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addGels' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Cosmetics:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][cosmetics][]" class="multiselect-filtering" multiple="multiple" id="cosmetics">
                <?php
                               $theCompanies= $value['Fmcg']['cosmetics'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCosmetics' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCosmetics' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Deodorant:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][deodorant][]" class="multiselect-filtering" multiple="multiple" id="deodorant">
                <?php
                               $theCompanies= $value['Fmcg']['deodorant'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameDeodorant' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addDeodorant' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Hair Products:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][hair_products][]" class="multiselect-filtering" multiple="multiple" id="hair">
                <?php
                               $theCompanies= $value['Fmcg']['hair_products'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHair' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHair' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Baby Materials:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][baby_materials][]" class="multiselect-filtering" multiple="multiple" id="baby">
                <?php
                               $theCompanies= $value['Fmcg']['baby_materials'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameBaby' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addBaby' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Sanitatory Towel:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][sanitory_towels][]" class="multiselect-filtering" multiple="multiple" id="towel">
                <?php
                               $theCompanies= $value['Fmcg']['sanitory_towels'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameTowel' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addTowel' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Condoms:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][condoms][]" class="multiselect-filtering" multiple="multiple" id="condom">
                <?php
                               $theCompanies= $value['Fmcg']['condoms'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCondom' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCondom' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Health:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][health][]" class="multiselect-filtering" multiple="multiple" id="health">
                <?php
                               $theCompanies= $value['Fmcg']['health'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHealth' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHealth' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Insecticide:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][insecticide][]" class="multiselect-filtering" multiple="multiple" id="insecticide">
                <?php
                               $theCompanies= $value['Fmcg']['insecticide'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameInsecticide' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addInsecticide' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Toothpaste:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][toothpaste][]" class="multiselect-filtering" multiple="multiple" id="toothpaste">
                <?php
                               $theCompanies= $value['Fmcg']['toothpaste'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameToothpaste' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addToothpaste' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
    
    <div class="form-group  has-feedback has-feedback-left">
        <label>Others:</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][others][]" class="multiselect-filtering" multiple="multiple" id="others">
                <?php
                               $theCompanies= $value['Fmcg']['others'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOthers' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOthers' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>

</fieldset>
</div>
<!--Close personal care products-->
</div>

<h5 class="panel-title" style="text-align:center"><strong>Shopping Products</strong></h5>
    <div class="row">

        <div class="col-md-6">

            <!--Back to School-->
            <fieldset class="text-semibold" id="back_to_school">
                <legend><i class="icon-reading position-left"></i><strong> Back to School</strong></legend>
                <div class="form-group  has-feedback has-feedback-left">
                    <label>Books:</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][books][]" class="multiselect-filtering" multiple="multiple" id="books">
                            <?php
                               $theCompanies= $value['Fmcg']['books'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameBooks' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addBooks' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>
                
                
                <div class="form-group  has-feedback has-feedback-left">
                    <label>Column2:</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][column2][]" class="multiselect-filtering" multiple="multiple" id="column2">
                            <?php
                               $theCompanies= $value['Fmcg']['column2'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameColumn2' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addColumn2' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>
            </fieldset>
        </div>
        <!--Close Back to School-->



        <!--Personal service-->
        <div class="col-md-6">
            <fieldset id="personal_service">
                <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/bitcoin-safety-shopping-shield-symbol.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Personal Services</strong> </legend>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Column1 :</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][column1][]" class="multiselect-filtering" multiple="multiple" id="column1">
                            <?php
                               $theCompanies= $value['Fmcg']['column1'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameColumn1' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addColumn1' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>
            </fieldset>
        </div>
        <!--Close personal service -->
    </div>
    <div class="row">

        <!--Electronic products-->
        <div class="col-md-6">
            <fieldset id="electronic_products">
                <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/wallet.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Electronic Products</strong> </legend>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Mobile Phones :</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][mobile_phones][]" class="multiselect-filtering" multiple="multiple" id="mobile">
                            <?php
                               $theCompanies= $value['Fmcg']['mobile_phones'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMobile' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMobile' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Batteries :</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][batteries][]" class="multiselect-filtering" multiple="multiple" id="batteries">
                            <?php
                               $theCompanies= $value['Fmcg']['batteries'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameBatteries' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addBatteries' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Household Electronics:</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][household_electronics][]" class="multiselect-filtering" multiple="multiple" id="houseElectronics">
                            <?php
                               $theCompanies= $value['Fmcg']['household_electronics'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                    <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHouseElectronics' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHouseElectronics' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>

            </fieldset>
        </div>
        <!--Close Electronic products-->
        

        <!--Household material-->
        <div class="col-md-6">
            <fieldset id="household_material">
                <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/wallet.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Household Materials</strong> </legend>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Furniture:</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][furniture][]" class="multiselect-filtering" multiple="multiple" id="furniture">
                            <?php
                               $theCompanies= $value['Fmcg']['furniture'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                     <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameFurniture' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addFurniture' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>

                <div class="form-group  has-feedback has-feedback-left">
                    <label>Other Materials :</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][other_materials][]" class="multiselect-filtering" multiple="multiple" id="otherMaterials">
                            <?php
                               $theCompanies= $value['Fmcg']['other_materials'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                     <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOtherMaterials' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOtherMaterials' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>

            </fieldset>
        </div>
        <!--Close Household materials-->
    </div>
    <!--Close shopping products-->
    
    
    <h5 class="panel-title" style="text-align:center"><strong>Speciality Products</strong></h5>
    <div class="row">

        <div class="col-md-6">

            <!--High-end luxury automobile-->
            <fieldset class="text-semibold" id="back_to_school">
                <legend><i class="icon-reading position-left"></i><strong> High-End Luxury Automobile </strong></legend>
                <div class="form-group  has-feedback has-feedback-left">
                    <label>Vehicles:</label>
                    <div class="multi-select-full">
                        <select name="data[Fmcg][vehicles][]" class="multiselect-filtering" multiple="multiple" id="vehicles">
                            <?php
                               $theCompanies= $value['Fmcg']['vehicles'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                            ?>
                        </select>
                    </div>
                     <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameVehicles' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addVehicles' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                </div>
            </fieldset>
        </div>
        <!--High-end luxury automobile-->
        

        <!--Tobacco-->
      <div class="col-md-6">
          <fieldset class="text-semibold" id="back_to_school">
              <legend><i class="icon-reading position-left"></i><strong> Tobacco </strong></legend>
              <div class="form-group  has-feedback has-feedback-left">
                  <label>Cigarette:</label>
                  <div class="multi-select-full">
                      <select name="data[Fmcg][cigarette][]" class="multiselect-filtering" multiple="multiple" id="cigarette">
                          <?php
                               $theCompanies= $value['Fmcg']['cigarette'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                          ?>
                      </select>
                  </div>
                   <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCigarette' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCigarette' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
              </div>
          </fieldset>
      </div>
    </div>
    <!--Close Tobacco-->
    
<div class="row">
        <!--Processed drinks and alcohol-->
        <div class="col-md-12">
            <fieldset id="personal_service">
                <legend class="text-semibold" style="text-align:center"><img src="<?php echo $this->webroot;?>img/bitcoin-safety-shopping-shield-symbol.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Processed Drinks and Alcohol</strong> </legend>
<div class="col-md-6">

    <div class="form-group  has-feedback has-feedback-left">
        <label>Spirits :</label>
        <div class="multi-select-full">
            <select name="data[Fmcg][spirits][]" class="multiselect-filtering" multiple="multiple" id="spirits">
                <?php
                               $theCompanies= $value['Fmcg']['spirits'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                ?>
            </select>
        </div>
         <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSpirits' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSpirits' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
    </div>
</div>
                
              <div class="col-md-6">
                  <div class="form-group  has-feedback has-feedback-left">
                      <label>Ethyl Alcohol :</label>
                      <div class="multi-select-full">
                          <select name="data[Fmcg][ethyl_alcohol][]" class="multiselect-filtering" multiple="multiple" id="ethyl">
                              <?php
                               $theCompanies= $value['Fmcg']['ethyl_alcohol'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                              ?>
                          </select>
                      </div>
                       <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameEthyl' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addEthyl' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                  </div>
              </div>
                
                <div class="col-md-6">
                    <div class="form-group  has-feedback has-feedback-left">
                        <label>Light Alcohol (Ready to drink):</label>
                        <div class="multi-select-full">
                            <select name="data[Fmcg][light_alcohol][]" class="multiselect-filtering" multiple="multiple" id="lightAlcohol">
                                <?php
                               $theCompanies= $value['Fmcg']['light_alcohol'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                                ?>
                            </select>
                        </div>
                         <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameLightAlcohol' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addLightAlcohol' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                    </div>

                </div>
               
               <div class="col-md-6">
                   <div class="form-group  has-feedback has-feedback-left">
                       <label>Wines :</label>
                       <div class="multi-select-full">
                           <select name="data[Fmcg][wine][]" class="multiselect-filtering" multiple="multiple" id="wine">
                               <?php
                               $theCompanies= $value['Fmcg']['wine'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                               ?>
                           </select>
                       </div>
                        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameWine' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addWine' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                   </div>
               </div>
                
               <div class="col-md-6">
                   <div class="form-group  has-feedback has-feedback-left">
                       <label>Malt Liquors and Malt :</label>
                       <div class="multi-select-full">
                           <select name="data[Fmcg][malt_liquors][]" class="multiselect-filtering" multiple="multiple" id="malt">
                               <?php
                               $theCompanies= $value['Fmcg']['malt_liquors'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                               ?>
                           </select>
                       </div>
                        <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMalt' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMalt' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                   </div>
               </div>
               
                <div class="col-md-6">
                    <div class="form-group  has-feedback has-feedback-left">
                        <label>Ice Cream :</label>
                        <div class="multi-select-full">
                            <select name="data[Fmcg][ice_cream][]" class="multiselect-filtering" multiple="multiple" id="ice">
                                <?php
                               $theCompanies= $value['Fmcg']['ice_cream'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                                ?>
                            </select>
                        </div>
                         <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameIce' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addIce' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group  has-feedback has-feedback-left">
                        <label>Soft drinks, Mineral waters :</label>
                        <div class="multi-select-full">
                            <select name="data[Fmcg][soft_drinks][]" class="multiselect-filtering" multiple="multiple" id="soft">
                                <?php
                               $theCompanies= $value['Fmcg']['soft_drinks'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                                ?>
                            </select>
                        </div>
                         <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSoft' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSoft' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                    </div>
                </div>
                
              <div class="col-md-6">

                  <div class="form-group  has-feedback has-feedback-left">
                      <label>Energy Drinks :</label>
                      <div class="multi-select-full">
                          <select name="data[Fmcg][energy_drinks][]" class="multiselect-filtering" multiple="multiple" id="energy">
                              <?php
                               $theCompanies= $value['Fmcg']['energy_drinks'];
                               $theCompanies = explode(",",$theCompanies);
                               for ($start=0; $start < count($theCompanies); $start++) {
                                   echo "<option selected  value='".ucwords($theCompanies[$start])."'>".ucwords($theCompanies[$start])."</option>". "<br>";}
                              ?>
                          </select>
                      </div>
                       <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameEnergy' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addEnergy' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
                  </div>
              </div>
            </fieldset>
        </div>
        <!--Processed drinks and alcohol-->
    </div>
    <!--Close speciality products-->
    <?php }?>

<div class="text-right">
<button type="button" id="update" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
</div>
</div>
</div>

</form>
<!-- Close Main Form -->

<script>
$(document).ready(function(){
   $(document).on('click', '#update', function(){
       // bootbox.confirm("Are you sure you want to make changes?.", function(){
        swal({
            title: "Do you really want to make changes?",
            text: "You will not be able to revert the changes!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "No, cancel pls!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
         function(isConfirm){
            if (isConfirm) {
        $.ajax({
        url : "<?php echo $this->webroot;?>fmcg/update",
        type : "POST",
        async : true,
        cache : false,
        data : $("form").serialize(),
        // beforeSubmit : $("#updating").html("Please wait..."),
        success : function(){
            //alert("Update is successful.");
            swal({
                    title: "Done!",
                    text: "Update was successful.",
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                });
        },
        error : function(error){
            //$("#updating").html("An error occured " + error);
            swal({
            title: "Oops...",
            text: "Something went wrong!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
        }//Close error
      });//End ajax      
            }//EndIf
            else {
                swal({
                    title: "Cancelled",
                    text: "No changes was made :-)",
                    confirmButtonColor: "#2196F3",
                    type: "error"
                });
            }//End else
        });//End combination

   });
});
</script>

