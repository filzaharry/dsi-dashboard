<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Digital Supremasi Indonesia - Dashboard</title>

	<link href="{{asset('admin/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	@stack('css')
    @livewireStyles()
</head>

<body>

	@if (Request::segment(1) != '')
		<div class="wrapper">
			<livewire:sidebar-c />
			<div class="main">
				<livewire:navbar-c />
				<main class="content">
					<div class="container-fluid p-0">
						
						<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
						{{$slot}}
						
					</div>
				</main>
				<livewire:footer-c />
			</div>
		</div>
	@else
		<livewire:landing-page-c />
	@endif


	

	@livewireScripts()
	<script src="{{asset("admin/js/app.js")}}"></script>
	<script src="{{asset("admin/js/script.js")}}"></script>


</body>

</html>