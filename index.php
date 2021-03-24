<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <?php require_once 'app/config.php'; ?>
    <?php require_once 'app/dependencias.php'; ?>
</head>
<body>

    <?php
        if(isset($_GET['vista_solicitada'])){
            switch($_GET['vista_solicitada']){
                case 'inicio':{
                    require_once 'view/inicio.php';
                    break;
                }case 'cap1':{
                    require_once 'view/capitulo1.php';
                    break;
                }default:{
                    require_once 'view/default.php';
                    break;
                }case 'cap2':{
                    require_once 'view/capitulo2.php';
                    break;
                }case 'cap3':{
                    require_once 'view/capitulo3.php';
                    break;
                }case 'cap4':{
                    require_once 'view/capitulo4.php';
                    break;    
                }case 'cap5':{
                    require_once 'view/capitulo5.php';
                    break;   
                }     
            }
        }else{
            require_once 'view/default.php';
        }
    ?>    
</body>
</html>