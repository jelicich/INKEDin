<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-12 00:02:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\profile.php [ 78 ] in file:line
2015-03-12 00:02:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 00:02:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\profile.php [ 78 ] in file:line
2015-03-12 00:02:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 00:02:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\profile.php [ 78 ] in file:line
2015-03-12 00:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 00:09:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_user ~ APPPATH\classes\Controller\profile.php [ 112 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:02 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 112, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_follower ~ APPPATH\classes\Controller\profile.php [ 112 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:22 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 112, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_follower ~ APPPATH\classes\Controller\profile.php [ 112 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:23 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 112, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:112
2015-03-12 00:09:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Follower::get_user_info() ~ APPPATH\classes\Controller\profile.php [ 112 ] in file:line
2015-03-12 00:09:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 00:09:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\views\profile\profileview.php [ 12 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:12
2015-03-12 00:09:51 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:12
2015-03-12 00:11:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileview.php [ 43 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:11:42 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:17:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileview.php [ 43 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:17:09 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:17:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileview.php [ 43 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:17:37 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileview.php [ 43 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:20:16 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:20:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileview.php [ 43 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:20:22 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:43
2015-03-12 00:27:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Model\Follower.php [ 31 ] in C:\xampp\htdocs\INKEDin\application\classes\Model\Follower.php:31
2015-03-12 00:27:57 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Model\Follower.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(356): Model_Follower->save_follower('1', '2')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_save_follower()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\INKEDin\application\classes\Model\Follower.php:31
2015-03-12 00:28:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2-1' for key 'PRIMARY' [ INSERT INTO `followers` (`user_id`, `follower_id`) VALUES ('2', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-12 00:28:53 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fo...', false, Array)
#1 C:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\INKEDin\application\classes\Model\Follower.php(33): Kohana_ORM->save()
#4 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(356): Model_Follower->save_follower('1', '2')
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_save_follower()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-12 00:29:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:29:13 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:30:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:30:02 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:32:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:32:46 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:32:55 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2-1' for key 'PRIMARY' [ INSERT INTO `followers` (`user_id`, `follower_id`) VALUES ('2', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-12 00:32:55 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fo...', false, Array)
#1 C:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\INKEDin\application\classes\Model\Follower.php(33): Kohana_ORM->save()
#4 C:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(356): Model_Follower->save_follower('1', '2')
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Profile->action_save_follower()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-12 00:33:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:33:25 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:33:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:33:50 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:34:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-12 00:34:21 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58