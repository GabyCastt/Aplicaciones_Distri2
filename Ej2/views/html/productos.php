 <!-- Nueva tabla -->
 <div class='container-fluid pt-4 px-4'>
                <button type="button" onclick="cargarRoles()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario">
                    Nuevo Producto
                </button>
                <div class='d-flex align-items-center justify-content-between mb-4'>
                    <h6 class='mb-0'> Lista de Productos </h6>
                </div>

                <table class="table table-bordered table-striped table-hover table-responsive">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Estock</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpousuarios">
                        <!-- Aquí se llenará dinámicamente con JavaScript -->
                    </tbody>
                </table>
            </div>
            <!-- Fin de la nueva tabla -->