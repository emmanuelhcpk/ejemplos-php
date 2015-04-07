<html>

 
<head>

 
<title>Ejemplo sencillo de AJAX</title>

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>

function realizaProceso(valorCaja1, valorCaja2){

        var parametros = {

                "nombre" : valorCaja1,//variabels de parametros
                "valorCaja2" : valorCaja2//variables de prametros
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


<input type="text" name="caja_texto" id="valor1" />

Introduce valor 2

<input type="text" name="caja_texto" id="valor2" value="0"/>

Realiza suma

<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>

<br/>

Resultado: <span id="resultado">0</span>

</body>

</html>
