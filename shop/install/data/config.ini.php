<?php

$config = array();
$config['shop_site_url']        = '===url===/shop';
$config['cms_site_url']         = '===url===/cms';
$config['microshop_site_url']   = '===url===/microshop';
$config['circle_site_url']      = '===url===/circle';
$config['admin_site_url']       = '===url===/admin';
$config['mobile_site_url']      = '===url===/mobile';
$config['wap_site_url']         = '===url===/wap';
$config['chat_site_url']        = '===url===/chat';
$config['wechat_site_url']      = '===url===/wechat/ems/';
$config['node_site_url']        = '===url===:8091';
$config['delivery_site_url']    = '===url===/delivery';
$config['chain_site_url']       = '===url===/chain';
$config['member_site_url']      = '===url===/member';
$config['upload_site_url']      = '===url===/data/upload';
$config['resource_site_url']    = '===url===/data/resource';
$config['cms_modules_url']      = '===url===/admin/modules/cms';
$config['microshop_modules_url']= '===url===/admin/modules/microshop';
$config['circle_modules_url']   = '===url===/admin/modules/circle';
$config['admin_modules_url']    = '===url===/admin/modules/shop';
$config['mobile_modules_url']   = '===url===/admin/modules/mobile';
$config['version']              = '201602150687S';
$config['setup_date']           = '===setup_date===';
$config['gip']                  = 0;
$config['dbdriver']             = '===db_driver===';
$config['tablepre']             = '===db_prefix===';
$config['db']['1']['dbhost']       = '===db_host===';
$config['db']['1']['dbport']       = '===db_port===';
$config['db']['1']['dbuser']       = '===db_user===';
$config['db']['1']['dbpwd']        = '===db_pwd===';
$config['db']['1']['dbname']       = '===db_name===';
$config['db']['1']['dbcharset']    = '===db_charset===';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire']   = 3600;
$config['lang_type']        = 'zh_cn';
$config['cookie_pre']       = '===cookie_pre===';
$config['cache_open'] = false;
//$config['redis']['prefix']        = 'nc_';
//$config['redis']['master']['port']        = 6379;
//$config['redis']['master']['host']        = '127.0.0.1';
//$config['redis']['master']['pconnect']    = 0;
//$config['redis']['slave']             = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'shopnc';
$config['debug']            = false;
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdk4report.eucp.b2m.cn:8080/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
//$config['oss']['open'] = false;
//$config['oss']['img_url'] = '';
//$config['oss']['api_url'] = '';
//$config['oss']['bucket'] = '';
//$config['oss']['access_id'] = '';
//$config['oss']['access_key'] = '';
$config['https'] = false;
return $config;
