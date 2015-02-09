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