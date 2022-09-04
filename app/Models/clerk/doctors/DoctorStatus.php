<?php

namespace App\Models\clerk\doctors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'status_description',

        'status_name',
        'doc_id',
    ];
}
