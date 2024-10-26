<div class="container">
    <h2>Actualizar Cita</h2>
    <form action="?controller=cita&&action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $cita->getId() ?>">
        <div class="form-group">
            <label for="text">Solicitante:</label>
            <input type="text" name="solicitante" class="form-control" id="solicitante" value="<?php echo $cita->getSolicitante() ?>">
        </div>
        <div class="form-group">
            <label for="text">Telefono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $cita->getTelefono() ?>">
        </div>
        <div class="form-group">
            <label for="text">Email:</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $cita->getEmail() ?>">
        </div>
        <div class="form-group">
            <label for="text">Servicio:</label>
            <input type="text" name="servicio" class="form-control" id="servicio" value="<?php echo $cita->getServicio() ?>">
        </div>
        <div class="form-group">
            <label for="text">Profesional:</label>
            <input type="text" name="profesional" class="form-control" id="profesional" value="<?php echo $cita->getProfesional() ?>">
        </div>
        <div class="form-group">
            <label for="text">Fecha y hora:</label>
            <input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo $cita->getFecha() ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>