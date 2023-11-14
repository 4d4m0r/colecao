 <section class="banner">
   <div class="container mt-4">
     <div class="row">
       <div class="col-md-6">
         <h1>Catálogo de culturas
           DPUA.</h1>
         <p> Coleções de culturas de microrganismos são repositórios de espécies com
           características fisiológicas viáveis, relevante para sociedade, cujo acervo é constituído por
           organismos vivos.</p>
         <p> A maioria das coleções brasileiras de microrganismos são instaladas nas instituições
           como coleções de pesquisa, cujo objetivo específico está associado à necessidade
           institucional ou dos grupos de pesquisa que contribuem para a respectiva manutenção.</p>
       </div>
       <div class="col-md-6">
         <img src="./images/ImgHome.png" alt="imagem de fungos" class="img-fluid">
       </div>
       <div class="card mt-2">
         <div class="card-body text-center">
           <p class="card-text">Para acessar as culturas DPUA, clique na barra abaixo e coloque o nome da espécie desejada.Para ter acesso à amostra pesquisada,
             vá a aba de contato,e preencha o formulário com os dados requeridos.Lembre-se de detalhar a utilização.</p>
         </div>
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