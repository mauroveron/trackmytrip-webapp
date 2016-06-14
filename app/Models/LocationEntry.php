<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationEntry extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'location_entries';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'longitude',
        'latitude',
        'device_identifier',
        'taken_at',
        'altitude',
        'speed',
        'course',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'             => 'integer',
        'longitude'      => 'float',
        'latitude'       => 'float',
        'altitude'       => 'float',
        'speed'          => 'float',
        'course'         => 'float',
    ];
}
