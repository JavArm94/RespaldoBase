<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class NotificacionCertificado
 * @package App\Models
 * @version November 30, 2020, 5:08 pm UTC
 *
 * @property \App\Models\Certificado $idcertificado
 * @property \App\Models\Notificacione $idnotificacion
 * @property integer $idCertificado
 * @property integer $idNotificacion
 */
class NotificacionCertificado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'notificacion_certificados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCertificado',
        'idNotificacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idCertificado' => 'integer',
        'idNotificacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idCertificado' => 'required',
        'idNotificacion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcertificado()
    {
        return $this->belongsTo(\App\Models\Certificado::class, 'idCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idnotificacion()
    {
        return $this->belongsTo(\App\Models\Notificacione::class, 'idNotificacion');
    }
}
