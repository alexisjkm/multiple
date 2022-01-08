function guardarPreguntas(){
    nombrePregunta = $("#nombreExamen").val();
    pregunta = $('input[name=pregunta]:checked').val();

    url = '/api/test/profesor'

    $.ajax({
        contentType: "application/json",
        url:url,
        method: "POST",
        dataType: "json",
        data : JSON.stringify({
            nombrePregunta : nombrePregunta,
            pregunta : pregunta,
        }),
        success:function(data){
            id = data.id
            console.log(data.id);
            window.location =  `/profesor/${id}`
        },
        error:function(jqXHR, exception){

        }
    })
}

function getPreguntas(idSolicitud){

    // idSolicitud = $("#id_solicitud").val();
    url = `/api/test/profesor/${idSolicitud}`
    console.log(idSolicitud);

    
  


    $.ajax({
        contentType: "application/json",
        url:url,
        method: "GET",
        dataType: "json",
        // data : JSON.stringify({
        //     nombrePregunta : nombrePregunta,
        //     pregunta : pregunta,
        // }),
        success:function(data){
            cantidad = data.cantidad
            // window.location =  `/profesor/${id}`
            j = 1;
            for (i = 0; i < cantidad; i++){
                titulo = `<div class="mb-3 row">
                    <label for="preguntaN${j}" class="col-sm-2 col-form-label">Pregunta ${j}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="preguntaN${j}">
                    </div>
                </div>`

                preguntaTitulo = ''
                for (k = 1; k <= 3; k++ ){

                    preguntaTitulo +=  `<div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-2 row">
                            <div class="col-sm-12">
                                <label for="respuesta${j}${k}" class="col-sm-7 col-form-label">Respuesta ${k}</label>
                            </div>
                        </div>
                        <div class="col row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="respuesta${j}${k}">
                            </div>
                        </div>
                        <div class="col-2 row">
                            <div class="col-sm-12">
                                <input class="form-check-input" value="1" type="radio" name="pregunta${j}" id="pregunta${j}${k}" >
                                <label class="form-check-label" for="pregunta3">Correcta</label>
                            </div>
                        </div>
                    </div>`
                }
                $("#preguntas").append(`${titulo} ${preguntaTitulo}`);
                j++
            }
            j--;
            k--;
            cantidadJ = `<input type="hidden" class="form-control" value="${j}" id="j">`
            cantidadK = `<input type="hidden" class="form-control" value="${k}" id="k"> `
            $("#preguntas").append(`${cantidadJ}${cantidadK} <button type="button" onclick="guardarPreguntaRespuesta()"  class="btn btn-primary">Guardar</button>`);
            // preguntas = $("#preguntas").html();

        },
        error:function(jqXHR, exception){

        }
    })

}   

function guardarPreguntaRespuesta(){
    cantidadk = $("#k").val();
    cantidadj = $("#j").val();

    url = '/api/test/profesor/'
    preguntas = {}
    for (i = 0; i < cantidadJ; i++){
        respuesta = $(`#respuesta${j}`).val(),
        correcta = $(`input[name=pregunta${j}]:checked`).val();
    }
    $.ajax({
        url: url, 
        contentType: "application/json",
        url:url,
        method: "PUT",
        dataType: "json",
        data : JSON.stringify({

        }), 
    })

}