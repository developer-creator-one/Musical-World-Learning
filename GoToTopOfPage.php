<!DOCTYPE HTML>
<html>
<head>
	<title>Go to top of page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(GoToTopOfPage, 0);
		}, false);
		function GoToTopOfPage() {
			window.scrollTo({
				top: 0,
				left: 0,
				/* I can't see any benefit in putting 1 for left,
				it doesn't hide the URL bar on a laptop web browser.
				*/
				behavior: "smooth"
			});
		}
	</script>

</head><body>

<h1>Go to top of page</h1>
<p>Did it do anything, on a mobile or laptop browser?</p>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body></html>

<!--
http://localhost/GoToTopOfPage.php
-->


