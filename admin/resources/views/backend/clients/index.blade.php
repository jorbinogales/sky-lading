@extends('backend.layouts.app')

@section('title', 'Lista cliente')
@section('nav.clients', 'active')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/b-1.5.6/b-html5-1.5.6/b-print-1.5.6/r-2.2.2/datatables.min.css"/> --}}
@endsection

@section('content')
    
<div class="container-fluid mt-4 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="">Lista de personas que han contactado</h2>
            
            <a href="{{ route('clients.create') }}" class="btn btn-primary my-2">Agregar Nuevo Cliente</a>
            <div class="card shadow p-2">
                <table class="table table-hover dataTable table-responsive text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha Contacto</th>
                            <th scope="col">Contactado desde</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Status</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Comentarios</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><span>@</span>{{ $client->user }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->contact_date }}</td>
                                <td>{{ $client->lead }}</td>
                                <td>{{ $client->city }}</td>
                                <td>
                                    {{ $client->status }}
                                </td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->comment }}</td>
                                <td>
                                    <form action="{{ route('clients.destroy', $client) }}" id="form-{{ $loop->iteration }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-danger" onclick="destroy({{ $loop->iteration }})"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection

@section('scripts')

    <script src="{{ asset('js/app.js') }}"></script> 

    <script src="{{ asset('js/sweetalert2@8.js') }}"></script>
    <script>

        function destroy(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No puedes revetir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, hazlo!'
            }).then((result) => {
                if (result.value) {
                    console.log(id);
                    document.getElementById('form-'+ id).submit();
                }
            })
        }

        $(document).ready(function() {
            $('.dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print'
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                }
            });
        });
    
    </script>

    @if (Session::has('success'))
    <script>
        Swal.fire({
            type: 'success',
            title: 'Exitoso',
            text: "{{ Session::get('success') }}",
            showConfirmButton: true,
        })
    </script>
    @endif
@endsection 