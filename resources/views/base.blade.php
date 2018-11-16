<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Canonical -->
    <link rel="canonical" href="">

    <title>Laravel 5.4</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li class="nav-brand">
                <a href="/">Home</a>
            </li>
			<li>
                <a href="/obat">Obat</a>
            </li>
			<li>
                <a href="/obat/create">-Tambah</a>
            </li>
        </ul>
    </aside>

    @yield('content') {{-- Semua file konten di bagian ini --}}


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script src="/assets/js/custom.js"></script>
</body>

</html>