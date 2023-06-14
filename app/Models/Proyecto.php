<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $fondos
 * @property $montoplan
 * @property $montopat
 * @property $montofp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fondos' => 'required',
		'montoplan' => 'required',
		'montopat' => 'required',
		'montofp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fondos','montoplan','montopat','montofp'];



}
