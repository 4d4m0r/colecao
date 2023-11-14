<section class="banner">
  <div class="container mt-4">
    <div class="card border-0">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h1>Catálogo de Culturas DPUA</h1>
            <p>Coleções de culturas de microrganismos são repositórios de espécies com características fisiológicas viáveis e relevantes para a sociedade. O acervo é constituído por organismos vivos.</p>
            <p>A maioria das coleções brasileiras de microrganismos está instalada em instituições de pesquisa, com objetivos específicos associados às necessidades institucionais ou dos grupos de pesquisa que contribuem para a manutenção.</p>
          </div>
          <div class="col-md-6">
            <img src="./images/ImgHome.png" alt="Imagem de fungos" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="card mt-4">
      <div class="card-body text-center">
        <p class="card-text">Para acessar as culturas DPUA, digite o nome da espécie desejada na barra de pesquisa abaixo. Para obter acesso à amostra pesquisada, vá para a aba de contato e preencha o formulário com as informações necessárias. Lembre-se de detalhar a finalidade da utilização.</p>
      </div>
    </div>
  </div>
</section>
<section class="search-section">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="input-group">
          <input type="text" class="form-control" id="culturaSearch" placeholder="Pesquisar cultura...">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="searchCultura()">Pesquisar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4" id="culturaResults">
    </div>
  </div>
</section>