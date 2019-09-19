@extends ('layouts.app')

@section('content')
<!-- Inicia contenido de vista -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CONTACTO</div>

                <div class="card-body">
                    Contacto

                    <!-- <?php
                        for($x = 0; $x < 5; $x++){
                            echo "HOLA $x <br />";
                        }
                    ?> -->

                    <ul>
                    @for($x = 0; $x < 5; $x++)
                        <li>HOLA {{$x}} <br /></li>
                    @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Termina contenido de vista -->
@endsection