<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<!--
	https://getbootstrap.com/docs/6.0/getting-started/install/
	https://getbootstrap.com/docs/6.0/examples/
	https://github.com/twbs/examples/blob/main/starter/index.html
	https://www.w3schools.com/bootstrap5/
	https://www.w3schools.com/bootstrap5/bootstrap_get_started.php
	https://www.w3schools.com/bootstrap5/bootstrap_containers.php
	-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
   <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</head><body>

<h1>Bootstrap</h1>

<div class="container-fluid border">
Hello, this is a container-fluid which uses the full width of the viewport,
no matter whichever amount the window is resized, and a border.
</div>
<div class="container-fluid pt-5 pb-2 border">
Hello, this is a container-fluid with padding top of $spacer * 3,
and padding bottom of $spacer * .5,
and a border.
</div>
<div class="border border-2 rounded border-success">
Hello, this has a border of thickness 2, rounded corners, and green (success) colour.
</div>

<hr>
<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body></html>

<!--
http://localhost/Bootstrap.php
-->


