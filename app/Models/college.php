<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    use HasFactory;

  protected $fillable=['collegename','description'];  



  public function stages()
  {
      return $this->hasMany(stages::class, 'foreign_key', 'local_key');
  }
}
