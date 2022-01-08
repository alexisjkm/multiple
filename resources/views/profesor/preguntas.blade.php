@extends('../layouts.main')
@section('title', 'Crear Preguntas')
@section('content')

<div class="container">
    <div class="col-md-12 " id="preguntas">
        <input type="hidden" value="{!!$id!!}" id="id_solicitud">
        <!-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalStatic" >Crear  Examen</button> -->
    </div>
    <div class="col-md-12">
        
    </div>
    <script>
        
        
        getPreguntas({!!$id!!});
    </script>
    
</div>
@endsection