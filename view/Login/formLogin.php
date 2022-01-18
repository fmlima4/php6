
<?php include __DIR__ . '/../head-html.php'?>

<form action="/realiza-login" method="post" >
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="text" name="password" id="password" class="form-control"/>
    </div>

    <button class="btn btn-primary">
        Logar
    </button>

</form>
   
<?php include __DIR__ . '/../footer-html.php'?>
