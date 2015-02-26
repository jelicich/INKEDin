<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-26 12:07:33 --- CRITICAL: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH\classes\Controller\photo.php [ 52 ] in file:line
2015-02-26 12:07:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', 'E:\xampp\htdocs...', 52, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(52): mkdir('./users/1/img/r...', 511, true)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-26 12:07:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH\views\user\myaccountview.php [ 176 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:176
2015-02-26 12:07:57 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 176, Array)
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
2015-02-26 12:08:23 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM `albums` WHERE `id` = '94' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 12:08:23 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `al...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\application\classes\Model\Album.php(36): Kohana_ORM->delete()
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(228): Model_Album->delete_album('94')
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_delete_album()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 12:08:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 225 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:225
2015-02-26 12:08:28 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(225): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 225, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:225
2015-02-26 12:09:05 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM `albums` WHERE `id` = '94' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 12:09:05 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `al...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\application\classes\Model\Album.php(36): Kohana_ORM->delete()
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(228): Model_Album->delete_album('94')
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_delete_album()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 12:45:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete photo model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:46
2015-02-26 12:45:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(46): Kohana_ORM->delete()
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(171): Model_Photo->delete_photo(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_save_album_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:46
2015-02-26 12:45:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete photo model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:46
2015-02-26 12:45:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(46): Kohana_ORM->delete()
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(171): Model_Photo->delete_photo(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_save_album_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:46
2015-02-26 14:47:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\album.php [ 264 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:264
2015-02-26 14:47:06 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(264): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 264, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_add_photos()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:264
2015-02-26 15:23:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:31 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:33 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\album.php [ 147 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147
2015-02-26 15:23:34 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 147, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:147