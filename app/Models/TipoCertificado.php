<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoCertificado
 * @package App\Models
 * @version November 30, 2020, 5:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property string $tipoCertificado
 * @property integer $ctdFaltasAnualesJustificadas
 * @property boolean $solicitaFamiliar
 * @property integer $diasPresentacionVencimiento
 */
class TipoCertificado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tipo_certificados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipoCertificado',
        'ctdFaltasAnualesJustificadas',
        'solicitaFamiliar',
        'diasPresentacionVencimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipoCertificado' => 'string',
        'ctdFaltasAnualesJustificadas' => 'integer',
        'solicitaFamiliar' => 'boolean',
        'diasPresentacionVencimiento' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoCertificado' => 'required|string|max:30',
        'ctdFaltasAnualesJustificadas' => 'required|integer',
        'solicitaFamiliar' => 'required|boolean',
        'diasPresentacionVencimiento' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idTipoCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idTipoCertificado');
    }
}
