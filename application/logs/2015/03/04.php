<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-04 14:14:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'province' in 'order clause' [ SELECT `city`.`id` AS `id`, `city`.`city` AS `city`, `city`.`pc` AS `pc`, `city`.`province_id` AS `province_id` FROM `cities` AS `city` ORDER BY `province` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 14:14:04 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\City.php(9): Kohana_ORM->find_all()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(179): Model_City->get_cities('1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_get_cities()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 14:28:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\user\citiesview.php [ 4 ] in E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php:4
2015-03-04 14:28:29 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 4, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(183): Kohana_Response->body(Object(View))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_get_cities()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php:4
2015-03-04 14:29:42 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\views\user\citiesview.php [ 4 ] in E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php:4
2015-03-04 14:29:42 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php(4): Kohana_Core::error_handler(2, 'Illegal offset ...', 'E:\xampp\htdocs...', 4, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(183): Kohana_Response->body(Object(View))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_get_cities()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\user\citiesview.php:4
2015-03-04 14:39:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$r' (T_VARIABLE) ~ APPPATH\classes\Model\User.php [ 140 ] in file:line
2015-03-04 14:39:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-04 14:40:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: province ~ APPPATH\classes\Model\User.php [ 138 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\User.php:138
2015-03-04 14:40:13 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(138): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 138, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\User.php:138
2015-03-04 15:00:43 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '1', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:00:43 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(140): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:04:49 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = 'Seleccionar', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:04:49 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(140): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:18:06 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '2', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:18:06 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(140): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:18:58 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:18:58 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(140): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:31:14 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:31:14 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(141): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:31:40 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = 'NULL', `city_id` = 'NULL' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:31:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(141): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:33:21 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:33:21 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(141): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:34:10 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:34:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(141): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:35:00 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`users`, CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)) [ UPDATE `users` SET `province_id` = '', `city_id` = '' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 15:35:00 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\User.php(141): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(92): Model_User->update_account(Array)
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_update_account()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-04 19:54:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: province_id ~ APPPATH/views/user/myaccountview.php [ 92 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:92
2015-03-04 19:54:19 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(92): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 92, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:92
2015-03-04 19:54:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: province_id ~ APPPATH/views/user/myaccountview.php [ 92 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:92
2015-03-04 19:54:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(92): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 92, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:92
2015-03-04 20:32:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/Controller/User.php [ 28 ] in file:line
2015-03-04 20:32:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line