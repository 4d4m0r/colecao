<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding-top: 50px;
            margin: auto;
        }

        #about {
            margin-bottom: 100px;
            /* Ajuste a altura conforme necessário */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Adicione este script para exibir o alerta -->
    <script>
        $(document).ready(function() {
            <?php if (session()->getFlashdata('success')) : ?>
                // Crie um alerta do Bootstrap
                var alertMessage = '<div class="alert alert-success alert-dismissible fade show position-fixed top-50 start-50 translate-middle" role="alert">' +
                    '<?= session()->getFlashdata('success') ?>' +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>';

                // Adicione o alerta ao corpo da página
                $('body').append(alertMessage);
            <?php endif; ?>
        });
    </script>


    <script>
        function searchCultura() {
            var nome = document.getElementById('culturaSearch').value;
            console.log(nome)
            $.ajax({
                url: '<?= base_url('/searchCultura') ?>',
                type: 'POST',
                data: {
                    nome: nome
                },
                success: function(data) {
                    $('#culturaResults').html(data);
                }
            });
        }
    </script>

    <style>
        /* Adicione esta seção ao seu estilo existente */

        .navbar-nav .nav-item:hover {
            background-color: #e0e0e0;
            /* Cor de fundo ao passar o mouse */
        }

        .navbar-nav .nav-link:hover {
            color: #000 !important;
            ;
            /* Cor do texto ao passar o mouse */
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('') ?>">Fungos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('sobre') ?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contato') ?>">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>