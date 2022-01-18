
<?php include __DIR__ . '/../head-html.php'?>

<form action="/include-info<?= isset($curso) ? '?id=' . $curso->getId() : ''; ?>" method="post" >
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="<?= isset($curso) ? $curso->getDescricao() : ''; ?>"></>
    </div>

    <button class="btn btn-primary">
        Salvar
    </button>

</form>
   
<?php include __DIR__ . '/../footer-html.php'?>
