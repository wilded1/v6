<?php
if (!defined('CC_INI_SET')) die('Access Denied');
$nav_sections = array(
	'customers'  => $lang['navigation']['nav_customers'],
	'inventory'  => $lang['navigation']['nav_inventory'],
	'filemanager' => $lang['navigation']['nav_file_manager'],
	'settings'  => $lang['navigation']['nav_settings'],
	'modules'  => $lang['navigation']['nav_modules'],
	'advanced'  => $lang['navigation']['nav_advanced'],
);

$nav_items['customers']  = array(
	$lang['navigation']['nav_customer_list'] => '?_g=customers',
	$lang['navigation']['nav_orders']   => '?_g=orders',
	$lang['navigation']['nav_transaction_logs'] => '?_g=orders&node=transactions',
	$lang['navigation']['nav_newsletters']  => '?_g=customers&node=newsletters',
	$lang['navigation']['nav_subscribers']  => '?_g=customers&node=subscribers',
);

$nav_items['inventory']  = array(
	$lang['navigation']['nav_categories']  => '?_g=categories',
	$lang['navigation']['nav_products']   => '?_g=products',
	$lang['navigation']['nav_prod_reviews']  => '?_g=products&node=reviews',
	$lang['navigation']['nav_product_options'] => '?_g=products&node=options',
	$lang['navigation']['nav_coupons']   => '?_g=products&node=coupons',
	$lang['navigation']['nav_manufacturers'] => '?_g=products&node=manufacturers',
	$lang['navigation']['nav_cat_import']  => '?_g=products&node=import',
	$lang['navigation']['nav_cat_export']  => '?_g=products&node=export',
);

$nav_items['filemanager'] = array(
	$lang['navigation']['nav_documents']  => '?_g=documents',
	$lang['navigation']['nav_downloads']  => '?_g=filemanager&mode=digital',
	$lang['navigation']['nav_images']   => '?_g=filemanager',
	$lang['navigation']['nav_email_templates'] => '?_g=documents&node=email',
	$lang['navigation']['nav_contact_form']  => '?_g=documents&node=contact',
);

$nav_items['settings']  = array(
	$lang['navigation']['nav_administrators'] => '?_g=settings&node=admins',
	$lang['navigation']['nav_settings_store'] => '?_g=settings',
	$lang['navigation']['nav_manage_hooks']  => '?_g=settings&node=hooks',
	$lang['navigation']['nav_certificates']  => '?_g=settings&node=giftCertificates',
	$lang['navigation']['nav_currencies']  => '?_g=settings&node=currency',
	$lang['navigation']['nav_taxes']   => '?_g=settings&node=tax',
	$lang['navigation']['nav_regions']   => '?_g=settings&node=geo',
	$lang['navigation']['nav_languages']  => '?_g=settings&node=language',
);

$nav_items['modules']  = array(
	$lang['navigation']['nav_marketplace']   => '?_g=marketplace',
	$lang['navigation']['nav_plugins']   => '?_g=plugins',
	/*
	$lang['navigation']['nav_plugins']   => '?_g=modules&type=plugins',
	$lang['navigation']['nav_affiliate']  => '?_g=modules&type=affiliate',
	$lang['navigation']['nav_gateway']   => '?_g=modules&type=gateway',
	$lang['navigation']['nav_shipping']   => '?_g=modules&type=shipping',
	$lang['navigation']['nav_social']   => '?_g=modules&type=social',
	$lang['navigation']['nav_external']   => '?_g=modules&type=external',
	$lang['navigation']['nav_livehelp']   => '?_g=modules&type=livehelp',
	*/
);

$nav_items['advanced']  = array(
	$lang['navigation']['nav_statistics']  => '?_g=statistics',
	$lang['navigation']['nav_sales_reports'] => '?_g=reports',
	$lang['navigation']['nav_access_log']  => '?_g=settings&node=logs',
	$lang['navigation']['nav_error_log']  => '?_g=settings&node=errorlog',
	$lang['navigation']['nav_request_log']  => '?_g=settings&node=requestlog',
	$lang['navigation']['nav_maintenance']  => '?_g=maintenance',
	$lang['navigation']['nav_server_info']  => '?_g=misc&node=server-info',
);

// Include menu item hooks
foreach ($GLOBALS['hooks']->load('admin.navigation') as $hook) include $hook;