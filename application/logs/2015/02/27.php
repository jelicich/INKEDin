<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-27 18:46:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: profile_pic_view ~ APPPATH/views/user/myaccountview.php [ 191 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:191
2015-02-27 18:46:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 191, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:191
2015-02-27 19:16:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/Controller/User.php [ 22 ] in file:line
2015-02-27 19:16:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line