<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-25 00:41:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH/views/user/myaccountview.php [ 176 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:176
2015-02-25 00:41:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 176, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:176
<<<<<<< HEAD
2015-02-25 21:50:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/album/editalbumview.php [ 5 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 21:50:45 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 5, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(151): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
=======
2015-02-25 15:51:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\album\editalbumview.php [ 5 ] in E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php:5
2015-02-25 15:51:25 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 5, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(151): Kohana_Response->body(Object(View))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php:5
2015-02-25 15:52:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Controller\photo.php [ 119 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:119
2015-02-25 15:52:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 119, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:119
2015-02-25 15:52:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Controller\photo.php [ 119 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:119
2015-02-25 15:52:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 119, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:119
2015-02-25 16:04:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\album\editalbumview.php [ 5 ] in E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php:5
2015-02-25 16:04:52 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 5, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(151): Kohana_Response->body(Object(View))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\album\editalbumview.php:5
2015-02-25 16:15:11 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('5860_1424891709.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:15:11 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('5860_1424891709...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:15:28 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('4428_1424891726.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:15:28 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('4428_1424891726...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:15:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:15:36 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:17:52 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('7556_1424891870.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:17:52 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('7556_1424891870...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:24:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:24:34 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:24:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:24:43 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:24:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:24:52 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:29:41 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('3139_1424892579.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:29:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('3139_1424892579...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:29:41 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('4183_1424892579.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:29:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('4183_1424892579...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:30:24 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('2404_1424892622.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:30:24 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(109): Model_Photo->save_photo('2404_1424892622...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 16:34:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-25 16:34:39 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-25 16:39:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-25 16:39:13 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-25 16:43:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:43:44 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:43:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-25 16:43:50 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
>>>>>>> 74a2303655fd57db6239ac2dad2e01a1278f211d

2015-02-25 21:57:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/album/editalbumview.php [ 5 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 21:57:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 5, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(151): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 21:59:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/album/editalbumview.php [ 5 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 21:59:27 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 5, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(151): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 22:00:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/album/editalbumview.php [ 5 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 22:00:20 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 5, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(151): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/editalbumview.php:5
2015-02-25 22:36:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$photos' (T_VARIABLE) ~ APPPATH/classes/Controller/Album.php [ 232 ] in file:line
2015-02-25 22:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 22:37:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/Model/Album.php [ 35 ] in file:line
2015-02-25 22:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 22:37:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/Model/Album.php [ 35 ] in file:line
2015-02-25 22:37:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 22:39:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH/classes/Controller/Album.php [ 225 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:225
2015-02-25 22:39:52 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(225): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 225, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:225
2015-02-25 22:40:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete album model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Album.php:36
2015-02-25 22:40:29 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Album.php(36): Kohana_ORM->delete()
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(228): Model_Album->delete_album('72')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_delete_album()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Album.php:36
2015-02-25 22:41:43 --- EMERGENCY: ErrorException [ 2 ]: unlink(/users/1/img/md/3958_1424912571.jpg): No such file or directory ~ APPPATH/classes/Controller/Album.php [ 232 ] in file:line
2015-02-25 22:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/users/1...', '/Applications/X...', 232, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(232): unlink('/users/1/img/md...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_delete_album()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-25 22:44:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Controller/Album.php [ 232 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:232
2015-02-25 22:44:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(232): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 232, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:232
2015-02-25 22:47:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Album.php [ 228 ] in file:line
2015-02-25 22:47:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 22:47:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Album.php [ 228 ] in file:line
2015-02-25 22:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 22:50:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Controller/Album.php [ 236 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:236
2015-02-25 22:50:34 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(236): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 236, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:236
2015-02-25 23:29:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH/classes/Controller/Album.php [ 147 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:29:08 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 147, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:32:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH/classes/Controller/Album.php [ 147 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:32:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 147, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:35:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH/classes/Controller/Album.php [ 147 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:35:39 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 147, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:36:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH/classes/Controller/Album.php [ 147 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147
2015-02-25 23:36:04 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 147, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:147