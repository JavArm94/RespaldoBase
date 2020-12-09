<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Certificado
 * @package App\Models
 * @version November 30, 2020, 5:06 pm UTC
 *
 * @property \App\Models\Familiare $idfamiliar
 * @property \App\Models\Medico $idmedico
 * @property \App\Models\Patologia $idpatologia
 * @property \App\Models\TipoCertificado $idtipocertificado
 * @property \App\Models\Usuario $idusuariocertificado
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $notificacionCertificados
 * @property integer $diasDeAusencia
 * @property string $lugar
 * @property integer $numeroComprobante
 * @property string $fechaVencimiento
 * @property string $fechaCertificado
 * @property string $imagen
 * @property string $estadoCertificado
 * @property integer $idUsuarioCertificado
 * @property integer $idPatologia
 * @property integer $idMedico
 * @property integer $idTipoCertificado
 * @property integer $idFamiliar
 */
class Certificado extends Model
{
    use HasFactory;

    public $table = 'certificados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'diasDeAusencia',
        'lugar',
        'numeroComprobante',
        'fechaVencimiento',
        'fechaCertificado',
        'imagen',
        'estadoCertificado',
        'idUsuarioCertificado',
        'idPatologia',
        'idMedico',
        'idTipoCertificado',
        'idFamiliar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'diasDeAusencia' => 'integer',
        'lugar' => 'string',
        'numeroComprobante' => 'integer',
        'fechaVencimiento' => 'date',
        'fechaCertificado' => 'date',
        'imagen' => 'string',
        'estadoCertificado' => 'string',
        'idUsuarioCertificado' => 'integer',
        'idPatologia' => 'integer',
        'idMedico' => 'integer',
        'idTipoCertificado' => 'integer',
        'idFamiliar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'diasDeAusencia' => 'required|integer',
        'lugar' => 'required|string|max:45',
        'numeroComprobante' => 'required',
        'fechaVencimiento' => 'required',
        'fechaCertificado' => 'required',
        'imagen' => 'nullable|string|max:65535',
        'estadoCertificado' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idUsuarioCertificado' => 'required',
        'idPatologia' => 'required',
        'idMedico' => 'required',
        'idTipoCertificado' => 'required',
        'idFamiliar' => 'nullable'
    ];

    public static $rulesCreate  = 
    [
        'diasDeAusencia' => 'required|integer',
        'lugar' => 'required|string|max:45',
        'fechaCertificado' => 'required',
        'imagen' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idPatologia' => 'required',
        'idMedico' => 'required',
        'idTipoCertificado' => 'required',
        'idFamiliar' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function familiar()
    {
        return $this->belongsTo(\App\Models\Familiar::class, 'idFamiliar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\Medico::class, 'idMedico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patologia()
    {
        return $this->belongsTo(\App\Models\Patologia::class, 'idPatologia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocertificado()
    {
        return $this->belongsTo(\App\Models\TipoCertificado::class, 'idTipoCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariocertificado()
    {
        return $this->belongsTo(\App\Models\User::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notificacionCertificados()
    {
        return $this->hasMany(\App\Models\NotificacionCertificado::class, 'idCertificado');
    }
}
