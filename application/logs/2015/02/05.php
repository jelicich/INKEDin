<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-05 11:40:23 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\index.php [ 23 ] in file:line
2015-02-05 11:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 16:13:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\index.php [ 18 ] in file:line
2015-02-05 16:13:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 16:13:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\index.php [ 18 ] in file:line
2015-02-05 16:13:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 16:14:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\index.php [ 18 ] in file:line
2015-02-05 16:14:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 16:15:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH\classes\Controller\index.php [ 18 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:18
2015-02-05 16:15:50 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 18, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:18
2015-02-05 16:16:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\index.php [ 18 ] in file:line
2015-02-05 16:16:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 16:27:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH\classes\Controller\index.php [ 21 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:21
2015-02-05 16:27:02 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 21, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:21
2015-02-05 16:57:12 --- CRITICAL: View_Exception [ 0 ]: The requested view template/footer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-05 16:57:12 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template/footer')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct('template/footer', NULL)
#2 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(16): Kohana_View::factory('template/footer')
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Master->before()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#9 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-02-05 17:05:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:05:36 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:06:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:06:48 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:06:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:06:50 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:07:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:07:10 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:07:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\master.php [ 13 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:13
2015-02-05 17:07:57 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 13, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Master->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:13
2015-02-05 17:08:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:08:08 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:09:08 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\master.php [ 10 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:10
2015-02-05 17:09:08 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 10, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Master->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:10
2015-02-05 17:09:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:09:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:10:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:10:29 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:10:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\head.php [ 1 ] in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:10:47 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\common\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 1, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\application\views\homeview.php(4): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in E:\xampp\htdocs\INKEDin\application\views\common\head.php:1
2015-02-05 17:13:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH\classes\Controller\master.php [ 7 ] in file:line
2015-02-05 17:13:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 17:20:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$config' (T_VARIABLE), expecting identifier (T_STRING) or class (T_CLASS) ~ APPPATH\classes\Controller\master.php [ 7 ] in file:line
2015-02-05 17:20:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 17:21:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH\classes\Controller\master.php [ 7 ] in file:line
2015-02-05 17:21:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 17:21:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\master.php [ 13 ] in file:line
2015-02-05 17:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 17:22:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Index::$common_scripts ~ APPPATH\classes\Controller\master.php [ 22 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:22
2015-02-05 17:22:03 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 22, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Master->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php:22
2015-02-05 17:27:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: common_scripts ~ APPPATH\classes\Controller\index.php [ 29 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:29
2015-02-05 17:27:48 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 29, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php:29