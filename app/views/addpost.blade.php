<html>
<head>
	<title>Welcome to Your Blog</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	</head>
<body>

	@if(Auth::check())
		<section class="container">
			<div class="content">
				<h1>Welcome to Admin Area, {{Auth::user()->name}} ! - <b>{{link_to_route('logout','Logout')}}</b></h1>

				<form name="add_post" method="POST" action="{{URL::route('add_new_post')}}">
					<p><input type="text" name="title" placeholder="Post Title"value=""/></p>
					<p><textarea name="content" placeholder="Post Content"></textarea></p>
					<p><input type="submit" name="submit" /></p>
				</form>
			</div>
		</section>
	@else
		<section class="container">
			<div class="login">
				<h1>Please Login</h1>

				<form name="login" method="POST" action="{{URL::route('login')}}">
					<p><input type="text" name="email" value="" placeholder="Email"></p>
					<p><input type="password" name="password" value="" placeholder="Password"></p>
					<p class="submit"><input type="submit" name="commit" value="Login"></p>
				</form>
			</div>
		</section>
	@endif
</body>
</html>
