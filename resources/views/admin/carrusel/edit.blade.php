@extends('adminlte::page')

@section('title', 'Carrusel')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote-bs4.css') }}">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Carrusel
                    <small>Listado</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="/admin/carrusel">Carrusel</a></li>
                    <li class="breadcrumb-item active">Editar</li>

                </ol>
            </div>
        </div>
    </div>


@stop

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12 bg-white">
                <div class="box py-3 px-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ Form::open(['route' => ['carrusel.update', $section_id], 'method' => 'PUT', 'files' => true]) }}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Título</label>
                                        <textarea name="titulo" id="titulo">{!! $es_sections[0]->description !!}</textarea>


                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('titulo') }}</span>
                                        @endif
                                    </div>


                                </div>
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descripción</label>
                                        <textarea name="descripcion" id="descripcion">{!! isset($es_sections[1]->description) ? $es_sections[1]->description : '' !!}</textarea>

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('descripcion') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <br>
                                <div class="col-md-11 box-header with-border">
                                    <h3 class="box-title">Imágenes</h3>
                                </div>
                                <div class="col-md-12">
                                    <br> <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Imagen dimensiones recomendadas (1929 pixeles ancho * 700 pixeles alto)
                                        </label>
                                        <?php $imagen1 = isset($images[$set_lang . '-1']) ? $images[$set_lang . '-1'] : null; ?>
                                        @if ($imagen1 === null)
                                            <input type="file" name="imagen" class="form-control">
                                            @if ($errors)
                                                <span class="text-danger"> {{ $errors->first('imagen') }}</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12"> </div>
                                <div class="col-md-2">
                                    @if ($imagen1 != null)
                                        <img src="{{ asset('img/carrusel') . '/' . 'thumb_' . $imagen1->image }}" alt="">
                                        <div class="pull-right">
                                            <p>
                                                <br>
                                                <a href="/admin/carrusel/image/destroy/{{ $imagen1->id }}/{{ $set_lang }}"
                                                    class="btn btn-danger ">Borrar</a>
                                            </p>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12"> </div>
                                {{-- imagen2 --}}
                                <?php $imagen2 = isset($images[$set_lang . '-2']) ? $images[$set_lang . '-2'] : null; ?>
                                <div class="col-md-12">
                                    <br> <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Imagen2 dimensiones recomendadas (1929 pixeles ancho * 700 pixeles alto)
                                        </label>

                                        @if ($imagen2 == null)
                                            <input type="file" name="imagen2" class="form-control">
                                            @if ($errors)
                                                <span class="text-danger"> {{ $errors->first('imagen2') }}</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12"> </div>
                                <div class="col-md-2">
                                    @if ($imagen2 != null)
                                        <img src="{{ asset('img/carrusel') . '/' . 'thumb_' . $imagen2->image }}" alt="">
                                        <div class="pull-right">
                                            <p>
                                                <br>
                                                <a href="/admin/carrusel/image/destroy/{{ $imagen2->id }}/{{ $set_lang }}"
                                                    class="btn btn-danger ">Borrar</a>
                                            </p>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12"> </div>

                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="lang" value="{{ $set_lang }}">
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor_assets/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#titulo').summernote({
                height: 150,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular',
                    'ObjectSans-Bold'
                ],
                fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                colors: [
                    ['#1b365d', '#57728b', 'black', 'white']
                ],
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'codeview']]
                ]
            });

            $('#descripcion').summernote({
                height: 200,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular',
                    'ObjectSans-Bold'
                ],
                fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                colors: [
                    ['#1b365d', '#57728b', 'white']
                ],
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'codeview']]
                ]
            });

            $('#descripcion2').summernote({
                height: 200,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular',
                    'ObjectSans-Bold'
                ],
                fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                colors: [
                    ['#1b365d', '#57728b', 'white']
                ],
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'codeview']]
                ]
            });
        });
    </script>

@stop
