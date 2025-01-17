<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPlanImage extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function projectPlan()
    {
        return $this->belongsTo(ProjectPlan::class);
    }
}
