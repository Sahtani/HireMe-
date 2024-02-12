<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable=['title','company','start_date','end_date','desc','cv_id'];
    public function cv(){
        return $this->belongsTo(Cv::class);
    }
}
