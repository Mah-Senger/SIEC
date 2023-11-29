<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="shortcut icon" type="imagex/png" href="{{asset("images/siec.ico")}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<x-header />
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5 class="font-weight-bold font-italic">SIEC</h5>
          <h6 class="font-weight-bold">Sistema de integração <br> empresa-candidato</h6>
          <p>Sabe quando você precisa encontrar a empresa ideal para você, com vagas e recursos de acessibilidade que se encaixam no seu perfil? Ou quando sua empresa deseja encontrar pessoas com deficiência para as vagas de emprego que estão sendo ofertadas? O Sistema de Integração Empresa-Candidato chegou para solucionar esses problemas. Cadastre-se e venha fazer parte da equipe SIEC você também! </p>
          <p><a href="#"><button type="button" class="btn btn-primary btn-lg mt-4 btn-dark pt-3" style="background-color: #9AA7B2; border: none; color: #1B1B1B; width: 50%; font-style: bold; font-size: 1.4em; border: solid #89898C 1px;">CADASTRE-SE</button></a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h5 class="font-weight-bold font-italic">SIEC</h5>
          <h6 class="font-weight-bold">Sistema de integração <br> empresa-candidato</h6>
          <p>Sabe quando você precisa encontrar a empresa ideal para você, com vagas e recursos de acessibilidade que se encaixam no seu perfil? O Sistema de Integração Empresa-Candidato chegou para solucionar esses problemas. Cadastre-se e venha fazer parte da equipe SIEC você também!</p>
          <p><a href="#"><button type="button" class="btn btn-primary btn-lg mt-4 btn-dark pt-3" style="background-color: #9AA7B2; border: none; color: #1B1B1B; width: 50%; font-style: bold; font-size: 1.4em; border: solid #89898C 1px;">CADASTRE-SE</button></a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h5>SIEC</h5>
          <h6 class="font-weight-bold">Sistema de integração <br> empresa-candidato</h6>
          <p>Sua empresa deseja encontrar pessoas com deficiência para as vagas de emprego que estão sendo ofertadas? O Sistema de Integração Empresa-Candidato chegou para solucionar esses problemas. Cadastre-se e venha fazer parte da equipe SIEC você também!</p>
         <p><a href="#"><button type="button" class="btn btn-primary btn-lg mt-4 btn-dark pt-3" style="background-color: #9AA7B2; border: none; color: #1B1B1B; width: 50%; font-style: bold; font-size: 1.4em; border: solid #89898C 1px;">CADASTRE-SE</button></a></p>
         </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!---parte dos objetivos-->
 <section id="services" class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section-header class="section-header text-center pb-5">
                    <h2>Nossos Objetivos</h2>
                    <p>O SIEC faz parte de um Trabalho de Conclusão de Curso cujos objetivos são: </p>
                </section-header>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="crad-body">
                            <i class="bi bi-1-circle"></i>
                            <h3 class="crad-title"> Objetivo 1</h3>
                            <p class="lead">Ajudar empresas a encontrarem candidatos ideais para suas vagas e cumprirem a Legislação brasileira.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="crad-body">
                            <i class="bi bi-1-circle"></i>
                            <h3 class="crad-title"> Objetivo 2</h3>
                            <p class="lead">Ajudar candidatos com deficiências a encontrarem vagas ideais para se inserirem no mercado de trabalho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="crad-body">
                            <i class="bi bi-1-circle"></i>
                            <h3 class="crad-title"> Objetivo 3</h3>
                            <p class="lead">Conscientização acerca da importância do trabalho na vida humana e, consequentemente, na vida das pessoas com deficiência.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 
<!---sobre nós-->
<section id="time" class="team section-padding">
   <div class="row">
     <div class="section-header text-center pb-5">
     <h2>Sobre Nós</h2>

     </div>
   </div>
<div class="container d-flex justify-content-around">
   <div class="row">
     <div class="">
        <div class="card text-center">
          <div class="card-body">
          <img src="" alt="" class="img-fluid rounded-circle">
          <h3 class="card-title py-2">Iara Macedo</h3>
          <p class="card-text">Cursando Técnico em Informática no Instituto Federal de Itapetininga e programadora front-end do SIEC.</p>

          <p class="socials">
            <i class="bi bi-linkedin text-dark mx-1"></i>
            <i class="bi bi-github text-dark mx-1"></i>
          </p>
          </div>
        </div>
     </div>
   </div>

   <div class="row">
     <div class="">
        <div class="card text-center">
          <div class="card-body">
          <img src="" alt="" class="img-fluid rounded-circle">
          <h3 class="card-title py-2">Larissa Padilha</h3>
          <p class="card-text">Cursando Técnico em Informática no Instituto Federal de Itapetininga e programadora back-end do SIEC.</p>

          <p class="socials">
            <i class="bi bi-linkedin text-dark mx-1"></i>
            <i class="bi bi-github text-dark mx-1"></i>
          </p>
          </div>
        </div>
     </div>
   </div>


   <div class="row">
     <div class="">
        <div class="card text-center">
          <div class="card-body">
          <img src="" alt="" class="img-fluid rounded-circle">
          <h3 class="card-title py-2">Maria Senger</h3>
          <p class="card-text">Cursando Técnico em Informática no Instituto Federal de Itapetininga e programadora back-end do SIEC.</p>

          <p class="socials">
            <i class="bi bi-linkedin text-dark mx-1"></i>
            <i class="bi bi-github text-dark mx-1"></i>
          </p>
          </div>
        </div>
     </div>
   </div>


   <div class="row">
     <div class="">
        <div class="card text-center">
          <div class="card-body">
          <img src="" alt="" class="img-fluid rounded-circle">
          <h3 class="card-title py-2">Milena Spina</h3>
          <p class="card-text">Cursando Técnico em Informática no Instituto Federal de Itapetininga e programadora front-end do SIEC.</p>

          <p class="socials">
            <i class="bi bi-linkedin text-dark mx-1"></i>
            <i class="bi bi-github text-dark mx-1"></i>
          </p>
          </div>
        </div>
     </div>
   </div>
</div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<x-footer />
</body>
</html>