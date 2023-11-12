<div class="container d-flex align-items-center justify-content-center">
    <img src="./images/ufam.png" alt="imagem da ufam" class="img-fluid" style="max-width: 150px; padding-top: 70px;">
</div>
<main class="form-signin">
    <form action="<?php echo base_url('login/signIn') ?>" method="post">
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        <input type="text" name="inputName" id="text" class="form-control" placeholder="Seu nome" required autofocus>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control mt-1" placeholder="Sua senha" required>

        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Logar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023 - Coleções</p>
    </form>
    <?php $msg = session()->getFlashData('msg') ?>
    <?php if (!empty($msg)) : ?>
        <div class="alert alert-danger">
            <?php echo $msg ?>
        </div>
    <?php endif; ?>
</main>