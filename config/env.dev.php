<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

define('HOST_NAME', 'adm.crm.dev');
define('HOST_PATH', 'http://' . HOST_NAME);

define('CORPID', "wx048a740b5cdc1c0d"); //企业ID
define('TXLSECRET', "oDQesefdP9VSyU2I6-ph9sF2aLSuO-Cp_UcsChgNWn0"); // 通讯录 secret
define('CRM_DESC', "CRM2.0"); //crm 应用id
define('CRM_AGENTID', "1000003"); //crm 应用id
define('CRM_SECRET', "GV4BWSUVSplqLSsDHWDiyE0pIo4oJLAOT7zGOkBXwXo"); //crm 应用secret
define('CRM_TOKEN', "HYGDFjieY8eyJ"); // crm 应用token
define('CRM_ENCODINGAESKEY', "Fuer8xH7UTjUAO3NriX7By552hcfPiIsvGNQKcMXIW0"); // crm encodingAeskey

define('IMPORT_DATA_TIME', 1513969200); // 2017/12/23 3:0:0 导数据时间
