<?php
include_once('url/url.php');
$list = ['a','b','c','d','e',"f","g","h","j","k","i",'','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',"!", "@", "#", "$", "%",0,1,2,3,4,5,6,7,8,9];
if(isset($_POST['rep'])){
    $senha =[];
    $numeroRep = $_POST['rep'];
    for($i = 0; $i < $numeroRep; $i++){
        $key = array_rand($list);
        $caracter = $list[$key];
        array_push($senha,$caracter);
        if($i == $numeroRep-1){
            $numeroRep = 0;
            $senhaAtual = implode('',$senha);

        }
          
    } 
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
    <div id="container">
        <div class="item">
            <h1 class="title">Gerador de senhas</h1>
                <form action="gerador.php" method="post">
                    <div class="input-number">
                        <input type="number" name="rep" id="rep" max="20" value="<?=$null?>">
                    </div>
                        
                
                    <input type="submit"value="Gerar" id="input-submit">
                </form>    
                <?php if(isset($senha[0])): ?>
                <p class="result" onclick="copiarTexto()"><span><?=$senhaAtual?></span></p>
                <?php endif;?>
        </div>
          
    </div>
    <div id="creator">
        
         <p>&copyAbraão Oliveira</p>
         <p>Linkedin:<a href=""></a></p>
    </div>
    
   
</body>
</html>