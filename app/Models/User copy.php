<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'legajo',
        'apellido',
        'nombreUsuario',
        'email',
        'password',
        'fechaNacimiento',
        'direccion',
        'numeroDocumento',
        'estadoBaja',
        'idCargo',
        'idLocalidad',
        'idTipoDocumento',
        'idTipoUsuario',
        'idRol',
        'idGenero'       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'id' => 'integer',
        'legajo' => 'integer',
        'apellido' => 'string',
        'nombreUsuario' => 'string',
        'contrasenaUsuario' => 'string',
        'fechaNacimiento' => 'date',
        'direccion' => 'string',
        'correoElectronico' => 'string',
        'numeroDocumento' => 'integer',
        'estadoBaja' => 'boolean',
        'idCargo' => 'integer',
        'idLocalidad' => 'integer',
        'idTipoDocumento' => 'integer',
        'idTipoUsuario' => 'integer',
        'idRol' => 'integer',
        'idGenero' => 'integer'
    ];

    
    public static $rules = [    
       
        'legajo' => 'required|integer',
        'apellido' => 'required|string|max:45',
        'name' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'fechaNacimiento' => 'required',
        'direccion' => 'required|string|max:45',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'numeroDocumento' => 'required',
        'estadoBaja' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idCargo' => 'required',
        'idLocalidad' => 'required',
        'idTipoDocumento' => 'required',
        'idTipoUsuario' => 'required',
        'idRol' => 'required',
        'idGenero' => 'required',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);        
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'idCargo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idgenero()
    {
        return $this->belongsTo(\App\Models\Genero::class, 'idGenero');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idlocalidad()
    {
        return $this->belongsTo(\App\Models\Localidade::class, 'idLocalidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idrol()
    {
        return $this->belongsTo(\App\Models\Role::class, 'idRol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipodocumento()
    {
        return $this->belongsTo(\App\Models\TipoDocumento::class, 'idTipoDocumento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipousuario()
    {
        return $this->belongsTo(\App\Models\TipoUsuario::class, 'idTipoUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificado1s()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idUsuarioQueModifica');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function familiares()
    {
        return $this->hasMany(\App\Models\Familiare::class, 'idUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notificaciones()
    {
        return $this->hasMany(\App\Models\Notificacione::class, 'idUsuarioDestinatario');
    }

}
