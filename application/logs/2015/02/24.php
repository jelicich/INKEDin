<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-24 17:19:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\photo.php [ 135 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:135
2015-02-24 17:19:41 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 135, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:135
2015-02-24 17:29:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\photo.php [ 135 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:135
2015-02-24 17:29:36 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(135): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 135, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:135
2015-02-24 17:32:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:32:19 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(31): Kohana_ORM->find()
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Model_Photo->update_photo(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:41:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\photo.php [ 137 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 17:41:56 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 137, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 17:43:09 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:43:09 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(31): Kohana_ORM->find()
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Model_Photo->update_photo(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:45:02 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:45:02 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php(31): Kohana_ORM->find()
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Model_Photo->update_photo(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Model\Photo.php:31
2015-02-24 17:57:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Controller\photo.php [ 137 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 17:57:45 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 137, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 17:59:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Controller\photo.php [ 137 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 17:59:31 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 137, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:137
2015-02-24 18:04:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\photo.php [ 134 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:134
2015-02-24 18:04:00 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php(134): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\xampp\htdocs...', 134, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Photo->action_photo_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\photo.php:134
2015-02-24 20:23:32 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT `album`.*, `photos`.*, `album`.`id` AS `id`, `album`.`name` AS `name`, `album`.`user_id` AS `user_id`, `album`.`date` AS `date` FROM `albums` AS `album` JOIN `photos` ON (`album`.`id` = `photos`.`album_id`) WHERE `user_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-24 20:23:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `album`....', 'Model_Album', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Album.php(21): Kohana_ORM->find_all()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(174): Model_Album->get_albums_by_user('1')
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_save_album_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-24 20:25:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH/views/album/albumlistview.php [ 5 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/albumlistview.php:5
2015-02-24 20:25:12 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/albumlistview.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 5, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(178): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_save_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/album/albumlistview.php:5
2015-02-24 23:50:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photos ~ APPPATH/classes/Controller/Album.php [ 166 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:166
2015-02-24 23:50:40 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php(166): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 166, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Album->action_save_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Album.php:166