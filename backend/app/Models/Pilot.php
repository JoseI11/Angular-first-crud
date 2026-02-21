<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que representa a un piloto. Se utiliza para interactuar con la tabla 'pilots' en la base de datos.
 * El modelo utiliza la funcionalidad de HasFactory para facilitar la creación de instancias de modelos.
 * Ademas se agrego la funcionalidad de Soft Deletes que permite eliminar registros sin borrarlos fisicamente.
 */
class Pilot extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'pilots';

    protected $fillable = [
        'id',
        'name',
        'surname',
        'nationality',
        'team',
        'car_number',
        'birth_date',
        'poles',
        'wins',
    ];

}
