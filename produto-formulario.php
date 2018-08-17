<?php
    include "layout/cabecario.php"
?>

    <div class="container">

        <div id="div_formulario_produto">
            
            <form action="adicionaproduto.php">
                <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
                </div>
                <div class="form-group">
                <label>valor</label>
                <input type="text" name="preco" class="form-control" id="valor">
                <div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        
            </form>
        
        </div>

    </div>

    


<?php
    include "layout/rodape.php"
?>