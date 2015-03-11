<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-09 20:48:22 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./temp must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:48:22 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(79): Kohana_Upload::save(Array, NULL, './temp')
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:49:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: provinces ~ APPPATH\views\user\myaccountview.php [ 91 ] in C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:91
2015-03-09 20:49:01 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 91, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:91
2015-03-09 20:50:12 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./temp must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:50:12 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(79): Kohana_Upload::save(Array, NULL, './temp')
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:50:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: provinces ~ APPPATH\views\user\myaccountview.php [ 91 ] in C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:91
2015-03-09 20:50:21 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 91, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:91
2015-03-09 20:50:40 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./temp must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:50:40 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(79): Kohana_Upload::save(Array, NULL, './temp')
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:52:14 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./temp must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:52:14 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(79): Kohana_Upload::save(Array, NULL, './temp')
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:53:16 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./temp must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 20:53:16 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(79): Kohana_Upload::save(Array, NULL, './temp')
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:79
2015-03-09 23:35:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ APPPATH\classes\Controller\profile.php [ 255 ] in file:line
2015-03-09 23:35:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-09 23:44:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: comments ~ APPPATH\views\profile\commentsview.php [ 10 ] in C:\xampp\htdocs\INKEDin\application\views\profile\commentsview.php:10
2015-03-09 23:44:01 --- DEBUG: #0 C:\xampp\htdocs\INKEDin\application\views\profile\commentsview.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\INKEDin\application\views\profile\profileview.php(76): Kohana_View->__toString()
#5 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\INKEDin\application\views\profile\commentsview.php:10