<!-- css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<!-- contenido -->

<h4>Miembros</h4>
<div class="card vh-100 p-2">
    <div class="card-body flex-column h-100">
        <div class="pb-2">
            <a class="button-principal" href="?controller=miembros&action=create">Registrar Miembro</a>
            <a class="button-cancelar" href="?controller=miembros&action=index_suspended">Miembros suspendidos</a>
        </div>
        <table class="table table-striped" id="table" style="width:100%">
            <thead>
                <th>CI</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CELULAR</th>
                <th>CORREO</th>
                <th>ACTUALIZADO</th>
              
                <th>OPCIÓN</th>
            </thead>
            <tbody>

                <?php foreach ($miembros as $miembro) { ?>
                    <tr>
                        <td><?php echo $miembro[1]->ci ?></td>
                        <td><?php echo $miembro[1]->nombre ?></td>
                        <td><?php echo $miembro[1]->apellido ?></td>
                        <td><?php echo $miembro[1]->celular ?></td>
                        <td><?php echo $miembro[1]->correo ?></td>
                        <td> <?php $date = DateTime::createFromFormat('Y-m-d H:i:s.u', $miembro[1]->updated_at); echo $date->format('d-m-Y');   ?></td>
                       
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opciones
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href='?controller=miembros&action=show&id=<?php echo $miembro[0]->id; ?>'>Ver</a></li>
                                    <li><a class="dropdown-item" href='?controller=miembros&action=edit&id=<?php echo $miembro[0]->id; ?>'>Editar</a></li>
                                    <li><a class="dropdown-item" href='?controller=miembros&action=deleteSoftMiembro&id=<?php echo $miembro[0]->id;?>'>Suspender</a></li>
                                    <li><a class="dropdown-item" href="?controller=miembros&action=parentezco&id=<?php echo $miembro[0]->id; ?>">Parentezco</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- js -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#table', {
        order: []
    });
</script>