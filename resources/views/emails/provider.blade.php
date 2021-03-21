<table border="0" cellpadding="0" cellspacing="0" height="100%" lang="es" style="min-width:348px;" width="100%">
    <tbody>
        <tr height="32" style="height:32px">
            <td>
            </td>
        </tr>
        <tr align="center">
            <td>
                <div>
                    <div>
                    </div>
                </div>
                <table border="0" cellpadding="0" cellspacing="0"
                    style="padding-bottom:20px;max-width:600px;min-width:300px">
                    <tbody>
                        <tr>
                            <td style="width:8px" width="8">
                            </td>
                            <td>
                                <div align="center"
                                    style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px; background-color: #fff;">
                                    <div style="padding: 25px; background-color: #f15c22; display:flex;justify-content: center; align-items: center; margin-bottom: 20px;">
                                        <img src="{{ asset('images/logo.png') }}" style="width:20% ;margin-bottom:16px;"/>
                                    </div>
                                    <div
                                        style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:5px;text-align:center;word-break:break-word">
                                        <div style="font-size:24px">
                                            Te han contactado
                                        </div>
                                    </div>
                                    <div
                                        style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:center;">
                                        Te han contactado de {{ config('app.name') }}, estos son los datos del cliente:<br><br>
                                        <p style="text-align: center">
                                            Nombre: <br>
                                            <strong style="text-transform:capitalize;">{{ $data['name'] }}</strong>
                                        </p>
                                        <p style="text-align: center">
                                        </p>
                                        <p>
                                            Ciudad: {{ $data['city'] }} <br>
                                            Teléfono: {{ $data['phone'] }} <br>
                                            Correo: {{ $data['email'] }} <br>  
                                        </p>

                                        <div
                                            style="margin: auto; word-break: break-all; overflow-wrap: break-word; word-wrap: break-word; width: 75%;">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align:left">
                                    <div
                                        style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.54);font-size:11px;line-height:18px;padding-top:12px;text-align:center">
                                        <div>
                                            Has recibido este correo electrónico porque te registraste en
                                            {{ config('app.name') }}. Si no has realizado esta solicitud, ponte en
                                            contacto con la Ayuda de {{ config('app.name') }}.
                                        </div>
                                        <div style="direction:ltr">
                                            <a
                                                style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.54);font-size:11px;line-height:18px;padding-top:12px;text-align:center">
                                                © Copyright 2019 {{ config('app.name') }} C.A. Todos los derechos
                                                reservados.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="width:8px" width="8">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
