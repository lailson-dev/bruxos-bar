<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruxo's Bar - Lailson Conceição - Estudos - Desenvolvimento Web</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body id="override-bs">

    @include('includes.site.header')

    <main class="main__page">
        @include('includes.site.welcome')

		@include('includes.site.about')        

        <!-- CARDÁPIO -->
        @include('includes.site.menu')

        <!-- RESERVA -->
        @include('includes.site.booking')

        @include('includes.site.footer')
    </main>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>