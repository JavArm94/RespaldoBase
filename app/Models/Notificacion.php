<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Notificacion
 * @package App\Models
 * @version November 30, 2020, 5:07 pm UTC
 *
 * @property \App\Models\TipoUsuario $idtipousuariodestinatario
 * @property \App\Models\Usuario $idusuariodestinatario
 * @property \Illuminate\Database\Eloquent\Collection $notificacionCertificados
 * @property string $informacion
 * @property string $tipoNotificacion
 * @property string $fecha
 * @property time $hora
 * @property string|\Carbon\Carbon $fechaNotificacion
 * @property integer $idTipoUsuarioDestinatario
 * @property integer $idUsuarioDestinatario
 */
class Notificacion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'notificaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'informacion',
        'tipoNotificacion',
        'fecha',
        'hora',
        'fechaNotificacion',
        'idTipoUsuarioDestinatario',
        'idUsuarioDestinatario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'informacion' => 'string',
        'tipoNotificacion' => 'string',
        'fecha' => 'date',
        'fechaNotificacion' => 'datetime',
        'idTipoUsuarioDestinatario' => 'integer',
        'idUsuarioDestinatario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'informacion' => 'required|string|max:45',
        'tipoNotificacion' => 'required|string|max:25',
        'fecha' => 'required',
        'hora' => 'required',
        'fechaNotificacion' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idTipoUsuarioDestinatario' => 'required',
        'idUsuarioDestinatario' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipousuariodestinatario()
    {
        return $this->belongsTo(\App\Models\TipoUsuario::class, 'idTipoUsuarioDestinatario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idusuariodestinatario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'idUsuarioDestinatario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notificacionCertificados()
    {
        return $this->hasMany(\App\Models\NotificacionCertificado::class, 'idNotificacion');
    }
}
