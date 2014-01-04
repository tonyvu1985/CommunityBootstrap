<?php
    require_once('../../../../../app/Mage.php');
    header("Content-type: text/css; charset: UTF-8");
    
    /* theme background */
    $theme_bgcolor = '#' . Mage::getStoreConfig('setting/themebg/bgcolor');
    $theme_bgimage = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'bgimage/' . Mage::getStoreConfig('setting/themebg/bgimage');
    $theme_bgpositionx = Mage::getStoreConfig('setting/themebg/bgpositionx');
    $theme_bgpositiony = Mage::getStoreConfig('setting/themebg/bgpositiony');
    $theme_bgpositionrepeat = Mage::getStoreConfig('setting/themebg/bgrepeat');
    
    /* theme font */
    $fontfm = Mage::getStoreConfig('setting/themefont/fontfamily');
    $fontsize = Mage::getStoreConfig('setting/themefont/fontsize');
    $textcolor = '#' . Mage::getStoreConfig('setting/themefont/textcolor');
    
    /* body style */
    $container_bgcolor = '#' . Mage::getStoreConfig('setting/body/bgcolor');
    $container_bgimage = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'bgimage/' . Mage::getStoreConfig('setting/body/bgimage');
    $container_bgpositionx = Mage::getStoreConfig('setting/body/bgpositionx');
    $container_bgpositiony = Mage::getStoreConfig('setting/body/bgpositiony');
    $container_bgpositionrepeat = Mage::getStoreConfig('setting/body/bgrepeat');
    
?>

* { margin:0; padding:0; }

body          { background:<?php echo $theme_bgcolor ?> url(<?php echo $theme_bgimage ?>) <?php echo $theme_bgpositionx ?> <?php echo $theme_bgpositiony ?> <?php echo $theme_bgpositionrepeat ?>; font-family: <?php echo $fontfm ?>; font-size:<?php echo $fontsize ?>; color: <?php echo $textcolor ?>; text-align:center}

img           { border:0; vertical-align:top; }

a             { color:#1e7ec8; text-decoration:underline; }
a:hover       { text-decoration:none; }d
:focus        { outline:0; }

/* Headings */
h1,h2,h3,
h4,h5,h6      { margin:0 0 5px; line-height:1.35; color:#0a263c; }
h1            { font-size:20px; font-weight:normal; }
h2            { font-size:18px; font-weight:normal; }
h3            { font-size:16px; font-weight:bold; }
h4            { font-size:14px; font-weight:bold; }
h5            { font-size:12px; font-weight:bold; }
h6            { font-size:11px; font-weight:bold; }

/* Forms */
form          { display:inline; }
fieldset      { border:0; }
legend        { display:none; }

/* Table */
table         { border:0; /*border-collapse:collapse;*/ border-spacing:0; empty-cells:show; font-size:100%; }
caption,th,td { vertical-align:top; text-align:left; font-weight:normal; }

/* Content */
p             { margin:0 0 10px; }
strong        { font-weight:bold; }
address       { font-style:normal; line-height:1.35; }
cite          { font-style:normal; }
q,
blockquote    { quotes:none; }
q:before,
q:after       { content:''; }
small,big     { font-size:1em; }
/*sup           { font-size:1em; vertical-align:top; }*/

/* Lists */
ul,ol         { list-style:none; }

/* Tools */
.hidden       { display:block !important; border:0 !important; margin:0 !important; padding:0 !important; font-size:0 !important; line-height:0 !important; width:0 !important; height:0 !important; overflow:hidden !important; }
.nobr         { white-space:nowrap !important; }
.wrap         { white-space:normal !important; }
.a-left       { text-align:left !important; }
.a-center     { text-align:center !important; }
.a-right      { text-align:right !important; }
.v-top        { vertical-align:top; }
.v-middle     { vertical-align:middle; }
.f-left,
.left         { float:left !important; }
.f-right,
.right        { float:right !important; }
.f-none       { float:none !important; }
.f-fix        { float:left; width:100%; }
.no-display   { display:none; }
.no-margin    { margin:0 !important; }
.no-padding   { padding:0 !important; }
.no-bg        { background:none !important; }
/* ======================================================================================= */


/* Layout ================================================================================ */
/*.wrapper { min-width:954px; }*/
.page {}
.page-print { background:#fff; padding:25px 30px; text-align:left; }
.page-empty { background:#fff; padding:20px; text-align:left; }
.page-popup { background:#fff; padding:25px 30px; text-align:left; }
.main-container { background:<?php echo $container_bgcolor ?> url(<?php echo $container_bgimage ?>) <?php echo $container_bgpositionx ?> <?php echo $container_bgpositiony ?> <?php echo $container_bgpositionrepeat ?>;  }
.main { /*width:900px; margin:0 auto; min-height:400px; */padding:20px 15px 30px; background:#fffff; text-align:left; }

/* Base Columns */
.col-left { /*float:left; width:195px; padding:0 0 1px; */}
.col-left.sidebar{padding-left: 5px}
.col-main { /*float:left; width:685px; padding:0 0 1px; */}
.col-right { /*float:right; width:195px; padding:0 0 1px; */}

/* 1 Column Layout */
.col1-layout .col-main { float:none; width:auto; }

/* 2 Columns Layout */
.col2-left-layout .col-main { /*float:right; */}
.col2-right-layout .col-main {}

/* 3 Columns Layout */
.col3-layout .col-main {/* width:475px; margin-left:17px; */}
.col3-layout .col-wrapper { /*float:left; width:687px;*/ }
.col3-layout .col-wrapper .col-main { /*float:right;*/ }

/* Content Columns */
.col2-set .col-1 { float:left; width:48.5%; }
.col2-set .col-2 { float:right; width:48.5%; }
.col2-set .col-narrow { width:32%; }
.col2-set .col-wide { width:65%; }

.col3-set .col-1 { float:left; width:32%; }
.col3-set .col-2 { float:left; width:32%; margin-left:2%; }
.col3-set .col-3 { float:right; width:32%; }

.col4-set .col-1 { float:left; width:23.5%; }
.col4-set .col-2 { float:left; width:23.5%; margin:0 2%; }
.col4-set .col-3 { float:left; width:23.5%; }
.col4-set .col-4 { float:right; width:23.5%; }
/* ======================================================================================= */


/* Global Styles ========================================================================= */
/* Form Elements */
input,select,textarea,button { font:12px/15px Arial, Helvetica, sans-serif; vertical-align:middle; color:#2f2f2f; }
input.input-text,select,textarea { background:#fff; border:1px solid #b6b6b6; }
/*input.input-text,textarea { padding:2px; }*/
select { padding:1px; }
select option { padding-right:10px; }
select.multiselect option { border-bottom:1px solid #b6b6b6; padding:2px 5px; }
select.multiselect option:last-child { border-bottom:0; }
textarea { overflow:auto; }
input.radio {/* margin-right:3px; */}
input.checkbox {/* margin-right:3px; */}
input.qty { width:2.5em !important; }
button.button::-moz-focus-inner { /*padding:0; border:0; */} /* FF Fix */
/*button.button { -webkit-border-fit:lines; } *//* <- Safari & Google Chrome Fix */
/*button.button { overflow:visible; width:auto; border:0; padding:0; margin:0; background:transparent; cursor:pointer; }*/
/*button.button span { display:block; height:19px; border:1px solid #de5400; background:#f18200; padding:0 8px; font:bold 12px/19px Arial, Helvetica, sans-serif; text-align:center; white-space:nowrap; color:#fff; }
button.button span span { border:0; padding:0; }
button.disabled span { border-color:#bbb !important; background:#bbb !important; }*/

button.btn-checkout span { height:40px; border:0; background:url(../images/btn_checkout.gif) 0 0 no-repeat; padding:0 0 0 9px; font:bold 15px/40px Arial, Helvetica, sans-serif; color:#fff; }
button.btn-checkout span span { background-position:100% 0; padding:0 25px 0 16px; }
button.btn-checkout.no-checkout span { background-position:0 100%; color:#b8baba; }
button.btn-checkout.no-checkout span span { background-position:100% 100%; }

p.control input.checkbox,
p.control input.radio { margin-right:6px; }
/* Form Highlight */
input.input-text:focus,select:focus,textarea:focus { background-color:#edf7fd; }
/*.highlight { background:#efefef; }*/

/* Form lists */
/* Grouped fields */
/*.form-list { width:535px; margin:0 auto; overflow:hidden; }*/
.form-list li { margin:0 0 8px; }
.form-list label { float:left; color:#666; font-weight:bold; position:relative; z-index:0; }
.form-list label.required {}
.form-list label.required em { float:right; font-style:normal; color:#eb340a; position:absolute; top:0; right:-8px; }
.form-list li.control label { float:none; }
.form-list li.control input.radio,
.form-list li.control input.checkbox { margin-right:6px; }
.form-list li.control .input-box { clear:none; display:inline; width:auto; }
/*.form-list li.fields { margin-right:-15px; }*/
.form-list .input-box { display:block; clear:both;/* width:260px; */}
.form-list .field { /*float:left; width:275px; */}
.form-list input.input-text {/* width:254px; */}
.form-list textarea { /*width:254px; */height:10em; }
.form-list select {/* width:260px; */}
.cart-collaterals  .form-list select{width: 80%}
.form-list li.wide .input-box { /*width:535px; */}
.form-list li.wide input.input-text {/* width:529px; */}
.form-list li.wide textarea { /*width:529px; */}
.form-list li.wide select { /*width:535px; */}
.form-list li.additional-row { border-top:1px solid #ccc; margin-top:10px; padding-top:7px; }
.form-list li.additional-row .btn-remove { float:right; margin:5px 0 0; }
.form-list .input-range input.input-text { width:74px; }

.form-list-narrow li  { margin-bottom:0; }
.form-list-narrow li .input-box { margin-bottom:6px; }
.form-list-narrow li.wide .input-box { width:260px; }
.form-list-narrow li.wide input.input-text,
.form-list-narrow li.wide textarea { width:254px }
.form-list-narrow li.wide select { width:260px; }

/* Customer */
.form-list .customer-name-prefix .input-box,
.form-list .customer-name-suffix .input-box,
.form-list .customer-name-prefix-suffix .input-box,
.form-list .customer-name-prefix-middlename .input-box,
.form-list .customer-name-middlename-suffix .input-box,
.form-list .customer-name-prefix-middlename-suffix .input-box { width:auto; }

.form-list .name-prefix { width:65px; }
.form-list .name-prefix select { width:55px; }
.form-list .name-prefix input.input-text { width:49px; }

.form-list .name-suffix { width:65px; }
.form-list .name-suffix select { width:55px; }
.form-list .name-suffix input.input-text { width:49px; }

.form-list .customer-name-prefix-middlename-suffix .name-firstname,
.form-list .customer-name-prefix-middlename .name-firstname { width:140px; }
.form-list .customer-name-prefix-middlename-suffix .name-firstname input.input-text,
.form-list .customer-name-prefix-middlename .name-firstname input.input-text { width:124px; }
.form-list .customer-name-prefix-middlename-suffix .name-lastname { width:205px; }
.form-list .customer-name-prefix-middlename-suffix .name-lastname input.input-text { width:189px; }

.form-list .customer-name-prefix-suffix .name-firstname { width:210px; }
.form-list .customer-name-prefix-suffix .name-lastname { width:205px; }
.form-list .customer-name-prefix-suffix .name-firstname input.input-text,
.form-list .customer-name-prefix-suffix .name-lastname input.input-text { width:189px; }

.form-list .customer-name-prefix-suffix .name-firstname { width:210px; }
.form-list .customer-name-prefix-suffix .name-lastname { width:205px; }
.form-list .customer-name-prefix-suffix .name-firstname input.input-text,
.form-list .customer-name-prefix-suffix .name-lastname input.input-text { width:189px; }

.form-list .customer-name-prefix .name-firstname,
.form-list .customer-name-middlename .name-firstname,
.form-list .customer-name-middlename .name-middlename { width:210px; }

.form-list .customer-name-suffix .name-lastname,
.form-list .customer-name-middlename .name-firstname,
.form-list .customer-name-middlename .name-middlename,
.form-list .customer-name-middlename-suffix .name-firstname,
.form-list .customer-name-middlename-suffix .name-lastname { width:205px; }

.form-list .customer-name-prefix .name-firstname input.input-text,
.form-list .customer-name-suffix .name-lastname input.input-text,
.form-list .customer-name-middlename .name-firstname input.input-text,
.form-list .customer-name-middlename .name-middlename input.input-text,
.form-list .customer-name-middlename-suffix .name-firstname input.input-text,
.form-list .customer-name-middlename-suffix .name-lastname input.input-text { width:189px; }

.form-list .customer-dob .dob-month,
.form-list .customer-dob .dob-day,
.form-list .customer-dob .dob-year { float:left; width:85px; }
.form-list .customer-dob input.input-text { display:block; width:74px; }
.form-list .customer-dob label { font-size:10px; font-weight:normal; color:#888; }
.form-list .customer-dob .dob-day,
.form-list .customer-dob .dob-month { width:60px; }
.form-list .customer-dob .dob-day input.input-text,
.form-list .customer-dob .dob-month input.input-text { width:46px; }
.form-list .customer-dob .dob-year { width:140px; }
.form-list .customer-dob .dob-year input.input-text { width:134px; }

/* Independent fields */
/*.form-list li { margin:0 0 8px; }
.form-list li.fields { margin:0; }
.form-list .field { display:block; margin:0 0 8px; }
.form-list li.control {}
.form-list label { float:left; width:150px; padding:2px 10px 0 0; text-align:right; }
.form-list label.required { font-weight:bold; }
.form-list label.required em { font-variant:normal; color:#eb340a; margin-right:3px; }
.form-list .input-box { float:left; width:260px; }
.form-list input.input-text,
.form-list textarea { width:254px; }
.form-list select { width:260px; }
.form-list li.additional-row { border-top:1px solid #ddd; margin-top:10px; }
.form-list li.additional-row .btn-remove { float:right; margin:5px 5px 0 0; }
.form-list .input-range input.input-text { width:96px; }*/
/* Customer */
/*.form-list .customer-dob .dob-month,
.form-list .customer-dob .dob-day,
.form-list .customer-dob .dob-year { float:left; width:85px; }
.form-list .customer-dob input.input-text { display:block; width:74px; }
.form-list .customer-dob label { font-size:11px; font-weight:normal; color:#777; text-align:left; }
.form-list .customer-dob .dob-day,
.form-list .customer-dob .dob-month { width:60px; }
.form-list .customer-dob .dob-day input.input-text,
.form-list .customer-dob .dob-month input.input-text { width:46px; }
.form-list .customer-dob .dob-year { width:140px; }
.form-list .customer-dob .dob-year input.input-text { width:134px; }*/

.buttons-set { clear:both; margin:4em 0 0; padding:8px 0 0; border-top:1px solid #e4e4e4; text-align:right; }
.buttons-set p.required { margin:0 0 10px; }
.buttons-set .back-link { float:left; margin:0; }
.buttons-set button.button { float:right; margin-left:5px; }

.buttons-set-order { margin:10px 0 0; }
.buttons-set-order .please-wait { padding:12px 7px 0 0; }

.fieldset { border:1px solid #bbafa0; background:#fbfaf6; padding:22px 25px 12px 33px; margin:28px 0; }
.fieldset .legend { float:left; font-weight:bold; font-size:13px; border:1px solid #f19900; background:#f9f3e3; color:#e76200; margin:-33px 0 0 -10px; padding:0 8px; position:relative; }

/* Form Validation */
.validation-advice { clear:both; min-height:13px; margin:3px 0 0; padding-left:17px; font-size:11px; font-weight:bold; line-height:13px; background:url(../images/validation_advice_bg.gif) 2px 0 no-repeat; color:#eb340a; }
.validation-failed { border:1px dashed #eb340a !important; background:#faebe7 !important; }
.validation-passed {}
p.required { font-size:11px; text-align:right; color:#EB340A; }
/* Expiration date and CVV number validation fix */
.v-fix { float:left; }
.v-fix .validation-advice { display:block; width:12em; margin-right:-12em; position:relative; }

/* Global Messages  */
.success { color:#3d6611; font-weight:bold; }
.error { color:#df280a; font-weight:bold; }
.notice { color:#e26703; }

.messages,
.messages ul { list-style:none !important; margin:0 !important; padding:0 !important; }
.messages { width:100%; overflow:hidden; }
.messages li { margin:0 0 10px !important; }
.messages li li { margin:0 0 3px !important; }
.error-msg,
.success-msg,
.note-msg,
.notice-msg { border-style:solid !important; border-width:1px !important; background-position:10px 9px !important; background-repeat:no-repeat !important; min-height:24px !important; padding:8px 8px 8px 32px !important; font-size:11px !important; font-weight:bold !important; }
.error-msg { border-color:#f16048; background-color:#faebe7; background-image:url(../images/i_msg-error.gif); color:#df280a; }
.success-msg { border-color:#446423; background-color:#eff5ea; background-image:url(../images/i_msg-success.gif); color:#3d6611; }
.note-msg,
.notice-msg { border-color:#fcd344; background-color:#fafaec; background-image:url(../images/i_msg-note.gif); color:#3d6611; }

/* BreadCrumbs */
.breadcrumbs { font-size:11px; line-height:1.25; margin:0 0 13px; }
.breadcrumbs li { display:inline; }
.breadcrumbs li strong { font-weight:bold; }

/* Page Heading */
.page-title { width:100%; overflow:hidden; border-bottom:1px solid #ccc; margin:0 0 25px; padding-bottom:5px;}
.page-title h1,
.page-title h2 { margin:0; font-size:20px; color:#0a263c; }
.page-title .separator { margin:0 3px; }
.page-title .link-rss { float:right; margin:7px 0 0; }
.title-buttons { text-align:right; }
.title-buttons h1,
.title-buttons h2,
.title-buttons h3,
.title-buttons h4,
.title-buttons h5,
.title-buttons h6 { float:left; }

.subtitle,
.sub-title { clear:both; padding:15px 0 0; font-size:15px; font-weight:bold; margin:0 0 6px; color:#e25203; }

/* Pager */
.pager-responsive { font-size:11px; background:#fff url(../images/bkg_toolbar.gif) 0 100% repeat-x; padding:0px 8px; /*border-top:1px solid #e2e2e2; */text-align:center; }
.pager-responsive .amount {/* float:left; margin:0; */ text-align: left}
.pager-responsive .limiter {/* float:right; */ text-align: right}
.pager-responsive .limiter label { vertical-align:middle; }
.pager-responsive .limiter select { padding:0; margin:0 0 1px; vertical-align:middle; }
.pager-responsive .pages {/* margin:0 140px; */}
/*.pager .pages ol { display:inline; }
.pager .pages li { display:inline; margin:0 2px; }*/
.pager .pages .current {}
.pager .amount{text-align: left; float:left}
.pager .pages{text-align: right; float:right}
/* Sorter */
.sorter { font-size:11px; /*background:#fff url(../images/bkg_toolbar.gif) 0 100% repeat-x; padding:3px 8px; border-top:1px solid #e2e2e2; */}
.sorter .view-mode {/* float:left; margin:0; */ text-align: left}
.sorter .sort-by {/* float:right; padding-right:36px; */ text-align: right}
.sorter .sort-by label { vertical-align:middle; }
.sorter .sort-by select { padding:0; margin:0 0 1px; vertical-align:middle; }
.sorter .link-feed {}

/* Toolbar */
.toolbar {}
.toolbar .pager-responsive { padding:0px; /*border-bottom:1px solid #fff; */}
.toolbar .sorter { border-bottom:1px solid #fff; }
.toolbar-bottom {}

/* Data Table */
.data-table { width:100%; border:1px solid #bebcb7; }
.data-table .odd  { background:#f8f7f5 }
.data-table .even { background:#eeeded; }
/*.data-table tr.odd:hover,
.data-table tr.even:hover { background:#ebf1f6; }*/
.data-table td.last,
.data-table th.last { border-right:0; }
.data-table tr.last th,
.data-table tr.last td { border-bottom:0 !important; }
.data-table th { padding:3px 8px; font-weight:normal; }
.data-table td { padding:3px 8px; }

.data-table thead th { font-weight:bold; border-right:1px solid #c2d3e0; padding:2px 8px; color:#0a263c; white-space:nowrap; vertical-align:middle; }
.data-table thead th.wrap { white-space:normal; }
.data-table thead th a,
.data-table thead th a:hover { color:#fff; }
.data-table thead th { background:url(../images/bkg_th.gif) repeat-x 0 100% #d9e5ee; }
.data-table thead th .tax-flag { font-size:11px; white-space:nowrap; }

.data-table tfoot { border-bottom:1px solid #d9dde3; }
.data-table tfoot tr.first td {/* background:url(../images/bkg_tfoot.gif) 0 0 repeat-x; */}
.data-table tfoot tr { background-color:#dee5e8 !important; }
.data-table tfoot td { padding-top:1px; padding-bottom:1px; border-bottom:0; border-right:1px solid #d9dde3; }
.data-table tfoot strong { font-size:16px; }

.data-table tbody th,
.data-table tbody td { border-bottom:1px solid #d9dde3; border-right:1px solid #d9dde3; }
/* Bundle products tables */
.data-table tbody.odd tr { background:#f8f7f5 !important; }
.data-table tbody.even tr { background:#f6f6f6 !important; }
.data-table tbody.odd tr td,
.data-table tbody.even tr td { border-bottom:0; }
.data-table tbody.odd tr.border td,
.data-table tbody.even tr.border td { border-bottom:1px solid #d9dde3; }

.data-table tbody td .option-label { font-weight:bold; font-style:italic; }
.data-table tbody td .option-value { padding-left:10px; }

/* Generic Info Box */
.info-box { background:#fff url(../images/bkg_block-title.gif) 0 0 repeat-x; border:1px solid #d0cbc1; padding:12px 15px; margin:0 0 15px; }
.info-box h2 { font-weight:bold; font-size:13px; }

.info-table th { font-weight:bold; padding:2px 15px 2px 0; }
.info-table td { padding:2px 0; }

/* Shopping cart total summary row expandable to details */
tr.summary-total { cursor:pointer; }
tr.summary-total td {}
tr.summary-total .summary-collapse { float:right; text-align:right; padding-left:20px; background:url(../images/bkg_collapse.gif) 0 5px no-repeat; cursor:pointer; }
tr.show-details .summary-collapse { background-position:0 -52px; }
tr.show-details td {}
tr.summary-details td { font-size:11px; background-color:#dae1e4; color:#626465; }
tr.summary-details-first td { border-top:1px solid #d2d8db; }
tr.summary-details-excluded { font-style:italic; }

/* Shopping cart tax info */
.cart-tax-info { display:block; }
.cart-tax-info,
.cart-tax-info .cart-price { padding-right:20px; }
.cart-tax-total { display:block; padding-right:20px; background:url(../images/bkg_collapse.gif) 100% 5px no-repeat; cursor:pointer; }
.cart-tax-info .price,
.cart-tax-total .price { display:inline !important; font-weight:normal !important; }
.cart-tax-total-expanded { background-position:100% -52px; }

/* Class: std - styles for admin-controlled content */
.std .subtitle { padding:0; }
.std ol.ol { list-style:decimal outside; padding-left:1.5em; }
.std ul.disc { list-style:disc outside; padding-left:18px; margin:0 0 10px; }
.std dl dt { font-weight:bold; }
.std dl dd { margin:0 0 10px; }
.std ul,
.std ol,
.std dl,
.std p,
.std address,
.std blockquote { margin:0 0 1em; padding:0; }
.std ul { list-style:disc outside; padding-left:10px; }
.std ol { list-style:decimal outside; padding-left:1.5em; }
.std ul ul { list-style-type:circle; }
.std ul ul,
.std ol ol,
.std ul ol,
.std ol ul { margin:.5em 0; }
.std dt { font-weight:bold; }
.std dd { padding:0 0 0 1.5em; }
.std blockquote { font-style:italic; padding:0 0 0 1.5em; }
.std address { font-style:normal; }
.std b,
.std strong { font-weight:bold; }
.std i,
.std em { font-style:italic; }

/* Misc */
.links li { display:inline; }
.links li.first { padding-left:0 !important; }
.links li.last { background:none !important; padding-right:0 !important; }

.link-cart { color:#dc6809 !important; font-weight:bold; }
.link-wishlist { color:#dc6809 !important; font-weight:bold; }
.link-reorder { font-weight:bold; color:#dc6809 !important; }
.link-compare { font-weight:bold; }
.link-print { /*background:url(../images/i_print.gif) 0 2px no-repeat; padding:2px 0 2px 25px;*/ font-weight:bold; color:#dc6809; }
.link-rss { background:url(../images/i_rss.gif) 0 2px no-repeat; padding-left:18px; line-height:14px; white-space:nowrap; }
.btn-remove  {/* display:block; width:11px; height:11px; font-size:0; line-height:0; background:url(../images/btn_remove.gif) 0 0 no-repeat; text-indent:-999em; overflow:hidden; */}
.btn-previous  { display:block; width:11px; height:11px; font-size:0; line-height:0; background:url(../images/btn_previous.gif) 0 0 no-repeat; text-indent:-999em; overflow:hidden; }
.btn-remove2 { /*display:block; width:16px; height:16px; font-size:0; line-height:0; background:url(../images/btn_trash.gif) 0 0 no-repeat; text-indent:-999em; overflow:hidden; */}
.btn-edit    { display:block; width:11px; height:11px; font-size:0; line-height:0; background:url(../images/btn_edit.gif) 0 0 no-repeat; text-indent:-999em; overflow:hidden; }

.cards-list dt { margin:5px 0 0; }
.cards-list .offset { padding:2px 0 2px 20px; }

.separator { margin:0 3px; }

.divider { clear:both; display:block; font-size:0; line-height:0; height:1px; margin:10px 0; background:url(../images/bkg_divider1.gif) 0 50% repeat-x; text-indent:-999em; overflow:hidden; }

/* Global site notices */
.global-site-notice { border:1px solid #cfcfcf; border-width:0 0 1px; background:#ffff90; font-size:12px; line-height:1.25; text-align:center; color:#2f2f2f; }
.global-site-notice .notice-inner { width:860px; margin:0 auto; padding:12px 0 12px 80px; background:url(../images/i_notice.gif) 20px 25px no-repeat; text-align:left; }
.global-site-notice .notice-inner p { margin:0; border:1px dotted #cccc73; padding:10px; }
.global-site-notice .notice-inner .actions { padding-top:10px; }

/* Cookie Notice */
.notice-cookie { }

/* Noscript Notice */
.noscript {}

/* Demo Notice */
.demo-notice { margin:0; padding:6px 10px; background:#d75f07; font-size:12px; line-height:1.15; border:0; text-align:center; color:#fff; }
.demo-notice .notice-inner { width:auto; padding:0; background:none; text-align:center; }
.demo-notice .notice-inner p { padding:0; border:0; }

/* ======================================================================================= */


/* Header ================================================================================ */
.logo { float:left; }
.header{padding: 15px 0}
/*.header-container { border-top:5px solid #0d2131; border-bottom:1px solid #415966; background:url(../images/bkg_header.jpg) 50% 0 repeat; }*/
/*.header { width:930px; margin:0 auto; padding:10px; text-align:right; position:relative; z-index:10; }*/
/*.header .logo { float:left; margin:3px 0 10px 12px; text-decoration:none !important; }*/
.header .logo strong { position:absolute; top:-999em; left:-999em; width:0; height:0; font-size:0; line-height:0; text-indent:-999em; overflow:hidden; }
/*.header h1.logo { margin:0; }*/
.header .quick-access { /*float:right; width:600px; padding:28px 10px 0 0; */}
.header .welcome-msg {/* margin:0; text-align:right; */color:#fff; }
.header .welcome-msg a { color:#ebbc58; }
.header .form-search { /*position:absolute; top:0; right:29px; width:315px; height:30px; background:url(../images/bkg_form-search.gif) 0 0 no-repeat; padding:1px 0 0 16px; */}
.header .form-search label { float:left; width:24px; height:21px; text-align:left; text-indent:-999em; overflow:hidden; }
.header .form-search input.input-text {/* float:left; padding: 10px; width: 98%; margin-top: 15px; border-color:#5c7989; width:209px; margin-right:4px; */}
.header .form-search button.button { float:left; }
.header .form-search button.button span { border:0; height:21px; background:url(../images/btn_search.gif) 0 0 no-repeat; padding:0 0 0 3px; font:bold 11px/21px Tahoma, Verdana, Arial, sans-serif; }
.header .form-search button.button span span { background-position:100% 0; padding:0 6px 0 3px; }
.header .form-search .search-autocomplete { z-index:999; left:40px !important; top:22px !important; }
.header .form-search .search-autocomplete ul { border:1px solid #5c7989; background-color:#f9f5f0; }
.header .form-search .search-autocomplete li { text-align:left; border-bottom:1px solid #f4eee7; padding:2px 8px 1px 8px; cursor:pointer; }
.header .form-search .search-autocomplete li .amount { float:right; font-weight:bold; }
.header .form-search .search-autocomplete li.odd { background-color:#fffefb; }
.header .form-search .search-autocomplete li.selected { background-color:#f7e8dd; }
.header .form-language { clear:both; padding:5px 0 0;/* text-align:right; */}
.header .form-language label { font-weight:bold; padding-right:5px; color:#a7c6dd; vertical-align:middle; }
.header .form-language select { padding:0; }
.header .form-language select.flags option { background-position:4px 50%; background-repeat:no-repeat; padding-left:25px; }
.header .links { float:right;/* margin:0 0 6px; */}
.header .links li { float:left; font-size:11px;/* background:url(../images/bkg_pipe1.gif) 100% 60% no-repeat;*/ padding:0 8px 0 7px; }
.header .links a { color:#ebbc58; }
.header .links .top-link-cart i{margin-left: 5px; color: #fff}
.header-container .top-container { clear:both; padding:5px 10px 0 12px; text-align:right; }
.header-container .top-container a { font-size:11px; color:#ebbc58; }

/********** < Navigation */
/*.nav-container { background:#0a263d url(../images/bkg_nav0.jpg) 50% 0 repeat-y; }*/
#nav { /*width:918px; margin:0 auto; padding:0 16px; font-size:13px; */}
#nav li a{text-decoration: none; text-transform: uppercase; text-align: left}
#nav li ul li a{text-transform: none; text-align: left}
#nav-parentlink{color: #e26703}
.navbar-header .navbar-brand{text-decoration: none; color: #e26703}
/* All Levels */ /* Style consistent throughout all nav levels */
/*#nav li { position:relative; text-align:left; }
#nav li.over { z-index:998; }
#nav a,
#nav a:hover { display:block; line-height:1.3em; text-decoration:none; }
#nav span { display:block; cursor:pointer; white-space:nowrap; }
#nav li ul span {white-space:normal; }
#nav ul li.parent a { background:url(../images/bkg_nav2.gif) 100% 100% no-repeat; }
#nav ul li.parent li a { background-image:none; }
*/
/* 0 Level */
/*#nav li { float:left; }
#nav li.active a { color:#d96708; }
#nav a { float:left; padding:5px 12px 6px 8px; color:#a7c6dd; font-weight:bold; }
#nav li.over a,
#nav a:hover { color:#d96708; }
*/
/* 1st Level */
/*#nav ul li,
#nav ul li.active { float:none; margin:0; padding-bottom:1px; background:#ecf3f6 url(../images/bkg_nav1.gif) 0 100% repeat-x; }
#nav ul li.last { background:#ecf3f6; padding-bottom:0; }

#nav ul a,
#nav ul a:hover { float:none; padding:0; background:none; }
#nav ul li a { font-weight:normal !important; }
*/
/* 2nd Level */
/*#nav ul,
#nav div { position:absolute; width:15em; top:27px; left:-10000px; border:1px solid #899ba5; }
#nav div ul { position:static; width:auto; border:none; }
*/
/* 3rd+ Level */
/*#nav ul ul,
#nav ul div { top:5px; }

#nav ul li a { background:#ecf3f6; }
#nav ul li a:hover { background:#d5e4eb; }
#nav ul li a,
#nav ul li a:hover { color:#2f2f2f !important; }
#nav ul span,
#nav ul li.last li span { padding:3px 15px 4px 15px; }
*/
/* Show menu */
/*#nav li ul.shown-sub,
#nav li div.shown-sub { left:0; z-index:999; }
#nav li .shown-sub ul.shown-sub,
#nav li .shown-sub li div.shown-sub { left:100px; }*/
/********** Navigation > */
/* ======================================================================================= */


/* Sidebar =============================================================================== */
.block { border:1px solid #c4c1bc; margin:0 0 15px; }
.block .block-title { background:url(../images/bkg_block-title.gif) 0 0 repeat-x; border-bottom:1px solid #ddd; padding:2px 9px; }
.block .block-title strong { display:block; font:bold 12px/16px Arial, Helvetica, sans-serif; min-height:16px; padding:1px 0 1px; text-transform:uppercase; color:#e26703; }
.block .block-title strong span {}
.block .block-title a { text-decoration:none !important; }
.block .block-subtitle { margin:0; padding:5px 9px; font-size:1em; font-weight:bold; color:#0a263c; }
.block .block-content { background:#f8f7f5; }
.block .block-content li.item { padding:7px 9px; }
.block .block-content .product-name { color:#1e7ec8; }
.block .btn-remove,
.block .btn-edit { float:right; margin:1px 0 2px 5px; }
.block .actions { background:#dee5e8 url(../images/bkg_block-actions.gif) 0 0 repeat-x; padding:6px 9px; text-align:right; }
.block .actions a { float:left; }
.block .actions button.button { float:right; }
.block .empty { margin:0; padding:5px 9px; }

.block li.odd { background-color:#f4f3f3; }
.block li.even { background-color:#fafafa; }

/* Mini Blocks */
.block-cart,
.block-wishlist,
.block-subscribe,
.block-compare,
.block-reorder,
.block-poll,
.block-gr-search,
.block-viewed,
.block-compared,
.block-related,
.block-tags,
.block-login { font-size:11px; line-height:1.25; }
.block-cart .block-title strong,
.block-wishlist .block-title strong,
.block-subscribe .block-title strong,
.block-compare .block-title strong,
.block-reorder .block-title strong,
.block-poll .block-title strong,
.block-viewed .block-title strong,
.block-compared .block-title strong,
.block-related .block-title strong,
.block-tags .block-title strong,
.block-login .block-title strong {  background-position:0 0; background-repeat:no-repeat; padding-left:0px; }

/* Mini Products List */
.mini-products-list .product-image { float:left; width:50px; border:1px solid #a9a9a9; }
.mini-products-list .product-details { margin-left:60px; }
.block-cart .mini-products-list .product-details .product-name,
.block-cart .mini-products-list .product-details .nobr small { word-wrap:break-word; }
.block-cart .mini-products-list .product-details .nobr { white-space:normal !important; }

/* Block: Account */
.block-account { border-color:#bbb; }
.block-account .block-title { background:#fc9d36 url(../images/bkg_block-title-account.gif) 0 100% repeat-x; border:0; padding:3px 10px; }
.block-account .block-title strong { font-size:13px; color:#fff; }
.block-account .block-content { background:#fbfaf6; padding:7px 10px 7px; }
.block-account .block-content li a { display:block; border-bottom:1px solid #ddd; padding:3px 0; color:#5f5d5c; text-decoration:none !important; }
.block-account .block-content li a:hover { color:#ea7900; }
.block-account .block-content li.last a { border-bottom:0; }
.block-account .block-content li.current { border-bottom:1px solid #ddd; padding:3px 0; color:#ea7900; }
.block-account .block-content li.current.last { border-bottom:0; }

/* Block: Currency Switcher */
.block-currency { border:0; background:url(../images/bkg_block-currency.gif) 0 0 no-repeat; padding:7px 12px 10px; height:51px; }
.block-currency .block-title { background:none; border:0; padding:0; margin:0 0 5px; }
.block-currency .block-title strong { font:bold 13px/21px Arial, Helvetica, sans-serif; background:url(../images/i_block-currency.gif) 0 50% no-repeat; padding:0 0 0 21px; text-transform:none; color:#fff; }
.block-currency .block-content { background:none; padding:0; }
.block-currency .block-content select { width:100%; padding:0; }

/* Block: Layered Navigation */
.block-layered-nav { border:0; }
.block-layered-nav .block-title { border:0; padding:0; height:24px; background:url(../images/bkg_block-layered-title.gif) 0 0 no-repeat; text-indent:-999em; overflow:hidden; }
.block-layered-nav .block-subtitle { line-height:1.35; background:#d5e8ff url(../images/bkg_block-layered1.gif) 0 50% repeat; padding:3px 9px; border:1px solid #b9ccdd; border-width:1px 0; text-transform:uppercase; color:#1f5070; }
.block-layered-nav .block-content { border:1px solid #a0b3c3; background:#e7f1f4; }
.block-layered-nav dt { background:url(../images/bkg_block-layered-dt.gif) 9px 11px no-repeat; padding:7px 10px 0 7px; font-weight:bold; text-transform:uppercase; }
.block-layered-nav dd { padding:0 12px 12px; background:url(../images/bkg_block-layered-dd.gif) 0 100% repeat-x; }
.block-layered-nav dd.last { background:none; }
.block-layered-nav .currently li { background:#fff/* url(../images/bkg_block-layered-li.gif) 0 100% repeat-x */; padding:4px 5px 2px 5px; position:relative; z-index:1; line-height:1.5; }
.block-layered-nav .currently .label { font-weight:bold; padding-left:15px; background:url(../images/bkg_block-layered-label.gif) 0 4px no-repeat; text-transform:uppercase; display:inline-block; vertical-align:top; }
.block-layered-nav .currently .value { display:inline-block; vertical-align:top; color: #e26703 }
.block-layered-nav .currently .btn-previous,
.block-layered-nav .currently .btn-remove {/* position:absolute; right:4px; top:9px; margin:0; */}
.block-layered-nav .currently .btn-previous { right:17px; }
.block-layered-nav .actions { font-size:11px; padding:4px 5px 4px 9px; background:#cad6e4; border:1px solid #dee5e8; border-width:1px 0; text-align:right; }
.block-layered-nav .actions a { float:none; }

/* Block: Cart */
.block-cart .block-title { /*border-bottom:0;*/ }
.block-cart .block-title strong {/* background-image:url(../images/i_block-cart.gif); */}
.block-cart .summary { background:#fff; padding:2px 8px 8px; margin:-1px 0 0; position:relative; z-index:1; }
.block-cart .amount { margin:0; }
.block-cart .amount a { font-weight:bold; }
.block-cart .subtotal { margin:5px 0 0; padding:2px 0; background:#fbebd9; text-align:center; text-align: left}
.block-cart .subtotal .price { font-weight:bold; }
.block-cart .actions { border-bottom:1px solid #c2c2c2; }
.block-cart .actions .paypal-logo { float:left; width:100%; margin:3px 0 0; text-align:right; }
.block-cart .actions .paypal-logo .paypal-or { clear:both; display:block; padding:0 55px 8px 0; }

/* Block: Wishlist */
.block-wishlist .block-title strong { background-image:url(../images/i_block-wishlist.gif); }
.block-wishlist .actions { text-align:right; }
.block-wishlist .actions a { float:none; }

/* Block: Related */
.block-related .block-title strong { background-image:url(../images/i_block-related.gif); background-position:0 1px; }
.block-related input.checkbox { float:left; }
.block-related .product { margin-left:20px; }

/* Block: Compare Products */
.block-compare{clear: both}
.block-compare .block-title strong { background-image:url(../images/i_block-list.gif); background-position:0 1px; }
.block-compare button.button span { border-color:#406a83; background:#618499; }
.page-popup .link-print { background:url(../images/i_print.gif) 0 2px no-repeat; padding:2px 0 2px 25px; font-weight:bold; color:#1e7ec8; }
.compare-table { border:0; }
.compare-table thead tr.first th,
.compare-table thead tr.first td { border:0; background:none; padding:0; font-size:0; line-height:0; }
.compare-table .btn-remove {/* float:right; background-image:url(../images/btn_remove2.gif); width:72px; height:15px; */}
.compare-table tbody th { background:#d9e5ee url(../images/bkg_th-v.gif) 100% 0 repeat-y; }
.compare-table tbody th,
.compare-table tbody td { padding:10px; border:0; border-top:1px solid #ccc; border-left:1px solid #ccc; }
.compare-table tbody td.last { border-right:1px solid #ccc; }
.compare-table tbody tr.last th,
.compare-table tbody tr.last td { border-bottom:1px solid #ccc !important; }
.compare-table tr.add-to-row td { background:#fffada; text-align:center; }
.compare-table tr.first td { text-align:center; }
.compare-table tr.first td .product-name { font-size:13px; font-weight:bold; margin:0 0 5px; color:#203548; }
.compare-table tr.first td .product-name a { color:#203548; }
.compare-table tr.first td .ratings { width:69px; margin:0 auto; }
.compare-table tr.first td p,
.compare-table tr.add-to-row td p { margin:0; }

/* Block: Recently Viewed */
.block-viewed .block-title strong { /*background-image:url(../images/i_block-viewed.gif); */}
.block-viewed{clear: both}

/* Block: Recently Compared */
.block-compared .block-title strong { background-image:url(../images/i_block-list.gif); background-position:0 1px; }

/* Block: Poll */
.block-poll .block-title strong {/* background-image:url(../images/i_block-poll.gif); */}
.block-poll .block-subtitle { font-size:14px; }
.block-poll label { color:#777; font-weight:bold; }
.block-poll input.radio { float:left; margin:1px -18px 0 0; }
.block-poll .label { display:block; margin-left:18px; text-align: left}
.block-poll li { padding:3px 9px; }
.block-poll .actions { margin:5px 0 0; }
.block-poll button.button span { border-color:#406a83; background:#618499; }
.block-poll .answer { font-weight:bold; }
.block-poll .votes { float:right; margin-left:10px; }

/* Block: Orders and Returns */
.block-gr-search li { padding:3px 9px; }
.block-gr-search button.button span { border-color:#406a83; background:#618499; }

/* Block: Tags */
.block-tags .block-title strong { background-image:url(../images/i_block-tags.gif); }
.block-tags .block-content .tags-list { background:none; border:0; font-size:12px; }
.block-tags .block-content a { color:#1b2d3b; }
.block-tags .actions { text-align:right; }
.block-tags .actions a { float:none; }

/* Block: Subscribe */
.block-subscribe .block-content { padding:5px 10px; }
/*.block-subscribe .block-title strong { background-image:url(../images/i_block-subscribe.gif); }*/
.block-subscribe label { font-weight:bold; color:#666; }
.block-subscribe input.input-text {/* display:block; width:167px; margin:3px 0;*/ }
.block-subscribe .actions { /*background:none; padding:0; margin:3px 0 0; text-align:left; */}
.block-subscribe .actions button.button {/* float:none; */}
.block-subscribe .actions button.button span {/* border-color:#406a83; background:#618499;*/ }
.block-subscribe button.button{margin:10px 0 5px 0}

/* Block: Reorder */
.block-reorder .block-title strong { background-image:url(../images/i_block-list.gif); }
.block-reorder input.checkbox { float:left; margin:2px -20px 0 0; }
.block-reorder .product-name { margin-left:20px; }
.block-reorder .validation-advice { margin:3px 9px 7px; }

/* Block: Banner */
.block-banner { border:0; }
.block-banner .block-content { padding:0; text-align:center; }

/* Block: Login */
.block-login .block-title strong { background-image:url(../images/i_ma-info.gif); }
.block-login .block-content { padding:5px 10px; }
.block-login label { font-weight:bold; color:#666; }
.block-login input.input-text { display:block; width:167px; margin:3px 0; }
.block-login .actions { background:none; padding:0; margin:3px 0 0; }
.block-login .actions button.button span { border-color:#406a83; background:#618499; }

/* Paypal */
.sidebar .paypal-logo { /*display:block; margin:10px 0;*/ text-align:center; }
.sidebar .paypal-logo a { float:none; }
/* ======================================================================================= */


/* Category Page ========================================================================= */
.category-title { border:0; margin:0 0 7px; }
.category-image {/* width:100%; overflow:hidden; margin:0 0 10px; text-align:center; */}
.category-image img {}
.category-description { margin:0 0 10px; }
.category-products {}

/* View Type: Grid */
.products-grid { border-bottom:1px solid #d9ddd3; background:url(../images/bkg_grid.gif) 0 0 repeat; position:relative; }
.products-grid.last { border-bottom:0; }
.products-grid li.item {/* float:left; width:138px; */padding:12px 10px 80px; }
.products-grid .product-image { /*display:block; width:135px; height:135px; margin:0 0 10px; */}
.products-grid .product-name { /*min-height:2.7em;*/ margin:0 0 5px; font-weight:bold; font-size:13px; color:#203548; }
.products-grid .product-name a { color:#203548; }
.products-grid .price-box { margin:5px 0; }
.products-grid .availability { line-height:21px; }
.products-grid .actions { position:absolute; bottom:12px; }
.col2-left-layout .products-grid,
.col2-right-layout .products-grid {/* width:632px; */margin:0 auto; }
.col1-layout .products-grid {/* width:790px; */margin:0 auto; }

/* View Type: List */
.products-list li.item { border-bottom:1px solid #d9ddd3; padding:12px 10px; }
.products-list li.item.last { border-bottom:0; }
.products-list .product-image { float:left; width:135px; height:135px; margin:0 0 10px; }
.products-list .product-shop { margin-left:150px; }
.products-list .product-name { margin:0 0 5px; font-weight:bold; font-size:13px; color:#203548; }
.products-list .product-name a { color:#203548; }
.products-list .price-box { float:left; margin:3px 13px 5px 0; }
.products-list .availability { float:left; margin:3px 0 0; }
.products-list .desc { clear:both; padding:6px 0 0; margin:0 0 15px; line-height:1.35; }
.products-list .desc .link-learn { font-size:11px; }
.products-list .add-to-links { clear:both; }
.products-list .add-to-links li { display:inline; }
.products-list .add-to-links .separator { display:inline; margin:0 2px; }
/* ======================================================================================= */


/* Product View ========================================================================== */
/* Rating */
.no-rating { margin:0; }

.ratings { font-size:11px; line-height:1.25; margin:7px 0; }
.ratings strong { float:left; margin:1px 3px 0 0; }
.ratings .rating-links { margin:0; }
.ratings .rating-links .separator { margin:0 2px; }
.ratings dt {}
.ratings dd {}
.rating-box { width:69px; height:13px; font-size:0; line-height:0; background:url(../images/bkg_rating.gif) 0 0 repeat-x; text-indent:-999em; overflow:hidden; }
.rating-box .rating { float:left; height:13px; background:url(../images/bkg_rating.gif) 0 100% repeat-x; }
.ratings .rating-box { float:left; margin-right:3px; }
.ratings .amount {}

.ratings-table th,
.ratings-table td { font-size:11px; line-height:1.15; padding:3px 0; }
.ratings-table th { font-weight:bold; padding-right:8px; }

/* Availability */
.availability { margin:0; }
.availability span { font-weight:bold; }
.availability.in-stock span {}
.availability.out-of-stock span { color:#d83820; }

.availability-only { margin:10px 0 7px; line-height:16px; background:url(../images/i_availability_only.gif) 0 50% no-repeat; padding-left:15px; }
.availability-only span,
.availability-only a { border-bottom:1px dashed #751d02; color:#000; }
.availability-only a { background:url(../images/i_availability_only_arrow.gif) 100% 0 no-repeat; cursor:pointer; padding-right:15px; text-decoration:none; }
.availability-only .expanded { background-position:100% -15px; }
.availability-only strong { color:#be2c00; }

.availability-only-details { margin:0 0 7px; }
.availability-only-details th { background:#d2d6d9; font-size:10px; padding:0 8px; }
.availability-only-details td { background:#ebf0f3; border-bottom:1px solid #fff; font-size:11px; padding:2px 8px 1px; }
.availability-only-details tr.odd td.last { color:#d95e00; font-weight:bold; }

.product-view .product-shop .availability { font-size:11px; }
.product-view .product-shop .availability span { font-weight:normal; }

/* Email to a Friend */
.email-friend { margin:0; }

/* Alerts */
.alert-price { margin:0; font-size:11px; }
.alert-stock { margin:0; font-size:11px; }

/********** < Product Prices */
.price { white-space:nowrap !important; }

.price-box { margin:5px 0; }
.price-box .price { font-weight:bold; color:#c76200; }

/* Regular price */
.regular-price { color:#c76200; }
.regular-price .price { font-weight:bold; font-size:13px; color:#c76200; }
.block .regular-price,
.block .regular-price .price { color:#2f2f2f; }

/* Old price */
.old-price { margin:0; }
.old-price .price-label { white-space:nowrap; color:#999; }
.old-price .price { font-weight:bold; color:#c76200; text-decoration:line-through; }

/* Special price */
.special-price { margin:0; padding:3px 0; }
.special-price .price-label { font-size:13px; font-weight:bold; white-space:nowrap; color:#cd5033; }
.special-price .price { font-size:13px; font-weight:bold; color:#c76200; }

/* Minimal price (as low as) */
.minimal-price { margin:0; }
.minimal-price .price-label { font-weight:bold; white-space:nowrap; }

.minimal-price-link { display:block; }
.minimal-price-link .label {color:#1e7ec8;}
.minimal-price-link .price { font-weight:normal; color:#1e7ec8; }

/* Excluding tax */
.price-excluding-tax { display:block; color:#999; }
.price-excluding-tax .label { white-space:nowrap; color:#999; }
.price-excluding-tax .price { font-size:13px; font-weight:normal; color:#c76200; }

/* Including tax */
.price-including-tax { display:block; color:#999; }
.price-including-tax .label { white-space:nowrap; color:#999; }
.price-including-tax .price { font-size:13px; font-weight:bold; color:#c76200; }

/* Configured price */
.configured-price { margin:0; }
.configured-price .price-label { font-weight:bold; white-space:nowrap; }
.configured-price .price { font-weight:bold; }

/* FPT */
.weee { display:block; font-size:11px; color:#444; }
.weee .price { font-size:11px; font-weight:normal; }

/* Excl tax (for order tables) */
.price-excl-tax  { display:block; }
.price-excl-tax .label { display:block; white-space:nowrap; }
.price-excl-tax .price { display:block; }

/* Incl tax (for order tables) */
.price-incl-tax { display:block; }
.price-incl-tax .label { display:block; white-space:nowrap; }
.price-incl-tax .price { display:block; font-weight:bold; }

/* Price range */
.price-from { margin:0; }
.price-from .price-label { font-weight:bold; white-space:nowrap; }

.price-to { margin:0; }
.price-to .price-label { font-weight:bold; white-space:nowrap; }

/* Price notice next to the options */
.price-notice { padding-left:10px; color:#999; }
.price-notice .price { font-weight:bold; color:#2f2f2f; }

/* Price as configured */
.price-as-configured { margin:0; }
.price-as-configured .price-label { font-weight:bold; white-space:nowrap; }

.price-box-bundle { padding:0 0 10px 0; }
.price-box-bundle .price-box { margin:0 !important; padding:0 !important; }
.price-box-bundle .price { color:#555; }
/********** Product Prices > */

/* Tier Prices */
.product-pricing,
.tier-prices { margin:10px 0; padding:10px; background-color:#f4f7f7; border:1px solid #dadddd; color:#424242; }
.tier-prices li { line-height:1.4; background:url(../images/i_tier.gif) no-repeat 0 3px; padding:2px 0 2px 10px; }
.tier-prices .benefit { font-style:italic; font-weight:bold; color:#2f2f2f; }
.tier-prices .price { font-weight:bold; color:#2f2f2f; }

.tier-prices-grouped li { padding:2px 0; color:#e26703; }
.tier-prices-grouped li .price { font-weight:bold; }

/* Add to Links */
.add-to-links { font-size:11px; margin:5px 0 0; }
.add-to-links .separator { display:none; }

/* Add to Cart */
.add-to-cart label { float:left; margin-right:5px; font-weight:bold; color:#666; }
.add-to-cart .qty { float:left; margin-right:5px; }
.add-to-cart button.button { float:left; }
.add-to-cart .paypal-logo { clear:left; margin:0; text-align:right; }
.add-to-cart .paypal-logo .paypal-or { clear:both; display:block; margin:5px 60px 5px 0; }
.product-view .add-to-cart .paypal-logo { margin:0; }

/* Add to Links + Add to Cart */
.add-to-box { margin:10px 0; }
.add-to-box .add-to-cart { float:left; }
.add-to-box .or { float:left; font-weight:bold; margin:0 7px; color:#666; }
.add-to-box .add-to-links { float:left; margin:0; font-size:12px !important; line-height:1.25 !important; text-align:left !important; }
.add-to-box .add-to-links li { display:block !important; }
.add-to-box .add-to-links li .separator { display:none !important; }


.product-view { border:1px solid #c4c6c8; }

.product-essential { padding:25px 0; /*background:#fff url(../images/bkg_product-view.gif) 100% 0 no-repeat;*/ }
.product-essential h2 { font:bold 13px/1.35 Arial, Helvetica, sans-serif; }

.product-collateral { background:#faf7ee /*url(../images/bkg_product_collateral.gif) 0 0 repeat-x*/; padding:25px 15px; }
.product-collateral h2 { font-weight:bold; font-size:15px; color:#e26703; border-bottom:1px solid #e5dcc3; padding:0 0 1px; margin:0 0 15px; }
.product-collateral .box-collateral { margin:0 0 25px; }

/* Product Images */
.product-view .product-img-box {/* float:left; width:267px; */}
.col3-layout .product-view .product-img-box { float:none; margin:0 auto; }
.product-view .product-img-box .product-image { margin:0 0 13px; }
.product-view .product-img-box .product-image-zoom { position:relative; width:265px; height:265px; overflow:hidden; z-index:9; }
.product-view .product-img-box .product-image-zoom img { position:absolute; left:0; top:0; cursor:move; }
.product-view .product-img-box .zoom-notice { font-size:11px; margin:0 0 5px; text-align:center; }
.product-view .product-img-box .zoom { position:relative; z-index:9; height:18px; margin:0 auto 13px; padding:0 28px; background:url(../images/slider_bg.gif) 50% 50% no-repeat; cursor:pointer; }
.product-view .product-img-box .zoom.disabled { -moz-opacity:.3; -webkit-opacity:.3; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";/*IE8*/ opacity:.3; }
.product-view .product-img-box .zoom #track { position:relative; height:18px; background:#f47b8c}
.product-view .product-img-box .zoom #handle { position:absolute; left:0; top:-4px; width:9px; height:24px; /*background:url(../images/magnifier_handle.gif) 0 0 no-repeat;  */ background: #f17c8e}
.product-view .product-img-box .zoom .btn-zoom-out { position:absolute; left:2px; top:0; }
.product-view .product-img-box .zoom .btn-zoom-in { position:absolute; right:2px; top:0; }
.product-view .product-img-box .more-views h2 { font-size:11px; border-bottom:1px solid #ccc; margin:0 0 8px; text-transform:uppercase; }
.product-view .product-img-box .more-views ul { margin-left:-9px }
.product-view .product-img-box .more-views li { float:left; margin:0 0 8px 9px; }
.product-view .product-img-box .more-views li a { float:left; width:56px; height:56px; border:2px solid #ddd; overflow:hidden; }

.product-image-popup { margin:0 auto; }
.product-image-popup .buttons-set { float:right; clear:none; border:0; margin:0; padding:0; }
.product-image-popup .nav { font-weight:bold; margin:0 100px; text-align:center; }
.product-image-popup .image { display:block; margin:10px 0;  }
.product-image-popup .image-label { font-size:13px; font-weight:bold; margin:0 0 10px; color:#2f2f2f; }

/* Product Shop */
.product-view .product-shop {/* float:right; width:330px; */}
.col1-layout .product-view .product-shop { float:right; width:545px; }
.col3-layout .product-view .product-shop { float:none; width:auto; }
.product-view .product-shop .product-name { margin:0 0 5px; }
.product-view .product-shop .product-name h1 { margin:0; font:bold 15px/1.35 Arial, Helvetica, sans-serif; }
.product-view .product-shop .availability { margin:10px 0; }
.product-view .product-shop .short-description { margin:10px 0; background:url(../images/bkg_divider1.gif) 0 0 repeat-x; padding:10px 0 0; }
.product-view .product-shop .price-box { margin:10px 0; }
.product-view .product-shop .add-to-links { margin:0; }
.product-view .product-shop .add-to-links { font-size:12px; text-align:right; }
.product-view .product-shop .add-to-links li,
.product-view .product-shop .add-to-links li .separator { display:inline; }
.product-view .product-shop .add-to-links a { color:#1E7EC8 !important; font-weight:normal !important; }

/* Product Options */
.product-options { margin:20px 0 0; padding:10px 15px 20px; position:relative; background-color:#f6f6f6; border:1px solid #e4e4e4; }
.product-options dt { padding:10px 0 0; font-weight:normal; }
.product-options dt label { font-weight:bold; color:#2f2f2f; }
.product-options dt label.required em { color:#eb340a; margin-left:5px; }
.product-options dd .qty-holder { display:block; padding:10px 0 0; }
.product-options dd .qty-holder label { vertical-align:middle; }
.product-options dt .qty-disabled { background:none; border:0; padding:3px; color:#2f2f2f; }
.product-options dd { padding:5px 10px 15px; margin:0 0 5px; border-bottom:1px solid #e4e4e4; }
.product-options dl.last dd.last { border-bottom:0; padding-bottom:5px; margin-bottom:0; }
.product-options dd input.input-text { width:98%; }
.product-options dd input.datetime-picker { width:150px; }
.product-options dd .time-picker { display:-moz-inline-box; display:inline-block; padding:2px 0; vertical-align:middle; }
.product-options dd textarea { width:98%; height:8em; }
.product-options dd select { width:99%; }
.product-options dd .multiselect option { border-bottom:1px dotted #d9e5ee; padding:2px 4px; }
.product-options ul.options-list { margin-right:5px; }
.product-options ul.options-list li { line-height:1.5; padding:2px 0; }
.product-options ul.options-list input.radio { float:left; margin-top:3px; }
.product-options ul.options-list input.checkbox { float:left; margin-top:3px; }
.product-options ul.options-list .label {/* display:block; margin-left:18px; */}
.product-options ul.options-list label { font-weight:normal; color: <?php echo $textcolor?>}
.product-options ul.validation-failed { padding:0 7px; }
.product-options p.note { margin:0; font-size:11px; }
.product-options p.required { position:absolute; right:20px; top:20px; }

.product-options-bottom { background-color:#fffada; padding:15px 20px; border:1px solid #e4e4e4; border-top:0; }
.product-options-bottom .product-pricing,
.product-options-bottom .tier-prices { margin:0; padding:0 0 10px; border:0; background:0; color:#e26703; }
.product-options-bottom .tier-prices li { background:0; padding:2px 0; }
.product-options-bottom .tier-prices .price,
.product-options-bottom .tier-prices .benefit { color:#e26703; }
.product-options-bottom .price-box { float:left; margin:0; padding:0; }
.product-options-bottom .add-to-links { clear:both; padding:5px 0 0; text-align:right; }
.col3-layout .product-options-bottom .price-box { float:none; padding:0 0 5px; }
.product-options-bottom .price-label { float:left; padding-right:5px; }
.product-options-bottom .price-tax { float:left; }
.product-options-bottom .add-to-cart { float:right; }
.product-shop .product-options-bottom { margin:0 0 10px; }
.product-shop .product-options-bottom .price-box { float:none; margin:0 0 5px; }
.product-shop .product-options-bottom .price-label { float:none; padding-right:0; }
.product-shop .product-options-bottom .price-tax { float:none; }
.product-shop .product-options-bottom .add-to-cart-box { clear:both; float:left; padding-top:12px; }
.product-shop .product-options-bottom .add-to-links { clear:both; padding:5px 0 0; text-align:right; }

/* Grouped Product */
.product-view .grouped-items-table .price-box { margin:0; padding:0; }

/* Block: Description */
.product-view .box-description {}

/* Block: Additional */
.product-view .box-additional .data-table th,
.product-view .box-additional .data-table td {/* line-height:1.25; */; font-size: 12px}

/* Block: Upsell */
.product-view .box-up-sell h2 { border-bottom:0; padding:0; margin:0 0 8px; }
/*.product-view .box-up-sell .products-grid { width:100%; border:1px solid #e5dcc3; }
.product-view .box-up-sell .products-grid td { width:25%; background:#f6f2e7; border-right:1px solid #e5dcc3; border-bottom:1px solid #e5dcc3; padding:15px 10px 12px; line-height:1.6em; }
.product-view .box-up-sell .products-grid tr.last td { border-bottom:0; }
.product-view .box-up-sell .products-grid td.last { border-right:0; }
.product-view .box-up-sell .products-grid td img { border:1px solid #e5dcc3; }
.product-view .box-up-sell .products-grid .product-image { text-align:center; }
.product-view .box-up-sell .products-grid td.empty { border-right:0; background:#f1ecdb; } */
.product-view .box-up-sell .products-grid .ratings .rating-box { float:none; display:block; margin:0 0 3px; }

/* Block: Tags */
.product-view .box-tags { margin:0; }
.product-view .box-tags h3 { font-size:13px; }
.product-view .box-tags .product-tags { display:block; margin:0 0 15px; }
.product-view .box-tags .product-tags li { display:inline; background:url(../images/bkg_pipe3.gif) 100% 4px no-repeat; padding:0 7px 0 4px; }
.product-view .box-tags .product-tags li.first { padding-left:0; }
.product-view .box-tags .product-tags li.last { background:none; padding-right:0; }
.product-view .box-tags .form-add label { display:block; font-size:13px; font-weight:bold; margin:0 0 5px; color:#0a263c;}
.product-view .box-tags .form-add .input-box { float:left; /*width:305px; padding:0 0 0 23px; */margin:0 5px 0 0; background:url(../images/i_tag_add.gif) 0 2px no-repeat; }
.product-view .box-tags .form-add input.input-text { /*width:299px;*/ }
.product-view .box-tags .form-add button.button span {/* border-color:#406a83; background:#618499; */}
.product-view .box-tags .note { margin:3px 0 0;/* padding:0 0 0 23px; */font-size:11px; }

/* Block: Reviews 
.product-view .box-reviews dl { margin:15px 0; }
.product-view .box-reviews dt a,
.product-view .box-reviews dt span { font-weight:bold; }
.product-view .box-reviews dd { margin:0 0 15px; }
.product-view .box-reviews dd small { font-style:italic; }
.product-view .box-reviews .form-add { margin:15px 0 0; }
.product-view .box-reviews .form-add h3 { font-size:13px; font-weight:normal; }
.product-view .box-reviews .form-add h3 span { font-weight:bold; }
.product-view .box-reviews .form-add h4 { font-size:12px; }
.product-view .box-reviews .form-add .data-table td { text-align:center; }
.product-view .box-reviews .form-add .form-list { margin:15px 0 0; }
.product-view .box-reviews .form-add .form-list .input-box { width:360px; }
.product-view .box-reviews .form-add .form-list input.input-text,
.product-view .box-reviews .form-add .form-list textarea { width:354px; }

*/
/* Send a Friend */
.send-friend .form-list { width:615px; overflow:hidden; }
.send-friend .form-list li { margin-right:-15px; }
.send-friend .form-list li p { margin:0 15px 0 0; }
.send-friend .form-list .field { width:315px; }
.send-friend .form-list .input-box { width:300px; }
.send-friend .form-list input.input-text,
.send-friend .form-list textarea { width:294px; }
.send-friend .form-list li.wide .input-box { width:612px; }
.send-friend .form-list li.wide textarea { width:609px; }
.send-friend .buttons-set .limit { float:right; margin:0 7px 0 0; font-size:11px; line-height:21px; }
/* ======================================================================================= */


/* Content Styles ================================================================= */
.product-name { margin:0; font-size:1em; font-weight:normal; }
.product-name a { color:#1e7ec8; }

/* Product Tags */
.tags-list { display:block; font-size:13px; border:1px solid #c1c4bc; background:#f8f7f5; padding:10px; }
.tags-list li { display:inline !important; margin:0 4px 0 0; }
.tags-list li a { color:#1b2d3b; }

/* Advanced Search */
.advanced-search .form-list label { width:160px; padding-right:10px; }
.advanced-search .form-list .input-box,
.advanced-search .form-list .input-range { float:left; clear:none; }
.advanced-search-amount { margin:0 0 10px; }
.advanced-search-summary { margin:10px 0; border:1px solid #e9d7c9; background:#fff6f1; padding:10px; }
.advanced-search-summary ul { float:left; width:49%; }
.advanced-search-summary strong { color:#E17C24; padding-left:15px; background:url(../images/i_search_criteria.gif) 0 3px no-repeat; }
.advanced-search-summary p { clear:both; font-weight:bold; margin:0; }
.advanced-search .input-range input.input-text {display: inline}

/* CMS Home Page */
.cms-home .subtitle {}
.cms-index-index .subtitle {}

/* Sitemap */
.page-sitemap .links { text-align:right; /*margin:0 8px -22px 0; */}
.page-sitemap .links a { text-decoration:none; position:relative; }
.page-sitemap .links a:hover { text-decoration:underline; }
.page-sitemap .sitemap { margin:12px; }
.page-sitemap .sitemap a { color:#1b2d3b; }
.page-sitemap .sitemap li { margin:3px 0; }
.page-sitemap .sitemap li.level-0 { margin:10px 0 0; font-weight:bold; }
.page-sitemap .sitemap li.level-0 a { color:#1e7ec8; }

/* RSS */
.rss-title h1 { background:url(../images/i_rss-big.png) 0 4px no-repeat; padding-left:27px; }
.rss-table .link-rss { display:block; line-height:1.55; background-position:0 4px; }
/* ======================================================================================= */


/* Shopping Cart ========================================================================= */
.cart .page-title { border-bottom:0; margin:0 0 12px; }
.cart .page-title h1 { margin:10px 0 0; }

/* Checkout Types */
.cart .page-title .checkout-types li { margin:0 0 5px; }
.cart .title-buttons .checkout-types { float:right; }
.cart .title-buttons .checkout-types li { float:left; margin:0 0 5px 5px; }
.cart .checkout-types .paypal-or { margin:0 8px; line-height:2.3; }
.cart .totals .checkout-types .paypal-or { clear:both; display:block; padding:8px 55px 0 0; line-height:1.0; font-size:11px; }

/* Shopping Cart Table */
.cart-table th { padding:2px 10px; }
.cart-table td { padding:10px; }
.cart-table .product-name { font-weight:bold; margin:0 0 5px; color:#2f2f2f; }
.cart-table .item-msg { margin:5px 0; font-size:11px; font-weight:bold; color:#df280a; }
.cart-table tfoot td { padding:5px 10px; }
.cart-table .btn-continue { float:left; }
.cart-table .btn-empty span,
.cart-table .btn-continue span,
.cart-table .btn-update span { border-color:#406a83; background:#618499; }
.cart-table .btn-update,
.cart-table .btn-empty { float:right; }
.cart-table .btn-update { margin-left:10px; }

/* Shopping Cart Collateral boxes */
.cart .cart-collaterals { padding:25px 0 0; }
.cart .cart-collaterals .col2-set { /*float:left; width:605px; */}
.cart .cart-collaterals .col2-set .col-2 { /*width:294px; */}

.cart .crosssell { border:1px solid #cec3b6; background:#fafaec; padding:12px 15px; }
.cart .crosssell h2 { font-size:13px; font-weight:bold; }
.cart .crosssell .product-image { float:left; width:75px; height:75px; border:1px solid #d0cdc9; }
.cart .crosssell .product-details { margin-left:90px; }
.cart .crosssell .product-name { font-weight:bold; }
.cart .crosssell li.item { margin:12px 0; }
.cart .crosssell .link-compare { font-weight:normal; }

/* Discount Codes & Estimate Shipping and Tax Boxes */
.cart .discount,
.cart .shipping { border:1px solid #d0cbc1; background:#fff url(../images/bkg_block-title.gif) 0 0 repeat-x; padding:12px 15px; margin:0 0 18px; }
.cart .discount h2,
.cart .shipping h2 { background-position:0 0; background-repeat:no-repeat; font:bold 13px/16px Arial, Helvetica, sans-serif; /*padding:0 0 0 21px; */color:#e26703; text-transform:uppercase; }
.cart .discount button span,
.cart .shipping button span { border-color:#406a83; background:#618499; }
.cart .discount .buttons-set,
.cart .shipping .buttons-set { margin:10px 0 0; border:0; padding:0; text-align:left; }
.cart .discount .buttons-set button.button,
.cart .shipping .buttons-set button.button { float:none; margin-left:0; }
.cart .shipping .radio{display:inline-block}

.cart .discount h2 { background-image:url(../images/i_discount.gif); }
.cart .discount .input-box { margin:8px 0 0; /*width:260px; */}
/*.cart .discount input.input-text { width:254px; }*/

.cart .shipping h2 { background-image:url(../images/i_shipping.gif); }
.cart .shipping .sp-methods { margin:10px 0 0; padding:5px 0 0; background:url(../images/bkg_divider1.gif) 0 0 repeat-x; }

/* Shopping Cart Totals */
.cart .totals {/* float:right; width:268px; */background:#dee5e8; border:1px solid #bebcb7; }
.cart .totals table { width:100%; margin:7px 0; }
.cart .totals td { padding:1px 15px 1px 7px; }
.cart .totals tr.last td {}
.cart .totals tfoot th { padding:5px 15px 5px 7px; }
.cart .totals tfoot td { padding-top:5px; padding-bottom:5px; }
.cart .totals tfoot th strong,
.cart .totals tfoot td strong { font-size:15px; }
.cart .totals .checkout-types { font-size:13px; padding:8px 15px 15px; text-align:right; }
.cart .totals .checkout-types li { clear:both; margin:10px 0; }

/* Options Tool Tip */
.item-options dt { font-weight:bold; font-style:italic; }
.item-options dd { padding-left:10px; margin:0 0 6px; }
.truncated { cursor:help; }
.truncated a.dots { cursor:help; }
.truncated a.details { cursor:help; }
.truncated .truncated_full_value { position:relative; z-index:999; }
.truncated .truncated_full_value .item-options { position:absolute; top:-99999em; left:-99999em; z-index:999; width:250px; padding:8px; border:1px solid #ddd; background-color:#f6f6f6; }
.truncated .truncated_full_value .item-options > p { font-weight:bold; text-transform:uppercase; }
.truncated .show .item-options { top:-20px; left:50%; }
.col-left .truncated .show .item-options { left:15px; top:7px; }
.col-right .truncated .show .item-options { left:-240px; top:7px; }
/* ======================================================================================= */


/* Checkout ============================================================================== */
/********** < Common Checkout Styles */
/* Shipping and Payment methods */
.sp-methods { margin:0 0 8px; }
.sp-methods dt { margin:13px 0 5px; font-weight:bold; }
.sp-methods dd {}
.sp-methods dd li { margin:5px 0; }
.sp-methods label { font-weight:bold; color:#666; }
.sp-methods .price { font-weight:bold; }
.sp-methods .form-list { padding-left:20px; }
.sp-methods .form-list li { margin:0 0 8px; }
.sp-methods select.month { width:154px; margin-right:10px; }
.sp-methods select.year { width:96px; }
.sp-methods input.cvv { width:3em !important; }

.sp-methods .checkmo-list li { margin:0 0 5px; }
.sp-methods .checkmo-list label { width:135px; padding-right:10px; text-align:right; }
.sp-methods .checkmo-list address { float:left; }

.sp-methods .centinel-logos a { margin-right:3px; }
.sp-methods .centinel-logos img { vertical-align:middle; }

.sp-methods .release-amounts { margin:0.5em 0; }
.sp-methods .release-amounts button { float:left; margin:5px 10px 0 0; }

.please-wait { float:right; }
.please-wait img { vertical-align:middle; }
.cvv-what-is-this { font-size:11px; cursor:help; margin-left:10px; }

/* Tooltip */
.tool-tip { border:1px solid #7BA7C9; background:#EAF6FF; padding:15px 20px; position:absolute; z-index:9999; }
.tool-tip .btn-close { margin:-9px -14px 0; text-align:right; }
.tool-tip .btn-close a { display:block; margin:0 0 0 auto; width:15px; height:15px; background:url(../images/btn_window_close.gif) 100% 0 no-repeat; text-align:left; text-indent:-999em; overflow:hidden; }
.tool-tip .tool-tip-content { padding:5px; }

/* Gift Messages */
.gift-messages h3 { font-size:12px; font-weight:bold; color:#e87403; }
.gift-messages p.control { color:#8e8d8b; }
.gift-messages-form { position:relative; }
.gift-messages-form label { float:none !important; position:static !important; }
.gift-messages-form h4 { font-size:12px; font-weight:bold; color:#e87403; }
.gift-messages-form .whole-order { margin:0 0 25px; }
.gift-messages-form .item { margin:0 0 10px; }
.gift-messages-form .item .product-img-box { float:left; width:75px; }
.gift-messages-form .item .product-image { margin:0 0 7px; }
.gift-messages-form .item .number { margin:0; font-weight:bold; text-align:center; color:#8a8987; }
.gift-messages-form .item .details { margin-left:90px; }
.gift-messages-form .item .details .product-name { font-size:13px; font-weight:bold; margin:0 0 10px; }
.gift-messages-form .item .details .form-list .field { width:255px; }
.gift-messages-form .item .details .form-list .input-box { width:240px; }
.gift-messages-form .item .details .form-list input.input-text { width:234px; }
.gift-messages-form .item .details .form-list li.wide .input-box { width:500px; }
.gift-messages-form .item .details .form-list li.wide textarea { width:494px; }

.gift-message-link { font-size:11px; background:url(../images/bkg_collapse-gm.gif) 100% 6px no-repeat; padding-right:7px; }
.gift-message-link.expanded { background-position:100% -40px; }
.gift-message-row { background:#f2efe9; }
.gift-message-row .btn-close { float:right; width:16px; height:16px; background:url(../images/btn_gm-close.gif) 0 0 no-repeat; font-size:0; line-height:0; text-indent:-999em; overflow:hidden; }

/* Checkout Agreements */
.checkout-agreements li { margin:30px 0; }
.checkout-agreements .agreement-content { overflow:auto; height:12em; padding:10px; background-color:#fbfaf6; border:1px solid #bbb6a5; }
.checkout-agreements .agree { margin:0; padding:10px 0 10px 11px; }
.checkout-agreements .agree input.checkbox { margin-right:6px; }
.checkout-agreements .agree label { font-weight:bold; color:#666; }

.opc .checkout-agreements { border:1px solid #d9dde3; border-width:0 1px; padding:5px 30px; }
.opc .checkout-agreements li { margin:20px 0 0; }
.opc .checkout-agreements .agreement-content { background-color:#fff; border-color:#e4e4e4; padding:5px; }
.opc .checkout-agreements .agree { padding-left:6px; }

/* Centinel */
.centinel {}
.centinel .authentication { border:1px solid #ddd; background:#fff; }
.centinel .authentication iframe { width:99%; height:400px; background:transparent !important; margin:0 !important; padding:0 !important; border:0 !important; }

.opc .centinel { border:1px solid #bbb6a5; border-width:0 1px 1px; padding:10px 30px; }

/* Generic Info Set */
.info-set { background:#fbfaf6 url(../images/bkg_checkout.gif) 0 0 repeat-x; border:1px solid #bbb6a5; margin:0 0 25px; padding:20px; }
.info-set h2 { font-size:13px; font-weight:bold; margin:0 0 10px; }
.info-set h3,
.info-set h4 { font-size:13px; font-weight:bold; color:#E26703; }
.info-set h2 a,
.info-set h3 a,
.info-set h4 a { font-weight:normal; }
.info-set h2.legend { margin:-20px -20px 15px; padding:5px 10px; background:#f9f3e3; border-bottom:1px solid #bbafa0; position:relative; }
.info-set h3.legend { margin:0 0 10px; color:#0a263c; }
.info-set .divider { margin:0 -20px; padding:25px 0; position:relative; }
.info-set .box { margin:0 0 15px; }
.info-set .box h2 { color:#e26703; }
.info-set .data-table .product-name { font-size:1em !important; font-weight:bold !important; color:#1e7ec8 !important; }
.info-set .data-table .product-name a { font-weight:bold !important; }
.info-set .data-table .item-options { margin:5px 0 0; }
/********** Common Checkout Styles > */

/* One Page Checkout */
.block-progress { border:0; margin:0; }
.block-progress .block-title { background:none; border:0; padding:0; margin:0 0 5px; }
.block-progress .block-title strong { font-size:13px; color:#0a263c; }
.block-progress .block-content { background:none; }
.block-progress dt { font-size:13px; font-weight:bold; line-height:1.35; background:#eee; border:1px solid #a3aeb3; margin:0 0 6px; padding:2px 8px; color:#999; }
.block-progress dd { background:#eee; border:1px solid #a3aeb3; border-top:0; padding:8px 13px; margin:0 0 6px; }
.block-progress dt.complete { margin:0; background:#d0dce1; color:#5e8ab4; }
.block-progress dd.complete {}
.block-progress p { margin:0; }
.block-progress .cards-list dt { background:none; border:0 none; color:inherit; font-size:12px; margin:5px 0; padding:0; }
.block-progress .cards-list dd { border:0 none; margin:0; padding:0; }
.block-progress .cards-list .info-table th { font-weight:normal; }

/* show/hide "change" link for progress step depend on complete status
 * should be placed in .css file */
.opc-block-progress dt.complete a,
.opc-block-progress dt.complete .separator { display: inline; }
.opc-block-progress dt a,
.opc-block-progress dt .separator { display: none; }

.opc .buttons-set { margin-top:0; padding-top:2em; }
.opc .buttons-set p.required { margin:0; padding:0 0 10px; }
.opc .buttons-set .back-link small { display:none; }
.opc .buttons-set .back-link a { background:url(../images/i_arrow-top.gif) 0 50% no-repeat; padding-left:16px; }
.opc .buttons-set.disabled button.button { display:none; }
.opc .buttons-set .please-wait { height:21px; line-height:21px; }
.opc .ul { list-style:disc outside; padding-left:18px; }

.opc { position:relative; }
.opc li.section {}

.opc .step-title { border-width:0 1px; border-style:solid; border-color:#fff #d9dde3 #d9dde3; background:#eee url(../images/bkg_opc-title-off.gif) 0 100% repeat-x; padding:4px 8px 6px; text-align:right; }
.opc .step-title .number { float:left; background:#fff; border:1px solid #fff; padding:0 4px; margin:0 5px 0 0; font:bold 11px/14px arial, helvetica, sans-serif; color:#999; }
.opc .step-title h2 { float:left; margin:0; font:bold 13px/16px Arial, Helvetica, sans-serif; color:#999; }
.opc .step-title a { display:none; float:right; font-size:11px; line-height:16px; }

.opc .allow .step-title { background:#d0dce1; border:1px solid #a3aeb3; border-bottom:0; color:#a4b3b9; cursor:pointer; }
.opc .allow .step-title .number { background:#dbe6eb; border-color:#dbe6eb; color:#a4b3b9; }
.opc .allow .step-title h2 { color:#a4b3b9; }
/*.opc .allow .step-title a { display:block; }*/

.opc .active .step-title { background:#f9f3e3; border:1px solid #bbafa0; padding-bottom:5px; color:#f18200; cursor:default; }
.opc .active .step-title .number { background:#f18200; border-color:#f19900; color:#fff; }
.opc .active .step-title h2 { color:#f18200; }
/*.opc .active .step-title a { display:none; }*/

.opc .step { border:1px solid #bbafa0; border-top:0; background:#fbfaf6 url(../images/bkg_checkout.gif) 0 0 repeat-x; padding:15px 30px; position:relative; }
.opc .step .tool-tip { right:30px; }

#opc-login .buttons-set { border-top:0; }
#opc-login h3 { font-size:13px; border-bottom:1px solid #e4e4e4; padding-bottom:2px; text-transform:uppercase; }
#opc-login h4 { font-size:1em; font-weight:bold; margin:0; color:#2f2f2f; }

#opc-shipping_method .buttons-set { border-top:0; }
.opc .gift-messages-form { margin:0 -30px; background:#f6f1eb; border:1px solid #e9e4de; border-width:1px 0; padding:22px 24px 22px 30px; }
.opc .gift-messages-form .inner-box { padding:5px; height:260px; overflow:auto; }

#opc-review .step { border:0; padding:0; }
#opc-review .product-name { font-weight:bold; color:#0a263c; }
#opc-review .item-options { margin:5px 0 0; }
#opc-review .buttons-set { padding:20px 30px; border:1px solid #d9dde3; border-width:0 1px 1px; }
#opc-review .buttons-set p { margin:0; line-height:40px; }
#opc-review .buttons-set .please-wait { height:40px; line-height:40px; }
#opc-review .authentication { margin:0 auto; width:570px; }
#opc-review .warning-message { color:#222; font-weight:bold; text-align:center; padding:10px 10px 0; }

/* Multiple Addresses Checkout */
.checkout-progress { padding:0 90px; margin:0 0 20px; }
.checkout-progress li { float:left; width:19%; margin:0 3px 0 0; border-top:10px solid #999; padding:2px 0 0; font-weight:bold; text-align:center; color:#abb5ba; }
.checkout-progress li.active { border-top-color:#e96200; color:#e96200; }

.multiple-checkout h2 { font-size:13px; font-weight:bold; margin:0 0 10px; }
.multiple-checkout h3,
.multiple-checkout h4 { font-size:13px; font-weight:bold; color:#E26703; }
.multiple-checkout h2 a,
.multiple-checkout h3 a,
.multiple-checkout h4 a { font-weight:normal; }
.multiple-checkout .data-table .product-name { font-size:1em !important; font-weight:bold !important; color:#1e7ec8 !important; }
.multiple-checkout .data-table .product-name a { font-weight:bold !important; }
.multiple-checkout .data-table .item-options { margin:5px 0 0; }

.multiple-checkout .gift-messages { margin:15px 0 0; }

.multiple-checkout .tool-tip { top:50%; margin-top:-120px; right:20px; }

.multiple-checkout .col2-set,
.multiple-checkout .col3-set { background:#fbfaf6 url(../images/bkg_checkout.gif) 0 0 repeat-x; border:1px solid #bbb6a5; margin:0 0 25px; padding:20px; }
.multiple-checkout .col2-set h2.legend { margin:-20px -20px 15px; padding:5px 10px; background:#f9f3e3; border-bottom:1px solid #bbafa0; position:relative; }
.multiple-checkout .col2-set h3.legend { margin:0 0 10px; color:#0a263c; }
.multiple-checkout .col2-set .divider { margin:0 -20px; padding:25px 0; position:relative; }
.multiple-checkout .box { margin:0 0 15px; }
.multiple-checkout .box h2 { color:#e26703; }

.multiple-checkout .place-order .please-wait { float:right; padding:27px 7px 0 0; }
.multiple-checkout .place-order .grand-total { float:right; height:71px; font-size:1.5em; padding:0 0 0 21px; background:url(../images/bkg_grand-total.gif) 0 0 no-repeat; overflow:hidden; }
.multiple-checkout .place-order .grand-total .inner { float:left; height:57px; padding:14px 21px 0 0; background:url(../images/bkg_grand-total.gif) 100% 0 no-repeat; }
.multiple-checkout .place-order .grand-total .inner div { display:inline; }
.multiple-checkout .place-order .grand-total big { display:inline; margin-right:12px; }
.multiple-checkout .place-order .grand-total .price { color:#E26703; }
.multiple-checkout .place-order .grand-total button.button span { font-size:16px; }
.multiple-checkout .place-order .grand-total button.button span span { padding:0 45px 0 36px; }

/* Step 1 */
.multiple-checkout .title-buttons button.button span { border-color:#406a83; background:#618499; }
#multiship-addresses-table td { padding:10px; }
#multiship-addresses-table tfoot td { padding:5px 10px; }
#multiship-addresses-table tfoot button.button span { border-color:#406a83; background:#618499; }

/* Step 2 */
.multiple-checkout .gift-messages-form .item .details .form-list { width:100%; overflow:hidden; }
.multiple-checkout .gift-messages-form .item .details .form-list li { margin-right:-15px; }
.multiple-checkout .gift-messages-form .item .details .form-list .field { width:230px; }
.multiple-checkout .gift-messages-form .item .details .form-list .input-box { width:215px; }
.multiple-checkout .gift-messages-form .item .details .form-list input.input-text { width:209px; }
.multiple-checkout .gift-messages-form .item .details .form-list li.wide .input-box { width:445px; }
.multiple-checkout .gift-messages-form .item .details .form-list li.wide textarea { width:439px; }
.checkout-multishipping-shipping .box-sp-methods { border:1px solid #d9d2be; background:#f9f3e3; padding:13px; position:relative; }
.checkout-multishipping-shipping .box-sp-methods .pointer { position:absolute; top:-20px; right:-40px; width:178px; height:41px; background:url(../images/bkg_sp-methods.gif) 0 0 no-repeat; overflow:hidden; }

/* Step 3 */
.checkout-multishipping-billing .multiple-checkout { position:relative; }
/* ======================================================================================= */


/* Account Login/Create Pages ============================================================ */
.account-login .content { min-height:345px; padding:14px 21px; background:#faf7ee url(../images/bkg_login-box.gif) 0 0 repeat-x; border:1px solid #bbb6a5;/* border-bottom:0; */}
.account-login .content h2 { font-weight:bold; font-size:13px; margin:0 0 14px; padding:0 0 5px 3px; border-bottom:1px solid #ddd; background-position:0 1px; background-repeat:no-repeat; text-transform:uppercase; color:#e76200; }
.account-login .new-users h2 { background-image:url(../images/i_page1.gif)}
.account-login .registered-users h2 { background-image:url(../images/i_page2.gif); }
.account-login .buttons-set { border:1px solid #bbb6a5; border-top:0; margin:0; padding:8px 13px; background:#dee5e8 url(../images/bkg_buttons-set1.gif) 0 0 repeat-x; }

.account-create #is_subscribed{display: inline-block}

/* Captcha ================================================================================ */
.captcha-note      { clear:left; padding-top:5px; }
.captcha-image     { float:left; display:inline;  margin:0; position:relative; width:258px; }
.captcha-image .captcha-img { border:1px solid #b6b6b6; vertical-align:bottom; width:100%; }
.registered-users .captcha-image { margin:0;}
.captcha-reload { cursor:pointer; position:absolute; top:2px; right:2px;}
.captcha-reload.refreshing  { animation:rotate 1.5s infinite linear; -webkit-animation:rotate 1.5s infinite linear; -moz-animation:rotate 1.5s infinite linear; }

@-webkit-keyframes rotate {
    0% { -webkit-transform:rotate(0); }
    0% { -webkit-transform:rotate(-360deg); }
}
@-moz-keyframes rotate {
    0% { -moz-transform:rotate(0); }
    0% { -moz-transform:rotate(-360deg); }
}
@keyframes rotate {
    0% { transform:rotate(0); }
    0% { transform:rotate(-360deg); }
}

/* Remember Me Popup ===================================================================== */
.window-overlay { background:url(../images/window_overlay.png) repeat; background:rgba(0, 0, 0, 0.35); position:absolute; top:0; left:0; height:100%; width:100%; z-index:990; }

.remember-me label { float:none; margin:0 6px; }
.remember-me-popup { background:#fff; border:1px solid #ccc; left:50%; top:50%; position:absolute; margin:-85px 0 0 -200px; width:400px; text-align:left; -moz-box-shadow:0 0 6px #ccc; -webkit-box-shadow:0 0 6px #ccc; -box-shadow:0 0 6px #ccc; z-index:1000; }
.remember-me-popup h3 { background:#d9e5ee; border-bottom:1px solid #ccc; font-size:14px; padding:5px 10px; }
.remember-me-popup .remember-me-popup-head { position:relative; }
.remember-me-popup .remember-me-popup-head .remember-me-popup-close { background:url(../images/btn_window_close.gif) no-repeat; display:block; position:absolute; top:7px; right:7px; height:15px; width:15px; text-indent:-9999em; }
.remember-me-popup .remember-me-popup-body { padding:10px; }
.remember-me-popup .remember-me-popup-body a { display:inline-block; height:19px; border:1px solid #de5400; background:#f18200; padding:0 8px; font:bold 12px/19px Arial, Helvetica, sans-serif; text-align:center; text-decoration:none; white-space:nowrap; color:#fff; }
/* Remember Me Popup ===================================================================== */


/* My Account ============================================================================= */
.my-account .title-buttons .link-rss { float:none; margin:0; }
.my-account .checkbox{display: inline-block}
/********** < Dashboard */
.dashboard .welcome-msg { margin:0 0 1.5em 0; }
.dashboard .welcome-msg p { margin:0; }
.dashboard .col2-set { margin:0 0 15px; }

/* General Box */
.box-account { background:#fff url(../images/bkg_account_box.gif) 0 0 repeat-x; border:1px solid #ccc; border-color:#ccc #999 #999 #ccc; padding:15px; margin: 0 0 20px; }
.box-account .box-head { border-bottom:1px solid #d9dde3; margin:0 0 10px; text-align:right; }
.box-account .box-head h2 { float:left; margin:0; font-size:13px; font-weight:bold; text-transform:uppercase; background-position:0 0; background-repeat:no-repeat; /*padding-left:21px;*/ color:#e65505; }

.dashboard .box .box-title { background:url(../images/bkg_divider1.gif) 0 100% repeat-x; padding:0 0 2px; margin:0 0 8px; text-align:right; }
.dashboard .box .box-title h3,
.dashboard .box .box-title h4 { float:left; font-size:13px; font-weight:bold; margin:0; }

/* Block: Recent Orders */
.dashboard .box-recent .box-head h2 { background-image:url(../images/i_folder-table.gif); }

/* Block: Account Information */
.dashboard .box-info .box-head h2 { background-image:url(../images/i_ma-info.gif); }
.dashboard .box-info h4 { font-size:11px; font-weight:bold; text-transform:uppercase; }

/* Block: Reviews */
.dashboard .box-reviews .box-head h2 { background-image:url(../images/i_ma-reviews.gif); }
.dashboard .box-reviews .number { float:left; font-size:10px; font-weight:bold; line-height:1; color:#fff; margin:3px -20px 0 0; padding:2px 3px; background:#0a263c; }
.dashboard .box-reviews .details { margin-left:20px; }
.dashboard .box-reviews li.item { margin:0 0 7px; }
.dashboard .box-reviews li.item.last { margin:0; }
.dashboard .box-reviews .ratings { margin:7px 0 0; }

/* Block: Tags */
.dashboard .box-tags .box-head h2 { background-image:url(../images/i_ma-tags.gif); }
.dashboard .box-tags .number { float:left; font-size:10px; font-weight:bold; line-height:1; color:#fff; margin:3px -20px 0 0; padding:2px 3px; background:#0a263c; }
.dashboard .box-tags .details { margin-left:20px; }
.dashboard .box-tags li.item { margin:0 0 7px; }
.dashboard .box-tags li.item.last { margin:0; }
.dashboard .box-tags .tags strong,
.dashboard .box-tags .tags ul,
.dashboard .box-tags .tags ul li { display:inline; }
/********** Dashboard > */

/* Address Book */
.addresses-list h2 { font-weight:bold; font-size:13px; color:#e26703; text-transform:uppercase; }
.addresses-list h3 { font-weight:bold; font-size:13px; }
.addresses-list address { margin:0 0 3px; }
.addresses-list p { margin:0; }
.addresses-list a { font-weight:bold; }
.addresses-list .link-remove { color:#646464; }
.addresses-list .separator { margin:0 3px; }
.addresses-list li.item { background:#fff url(../images/bkg_account_box.gif) 0 0 repeat-x; border:1px solid #ccc; padding:10px 13px; margin:0 0 10px; }
.addresses-list li.empty { background:none; border:0; padding:0; }
.addresses-list li.empty p { font-weight:bold; }
.addresses-list .addresses-additional li.item { background:none; border:0; padding:0; }

/* Order View */
.order-info { background:#dee5e8; border:1px solid #d0cbc1; padding:4px 8px; margin:0 0 8px; }
.order-info dt,
.order-info dd,
.order-info ul,
.order-info li { display:inline; }
.order-info .current { font-weight:bold; }
.order-info li { margin:0 3px; }

.order-date { margin:10px 0; }

.order-info-box {border:1px solid #d0cbc1; padding:12px 0px 0px 0px; margin:0 0 15px; }
.order-info-box h2 { font-weight:bold; font-size:13px; }
.order-info-box .box-payment p { margin:0 0 3px; }
.order-info-box .box-payment th { font-weight:bold; padding-right:7px; }

.order-items { width:100%; overflow-x:auto; }
.order-items h2,
.order-items h3 { clear:none; font-weight:bold; font-size:13px; padding:0; margin:0 0 5px; color:#0a263c; }
.order-items .product-name { font-size:1em !important; font-weight:bold !important; }
.order-items .link-print { color:#1e7ec8; font-weight:normal; }
.order-items .order-links { text-align:right; }

.order-additional { margin:15px 0; }
/* Order Gift Message */
.gift-message dt strong { color:#666; }
.gift-message dd { font-size:13px; margin:5px 0 0; }
/* Order Comments */
.order-about dt { font-weight:bold; }
.order-about dd { font-size:13px; margin:0 0 7px; }

.tracking-table { margin:0 0 15px; }
.tracking-table th { font-weight:bold; white-space:nowrap; }

.tracking-table-popup { width:100%; }
.tracking-table-popup th { font-weight:bold; white-space:nowrap; }
.tracking-table-popup th,
.tracking-table-popup td { padding:1px 8px; }

/* Order Print Pages */
.page-print .print-head { margin:0 0 15px; }
.page-print .print-head .logo { float:left; }
.page-print .print-head address { float:left; margin-left:15px; }
.page-print h1 { font-size:16px; font-weight:bold; }
.page-print h2,
.page-print h3 { font-size:13px; font-weight:bold; }
.page-print h2.h2 { font-size:16px; font-weight:bold; }
.page-print .order-date { background:url(../images/bkg_divider1.gif) 0 100% repeat-x; padding:0 0 10px; margin:0 0 10px; }
.page-print .col2-set { margin:0 0 10px; }
/* Price Rewrites */
.page-print .gift-message-link { display:none; }
.page-print .price-excl-tax,
.page-print .price-incl-tax { display:block; white-space:nowrap; }
.page-print .cart-price,
.page-print .price-excl-tax .label,
.page-print .price-incl-tax .label,
.page-print .price-excl-tax .price,
.page-print .price-incl-tax .price { display:inline; }

/* My Wishlist */
/*.my-wishlist .data-table td { padding:10px; }
.my-wishlist .product-image { display:block; width:113px; height:113px; margin:0 0 5px; }
.my-wishlist textarea { display:block; width:97%; height:109px; }
.my-wishlist .buttons-set { margin-top:2em; }
.my-wishlist .buttons-set button.button { float:none; }
.my-wishlist .buttons-set .btn-add span,
.my-wishlist .buttons-set .btn-share span { border-color:#406a83; background:#618499; }*/
#wishlist-table .add-to-links { white-space:nowrap; }

/* My Tags */
.my-tag-edit { float:left; margin:0 0 10px; }
.my-tag-edit .btn-remove { float:right; margin:4px 0 0 5px; }
#my-tags-table { clear:both; }
#my-tags-table td { padding:10px; }
#my-tags-table .add-to-links { white-space:nowrap; }

/* My Reviews */
#my-reviews-table td { padding:10px; }

.product-review .product-img-box { float:left; width:140px;  }
.product-review .product-img-box .product-image { display:block; width:125px; height:125px; }
.product-review .product-img-box .label { font-size:11px; margin:0 0 3px; }
.product-review .product-img-box .ratings .rating-box { float:none; display:block; margin:0 0 3px; }
.product-review .product-details { margin-left:150px; }
.product-review .product-name { font-size:16px; font-weight:bold; margin:0 0 10px; }
.product-review h3 { font-size:12px; margin:0 0 3px; color:#2f2f2f; }
.product-review .ratings-table { margin:0 0 10px; }
.product-review dt { font-weight:bold; }
.product-review dd { font-size:13px; margin:5px 0 0; }

/* Billing Agreements */
.billing-agreements .info-box{ margin:15px 0; }
.billing-agreements .form-list li select { float:left; }
.billing-agreements .form-list li button.button { float:left; margin-left:10px; }
.billing-agreements .table-caption { font-weight:bold; font-size:13px; }
/* ======================================================================================= */


/* MAP Popup============================================================================== */
.cart-msrp-totals { color:red; font-size:12px !important; font-weight:bold; margin:10px 10px 0; padding:10px; text-align:right; text-transform:uppercase;}
.map-cart-sidebar-total { color:red; display:block; font-size:10px; font-weight:bold; text-align:left; padding:2px 5px; text-shadow:0 1px 0 #fff; }

.map-popup { background:#fff; border:1px solid #aaa; margin:12px 0 0; position:absolute; -moz-box-shadow:0 0 6px #ccc; -webkit-box-shadow:0 0 6px #ccc; box-shadow:0 0 6px #ccc; text-align:left; width:300px; z-index:100; }
.map-popup-heading { background:#d9e5ee; border-bottom:1px solid #ccc; padding:5px 30px 5px 10px; width:260px; }
.map-popup-heading h2 { font-size:16px; margin:0; text-shadow:0 1px 0 #f6f6f6; overflow:hidden; white-space:nowrap; word-wrap:break-word; text-align:left; text-overflow:ellipsis; }
.map-popup-arrow { background:url(../images/map_popup_arrow.gif) no-repeat; position:absolute; left:50%; top:-10px; height:10px; width:19px; }
.map-popup-close { background:url(../images/btn_window_close.gif) no-repeat; display:block; position:absolute; top:8px; right:10px; height:15px; width:15px; text-indent:-9999em; -moz-box-shadow:0 0 3px #999; -webkit-box-shadow:0 0 3px #999; box-shadow:0 0 3px #999; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px; }
.map-popup-content { border-top:1px solid #eee; padding:10px; overflow:hidden; text-align:left; width:280px; }
.map-popup-checkout { display:inline; float:right; text-align:right; }
.map-popup-checkout span { display:block; padding-right:30px; }
.map-popup-checkout .paypal-logo { margin:0 0 5px; }
.map-popup-price .price-box,
.map-popup-price .price-box .special-price { margin:0; padding:0; }
.map-popup-price { margin:5px 0 0; }
.map-popup-text { clear:right; margin:0 10px; padding:10px 0; text-align:left; word-wrap:break-word; }
.map-popup-only-text { border-top:1px solid #ddd; }
/* ======================================================================================= */


/* Footer ================================================================================ */
.footer-container { border-top:15px solid #b6d1e2; }
.footer { /*width:930px;*/ margin:0 auto; padding:10px 10px 50px; }
.footer .store-switcher { display:inline; margin:0 5px 0 0; color:#fff; }
.footer .store-switcher label { font-weight:bold; vertical-align:middle; }
.footer .store-switcher select { padding:0; vertical-align:middle; }
.footer a { color:#fff; text-decoration:none; }
.footer a:hover { text-decoration:underline; }
.footer .bugs { margin:13px 0 0; color:#ecf3f6; }
.footer .bugs a { color:#ecf3f6; text-decoration:underline; }
.footer .bugs a:hover { text-decoration:none; }
.footer address { margin:0 0 20px; color:#ecf3f6; }
.footer address a { color:#ecf3f6; text-decoration:underline; }
.footer address a:hover { text-decoration:none; }
.footer ul { display:inline; }
.footer ul.links { display:block; }
.footer li { display:inline;/* background:url(../images/bkg_pipe2.gif) 100% 60% no-repeat;*/ padding:0 7px 0 4px; }
.footer li.last { background:none !important; padding-right:0 !important; }
.footer-container .bottom-container { margin:0 0 5px; }
/* ======================================================================================= */

/* Sample Data============================================================================ 
.home-callout { margin-bottom:12px; }
.home-callout img { display:block }
.home-spot { float:left; width:470px; margin-left:20px; }
/*.best-selling h3 { margin:12px 0 6px 0; color:#e25203; font-size:1.2em; }
.best-selling table { border-top:1px solid #ccc; }
.best-selling tr.odd { background:#eee url(../images/best_selling_tr_odd_bg.gif) 0 100% repeat-x; }
.best-selling tr.even { background:#fff url(../images/best_selling_tr_even_bg.gif) 0 100% repeat-x; }
.best-selling td {/*width:50%; padding:8px 10px 8px 8px; border-bottom:1px solid #ccc; font-size:11px; }
.best-selling .product-img { float:left; border:2px solid #dcdcdc; }
.best-selling .product-description { margin-left:107px; line-height:1.3em; }
.best-selling a.product-name,
.home-spot .best-selling a.product-name:hover { color:#203548; }*/
/* ======================================================================================= */


/* Clears ================================================================================ */
.clearer:after,
.header-container:after,
.header-container .top-container:after,
.header:after,
.header .quick-access:after,
#nav:after,
.main:after,
.footer:after,
.footer-container .bottom-container:after,
.col-main:after,
.col2-set:after,
.col3-set:after,
.col3-layout .product-options-bottom .price-box:after,
.col4-set:after,
.search-autocomplete li:after,
.block .block-content:after,
.block .actions:after,
.block li.item:after,
.block-poll li:after,
.block-layered-nav .currently li:after,
.page-title:after,
.products-grid:after,
.products-list li.item:after,
.box-account .box-head:after,
.dashboard .box .box-title:after,
.box-reviews li.item:after,
.box-tags li.item:after,
.pager-responsive:after,
.sorter:after,
.ratings:after,
.add-to-box:after,
.add-to-cart:after,
.product-essential:after,
.product-collateral:after,
.product-view .product-img-box .more-views ul:after,
.product-view .box-tags .form-add:after,
.product-view .product-shop .short-description:after,
.product-view .box-description:after,
.product-options .options-list li:after,
.product-options-bottom:after,
.product-review:after,
.cart:after,
.cart-collaterals:after,
.cart .crosssell li.item:after,
.opc .step-title:after,
.checkout-progress:after,
.multiple-checkout .place-order:after,
.group-select li:after,
.form-list li:after,
.form-list .field:after,
.buttons-set:after,
.page-print .print-head:after,
.advanced-search-summary:after,
.gift-messages-form .item:after,
.send-friend .form-list li p:after { display:block; content:"."; clear:both; font-size:0; line-height:0; height:0; overflow:hidden; }
/* ======================================================================================= */

.guest-select {width:305px !important;}

/* MULTI-LEVEL DROPDOWNS FOR BOOTSTRAP */
.dropdown-submenu{
    position:relative;
}

.dropdown-submenu > .dropdown-menu
{
    top:0;
    left:100%;
    margin-top:-6px;
    margin-left:-1px;
    -webkit-border-radius:0 6px 6px 6px;
    -moz-border-radius:0 6px 6px 6px;
    border-radius:0 6px 6px 6px;
}

.dropdown-submenu:hover > .dropdown-menu{
    display:block;
}

.dropdown-submenu > a:after{
    display:block;
    content:" ";
    float:right;
    width:0;
    height:0;
    border-color:transparent;
    border-style:solid;
    border-width:5px 0 5px 5px;
    border-left-color:#cccccc;
    margin-top:5px;
    margin-right:-10px;
}

.dropdown-submenu:hover > a:after{
    border-left-color:#ffffff;
}

.dropdown-submenu .pull-left{
    float:none;
}

.dropdown-submenu.pull-left > .dropdown-menu{
    left:-100%;
    margin-left:10px;
    -webkit-border-radius:6px 0 6px 6px;
    -moz-border-radius:6px 0 6px 6px;
    border-radius:6px 0 6px 6px;
}

/* custom CSS */
/* checkout onepage */
#checkout-step-login .radio, #checkoutSteps .radio{display: inline-block}
#checkout-step-shipping input[type="checkbox"] {display:inline-block}

/* social network block */
#divnetworkshare{margin-top: 10px; text-align: left}
#divnetworkshare a{color: #fff}
.followus{color: #fff; vertical-align: top; padding: 10px 10px 0px 0px; display: inline-block;}

/* popup cart page */
#popupcart{position: absolute; right: 0; z-index: 2; margin: 25px 14px 0px 0px; background:#fff; text-align: left; display: none; width: 250px}

/* pagination catalog / category */
.pagination{margin: 0}

/* product page / additional information */
#product-attribute-specs-table .label{font-size:90%; font-weight:normal;}
/* cart page */
.cart-left, .crosselldiv{padding-left:0; padding-right:0}