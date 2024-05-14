<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_GET["class"]; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body{
                width: 1000px;
                margin: auto;
            }
        </style>
    </head>
        <body>
        <h1>Classe <?php echo $_GET["class"] ?></h1>
        <?php
            ini_set("display_errors","On");
            require_once "vendor/autoload.php";
            use app\bd\conexaoBd;


            
                        
            $classe = $_GET["class"];
            $metodo = $_GET["acao"];
            
            
            $classe = "app\\controllers\\" . $classe . "Controller";

            $bd = new conexaoBd(DBHOST,DBNAME,DBUSER,DBPASS);
            
            $obj = new $classe($bd);

            if(isset($_POST["param"])){
                $param = $_POST["param"];

                $obj->$metodo($param);

            }else{

                $obj->$metodo();
            }
            
        ?>
        </body>
</html>

