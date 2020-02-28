<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - AULA 01</title>
</head>
<body>
    <?php
        $titulo = "Primeira aula de PHP"
    ?>
    <h1> 
    <?php echo  $titulo; ?>
    </h1>
    <!-- CONDICIONAIS -->
    <?php
        $idade = 15;

        if ($idade >= 18){
            echo "<p>Pode levar</p>";
        } else {
            echo "<p>Não vai levar</p>";
        }
    ?>
    <!-- EXERCICIOS DE CONDICIONAIS -->
    <P>Exercicios de Condicionais if - else</P>
    <p> Verificar se uma pessoa deve ou não votar, ou se está pessoa possui voto facultativo </p>
    <?php
        $idade = 69;

        if ($idade <16){
            echo "Não vota";
        } 
        if ($idade >= 18 && $idade <=70){
            echo "Voto obrigatório";
        }
        if ($idade >=16 && $idade <18 || $idade >71){ 
            echo "Voto facultativo";
        }

    ?>
    <!-- switch -->
    <?php
        $genero = Masculino;

        switch ( $genero ) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
    ?>

<hr>
<h1>Array</h1>
    <?php
        $arrayAnimais = [
            "cachorro", 
            "gato",
            "giraffa",
            "elefante"
        ];
        echo "<pre>";
            var_dump($arrayAnimais);
        echo "</pre>";
        
        $estojo = array(
            "caneta azul",
            "caneta verde",
            "caneta vermelha",
            "controle do projetor"
        );
    ?>
<hr>
<h1>Array associativo</h1>

    <?php
        $usuario = [
            "email" => "fernanda.santos6@hotmail.com",
            "senha" => "123456"
        ];

        echo "<pre>";
        var_dump($usuario);
        echo "</pre>";

    ?>    
      
</body>
</html>