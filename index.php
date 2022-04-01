<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
</head>
<body>
    <form class="form-register" method="post">
    <h3 align="center" class="titulo">CONSULTA TU DNI</h3>
    <input class="controls" type="text" name="dni" id="dni" placeholder="Ingrese el numero de DNI">

	<input class="botons" type="button" value="Verificar" id="buscar">
	<a href="index.php">
		<button class="botons">Nueva consulta</button>
	</a>

    <p>Nombres:</p><input class="controls" type="text" id ="nombre" name="nombre">
    <p>Apellido Paterno:</p><input class="controls" type="text" id ="apePaterno" name="apePaterno">
    <p>Apellido Materno:</p><input class="controls" type="text" id ="apeMaterno" name="apeMaterno">

    </form>
					 
					 
                     
            

<script>
  $('#buscar').click(function(){
        dni=$('#dni').val();
        $.ajax({
           url:'consultaDNI.php',
           type:'post',
           data: 'dni='+dni,
           dataType:'json',
           success:function(r){
            if(r.numeroDocumento==dni){
                
                $('#apePaterno').val(r.apellidoPaterno);
                $('#apeMaterno').val(r.apellidoMaterno);
                $('#nombre').val(r.nombres);
               
            }else{
                alert('Error');
            }
            console.log(r)
           }
    });
    });

    

    </script>
</body>
</html>