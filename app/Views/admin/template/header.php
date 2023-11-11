<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Importando o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importando o JavaScript do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
        .acoes {
            float: right;
            margin-left: 10px;
        }

        /* Definindo o tamanho da barra de navegação */
        .navbar {
            height: 50px;
        }

        /* Definindo o tamanho da barra lateral */
        .sidebar {
            height: 100%;
            width: 200px;
            /* position: fixed; */
            z-index: 1;
            top: 50px;
            left: 0;
            background-color: #212529;
            overflow-x: hidden;
            padding-top: 50px;
        }

        .a {
            padding: 6px 8px 6px 0px;
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            display: block;
        }

        /* Estilizando os links da barra lateral */
        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            display: block;
        }

        /* Estilizando os links da barra lateral quando o mouse está sobre eles */
        .sidebar a:hover {
            background-color: #ddd;
            color: #000;
        }

        /* Estilizando o conteúdo principal */
        .main {
            margin-left: 200px;
            /* Definindo a margem esquerda para que o conteúdo não fique sob a barra lateral */
            padding: 20px;
            height: 1000px;
            /* Apenas para fins de demonstração */
        }

        /* Posicionando o menu da barra de navegação à direita */
        .navbar-nav.navbar-right {
            margin-right: auto;
        }


        select {
            display: block;
            width: 100%;
            height: calc(2.5rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        select.form-select {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-size: 1rem;
            line-height: 1.5;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>

    <style>
        .loader-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #fff;
            /* Fundo branco */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader {
            display: inline-block;
            width: 3rem;
            height: 3rem;
        }
    </style>

    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>

    <script>
        function confirma() {
            if (!confirm('Deseja excluir o registro?')) {
                return false;
            }
            return true;
        }
    </script>
</head>

<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <?php echo anchor(base_url('/dashboard'), 'Dashboard', array('class' => 'a')) ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php echo anchor(base_url('login/signOut'), 'Sair', array('class' => 'nav-link')) ?>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Barra lateral -->
    <div class="sidebar fixed-top">
        <?php echo anchor(base_url('/especie'), 'Espécies', array('class' => 'a')) ?>
        <?php echo anchor(base_url('/cultura'), 'Cultura', array('class' => 'a')) ?>
        <?php echo anchor(base_url('/meio'), 'Meio de Cultivo', array('class' => 'a')) ?>
    </div>