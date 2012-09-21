<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-03 15:49:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-03 15:49:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 15:52:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-03 15:52:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 16:17:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::select() ~ APPPATH\classes\controller\admin\pages.php [ 29 ]
2012-09-03 16:17:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::select() ~ APPPATH\classes\controller\admin\pages.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 16:18:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::rules() ~ APPPATH\classes\controller\admin\pages.php [ 29 ]
2012-09-03 16:18:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::rules() ~ APPPATH\classes\controller\admin\pages.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}