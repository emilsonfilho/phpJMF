<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de supermercado com JS</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">  
                <h1>Valor Das Compras</h1>
                <hr>
                <form method="POST" action="">
                    <div class="form-group">
                        <label>Digite o valor total das compras:</label>
                        <input type="text" name="total" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Valor pago: </label>
                        <input type="text" name="pagamento" class="form-control">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success" name="btnCalc">Calcular</button>
                </form>
                <?php 
                    if (isset($_POST['btnCalc'])) {
                        $total = $_POST['total'];
                        $pagamento =$_POST['pagamento'];
                      if($total > $pagamento){
                        $resto = $total - $pagamento;
                        echo "Você deve R$ $resto,00";
                      } else if ($total < $pagamento) {
                        $resto1 = $pagamento - $total;
                        echo "Você tem R$ $resto1,00 de troco";
                      } else {
                          echo "Tudo certo! Você não tem troco.";
                      }
                    }
                ?>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>