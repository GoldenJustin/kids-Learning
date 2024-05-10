<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Puzzle Level Hard - fork by Xavier Palacín Ayuso">
        <meta name="keywords" content="Puzzle,JavaScript,HTML,CSS3">
        <meta name="author" content="Xavier Palacín Ayuso">
        <title>Puzzle - fork by Xavier Palacín Ayuso</title>
        <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="img/icons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="img/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="img/icons/android-chrome-192x192.png" sizes="192x192">
        <meta name="msapplication-square70x70logo" content="img/icons/smalltile.png"/>
        <meta name="msapplication-square150x150logo" content="img/icons/mediumtile.png"/>
        <meta name="msapplication-wide310x150logo" content="img/icons/widetile.png"/>
        <meta name="msapplication-square310x310logo" content="img/icons/largetile.png"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset ('assets/puzzles/css/styles.css')}}" rel="stylesheet">
    </head>
    <body onload="init(4);">
        <h1 class="text-center">Puzzle - fork by Xavier Palacín Ayuso</h1>
        <div class="puzzle-wrapper">
            <canvas id="canvas"></canvas>
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- Puzzle -->
        <script type='text/javascript' src="{{ asset ('assets/puzzles/js/puzzle.js')}}"></script>
    </body>
</html>