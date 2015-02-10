<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-07 13:00:04 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:00:04 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Index.php(21): Kohana_Session::instance()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:00:08 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:00:08 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Index.php(21): Kohana_Session::instance()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:02:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:02:28 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Index.php(21): Kohana_Session::instance()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Session.php:125
2015-02-07 13:06:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:14:36 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:17:01 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:17:16 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:17:31 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:24:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:46:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:46:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 13:47:07 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:03:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Master.php [ 27 ] in file:line
2015-02-07 14:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 14:04:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH/classes/Controller/Master.php [ 43 ] in file:line
2015-02-07 14:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 14:04:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH/classes/Controller/Master.php [ 43 ] in file:line
2015-02-07 14:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 14:07:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH/classes/Controller/Master.php [ 43 ] in file:line
2015-02-07 14:07:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 14:10:43 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:10:52 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:10:53 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:11:27 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:11:27 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:12:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:12:15 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:12:49 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:15:13 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:15:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:16:03 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:16:03 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:16:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:16:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:16:10 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:20:20 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:20:33 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:20:33 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:32:36 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:32:45 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:34:46 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:34:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:35:56 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:36:02 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:37:19 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:37:24 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:37:48 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2015-02-07 14:38:02 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line