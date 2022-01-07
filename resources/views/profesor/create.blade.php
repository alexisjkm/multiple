@extends('../layouts.main')
@section('title', 'Crear Formulario')
@section('content')

<div class="container">
    <div class="col-md-6 offset-md-3">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalStatic" >Crear Nuevo Examen</button>
    </div>
    <div class="modal fade" id="modalStatic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalStaticLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalStaticLabel">Modal - detalles de examen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="col-12">

                    <div class="mb-3 row">
                        <label for="nombreExamen" class="col-sm-2 col-form-label">Nombre Examen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombreExamen">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad Preguntas</label>
                        <div class="col-sm-10">
                        
                            <div class="form-check">
                                <input class="form-check-input" value="1" type="radio" name="pregunta" id="pregunta1" checked>
                                <label class="form-check-label" for="pregunta1">1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="2" type="radio" name="pregunta" id="pregunta2" >
                                <label class="form-check-label" for="flexRadioDefault2">2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="3" type="radio" name="pregunta" id="pregunta3">
                                <label class="form-check-label" for="pregunta3">3</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="4" type="radio" name="pregunta" id="pregunta4">
                                <label class="form-check-label" for="pregunta4">4</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="5" type="radio" name="pregunta" id="pregunta5">
                                <label class="form-check-label" for="pregunta5">5</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="guardarPreguntas()"  class="btn btn-primary">Guardar</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection