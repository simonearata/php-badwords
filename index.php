<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php prova</title>
</head>
<body>
  <h1>esercizio 1 php</h1>

  <!-- variabile badword  -->
  <?php 
    $badword = $_GET['badword'];
  ?>

  <?php
    $text = "Lorem ipsum, dolor {$_GET['badword']} sit amet consectetur adipisicing elit. Fuga omnis corporis enim voluptas quod blanditiis perspiciatis? Incidunt, fuga facere culpa modi delectus dignissimos laborum, ipsa, maiores earum vitae doloribus ipsum.
    Distinctio, earum? Quod quae animi, deleniti repellendus unde provident, facilis sunt quam quas aliquam corporis. Debitis maiores, ab eveniet unde labore nam laborum, sapiente ratione commodi soluta similique incidunt cumque";
    
  ?> 

  <!-- lunghezza testo -->
  <h2>Lunghezza testo: <?php echo strlen($text); ?></h2>

  <!-- stampato a video il testo -->
  <p><?php echo $text ?></p>

  <!-- testo censurato -->
  str_censured: <?php echo str_replace($_GET['badword'], '***', $text) ?>




</body>
</html>