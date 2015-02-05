<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-04 16:18:30 --- CRITICAL: View_Exception [ 0 ]: The requested view home/home could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 16:18:30 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('home/home')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('home/home', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('home/home')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 16:45:51 --- CRITICAL: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 16:45:51 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('home')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('home')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 16:50:59 --- CRITICAL: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 16:50:59 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('home')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('home')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:20:59 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php:43
2015-02-04 17:20:59 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 43, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(9): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php:43
2015-02-04 17:21:32 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\index.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:21:32 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#6 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\index.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#6 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:20 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\index.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:20 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#6 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:22 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\index.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:22:22 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#6 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:23:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\homeview.php [ 15 ] in E:\xampp\htdocs\INKEDin\application\views\homeview.php:15
2015-02-04 17:23:55 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\homeview.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\homeview.php:15
2015-02-04 17:24:10 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:24:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('<script type="t...')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('<script type="t...', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('<script type="t...')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:24:29 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:24:29 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('<script type="t...')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('<script type="t...', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('<script type="t...')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:24:40 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:24:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('<script type="t...')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('<script type="t...', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('<script type="t...')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:25:37 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\index.php [ 11 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:25:37 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Index->__construct(Object(Request), Object(Response))
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#6 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:11
2015-02-04 17:25:53 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\index.php [ 11 ] in file:line
2015-02-04 17:25:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:26:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2015-02-04 17:26:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:26:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2015-02-04 17:26:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:26:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2015-02-04 17:26:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:26:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2015-02-04 17:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:26:44 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\index.php [ 12 ] in file:line
2015-02-04 17:26:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:31:34 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\index.php [ 11 ] in file:line
2015-02-04 17:31:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:34:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or class (T_CLASS) ~ APPPATH\classes\Controller\index.php [ 5 ] in file:line
2015-02-04 17:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:34:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 5 ] in file:line
2015-02-04 17:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:35:46 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\index.php [ 11 ] in file:line
2015-02-04 17:35:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:36:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$template' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\index.php [ 6 ] in file:line
2015-02-04 17:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:36:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 6 ] in file:line
2015-02-04 17:36:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:37:41 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\index.php [ 11 ] in file:line
2015-02-04 17:37:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:38:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\homeview.php [ 15 ] in E:\xampp\htdocs\INKEDin\application\views\homeview.php:15
2015-02-04 17:38:14 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\homeview.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\homeview.php:15
2015-02-04 17:38:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\homeview.php [ 15 ] in file:line
2015-02-04 17:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-04 17:40:04 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:40:04 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-04 17:48:18 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: user_styles ~ SYSPATH\classes\Kohana\View.php [ 179 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:57
2015-02-04 17:48:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(57): Kohana_View->__get('user_styles')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Controller_Index->after()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:57
2015-02-04 18:25:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::styles() ~ APPPATH\classes\Controller\index.php [ 18 ] in file:line
2015-02-04 18:25:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line