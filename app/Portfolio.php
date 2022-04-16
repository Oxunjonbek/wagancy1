<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfoli';
    protected $fillable = [
        'title', 'title_1', 'name','lang','service','sphere','technology','objective','description','category','img1','img2'
    ];
}
