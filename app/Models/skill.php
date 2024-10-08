<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;
    protected $table = 'skill';
    public function project() {
        return $this->hasMany(project::class, 'projectskill', 'project_id', 'skill_id');
        }
}
