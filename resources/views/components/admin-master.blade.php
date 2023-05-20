<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/desh.css') }}">
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: bold;
		}

		td a {
			text-decoration: none;
			color: #007bff;
		}

		td a:hover {
			text-decoration: underline;
		}

		.instagram-icon {
			color: #e1306c;
			font-size: 1.2rem;
			margin-right: 5px;
		}

		.editanddelete{
			display: flex;
			gap: 5px;
		}

		.deleteBtn{
			border: none;
			font-size: 13px;
		}
	</style>
</head>
<body>
  
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;500&display=swap" rel="stylesheet">
    
    @yield('content')

    <script>
        let menuButton = document.querySelector(".button-menu");
let container = document.querySelector(".container");
let pageContent = document.querySelector(".page-content");
let responsiveBreakpoint = 991;

if (window.innerWidth <= responsiveBreakpoint) {
  container.classList.add("nav-closed");
}

menuButton.addEventListener("click", function () {
  container.classList.toggle("nav-closed");
});

pageContent.addEventListener("click", function () {
  if (window.innerWidth <= responsiveBreakpoint) {
    container.classList.add("nav-closed");
  }
});


window.addEventListener("resize", function () {
  if (window.innerWidth > responsiveBreakpoint) {
    container.classList.remove("nav-closed");
  }
});
    </script>
</body>
</html>