<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NotShopify</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="container mx-auto">
            <div id="app">
                <router-view></router-view>
            </div>    
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>