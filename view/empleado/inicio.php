<div class="card">
    <div class="card-header">
        <a href="?controller=empleado&action=crear" class="btn btn-success" role="button">Nuevo empleado</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach($empleados as $data){            
                ?>    
                    <tr>
                        <td><?php echo $data->id ?></td>
                        <td><?php echo $data->nombre ?></td>
                        <td><?php echo $data->correo ?></td>
                        <td><div class="btn-group" role="group" aria-label="">
                            <a href="?controller=empleado&action=editar&id=<?php echo $data->id ?>"
                            class="btn btn-warning">Editar</a>
                            <a href="?controller=empleado&action=eliminar&id=<?php echo $data->id ?>"
                            class="btn btn-danger">Eliminar</a>
                        </div></td>
                    </tr>       
                <?php
                    }
                ?>
            </tbody>
        </table>
    
    </div>
</div>

