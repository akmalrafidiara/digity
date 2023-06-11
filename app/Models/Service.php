<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function isInvoiceExist()
    {
        $invoice = Transaction::where('user_id', auth()->user()->id)->where('service_id', $this->id)->where('status', 'waiting-for-payment')->first();
        if ($invoice) {
            return true;
        } else {
            return false;
        }
    }
}
