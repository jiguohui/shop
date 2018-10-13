<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

define('HOST_NAME', $_SERVER['HTTP_HOST']);
define('HOST_PATH', 'http://' . HOST_NAME);

define('CORPID', "wx048a740b5cdc1c0d"); //企业ID
define('TXLSECRET', "oDQesefdP9VSyU2I6-ph9sF2aLSuO-Cp_UcsChgNWn0"); // 通讯录 secret
define('CRM_DESC', "CRM 2018"); //crm 应用id
define('CRM_AGENTID', "1000007"); //crm 应用id
define('CRM_SECRET', "1_EZ2Dq_knwrfN6G4QPoiqUMBa8tsMloLXYW-GmCWMU"); //crm 应用secret
define('CRM_TOKEN', "HYGDFjieY8eyJ"); // crm 应用token
define('CRM_ENCODINGAESKEY', "Fuer8xH7UTjUAO3NriX7By552hcfPiIsvGNQKcMXIW0"); // crm encodingAeskey

define('IMPORT_DATA_TIME', 1514563200); // 2017/12/30 0:0:0 最后导数据时间

