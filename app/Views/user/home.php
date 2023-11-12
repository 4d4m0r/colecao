 <section class="banner">
   <div class="container mt-4">
     <div class="row">
       <div class="col-md-6">
         <h1>Bem-vindo ao mundo dos fungos</h1>
         <p>Aqui você encontra informações sobre diversos tipos de fungos, sua classificação, habitat, importância para o meio ambiente e para a saúde humana.</p>
         <a href="#" class="btn btn-primary">Saiba mais</a>
       </div>
       <div class="col-md-6">
         <img src="./images/ImgHome.png" alt="imagem de fungos" class="img-fluid">
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
