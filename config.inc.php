<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */
/** 开启https */ 
define('__TYPECHO_SECURE__',true);

/** 定义根目录 */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

/** 定义插件目录(相对路径) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

/** 定义模板目录(相对路径) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');

/** 后台路径(相对路径) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');

/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);

/** 载入API支持 */
require_once 'Typecho/Common.php';

/** 程序初始化 */
Typecho_Common::init();

/** 定义数据库参数 */
$db = new Typecho_Db('数据库驱动名称: Pdo_Mysql 或 Pdo_Pgsql', '表前缀 如: myblog_');
$db->addServer(array (
  'host' => '数据库地址',
  'user' => '数据库用户名',
  'password' => '数据库密码',
  'charset' => '数据库编码, 推荐：utf8mb4',
  'port' => 数据库端口,
  'database' => '数据库名',
  'engine' => '数据库引擎, 对于MySQL为 InnoDB 或 MyISAM',
  'sslCa' => '数据库SSL证书路径',
  'sslVerify' => 启用SSL证书验证 true 或 false,
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
