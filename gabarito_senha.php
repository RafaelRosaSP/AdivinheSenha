<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
        print_r($_POST);

            if(ISSET($_POST['senha']))
        {
            $pass = $_POST['senha'];

            if ($pass == 'mudar123')

        {
            echo '<br> <br>Parabens, você sabe a senha';
        }

            else 

        {

            echo '<br> <br>Senha incorreta';
        
            $arq = "senhas_enviadas.txt";
            if(!file_exists("senhas_enviadas.txt"))
            
        {
            $handle = fopen("senhas_enviadas.txt", "w");
        }     else {
            $handle = fopen("senhas_enviadas.txt", "a");
        }
            
            fwrite($handle,$pass."\n");
            fflush($handle);
            fclose($handle);
        
        }

        }

?>
</body>
</html>