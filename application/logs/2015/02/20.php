<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-20 13:11:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Model\Album.php [ 9 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Album.php:9
2015-02-20 13:11:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Album.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 9, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(148): Model_Album->create_album(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_create_album()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Album.php:9
2015-02-20 13:20:18 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\album.php [ 149 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:149
2015-02-20 13:20:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(149): Kohana_Core::error_handler(8, 'Array to string...', 'E:\xampp\htdocs...', 149, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php:149
2015-02-20 14:29:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'photos.album_id' in 'on clause' [ SELECT `photo`.*, `albums`.*, `photo`.`id` AS `id`, `photo`.`photo` AS `photo`, `photo`.`tags` AS `tags`, `photo`.`description` AS `description`, `photo`.`album_id` AS `album_id`, `photo`.`user_id` AS `user_id`, `photo`.`date` AS `date` FROM `photos` AS `photo` LEFT JOIN `albums` ON (`photos`.`album_id` = `albums`.`id`) WHERE `album_id` = '28' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 14:29:14 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `photo`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(20): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\album.php(147): Model_Photo->getPhotosByAlbum('28')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Album->action_load_album_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 14:35:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::findAll() ~ APPPATH\classes\Model\Photo.php [ 20 ] in file:line
2015-02-20 14:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-20 14:59:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photos ~ APPPATH\views\user\editalbumview.php [ 14 ] in E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php:14
2015-02-20 14:59:48 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 14, Array)
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
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php:14
2015-02-20 15:02:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photos ~ APPPATH\views\user\editalbumview.php [ 15 ] in E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php:15
2015-02-20 15:02:53 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 15, Array)
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
#12 {main} in E:\xampp\htdocs\INKEDin\application\views\user\editalbumview.php:15