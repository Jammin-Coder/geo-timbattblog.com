<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Geography Quiz</title>
    <link rel="stylesheet" href="/static/css/app.css">
    <link rel="stylesheet" href="/static/css/pages/index.css">
    <link rel="stylesheet" href="/static/css/analog.css">
</head>
<body class='fade-in'>
    <div class='app-container fluid'>
        @yield('content')
    </div>
    

    <script src='/static/js/app.js'></script>
</body>
</html>