@extends('auth.layouts.app')

@section('content')
@include('admin.inc.functions');
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingreso Productos</div>
                <div class="panel-body">
                    <form method="POST" action={{ url('/admin/crear') }} accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descripcionBreve') ? ' has-error' : '' }}">
                            <label for="descripcionBreve" class="col-md-4 control-label">Descripción Breve</label>

                            <div class="col-md-6">
                                <input id="descripcionBreve" type="text" class="form-control" name="descripcionBreve" value="{{ old('descripcionBreve') }}" required>

                                @if ($errors->has('descripcionBreve'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcionBreve') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            <label for="descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <textarea rows="3" cols="50" id="descripcion" class="form-control" name="descripcion" required ></textarea>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control" name="precio" value="{{ old('descripcionBreve') }}" required>

                                @if ($errors->has('precio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">   
                            <label for="imagen" class="col-md-4 control-label" > Imagen </label>

                            <div class="col-md-6">
                                    <input id="imagen" type="file" name="imagen" accept="image/*" >
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input id="dst" type='hidden' value='0' name='dst'>
                                        <input id="dst" type="checkbox"  value="1" name='dst' > Destacado
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar Producto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="Container col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>
                <div class="panel-body">
                    <table class="table"> 
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Nombre</th> 
                                <th>Imagen</th> 
                                <th>Breve Descripción</th>
                                <th>Descripción</th>
                                <th>Eliminar</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach ( $productos as $producto_id => $producto )
                                {!! filas($producto_id, $producto) !!}
                            @endforeach
                        </tbody> 
                    </table>
                    <div class="col-md-8 col-md-offset-3">
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="Container col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                <div class="panel-body">
                    <table class="table"> 
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Nombre</th> 
                                <th>E-mail</th> 
                                <th>Rol</th>
                                <th>Eliminar</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach ($usuarios as $usuario)
                            <tr><td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                @foreach ($usuario->roles as $rol)
                                <td>
                                        {{ $rol->display_name }}
                                </td>
                                @endforeach
                                <td>
                                <a href={{ route('editusuario',  $usuario->id) }} class="btn btn-primary">
                                    Eliminar
                                </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
