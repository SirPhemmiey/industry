-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 05:43 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industry`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankingproducts`
--

CREATE TABLE `bankingproducts` (
  `banking_products_id` int(11) NOT NULL,
  `banking_id` int(10) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_information` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bankings`
--

CREATE TABLE `bankings` (
  `banking_id` int(10) NOT NULL,
  `bank_names` varchar(100) NOT NULL,
  `current_account` varchar(500) DEFAULT NULL,
  `status_account` varchar(500) DEFAULT NULL,
  `term_deposits` varchar(500) DEFAULT NULL,
  `savings_account` varchar(500) DEFAULT NULL,
  `individual_retirement_accounts` varchar(500) DEFAULT NULL,
  `foreign_areas` varchar(500) DEFAULT NULL,
  `debit_card` varchar(500) DEFAULT NULL,
  `credit_card` varchar(500) DEFAULT NULL,
  `others` varchar(500) DEFAULT NULL,
  `m_internet_platform` varchar(500) DEFAULT NULL,
  `transaction_banking` varchar(500) DEFAULT NULL,
  `others2` varchar(500) DEFAULT NULL,
  `kids_savings_account` varchar(500) DEFAULT NULL,
  `home_loans` varchar(500) DEFAULT NULL,
  `auto_loans` varchar(500) DEFAULT NULL,
  `other_credit_facilities` varchar(500) DEFAULT NULL,
  `international_trade_finance` varchar(500) DEFAULT NULL,
  `private_sector_enterprises` varchar(500) DEFAULT NULL,
  `small_business_loans` varchar(500) DEFAULT NULL,
  `health` varchar(500) DEFAULT NULL,
  `education` varchar(500) DEFAULT NULL,
  `public_sector` varchar(500) DEFAULT NULL,
  `unsecured_signature` varchar(500) DEFAULT NULL,
  `home_equity` varchar(500) DEFAULT NULL,
  `annuities` varchar(500) DEFAULT NULL,
  `insurance` varchar(500) DEFAULT NULL,
  `stocks` varchar(500) DEFAULT NULL,
  `local_transfer` varchar(500) DEFAULT NULL,
  `international_money_services` varchar(500) DEFAULT NULL,
  `current_account_services` varchar(500) DEFAULT NULL,
  `merchant_other_services` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankings`
--

INSERT INTO `bankings` (`banking_id`, `bank_names`, `current_account`, `status_account`, `term_deposits`, `savings_account`, `individual_retirement_accounts`, `foreign_areas`, `debit_card`, `credit_card`, `others`, `m_internet_platform`, `transaction_banking`, `others2`, `kids_savings_account`, `home_loans`, `auto_loans`, `other_credit_facilities`, `international_trade_finance`, `private_sector_enterprises`, `small_business_loans`, `health`, `education`, `public_sector`, `unsecured_signature`, `home_equity`, `annuities`, `insurance`, `stocks`, `local_transfer`, `international_money_services`, `current_account_services`, `merchant_other_services`) VALUES
(1, 'Access Bank', 'Individual Current Account,Premier Current Account,\nGold Current Account,\nEvergreen Account', 'A,Yes! Mr', 'Call Accounts/ Deposits,Dep', 'early savers, solo, instant savings account, premier savings account, target savings account, evergreen account, access savings challenge smart savers', '', 'Domiciliary Accounts, Diaspora Banking', 'Dominated In Naira And Dollars, Visa Debit, Verve Debit, Persona', 'Black Card & Platinum Credit Card, USD Credit Card, Naira Credit Card', 'Access To Merchants And ATMs Worldwide', 'Internet Banking, Mobile Banking Classic', 'Funds Transfer, Access Bank, Access Online, Primus, AccessPay Collection, PayAttitude, PAYWITHCAPTURE', 'ATM, Smart Savers Account', '', 'Mortgages, Home Loans', 'Vehicle Finance', 'Overdrafts, Contract Finance, Payday Advance', '', '', '', 'Maternal Health Service Support (MHSS)', 'Advance For School Fees', '', 'Personal Loans & Specialized Financing, Salary Advance', '', '', '', 'Treasury Bills, Bonds And Guarantees, Wealth Management, Discretionary Portfolio, Hedge Funds, Trusts Formations, Foundation Formations, International Estate Planning, Inheritance Planning, Asset Management, Family Offices, Custody Services ', '', 'MoneyGram, Western Union, Ria Money Transfer ', '', ''),
(2, 'First Bank of Nigeria Plc', 'Normal Current Account,\r\nFirstCurrent Plus,\r\nFirstCurrent Business,\r\nFirstExclusive Current\r\n', 'Premium Banking', 'Fixed Deposit Account,\r\nFirst Premium Term Deposits\r\n', 'Normal Savings account,\r\nFirstSavings plus,\r\nFirst Instant Account,\r\nXplore First\r\n\r\n', NULL, 'FirstDiaspora,\r\nFirstDom Plus,\r\nDomiciliary Account\r\n', NULL, NULL, NULL, NULL, 'Electricity,\r\nTelecoms Subscription,\r\nTV Subscription,\r\nWater Rates,\r\nWaste Bills,\r\nSchool Fees Collections,\r\nNigeria Port Authority (NPA) Charges,\r\nNigerian Export Supervision Scheme (NESS) Fees,\r\nCustoms Duty,\r\nStates Internally Generated Revenue (IGR),\r\nFederal Inland Revenue Service (FIRS),\r\nChurches/Mosques,\r\nHospitals,\r\nPetrol Sales,\r\nNigerian Immigration Services,\r\nFRSC Drivers License Collection,\r\nImport,\r\nInternational Payments\r\n\r\n', 'FirstPay,\r\nFirstCollect\r\nFirstPayLink,\r\nFirstEdu Portal,\r\nPoint of Sales (POS) Terminal\r\n', 'Kids First,\r\nMeFirst\r\n', 'Personal Home Loan (Mortgage),\r\nHousehold Equipment Loan,\r\nJoint Mortgage,\r\nCommercial Mortgage\r\n', 'Automobile Loan\r\n', 'Secured Overdraft\r\n', NULL, 'Commercial Agriculture Credit Scheme (CACS),\r\nConventional Term Loans & Overdrafts : Agricultural financing,\r\nReal Sector Support Facility: Agricultural financing\r\n', 'Secured Term Loan,Micro Small and Medium Enterprises Development Fund: Agricultural financing,SME Products Financing : Import Finance,SME Products Financing : Cement Distributorship Finance,SME Products Financing : Invoice Discounting Finance,SME Products Financing : Bonds & Guarantee,SME Products Financing : Telecommunications Distributorship Finance,SME Products Financing : Petroleum Dealership Finance,SME Products Financing : Oil and Gas Contract Finance,Local Purchase Orders (LPOs) Finance\r\n', NULL, 'FirstEdu Loan\r\n', 'Revenue Loans & Overdraft (Local Government)\r\n', 'Personal Loan Against Salary\r\n', NULL, NULL, NULL, 'FirstBank Private Banking\r\n', NULL, 'Western Union Money Transfer,\r\nMoneyGram,\r\nRia Money Transfer,\r\nTransfast\r\n', NULL, NULL),
(3, 'Guaranty Trust Bank Plc', 'Current Account,\r\nGT Business Account,\r\nPrivate Banking Current Account\r\n', NULL, 'Tenored Deposits,\r\nFixed and Tenured Deposits,\r\nCall Accounts\r\n', 'GTSave,\r\nGTCrea8 eSavers,\r\nGTMax,\r\nGTAuto,\r\nGTEasySavers\r\n', NULL, 'Domiciliary Account\r\n', 'Premium Master Card,World MasterCard,\nDebit MasterCard,\nPlatinum Debit MasterCard,SKS Teen Card,GTCrea8 MasterCard,Naira MasterCard,Standard MasterCard,Visa Classic,Visa Debit', NULL, 'GTBank Prepaid Payroll Card', 'GTBank Internet Banking,\r\nGTBank Mobile App,\r\nGTConnect\r\n', 'Account Aggregation Services,\r\nSchool Pay,\r\nGTBank Automated Payment System (GAPS),\r\nGTPay,\r\nCustoms Duty Collection,\r\nInternational concierge services,\r\nConcierge Services,\r\nSMS Banking,\r\nPoint of Sale (POS),\r\nOnline Bill Payment,\r\nOne Click Airtime Top-up,\r\nAirline Ticket Payment,\r\nUS Visa Fees Payment,\r\nElectronic Form M,\r\n*737* Transfer\r\n', 'ATM (Automatic Teller Machine),\r\nFast Track Banking with PIN Pad,\r\nGT Trade Tracker,\r\nGuaranty Trust Electronic Notification System (GeNS),\r\nGT Track-It\r\n', 'Smart Kids Save\r\n\r\n', 'Mortgages\r\n', NULL, 'Overdraft,\r\nTime/Term Loans,\r\nBankers Acceptances,\r\nLoans, Bonds and Guarantees,\r\nLeases,\r\nGuarantees,\r\nTerm loans\r\n', 'Letters of Credit,\r\nBills for Collection,\r\nDollar Issuance,\r\nOffshore Guarantees,\r\nTrading Overseas\r\n', 'Corporate borrowing\r\n', 'SME Term Loan (Build or Buy),\r\nInvoice Discount Facility\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Portfolio Management,\r\nDebtor Services,\r\nCreditor Advisory Services,\r\nBank Advisory Services\r\n', NULL, 'FX Forward Contracts,\r\nInvisible Transactions,\r\nExports,\r\nLetters Of Credit,\r\nInternational Funds Settlements, \r\nWestern Union,\r\nMoneyGram,\r\nGuaranty Trust Funds Transfer,\r\nFunds-In-Transit,\r\nForeign Currency Draft Issue,\r\nClearing and Collection of Foreign Cheques,\r\nForeign Currency Cheques,\r\nForeign Currency Inward Transfer (Fx Inflow),\r\nForeign Currency Outward Transfer (Fx Outflows),\r\nCertificate of Capital Importation,\r\nGTBank International Money Transfer\r\n', 'Cheque Writing - Automate Cheque Printing\r\n', 'Trade Relations Desk,\r\nShipping Documents/Endorsements,\r\nBills for Collection (Documentary Collection)\r\nSafe custody,\r\nSME MarketHub\r\n'),
(4, 'Zenith International Bank Ltd', 'Individual Current Account,\r\nGold Premium Account,\r\nPlatinum Premium Account,\r\nSalary Current Account\r\nSalary Savings Account,\r\nSole Proprietorship / Enterprise Account,\r\nPartnership Accounts,\r\nClubs, Societies, Associations,\r\nTrust Fund,\r\nLimited Liability Company Accounts,\r\nParastatal/Government Agencies,\r\nNon-Governmental Organisation Account (NGOs),\r\nEmbassies And High Commissions,\r\nChurch Account\r\n', NULL, 'Fixed Deposit, \r\nCall Deposit \r\n', 'Individual Savings Account,\r\nEazySave Classic Account,\r\nEazySave Premium Account,\r\nAspire Account\r\n', NULL, 'Ordinary Domiciliary Account,\r\nCash Domiciliary Account', 'MasterCard Gold Debit,\r\nMasterCard Platinum Debit Card\r\n', 'Classic Credit Cards,\r\nGold Credit Cards,\r\nPlatinum Credit Cards\r\n', 'Pound prepaid card,\r\nDollar prepaid card,\r\nEuro prepaid card,\r\nNaira Prepaid card,\r\nMulti-Purpose Cards,\r\nBranded and Loyalty Cards \r\n', 'Internet Banking,\r\nZenith Bank Mobile App,\r\n*966# EazyBanking,\r\nCorporate Internet Banking\r\n', 'Contactless POS Terminals,\nRealtime Access - Be the first to know,POS', 'Alertz,\r\nZenithDirect Telephone Banking,\r\nInstant Card Issuance,\r\nTrade Finance Online,\r\nE- LC Application\r\n', 'Zenith Children''''s Account (ZECA),\nChildren Education Savings Plan,Children Education Term Plan', NULL, NULL, 'Term Loan,\r\nLeases,Overdraft\r\n', 'Import Finance Facility,\r\nExport Finance Facility\r\n', 'Receivable Discounting/Invoice Discounting,\r\nLPO Finance,\r\nBonds and Guarantee\r\n', 'Receivable Discounting/Invoice, Discounting,\r\nLPO Finance,\r\nBonds and Guarantee\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Householders'' Comprehensive Insurance,\r\nBurglary & Housebreaking Insurance,\r\nFire & Special Perils Insurance,\r\nMotor Insurance,\r\nProfessional Indemnity Insurance, \r\nPersonal Accident Insurance,\r\nPersonal Liability Insurance,\r\nWhole LIfe Assurance,\r\nGrow Up Plan,\r\nTerm Assurance,\r\nPlatinum Savings Plan,\r\nGold & Silver Savings Plan\r\n', 'Certificate of Deposit (CD) & Short Term, Investment Fund (STIF),\r\nPersonal funds management and investment, \r\nAdvisory Services,\r\nTrust Formations\r\n', 'NIP Transfers, \r\nNEFT Transfers, \r\nDom to Dom Transfers, \r\nInvisible Remittance,\r\nNIBSS e-Billspay\r\n', 'Home Remittance,\r\nPersonal Travel Allowance (PTA),\r\nBusiness Travel Allowance (BTA),\r\nForeign Currency Transfers,\r\nVisa direct,\r\nImport Bills for Collection,\r\nNon Valid For Forex/Advance Payment,\r\nExport Transactions\r\n', NULL, 'Tax Solutions,\r\nFiduciary Services,\r\nShare Acquisition,\r\nXPath,\r\nGLOBALPAY\r\n'),
(5, 'Skye Bank', 'Skye Current Account,Skye Select Current Account,Skye Ascend Current Account,Skye Global Account,Skye Community Current Account,SKYE BUSINESS ACCOUNT (SBA),SBA SAVINGS ACCOUNT', NULL, 'Term deposits\r\n', 'Skye Wise target savings Account,Skye Save Plus,Skye Flex,\nSkye Ease,Skye Rainbow Children’s Savings account,\nSkye Campus plus Savings account,\nSkye Community Savings Account', NULL, NULL, 'MasterCard Naira Debit Card,MasterCard Standard Naira Debit,MasterCard Platinum Naira Debit,MasterCard Gold USD Debit,Visa Naira Debit Card,Verve Debit Card', 'Naira Credit Card,Visa Classic Naira Credit Card,Visa Gold Naira Credit Card,MasterCard Platinum Naira Credit Card,USD Credit cards,Visa Gold USD Credit Card,Visa Platinum USD Credit Card', 'Xplorer(prepaid),Verve prepaid,MasterCard prepaid (can be used locally & internationally),Visa USD prepaid (can be used locally & internationally)', 'Internet Banking\r\n', NULL, NULL, 'Skye Rainbow\r\n', NULL, 'Skye Auto Lease,AUTO LOAN FOR BUSINESS OWNERS,Asset Financing Facility', 'Skye Salary Advance,\nPersonal Term Loan,\nPersonal Term Loan-Priority Plus Clients,\nSkye Customer Travel Finance,Skye Pearl,Personal Term Loan,Salary Advance,\nSalary Overdraft', NULL, NULL, 'Intervention Funds,Asset Financing,Short Term Loan,\nAdvance,Short Term Working Capital,LPO Financing Facility,Invoice Discounting', NULL, 'Retail Loans for Parents and Teachers\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Skye FlitCash\r\n', 'Western Union Money transfer,MoneyGram Money transfer,RIA Money Transfer', NULL, 'Saturday Banking,YESMall,\nBusiness Name Registration,\nSkye Business Seminar'),
(6, 'Nigerian Agricultural, Co-operative & Rural Development Bank Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Nigerian Education Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'StanbicIBTC Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Standard Chartered Bank Nigeria Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Union Bank of Nigeria Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'United Bank for Africa Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Unity Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Wema Bank Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Bank of Industry Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Diamond Bank Limited', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Ecobank Nigeria Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Equitorial Trust Bank Limited', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Federal Mortgage Bank of Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Fidelity Bank Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'First City Monument Bank Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Sterling Bank Plc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fmcgproducts`
--

CREATE TABLE `fmcgproducts` (
  `id` int(11) NOT NULL,
  `products_name` varchar(255) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fmcgs`
--

CREATE TABLE `fmcgs` (
  `companies_id` int(10) NOT NULL,
  `companies` varchar(500) NOT NULL,
  `fish_and_fish_products` varchar(500) DEFAULT NULL,
  `fruit_and_vegetables` varchar(500) DEFAULT NULL,
  `vegetable_and_animal_oil` varchar(500) DEFAULT NULL,
  `diary_products` varchar(500) DEFAULT NULL,
  `grainmill_products` varchar(500) DEFAULT NULL,
  `starch_and_starch_products` varchar(500) DEFAULT NULL,
  `animal_feeds` varchar(500) DEFAULT NULL,
  `bakery_products` varchar(500) DEFAULT NULL,
  `sugar` varchar(500) DEFAULT NULL,
  `coc_sug_choc_confec` varchar(500) DEFAULT NULL,
  `macaroni` varchar(500) DEFAULT NULL,
  `food_condiments` varchar(500) DEFAULT NULL,
  `agriculture` varchar(500) DEFAULT NULL,
  `lighter` varchar(500) DEFAULT NULL,
  `other_food_products` varchar(500) DEFAULT NULL,
  `soap` varchar(500) DEFAULT NULL,
  `detergent` varchar(500) DEFAULT NULL,
  `airfreshner` varchar(500) DEFAULT NULL,
  `disinfectant` varchar(500) DEFAULT NULL,
  `cleaning_preparations` varchar(500) DEFAULT NULL,
  `cream` varchar(500) DEFAULT NULL,
  `perfumes` varchar(500) DEFAULT NULL,
  `shaving_gels` varchar(500) DEFAULT NULL,
  `cosmetics` varchar(500) DEFAULT NULL,
  `deodorants` varchar(500) DEFAULT NULL,
  `hair_products` varchar(500) DEFAULT NULL,
  `baby_materials` varchar(500) DEFAULT NULL,
  `sanitory_towels` varchar(500) DEFAULT NULL,
  `condoms` varchar(500) DEFAULT NULL,
  `health` varchar(500) DEFAULT NULL,
  `insecticide` varchar(500) DEFAULT NULL,
  `toothpaste` varchar(500) DEFAULT NULL,
  `others` varchar(500) DEFAULT NULL,
  `book` varchar(500) DEFAULT NULL,
  `column1` varchar(500) DEFAULT NULL,
  `column2` varchar(500) DEFAULT NULL,
  `mobile_phones` varchar(500) DEFAULT NULL,
  `batteries` varchar(500) DEFAULT NULL,
  `household_electronics` varchar(500) DEFAULT NULL,
  `furniture` varchar(500) DEFAULT NULL,
  `other_materials` varchar(500) DEFAULT NULL,
  `vehicles` varchar(500) DEFAULT NULL,
  `spirits` varchar(500) DEFAULT NULL,
  `ethyl_alcohol` varchar(500) DEFAULT NULL,
  `light_alcohol` varchar(500) DEFAULT NULL,
  `wine` varchar(500) DEFAULT NULL,
  `malt_liquors` varchar(500) DEFAULT NULL,
  `ice_cream` varchar(500) DEFAULT NULL,
  `soft_drinks` varchar(500) DEFAULT NULL,
  `energy_drinks` varchar(500) DEFAULT NULL,
  `cigarette` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fmcgs`
--

INSERT INTO `fmcgs` (`companies_id`, `companies`, `fish_and_fish_products`, `fruit_and_vegetables`, `vegetable_and_animal_oil`, `diary_products`, `grainmill_products`, `starch_and_starch_products`, `animal_feeds`, `bakery_products`, `sugar`, `coc_sug_choc_confec`, `macaroni`, `food_condiments`, `agriculture`, `lighter`, `other_food_products`, `soap`, `detergent`, `airfreshner`, `disinfectant`, `cleaning_preparations`, `cream`, `perfumes`, `shaving_gels`, `cosmetics`, `deodorants`, `hair_products`, `baby_materials`, `sanitory_towels`, `condoms`, `health`, `insecticide`, `toothpaste`, `others`, `book`, `column1`, `column2`, `mobile_phones`, `batteries`, `household_electronics`, `furniture`, `other_materials`, `vehicles`, `spirits`, `ethyl_alcohol`, `light_alcohol`, `wine`, `malt_liquors`, `ice_cream`, `soft_drinks`, `energy_drinks`, `cigarette`) VALUES
(1, 'Unilever', 'Titus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Knorr,Royco', NULL, NULL, 'Blue Band\r\n', 'Key Soap,\r\nGeisha,\r\nLifebuoy Total\r\n', 'Omo Washing Powder,\r\nSunlight\r\n', NULL, NULL, 'Lifebuoy Care\r\n', 'Fair & Lovely,\r\nVaseline \r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Remove Jhor', NULL, NULL),
(3, 'Nigerian Breweries', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Williams,\r\nStar,\r\nHeineken,\r\nGulder,\r\nGoldberg,\r\nStar lite,\r\n“33” Export, \r\nLife continental lager beer,\r\nMore,\r\nStar Triple-X,\r\nLegend Extra,\r\nTurbo King,\r\n', 'ROOTS,\r\nRhythm,\r\nStar RADLER,\r\nAce Passion,\r\nStrongbow\r\n', NULL, 'Amstel Malta,\r\nHi-Malt,\r\nMaltina,\r\nMalta Gold,\r\nMaltex,\r\nHi-Malt\r\n', NULL, 'Fayrouz\r\n\r\n', 'Climax Herbal \r\n', NULL),
(4, 'Guinness Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Johnnie Walker Black Label,\r\nJOHNNIE WALKER RED,\r\nBaileys,\r\nJohnnie Walker Blue Label,\r\nSmirnoff Vodka,\r\nCîroc vodka,\r\nOrijin Bitters,\r\nMaster’s Choice\r\n', 'Guinness Foreign Extra, \r\nGuinness Extra Smooth,\r\nHarp,\r\nDubic,\r\nSatzenbrau\r\n', 'Smirnoff Ice,\r\nSNAPP,\r\nOrijin\r\n', NULL, 'Malta Guinness,Malta Guinness, Low Sugar\r\nOrijin Zero\r\n', NULL, NULL, NULL, NULL),
(5, 'Chi Nigeria', NULL, NULL, NULL, 'Chi Milk,\r\nChi Health,\r\nHollandia Evaporated Full Cream Milk,\r\nHollandia Fruit and Milk Drink,\r\nHollandia Gold Instant Full Cream Milk Powder,\r\nHollandia UHT Milk\r\n', NULL, NULL, NULL, 'Muff the Muffin,\r\nChi Classic Cake,\r\nChi Super Bite,\r\nBeefie Beef Roll,\r\nChi Beefie Spicy Treat\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Hollandia Custard Powder,\r\nHollandia Ready to Eat Custard\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Chi Exotic,\r\nCapri Sonne,\r\nChivita Premium,\r\nChi IceTea,\r\nHollandia Yoghurt,\r\nLa casera,\r\nSmoov Chapman,\r\nBoost,\r\nNestlé Pure Life\r\n', NULL, NULL),
(6, 'Coca-Cola', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Coca-Cola,\r\nSprite,\r\nFanta,\r\nDiet Coke,\r\nCoke Zero,\r\nEva,\r\n5Alive Pulpy,\r\nSchweppes,\r\nFive alive,\r\nLimca\r\n', NULL, NULL),
(7, 'La Casera', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'La casera,\r\nSmoov Chapman\r\n', NULL, NULL),
(8, 'Nestle', NULL, NULL, NULL, 'Nido,\r\nCarnation\r\n', NULL, NULL, NULL, NULL, NULL, 'NESCAFÉ CREM,\r\nMilo,\r\nAero,\r\nCallier,\r\nbutterfinger,\r\ncrunch,\r\ncoffee mate,\r\nkikat,\r\nOrion,\r\nWonka chocolate,\r\nCoffee-Mate,\r\nSmarties,\r\nNescafé Original,\r\nToll House,\r\ncookie crisp,\r\nCHOCOMILO\r\n', NULL, 'MAGGI Star Cube,\r\nbuitoni,\r\nChef,\r\nMAGGI Crayfish,\r\nMAGGI Chicken,\r\nGinger & Garlic,\r\nGolden Beef,\r\nClassic\r\n', NULL, NULL, 'Cerelac,\r\nGOLDEN MORN,\r\nInfant Formula-Nestle NAN,\r\nNestle LACTOGEN\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Boost,\r\nNestlé Pure Life\r\n', NULL, NULL),
(9, 'MAC cosmetics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Air of style,\r\nTurquatic\r\n', NULL, 'Primer,\r\nRemovers,\r\nmoisturizers,\r\nBrushes,\r\nMac Makeup\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Sleek Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lightening Range,Exfoliating Range\r\nS.Studio Facial,\r\nS.Studio Make up,\r\nSleek Makeup\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Human hair weaves,Human hair Wigs, \r\nClosure\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'House of TARA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'brushes,\r\nTara Make up\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Soulmate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Soulmate Bergamot Hair Cream,\r\nSoulmate Hair Conditioner Plus,\r\nSoulmate Sulphur Hair Cream,\r\nSoulmate Relaxer,\r\nSoulmate Neutralizing Shampoo,\r\nSoulmate Anti-Dandruff Shampoo,\r\nSoulmate Hair Oil,\r\nSoulmate Hair Moisturizer,\r\nSoulmate African Herbal Hair Grow\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Dangote', NULL, NULL, NULL, 'Ziza Milk\r\n', NULL, NULL, NULL, NULL, 'Dangote Sugar\r\n', NULL, 'Dangote Macaroni,\r\nDangote Spaghetti,\r\nDangote Noodles\r\n', 'Dangote Salt\r\n', NULL, NULL, 'Petit Tomato Paste,Danvita flour\r\nDangote Flour,\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dangote Cement,\r\nDangote Sacks\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mowa Water,\r\nDansa Juice\r\n', NULL, NULL),
(14, 'Dufil', NULL, NULL, 'PowerOil\r\n', '', NULL, NULL, NULL, 'Minimie Chinchin\r\n', '', NULL, 'Indomie,\r\nPower pasta,\r\nMinimie Noodles\r\n', '', NULL, NULL, 'Petit Tomato Paste,Danvita flour\r\nDangote Flour,\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(15, 'PZ CUSSONS', NULL, NULL, 'Mamador\r\n', 'Nutricima- Yo,\r\nCoast,\r\nOlympic\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Minerva,\r\nHorio,\r\nBenecol,\r\nRafferty''s Garden,\r\nfive:AM\r\n', 'Imperial Leather,\r\nPremier,\r\nRelax & Unwind Bath Soak,\r\nVenus,\r\nJoy\r\n', 'Zip\r\nRadiant\r\n', NULL, NULL, 'Carex,\r\nLuksja,\r\nBump Hydrate & Nourish Shower Cream, \r\nOriginal Source,\r\nMorning Fresh\r\n', 'Cussons Baby,\r\nSoothe & Nourish Body Lotion,\r\nStretch Mark Cream\r\n', NULL, NULL, NULL, NULL, 'Charles Worthington hair care range,\r\nFudge Urban\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Bump Gift Pack,\r\nRobb\r\n\r\n', NULL, NULL, NULL, 'Haier thermocool mobile\r\n', NULL, 'Haier Thermocool washing machine,Haier Thermocool Air Conditioners,Haier Thermocool Cookers,Haier Thermocool Microwaves,Haier Thermocool Water Dispensers,Haier Thermocool Televisions,Haier Thermocool Generators,Haier Thermocool Stabilizers,Haier Thermocool computing,Haier Thermocool inverters,Haier Thermocool stabilizers,Haier Thermocool automatic voltage regulators,Haier Thermocool fans,Haier Thermocool water dispensers,Haier Thermocool water heaters,Haier Thermocoolair coolers\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Promasidor', NULL, NULL, NULL, 'Cowbell,\r\nCowbell Flavoured Milk,\r\nMiksi,\r\nloya milk,\r\nLoya premium\r\n', 'Briella Yumvita,\r\nBriella sunvita\r\n', NULL, NULL, NULL, NULL, 'Kremela,\r\nProma Café,\r\nTwisco\r\n', NULL, 'Onga,\r\nSossi,\r\nProya\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Drink-O-Pop,\r\nAmila,\r\nTop Tea,\r\nProma Café,\r\nTwisco\r\n\r\n', NULL, NULL),
(17, 'P&G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vicks\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Ariel,\r\nBonux\r\n', 'Ambi Pur\r\n', 'Safeguard\r\n', 'Fairy,\r\nHarpic\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Pampers\r\n', 'Always\r\n', NULL, NULL, NULL, 'Oral-B\r\n', 'Gillette\r\n', NULL, NULL, NULL, NULL, 'Duracell\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Reckitt benckinser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'French''s\r\n', NULL, NULL, NULL, NULL, 'Vanish,\r\nWoolite,\r\nCalgon,\r\nFinish \r\n', 'Airwick\r\n', 'Dettol,\r\nlyson\r\n', 'Cillit Bang\r\n', 'Clearasil\r\n', NULL, 'Veet\r\n', NULL, NULL, NULL, NULL, NULL, 'Durex\r\n', 'Nurofen,\r\nStrepsils,\r\nGaviscon,\r\nMucinex\r\n', 'Mortein\r\n', NULL, 'Scholl\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'BOBO', NULL, NULL, NULL, 'Bobo milk drink,\r\nYugo Milk Drink\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bobo milk drink,\r\nBoyic Yoghurt,\r\nYugo Milk Drink\r\n', NULL, NULL),
(20, 'Viju', NULL, NULL, NULL, 'Viju Wheat Flavoured Milk drink\r\n', NULL, NULL, NULL, 'Obest Biscuit,\r\nMilk crisp biscuit,\r\nbutter cookies biscuit\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mr V Premium water,\r\nViju Wheat Flavoured Milk drink,\r\nViju bb star Apple flavoured,\r\nViju bb Star banana flavoured,\r\nApple Fruit Milk drink,\r\nViju bb star pineapple flavoured,\r\nViju Chocolate flavor milk drink,\r\nViju bb star Orange flavoured,\r\nViju pineapple and  Apple milk drink\r\n', NULL, NULL),
(21, 'Flour Mills', NULL, NULL, 'Golden Penny Pure Vegetable Oil,\r\nGolden Penny Pure Soya Oil\r\n', NULL, 'Golden Rice\r\n', 'Golden penny ball foods\r\n', NULL, 'Golden Penny Flour\r\n', 'Golden sugar \r\n', 'Marios Cheese balls\r\n', 'Goldenpenny Pasta,\r\nGoldenpenny Noodles\r\n', NULL, 'Golden Fertilizer,\r\nPremier Feed Mills\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAGCO\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Cadbury', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AFC salted crackers,\r\nCosy\r\n', NULL, 'Cadbury Bournvita,\r\nTomTom Classic,\r\nTomTom HoneyLemon, \r\nTomTom Strawberry,\r\nTrebor Buttermint\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cadbury Hot Chocolate Drink,\r\nTang\r\n', NULL, NULL),
(23, 'Wamco', NULL, NULL, NULL, 'PEAK EVAPORATED MILK,PEAK FULL CREAM INSTANT MILK POWDER,PEAK SWEETENED CONDENSED MILK,PEAK UHT MILK\n', NULL, NULL, NULL, NULL, NULL, 'peak Choco\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'GSK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our prescription medicines and vaccines,\r\nOur consumer healthcare products,\r\nViiV Healthcare,\r\nStiefel dermatology \r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'JOHNSONS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liquid Neutrogener,\r\nlubriderm\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'Johnsons Baby Care,\r\nAveeno baby,\r\nJohnsons Baby Wash,\r\nJohnsons Bubble bath,\r\nJohnsons cologne,\r\nJohnsons diaper cream,\r\nJohnsons gift pack,\r\nJohnsons hair care,\r\nJohnsons lotion,\r\nJohnson nursing pads,\r\nJohnson oil,\r\nJohnson powder,\r\nJohnson wipes\r\n', NULL, NULL, 'Band Aid,\r\nListerine whitening,\r\nRembrandt,\r\nListerine \r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'CWAY', NULL, NULL, NULL, 'NUTRI-MILK,\r\nTIGO MILK DRINK\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WATER DISPENSER ROYAL 3F/3S, Water dispenser RUBY 1F/1S, Water dispenser EXECUTIVE 4F/4S, Water dispenser RUBY 2F/2S, Water dispenser EXECUTIVE 1S/F, Water dispenser EXCEL 1S/F, Water dispenser EXECUTIVE 2S/F, Water dispenser ROYAL 1S/F, Water dispenser ROYAL 2S/F, Water dispenser EXCEL 2S/F, Water dispenser EXECUTIVE 3S/F\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CWAY Purified Table Water,\r\nCWAY 5 gallon canned water,\r\nNUTRI-MILK,\r\nTIGO MILK DRINK,\r\nCWAY  FRUIT DRINKS,\r\nICE TEA,\r\nMILK TEA POWDER,\r\n', NULL, NULL),
(27, 'Deli Foods\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CABIN,\r\nCREAM CRACKER,\r\nDIGESTIVE,\r\nSANDWICHED BISCUITS,\r\nCOASTER,\r\nCALIPSO CRACKER BISCUITS\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Vital Products\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vitali Tomato Products,\r\nVitals Children Food,\r\nVitals Food\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vitavite Multivitamin Fruit Drinks,\r\nZico Flavoured Vitamin C Drinks,\r\nVivo Dairy Drinks\r\n', 'Energee Plus Energy Drinks\r\n', NULL),
(29, 'Beloxxi Group\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beloxxi Cream Crackers \r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vital 100% Juice Drinks\r\n', NULL),
(30, 'Ok Foods', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OK biscuits \r\n', NULL, 'OK sweets\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Deekay Group Nigeria\r\n', 'HAANO Fishes\r\n', NULL, 'Sardines in vegetable oil\r\n', NULL, 'HAANO Baked Beans,\r\nHAANO Rice\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HAANO Match box\r\n', 'HAANO Tomato Paste,\r\nHAANO Margarine\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MapleLeaf 20 Leaves,\r\nMapleLeaf 40 Leaves Brand, 60 Leaves, Brand, 80 Leaves,\r\nMapleLeaf Higher Education\r\n', NULL, NULL, NULL, 'Nexus Batteries\r\n', 'Nexus Batteries\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Nutri C\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nutri-C\r\n', NULL, NULL),
(33, 'UAC\r\n', NULL, NULL, NULL, NULL, NULL, 'FUNTIME CHIPS\r\n', NULL, 'GALA SAUSAGE ROLLS,\r\nFUNTIME CAKE,\r\nSNAPS\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUPREME ICE CREAM- SCOOP FLAVOUR\r\n', 'Flavours: Pineapple; Orange; Apple,\r\nSwan\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `telecommunications`
--

CREATE TABLE `telecommunications` (
  `telecommunication_id` int(10) NOT NULL,
  `company_names` varchar(100) NOT NULL,
  `market_share` varchar(100) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `cdma` varchar(100) NOT NULL,
  `fixed_wireless_network` varchar(100) NOT NULL,
  `mobile_voice` varchar(100) NOT NULL,
  `fixed_voice` varchar(100) NOT NULL,
  `mobile_data` varchar(100) NOT NULL,
  `fixed_data` varchar(100) NOT NULL,
  `retail_data` varchar(100) NOT NULL,
  `leased_lines` varchar(100) NOT NULL,
  `tower_sites` varchar(100) NOT NULL,
  `network_equipments` varchar(100) NOT NULL,
  `wholsale_leased` varchar(100) NOT NULL,
  `spectrum` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankingproducts`
--
ALTER TABLE `bankingproducts`
  ADD PRIMARY KEY (`banking_products_id`);

--
-- Indexes for table `bankings`
--
ALTER TABLE `bankings`
  ADD PRIMARY KEY (`banking_id`),
  ADD UNIQUE KEY `bank_names` (`bank_names`);

--
-- Indexes for table `fmcgproducts`
--
ALTER TABLE `fmcgproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fmcgs`
--
ALTER TABLE `fmcgs`
  ADD PRIMARY KEY (`companies_id`),
  ADD UNIQUE KEY `companies` (`companies`);

--
-- Indexes for table `telecommunications`
--
ALTER TABLE `telecommunications`
  ADD PRIMARY KEY (`telecommunication_id`),
  ADD UNIQUE KEY `company_names` (`company_names`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankingproducts`
--
ALTER TABLE `bankingproducts`
  MODIFY `banking_products_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bankings`
--
ALTER TABLE `bankings`
  MODIFY `banking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `fmcgs`
--
ALTER TABLE `fmcgs`
  MODIFY `companies_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
