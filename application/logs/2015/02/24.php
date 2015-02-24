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