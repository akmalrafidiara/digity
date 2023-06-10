<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function picName()
    {
        return $this->belongsTo(User::class, 'pic');
    }

    public function stackholderName()
    {
        return $this->belongsTo(User::class, 'stackholder');
    }
}
