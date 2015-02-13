<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-13 00:01:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2015-02-13 00:01:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 00:57:36 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Model/User.php [ 27 ] in file:line
2015-02-13 00:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 01:12:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2015-02-13 01:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 01:12:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:12:19 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(107): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(51): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:14:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:14:21 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(107): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(51): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:17:14 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php:461
2015-02-13 01:17:14 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 461, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(20): Kohana_Database_Query->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(33): Model_User::unique_email(Object(Validation))
#6 [internal function]: Model_User::equals_email(Object(Validation), 'jelicich.e@gmai...', 'jelicich.e@gmai...')
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(48): Kohana_Validation->check()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php:461
2015-02-13 01:17:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:17:31 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(107): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(51): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:23:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:23:42 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(107): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(51): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:25:17 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php:461
2015-02-13 01:25:17 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 461, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(20): Kohana_Database_Query->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(33): Model_User::unique_email(Object(Validation))
#6 [internal function]: Model_User::equals_email(Object(Validation), Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(48): Kohana_Validation->check()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database.php:461
2015-02-13 01:27:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Model/User.php [ 27 ] in file:line
2015-02-13 01:27:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 01:27:52 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/User.php [ 27 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:27
2015-02-13 01:27:52 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(27): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 27, Array)
#1 [internal function]: Model_User::equals_email('jelicich.e@gmai...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(48): Kohana_Validation->check()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:27
2015-02-13 01:29:28 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/User.php [ 27 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:27
2015-02-13 01:29:28 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(27): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 27, Array)
#1 [internal function]: Model_User::equals_email('jelicich.e@gmai...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(48): Kohana_Validation->check()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:27
2015-02-13 01:31:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:31:31 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(108): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(50): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:32:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:32:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(110): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(50): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:32:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:32:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(108): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(50): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:33:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:33:06 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(108): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(50): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:33:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 01:33:26 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(108): Kohana_ORM->__get('request')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(50): Model_User->update_account(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-13 02:34:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/User.php [ 61 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:61
2015-02-13 02:34:42 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 61, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php:61