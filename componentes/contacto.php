<!-- <div class="container mt-5 mb-5 border border-dark">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form>
  <div class="form-group mt-5 mb-5">
    <label for="exampleInputEmail1" class="bmd-label-floating">Corre:</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
    <span class="bmd-help">We'll never share your email with anyone else.</span>
  </div>
  <div class="form-group mt-5 mb-5">
    <label for="exampleInputPassword1" class="bmd-label-floating">Nombre:</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group mt-5 mb-5">
    <label for="exampleTextarea" class="bmd-label-floating">Comentarios</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <button class="btn btn-default mt-5 mb-5">Cancel</button>
  <button type="submit" class="btn btn-primary btn-raised bg-secondary mt-5 mb-5">Enviar</button>
</form>
        </div>
    </div>
</div> -->
<section class="content-section">
   	    <div class="container">
	      <div class="row">
	        <div class="col-lg-8 col-md-10 mx-auto">
	        	<h1 class="my-4 text-dark text-center">Envianos un mensaje</h1>
	          <p class="my-4 text-dark ">Si tienes alguna duda de nuestros servicios, envianos un mensaje y nosotros nos pondremos en contacto contigo.</p>
	          <form name="sentMessage" id="contactForm" novalidate>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls">
	                <label class="text-dark">Nombre</label>
	                <!--Insertar tipo de dato de entrada y clase-->
	                <input type="text" class="form-control" placeholder="Nombre">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls">
	                <label class="text-dark">Apellidos</label>
	                <!--Insertar tipo de dato de entrada y clase-->
	                <input type="text" class="form-control" placeholder="Apellidos">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group col-xs-12 floating-label-form-group controls">
	                <label class="text-dark">Correo electrónico</label>
	                <!--Insertar tipo de dato de entrada y clase-->
	                <input type="text" class="form-control" placeholder="example@cpp.com" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls">
	                <label class="text-dark">Mensaje</label>
	                <!--Insertar tipo de dato de entrada y clase-->
	                <textarea type="text" class="form-control" placeholder="Escribe tu mensaje"></textarea>
	                <p class="help-block textdark"></p>
	              </div>
	            </div>
	            <br>
	            <div id="success"></div>
	            <div class="form-group text-center">
	            	<!--Agregar estilo de boton-->
	              <button type="submit" class="btn btn-default btn-block bg-success " id="sendMessageButton">Enviar</button>
	            </div>
	          </form>
	        </div>
	      </div>
    </div>

    </section>