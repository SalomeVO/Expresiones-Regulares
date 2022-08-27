@extends('welcome')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <!-- Para reflejar los mensjaes de errores -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card border-primary">

                <form action="{{route('save')}}" method="POST">
                    @csrf
                    <div class="card-header border-primary text-center text-white" style="background-color: #3A65D7"; >
                        <i class="fas fa-asterisk"> Expresiones Regulares <i class="fas fa-exclamation"></i></i>
                    </div>

                         <div class="card-body" style="background-color: #B4E3F0;">

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-primary"><b>Nombre</b></label>

                                <input name="nombre" type="text" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-primary"><b>Apellido</b></label>

                                <input name="apellido" type="text" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-primary"><b>Email</b></label>

                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <button type="submit" class="btn btn col-md-9 offset-2 text-white mb-2" style="background-color: #3B8FF9;">
                                <i class="fas fa-user-plus">  Suscribirse</i>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<!--Ventanas Emergentes-->
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Mensaje de Guardado-->
    @if(session('Guardado')=='Guardado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Se ha registrado satisfactoriamente',
                showConfirmButton: true
            })
        </script>
    @endif

    <!--Mensaje de Guardado-->
    @if(session('Error')=='Error')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Compruebe que los textos ingresados cumplen con las indicaciones sugeridas',
            })
        </script>
    @endif
@endsection
