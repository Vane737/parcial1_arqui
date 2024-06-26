<div class="d-flex align-items-center">
    <a href="?controller=actividades&action=index" style="color: black"><i class="fa fa-lg fa-arrow-left"></i></a>
    <h4 class="px-2">Actividades/crear</h4>
</div>

<div class="card vh-100 p-2">
    <div class="card-body flex-column h-100">
        <form action="?controller=actividades&action=store" method="POST">
            <div class="row row-cols-lg-auto g-3 align-items-center">
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        <label for="nombreInput">Nombre</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="date" class="form-control" name="fecha">
                        <label for="fechaInput">Fecha</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="time" class="form-control" name="hora_inicio">
                        <label for="hora_inicioInput">Hora Inicio</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="time" class="form-control" name="hora_fin">
                        <label for="hora_finInput">Hora Fin</label>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="button-principal btn-sm">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>