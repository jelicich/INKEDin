<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-25 00:41:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: create_album_view ~ APPPATH/views/user/myaccountview.php [ 176 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:176
2015-02-25 00:41:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 176, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Album))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/user/myaccountview.php:176