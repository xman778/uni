<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable=['name','college_id','college_name','stage_id','age' ,'phone number','home number','national_id','address'];



    public function college()
    {
        return $this->belongsTo(college::class, 'foreign_key', 'other_key');
    }
    public function stage()
    {
        return $this->belongsTo(stage::class, 'foreign_key', 'other_key');
    }

}
