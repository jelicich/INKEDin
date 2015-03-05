<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 12:46:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\master.php [ 57 ] in file:line
2015-03-05 12:46:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 13:03:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\user\myaccountview.php [ 4 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 13:03:15 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 4, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Core.php(668): Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(263): Kohana_Core::find_file('views', Object(View))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory(Object(View))
#9 E:\xampp\htdocs\INKEDin\application\classes\Controller\ajax.php(28): Kohana_Controller_Template->before()
#10 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(14): Controller_Ajax->action_index()
#11 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#17 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 13:03:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\user\myaccountview.php [ 4 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 13:03:15 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 4, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\I18n.php(164): strtr('The requested v...', Array)
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Kohana\Exception.php(53): __('The requested v...', Array)
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(267): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory(Object(View))
#11 E:\xampp\htdocs\INKEDin\application\classes\Controller\ajax.php(28): Kohana_Controller_Template->before()
#12 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(14): Controller_Ajax->action_index()
#13 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#19 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 13:03:15 --- CRITICAL: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: head
	
		APPPATH\views\user\myaccountview.php [ 4 ]
		1 &lt;!doctype html&gt;
2 &lt;html&gt;
3 &lt;head&gt;
4 	&lt;?php echo $head ?&gt;
5 
6 	&lt;!-- Load here view specific css and scripts --&gt;
7 
8 
9 &lt;/head&gt;
		
					
				
					
													APPPATH\views\user\myaccountview.php [ 4 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(24) "Undefined variable: head"
						
											
							2
							string(64) "E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php"
						
											
							3
							integer 4
						
											
							4
							array(2) (
    "kohana_view_filename" => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													1 &lt;!doctype html&gt;
2 &lt;html&gt;
3 &lt;head&gt;
4 	&lt;?php echo $head ?&gt;
5 
6 	&lt;!-- Load here view specific css and scripts --&gt;
7 
8 
9 &lt;/head&gt;

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(64) "E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH\classes\Kohana\I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH\classes\Kohana\Kohana\Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 267 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
        protected _data => array(0) 
    }
)
						
										
				
													262 	{
263 		if (($path = Kohana::find_file('views', $file)) === FALSE)
264 		{
265 			throw new View_Exception('The requested view :file could not be found', array(
266 				':file' =&gt; $file,
267 			));
268 		}
269 
270 		// Store the file path locally
271 		$this-&gt;_file = $path;
272 

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 145 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
    protected _data => array(0) 
}
						
										
				
													140 	 */
141 	public function __construct($file = NULL, array $data = NULL)
142 	{
143 		if ($file !== NULL)
144 		{
145 			$this-&gt;set_filename($file);
146 		}
147 
148 		if ($data !== NULL)
149 		{
150 			// Add the values to the current data

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													SYSPATH\classes\Kohana\Controller\Template.php [ 33 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
    protected _data => array(0) 
}
						
										
				
													28 		parent::before();
29 
30 		if ($this-&gt;auto_render === TRUE)
31 		{
32 			// Load the template
33 			$this-&gt;template = View::factory($this-&gt;template);
34 		}
35 	}
36 
37 	/**
38 	 * Assigns the template [View] as the request response.

							
								
				
					
													APPPATH\classes\Controller\ajax.php [ 28 ]
											
					&raquo;
					Kohana_Controller_Template->before()
				
													23         $template = $this-&gt;template; 
24         
25         $common_scripts = Kohana::$config-&gt;load('common_assets')-&gt;get('scripts');
26         $common_styles = Kohana::$config-&gt;load('common_assets')-&gt;get('styles'); 
27         
28         parent::before();
29         
30         if($this-&gt;is_logged_in() != true)
31         {
32             $this-&gt;template-&gt;header = View::factory('common/header');    
33         }

							
								
				
					
													APPPATH\classes\Controller\user.php [ 14 ]
											
					&raquo;
					Controller_Ajax->action_index()
				
													 9         parent::before(); 
10     }*/
11 
12 	public function action_index()
13 	{
14 		parent::action_index();
15 		
16 		if($this-&gt;is_logged_in())
17         {
18         	$this-&gt;template-&gt;head-&gt;title = "INKEDin - Mi cuenta";
19         	$this-&gt;template-&gt;head-&gt;custom_scripts = HTML::script('/assets/common/app/js/jquery.validate.min.js')

							
								
				
					
													SYSPATH\classes\Kohana\Controller.php [ 84 ]
											
					&raquo;
					Controller_User->action_index()
				
													79 				array(':uri' =&gt; $this-&gt;request-&gt;uri())
80 			)-&gt;request($this-&gt;request);
81 		}
82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_User(6) {
    public template => object View(2) {
        protected _file => string(64) "E:\xampp\htdocs\INKEDin\application\views\user/myaccountview.php"
        protected _data => array(0) 
    }
    public title => string(21) "INKEDin - Tattoo site"
    private model_user => object Model_User(35) {
        private session => object Session_Database(11) {
            protected _db => object Database_MySQL(6) {
                protected _connection_id => string(40) "e98693e293defee7604421beb1e2aed03a0fa182"
                protected _identifier => string(1) "`"
                public last_query => string(102) "SELECT `contents` AS `contents` FROM `sessions` WHERE `session_id` = '54f86f380ac7b7-14147538' LIMIT 1"
                protected _instance => string(7) "default"
                protected _connection => resource(mysql link)
                protected _config => array(5) (
                    "type" => string(5) "MySQL"
                    "connection" => array(3) (
                        "hostname" => string(9) "localhost"
                        "database" => string(7) "inkedin"
                        "persistent" => bool FALSE
                    )
                    "table_prefix" => string(0) ""
                    "charset" => string(4) "utf8"
                    "caching" => bool FALSE
                )
            }
            protected _table => string(8) "sessions"
            protected _columns => array(3) (
                "session_id" => string(10) "session_id"
                "last_active" => string(11) "last_active"
                "contents" => string(8) "contents"
            )
            protected _gc => integer 500
            protected _session_id => string(23) "54f86f380ac7b7-14147538"
            protected _update_id => string(23) "54f86f380ac7b7-14147538"
            protected _name => string(7) "session"
            protected _lifetime => integer 0
            protected _encrypted => bool FALSE
            protected _data => array(3) (
                "last_active" => integer 1425571146
                "logged_in" => bool TRUE
                "user" => array(23) (
                    "id" => string(1) "1"
                    "name" => string(7) "Esteban"
                    "last_name" => string(8) "Jelicich"
                    "email" => string(20) "jelicich.e@gmail.com"
                    "password" => string(40) "7110eda4d09e062aa5e4a390b0a572ac0d2c0220"
                    "role" => string(1) "1"
                    "about" => string(8) "MI about"
                    "availability" => string(4) "24 7"
                    "phone" => string(7) "1234555"
                    "address" => string(8) "asdf 123"
                    "rating_id" => NULL
                    "photo_id" => NULL
                    "province_id" => string(1) "2"
                    "city_id" => string(4) "5001"
                    "hash" => string(40) "81755a2845e39420c81902a3ce83dff1cfc782e7"
                    "active" => string(1) "1"
                    "date" => string(19) "2015-02-18 16:41:19"
                    "photo" => NULL
                    "tags" => NULL
                    "description" => NULL
                    "album_id" => NULL
                    "user_id" => NULL
                    "styles" => array(2) (
                        0 => array(2) (
                            "id" => string(1) "2"
                            "style" => string(10) "New School"
                        )
                        1 => array(2) (
                            "id" => string(1) "9"
                            "style" => string(5) "Celta"
                        )
                    )
                )
            )
            protected _destroyed => bool FALSE
        }
        protected _has_one => array(0) 
        protected _belongs_to => array(0) 
        protected _has_many => array(0) 
        protected _load_with => array(0) 
        protected _validation => NULL
        protected _object => array(17) (
            "id" => NULL
            "name" => NULL
            "last_name" => NULL
            "email" => NULL
            "password" => NULL
            "role" => NULL
            "about" => NULL
            "availability" => NULL
            "phone" => NULL
            "address" => NULL
            "rating_id" => NULL
            "photo_id" => NULL
            "province_id" => NULL
            "city_id" => NULL
            "hash" => NULL
            "active" => NULL
            "date" => NULL
        )
        protected _changed => array(0) 
        protected _original_values => array(0) 
        protected _related => array(0) 
        protected _valid => bool FALSE
        protected _loaded => bool FALSE
        protected _saved => bool FALSE
        protected _sorting => NULL
        protected _foreign_key_suffix => string(3) "_id"
        protected _object_name => string(4) "user"
        protected _object_plural => string(5) "users"
        protected _table_name => string(5) "users"
        protected _table_columns => array(17) (
            "id" => array(13) (
                "type" => string(3) "int"
                "min" => string(1) "0"
                "max" => string(10) "4294967295"
                "column_name" => string(2) "id"
                "column_default" => NULL
                "data_type" => string(12) "int unsigned"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 1
                "display" => string(2) "10"
                "comment" => string(0) ""
                "extra" => string(14) "auto_increment"
                "key" => string(3) "PRI"
                "privileges" => string(31) "select,insert,update,references"
            )
            "name" => array(12) (
                "type" => string(6) "string"
                "column_name" => string(4) "name"
                "column_default" => NULL
                "data_type" => string(7) "varchar"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 2
                "character_maximum_length" => string(2) "60"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "last_name" => array(12) (
                "type" => string(6) "string"
                "column_name" => string(9) "last_name"
                "column_default" => NULL
                "data_type" => string(7) "varchar"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 3
                "character_maximum_length" => string(2) "60"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "email" => array(12) (
                "type" => string(6) "string"
                "column_name" => string(5) "email"
                "column_default" => NULL
                "data_type" => string(7) "varchar"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 4
                "character_maximum_length" => string(3) "254"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "password" => array(13) (
                "type" => string(6) "string"
                "exact" => bool TRUE
                "column_name" => string(8) "password"
                "column_default" => NULL
                "data_type" => string(4) "char"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 5
                "character_maximum_length" => string(2) "40"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "role" => array(13) (
                "type" => string(3) "int"
                "min" => string(4) "-128"
                "max" => string(3) "127"
                "column_name" => string(4) "role"
                "column_default" => NULL
                "data_type" => string(7) "tinyint"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 6
                "display" => string(1) "1"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "about" => array(12) (
                "type" => string(6) "string"
                "character_maximum_length" => string(5) "65535"
                "column_name" => string(5) "about"
                "column_default" => NULL
                "data_type" => string(4) "text"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 7
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "availability" => array(12) (
                "type" => string(6) "string"
                "character_maximum_length" => string(5) "65535"
                "column_name" => string(12) "availability"
                "column_default" => NULL
                "data_type" => string(4) "text"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 8
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "phone" => array(12) (
                "type" => string(6) "string"
                "column_name" => string(5) "phone"
                "column_default" => NULL
                "data_type" => string(7) "varchar"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 9
                "character_maximum_length" => string(2) "20"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "address" => array(12) (
                "type" => string(6) "string"
                "column_name" => string(7) "address"
                "column_default" => NULL
                "data_type" => string(7) "varchar"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 10
                "character_maximum_length" => string(3) "100"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "rating_id" => array(13) (
                "type" => string(3) "int"
                "min" => string(1) "0"
                "max" => string(10) "4294967295"
                "column_name" => string(9) "rating_id"
                "column_default" => NULL
                "data_type" => string(12) "int unsigned"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 11
                "display" => string(2) "10"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(3) "MUL"
                "privileges" => string(31) "select,insert,update,references"
            )
            "photo_id" => array(13) (
                "type" => string(3) "int"
                "min" => string(1) "0"
                "max" => string(10) "4294967295"
                "column_name" => string(8) "photo_id"
                "column_default" => NULL
                "data_type" => string(12) "int unsigned"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 12
                "display" => string(2) "10"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(3) "MUL"
                "privileges" => string(31) "select,insert,update,references"
            )
            "province_id" => array(13) (
                "type" => string(3) "int"
                "min" => string(1) "0"
                "max" => string(5) "65535"
                "column_name" => string(11) "province_id"
                "column_default" => NULL
                "data_type" => string(17) "smallint unsigned"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 13
                "display" => string(1) "2"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(3) "MUL"
                "privileges" => string(31) "select,insert,update,references"
            )
            "city_id" => array(13) (
                "type" => string(3) "int"
                "min" => string(1) "0"
                "max" => string(10) "4294967295"
                "column_name" => string(7) "city_id"
                "column_default" => NULL
                "data_type" => string(12) "int unsigned"
                "is_nullable" => bool TRUE
                "ordinal_position" => integer 14
                "display" => string(1) "4"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(3) "MUL"
                "privileges" => string(31) "select,insert,update,references"
            )
            "hash" => array(13) (
                "type" => string(6) "string"
                "exact" => bool TRUE
                "column_name" => string(4) "hash"
                "column_default" => NULL
                "data_type" => string(4) "char"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 15
                "character_maximum_length" => string(2) "40"
                "collation_name" => string(15) "utf8_general_ci"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "active" => array(13) (
                "type" => string(3) "int"
                "min" => string(4) "-128"
                "max" => string(3) "127"
                "column_name" => string(6) "active"
                "column_default" => string(1) "0"
                "data_type" => string(7) "tinyint"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 16
                "display" => string(1) "1"
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
            "date" => array(10) (
                "type" => string(6) "string"
                "column_name" => string(4) "date"
                "column_default" => string(17) "CURRENT_TIMESTAMP"
                "data_type" => string(9) "timestamp"
                "is_nullable" => bool FALSE
                "ordinal_position" => integer 17
                "comment" => string(0) ""
                "extra" => string(0) ""
                "key" => string(0) ""
                "privileges" => string(31) "select,insert,update,references"
            )
        )
        protected _updated_column => NULL
        protected _created_column => NULL
        protected _serialize_columns => array(0) 
        protected _primary_key => string(2) "id"
        protected _primary_key_value => NULL
        protected _table_names_plural => bool TRUE
        protected _reload_on_wakeup => bool TRUE
        protected _db => object Database_MySQL(6) {
            protected _connection_id => string(40) "e98693e293defee7604421beb1e2aed03a0fa182"
            protected _identifier => string(1) "`"
            public last_query => string(102) "SELECT `contents` AS `contents` FROM `sessions` WHERE `session_id` = '54f86f380ac7b7-14147538' LIMIT 1"
            protected _instance => string(7) "default"
            protected _connection => resource(mysql link)
            protected _config => array(5) (
                "type" => string(5) "MySQL"
                "connection" => array(3) (
                    "hostname" => string(9) "localhost"
                    "database" => string(7) "inkedin"
                    "persistent" => bool FALSE
                )
                "table_prefix" => string(0) ""
                "charset" => string(4) "utf8"
                "caching" => bool FALSE
            )
        }
        protected _db_group => NULL
        protected _db_applied => array(0) 
        protected _db_pending => array(0) 
        protected _db_reset => bool TRUE
        protected _db_builder => NULL
        protected _with_applied => array(0) 
        protected _cast_data => array(0) 
        protected _errors_filename => string(4) "user"
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(5) "index"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "User"
        protected _action => string(5) "index"
        protected _uri => string(4) "user"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(1) (
            "session" => string(23) "54f86f380ac7b7-14147538"
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH\classes\Kohana\Request\Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(5) "index"
    protected _uri => string(4) "user"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => string(23) "54f86f380ac7b7-14147538"
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH\classes\Kohana\Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(5) "index"
    protected _uri => string(4) "user"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => string(23) "54f86f380ac7b7-14147538"
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT\index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (109)
		
			
								
					DOCROOT\index.php
				
								
					APPPATH\bootstrap.php
				
								
					SYSPATH\classes\Kohana\Core.php
				
								
					SYSPATH\classes\Kohana.php
				
								
					SYSPATH\classes\I18n.php
				
								
					SYSPATH\classes\Kohana\I18n.php
				
								
					SYSPATH\classes\HTTP.php
				
								
					SYSPATH\classes\Kohana\HTTP.php
				
								
					SYSPATH\classes\Kohana\Exception.php
				
								
					SYSPATH\classes\Kohana\Kohana\Exception.php
				
								
					SYSPATH\classes\Log.php
				
								
					SYSPATH\classes\Kohana\Log.php
				
								
					SYSPATH\classes\Config.php
				
								
					SYSPATH\classes\Kohana\Config.php
				
								
					SYSPATH\classes\Log\File.php
				
								
					SYSPATH\classes\Kohana\Log\File.php
				
								
					SYSPATH\classes\Log\Writer.php
				
								
					SYSPATH\classes\Kohana\Log\Writer.php
				
								
					SYSPATH\classes\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Source.php
				
								
					SYSPATH\classes\Cookie.php
				
								
					SYSPATH\classes\Kohana\Cookie.php
				
								
					SYSPATH\classes\Route.php
				
								
					SYSPATH\classes\Kohana\Route.php
				
								
					SYSPATH\classes\Request.php
				
								
					SYSPATH\classes\Kohana\Request.php
				
								
					SYSPATH\classes\HTTP\Request.php
				
								
					SYSPATH\classes\Kohana\HTTP\Request.php
				
								
					SYSPATH\classes\HTTP\Message.php
				
								
					SYSPATH\classes\Kohana\HTTP\Message.php
				
								
					SYSPATH\classes\Security.php
				
								
					SYSPATH\classes\Kohana\Security.php
				
								
					SYSPATH\classes\HTTP\Header.php
				
								
					SYSPATH\classes\Kohana\HTTP\Header.php
				
								
					SYSPATH\classes\Request\Client\Internal.php
				
								
					SYSPATH\classes\Kohana\Request\Client\Internal.php
				
								
					SYSPATH\classes\Request\Client.php
				
								
					SYSPATH\classes\Kohana\Request\Client.php
				
								
					SYSPATH\classes\Arr.php
				
								
					SYSPATH\classes\Kohana\Arr.php
				
								
					SYSPATH\classes\Response.php
				
								
					SYSPATH\classes\Kohana\Response.php
				
								
					SYSPATH\classes\HTTP\Response.php
				
								
					SYSPATH\classes\Kohana\HTTP\Response.php
				
								
					SYSPATH\classes\Profiler.php
				
								
					SYSPATH\classes\Kohana\Profiler.php
				
								
					APPPATH\classes\Controller\user.php
				
								
					APPPATH\classes\Controller\ajax.php
				
								
					SYSPATH\classes\Controller\Template.php
				
								
					SYSPATH\classes\Kohana\Controller\Template.php
				
								
					SYSPATH\classes\Controller.php
				
								
					SYSPATH\classes\Kohana\Controller.php
				
								
					SYSPATH\classes\View.php
				
								
					SYSPATH\classes\Kohana\View.php
				
								
					APPPATH\classes\Model\User.php
				
								
					MODPATH\orm\classes\ORM.php
				
								
					MODPATH\orm\classes\Kohana\ORM.php
				
								
					SYSPATH\classes\Model.php
				
								
					SYSPATH\classes\Kohana\Model.php
				
								
					SYSPATH\classes\Inflector.php
				
								
					SYSPATH\classes\Kohana\Inflector.php
				
								
					SYSPATH\config\inflector.php
				
								
					SYSPATH\classes\Config\Group.php
				
								
					SYSPATH\classes\Kohana\Config\Group.php
				
								
					MODPATH\database\classes\Database.php
				
								
					MODPATH\database\classes\Kohana\Database.php
				
								
					MODPATH\database\config\database.php
				
								
					APPPATH\config\database.php
				
								
					MODPATH\database\classes\Database\MySQL.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL.php
				
								
					MODPATH\database\classes\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Database\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\Result.php
				
								
					SYSPATH\classes\Session.php
				
								
					SYSPATH\classes\Kohana\Session.php
				
								
					SYSPATH\config\session.php
				
								
					MODPATH\database\config\session.php
				
								
					APPPATH\config\session.php
				
								
					MODPATH\database\classes\Session\Database.php
				
								
					MODPATH\database\classes\Kohana\Session\Database.php
				
								
					MODPATH\database\classes\DB.php
				
								
					MODPATH\database\classes\Kohana\DB.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Database\Query.php
				
								
					MODPATH\database\classes\Kohana\Database\Query.php
				
								
					APPPATH\config\common_assets.php
				
								
					SYSPATH\classes\HTML.php
				
								
					SYSPATH\classes\Kohana\HTML.php
				
								
					SYSPATH\classes\URL.php
				
								
					SYSPATH\classes\Kohana\URL.php
				
								
					SYSPATH\classes\UTF8.php
				
								
					SYSPATH\classes\Kohana\UTF8.php
				
								
					APPPATH\views\user\myaccountview.php
				
								
					SYSPATH\classes\Debug.php
				
								
					SYSPATH\classes\Kohana\Debug.php
				
								
					SYSPATH\classes\Date.php
				
								
					SYSPATH\classes\Kohana\Date.php
				
								
					SYSPATH\views\kohana\error.php
				
								
					SYSPATH\classes\View\Exception.php
				
								
					SYSPATH\classes\Kohana\View\Exception.php
				
							
		
				Loaded extensions (48)
		
			
								
					Core
				
								
					bcmath
				
								
					calendar
				
								
					ctype
				
								
					date
				
								
					ereg
				
								
					filter
				
								
					ftp
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mcrypt
				
								
					SPL
				
								
					odbc
				
								
					pcre
				
								
					Reflection
				
								
					session
				
								
					standard
				
								
					mysqlnd
				
								
					tokenizer
				
								
					zip
				
								
					zlib
				
								
					libxml
				
								
					dom
				
								
					PDO
				
								
					bz2
				
								
					SimpleXML
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					apache2handler
				
								
					openssl
				
								
					curl
				
								
					mbstring
				
								
					exif
				
								
					gd
				
								
					gettext
				
								
					mysql
				
								
					mysqli
				
								
					Phar
				
								
					pdo_mysql
				
								
					soap
				
								
					sockets
				
								
					sqlite3
				
								
					xmlrpc
				
								
					xsl
				
								
					mhash
				
							
		
														$_COOKIE
		
			
								
					session
					string(64) "992d9fa08f2d50f163b060f06356112639aec682~54f86f380ac7b7-14147538"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_MIBDIRS
					string(24) "E:/xampp/php/extras/mibs"
				
								
					REDIRECT_MYSQL_HOME
					string(16) "\xampp\mysql\bin"
				
								
					REDIRECT_OPENSSL_CONF
					string(31) "E:/xampp/apache/bin/openssl.cnf"
				
								
					REDIRECT_PHP_PEAR_SYSCONF_DIR
					string(10) "\xampp\php"
				
								
					REDIRECT_PHPRC
					string(10) "\xampp\php"
				
								
					REDIRECT_TMP
					string(10) "\xampp\tmp"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					MIBDIRS
					string(24) "E:/xampp/php/extras/mibs"
				
								
					MYSQL_HOME
					string(16) "\xampp\mysql\bin"
				
								
					OPENSSL_CONF
					string(31) "E:/xampp/apache/bin/openssl.cnf"
				
								
					PHP_PEAR_SYSCONF_DIR
					string(10) "\xampp\php"
				
								
					PHPRC
					string(10) "\xampp\php"
				
								
					TMP
					string(10) "\xampp\tmp"
				
								
					HTTP_HOST
					string(11) "inkedin.loc"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(109) "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "es-ES,es;q=0.8,en;q=0.6"
				
								
					HTTP_COOKIE
					string(74) "session=992d9fa08f2d50f163b060f06356112639aec682%7E54f86f380ac7b7-14147538"
				
								
					PATH
					string(503) "C:\ProgramData\Oracle\Java\javapath;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;C:\Windows\system32;C:\Windows;C:\Win&nbsp;&hellip;"
				
								
					SystemRoot
					string(10) "C:\Windows"
				
								
					COMSPEC
					string(27) "C:\Windows\system32\cmd.exe"
				
								
					PATHEXT
					string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
				
								
					WINDIR
					string(10) "C:\Windows"
				
								
					SERVER_SIGNATURE
					string(95) "&lt;address&gt;Apache/2.4.7 (Win32) OpenSSL/1.0.1e PHP/5.5.9 Server at inkedin.loc Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(45) "Apache/2.4.7 (Win32) OpenSSL/1.0.1e PHP/5.5.9"
				
								
					SERVER_NAME
					string(11) "inkedin.loc"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(23) "E:/xampp/htdocs/INKEDin"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(23) "E:/xampp/htdocs/INKEDin"
				
								
					SERVER_ADMIN
					string(20) "postmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(33) "E:/xampp/htdocs/INKEDin/index.php"
				
								
					REMOTE_PORT
					string(5) "54763"
				
								
					REDIRECT_URL
					string(5) "/user"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(5) "/user"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					PATH_INFO
					string(5) "/user"
				
								
					PATH_TRANSLATED
					string(24) "redirect:\index.php\user"
				
								
					PHP_SELF
					string(15) "/index.php/user"
				
								
					REQUEST_TIME_FLOAT
					float 1425571395.168
				
								
					REQUEST_TIME
					integer 1425571395
				
							
		
			

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-03-05 13:03:15 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory(Object(View))
#3 E:\xampp\htdocs\INKEDin\application\classes\Controller\ajax.php(28): Kohana_Controller_Template->before()
#4 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(14): Controller_Ajax->action_index()
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#11 {main} in E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php:145
2015-03-05 13:03:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function is_logged_in() on a non-object ~ APPPATH\classes\Controller\ajax.php [ 66 ] in file:line
2015-03-05 13:03:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 13:05:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Controller\ajax.php [ 7 ] in file:line
2015-03-05 13:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 13:05:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function is_logged_in() on a non-object ~ APPPATH\classes\Controller\ajax.php [ 66 ] in file:line
2015-03-05 13:05:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 13:06:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function is_logged_in() on a non-object ~ APPPATH\classes\Controller\ajax.php [ 66 ] in file:line
2015-03-05 13:06:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH\classes\Kohana\View.php [ 179 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 13:07:22 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(18): Kohana_View->__get('head')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 13:08:28 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH\classes\Kohana\View.php [ 179 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 13:08:28 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(18): Kohana_View->__get('head')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 14:55:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\user\myaccountview.php [ 4 ] in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 14:55:19 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 4, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\user\myaccountview.php:4
2015-03-05 14:59:06 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\masterajax.php [ 38 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\masterajax.php:38
2015-03-05 14:59:06 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\masterajax.php(38): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\xampp\htdocs...', 38, Array)
#1 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(14): Controller_MasterAjax->action_index()
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#8 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\masterajax.php:38
2015-03-05 15:02:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\masterajax.php [ 5 ] in file:line
2015-03-05 15:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 15:02:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\masterajax.php [ 5 ] in file:line
2015-03-05 15:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 15:04:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_User::template() ~ APPPATH\classes\Controller\user.php [ 73 ] in file:line
2015-03-05 15:04:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 15:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH\classes\Kohana\View.php [ 179 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 15:07:21 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php(18): Kohana_View->__get('head')
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\user.php:18
2015-03-05 15:31:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lastname ~ APPPATH\classes\Controller\profile.php [ 12 ] in E:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:12
2015-03-05 15:31:02 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 12, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(69): Controller_Profile->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#7 {main} in E:\xampp\htdocs\INKEDin\application\classes\Controller\profile.php:12
2015-03-05 15:31:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\profile\profileaboutview.php [ 160 ] in E:\xampp\htdocs\INKEDin\application\views\profile\profileaboutview.php:160
2015-03-05 15:31:47 --- DEBUG: #0 E:\xampp\htdocs\INKEDin\application\views\profile\profileaboutview.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 160, Array)
#1 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(62): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\INKEDin\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\xampp\htdocs\INKEDin\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\xampp\htdocs\INKEDin\index.php(118): Kohana_Request->execute()
#10 {main} in E:\xampp\htdocs\INKEDin\application\views\profile\profileaboutview.php:160