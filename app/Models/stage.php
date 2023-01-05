<?php

namespace App\Models;

use App\Models\college;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class stage extends Model
{
    use HasFactory;

    protected $fillable=['stage','college_id','college_name'];



        public function user()
        {
            return $this->belongsTo(college::class, 'foreign_key', 'other_key');
        }
    
}
