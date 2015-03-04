<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-02 15:18:57 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('6932_1425320335.png', '0', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-02 15:18:57 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(110): Model_Photo->save_photo('6932_1425320335...', '0', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-02 16:09:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\photo.php [ 115 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:115
2015-03-02 16:09:35 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(115): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 115, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:115
2015-03-02 16:18:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\photo.php [ 115 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:115
2015-03-02 16:18:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(115): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 115, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:115
2015-03-02 16:19:30 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`inkedin`.`photos`, CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE) [ INSERT INTO `photos` (`photo`, `album_id`, `user_id`) VALUES ('5292_1425323967.png', '', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-03-02 16:19:30 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(10): Kohana_ORM->save()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(119): Model_Photo->save_photo('5292_1425323967...', '', '1')
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_upload_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251