<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{{ route('usuarios.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('cargos*') ? 'active' : '' }}">
    <a href="{{ route('cargos.index') }}"><i class="fa fa-edit"></i><span>Cargos</span></a>
</li>

<li class="{{ Request::is('localidads*') ? 'active' : '' }}">
    <a href="{{ route('localidads.index') }}"><i class="fa fa-edit"></i><span>Localidads</span></a>
</li>

<li class="{{ Request::is('tipoDocumentos*') ? 'active' : '' }}">
    <a href="{{ route('tipoDocumentos.index') }}"><i class="fa fa-edit"></i><span>Tipo Documentos</span></a>
</li>

<li class="{{ Request::is('tipoUsuarios*') ? 'active' : '' }}">
    <a href="{{ route('tipoUsuarios.index') }}"><i class="fa fa-edit"></i><span>Tipo Usuarios</span></a>
</li>

<li class="{{ Request::is('rols*') ? 'active' : '' }}">
    <a href="{{ route('rols.index') }}"><i class="fa fa-edit"></i><span>Rols</span></a>
</li>

<li class="{{ Request::is('generos*') ? 'active' : '' }}">
    <a href="{{ route('generos.index') }}"><i class="fa fa-edit"></i><span>Generos</span></a>
</li>

<li class="{{ Request::is('patologias*') ? 'active' : '' }}">
    <a href="{{ route('patologias.index') }}"><i class="fa fa-edit"></i><span>Patologias</span></a>
</li>

<li class="{{ Request::is('medicos*') ? 'active' : '' }}">
    <a href="{{ route('medicos.index') }}"><i class="fa fa-edit"></i><span>Medicos</span></a>
</li>

<li class="{{ Request::is('tipoCertificados*') ? 'active' : '' }}">
    <a href="{{ route('tipoCertificados.index') }}"><i class="fa fa-edit"></i><span>Tipo Certificados</span></a>
</li>

<li class="{{ Request::is('parentescos*') ? 'active' : '' }}">
    <a href="{{ route('parentescos.index') }}"><i class="fa fa-edit"></i><span>Parentescos</span></a>
</li>

<li class="{{ Request::is('familiars*') ? 'active' : '' }}">
    <a href="{{ route('familiars.index') }}"><i class="fa fa-edit"></i><span>Familiars</span></a>
</li>

<li class="{{ Request::is('certificados*') ? 'active' : '' }}">
    <a href="{{ route('certificados.index') }}"><i class="fa fa-edit"></i><span>Certificados</span></a>
</li>

<li class="{{ Request::is('auditoriaCertificados*') ? 'active' : '' }}">
    <a href="{{ route('auditoriaCertificados.index') }}"><i class="fa fa-edit"></i><span>Auditoria Certificados</span></a>
</li>

<li class="{{ Request::is('notificacions*') ? 'active' : '' }}">
    <a href="{{ route('notificacions.index') }}"><i class="fa fa-edit"></i><span>Notificacions</span></a>
</li>

<li class="{{ Request::is('notificacionCertificados*') ? 'active' : '' }}">
    <a href="{{ route('notificacionCertificados.index') }}"><i class="fa fa-edit"></i><span>Notificacion Certificados</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

