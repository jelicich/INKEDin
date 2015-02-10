<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-10 15:01:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user\myaccountview.php [ 25 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:25
2015-02-10 15:01:01 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 25, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:25
2015-02-10 15:01:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user\myaccountview.php [ 25 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:25
2015-02-10 15:01:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 25, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:25
2015-02-10 15:02:22 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-10 15:02:22 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(10): Kohana_Session::instance()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_User->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-10 15:03:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_User::$session ~ APPPATH\classes\Controller\user.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:11
2015-02-10 15:03:58 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 11, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:11
2015-02-10 15:04:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: availability ~ APPPATH\views\user\myaccountview.php [ 113 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:113
2015-02-10 15:04:44 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(113): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 113, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:113
2015-02-10 15:04:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\user\myaccountview.php [ 113 ] in file:line
2015-02-10 15:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line