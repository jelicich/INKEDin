/**
 * header module
 */

inked.Common.Header = {
	SUPPORTED_TABLET_WIDTH : 769,
	init : function() 
	{
		inked.Common.Header.initSidebar();
		inked.Common.Header.headerResize();
		$( window ).resize(function() {
			if($(window).width() < 992 )
			{
				$(document).unbind("scroll");
				$("header").removeClass("small-header").addClass("full-header");
			}
			else
			{
				inked.Common.Header.headerResize();
			}

		});
		/*==============*/
		/*FACEBOOK LOGIN*/
/*
		// This is called with the results from from FB.getLoginStatus().
		  function statusChangeCallback(response) {
		    console.log('statusChangeCallback');
		    console.log(response);
		    // The response object is returned with a status field that lets the
		    // app know the current login status of the person.
		    // Full docs on the response object can be found in the documentation
		    // for FB.getLoginStatus().
		    if (response.status === 'connected') {
		      // Logged into your app and Facebook.
		    	testAPI();

		    	//login INKEDIN
			    FB.api('/me', function(response) {
				    var data = {
			      		'email' : response.email,
			      		'name' : response.first_name,
			      		'id' : response.id,
			      		'last_name' : response.last_name
			      	};
			        $.redirect('/auth/login_fb', data);
				});
	   	        
		       
		      
		    } else if (response.status === 'not_authorized') {
		      // The person is logged into Facebook, but not your app.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into this app.';
		    } else {
		      // The person is not logged into Facebook, so we're not sure if
		      // they are logged into this app or not.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into Facebook.';
		    }
		  }

		  // This function is called when someone finishes with the Login
		  // Button.  See the onlogin handler attached to it in the sample
		  // code below.
		  this.checkLoginState = function () {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }

		  window.fbAsyncInit = function() {
		  FB.init({
		    appId      : '1597455557202751',
		    cookie     : true,  // enable cookies to allow the server to access 
		                        // the session
		    xfbml      : true,  // parse social plugins on this page
		    version    : 'v2.2' // use version 2.2
		  });

		  // Now that we've initialized the JavaScript SDK, we call 
		  // FB.getLoginStatus().  This function gets the state of the
		  // person visiting this page and can return one of three states to
		  // the callback you provide.  They can be:
		  //
		  // 1. Logged into your app ('connected')
		  // 2. Logged into Facebook, but not your app ('not_authorized')
		  // 3. Not logged into Facebook and can't tell if they are logged into
		  //    your app or not.
		  //
		  // These three cases are handled in the callback function.

		  // FB.getLoginStatus(function(response) {
		  //   statusChangeCallback(response);
		  // });

		  };

		  // Load the SDK asynchronously
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  // Here we run a very simple test of the Graph API after login is
		  // successful.  See statusChangeCallback() for when this call is made.
		  function testAPI() {
		    console.log('Welcome!  Fetching your information.... ');
		    FB.api('/me', function(response) {
		      console.log('Successful login for: ' + response.name);
		      document.getElementById('status').innerHTML =
		        'Thanks for logging in, ' + response.name + '!';
		    });
		  }
*/		
		window.fbAsyncInit = function() {
		    FB.init({
		        appId   : '1597455557202751',
		        cookie     : true,  // enable cookies to allow the server to access the session
			    xfbml      : true,  // parse social plugins on this page
			    version    : 'v2.2', // use version 2.2
		        oauth   : true,
		        status  : true, // check login status
		        xfbml   : true // parse XFBML
		    });

		};
		(function(d){
	     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     d.getElementsByTagName('head')[0].appendChild(js);
	   }(document));

		this.fb_login = function(){
		    FB.login(function(response) {

		        if (response.authResponse) {
		            console.log('Welcome!  Fetching your information.... ');
		            //console.log(response); // dump complete info
		            access_token = response.authResponse.accessToken; //get access token
		            user_id = response.authResponse.userID; //get FB UID

		          //   FB.api('/me', function(response) {
		          //       user_email = response.email; //get user email
		          // // you can store this data into your database             
		          //   });

		    		//login INKEDIN
				    FB.api('/me', function(response) {
					    var data = {
				      		'email' : response.email,
				      		'name' : response.first_name,
				      		'id' : response.id,
				      		'last_name' : response.last_name
				      	};
				        $.redirect('/auth/login_fb', data);
					});

		        } else {
		            //user hit cancel button
		            console.log('User cancelled login or did not fully authorize.');

		        }
		    }, {
		        scope: 'public_profile,email'
		    });
		}
	},

	initSidebar : function()
	{	
		function layer(){
			
			$("#wrapper").toggleClass("menu-open");
			$("#wrapper .toggled").css("overflow", "inherit");


			if( $('#cover-content').length ){
				
				$('#site-content').unwrap();

			}else{

				$('#site-content').nextUntil('body').addBack().wrapAll("<div id='cover-content'></div>");
				$('#cover-content').on('click', function(){ layer(); })
			}
		}


		$(".menu-toggle").on("click", function() {
			layer();
		});





		var t = this;
		var onResize = function() {
			if(window.innerWidth > t.SUPPORTED_TABLET_WIDTH) {
				$("#wrapper").removeClass("menu-open");
			}
		}

 		$(window).on('resize', onResize);
 	},

	headerResize : function()
	{
		if($(window).width() > 992)
	    {
	    	$(document).on("scroll",function(){
			    if($(document).scrollTop()>50){
			      
			        $("header").removeClass("full-header").addClass("small-header");

			    } else{

			        $("header").removeClass("small-header").addClass("full-header");
			    }
			});
	    }
	},

	// onClickLogin : function(event)
	// {
	// 	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	// 	$('#login-toggle').toggle();
	// 	$('#username').focus();	
	// },


	validateForm : function()
	{
		var user = $('#username').val();
		var pass = $('#password').val();
		if(user == '' || pass == '')
		{
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
		}
	},

	buildUrl : function(event)
	{
		event.preventDefault();
		var query = $('#search-input').val();
		window.location = '/search/all/'+query;
	}
};

{
	$(document).ready(function() {
		inked.Common.Header.init();
	});
}
