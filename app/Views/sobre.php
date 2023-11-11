<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body class="text-center">

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('') ?>">Fungos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('login') ?>">Login</a>
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

    <!-- Seção sobre a empresa -->
    <section id="about" class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Catálogo Coleção de Cultura DPUA</h1>
            <p class="lead">Neste catálogo estamos divulgando a 3a edição do Catálogo Coleção de Cultura
                DPUA. Dele consta o acervo constituído por 1.596 microrganismos conservados sob óleo
                mineral, água destilada esterilizada, solo, sílica gel ou liofilização. A Coleção de Cultura
                DPUA, da Universidade Federal do Amazonas-UFAM está instalada no Instituto de Ciências
                Biológicas-ICB, Departamento de Parasitologia.</p>
        </div>

        <!-- Conteúdo do catálogo -->
        <div id="catalog-content">
            <!-- Seção sobre a coleção DPUA -->
            <section>
                <h2>Sobre a Coleção DPUA</h2>
                <p>
                    No acervo DPUA estão depositados fungos filamentosos e unicelulares (leveduras),
                    bactérias do gênero Bacillus, Streptomyces, Nocardia. Entre esses microrganismos,
                    predominam os isolados de substratos da Amazônia, representantes dos filos Zygomycota,
                    Ascomycota, Basidiomycota, bem como, espécies de deuteromicetos e determinadas
                    espécies doadas por Instituições nacionais e internacionais.
                    A Coleção de Cultura DPUA está registrada na World Federation of Culture
                    Collections (WFCC) sob o no 715, filiada ao World Data Centre for Microorganisms (WDCM)
                    e credenciada desde 21/10/2005, como fiel depositário de amostras do patrimônio genético
                    (Deliberação 130 - MMA). A partir de 2021 foi certificada na gestão de documentos com base
                    na NBR ISO 9001:2015.</p>
            </section>

            <!-- Seção de atividades e serviços -->
            <section>
                <h2>Atividades e Serviços</h2>
                <p>Predominantemente, a finalidade da coleção abrange a conservação de fungos
                    filamentosos e unicelulares produtores de biocompostos para aplicação na indústria de
                    alimentos, farmacêutica, limpeza de efluentes industriais e de interesse médico.
                    Além das atividades essenciais na coleção, são executados projetos de pesquisa e
                    aulas para cursos de graduação e pós-graduação de áreas afins, utilizando como ferramenta
                    organismos da biodiversidade Amazônica. Outras atividades, atendendo às leis de
                    biossegurança, são as visitas à Coleção, acesso que promove a difusão do conhecimento
                    sobre os microrganismos conservados no acervo.
                    Outros serviços oferecidos são o fornecimento de culturas para estudos em curso de
                    graduação e pós-graduação, a apresentação de palestras, treinamento de estudantes e
                    profissionais abordando temas de micologia e aplicação biotecnológica dos fungos. O
                    fornecimento de microrganismos se oficializa de acordo com critérios legais.
                    Para facilitar o acesso aos dados sobre o acervo foi desenvolvido um banco de
                    dados, a partir do framework CodeIgniter, em linguagem PHP. Além disso, foi utilizado o
                    Xampp, um pacote com os principais servidores de código aberto do mercado, incluindo FTP,
                    banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.
                    Coleções de culturas de microrganismos são repositórios de espécies com
                    características fisiológicas viáveis, relevante para sociedade, cujo acervo é constituído por
                    organismos vivos. Os acervos microbianos são essenciais devido o crescente
                    estabelecimento dos microrganismos no desenvolvimento da biotecnologia (ARANDA, 2014;
                    Sola et al., 2012).
                    A maioria das coleções brasileiras de microrganismos são instaladas nas instituições
                    como coleções de pesquisa, cujo objetivo específico está associado à necessidade
                    institucional ou dos grupos de pesquisa que contribuem para a respectiva manutenção.
                    Contudo, o crescente avanço tecnológico está colaborando para a reorganização das
                    coleções de forma que haja a efetivação de serviços novos e demanda de microrganismos
                    para o desenvolvimento de pesquisas.
                    A conservação de microrganismos promove a realização de investigações para
                    compreensão da função da diversidade microbiana no meio ambiente, proporciona geração
                    de conhecimento, desenvolvimento científico e tecnológico (FELIPE et al., 2019). Entre outras,
                    as diversas atividades, nos acervos microbiológicos são realizadas Identificação,
                    caracterização, registro, manutenção, propagação, autenticação e distribuição de
                    microrganismos (VAZOLLER; CANHOS, 2005).</p>
            </section>

            <!-- Seção sobre a conservação de microrganismos -->
            <section>
                <h2>Conservação de Microrganismos</h2>
                <p>Microrganismos depositados em coleções de cultura são base da maior parte do
                    conhecimento real da diversidade biológica. A identificação e a conservação de novas
                    espécies estão relacionadas com a proteção in-situ da biodiversidade e a conservação ex-situ
                    do patrimônio genético (Santos; Lima, 2001).
                    Dos representantes do Reino Fungi, os fungos filamentosos, são de fácil cultivo,
                    predominam na síntese de enzimas, antibióticos, vitaminas, ácidos orgânicos e antioxidantes.
                    Outros metabólitos sintetizados por certas espécies de fungos são as micotoxinas,
                    biocompostos que podem causar efeitos maléficos ao homem e animal, (LEITE JR et al., 2012;
                    UKA et al., 2020).
                    Os fungos são também empregados na produção de alimentos e bebidas alcoólicas,
                    em processos de biodegradação, no tratamento biológico de efluentes e em biotransformação,
                    além disso, têm importância agrícola e ecológica (ABREU et al., 2014). Em biorremediação,
                    os fungos são usados na remoção de elementos contaminantes do solo, processo que
                    modifica ou decompõe certos poluentes (SOARES et al., 2011).</p>
            </section>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-light text-center py-3 mt-4 fixed-bottom">
        <p>&copy; 2023 Catálogo Coleção de Cultura DPUA. Todos os direitos reservados.</p>
    </footer>

    <!-- Adicione os scripts do Bootstrap (JQuery e Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-J2ge3R7mgKtbOYqONeE5wuHNG5cY9tLxDwHj8QQZJzPR3Ea17B1IyJgW3KddVc" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8G1fDI4ahpkc0r30eZ3IUnRTvPJELI" crossorigin="anonymous"></script>
</body>

</html>