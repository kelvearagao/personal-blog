<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>My Awesome Blog</title>
		<link rel="stylesheet" href="assets/blog/css/styles.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="assets/blog/css/print.css" media="print" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1><a href="/">My Awesome Blog</a></h1>
				<p>Welcome to my awesome blog</p>
			</header>
			
			<section id="main">
				
				<section id="content">
					@foreach($posts as $post)
						<article>
							<h2>{{$post->title}}</h2>
							<p>{{$post->content}}</p>
							<p><small>Posted by <b>{{$post->Author->name}}</b> at <b>{{$post->created_at}}</b></small></p>
						</article>
					@endforeach
				</section>
					
			</section>

			<footer>
				<section id="footer-area">
					<section id="footer-outer-block">
						<aside class="footer-segment">
							<h4>My Awesome Blog</h4>
						</aside>
					</section>
				</section>
			</footer>
		</div>
	</body>
</html>
