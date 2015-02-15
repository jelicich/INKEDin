<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-15 15:16:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'styles.style_id' in 'field list' [ SELECT `styles`.`style_id` FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) WHERE `userstyles`.`user_id` = '3' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-15 15:16:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(92): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-15 15:17:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/classes/Model/User.php [ 99 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:99
2015-02-15 15:17:51 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 99, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:99
2015-02-15 15:47:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/User.php [ 185 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 15:47:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(185): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 185, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 15:48:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/User.php [ 185 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 15:48:04 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(185): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 185, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 15:58:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/User.php [ 185 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 15:58:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(185): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 185, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(131): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:185
2015-02-15 16:01:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Model/User.php [ 191 ] in file:line
2015-02-15 16:01:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 16:15:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/User.php [ 187 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:187
2015-02-15 16:15:51 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(187): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 187, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(130): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:187
2015-02-15 16:18:34 --- EMERGENCY: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH/classes/Model/User.php [ 187 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:187
2015-02-15 16:18:34 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(187): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Applications/X...', 187, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(130): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:187
2015-02-15 16:24:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:202
2015-02-15 16:24:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(202): Kohana_ORM->find()
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(130): Model_User->update_about(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_User->action_update_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:202