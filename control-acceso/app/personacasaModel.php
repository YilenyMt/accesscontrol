<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personacasaModel extends Model
{
    protected $connection = 'accesscontrol';

    protected $table = 'personacasa';
    protected $primaryKey ='idPersonacasa';
    protected $fillable = ['fkPersonaPersonacasa', 'fkCasaPersonacasa', 'tipoPersonacasa', 'statusPersonaCasa'];
}
