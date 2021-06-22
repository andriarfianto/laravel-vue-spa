<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel Vue - SPA</title>
</head>
<style>
	body {
		font-family: sans-serif;
		margin: 15%;
	}
</style>
<body>
	<div id="app">
		<h1>Hello, Laravel</h1>
		<header-component></header-component>
		<example-component></example-component>
		<footer-component></footer-component>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>