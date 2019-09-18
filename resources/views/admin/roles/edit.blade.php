@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-title">
                <h1>Rol : {{$role->name}}</h1>
                </div>

                <div class="card-text">

                <form action="{{route('roles.update',$role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        @foreach ($permisos as $permiso)
                             <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                name="permisos[]"
                                value="{{$permiso->id}}"
                                id="defaultCheck1">

                                <label class="form-check-label" for="defaultCheck1">
                                    {{$permiso->name}}
                                </label>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>

                </div>

            </div>
        </div>
    </div>


@endsection
