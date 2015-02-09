<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-09 00:19:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view views/registerview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 00:19:55 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('views/registerv...')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('views/registerv...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(9): Kohana_View::factory('views/registerv...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 00:20:51 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:10
2015-02-09 00:20:51 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(10): Kohana_View->__get('head')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:10
2015-02-09 00:21:00 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:10
2015-02-09 00:21:00 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(10): Kohana_View->__get('head')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:10
2015-02-09 00:22:02 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:16
2015-02-09 00:22:02 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(16): Kohana_View->__get('head')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:16
2015-02-09 00:22:03 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:16
2015-02-09 00:22:03 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(16): Kohana_View->__get('head')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:16
2015-02-09 00:31:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Register.php [ 35 ] in file:line
2015-02-09 00:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:32:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/registerview.php [ 31 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php:31
2015-02-09 00:32:21 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 31, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php:31
2015-02-09 00:33:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Register.php [ 23 ] in file:line
2015-02-09 00:33:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:34:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Register.php [ 23 ] in file:line
2015-02-09 00:34:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:35:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH/classes/Controller/Register.php [ 50 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:50
2015-02-09 00:35:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 50, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:50
2015-02-09 00:35:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 00:35:28 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('register')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('register', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(53): Kohana_View::factory('register')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 00:35:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH/views/registerview.php [ 4 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php:4
2015-02-09 00:35:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 4, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(53): Kohana_Response->body(Object(View))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/registerview.php:4
2015-02-09 00:35:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Register.php [ 54 ] in file:line
2015-02-09 00:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:37:51 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Register.php [ 53 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:53
2015-02-09 00:37:51 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(53): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/X...', 53, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:53
2015-02-09 00:49:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Register.php [ 43 ] in file:line
2015-02-09 00:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:54:28 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::max_length() ~ SYSPATH/classes/Kohana/Valid.php [ 61 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 00:54:28 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php(61): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 61, Array)
#1 [internal function]: Kohana_Valid::max_length('60')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(45): Kohana_Validation->check()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 00:56:18 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::max_length() ~ SYSPATH/classes/Kohana/Valid.php [ 61 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 00:56:18 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php(61): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 61, Array)
#1 [internal function]: Kohana_Valid::max_length('60')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(45): Kohana_Validation->check()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 00:57:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::max_length() ~ SYSPATH/classes/Kohana/Valid.php [ 61 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 00:57:22 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php(61): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 61, Array)
#1 [internal function]: Kohana_Valid::max_length('60')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(45): Kohana_Validation->check()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Valid.php:61
2015-02-09 01:08:00 --- EMERGENCY: Kohana_Exception [ 0 ]: INSERT INTO syntax does not allow table aliasing ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 56 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:34
2015-02-09 01:08:00 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(34): Kohana_Database_Query_Builder_Insert->table(Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/DB.php(91): Kohana_Database_Query_Builder_Insert->__construct(Array, NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/user.php(18): Kohana_DB::insert(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(48): Model_User->register(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:34
2015-02-09 01:21:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Register.php [ 49 ] in file:line
2015-02-09 01:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:21:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on array ~ APPPATH/classes/Controller/Register.php [ 48 ] in file:line
2015-02-09 01:21:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:29:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Register.php [ 67 ] in file:line
2015-02-09 01:29:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:29:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Register.php [ 67 ] in file:line
2015-02-09 01:29:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:29:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Register.php [ 67 ] in file:line
2015-02-09 01:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:31:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view successview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:31:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('successview')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('successview', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(67): Kohana_View::factory('successview')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:31:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view successview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:31:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('successview')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('successview', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(67): Kohana_View::factory('successview')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:32:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view successview could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:32:22 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(145): Kohana_View->set_filename('successview')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(30): Kohana_View->__construct('successview', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(67): Kohana_View::factory('successview')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php:145
2015-02-09 01:34:33 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Register.php [ 67 ] in file:line
2015-02-09 01:34:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:35:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH/views/successview.php [ 4 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/successview.php:4
2015-02-09 01:35:12 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/successview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 4, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/successview.php:4
2015-02-09 01:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to private method Controller_Master::is_logged_in() from context 'Controller_Register' ~ APPPATH/classes/Controller/Register.php [ 68 ] in file:line
2015-02-09 01:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:37:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: common_scripts ~ APPPATH/classes/Controller/Register.php [ 81 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:81
2015-02-09 01:37:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 81, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Register->action_success()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Register.php:81
2015-02-09 10:57:55 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:57:55 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:58:53 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:58:53 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:24 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:24 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:26 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:26 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:30 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:30 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:31 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 10:59:31 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:02:18 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:02:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:06:57 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:06:57 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:07:40 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:07:40 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:08:08 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:08:08 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\master.php(13): Kohana_Session::instance()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\index.php(17): Controller_Master->before()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\Session.php:125
2015-02-09 11:25:43 --- CRITICAL: Database_Exception [ 1051 ]: Unknown table 'users' [ SELECT `users`.*, `photos`.*, `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-09 11:25:43 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\auth.php(27): Kohana_ORM->find()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\modules\database\classes\Kohana\Database\Query.php:251
2015-02-09 11:56:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\views\common\head.php [ 6 ] in file:line
2015-02-09 11:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 11:56:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: custom_scripts ~ APPPATH\classes\Controller\register.php [ 16 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php:16
2015-02-09 11:56:22 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 16, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php:16
2015-02-09 12:14:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\common\header_logged.php [ 38 ] in file:line
2015-02-09 12:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 14:32:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\register.php [ 115 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php:115
2015-02-09 14:32:18 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 115, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Register->action_activate()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php:115
2015-02-09 14:51:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::set(), called in E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php on line 105 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 714 ] in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:714
2015-02-09 14:51:11 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php(714): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\xampp\htdocs...', 714, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\register.php(105): Kohana_ORM->set(Array)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_Register->action_activate()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\modules\orm\classes\Kohana\ORM.php:714
2015-02-09 14:52:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ APPPATH\classes\Controller\register.php [ 106 ] in file:line
2015-02-09 14:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line