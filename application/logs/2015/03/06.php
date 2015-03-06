<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-06 00:23:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/profile/profileaboutview.php [ 83 ] in file:line
2015-03-06 00:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-06 00:32:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/profile/aboutview.php [ 2 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/aboutview.php:2
2015-03-06 00:32:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/aboutview.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 2, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(69): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/aboutview.php:2
2015-03-06 00:48:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Profile.php [ 21 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:21
2015-03-06 00:48:47 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 21, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Profile->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:21
2015-03-06 00:52:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: albums ~ APPPATH/views/profile/albumsview.php [ 6 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php:6
2015-03-06 00:52:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 6, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(69): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php:6
2015-03-06 00:53:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: albums ~ APPPATH/views/profile/albumsview.php [ 6 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php:6
2015-03-06 00:53:14 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 6, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(69): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/albumsview.php:6
2015-03-06 01:10:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Model/Photo.php [ 47 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Photo.php:47
2015-03-06 01:10:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Photo.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 47, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php(69): Model_Photo->get_photos_by_album_and_user('4', '1')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Profile->action_album()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Model/Photo.php:47
2015-03-06 01:13:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/profile/photosview.php [ 2 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/photosview.php:2
2015-03-06 01:13:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/photosview.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 2, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(69): Kohana_View->__toString()
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/photosview.php:2
2015-03-06 12:07:49 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: custom_styles ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:78
2015-03-06 12:07:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php(78): Kohana_View->__get('custom_styles')
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(84): Controller_Profile->action_album()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:78
2015-03-06 17:09:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$v' (T_VARIABLE) ~ APPPATH/classes/Controller/Profile.php [ 50 ] in file:line
2015-03-06 17:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-06 17:09:56 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Controller/Profile.php [ 52 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:52
2015-03-06 17:09:56 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php(52): Kohana_Core::error_handler(2, 'Division by zer...', '/Applications/X...', 52, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Profile->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:52
2015-03-06 17:12:30 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Controller/Profile.php [ 53 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:53
2015-03-06 17:12:30 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php(53): Kohana_Core::error_handler(2, 'Division by zer...', '/Applications/X...', 53, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(69): Controller_Profile->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/classes/Controller/Profile.php:53
2015-03-06 17:13:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rating ~ APPPATH/views/profile/profileview.php [ 44 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php:44
2015-03-06 17:13:29 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 44, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php:44
2015-03-06 17:14:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/views/profile/profileview.php [ 47 ] in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php:47
2015-03-06 17:14:29 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 47, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(62): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/View.php(359): Kohana_View::capture('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/INKEDin/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/INKEDin/application/views/profile/profileview.php:47