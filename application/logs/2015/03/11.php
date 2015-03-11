<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-11 17:56:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'for' (T_FOR) ~ APPPATH\classes\Controller\profile.php [ 262 ] in file:line
2015-03-11 17:56:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-11 17:58:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\profile.php [ 31 ] in file:line
2015-03-11 17:58:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-11 18:36:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-11 18:36:41 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
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
2015-03-11 18:38:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-11 18:38:23 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
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
2015-03-11 18:38:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-11 18:38:44 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
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
2015-03-11 18:39:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-11 18:39:21 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
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
2015-03-11 18:39:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\profile\profileview.php [ 58 ] in C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php:58
2015-03-11 18:39:46 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 58, Array)
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