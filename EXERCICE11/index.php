
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
  <form  action="controller.php" method="POST">
  
     <h1>SAISIE D'UN NOMBRE</h1>
    
    <label for="number">veillez saisir un nombre </label>
    <input type="text" name="num1"  placeholder="veiller saisir un nombre"/>
    <span style="color:red;">
       <?php
        if (isset ($_GET['msg'])){
          echo $_GET['msg'];
        }
        elseif
          (isset ($_GET['msg1'])){
            echo $_GET['msg1'];
        }
       ?> 
    </span>
    <br>
    <input type="submit"  name="valider" />
</form>

</body>
</html>
