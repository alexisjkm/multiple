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
                                <input class="form-check-input" type="radio" name="pregunta${j}" id="pregunta${j}${k}" >
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
    id = $("#id_solicitud").val();
    console.log(id);
    cantidadk = $("#k").val();
    cantidadj = $("#j").val();
    
    console.log(`cantidad j ${cantidadj}`);
    console.log(`cantidad k ${cantidadk}`);


    url = '/api/test/pregunta/'
    preguntas = []
    respuestas = []
    console.log(`url k ${url}`);
    j = 0;
    for (i = 0; i < cantidadj; i++){
        j++;
        console.log(`i ${i}`)
        preguntaN = $(`#preguntaN${j}`).val();
        
        
        for (k = 1; k <= cantidadk; k++){
            correcta = $(`input[id=pregunta${j}${k}]`).is(" :checked");
            respuesta = $(`#respuesta${j}${k}`).val();
            console.log(`correcta ${respuesta} ${correcta}`)

            respuestas.push({
                'correcta': correcta,
                'respuesta': respuesta
            })
        }
        
        preguntas.push({
            'pregunta': preguntaN,
            "respuesta": respuestas
        })

    }
    $.ajax({
        url: url, 
        contentType: "application/json",
        url:url,
        method: "POST",
        dataType: "json",
        data : JSON.stringify({
            preguntas : preguntas, 
            id:id
        }),
        success:function(data){
            window.location =  `/profesor/`
        } 
    })

}