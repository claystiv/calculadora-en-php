<!DOCTYPE html>
<html>
<head>
	<title>Suma</title>
        <meta name="author" content="STIVEN T.">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            <table border='10' align='center' cellpadding='10' cellspacing='10' bgcolor='00aa50'> 
            
            <th colspan='2'>
                    <h1 align='center'>
                        divición
                    </h1>
                </th>
                
                  <tr>
                    <td>primer numero:
                    </td>
                    <td align='center'>
                        <input type="number" id="num1" name="num1"  minlength="1" maxlength="10" required>
                    </td>
                </tr>
                
                <tr>
                    <td>Segundo numero:
                    </td>
                    <td align='center'>
                        <input type="number" id="num2" name="num2" minlength="1" maxlength="10" required>
                    </td>
                </tr>
            
	         <tr>                    
                    <td align='center'>
                        <input type='reset' value='Borrar'>
                    </td>
        		<td align='center'>
                        <input type="submit" value="Calcular">
                    </td>
                </tr>
           </table>
		
                
                <?php
      
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      
      $resul = $num1 / $num2;
      
      echo "El resultado de la divicion es : $resul </p>"; 
      ?>
                <a href="primero.php"> menu </a>
	
        