@extends('backend.layouts.app')

@section('title', 'Lista de Contactos')
@section('nav.mails', 'active')

@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}"> --}}
@endsection

@section('content')
    
<div class="container-fluid mt-4 mb-5">
    
    <div class="row">
        <div class="col-md-12">
                <h2 class="">Lista de personas que han contactado</h2>

                <div class="card shadow p-2">
                    <table class="table table-hover mt-3 dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->city }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->created_at->format('d/m/Y g:i a') }}</td>
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
    <script>

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
@endsection 