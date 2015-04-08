<html>
	<head>
		<title>Todos los users AJAX</title>
	</head>

	<body onload="actualizar()">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">

function actualizar(){
//alert("pase");
       $.ajax({ 
                

                url:   'insert.php',

                type:  'get',

                beforeSend: function () {

                        //$("#resultado").html("Procesando, espere por favor...");

                },

                success:  function (response) {

                        $("#resultado").html(response);

                }
			
        });
setInterval(actualizar, 10000);
}




//



	</script>

	

Resultado: <span id="resultado"></span>
	</body>
	</html>	