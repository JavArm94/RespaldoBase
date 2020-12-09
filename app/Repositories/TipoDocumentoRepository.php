<?php

namespace App\Repositories;

use App\Models\TipoDocumento;
use App\Repositories\BaseRepository;

/**
 * Class TipoDocumentoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:03 pm UTC
*/

class TipoDocumentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoDeDocumento'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoDocumento::class;
    }
}
