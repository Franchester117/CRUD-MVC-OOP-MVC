<div class="card mx-0 mt-5 d-flex">
    <div class="card-header">
        Editar Empleado
    </div>
    <div class="card-body">
        <form action="" method="POST">

            <div class="mb-3">
              <label for="" class="form-label">ID</label>
              <input type="text"
                class="form-control" name="id" id="" placeholder="ID"
                maxlength="45" value="<?php echo $empleado->id ?>" readonly required>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Nombres</label>
              <input type="text"
                class="form-control" name="nombre" id="" placeholder="Nombres del empleado"
                maxlength="45" value="<?php echo $empleado->nombre ?>" required>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Correo del empleado</label>              
              <input type="text"
                class="form-control" name="correo" id="" placeholder="Correo del empleado"
                maxlength="75" value="<?php echo $empleado->correo ?>" required>                          
            </div>

            <input name="actualizarEmpleado" id="" class="btn btn-success" type="submit" value="Actualizar empleado">
            <a href="./?controller=empleado&action=inicio" class="btn btn-warning">Cancelar</a>
        </form>
    </div>    
</div>