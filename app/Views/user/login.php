
    <main class="form-signin">
        <form action="<?php echo base_url('login/signIn') ?>" method="post">
            <h1 class="h3 mb-3 fw-normal">Por favor, logue-se</h1>
            <label for="text" class="visually-hidden">Nome</label>
            <input type="text" name="inputName" id="text" class="form-control" placeholder="Seu nome" required autofocus>
            <label for="inputPassword" class="visually-hidden">Senha</label>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Sua senha" required>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 - Coleções</p>
        </form>
        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) : ?>
            <div class="alert alert-danger">
                <?php echo $msg ?>
            </div>
        <?php endif; ?>
    </main>
