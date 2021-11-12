@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
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
                    <li class="breadcrumb-item active">Contacto</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  bg-white">
                <div class="box py-3 px-3">

                    <!-- /.box-header -->
                    <div class="box-body">
                        {{-- <div>
                        <a href="/admin/about/create" class="btn btn-app pull-right">
                            <i class="fa fa-plus"></i> Nuevo
                        </a>
                    </div> --}}
                        <div class="col-md-12">
                            @include('flash::message')
                        </div>
                        <table id="dataTable" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Título</th>
                                    <th>Descripcion</th>
                                    <th>Celular</th>
                                    <th>Correo</th>
                                    <th>Lenguaje</th>
                                    <th style="width:150px"></th>
                                </tr>
                            </thead>

                            @if ($es_sections !== null)
                                @foreach ($es_sections as $es_section)

                                    <tbody>
                                        <tr>
                                            <td>{{ $es_section['id'] }}</td>

                                            <td>{!! $es_section['title'] !!}</td>
                                            <td>{{ Str::limit(strip_tags($es_section['description']), 40) }}
                                            <td>{!! $es_section['celular_contact'] !!}</td>
                                            <td>{!! $es_section['email_contact'] !!}</td>
                                            </td>

                                            <td>
                                                @if ($es_section['lang'] == 'es')
                                                    <span class="badge bg-blue">{{ $es_section['lang'] }}</span>
                                                @endif
                                                @if ($es_section['lang'] == 'en')
                                                    <span class="badge bg-green">{{ $es_section['lang'] }}</span>
                                                @endif
                                                @if ($es_section['lang'] == 'fr')
                                                    <span class="badge bg-purple">{{ $es_section['lang'] }}</span>
                                                @endif

                                            </td>

                                            <td>
                                                {{ Form::open(['route' => ['contacto.destroy', $es_section['id']], 'class' => 'form-inline', 'method' => 'DELETE']) }}
                                                <a href="/#contact" target="_blank" class="btn btn-success btn-block"><i
                                                        class="far fa-eye"></i> </a>

                                                <a href="{{ route('contacto.edit', $es_section['lang']) }}"
                                                    class="btn btn-primary btn-block">
                                                    <i class="far fa-edit"></i>
                                                </a>


                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif

                        </table>
                        <div class="col-md-12 text-center">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js') }}"></script>
    <script>
        $(function() {

            $('#dataTable').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': true,
                'autoWidth': false,
                "scrollX": true,
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            })
        })
    </script>
@stop
