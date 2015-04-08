<html>

 
<head>

 
<title>Ejemplo sencillo de AJAX</title>

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>

function realizaProceso(nombre){
$("#valor1").val('');
        var parametros = {

                "nombre" : nombre,//variabels de parametros
                
        };

        $.ajax({
                data:  parametros,

                url:   'insert2.php',

                type:  'post',

                beforeSend: function () {
                        
                        $("#resultado").html("Procesando, espere por favor...");

                },

                success:  function (response) {

                        $("#resultado").html(response);

                }

        });

}

</script>

</head>

<body>
nombre
<?php 
if ($_COOKIE['contador']!= null){
 echo "hay cookie";
        
}

echo $_COOKIE['contador'];
?>

<input type="text" name="caja_texto" id="valor1" />


Realiza suma

<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>

<br/>

Resultado: <span id="resultado">0</span>

</body>

</html>
