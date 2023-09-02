<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_tracker extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    public function report(){
        return $this->belongsTo(Report::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
