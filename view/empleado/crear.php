<div class="card mx-0 mt-5 d-flex">
    <div class="card-header">
        Nuevo Empleado
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="" class="form-label">Nombres</label>
              <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Nombres del empleado"
                maxlength="45" required>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Correo del empleado</label>              
              <input type="text"
                class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="Correo del empleado"
                maxlength="75" required>                          
            </div>

            <input name="guardarEmpleado" id="" class="btn btn-success" type="submit" value="Guardar empleado">
        </form>
    </div>    
</div>