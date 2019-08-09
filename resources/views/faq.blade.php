@extends('layouts.master')
 
@section('content')
 
    <div class="containerPreguntas">
      <section class="p-5">
        <div class="col-md-12 row justify-content-center search-row margenIzq">
          <form>
            <div class="card card-sm search row">
              <div class="col-lg-12 card-body row no-gutters align-items-center search-container">
                <div class="col-auto">
                  <i class="material-icons">search</i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless input-search" type="search" placeholder="Buscar pregunta">
                </div>
                <!--end of col-->
              </div>
            </div>
          </form>
        </div>

        <br>
        <h1>Preguntas Frecuentes</h1>
        <br>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed fontLatoFaq" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>
          </div>
        <br>
 
@endsection