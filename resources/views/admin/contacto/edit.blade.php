@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote-bs4.css') }}">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Contacto
                    <small>Listado</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="/admin/contacto">Contacto</a></li>
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
                        {{ Form::open(['route' => ['contacto.update', $section_id], 'method' => 'PUT', 'files' => true]) }}

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
                                        <textarea name="descripcion" id="descripcion">{!! $es_sections[1]->description !!}</textarea>

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('descripcion') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Correo</label>
                                        <input name="email_contact" class="form-control" id="email_contact"
                                            value="{!! $es_sections[2]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('email_contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Celular</label>
                                        <input name="celular_contact" class="form-control" id="celular_contact"
                                            value="{!! $es_sections[3]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('celular_contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Youtube</label>
                                        <input name="youtube_contact" class="form-control" id="youtube_contact"
                                            value="{!! $es_sections[4]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('youtube_contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Páginas de Facebook</label>
                                        <textarea class="summer" name="pages_facebook_contact"
                                            id="pages_facebook_contact">{!! $es_sections[5]->description !!}</textarea>

                                        @if ($errors)
                                            <span class="text-danger">
                                                {{ $errors->first('pages_facebook_contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <h5 class="text-bold">Seccion formulario</h5>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input name="name" class="form-control" id="name" value="{!! $es_sections[6]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ciudad</label>
                                        <input name="city" class="form-control" id="city" value="{!! $es_sections[7]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">País</label>
                                        <input name="country" class="form-control" id="country"
                                            value="{!! $es_sections[8]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Teléfono</label>
                                        <input name="telephone" class="form-control" id="telephone"
                                            value="{!! $es_sections[9]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('telephone') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Correo</label>
                                        <input name="email" class="form-control" id="email"
                                            value="{!! $es_sections[10]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Comentario</label>
                                        <input name="comment" class="form-control" id="comment"
                                            value="{!! $es_sections[11]->description !!}">

                                        @if ($errors)
                                            <span class="text-danger"> {{ $errors->first('comment') }}</span>
                                        @endif
                                    </div>
                                </div>


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
                height: 50,
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

            $('.summer').summernote({
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
