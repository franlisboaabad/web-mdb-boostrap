@extends('layouts.layout')
@section('title','Actualizar blog')

@section('content')
<h3>Editar  post : #{{ $blog->id }}</h3>

@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<div class="row">
    <div class="col-md-7 mb-5 pt-5">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="POST" action="{{ route('blog.update',$blog->id) }}"> 
        @method('PUT')
        @csrf
        <p>Ingresar correctamente los datos del post</p>
        
            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="nombre" class="form-control" name="nombre"
                    value="{{ $blog->nombre }}"
                >
                
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="text" id="slug" class="form-control" name="slug"
                value="{{ $blog->slug }}"
                >
               
            </div>

            <div class="md-form">
                <input type="text" id="descripcion" class="form-control" name="descripcion"
                value="{{ $blog->descripcion }}" 
                >
               
            </div>

            <!-- Sign in button -->
            <button class="btn btn-primary" type="submit"> Actualizar</button>

        </form>
        <!-- Form -->
    </div>
</div>


@endsection