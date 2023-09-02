<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function reporter(){
        return $this->belongsTo(Reporter::class);
    }

    public function report_trackers(){
        return $this->hasMany(Report_tracker::class);
    }
}
