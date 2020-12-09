<script>
    function check() {
      
      if (document.getElementById('idTipoCertificado').value=="1") {
        document.getElementById('titular').setAttribute("value","Propio");
       document.getElementById('idFamiliar').setAttribute("hidden", false);
       document.getElementById('diasDeAusencia').value="";
       document.getElementById('excesoDias').innerHTML="";
  
      } else if (document.getElementById('idTipoCertificado').value=="2"){
        document.getElementById('titular').setAttribute("value","Propio");
        document.getElementById('idFamiliar').setAttribute("hidden", false);
        document.getElementById('diasDeAusencia').value="";
        document.getElementById('excesoDias').innerHTML="";
      }

      else if (document.getElementById('idTipoCertificado').value=="3"){
        document.getElementById('titular').setAttribute("value","Familiar");
        document.getElementById('idFamiliar').removeAttribute("hidden");
        document.getElementById('diasDeAusencia').value="";
        document.getElementById('excesoDias').innerHTML="";
      }
    }
</script>

<!-- Legajo Field --> 

<div class="form">
    {!! Form::label('Legajo', 'Legajo') !!}<br>
    {!! Form::number('Legajo', null, ['class' => 'select','onchange'=>"check()"]) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('Legajo'))
        <span class="help-block">
        <strong>{{ $errors->first('Legajo') }}</strong>
    </span>
    @endif
</div>



<!-- Idtipocertificado Field --> 

<div class="form">
    {!! Form::label('idTipoCertificado', 'Tipo de certificado') !!}<br>
    {!! Form::select('idTipoCertificado',array('1' => 'Simple', '2' => 'Tratamiento prolongado','3' => 'Familiar'), null, ['class' => 'select','onchange'=>"check()"]) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idTipoCertificado'))
        <span class="help-block">
        <strong>{{ $errors->first('idTipoCertificado') }}</strong>
    </span>
    @endif
</div>


<!-- Idfamiliar Field -->


<div class="form">
    {!! Form::label('idFamiliar', 'Titular certificado') !!}<br>

    <input value="Propio" type="text" name="" id="titular" style="color:#BABEC6" disabled="disabled">
        <br>

    {!! Form::text('idFamiliar', null, ['class' => 'form-control','autofocus','hidden','placeholder'=>'Familiar']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idFamiliar'))
        <span class="help-block">
        <strong>{{ $errors->first('idFamiliar') }}</strong>
    </span>
    @endif
</div>


<!-- Fechacertificado Field -->
<div class="form">
    {!! Form::label('fechaCertificado', 'Fecha de certificado') !!}<br>
    {!! Form::date('fechaCertificado', null, ['class' => 'form-control','autofocus','placeholder'=>'Fecha de emisión del certificado']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('fechaCertificado'))
        <span class="help-block">
        <strong>{{ $errors->first('fechaCertificado') }}</strong>
    </span>
    @endif
</div>



<!-- Diasdeausencia Field -->

<script>
    function calcularAusencia (a){
        if (a!=null) {
            if (a>10 && (document.getElementById('idTipoCertificado').value=="1" || document.getElementById('idTipoCertificado').value=="3")) {
                var msj = document.createTextNode("Exceso");
                document.getElementById('excesoDias').innerHTML="";
                document.getElementById('excesoDias').appendChild(msj);
            } else{               
                document.getElementById('excesoDias').innerHTML="";
            }
        }

    }
</script>

<div class="form">
    {!! Form::label('diasDeAusencia', 'Dias de ausencia') !!} <br>
    {!! Form::number('diasDeAusencia', null, ['class' => 'form-control',' onBlur'=>"calcularAusencia(this.value)",'placeholder'=>'Dias de ausencia']) !!}
    <p style="padding: 0 !important; margin:0 !important" id="excesoDias" style="color:#AA001F"></p>
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('diasDeAusencia'))
        <span class="help-block">
        <strong>{{ $errors->first('diasDeAusencia') }}</strong>
    </span>
    @endif
</div>

<!-- Lugar Field
<div class="form">
    {!! Form::label('lugar', 'Lugar') !!}<br>
    {!! Form::number('lugar', null, ['class' => 'form-control','autofocus','placeholder'=>'Lugar de emisión']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('lugar'))
        <span class="help-block">
        <strong>{{ $errors->first('lugar') }}</strong>
    </span>
    @endif
</div> -->

<!-- Numerocomprobante Field  autogenera
<div class="form">
    {!! Form::label('numeroComprobante', 'Numero de comprobante') !!}<br>
    {!! Form::number('numeroComprobante', null, ['class' => 'form-control','autofocus','placeholder'=>'Numero de comprobante']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('numeroComprobante'))
        <span class="help-block">
        <strong>{{ $errors->first('numeroComprobante') }}</strong>
    </span>
    @endif
</div>-->


<!-- Fechavencimiento Field autogenera


<div class="form">
    {!! Form::label('fechaVencimiento', 'Fecha de vencimiento') !!}<br>
    {!! Form::number('fechaVencimiento', null, ['class' => 'form-control','autofocus','placeholder'=>'Fecha de vencimiento']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('fechaVencimiento'))
        <span class="help-block">
        <strong>{{ $errors->first('fechaVencimiento') }}</strong>
    </span>
    @endif
</div>
@push('scripts')
    <script type="text/javascript">
        $('#fechaVencimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

 -->



<!-- Estadocertificado Field 

?????-->


<!-- Idusuariocertificado Field -->



<!-- Idpatologia Field -->
<div class="form">
    {!! Form::label('idPatologia', 'Patologia') !!}<br>
    {!! Form::number('idPatologia', null, ['class' => 'form-control','autofocus','placeholder'=>'Patología']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idPatologia'))
        <span class="help-block">
        <strong>{{ $errors->first('idPatologia') }}</strong>
    </span>
    @endif
</div>


<!-- Idmedico Field ?¡?¡? -->
<div class="form">
    {!! Form::label('idMedico', 'Medico') !!}<br>
    {!! Form::number('idMedico', null, ['class' => 'form-control','autofocus','placeholder'=>'Medico']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idMedico'))
        <span class="help-block">
        <strong>{{ $errors->first('idMedico') }}</strong>
    </span>
    @endif
</div>








<!-- Imagen Field -->

<label>Imagen</label>

<div class="form-img">
   
    {!! Form::file('imagen', ['class' => 'form-control','maxlength' => 65535,'maxlength' => 65535,'id' => 'imagen']) !!}

    <label class="label-upload" for="imagen">
        <img style="   height: 120px;width: 120px;" src="{{asset('icons\add_img.png')}}"/>
        </label>   
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('imagen'))
        <span class="help-block">
        <strong>{{ $errors->first('imagen') }}</strong>
    </span>
    @endif
</div>

<br><br>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ingresar', ['class' => 'button']) !!} <br>
    
</div>
