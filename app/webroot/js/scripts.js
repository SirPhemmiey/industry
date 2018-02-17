
  // Confirmation dialog
    // $('#update').on('click', function() {
    //     bootbox.confirm("Are you sure you want to make changes?.", function(result) {
    //         bootbox.alert("Confirm result: " + result)
    //     });
    // });

$(document).ready(function(){

//For Accounts
$(document).on('click', "#btn_status_account", function(){
	$("#status_account").show('slow');
	$("#current_account").hide('slow');
	$("#savings_account").hide('slow');
	$("#term_deposit").hide('slow');
	$("#retirement_account").hide('slow');
	$("#foreign_areas").hide('slow');
});
$(document).on('click', "#btn_current_account", function(){
	$("#current_account").show('slow');
	$("#status_account").hide('slow');
	$("#savings_account").hide('slow');
	$("#term_deposit").hide('slow');
	$("#retirement_account").hide('slow');
	$("#foreign_areas").hide('slow');
});
$(document).on('click', "#btn_savings_account", function(){
	$("#savings_account").show('slow');
	$("#current_account").hide('slow');
	$("#status_account").hide('slow');
	$("#term_deposit").hide('slow');
	$("#retirement_account").hide('slow');
	$("#foreign_areas").hide('slow');
});
$(document).on('click', "#btn_term_deposit", function(){
	$("#term_deposit").show('slow');
	$("#current_account").hide('slow');
	$("#savings_account").hide('slow');
	$("#status_account").hide('slow');
	$("#retirement_account").hide('slow');
	$("#foreign_areas").hide('slow');
});
$(document).on('click', "#btn_retirement_account", function(){
	$("#retirement_account").show('slow');
	$("#current_account").hide('slow');
	$("#savings_account").hide('slow');
	$("#term_deposit").hide('slow');
	$("#status_account").hide('slow');
	$("#foreign_areas").hide('slow');
});
$(document).on('click', "#btn_foreign_areas", function(){
	$("#foreign_areas").show('slow');
	$("#current_account").hide('slow');
	$("#savings_account").hide('slow');
	$("#term_deposit").hide('slow');
	$("#retirement_account").hide('slow');
	$("#status_account").hide('slow');
});

//For Card Services
$(document).on('click', "#btn_debit_card", function(){
	$("#debit_card").show('slow');
	$("#credit_card").hide('slow');
	$("#others").hide('slow');
});
$(document).on('click', "#btn_credit_card", function(){
	$("#debit_card").hide('slow');
	$("#credit_card").show('slow');
	$("#others").hide('slow');
});
$(document).on('click', "#btn_others", function(){
	$("#debit_card").hide('slow');
	$("#credit_card").hide('slow');
	$("#others").show('slow');
});

//For E-Services
$(document).on('click', "#btn_m_internet_platform", function(){
	$("#m_internet_platform").show('slow');
	$("#transaction_banking").hide('slow');
	$("#others2").hide('slow');
});
$(document).on('click', "#btn_transaction_banking", function(){
	$("#m_internet_platform").hide('slow');
	$("#transaction_banking").show('slow');
	$("#others2").hide('slow');
});
$(document).on('click', "#btn_others2", function(){
	$("#m_internet_platform").hide('slow');
	$("#transaction_banking").hide('slow');
	$("#others2").show('slow');
});

//For Kids and Teen
$(document).on('click', "#btn_kids_savings_account", function(){
	$("#kids_savings_account").show('slow');
});

//For Loan and Advances
$(document).on('click', "#btn_home_loans", function(){
	$("#home_loans").show('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_auto_loans", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").show('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_other_credit_facilities", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").show('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_private_sector_enterprises", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").show('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_international_trade_finance", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").show('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_small_business_loans", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").show('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_health", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").show('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_education", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").show('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_public_sector", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").show('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_unsecured_signature", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").show('slow');
	$("#home_equity").hide('slow');
});
$(document).on('click', "#btn_home_equity", function(){
	$("#home_loans").hide('slow');
	$("#auto_loans").hide('slow');
	$("#other_credit_facilities").hide('slow');
	$("#international_trade_finance").hide('slow');
	$("#private_sector_enterprises").hide('slow');
	$("#small_business_loans").hide('slow');
	$("#health").hide('slow');
	$("#education").hide('slow');
	$("#public_sector").hide('slow');
	$("#unsecured_signature").hide('slow');
	$("#home_equity").show('slow');
});

//For Investments
$(document).on('click', "#btn_annuities", function(){
	$("#annuities").show('slow');
	$("#stocks").hide('slow');
	$("#insurance").hide('slow');
});
$(document).on('click', "#btn_stocks", function(){
	$("#annuities").hide('slow');
	$("#stocks").show('slow');
	$("#insurance").hide('slow');
});
$(document).on('click', "#btn_insurance", function(){
	$("#annuities").hide('slow');
	$("#stocks").hide('slow');
	$("#insurance").show('slow');
});

//For Money Transfer Services
$(document).on('click', "#btn_local_transfer", function(){
	$("#local_transfer").show('slow');
	$("#international_money_services").hide('slow');
});
$(document).on('click', "#btn_international_money_services", function(){
	$("#local_transfer").hide('slow');
	$("#international_money_services").show('slow');
});

//For Merchant Services
$(document).on('click', "#btn_current_account_services", function(){
	$("#current_account_services").show('slow');
	$("#merchant_other_services").hide('slow');
});
$(document).on('click', "#btn_merchant_other_services", function(){
	$("#current_account_services").hide('slow');
	$("#merchant_other_services").show('slow');
});


//FMCG CATEGORY

//Fish and Fish Products
$(document).on('click', "#btn_fish_and_fish_products", function(){
	$("#fish_and_fish_products").show('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//Fruit and Vegetables
$(document).on('click', "#btn_fruit_and_vegetables", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").show('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//Vegetables and Animal Oil and Fats
$(document).on('click', "#btn_vegetables_and_animal_oil", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").show('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Diary Products
$(document).on('click', "#btn_diary_products", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").show('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Grainmill Products
$(document).on('click', "#btn_grainmill_products", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").show('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Starch and Stach Proucts
$(document).on('click', "#btn_starch_and_starch_products", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").show('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Animal Feeds
$(document).on('click', "#btn_animal_feeds", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").show('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Bakery Products
$(document).on('click', "#btn_bakery_products", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").show('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Sugar
$(document).on('click', "#btn_sugar", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").show('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For MAcaroni
$(document).on('click', "#btn_macaroni", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").show('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Chocolate
$(document).on('click', "#btn_choc", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").show('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Food Condiments
$(document).on('click', "#btn_food_condiments", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").show('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Agriculture
$(document).on('click', "#btn_agriculture", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").show('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").hide('slow');
});
//For Lighter
$(document).on('click', "#btn_lighter", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").show('slow');
	$("#other_food_products").hide('slow');
});
//For Other Food PRoducts
$(document).on('click', "#btn_other_food_products", function(){
	$("#fish_and_fish_products").hide('slow');
	$("#fruit_and_vegetables").hide('slow');
	$("#vegetables_and_animal_oil").hide('slow');
	$("#diary_products").hide('slow');
	$("#grainmill_products").hide('slow');
	$("#starch_and_starch_products").hide('slow');
	$("#animal_feeds").hide('slow');
	$("#bakery_products").hide('slow');
	$("#sugar").hide('slow');
	$("#choc").hide('slow');
	$("#macaroni").hide('slow');
	$("#food_condiments").hide('slow');
	$("#agriculture").hide('slow');
	$("#lighter").hide('slow');
	$("#other_food_products").show('slow');
});
//For Soap
$(document).on('click', "#btn_soap", function(){
	$("#soap").show('slow');
	$("#cleaning_preparations").hide('slow');
	$("#airfreshner").hide('slow');
	$("#disinfectant").hide('slow');
	$("#detergent").hide('slow');
});
//For Cleaning Preparations
$(document).on('click', "#btn_cleaning_preparations", function(){
	$("#soap").hide('slow');
	$("#cleaning_preparations").show('slow');
	$("#airfreshner").hide('slow');
	$("#disinfectant").hide('slow');
	$("#detergent").hide('slow');
});
//Doe Airefreshner
$(document).on('click', "#btn_airfreshner", function(){
	$("#soap").hide('slow');
	$("#cleaning_preparations").hide('slow');
	$("#airfreshner").show('slow');
	$("#disinfectant").hide('slow');
	$("#detergent").hide('slow');
});
//For disinfectnt
$(document).on('click', "#btn_disinfectant", function(){
	$("#soap").hide('slow');
	$("#cleaning_preparations").hide('slow');
	$("#airfreshner").hide('slow');
	$("#disinfectant").show('slow');
	$("#detergent").hide('slow');
});
//For detergent
$(document).on('click', "#btn_detergent", function(){
	$("#soap").hide('slow');
	$("#cleaning_preparations").hide('slow');
	$("#airfreshner").hide('slow');
	$("#disinfectant").hide('slow');
	$("#detergent").show('slow');
});
//PERSONAL CARE PROUCTS

//For Cream
$(document).on('click', "#btn_cream", function(){
	$("#cream").show('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Perfumes
$(document).on('click', "#btn_perfumes", function(){
	$("#cream").hide('slow');
	$("#perfumes").show('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Shaving Gels
$(document).on('click', "#btn_shaving_gels", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").show('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Deodorant
$(document).on('click', "#btn_deodorant", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").show('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Hair Products
$(document).on('click', "#btn_hair_products", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").show('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Baby Materials
$(document).on('click', "#btn_baby_materials", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").show('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Sanitory Towels
$(document).on('click', "#btn_sanitory_towels", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").show('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Condoms
$(document).on('click', "#btn_condoms", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").show('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For healthFmcg
$(document).on('click', "#btn_healthFmcg", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").show('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Insecticide
$(document).on('click', "#btn_insecticide", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").show('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});
//For Toothpaste
$(document).on('click', "#btn_toothpaste", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").show('slow');
	$("#othersFmcg").hide('slow');
});
//For Others
$(document).on('click', "#btn_othersFmcg", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").hide('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").show('slow');
});
//For Cosmetics
$(document).on('click', "#btn_cosmetics", function(){
	$("#cream").hide('slow');
	$("#perfumes").hide('slow');
	$("#shaving_gels").hide('slow');
	$("#deodorant").hide('slow');
	$("#cosmetics").show('slow');
	$("#hair_products").hide('slow');
	$("#baby_materials").hide('slow');
	$("#sanitory_towels").hide('slow');
	$("#condoms").hide('slow');
	$("#healthFmcg").hide('slow');
	$("#insecticide").hide('slow');
	$("#toothpaste").hide('slow');
	$("#othersFmcg").hide('slow');
});

//Shopping Products

//For Back to school -> //Books
$(document).on('click', "#btn_book", function(){
	$("#book").show('slow');
	$("#column2").hide('slow');
});
//Column2
$(document).on('click', "#btn_column2", function(){
	$("#book").hide('slow');
	$("#column2").show('slow');
});
//For Personal Service //Column1
$(document).on('click', "#btn_column1", function(){
	$("#column1").show('slow');
});
//For Electronic Products -> //Mobile PHones
$(document).on('click', "#btn_mobile_phones", function(){
	$("#mobile_phones").show('slow');
	$("#batteries").hide('slow');
	$("#household_electronics").hide('slow');
});
//For Batteries
$(document).on('click', "#btn_batteries", function(){
	$("#mobile_phones").hide('slow');
	$("#batteries").show('slow');
	$("#household_electronics").hide('slow');
});
//For Household Electronics
$(document).on('click', "#btn_household_electronics", function(){
	$("#mobile_phones").hide('slow');
	$("#batteries").hide('slow');
	$("#household_electronics").show('slow');
});
//For Household Materials -> //Furniture
$(document).on('click', "#btn_furniture", function(){
	$("#furniture").show('slow');
	$("#other_materials").hide('slow');
});
//For Other materials
$(document).on('click', "#btn_other_materials", function(){
	$("#furniture").hide('slow');
	$("#other_materials").show('slow');
});

//For SPECIALITY PRODUCTS

//For High-end luxury Automobile -> //Vehicles
$(document).on('click', "#btn_vehicles", function(){
	$("#vehicles").show('slow');
});
//For Processed Drinks and Alcohol -> //Spirits
$(document).on('click', "#btn_spirits", function(){
	$("#spirits").show('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Etyl Alcohol
$(document).on('click', "#btn_ethyl_alcohol", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").show('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Wine
$(document).on('click', "#btn_wine", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").show('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Light Alcohol
$(document).on('click', "#btn_light_alcohol", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").show('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Malt Liquors
$(document).on('click', "#btn_malt_liquors", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").show('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Icre Cream
$(document).on('click', "#btn_ice_cream", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").show('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").hide('slow');
});
//For Soft drinks
$(document).on('click', "#btn_soft_drinks", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").show('slow');
	$("#energy_drinks").hide('slow');
});
//For enerygy drinks
$(document).on('click', "#btn_energy_drinks", function(){
	$("#spirits").hide('slow');
	$("#ethyl_alcohol").hide('slow');
	$("#light_alcohol").hide('slow');
	$("#wine").hide('slow');
	$("#malt_liquors").hide('slow');
	$("#ice_cream").hide('slow');
	$("#soft_drinks").hide('slow');
	$("#energy_drinks").show('slow');
});

//For Tobacco  -> //Cigarette
$(document).on('click', "#btn_cigarette", function(){
	$("#cigarette").show('slow');
});


//FOR ADDING OPTIONS AND NOTIFICATION IN BANKING

//Current Account
$(document).on('click', '#addCurrentAccount', function(){
    $("#currentAccount").append($("<option>", 
      {
        text: $("#optionNameCurrentAccount").val(), 
      value: $("#optionNameCurrentAccount").val()
    }));
    $("#currentAccount").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Status Account
$(document).on('click', '#addStatusAccount', function(){
    $("#statusAccount").append($("<option>", 
      {
        text: $("#optionNameStatusAccount").val(), 
      value: $("#optionNameStatusAccount").val()
    }));
    $("#statusAccount").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Term Deposit
$(document).on('click', '#addTerm', function(){
    $("#term").append($("<option>", 
      {
        text: $("#optionNameTerm").val(), 
      value: $("#optionNameStatusAccount").val()
    }));
    $("#term").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Savings Account
$(document).on('click', '#addSavings', function(){
    $("#savings").append($("<option>", 
      {
        text: $("#optionNameSavings").val(), 
      value: $("#optionNameSavings").val()
    }));
    $("#savings").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Individual Retirement Account
$(document).on('click', '#addRetirement', function(){
    $("#retirement").append($("<option>", 
      {
        text: $("#optionNameRetirement").val(), 
      value: $("#optionNameRetirement").val()
    }));
    $("#retirement").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Foreign Areas
$(document).on('click', '#addForeign', function(){
    $("#foreign").append($("<option>", 
      {
        text: $("#optionNameForeign").val(), 
      value: $("#optionNameForeign").val()
    }));
    $("#foreign").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Debit Card
$(document).on('click', '#addDebitCard', function(){
    $("#debitCard").append($("<option>", 
      {
        text: $("#optionNameDebitCard").val(), 
      value: $("#optionNameDebitCard").val()
    }));
    $("#debitCard").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Credit Card
$(document).on('click', '#addCreditCard', function(){
    $("#creditCard").append($("<option>", 
      {
        text: $("#optionNameCreditCard").val(), 
      value: $("#optionNameCreditCard").val()
    }));
    $("#creditCard").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Others
$(document).on('click', '#addOthersBanking', function(){
    $("#othersBanking").append($("<option>", 
      {
        text: $("#optionNameOthersBanking").val(), 
      value: $("#optionNameOthersBanking").val()
    }));
    $("#othersBanking").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Mobile/Internet Platform
$(document).on('click', '#addMobilePlatform', function(){
    $("#mobilePlatform").append($("<option>", 
      {
        text: $("#optionNameMobilePlatform").val(), 
      value: $("#optionNameMobilePlatform").val()
    }));
    $("#mobilePlatform").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Transaction Banking
$(document).on('click', '#addTransaction', function(){
    $("#transaction").append($("<option>", 
      {
        text: $("#optionNameTransaction").val(), 
      value: $("#optionNameTransaction").val()
    }));
    $("#transaction").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Others2
$(document).on('click', '#addOthers2', function(){
    $("#others2").append($("<option>", 
      {
        text: $("#optionNameOthers2").val(), 
      value: $("#optionNameOthers2").val()
    }));
    $("#others2").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Home Loans
$(document).on('click', '#addHomeLoans', function(){
    $("#homeLoans").append($("<option>", 
      {
        text: $("#optionNameHomeLoans").val(), 
      value: $("#optionNameHomeLoans").val()
    }));
    $("#homeLoans").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Auto Loans
$(document).on('click', '#addAutoLoans', function(){
    $("#autoLoans").append($("<option>", 
      {
        text: $("#optionNameAutoLoans").val(), 
      value: $("#optionNameAutoLoans").val()
    }));
    $("#autoLoans").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Other Credit Facilities
$(document).on('click', '#addOtherCredit', function(){
    $("#otherCredit").append($("<option>", 
      {
        text: $("#optionNameOtherCredit").val(), 
      value: $("#optionNameOtherCredit").val()
    }));
    $("#others2").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//International Trade Finance
$(document).on('click', '#addInternationalTrade', function(){
    $("#internationalTrade").append($("<option>", 
      {
        text: $("#optionNameInternationalTrade").val(), 
      value: $("#optionNameInternationalTrade").val()
    }));
    $("#internationalTrade").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Medium, Large and Public Sector Enterprise
$(document).on('click', '#addMediumEnterprise', function(){
    $("#mediumEnterprise").append($("<option>", 
      {
        text: $("#optionNameMediumEnterprise").val(), 
      value: $("#optionNameMediumEnterprise").val()
    }));
    $("#mediumEnterprise").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Small Business Loans
$(document).on('click', '#addSmallBusiness', function(){
    $("#smallBusiness").append($("<option>", 
      {
        text: $("#optionNameSmallBusiness").val(), 
      value: $("#optionNameSmallBusiness").val()
    }));
    $("#smallBusiness").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Health
$(document).on('click', '#addHealthBanking', function(){
    $("#healthBanking").append($("<option>", 
      {
        text: $("#optionNameHealthBanking").val(), 
      value: $("#optionNameHealthBanking").val()
    }));
    $("#healthBanking").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Education
$(document).on('click', '#addEducationBanking', function(){
    $("#educationBanking").append($("<option>", 
      {
        text: $("#optionNameEducationBanking").val(), 
      value: $("#optionNameEducationBanking").val()
    }));
    $("#addEducationBanking").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Public Sector
$(document).on('click', '#addPublicSector', function(){
    $("#publicSector").append($("<option>", 
      {
        text: $("#optionNamePublicSector").val(), 
      value: $("#optionNamePublicSector").val()
    }));
    $("#publicSector").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Unsecured Signature
$(document).on('click', '#addUnsecured', function(){
    $("#unsecured").append($("<option>", 
      {
        text: $("#optionNameUnsecured").val(), 
      value: $("#optionNameUnsecured").val()
    }));
    $("#unsecured").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Home Equity
$(document).on('click', '#addHomeEquity', function(){
    $("#homeEquity").append($("<option>", 
      {
        text: $("#optionNameHomeEquity").val(), 
      value: $("#optionNameHomeEquity").val()
    }));
    $("#homeEquity").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Annuities
$(document).on('click', '#addAnnuities', function(){
    $("#annuities").append($("<option>", 
      {
        text: $("#optionNameAnnuities").val(), 
      value: $("#optionNameAnnuities").val()
    }));
    $("#annuities").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Insurance
$(document).on('click', '#addInsurance', function(){
    $("#insurance").append($("<option>", 
      {
        text: $("#optionNameInsurance").val(), 
      value: $("#optionNameInsurance").val()
    }));
    $("#insurance").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Stocks
$(document).on('click', '#addStocks', function(){
    $("#stocks").append($("<option>", 
      {
        text: $("#optionNameStocks").val(), 
      value: $("#optionNameStocks").val()
    }));
    $("#stocks").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Local Transfer
$(document).on('click', '#addLocalTransfer', function(){
    $("#localTransfer").append($("<option>", 
      {
        text: $("#optionNameLocalTransfer").val(), 
      value: $("#optionNameLocalTransfer").val()
    }));
    $("#localTransfer").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//International Money
$(document).on('click', '#addInternationalMoney', function(){
    $("#internationalMoney").append($("<option>", 
      {
        text: $("#optionNameInternationalMoney").val(), 
      value: $("#optionNameInternationalMoney").val()
    }));
    $("#internationalMoney").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Current Account Services
$(document).on('click', '#addCurrentServices', function(){
    $("#currentServices").append($("<option>", 
      {
        text: $("#optionNameCurrentServices").val(), 
      value: $("#optionNameCurrentServices").val()
    }));
    $("#currentServices").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Merchant Other Services
$(document).on('click', '#addMerchantServices', function(){
    $("#merchantServices").append($("<option>", 
      {
        text: $("#optionNameMerchantServices").val(), 
      value: $("#optionNameMerchantServices").val()
    }));
    $("#merchantServices").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
//Kids Savings Account
$(document).on('click', '#addKid', function(){
    $("#kid").append($("<option>", 
      {
        text: $("#optionNameKid").val(), 
      value: $("#optionNameKid").val()
    }));
    $("#kid").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });

       //FOR ADDING OPTIONS AND NOTIFICATION IN FMCG
 // Fish and Fish Products
  $(document).on('click', '#addFishProducts', function(){
    $("select#fishProducts").append($("<option>", 
      {
        text: $("#optionNameFishProducts").val(), 
      value: $("#optionNameFishProducts").val()
    }));
    $("#fishProducts").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
  //Fruit and Vegetables
    $(document).on('click', '#addFruits', function(){
    $("#fruits").append($("<option>", 
      {
        text: $("#optionNameFruits").val(), 
      value: $("#optionNameFruits").val()
    }));
    $("#fruits").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
    //Vegetables and Animal Oil
    $(document).on('click', '#addVegetables', function(){
    $("#vegetables").append($("<option>", 
      {
        text: $("#optionNameVegetables").val(), 
      value: $("#optionNameVegetables").val()
    }));
    $("#vegetables").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
    //Diary Products
        $(document).on('click', '#addDiary', function(){
    $("#diary").append($("<option>", 
      {
        text: $("#optionNameDiary").val(), 
      value: $("#optionNameDiary").val()
    }));
    $("#diary").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Grainmill Products
          $(document).on('click', '#addGrain', function(){
    $("#grain").append($("<option>", 
      {
        text: $("#optionNameGrain").val(), 
      value: $("#optionNameGrain").val()
    }));
    $("#grain").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Starch and Starch PRoducts
      $(document).on('click', '#addStarch', function(){
    $("#starch").append($("<option>", 
      {
        text: $("#optionNameStarch").val(), 
      value: $("#optionNameStarch").val()
    }));
    $("#starch").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Animal Feeds
      $(document).on('click', '#addAnimal', function(){
    $("#animal").append($("<option>", 
      {
        text: $("#optionNameAnimal").val(), 
      value: $("#optionNameAnimal").val()
    }));
    $("#animal").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Bakery PRoducts
      $(document).on('click', '#addBakery', function(){
    $("#bakery").append($("<option>", 
      {
        text: $("#optionNameBakery").val(), 
      value: $("#optionNameBakery").val()
    }));
    $("#bakery").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Sugar
      $(document).on('click', '#addSugar', function(){
    $("#sugar").append($("<option>", 
      {
        text: $("#optionNameSugar").val(), 
      value: $("#optionNameSugar").val()
    }));
    $("#sugar").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Cocoa
      $(document).on('click', '#addCocoa', function(){
    $("#cocoa").append($("<option>", 
      {
        text: $("#optionNameCocoa").val(), 
      value: $("#optionNameCocoa").val()
    }));
    $("#cocoa").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Macaroni
      $(document).on('click', '#addMacaroni', function(){
    $("#macaroni").append($("<option>", 
      {
        text: $("#optionNameMacaroni").val(), 
      value: $("#optionNameMacaroni").val()
    }));
    $("#macaroni").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Food Condiments
      $(document).on('click', '#addFood', function(){
    $("#food").append($("<option>", 
      {
        text: $("#optionNameFood").val(), 
      value: $("#optionNameFood").val()
    }));
    $("#food").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Agriculture
      $(document).on('click', '#addAgric', function(){
    $("#agric").append($("<option>", 
      {
        text: $("#optionNameAgric").val(), 
      value: $("#optionNameAgric").val()
    }));
    $("#agric").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Lighter
      $(document).on('click', '#addLighter', function(){
    $("#lighter").append($("<option>", 
      {
        text: $("#optionNameLighter").val(), 
      value: $("#optionNameLighter").val()
    }));
    $("#lighter").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Other food products
      $(document).on('click', '#addOtherFood', function(){
    $("#otherFood").append($("<option>", 
      {
        text: $("#optionNameOtherFood").val(), 
      value: $("#optionNameOtherFood").val()
    }));
    $("#otherFood").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
      //Soap
       $(document).on('click', '#addSoap', function(){
    $("#soap").append($("<option>", 
      {
        text: $("#optionNameSoap").val(), 
      value: $("#optionNameSoap").val()
    }));
    $("#soap").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
       //Detergent
        $(document).on('click', '#addDetergent', function(){
    $("#detergent").append($("<option>", 
      {
        text: $("#optionNameDetergent").val(), 
      value: $("#optionNameDetergent").val()
    }));
    $("#detergent").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
        //Airfreshner
         $(document).on('click', '#addAirfreshner', function(){
    $("#airfreshner").append($("<option>", 
      {
        text: $("#optionNameAirfreshner").val(), 
      value: $("#optionNameAirfreshner").val()
    }));
    $("#airfreshner").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
         //Disinfectant
          $(document).on('click', '#addDisinfectant', function(){
    $("#disinfectant").append($("<option>", 
      {
        text: $("#optionNameDisinfectant").val(), 
      value: $("#optionNameDisinfectant").val()
    }));
    $("#disinfectant").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
          //Cleaning Preparations
           $(document).on('click', '#addCleaning', function(){
    $("#cleaning").append($("<option>", 
      {
        text: $("#optionNameCleaning").val(), 
      value: $("#optionNameCleaning").val()
    }));
    $("#cleaning").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
           //Cream
            $(document).on('click', '#addCream', function(){
    $("#cream").append($("<option>", 
      {
        text: $("#optionNameCream").val(), 
      value: $("#optionNameCream").val()
    }));
    $("#cream").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
            //Perfumes
             $(document).on('click', '#addPerfume', function(){
    $("#perfume").append($("<option>", 
      {
        text: $("#optionNamePerfume").val(), 
      value: $("#optionNamePerfume").val()
    }));
    $("#perfume").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
             //Shaving Gels
              $(document).on('click', '#addGels', function(){
    $("#gels").append($("<option>", 
      {
        text: $("#optionNameGels").val(), 
      value: $("#optionNameGels").val()
    }));
    $("#gels").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
              //Cosmetics
               $(document).on('click', '#addCosmetics', function(){
    $("#cosmetics").append($("<option>", 
      {
        text: $("#optionNameCosmetics").val(), 
      value: $("#optionNameCosmetics").val()
    }));
    $("#cosmetics").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
               //Deodorant
                $(document).on('click', '#addDeodorant', function(){
    $("#deodorant").append($("<option>", 
      {
        text: $("#optionNameDeodorant").val(), 
      value: $("#optionNameDeodorant").val()
    }));
    $("#deodorant").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                //Hair Products
                 $(document).on('click', '#addHair', function(){
    $("#hair").append($("<option>", 
      {
        text: $("#optionNameHair").val(), 
      value: $("#optionNameHair").val()
    }));
    $("#hair").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                 //Baby Materials
                  $(document).on('click', '#addBaby', function(){
    $("#baby").append($("<option>", 
      {
        text: $("#optionNameBaby").val(), 
      value: $("#optionNameBaby").val()
    }));
    $("#baby").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                  //Sanitory Towels
                   $(document).on('click', '#addTowel', function(){
    $("#towel").append($("<option>", 
      {
        text: $("#optionNameTowel").val(), 
      value: $("#optionNameTowel").val()
    }));
    $("#towel").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                   //Condoms
                    $(document).on('click', '#addCondom', function(){
    $("#condom").append($("<option>", 
      {
        text: $("#optionNameCondom").val(), 
      value: $("#optionNameCondom").val()
    }));
    $("#condom").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                    //Health
                     $(document).on('click', '#addHealth', function(){
    $("#health").append($("<option>", 
      {
        text: $("#optionNameHealth").val(), 
      value: $("#optionNameHealth").val()
    }));
    $("#health").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                     //Insecticide
                      $(document).on('click', '#addInsecticide', function(){
    $("#insecticide").append($("<option>", 
      {
        text: $("#optionNameInsecticide").val(), 
      value: $("#optionNameInsecticide").val()
    }));
    $("#insecticide").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                      //Toothpaste
                       $(document).on('click', '#addToothpaste', function(){
    $("#toothpaste").append($("<option>", 
      {
        text: $("#optionNameToothpaste").val(), 
      value: $("#optionNameToothpaste").val()
    }));
    $("#toothpaste").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                       //Others
                        $(document).on('click', '#addOthers', function(){
    $("#others").append($("<option>", 
      {
        text: $("#optionNameOthers").val(), 
      value: $("#optionNameOthers").val()
    }));
    $("#others").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Column2
                        $(document).on('click', '#addColumn2', function(){
    $("#column2").append($("<option>", 
      {
        text: $("#optionNameColumn2").val(), 
      value: $("#optionNameColumn2").val()
    }));
    $("#column2").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Column1
                        $(document).on('click', '#addColumn1', function(){
    $("#column1").append($("<option>", 
      {
        text: $("#optionNameColumn1").val(), 
      value: $("#optionNameColumn1").val()
    }));
    $("#column1").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Mobile Phones
                        $(document).on('click', '#addMobile', function(){
    $("#mobile").append($("<option>", 
      {
        text: $("#optionNameMobile").val(), 
      value: $("#optionNameMobile").val()
    }));
    $("#mobile").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Batteries
                        $(document).on('click', '#addBatteries', function(){
    $("#batteries").append($("<option>", 
      {
        text: $("#optionNameBatteries").val(), 
      value: $("#optionNameBatteries").val()
    }));
    $("#batteries").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Household Electronics
                        $(document).on('click', '#addHouseElectronics', function(){
    $("#houseElectronics").append($("<option>", 
      {
        text: $("#optionNameHouseElectronics").val(), 
      value: $("#optionNameHouseElectronics").val()
    }));
    $("#houseElectronics").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Furniture
                        $(document).on('click', '#addFurniture', function(){
    $("#furniture").append($("<option>", 
      {
        text: $("#optionNameFurniture").val(), 
      value: $("#optionNameFurniture").val()
    }));
    $("#furniture").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Other Materials
                        $(document).on('click', '#addOtherMaterials', function(){
    $("#otherMaterials").append($("<option>", 
      {
        text: $("#optionNameOtherMaterials").val(), 
      value: $("#optionNameOtherMaterials").val()
    }));
    $("#otherMaterials").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Vehicles
                        $(document).on('click', '#addVehicles', function(){
    $("#vehicles").append($("<option>", 
      {
        text: $("#optionNameVehicles").val(), 
      value: $("#optionNameVehicles").val()
    }));
    $("#vehicles").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Spirits
                        $(document).on('click', '#addSpirits', function(){
    $("#spirits").append($("<option>", 
      {
        text: $("#optionNameSpirits").val(), 
      value: $("#optionNameSpirits").val()
    }));
    $("#spirits").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Ethyl-Alcohol
                        $(document).on('click', '#addEthyl', function(){
    $("#ethyl").append($("<option>", 
      {
        text: $("#optionNameEthyl").val(), 
      value: $("#optionNameEthyl").val()
    }));
    $("#ethyl").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Light Alcohol
                        $(document).on('click', '#addLightAlcohol', function(){
    $("#lightAlcohol").append($("<option>", 
      {
        text: $("#optionNameLightAlcohol").val(), 
      value: $("#optionNameLightAlcohol").val()
    }));
    $("#lightAlcohol").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Wine
                        $(document).on('click', '#addWine', function(){
    $("#wine").append($("<option>", 
      {
        text: $("#optionNameWine").val(), 
      value: $("#optionNameWine").val()
    }));
    $("#wine").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Malt liquors
                        $(document).on('click', '#addMalt', function(){
    $("#malt").append($("<option>", 
      {
        text: $("#optionNameMalt").val(), 
      value: $("#optionNameMalt").val()
    }));
    $("#malt").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Ice Cream
                        $(document).on('click', '#addIce', function(){
    $("#ice").append($("<option>", 
      {
        text: $("#optionNameIce").val(), 
      value: $("#optionNameIce").val()
    }));
    $("#ice").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Sofr Drinks
                        $(document).on('click', '#addSoft', function(){
    $("#soft").append($("<option>", 
      {
        text: $("#optionNameSoft").val(), 
      value: $("#optionNameSoft").val()
    }));
    $("#soft").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Energy Drinks
                        $(document).on('click', '#addEnergy', function(){
    $("#energy").append($("<option>", 
      {
        text: $("#optionNameEnergy").val(), 
      value: $("#optionNameEnergy").val()
    }));
    $("#energy").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });
                        //Cigarette
                        $(document).on('click', '#addCigarette', function(){
    $("#cigarette").append($("<option>", 
      {
        text: $("#optionNameCigarette").val(), 
      value: $("#optionNameCigarette").val()
    }));
    $("#cigarette").multiselect('rebuild');
    new PNotify({
            title: 'Success notice',
            text: 'A new option has been added.',
            icon: 'icon-checkmark3',
            type: 'success'
        });
  });


//Trigger the popover
  $("[data-toggle = 'popover']").popover({
    template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title bg-primary"></h3><div class="popover-content"></div></div>',
    title : "Add an option",
    html : true,
    placement : "right"
  });

  //Hide the popover
$('html').on('mouseup', function(e) {
    if(!$(e.target).closest('.popover').length) {
        $('.popover').each(function(){
            $(this.previousSibling).popover('hide');
        });
    }
});

}); //Close DOM ready

(function ($) {
    $.fn.extend({

    // With every keystroke capitalize first letter of ALL words in the text
    upperFirstAll: function() {
        $(this).keyup(function(event) {
            var box = event.target;
            var txt = $(this).val();
            var start = box.selectionStart;
            var end = box.selectionEnd;

            $(this).val(txt.toLowerCase().replace(/^(.)|(\s|\-)(.)/g,
            function(c) {
                return c.toUpperCase();
            }));
            box.setSelectionRange(start, end);
        });
        return this;
    },

    // With every keystroke capitalize first letter of the FIRST word in the text
    upperFirst: function() {
        $(this).keyup(function(event) {
            var box = event.target;
            var txt = $(this).val();
            var start = box.selectionStart;
            var end = box.selectionEnd;

            $(this).val(txt.toLowerCase().replace(/^(.)/g,
            function(c) {
                return c.toUpperCase();
            }));
            box.setSelectionRange(start, end);
        });
        return this;
    },

    // Converts with every keystroke the hole text to lowercase
    lowerCase: function() {
        $(this).keyup(function(event) {
            var box = event.target;
            var txt = $(this).val();
            var start = box.selectionStart;
            var end = box.selectionEnd;

            $(this).val(txt.toLowerCase());
            box.setSelectionRange(start, end);
        });
        return this;
    },

    // Converts with every keystroke the hole text to uppercase
    upperCase: function() {
        $(this).keyup(function(event) {
            var box = event.target;
            var txt = $(this).val();
            var start = box.selectionStart;
            var end = box.selectionEnd;

            $(this).val(txt.toUpperCase());
            box.setSelectionRange(start, end);
        });
        return this;
    }

    });
}(jQuery));

