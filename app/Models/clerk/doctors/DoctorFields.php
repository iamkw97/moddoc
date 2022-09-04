<?php

namespace App\Models\clerk\doctors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorFields extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'field_description',

        'field_name',
        'doc_id',
    ];
}
