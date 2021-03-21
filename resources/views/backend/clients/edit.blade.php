@extends('backend.layouts.app')

@section('nav.clients', 'active')
@section('title', 'Registrar nuevo cliente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">

                <div class="card-body">
                    <h2 class="text-center">Agregar un nuevo Cliente</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('clients.update', $client) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <label for="user">Usuario Instagram</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="user">@</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('user', $client->user) }}" placeholder="pedro_perez" aria-label="usuario" aria-describedby="usuario" name="user">
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $client->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha de contacto</label>
                            <input type="date" class="form-control" name="contact_date" value="{{ old('contact_date', $client->contact_date) }}" max="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone', $client->phone) }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Cuidad</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city', $client->city) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email', $client->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="lead">Contactado desde</label>
                            <select name="lead" id="lead" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Facebook" {{ old('lead', $client->lead) == 'Facebook' ? 'selected': '' }}>Facebook</option>
                                <option value="Instagram" {{ old('lead', $client->lead) == 'Instagram' ? 'selected': '' }}>Instagram</option>
                                <option value="WhatsApp" {{ old('lead', $client->lead) == 'WhatsApp' ? 'selected': '' }}>WhatsApp</option>
                                <option value="DM" {{ old('lead', $client->lead) == 'DM' ? 'selected': '' }}>Mensaje directo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status <span class="badge badge-primary">Actual | {{ $client->status }}</span></label>
                            <select name="status[]" id="status" class="form-control bootstrap-select" multiple>

                                <optgroup label="Estados">
                                    <option value="Contactar DM" {{ old('status'. $client->status) == 'Contactar DM' ? 'selected': '' }}>Por contactar DM</option>
                                    <option value="Datos DM" {{ old('status'. $client->status) == 'Datos DM' ? 'selected': '' }}>Datos solicitados por DM</option>
                                    <option value="Contactar WhatsApp" {{ old('status'. $client->status) == 'Contactar WhatsApp' ? 'selected': '' }}>Por contactar WhatsApp</option>
                                    <option value="Datos WhatsApp" {{ old('status'. $client->status) == 'Datos WhatsApp' ? 'selected': '' }}>Datos solicitados por WhatsApp</option>
                                    <option value="Enviar Correo" {{ old('status'. $client->status) == 'Enviar Correo' ? 'selected': '' }}>Por enviar email</option>
                                    <option value="Por Llamar" {{ old('status'. $client->status) == 'Por Llamar' ? 'selected': '' }}>Por llamar</option>
                                    <option value="Llamado Interesado" {{ old('status'. $client->status) == 'Llamado Interesado' ? 'selected': '' }}>Llamado interesado</option>
                                    <option value="Llamado desinteresado" {{ old('status'. $client->status) == 'Llamado desinteresado' ? 'selected': '' }}>Llamado no interesado</option>
                                </optgroup>
                                <optgroup label="Atención al cliente">
                                    <option value="ATC: Abandona chat / Luego de informacion" {{ old('status'. $client->status) == 'ATC: Abandona chat / Luego de informacion' ? 'selected': '' }}>Abandona chat / Luego de información</option>
                                    <option value="ATC: Acepta 4 megas" {{ old('status'. $client->status) == 'ATC: Acepta 4 megas' ? 'selected': '' }}>Acepta 4 megas</option>
                                    <option value="ATC: Caso en seguimiento / Interesado" {{ old('status'. $client->status) == 'ATC: Caso en seguimiento / Interesado' ? 'selected': '' }}>Caso en seguimiento / Interesado</option>
                                    <option value="ATC: Evaluara Propuesta" {{ old('status'. $client->status) == 'ATC: Evaluara Propuesta' ? 'selected': '' }}>Evaluará Propuesta</option>
                                    <option value="ATC: Fuera de Huella" {{ old('status'. $client->status) == 'ATC: Fuera de Huella' ? 'selected': '' }}>Fuera de Huella</option>
                                    <option value="ATC: Huella no Disponible" {{ old('status'. $client->status) == 'ATC: Huella no Disponible' ? 'selected': '' }}>Huella no disponible</option>
                                    <option value="ATC: Interesado en residencial" {{ old('status'. $client->status) == 'ATC: Interesado en residencial' ? 'selected': '' }}>Interesado en residencial</option>
                                    <option value="ATC: No acepta planes" {{ old('status'. $client->status) == 'ATC: No acepta planes' ? 'selected': '' }}>No acepta planes</option>
                                    <option value="ATC: No se logra comunicacion" {{ old('status'. $client->status) == 'ATC: No se logra comunicacion' ? 'selected': '' }}>No se logra comunicación</option>
                                    <option value="ATC: Sin disponibilidad economica" {{ old('status'. $client->status) == 'ATC: Sin disponibilidad economica' ? 'selected': '' }}>Sin disponibilidad económica</option>
                                    <option value="ATC: Sin respuesta en instagram" {{ old('status'. $client->status) == 'ATC: Sin respuesta en instagram' ? 'selected': '' }}>Sin respuesta en instagram</option>
                                </optgroup>

                            </select>
                            {{-- <select name="status" id="status" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Contactar DM" {{ old('status', $client->status) == 'Contactar DM' ? 'selected': '' }}>Por contactar DM</option>
                                <option value="Datos DM" {{ old('status', $client->status) == 'Datos DM' ? 'selected': '' }}>Datos solicitados por DM</option>
                                <option value="Contactar WhatsApp" {{ old('status', $client->status) == 'Contactar WhatsApp' ? 'selected': '' }}>Por contactar WhatsApp</option>
                                <option value="Datos WhatsApp" {{ old('status', $client->status) == 'Datos WhatsApp' ? 'selected': '' }}>Datos solicitados por WhatsApp</option>
                                <option value="Enviar Correo" {{ old('status', $client->status) == 'Enviar Correo' ? 'selected': '' }}>Por enviar Email</option>
                                <option value="Por Llamar" {{ old('status', $client->status) == 'Por Llamar' ? 'selected': '' }}>Por llamar</option>
                                <option value="Llamado Interesado" {{ old('status', $client->status) == 'Llamado Interesado' ? 'selected': '' }}>Llamado interesado</option>
                                <option value="Llamado desinteresado" {{ old('status', $client->status) == 'Llamado desinteresado' ? 'selected': '' }}>Llamado no interesado</option>
                            </select> --}}
                        </div>
                        <div class="form-group">
                            <label for="comment">Comentarios</label>
                            <textarea name="comment" class="form-control" id="comment" cols="10" rows="10">{{ old('comment',$client->comment) }}</textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection