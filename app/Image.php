<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	   protected $fillable = [
        'id_image',
        'image',
        'title'
    ];

    protected $table = 'images';

    public $timestamps = false;
    protected $primaryKey = 'id_image';

}
