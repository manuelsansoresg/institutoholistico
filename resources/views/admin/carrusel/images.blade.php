@extends('adminlte::page')

@section('title', 'Carrusel')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote-bs4.css') }}">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Carrusel
                    <small>Imagenes</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="/admin/carrusel">Carrusel</a></li>
                    <li class="breadcrumb-item active">Imagenes</li>

                </ol>
            </div>
        </div>
    </div>


@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 bg-white">
                <form method="post" action="/admin/carrusel/images/{{ $set_lang }}" enctype="multipart/form-data">
                    @csrf
                    @if ($images !== null && count($images) <= 6)
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 mt-3">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Agregar imagen</label>
                                    <input type="file" name="imagen" class="form-control">
                                </div>
                                <div class="mb-3 text-right">
                                    <button class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </form>
            </div>

        </div>
        @if ($images !== null)
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-12 col-md-2">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('img/carrusel') . '/' . 'thumb_' . $image->image }}"
                                alt="">
                        </div>
                        <div class="">
                            <p>
                                <br>
                                <a href="/admin/carrusel/image/destroy/{{ $image->id }}/{{ $set_lang }}"
                                    class="btn btn-danger btn-block">Borrar</a>
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        @endif
    </div>
@stop
