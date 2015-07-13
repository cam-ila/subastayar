@extends('app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Que es Bestnid?
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              Bestnid es un sitio de subastas un tanto particular, ya que el bien
              subastado no se adjudica al mejor postor sino que cada postor comunica por qué
              necesita dicho producto y el subastador elegirá un ganador.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Necesito registrarme para usar Bestnid?
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                Si queres navegar por el sitio, no es necesario registrarse. Pero si queres realizar una subasta, una oferta o comentar algo que te haya interesado, es necesario hacerlo.
                </br>
                Registrarse es muy facil, solo tenes que hacer click en "Registrarse" y completar la información básica para crear tu cuenta.
            </div>
          </div>

        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingEleven">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                ¿Bestnid es gratis?
              </a>
            </h4>
          </div>
          <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
            <div class="panel-body">
             En Bestnid no importa el dinero, lo unico que importa es la necesidad de la gente. </br>
             Por eso nosotros solo nos quedamos con el 30% del valor de la oferta ganadora.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cómo creo una subasta?
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              Primero para poder crear una subasta debes iniciar sesion. Luego desplegar el menú y seleccionar "Mis subastas", este enlace te llevará a tus subastas, donde podras ver todos los que has publicados. Si haces click en "crear subastas" podras comenzar a realizar una nueva subasta.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ¿Cómo realizo una oferta?
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
             Para realizar una oferta debes primero iniciar sesion en Bestnid, luego ir a la subasta en la cual quieres ofertar y hacer click en el boton de "ofertar". Completa el formulario para crear la oferta.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ¿Cómo edito mis subastas?
              </a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
             Primero para poder editar una subasta debes iniciar sesion. Luego desplegar el menú y seleccionar "Mis subastas", este enlace te llevará a tus subastas, donde podras ver todos los que has publicados. Para editar un aviso, simplemente tenes que hacer click en el botón “Editar”.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                ¿Cómo elimino mis subastas?
              </a>
            </h4>
          </div>
          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
             Primero para poder eliminar una subasta debes iniciar sesion. Luego desplegar el menú y seleccionar "Mis subastas", este enlace te llevará a tus subastas, donde podras ver todos los que has publicados. Para eliminar un aviso, simplemente tenes que hacer click en el botón "Eliminar". </br>
             Recuerda que solo vas a poder eliminar tu subasta si no le han hecho ofertas aun.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                ¿Cómo me entero si gane en una subasta?
              </a>
            </h4>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="panel-body">
             Si resultaste ganador de una subasta, recibiras una notificación avisandote que tu oferta ha sido seleccionada como ganadora. </br>
             Revisar las notificaciones es muy facil, primero debes iniciar sesion, luego desplegar el menú y seleccionar "Notificaciones".
            </div>
          </div>
        </div>
       
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingEight">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                ¿Cómo selecciono una oferta ganadora?
              </a>
            </h4>
          </div>
          <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
            <div class="panel-body">
            Recuerda que para seleccionar una oferta ganadora, la subasta tiene que haber finalizado. </br>
            Primero debes iniciar sesion, luego dirigirte a "Mis Subastas" y seleccionar "Ver" en la subasta a la cual deseas asignarle un ganador. </br>
            En la parte inferior vas a encontrar todas las ofertas que se le han hecho a la subasta, haz click en el boton de "seleccionar oferta ganadora". Una vez seleccionada se te informara los datos de quien realizó la oferta.
            </div>
          </div>
        </div>
    
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingNine">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                ¿Como elimino mi cuenta?
              </a>
            </h4>
          </div>
          <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
            <div class="panel-body">
             Primero debes iniciar sesion, luego dirigirte a "Mi perfil" y clickear en "Dar de baja mi cuenta". 
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTen">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                ¿Puedo recuperar mi cuenta?
              </a>
            </h4>
          </div>
          <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
            <div class="panel-body">
              Si puedes recuperar tu cuenta, para ello tienes que hacer click en "Ingresar" y luego tendras una opcion para ello.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
