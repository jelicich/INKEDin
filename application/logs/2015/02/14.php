<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-14 17:25:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on array ~ APPPATH/classes/Controller/User.php [ 19 ] in file:line
2015-02-14 17:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 17:27:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH/database/classes/Kohana/Database/Result.php [ 258 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Style.php:10
2015-02-14 17:27:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Style.php(10): Kohana_Database_Result->offsetSet(0, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/User.php(18): Model_Style->get_styles()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_User->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Style.php:10
2015-02-14 17:42:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'photos.user_id' in 'on clause' [ SELECT `user`.*, `photos`.*, `styles`.*, `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`availability` AS `availability`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`hash` AS `hash`, `user`.`active` AS `active`, `user`.`date` AS `date` FROM `users` AS `user` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) LEFT JOIN `userstyles` ON (`user`.`id` = `photos`.`user_id`) LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 17:42:39 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(65): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:02:43 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'styles' [ SELECT `user`.*, `photos`.*, `styles`.*, `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`availability` AS `availability`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`hash` AS `hash`, `user`.`active` AS `active`, `user`.`date` AS `date` FROM `users` AS `user` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:02:43 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(65): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:06:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/common/header_logged.php [ 26 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php:26
2015-02-14 18:06:26 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 26, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(15): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php:26
2015-02-14 18:31:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Model/User.php [ 86 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:86
2015-02-14 18:31:04 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 86, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:86
2015-02-14 18:31:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Model/User.php [ 76 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:76
2015-02-14 18:31:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 76, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:76
2015-02-14 18:31:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.photo_id' in 'on clause' [ SELECT `users`.*, `photos`.*, `styles`.* FROM `users`, `userstyles`, `styles` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `userstyles`.`user_id` = '3' AND `userstyles`.`style_id` = 'styles.id' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:31:56 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(91): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:33:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'users.photo_id' in 'on clause' [ SELECT `users`.*, `photos`.*, `styles`.* FROM `users`, `userstyles`, `styles` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `userstyles`.`user_id` = '3' AND `userstyles`.`style_id` = 'styles.id' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:33:41 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(91): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:42:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'where clause' [ SELECT `users`.*, `photos`.*, `styles`.* FROM `users`, `userstyles`, `styles`, `photos` WHERE `user`.`id` = '3' AND `userstyles`.`user_id` = '3' AND `userstyles`.`style_id` = 'styles.id' AND `users`.`photo_id` = 'photos.id' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 18:42:25 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:06:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.photo_id' in 'on clause' [ SELECT `styles`.* FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `users`.`id` IS NULL) AS `users` ON (`userstyles`.`user_id` = `users`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:06:16 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(86): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:11:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.photo_id' in 'on clause' [ SELECT `styles`.* FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3') AS `users` ON (`userstyles`.`user_id` = `users`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:11:20 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(86): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:12:01 --- EMERGENCY: Database_Exception [ 1060 ]: Duplicate column name 'id' [ SELECT `styles`.* FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3') AS `users` ON (`userstyles`.`user_id` = `users`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:12:01 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(86): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:12:29 --- EMERGENCY: Database_Exception [ 1060 ]: Duplicate column name 'id' [ SELECT `styles`.* FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3') AS `users` ON (`userstyles`.`user_id` = `users`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:12:29 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(86): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:15:20 --- EMERGENCY: Database_Exception [ 1060 ]: Duplicate column name 'id' [ SELECT `styles`.* FROM `userstyles` INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3') AS `users` ON (`userstyles`.`user_id` = `users`.`id`) LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:15:20 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(88): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:16:11 --- EMERGENCY: Database_Exception [ 1060 ]: Duplicate column name 'id' [ SELECT `styles`.*, `userstyles`.* FROM `userstyles` LEFT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) INNER JOIN (SELECT `users`.*, `photos`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3') AS `users` ON (`userstyles`.`user_id` = `users`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:16:11 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(87): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:22:08 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'userstyles.user_ide' in 'where clause' [ SELECT `styles`.*, `userstyles`.* FROM `userstyles` RIGHT JOIN `styles` ON (`userstyles`.`style_id` = `styles`.`id`) WHERE `userstyles`.`user_ide` = '3' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:22:08 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `styles`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(88): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:33:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:33:06 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_ORM->find()
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:33:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:33:52 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_ORM->find()
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:34:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:34:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_ORM->find()
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:36:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find() ~ APPPATH/classes/Model/User.php [ 94 ] in file:line
2015-02-14 19:36:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 19:36:38 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'styles' [ SELECT `users`.*, `photos`.*, `styles`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) LEFT JOIN `userstyles` ON (`users`.`id` = `userstyles`.`user_id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:36:38 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(95): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:37:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Model/User.php [ 100 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:100
2015-02-14 19:37:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 100, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:100
2015-02-14 19:41:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Select::on(), called in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php on line 100 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php [ 136 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Select.php:136
2015-02-14 19:41:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Select.php(136): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 136, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(100): Kohana_Database_Query_Builder_Select->on('userstyles.styl...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query/Builder/Select.php:136
2015-02-14 19:44:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/User.php [ 95 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:95
2015-02-14 19:44:39 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(95): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 95, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:95
2015-02-14 19:45:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/User.php [ 95 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:95
2015-02-14 19:45:10 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(95): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 95, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:95
2015-02-14 19:47:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/User.php [ 94 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:94
2015-02-14 19:47:42 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(94): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 94, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:94
2015-02-14 19:50:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Model/User.php [ 93 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:50:27 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 93, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:50:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'field list' [ SELECT `users`.*, `user`.`id`, `photos`.* FROM `users` LEFT JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `users`.`id` = '3' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:50:59 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(92): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:51:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Model/User.php [ 93 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:51:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 93, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php:93
2015-02-14 19:56:40 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'styles' [ SELECT `user`.*, `photos`.*, `styles`.*, `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`availability` AS `availability`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`hash` AS `hash`, `user`.`active` AS `active`, `user`.`date` AS `date` FROM `users` AS `user` LEFT JOIN `photos` ON (`user`.`photo_id` = `photos`.`id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 19:56:40 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/User.php(74): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(15): Model_User->login_user('jelicich.e@gmai...', '7110eda4d09e062...')
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-14 20:13:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/user/myaccountview.php [ 117 ] in file:line
2015-02-14 20:13:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:15:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/user/myaccountview.php [ 117 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:117
2015-02-14 20:15:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 117, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:117
2015-02-14 20:19:29 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072000 bytes) ~ APPPATH/views/user/myaccountview.php [ 128 ] in file:line
2015-02-14 20:19:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:19:36 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072000 bytes) ~ APPPATH/views/user/myaccountview.php [ 128 ] in file:line
2015-02-14 20:19:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:19:49 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072000 bytes) ~ APPPATH/views/user/myaccountview.php [ 128 ] in file:line
2015-02-14 20:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:21:57 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072000 bytes) ~ APPPATH/views/user/myaccountview.php [ 128 ] in file:line
2015-02-14 20:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:23:52 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/views/user/myaccountview.php [ 116 ] in file:line
2015-02-14 20:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:24:10 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/views/user/myaccountview.php [ 113 ] in file:line
2015-02-14 20:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-14 20:24:14 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/views/user/myaccountview.php [ 113 ] in file:line
2015-02-14 20:24:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line