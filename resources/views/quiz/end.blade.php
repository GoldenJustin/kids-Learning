<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Javascript Custom Quiz">
  <meta name="keywords" content="Javascript, Quiz, Javascript Quiz">
  <meta name="author" content="Kirill Kuznetsov">
  <!-- Title -->
  <title>Congrats!</title>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="{{ asset ('assets/quiz/assets/css/app.css') }}" />
  <!-- Favicon -->
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
</head>

<body>

  <!-- Final Result -->
  <main class="container">
    <div id="end" class="flex-center flex-column">
      <h1 id="finalScore"></h1>
      <form>
        <input type="text" name="username" id="username" placeholder="username" />
        <button type="submit" class="btn" id="saveScoreBtn" onclick="saveHighScore(event)" disabled>
          Save
        </button>
      </form>
      <a class="btn" href="../html/game.html">Play Again</a>
      <a class="btn" href="../../index.html">Go Home</a>
    </div>
  </main>
  <script src="{{ asset ('assets/quiz/assets/js/end.js') }}"></script>
</body>

</html>