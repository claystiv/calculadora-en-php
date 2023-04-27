<!DOCTYPE html>
<html>
<head>
	<title>Menú de opciones</title>
         <meta name="author" content="STIVEN T.">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body text='#ff000' bgcolor='000000' style='background-repeat:no-repeat ; background-position-x:center'>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table border='10' align='center' cellpadding='10' cellspacing='10' bgcolor='00aa50'>
                
                <th colspan='2'>
                    <h1 align='center'>
                        MENU
                    </h1>
                </th>
                
                  <tr>
                    <td>Nombres
                    </td>
                    <td align='center'>
                        <input type="text" id="nombre" name="nombre" placeholder="nombre" minlength="2" maxlength="30"  required>
                    </td>
                </tr>

		    <tr>
                    <td>Seleccione una opción:
                    </td>
                    <td align='center'>
                       <select id="opt" name="opt">
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Multiplicación</option>
			<option value="4">División</option>
			<option value="5">Mostrar nombre</option>
		       </select>
                    </td>
                </tr>
                
                 <tr>                    
                    <td align='center'>
                        <input type='reset' value='Borrar'>
                    </td>
        		<td align='center'>
                        <input type='submit' value='Enviar'>
                    </td>
                </tr>
                </table>
	</form>
        
      <?php
      
      $opt=$_POST['opt'];
      $nombre = $_POST['nombre'];
	switch ($opt) {
		case '1':
                    header('Location: suma.php');   
                break;
            case '2':
                    header('Location: resta.php');   
                break;   
            case '3':
                    header('Location: multi.php');   
                break;   
            case '4':
                    header('Location: divicion.php');   
                break;   
            case '5':
                    echo "<p>Su nombre es: $nombre</p>"; 
                break;   
                default :
                    echo "Hubo un error inesperado al seleccionar su opcion.";
                break;   	
                }
	?>

</body>
</html>