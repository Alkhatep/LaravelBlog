<!DOCTYPE html>
<html>
<head>
	<meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.8.0">
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="/app.css">
</head>
<body>
<?php foreach ($posts as $post): ?>
<article>
	
	<h1>
		<a href="/posts/<?= $post->slug ?>">
			<?= $post->title ?>
		</a>
	</h1>
	
	
	<div>
		
		<?= $post->excerpt ?>
	</div>
</article>
<?php endforeach; ?>
</body>
</html>
