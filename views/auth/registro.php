<main class="auth" style="font-size: 22px;">
   <div class="row">
        <div class="col-lg-6">
            <h2 class="auth__heading" style="font-size: 30px;">Ubícanos</h2>
            <?php 
                require_once __DIR__ . '/../templates/alertas.php';
            ?>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/celular.png" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Teléfonos</strong></span>
                    <span>955564403</span>
                    <span>933270708</span>
                </div>
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/correo.png" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Correo</strong></span>
                    <span>ventas@inteltechperu.com</span>
                    <span>yantezana@inteltechperu.com </span>
                </div> 
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/direccion.jpg" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Dirección</strong></span>
                    <span>Av. Brasil 836, Of. 2706, Breña</span>
                </div> 
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/web.jpg" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Web</strong></span>
                    <span>www.inteltechperu.com</span>
                </div> 
            </div>
        </div>
            
        <div class="col-lg-6">
            <h2 class="auth__heading" style="font-size: 30px;"><?php echo $titulo; ?></h2>
            <?php 
                require_once __DIR__ . '/../templates/alertas.php';
            ?>

            <form method="POST" action="/registro" class="formulario">
                <div class="formulario__campo">
                    <label for="nombre" class="formulario__label">Nombre y Apellido</label>
                    <input
                        type="text"
                        class="formulario__input"
                        placeholder="Escriba su Nombre"
                        id="nombre"
                        name="nombre"
                        value="<?php echo $usuario->nombre; ?>"
                    >
                </div>

                <div class="formulario__campo">
                    <label for="email" class="formulario__label">Email</label>
                    <input
                        type="email"
                        class="formulario__input"
                        placeholder="Escriba su Email"
                        id="email"
                        name="email"
                        value="<?php echo $usuario->email; ?>"
                    >
                </div>

                <!-- <div class="formulario__campo">
                    <label for="compania" class="formulario__label">Compañia</label>
                    <input
                        type="text"
                        class="formulario__input"
                        placeholder="Tu Compañia"
                        id="compania"
                        name="compania"
                    >
                </div> -->

                <div class="formulario__campo">
                    <label for="asunto" class="formulario__label">Asunto</label>
                    <input
                        type="text"
                        class="formulario__input"
                        placeholder="Escriba su Asunto"
                        id="asunto"
                        name="asunto"
                    >
                </div>

                <div class="formulario__campo">
                    <label for="mensaje" class="formulario__label">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="4" class="formulario__input" placeholder="Escriba su Mensaje"></textarea>
                </div>

                <input type="submit" class="formulario__submit" value="Enviar">
            </form>
        </div>
   </div>

    
</main>