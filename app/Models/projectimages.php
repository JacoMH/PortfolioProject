<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectimages extends Model
{
    use HasFactory;

    protected $table = 'projectimages';

    public function project() {
        return $this->hasOne(project::class);
        }
}
