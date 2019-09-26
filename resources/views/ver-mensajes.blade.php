@extends ('layouts.app')

@section('content')
<!-- Inicia contenido de vista -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista De Mensajes</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Correo</th>
                                <th>Mensaje</th>
                                <th>Enviado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mensajes as $mensaje)
                                <tr>
                                <th>{{ mensaje->correo }}</th>
                                <th>{{ mensaje->comentario }}</th>
                                <th>{{ mensaje->created_at }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Termina contenido de vista -->
@endsection