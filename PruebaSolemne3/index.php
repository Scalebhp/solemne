
<html>
    <head>
        <script type="text/javascript" src="./MaScript.js"></script>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="MaCss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Prueba Solemne 3</title>
    </head>
    <body>
        
        <div class="w3-card-4 w3-round-xlarge w3-teal w3 w3-display-middle" >
            <h2> Ingreso de Rut</h2>
            <form name="myForm" action="./ConnecterBase.php" onsubmit="return myFunction()" method="post">
             RUT: <input type="number" name="Rut" id="numb">
            <input type="submit" value="Enviar">
            </form>
             <p id="demo"></p>
        </div>
        
       <?php
       echo '<script>aleret("Bonjour");<script>';
       ?>
    </body>
</html>
