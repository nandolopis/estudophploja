<?php
    include "layout/cabecario.php";
    include "config/config.php";
?>
    <form action="cadatro-cliente-repository.php">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome"><br/>
        <label for="nome">E-mail</label>
        <input type="text" name="email"><br/>

        <input type="submit" label="Enviar" >

    </form>


<?php
    include "layout/rodape.php"
?>