<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'project';

    public function images() {
        return $this->hasMany(projectimages::class);
        }

    public function skills() {
        return $this->hasMany(skill::class, 'projectskill', 'project_id', 'skill_id');
        }
}
