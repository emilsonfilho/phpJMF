<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autonomia no JS</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h1>Calculando a Autonomia</h1>
                <form id="formulario" method="POST" action="">
                    <div class="form-group">
                        <label>Marca do carro:</label>
                        <input type="text" name="marca" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Modelo do carro:</label>
                        <input type="text" name="modelo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Consumo por litro:</label>
                        <input type="text" name="consumo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>valor do abastecimento</label>
                        <input type="text" name="abastecimento" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tipo de combustível</label>    
                        <input type="text" name="combustivel" id="combustivel" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnmedia" id="btn">Calcular</button>
                </form>
                <hr>
                    <?php 
                        if (isset($_POST['btnmedia'])) {
                            $consumo = $_POST['consumo'];
                            $abastecimento = $_POST['abastecimento'];
                            
                            function calcular($combustivel, $consumo, $abastecimento) {
                                $kml = number_format((($abastecimento / $combustivel) * $consumo), 0);
                                return $kml;
                            }

                            function resultadoNaTela($kml) {
                                echo "O carro vai rodar $kml km.";
                            }


                            $tipo = $_POST['combustivel'];
                            
                            if ($tipo == 'comum' || $tipo == 'COMUM' || $tipo == 'Comum') {
                                $gasComum = 6.99;
                                $kml = calcular($gasComum, $consumo, $abastecimento);
                                resultadoNaTela($kml);
                            } else if ($tipo == 'aditivada' || $tipo == 'ADITIVADA' || $tipo == 'Aditivada') {
                                $adit = 7.99;
                                $kml = calcular($adit, $consumo, $abastecimento);
                                resultadoNaTela($kml);
                            } else if ($tipo == 'etanol' || $tipo == 'ETANOL' || $tipo == 'Etanol') {
                                $eta = 5.99;
                                $kml = calcular($eta, $consumo, $abastecimento);
                                resultadoNaTela($kml);
                            } else {
                                echo 'Insira um combustível válido!';
                                echo "Temos: <br> Comum, <br> Aditivada, <br> Etanol.";
                            }

                            
                        }
                    ?>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>