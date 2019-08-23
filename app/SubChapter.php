<?php

namespace App;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class SubChapter extends Model
{
    public $table = "sub_chapters";
    use UuidTrait;

    protected $fillable = [
        'uuid','thumbnail','description','content'
    ];
}
