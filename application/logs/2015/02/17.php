<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 00:43:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 223 ] in file:line
2015-02-17 00:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 00:56:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: checked ~ APPPATH/views/user/myaccountview.php [ 135 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:135
2015-02-17 00:56:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 135, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:135
2015-02-17 00:59:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: styles ~ APPPATH/classes/Model/User.php [ 186 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:186
2015-02-17 00:59:10 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(186): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 186, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:186
2015-02-17 00:59:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: styles ~ APPPATH/classes/Model/User.php [ 186 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:186
2015-02-17 00:59:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(186): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 186, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:186
2015-02-17 01:01:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: styles ~ APPPATH/classes/Model/User.php [ 183 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:183
2015-02-17 01:01:21 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 183, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:183
2015-02-17 01:01:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: checked ~ APPPATH/views/user/myaccountview.php [ 136 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:136
2015-02-17 01:01:48 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 136, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:136
2015-02-17 17:25:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/editalbumview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-17 17:25:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('user/editalbumv...')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/editalbumv...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(253): Kohana_View::factory('user/editalbumv...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_load_album_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-17 17:25:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/editalbumview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-17 17:25:40 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('user/editalbumv...')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/editalbumv...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(253): Kohana_View::factory('user/editalbumv...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_load_album_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-17 17:27:12 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/User.php [ 254 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:254
2015-02-17 17:27:12 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(254): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 254, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:254
2015-02-17 17:27:30 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/User.php [ 254 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:254
2015-02-17 17:27:30 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(254): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 254, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_load_album_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:254
2015-02-17 17:30:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH/views/user/editalbumview.php [ 4 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/editalbumview.php:4
2015-02-17 17:30:29 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/editalbumview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 4, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(256): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_load_album_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/editalbumview.php:4