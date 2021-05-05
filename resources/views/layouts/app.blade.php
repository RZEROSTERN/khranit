<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Khranit</title>
</head>
<body>
    <main role="main" class="container-fluid" id="app">
        <khranit-header></khranit-header>
            <router-view></router-view>
        <khranit-footer></khranit-footer>
    </main>
    <script src="{{url("/js/app.js")}}"></script>
</body>
</html>