@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="center formulario">
        <h3>Subir archivo</h3>
        <p>Rellene el formulario</p>
        <form action="" method="post" enctype="multipart/form-data">
            <div id="inp_button" class="btn btn-primary">Seleccionar archivo</div>
            <input hidden type="file" name="" id="inp_file">
            <br><br>
            <p>Redacte una descripcion:</p>
            <textarea name="" id="descripcion" cols="30" rows="10"></textarea>
            <br><br>
            <div class="btn btn-success" id="subir">Subir</div>
        </form>
    </div>
<script src="{{ URL::asset('jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(async(e)=>{
        await $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
                }
            }); 
            

        $("#inp_button").off().on("click", (e)=>{
            $("#inp_file").click();
            // console.log("a")
        })
        $("#subir").off().on("click", (e)=>{
            // let fd = new FormData();
            // let file = $("#inp_file")[0].files[0];
            // fd.append("file",  file);

            let descripcion = $("#descripcion").val();

            $.post('/archivo', {}, (d)=>{
                console.log(d)
            })
            
        })
    })
</script>
@endsection