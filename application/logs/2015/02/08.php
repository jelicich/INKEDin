<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-08 13:45:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::to_array() ~ APPPATH/classes/Controller/Auth.php [ 23 ] in file:line
2015-02-08 13:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 13:46:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Auth.php [ 23 ] in file:line
2015-02-08 13:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 14:57:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'users.photo_id' in 'on clause' [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:57:45 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(24): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:57:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'users.photo_id' in 'on clause' [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` JOIN `photos` ON (`users`.`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:57:48 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(24): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:59:33 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `photos` ON (`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `passwor' at line 1 [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` INNER JOIN JOIN `photos` ON (`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:59:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(24): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:59:35 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `photos` ON (`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `passwor' at line 1 [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` INNER JOIN JOIN `photos` ON (`photo_id` = `photos`.`id`) WHERE `email` IS NULL AND `password` = 'da39a3ee5e6b4b0d3255bfef95601890afd80709' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 14:59:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(24): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 15:13:22 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`role` AS `role`, `user`.`about` AS `about`, `user`.`style_id` AS `style_id`, `user`.`phone` AS `phone`, `user`.`address` AS `address`, `user`.`rating_id` AS `rating_id`, `user`.`photo_id` AS `photo_id`, `user`.`city_id` AS `city_id`, `user`.`date` AS `date` FROM `users` AS `user` JOIN `photos` ON (`photo_id` = `id`) WHERE `email` = 'jelicich.e@gmail.com' AND `password` = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 15:13:22 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(25): Kohana_ORM->find()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Database/Query.php:251
2015-02-08 15:15:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The photos property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:15:25 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photos')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(27): Kohana_ORM->__get('photos')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:15:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:15:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photo')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(27): Kohana_ORM->__get('photo')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:20:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on string ~ APPPATH/classes/Controller/Auth.php [ 31 ] in file:line
2015-02-08 15:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:29:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on string ~ APPPATH/classes/Controller/Auth.php [ 32 ] in file:line
2015-02-08 15:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:31:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-08 15:31:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:31:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on string ~ APPPATH/classes/Controller/Auth.php [ 33 ] in file:line
2015-02-08 15:31:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:42:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Session_Database::$user ~ APPPATH/classes/Controller/Master.php [ 30 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Master.php:30
2015-02-08 15:42:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Master.php(30): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 30, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Index.php(17): Controller_Master->before()
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Master.php:30
2015-02-08 15:43:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Master.php [ 30 ] in file:line
2015-02-08 15:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:43:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:43:23 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photo')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(23): Kohana_ORM->__get('photo')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/homeview.php(15): Kohana_View->__toString()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:44:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:44:00 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photo')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(23): Kohana_ORM->__get('photo')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/homeview.php(15): Kohana_View->__toString()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:44:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:44:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photo')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(23): Kohana_ORM->__get('photo')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/homeview.php(15): Kohana_View->__toString()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:37:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Master.php [ 29 ] in file:line
2015-02-08 16:37:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 16:40:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:40:06 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('photo')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(24): Kohana_ORM->__get('photo')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/homeview.php(15): Kohana_View->__toString()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:49:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on array ~ APPPATH/classes/Controller/Auth.php [ 31 ] in file:line
2015-02-08 16:49:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 16:53:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Auth.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php:32
2015-02-08 16:53:18 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Auth.php:32
2015-02-08 17:03:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lastname ~ APPPATH/views/common/header_logged.php [ 25 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php:25
2015-02-08 17:03:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 25, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/homeview.php(15): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/common/header_logged.php:25