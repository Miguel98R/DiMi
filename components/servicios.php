<section class="py-4" id="servicios">
    <div class="container-fluid ">
 
    <h2 class="h1 text-center py-4"><strong>Nuestros servicios</strong></h2>



    <div class="row">
    
        <div class="col-md-6 py-3  wow fadeInLeft  ">
         <!-- Card -->
        <div class="card card-image"style="background-image: url(./img/desarrollo.jpg);">

        <!-- Content -->
        <div class="text-white text-left d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
            <h5 class="grey-text"><i class="fas fa-laptop-code"></i> </h5>
            <h3 class="card-title pt-2"><strong>Desarrollo de software</strong></h3>
           <p></p>
            <a class="btn btn-light text-dark"data-toggle="modal" data-target="#orangeModalSubscription">
                <i class="fas fa-clone left"></i>Contáctanos y comienza 
            </a>
            </div>
        </div>

        </div>
        <!-- Card -->
        
        
         </div>
        <div class="col-md-6 py-3 wow fadeInLeft">
            <!-- Card -->
        <div class="card card-image"
        style="background-image: url(./img/HassioLogo.png);">

        <!-- Content -->
        <div class="text-white text-left d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
            <h5 class="grey-text"><i class="fas fa-home"></i> </h5>
            <h3 class="card-title pt-2"><strong>Implementación de Home assistant</strong></h3>
           <p></p>
             <a class="btn btn-light text-dark"data-toggle="modal" data-target="#orangeModalSubscription">
                 <i class="fas fa-clone left"></i>Contáctanos y comienza
            </a>
            </div>
        </div>

        </div>
        <!-- Card -->
        
        
         </div>
    </div>



    <div class="row">
        <div class="col-md-6 py-3 wow fadeInRight">
          <!-- Card -->
        <div class="card card-image"
        style="background-image: url(./img/formateo-pc.jpg);">

        <!-- Content -->
        <div class="text-white text-left d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
            <h5 class="grey-text"><i class="fas fa-tools"></i> </h5>
            <h3 class="card-title pt-2"><strong>Formateo e instalación</strong></h3>
            <p></p>
             <a class="btn btn-light text-dark"data-toggle="modal" data-target="#orangeModalSubscription">
                <i class="fas fa-clone left"></i>Contáctanos y comienza
            </a>
            </div>
        </div>

        </div>
        <!-- Card -->
        
        
         </div>
        <div class="col-md-6 py-3 wow fadeInRight">
        
           <!-- Card -->
        <div class="card card-image"
        style="background-image: url(./img/diseño.jpg);">

        <!-- Content -->
        <div class="text-white text-left d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
            <h5 class="grey-text"><i class="fas fa-palette"></i> </h5>
            <h3 class="card-title pt-2"><strong>Diseño</strong></h3>
            <p></p>
           
            <a class="btn btn-light text-dark"data-toggle="modal" data-target="#orangeModalSubscription">
                <i class="fas fa-clone left"></i>Contáctanos y comienza
            </a>
            </div>
        </div>

        </div>
        <!-- Card -->
        
        
         </div>
    </div>
    
    </div>

<form action="./util/mail.php" method="post" autocomplete="off">
<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  special-color" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title text-dark w-100 font-weight-bold py-2">Contacto</h4>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-dark">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="nombre" name="nombre" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="form1">Nombre</label>
        </div>

        <div class="md-form mb-5">
            <i class="fas fa-phone  prefix  grey-text"></i>
          <input type="text" id="cel" name="cel" class="form-control validate" maxlength="10" required>
          <label data-error="wrong" data-success="right" for="form2">Celular o Telefóno</label>
        </div>

        <div class="md-form mb-5">
            <i class="fas fa-envelope prefix  grey-text"></i>
   
          <input type="email" id="email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Correo electrónico (opcional)</label>
        </div>

         <div class="md-form ">
         
            <select class="browser-default custom-select validate form-control " id="servicio" name="servicio" required>
                <option selected>Selecciona un servicio</option>
                <option value="Software">Desarrollo de software</option>
                <option value="HomeAssistant">Implementación de Home assistant</option>
                <option value="Formateo">Formateo e instalación</option>
                <option value="Diseno">Diseño</option>
            </select>
         </div>

        <div class="md-form">
        <i class="fas fa-file-alt prefix grey-text"></i>
          <input type="text" id="mensaje" name="mensaje" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="form4">Cuéntanos tu problema</label>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <button   type="submit" class="btn btn-elegant waves-effect">Enviar</button>
      
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

</form>
</section>