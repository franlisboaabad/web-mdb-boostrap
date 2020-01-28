@extends('layouts.layout')
@section('title','Página blog')


@section('content')


<a href="{{ route('blog.create') }}" class="btn btn-danger"> NUEVO POST </a>

@if ( session('mensaje') )
    <div class="alert alert-danger">{{ session('mensaje') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Slug</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blog as $item)
        <tr>
            <th scope="row">{{$item->id }}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->descripcion}}</td>
            <td>
                <form action="{{ route('blog.destroy', $item) }}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
                <a href="{{ route('blog.edit',$item) }}" class="btn btn-success"><i class="fa fa-edit"></i> </a>           
    
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop