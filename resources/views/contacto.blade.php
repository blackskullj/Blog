@extends ('layouts.app')

@section('content')
<!-- Inicia contenido de vista -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CONTACTO</div>

                <div class="card-body">
                    <form action="{{ route('guardar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Escribe tu correo</label>
                            <input type="email" nombre="correo" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Escribe tu comentario</label>
                            <textarea class="form-control" nombre="comentario" id="comentario" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Termina contenido de vista -->
@endsection