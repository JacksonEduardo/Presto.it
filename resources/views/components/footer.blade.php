<footer class="bg-light text-center ">

  <div class="container p-4">
      

      <section class="mb-4">
          <a href="https://www.linkedin.com/in/antoniogiannino-webdeveloper/"><i class="bi bi-linkedin fs-3 m-2"></i>Antonio Giannino</a>
  <a href="https://www.linkedin.com/in/roberto-acerbo-dev/"><i class="bi bi-linkedin fs-3 m-2"></i>Roberto Acerbo</a>
          <a href="https://www.linkedin.com/in/cristian-filograno-dev/"><i class="bi bi-linkedin fs-3 m-2"></i>Cristian Filograno</a>
  <a href="https://www.linkedin.com/in/flaviolaterzafullstackdeveloperjunior/"><i class="bi bi-linkedin fs-3 m-2"></i>Flavio Laterza</a>
          <a href="https://www.linkedin.com/in/jackson-zabala-web-developer/"><i class="bi bi-linkedin fs-3 m-2"></i>Jackson Zabala</a>
      </section>

      <section class="">
          <form action="">
              <div class="row d-flex justify-content-center">
                  <div class="col-auto">
                      <p class="lead pt-2">
                          Contattaci
                      </p>
                  </div>

                  <div class="col-md-5 col-12">
                      <div class="form-outline mb-4">
                          <input type="email" id="form5Example2" class="form-control" />
                      </div>
                  </div>

                  <div class="col-auto">
                      
                      <button type="submit" class="btn btn-primary mb-4 me-md-5">
                          <i class="bi bi-envelope-paper"></i>
                      </button>
                  </div>
              </div>
          </form>
      </section>

      <section class="">
          <div class="row d-flex justify-content-center">
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <a href="">
                      <h5 class="fw-light pt-2">Tutti i prodotti</h5>
                  </a>
              </div>
              @auth
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <a class="fw-light" href="{{route('become.revisor')}}">
                        <button class="btn btn-outline-primary fw-bold">Diventa Revisore</button>
                    </a>
              </div>
              @endauth
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <a href="">
                      <h5 class="fw-light pt-2">Chi Siamo?</h5>
                  </a>
              </div>
          </div>
      </section>
      
  </div>
  
  <div class="text-center pb-1">
      <p class="lead">©2023 Ctrl-Alt-Shit, Presto.it</p>
  </div>
  
</footer>