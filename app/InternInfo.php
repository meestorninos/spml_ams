<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InternInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [

    	'intern_firstname',
    	'intern_lastname', 
    	'intern_nickname',
    	'intern_middlename',
        'intern_image',
    	'intern_department',
    	'intern_num',
    	'intern_password',
        'status',
    ];

    protected $table = 'intern_infos';

    protected $primaryKey = 'id';

    protected $softDelete = true;

    public function dtr_intern()
    {
        return $this->belongsTo('App\DailyTimeRecord','intern_num');
    }
}
