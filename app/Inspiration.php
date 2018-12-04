<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
    protected $fillable = ["image_info", "image_url", "project_id"];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
