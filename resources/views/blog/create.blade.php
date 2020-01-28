@extends('layouts.layout')
@section('title','Nuevo blog')

@section('content')
<h3>Nuevo post</h3>

@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<div class="row">
    <div class="col-md-7 mb-5 pt-5">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="POST" action="{{ route('blog.store') }}"> 
        @csrf
        <p>Ingresar correctamente los datos del post</p>
        
            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="nombre" class="form-control" name="nombre">
                <label for="nombre">Nombre</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="text" id="slug" class="form-control" name="slug">
                <label for="slug">Slug</label>
            </div>

            <div class="md-form">
                <input type="text" id="descripcion" class="form-control" name="descripcion">
                <label for="descripcion">Descripcion</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-primary" type="submit"> Registrar</button>

        </form>
        <!-- Form -->
    </div>
</div>


@endsection