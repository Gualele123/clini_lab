<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>RESULTADOS ANALISIS</title>
        <style>
            @page {
                margin: 0cm 0cm;
            }
            body {
                font-family: "Roboto", sans-serif !important;
                margin-top: 8cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 4cm;
            }
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 0cm;
            }
            footer {
                position: fixed; 
                bottom: 1.9cm;
                left: 0cm; 
                right: 2cm;
                height: 0.1cm;
                background-color: white;
                text-align: left; 
                font-size: 12px;
            }
            .empresa{
                text-align: center;
            }
            .table{
                width: 100%;
                font-size: 13px;
                border-collapse: collapse;
                
            }
            .table tr:nth-child(even) {
                background-color: #fff;
            }
            .table tr:nth-child(odd) {
                background-color:#fff;
            }
            .table th {
                color: black;
                font-size: 14px;
            }
            .table td{
                text-align: center;
                padding: 0; 
                margin: 0;
                font-size: 14px;
                padding: 0px;
            }
            .page-break {
                page-break-after: always;
            }

            .page-break:last-child {
                page-break-after: avoid;
            }
            .table_glosa{
                width: 100%;
                font-size: 13px;
                border-collapse: collapse;
                
            }
            .table_glosa tr:nth-child(even) {
                background-color: #fff;
            }
            .table_glosa tr:nth-child(odd) {
                background-color:#fff;
            }
            .table_glosa th {
                color: black;
                font-size: 12px;
                border: 1px solid black;
            }
            .table_glosa td{
                text-align: center;
                padding: 0; 
                margin: 0;
                font-size: 12px;
                padding: 2px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="images/logo_biomedic.png" width="40%" height="10%" style="padding-left: 1.5cm;" />
            <table style="width: 100%; 
                            text-align: right; 
                            font-size: 15px; 
                            padding-top: -70px; 
                            padding-right: -15px" align="right">
                <tr>
                    <td><b>INFORME RESULTADOS</b></td>
                </tr>
                <tr>
                    <td>
                        <!-- <b>Examen Nro.: </b>&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->id }} -->
                    </td>
                </tr>
                <tr>
                    <td><b>N<sup>o</sup> de Registro Sedes: </b>35CL/RC/550/NII</td>
                </tr>
            </table>
            <table style="width: 85%;
                            margin-top: 15px; 
                            text-align: left; 
                            font-size: 13px; 
                            border: 1.5px solid black; 
                            border-radius: 10px;" align="center">
                <tr>
                    <td style="max-height: 30px !important; font-size: 12px !important;">&nbsp;&nbsp;&nbsp;<b>Paciente:</b>&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->paciente }}</td>
                    <td>&nbsp;&nbsp;&nbsp;<b>Fecha Toma Muestra:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->fechas_muestra_resultado->fecha_muestra }}</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<b>Celular: </b>&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->celular }}</td>
                    <td>&nbsp;&nbsp;&nbsp;<b>Fecha Resultado:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->fechas_muestra_resultado->fecha_resultado }}</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<b>CI:</b>&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->nro_carnet }}</td>
                    
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<b>Edad:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->edad }} años</td>
                    <td>&nbsp;&nbsp;&nbsp;<b>Seguro:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->seguro }}</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<b>Fecha Nacimiento:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->fecha_nacimiento }}</td>
                    <td>&nbsp;&nbsp;&nbsp;<b>Fecha Admision:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $report_data->laboratorio[0]->fecha }}</td>
                </tr>
            </table>
        </header>
        <footer>
            @if($report_data->laboratorio[0]->codigo_visualizacion != '')
                <div style="padding-left: 2.0cm; padding-top: -2.2cm;">
                    <img src="{{$report_data->codigoQR}}" alt="codQR" align="right" style="width: 2cm; height: 2cm"/>
                </div>
            @endif
            <div style="padding-left: 1.5cm; padding-top: 0.2cm;" align="right">
                Fecha Impresión: <b>{{ $report_data->laboratorio[0]->fecha_impresion }}</b>
                @foreach($report_data->pie_pagina as $value)
                    <b>* {{ $value->nombre }}</b> {{ $value->direccion }} <b> * Tel:</b> {{ $value->telefono }}<br>
                @endforeach
            </div>
        </footer>
        </br>
        @php
            $i = 0;           
        @endphp
        @foreach($report_data->formato_resultado as $key => $grupo_analisis)
            <table style="width: 100%;" class="table" align="center">
                <thead>
                    <tr>
                        <th>{{-- <div style="border: 1px solid black; border-radius: 10px; text-align: center; background-color: lightgray; padding: 5px;">&nbsp;&nbsp;&nbsp;<b></b>{{ $key }}</div>--}}</th>
                    </tr>
                </thead>
            </table>
            @php 
            $analisis = collect($grupo_analisis)->groupBy('analisis_laboratorio'); 
            @endphp
            @foreach($analisis as $key2 => $grupo_ref)
                <table style="width: 100%;" class="table" align="center">
                    <thead>
                        <tr>
                            <th>
                                <div style="border: 1px solid black; 
                                            border-radius: 10px; 
                                            text-align: center; 
                                            padding: 2px;">
                                    &nbsp;{{ $key2 }}/&nbsp;Solicitado por: {{$grupo_ref[0]->medico}}
                                </div>
                            </th>
                        </tr>
                    </thead>
                </table>
                <table style="width: 100%;" class="table" align="center">
                    <thead>
                        @if($grupo_ref[0]->id_grupo_analisis == 11 || $grupo_ref[0]->id_grupo_analisis == 9 || $grupo_ref[0]->id_analisis_laboratorio == 149 || $grupo_ref[0]->id_analisis_laboratorio == 124)
                            <tr>
                                <th width="45%" ></th>
                                <th width="25%" ></th>
                                <th width="30%" ></th>
                            </tr>
                        @elseif($grupo_ref[0]->id_analisis_laboratorio == 96)
                            <tr>
                                <th width="40%" ></th>
                                <th width="20%" >Resultado</th>
                                <th width="30%" >Valor Referencial</th>
                                <th width="10%" >Unidades</th>
                            </tr>
                        @else
                            <tr>
                                <th width="38%" ></th>
                                <th width="20%" >Resultado</th>
                                <th width="42%" >Valor Referencial</th>
                            </tr>
                        @endif
                    </thead>
                    <tbody>
                    @php $resultado_ref = collect($grupo_ref)->groupBy('ref'); @endphp
                    @foreach($resultado_ref as $key3 => $resultado)
                        @if($resultado[0]->id_ref == 1)
                            <tr>
                                <td colspan="3" style="text-align: left"></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="3" style="text-align: left"><b>{{ $key3 }}</b></td>
                            </tr>
                        @endif
                        @foreach($resultado as $value)
                            @php
                                $i = $value->id.$value->id_laboratorio_detalle;
                                $colspan = '';
                                $td_valor_referencial = true;
                                $text_align = '';
                                if((isset($report_data->array_formato[$i]) ? empty($report_data->array_formato[$i]) : empty([])) || (isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i][0] == ' ' : empty([]))){
                                    $colspan = 'colspan=2';
                                    $td_valor_referencial = false;
                                    $text_align = 'text-align: left;';
                                }
                            @endphp
                            @if($value->id_analisis_laboratorio == 96)
                                <tr>
                                    <td style="text-align: left; 
                                                padding-left: 50px; 
                                                vertical-align: text-top;">
                                        {{ $value->nombre }}
                                    </td>
                                    <td {{ $colspan }} style="{{ $text_align }} 
                                                            vertical-align: text-top; 
                                                            font-size: 14px !important;">
                                        <b>{{ $value->valor_resultado }}</b>
                                    </td>
                                    @if($td_valor_referencial)
                                        <td style="vertical-align: text-top;">
                                        @foreach((isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i] : []) as $vr)
                                            {{$vr}} <br>
                                        @endforeach
                                        </td>
                                        <td style="vertical-align: text-top;">
                                            {{ $value->medida }}
                                        </td>
                                    @endif
                                </tr>
                            @elseif($value->id_analisis_laboratorio == 124)
                                <tr>
                                    <td style="text-align: left; 
                                                padding-left: 50px; 
                                                vertical-align: text-top; 
                                                font-size: 14px !important; 
                                                padding: 0px !important;">
                                        {{ $value->nombre }}
                                    </td>
                                    <td {{ $colspan }} style="text-align: left; 
                                                            vertical-align: text-top; 
                                                            font-size: 14px !important; 
                                                            padding: 0px !important;">
                                        <b>{{ $value->valor_resultado }}</b>
                                    </td>
                                    @if($td_valor_referencial)
                                        <td style="vertical-align: text-top; 
                                                    text-align: left; 
                                                    font-size: 14px !important; 
                                                    padding: 0px !important;">
                                            @foreach((isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i] : []) as $vr)
                                                {{$vr}} <br>
                                            @endforeach
                                        </td>
                                    @endif
                                </tr>
                            @elseif($value->antibiograma == 0 && $value->lectura_micro == 0)
                                <tr>
                                    <td style="text-align: left; 
                                                padding-left: 50px; 
                                                vertical-align: text-top;">
                                        {{ $value->nombre }}
                                    </td>
                                    <td {{ $colspan }} style="{{ $text_align }} 
                                                            vertical-align: text-top; 
                                                            font-size: 14px !important;">
                                        <b>{{ $value->valor_resultado }}</b>
                                    </td>
                                    @if($td_valor_referencial)
                                        <td style="vertical-align: text-top; 
                                                    text-align: left;">
                                            @foreach((isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i] : []) as $vr)
                                                {{$vr}} <br>
                                            @endforeach
                                        </td>
                                    @endif
                                </tr>
                            @elseif($value->lectura_micro == 1)
                            <tr><td><br><br><br><br><br><br></td></tr>
                            <tr>
                                <td style="text-align: left; 
                                            padding-left: 50px; vertical-align: text-top;">{{ $value->nombre }}</td>
                                <td {{ $colspan }} style="{{ $text_align }} vertical-align: text-top; font-size: 14px !important;"><b>{{ $value->valor_resultado }}</b></td>
                                @if($td_valor_referencial)
                                <td style="vertical-align: text-top;">
                                    @foreach((isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i] : []) as $vr)
                                        {{$vr}} <br>
                                    @endforeach

                                </td>
                                @endif
                            </tr>
                            <tr>
                                <td style="text-align: center; 
                                            padding-left: 0px; 
                                            vertical-align: text-top; 
                                            border-top: 1px solid black; 
                                            border-left: 1px solid black">
                                    <b>Metamielocitos:</b>
                                </td>
                                <td style="text-align: left; 
                                            vertical-align: text-top; 
                                            border-top: 1px solid black;">
                                        __________%
                                </td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; 
                                            padding-left: 0px;
                                            vertical-align: text-top; 
                                            border-left: 1px solid black">
                                    <b>Mielocitos:</b>
                                </td>
                                <td style="text-align: left; 
                                            vertical-align: text-top;">    
                                    __________%
                                </td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; 
                                            padding-left: 0px; 
                                            vertical-align: text-top; 
                                            border-left: 1px solid black">
                                    <b>Cayados:</b>
                                </td>
                                <td style="text-align: left; 
                                            vertical-align: text-top;">
                                    __________%
                                </td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; 
                                            padding-left: 0px; 
                                            vertical-align: text-top; 
                                            border-left: 1px solid black">
                                    <b>Segmentados Neut:</b>
                                </td>
                                <td style="text-align: left; 
                                            vertical-align: text-top;">
                                    __________%
                                </td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; 
                                            padding-left: 0px; 
                                            vertical-align: text-top; 
                                            border-left: 1px solid black">
                                    <b>Eosinofilos:</b>
                                </td>
                                <td style="text-align: left; 
                                            vertical-align: text-top;">
                                    __________%
                                </td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top; border-left: 1px solid black"><b>Basofilos:</b></td>
                                <td style="text-align: left; vertical-align: text-top;">__________%</td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top; border-left: 1px solid black"><b>Linfocitos:</b></td>
                                <td style="text-align: left; vertical-align: text-top;">__________%</td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top; border-left: 1px solid black"><b>Monocitos:</b></td>
                                <td style="text-align: left; vertical-align: text-top;">__________%</td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top; border-bottom: 1px solid black; border-left: 1px solid black"><b>Blastos:</b></td>
                                <td style="text-align: left; vertical-align: text-top; border-bottom: 1px solid black;">__________%</td>
                                <td style="border-left: 1px solid black"></td>
                            </tr>
                            @elseif($value->sensible != '' || $value->intermedio != '' || $value->resistente != '')
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top;"><b>{{ $value->nombre }}</b></td>
                                <td {{ $colspan }} style="{{ $text_align }} vertical-align: text-top; font-size: 14px !important;"><b>{{ $value->valor_resultado }}</b></td>
                                @if($td_valor_referencial)
                                <td style="vertical-align: text-top;">
                                    @foreach((isset($report_data->array_formato[$i]) ? $report_data->array_formato[$i] : []) as $vr)
                                        {{$vr}} <br>
                                    @endforeach

                                </td>
                                @endif
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top;"><b>Sensible:</b></td>
                                <td colspan="2" style="text-align: left; vertical-align: text-top;">{{ $value->sensible }}</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top;"><b>Intermedio:</b></td>
                                <td colspan="2" style="text-align: left; vertical-align: text-top;">{{ $value->intermedio }}</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-left: 0px; vertical-align: text-top;"><b>Resistente:</b></td>
                                <td colspan="2" style="text-align: left; vertical-align: text-top;">{{ $value->resistente }}</td>
                            </tr>
                            @endif
                        @endforeach
                    @endforeach
                        </tbody>
                    </table>


                @if($resultado[0]->glosa != '')
                <div style="text-align: left; font-size: 14px; width: 100%; margin: auto;"><br><b></b><?php echo nl2br($resultado[0]->glosa) ?><br>&nbsp;</div>
                @endif    
                    


                @endforeach

                @if($resultado[0]->observacion != '')
                <div style="text-align: left; font-size: 14px; width: 100%; margin: auto;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Observaciones: {{ $resultado[0]->observacion }}</b><br>&nbsp;</div>
                @endif
                
                <div style="margin: auto; width: 50%">
                @foreach($report_data->imagenes_analisis as $key => $ia)
                   @if($ia->idLabDet == $resultado[0]->id_laboratorio_detalle) 
                   <img src="../public/img_analisis/{{$ia->imagen}}" data-src="{{asset('img_analisis')}}/{{$ia->imagen}}" width="200px" height="150px">
                   @endif
                @endforeach
                </div>

                
                {{--<table style="width: 100%; margin: auto">
                    <tr>
                        <td style="text-align: center;">
                            <img src="{{ $resultado[0]->imagen_firma }}" width="200px" height="150px" />
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            {{ $resultado[0]->medico }}
                        </td>
                    </tr>
                </table>--}}
                
                <br>
                <div style="padding-left: 2.8cm; font-size: 13px !important;">
                *Consulta tus resultados en el portal de Clinica Urbari: <b>clinicaweb.clinicaurbari.com.bo/a/paciente</b><br>
                -Usuario: <b>{{ $report_data->laboratorio[0]->login }}</b><br>
                -Contraseña: <b>{{ $report_data->laboratorio[0]->password }}</b>
                </div>
            <div class="page-break"></div>
            @endforeach


        
    </body>
</html>