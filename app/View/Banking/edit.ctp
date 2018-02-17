
<!-- Main Form -->
<?php foreach($data as $value){?>
<!-- <form action="<?php echo $this->webroot;?>banking/edit?bank=<?php echo $value['Banking']['banking_id'];?>" --> 
<form action="" method="post">
<div class="panel panel-flat">
<div class="panel-heading">
    <h5 class="panel-title">Industry: <b><a href="<?php echo $this->webroot;?>banking">Banking</a></b></h5>
    <?php $success = $this->Flash->render('success');
    $error = $this->Flash->render('error');?>
    <?php if(isset($error)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<p>$error</p>";
    echo "</div>";
    }?>
    <?php if(isset($success)){
  echo "<div class='alert alert-success alert-dismissable'>";
    echo "<p>$success</p>";
    echo "</div>";
    }?>
<div class="heading-elements">
    <ul class="icons-list">
        <li><a data-action="collapse"></a></li>
    </ul>
</div>
</div>

<div class="panel-body">
<div class="row">
    <!--Account Details-->
    <?php //foreach($data as $value){ ?>
    <div class="col-md-6">
        <div class="form-group  has-feedback has-feedback-left">
            <label>Bank name:</label>
            <input type="text" name="data[Banking][bank_names]" readonly class="form-control" value="<?php echo $value['Banking']['bank_names']?>" placeholder="Bank name">
            <input type="hidden" name="data[Banking][banking_id]" value="<?php echo $value['Banking']['banking_id'];?>" />
            <div class="form-control-feedback">
                <i class="icon-pencil7"></i>
            </div>
        </div>
       
        <fieldset class="text-semibold" id="accounts">
            <legend><i class="icon-reading position-left"></i> <strong>Accounts</strong></legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Current Account:</label>
                    <div class="multi-select-full">
                        <select name="data[Banking][current_account][]" class="multiselect-filtering" multiple="multiple" id="currentAccount">
                              <?php
                                   $theAccounts= $value['Banking']['current_account'];
                                       $theAccounts = explode(",",$theAccounts);
                                       for ($start=0; $start < count($theAccounts); $start++) {
                                           echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                                   ?>

                        </select>
                    </div>
                     <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCurrentAccount' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCurrentAccount' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Status Account:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][status_account][]" class="multiselect-filtering" multiple="multiple" id="statusAccount">
                        <?php
                        $theAccounts= $value['Banking']['status_account'];
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        ?>
                    </select>
                </div>
                 <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameStatusAccount' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addStatusAccount' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Term Deposit:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][term_deposits][]" class="multiselect-filtering" multiple="multiple" id="term">
                        <?php
                        $theAccounts= $value['Banking']['term_deposits'];
                        $theAccounts = explode(",",$theAccounts);
                        for ($start=0; $start < count($theAccounts); $start++) {
                            echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        ?>

                    </select>
                </div>
                 <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameTerm' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addTerm' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Savings Account:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][savings_account][]" class="multiselect-filtering" multiple="multiple" id="savings">
                        <?php
                        $theAccounts= $value['Banking']['savings_account'];
                        $theAccounts = explode(",",$theAccounts);
                        for ($start=0; $start < count($theAccounts); $start++) {
                            echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        ?>
                    </select>
                </div>
                 <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSavings' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSavings' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Individual Retirement Accounts:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][individual_retirement_accounts][]" class="multiselect-filtering" multiple="multiple" id="retirement">
                        <?php
                        $theAccounts= $value['Banking']['individual_retirement_accounts'];
                        $theAccounts = explode(",",$theAccounts);
                        for ($start=0; $start < count($theAccounts); $start++) {
                            echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        ?>
                    </select>
                </div>
                 <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameRetirement' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addRetirement' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Foreign Areas/Domiciliary:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][foreign_areas][]" class="multiselect-filtering" multiple="multiple" id="foreign">
                        <?php
                        $theAccounts= $value['Banking']['foreign_areas'];
                        $theAccounts = explode(",",$theAccounts);
                        for ($start=0; $start < count($theAccounts); $start++) {
                            echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        ?>
                    </select>
                </div>
                 <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameForeign' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addForeign' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
        </fieldset>
    </div>
    <!--Close Accounts-->
    

    <!--Card Services-->
    <div class="col-md-6">
        <fieldset id="card_services">
            <legend class="text-semibold"><i class="icon-credit-card2 position-left"></i> <strong>Card Services</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Debit card:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][debit_card][]" class="multiselect-filtering" multiple="multiple" id="debitCard">
                        <?php
                        $theAccounts= $value['Banking']['debit_card'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameDebitCard' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addDebitCard' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Credit card:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][credit_card][]" class="multiselect-filtering" multiple="multiple" id="creditCard">
                        <?php
                        $theAccounts= $value['Banking']['credit_card'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCreditCard' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCreditCard' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Others:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][others][]" class="multiselect-filtering" multiple="multiple" id="othersBanking">
                        <?php
                        $theAccounts= $value['Banking']['others'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOthersBanking' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOthersBanking' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
        </fieldset>
    </div>
   <!--Close Card Services-->
    
    <!--E Services-->
    <div class="col-md-6">
        <fieldset id="e_services">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/bitcoin-safety-shopping-shield-symbol.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>E Service</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Mobile/Internet Platform:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][m_internet_platform][]" class="multiselect-filtering" multiple="multiple" id="mobilePlatform">
                        <?php
                        $theAccounts= $value['Banking']['m_internet_platform'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMobilePlatform' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMobilePlatform' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Transaction Banking:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][transaction_banking][]" class="multiselect-filtering" multiple="multiple" id="transaction">
                        <?php
                        $theAccounts= $value['Banking']['transaction_banking'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameTransaction' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addTransaction' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Others 2:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][others2][]" class="multiselect-filtering" multiple="multiple" id="others2">
                        <?php
                        $theAccounts= $value['Banking']['others2'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                  <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOthers2' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOthers2' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>

        </fieldset>
    </div>
    <!--Close E Services-->
</div>

<div class="row">
    
    <!--Loan and Advances-->
    <div class="col-md-6">
        <fieldset id="loan">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/stack-of-dollars-on-two-hands.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Loan and Advances</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Home Loans:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][home_loans][]" class="multiselect-filtering" multiple="multiple" id="homeLoans">
                        <?php
                        $theAccounts= $value['Banking']['home_loans'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHomeLoans' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHomeLoans' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Auto Loans:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][auto_loans][]" class="multiselect-filtering" multiple="multiple" id="autoLoans">
                        <?php
                        $theAccounts= $value['Banking']['auto_loans'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameAutoLoans' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addAutoLoans' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Other Credit Facilities:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][other_credit_facilities][]" class="multiselect-filtering" multiple="multiple" id="otherCredit">
                        <?php
                        $theAccounts= $value['Banking']['other_credit_facilities'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameOthersCredit' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addOthersCredit' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>International Trade Finance:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][international_trade_finance][]" class="multiselect-filtering" multiple="multiple" id="InternationalTrade">
                        <?php
                        $theAccounts= $value['Banking']['international_trade_finance'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameInternationalTrade' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addTransactionTrade' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            

            <div class="form-group  has-feedback has-feedback-left">
                <label>Medium or Large Scale Private Sector Enterprises:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][private_sector_enterprises][]" class="multiselect-filtering" multiple="multiple" id="mediumEnterprise">
                        <?php
                        $theAccounts= $value['Banking']['private_sector_enterprises'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMediumEnterprise' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMediumEnterprise' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Small Businesses Loans/SME Finance:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][small_business_loans][]" class="multiselect-filtering" multiple="multiple" id="smallBusiness">
                        <?php
                        $theAccounts= $value['Banking']['small_business_loans'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameSmallBusiness' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addSmallBusiness' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Health:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][health][]" class="multiselect-filtering" multiple="multiple" id="healthBanking">
                        <?php
                        $theAccounts= $value['Banking']['health'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHealthBanking' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHealthBanking' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Education:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][education][]" class="multiselect-filtering" multiple="multiple" id="educationBanking">
                        <?php
                        $theAccounts= $value['Banking']['education'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameEducationBanking' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addEducationBanking' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Public Sector:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][public_sector][]" class="multiselect-filtering" multiple="multiple" id="publicSector">
                        <?php
                        $theAccounts= $value['Banking']['public_sector'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNamePublicSector' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addPublicSector' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Unsecured Signature Or Personal Loans:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][unsecured_signature][]" class="multiselect-filtering" multiple="multiple" id="unsecured">
                        <?php
                        $theAccounts= $value['Banking']['unsecured_signature'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameUnsecured' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addUnsecured' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Home Equity Lines Of Credit:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][home_equity][]" class="multiselect-filtering" multiple="multiple" id="homeEquity">
                        <?php
                        $theAccounts= $value['Banking']['home_equity'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameHomeEquity' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addHomeEquity' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
        </fieldset>
    </div>
    <!--Close Loan and Advances-->


    <!--Investments-->
    <div class="col-md-6">
        <fieldset id="investments">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/wallet.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Investments</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Annuities:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][annuities][]" class="multiselect-filtering" multiple="multiple" id="annuities">
                        <?php
                        $theAccounts= $value['Banking']['annuities'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameAnnuities' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addAnnuities' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Insurance:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][insurance][]" class="multiselect-filtering" multiple="multiple" id="insurance">
                        <?php
                        $theAccounts= $value['Banking']['insurance'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameInsurance' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addInsurance' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>Stocks, Bounds, Mutual Funds and Wealth:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][stocks][]" class="multiselect-filtering" multiple="multiple" id="stocks">
                        <?php
                        $theAccounts= $value['Banking']['stocks'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameStocks' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addStocks' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
        </fieldset>
    </div>
    <!--Close Investments-->
    
    <!--Money Transfer Services-->
    <div class="col-md-6">
        <fieldset id="money_transfer">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/money-transfer.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Money Transfer Services</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Local Transfer:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][local_transfer][]" class="multiselect-filtering" multiple="multiple" id="localTransfer">
                        <?php
                        $theAccounts= $value['Banking']['local_transfer'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameLocalTransfer' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addLocalTransfer' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
            
            <div class="form-group  has-feedback has-feedback-left">
                <label>International Money Services:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][international_money_services][]" class="multiselect-filtering" multiple="multiple" id="internationalMoney">
                        <?php
                        $theAccounts= $value['Banking']['international_money_services'];
                        if($theAccounts !== ''){
                            $theAccounts = explode(",",$theAccounts);
                            for ($start=0; $start < count($theAccounts); $start++) {
                                echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                        }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameInternationalMoney' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addInternationalMoney' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
        </fieldset>
    </div>
    <!--Close Money Transfer Services-->
    
    <!--Merchant Services-->
    <div class="col-md-6">
        <fieldset id="merchant_services">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/credit-card-payment.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Merchant Services</strong> </legend>

            <div class="form-group  has-feedback has-feedback-left">
                <label>Current Account Services:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][current_account_services][]" class="multiselect-filtering" multiple="multiple" id="currentServices">
                        <?php
                                   $theAccounts= $value['Banking']['current_account_services'];
                                   if($theAccounts !== ''){
                                       $theAccounts = explode(",",$theAccounts);
                                       for ($start=0; $start < count($theAccounts); $start++) {
                                           echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                                   }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameCurrentServices' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addCurrentServices' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>


            <div class="form-group  has-feedback has-feedback-left">
                <label>Merchant Other Services:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][merchant_other_services][]" class="multiselect-filtering" multiple="multiple" id="merchantServices">
                        <?php
                                   $theAccounts= $value['Banking']['merchant_other_services'];
                                   if($theAccounts !== ''){
                                       $theAccounts = explode(",",$theAccounts);
                                       for ($start=0; $start < count($theAccounts); $start++) {
                                           echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                                   }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameMerchantServices' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addMerchantServices' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>
        </fieldset>
    </div>
    <!--Close Merchant Services-->
    
    <!--Kids and Teens-->
    <div class="col-md-6">
        <fieldset id="kids">
            <legend class="text-semibold"><img src="<?php echo $this->webroot;?>img/kids.svg" alt="" width="20" height="20">&nbsp; &nbsp;<strong>Kids and Teens</strong> </legend>
            <div class="form-group  has-feedback has-feedback-left">
                <label>Savings Account:</label>
                <div class="multi-select-full">
                    <select name="data[Banking][kids_savings_account][]" class="multiselect-filtering" multiple="multiple" id="kid">
                        <?php
                                   $theAccounts= $value['Banking']['kids_savings_account'];
                                   if($theAccounts !== ''){
                                       $theAccounts = explode(",",$theAccounts);
                                       for ($start=0; $start < count($theAccounts); $start++) {
                                           echo "<option selected value='".ucwords($theAccounts[$start])."'>".ucwords($theAccounts[$start])."</option>". "<br>";}
                                   }
                        ?>
                    </select>
                </div>
                <br>
        <div class="form-group">
        <button type="button" data-toggle="popover" 
        data-content="<div class='row'>
        <div class='form-group'>
        <input type='text' class='form-control' id='optionNameKid' placeholder='Enter the new option'>
        </div>
        </div>
        <br>
        <div class='row'>
        <div class='form-group col-md-3 col-md-offset-3'>
        <button type='button' id='addKid' class='btn btn-primary'>Add</button>
        <span id='content'></span>
        </div>
        </div>
        " class="btn btn-xs btn-primary"><i class="icon-plus22"></i></button>
    </div>
            </div>

        </fieldset>
    </div>
    <?php }?>
    <!--Close Kids and Teens-->
</div>

<div class="text-right">
<p id="updating"></p>
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
        url : "<?php echo $this->webroot;?>banking/update",
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
