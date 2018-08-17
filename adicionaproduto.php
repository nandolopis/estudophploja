<?php
    include "layout/cabecario.php";
    include "config/config.php";
    
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];

    $conexao = mysqli_connect($mysql_url,$mysql_user,$mysql_senha, $mysql_db_name);
   // $conexao = mysqli_connect('localhost:3306','root', '1234', 'loja');

    $query = "INSERT INTO `loja`.`produtos` (`nome`, `preco`) VALUES ('{$nome}', '{$preco}')";
    
    ?>

    <div class="container">

        <h2> Resultado! </h2>

    <?php
    
    if(mysqli_query($conexao, $query)){
    ?>
        <br />
        <p> Produto <?php echo $nome ?>,  R$<?php echo number_format($preco,2,",",".")?> adicionando com sucesso!</p>

    <?php
    } else {
    ?>
        <br />
        <p> Erro ao  cadastra produto  </p>
    <?php
    }

    mysqli_close($conexao);

    
?>



<?php
    include "layout/rodape.php"
?>