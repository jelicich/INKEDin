<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 17:30:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Controller\master.php [ 4 ] in file:line
2015-02-11 17:30:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:31:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Controller\master.php [ 4 ] in file:line
2015-02-11 17:31:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:31:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Controller\master.php [ 4 ] in file:line
2015-02-11 17:31:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:32:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\master.php [ 5 ] in file:line
2015-02-11 17:32:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:32:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Controller\master.php [ 5 ] in file:line
2015-02-11 17:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:32:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\Controller\master.php [ 12 ] in file:line
2015-02-11 17:32:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:33:03 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\master.php [ 11 ] in file:line
2015-02-11 17:33:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:35:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH\classes\Controller\auth.php [ 45 ] in file:line
2015-02-11 17:35:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:36:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::log_out() ~ APPPATH\classes\Controller\auth.php [ 44 ] in file:line
2015-02-11 17:36:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:36:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Model\User.php [ 40 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\User.php:40
2015-02-11 17:36:30 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 40, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user()
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\User.php:40
2015-02-11 17:37:27 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:37:27 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(44): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:38:05 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:38:05 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(44): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:01 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:01 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:27 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:27 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user(NULL, 'da39a3ee5e6b4b0...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:31 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:39:31 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:41:32 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\Kohana\ORM.php [ 1017 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:41:32 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1017): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 1017, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1044): Kohana_ORM->_build_select()
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:1017
2015-02-11 17:44:57 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:44:57 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:46:10 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `user`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:46:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:46:22 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `users`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:46:22 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:47:38 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:47:38 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user(NULL, 'da39a3ee5e6b4b0...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:52:38 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:52:38 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user(NULL, 'da39a3ee5e6b4b0...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:00:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'inkedin.users as users' doesn't exist [ SELECT `users`.*, `photos`.* FROM `users as users` LEFT JOIN `photos as photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:00:03 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:10:24 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:10:24 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:10:50 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `users`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:10:50 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:10 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `user`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:31 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `user`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:31 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:44 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `user`, `` AS `` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:44 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:55 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `users`, `` AS `` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:11:55 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:12:10 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `user`, `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:12:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:12:38 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photo`.* FROM `user`, `` AS `` LEFT JOIN `photo` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:12:38 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(46): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:13:18 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:13:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:14:08 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `users`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:14:08 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(45): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(14): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:17:03 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:17:03 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(19): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:17:45 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:17:45 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(19): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:18:02 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `user`.*, `photos`.* FROM `` AS `` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:18:02 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(NULL)
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(19): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 18:23:47 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 18:23:47 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('photo', '<img src="/asse...')
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(44): Kohana_ORM->__set('photo', '<img src="/asse...')
#2 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(10): Controller_Master->before()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:702