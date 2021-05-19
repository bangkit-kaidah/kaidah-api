<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function documentType() {
        return $this->belongsTo('App\Models\DocumentType');
    }

    public function source() {
        return $this->belongsTo('App\Models\Source');
    }

    public function status() {
        return $this->belongsTo('App\Models\Status');
    }

    public function subject() {
        return $this->belongsTo('App\Models\Subject');
    }

}
