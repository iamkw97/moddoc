<?php

namespace App\Models\clerk\doctors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doc_id',
        'doc_description',

        'doc_name',
        'doc_nic',
        'doc_sex',
        'doc_email',
        'doc_phone',
        'doc_birthday',

        'doc_field',
        'doc_status',
        'doc_working_branch',
        
        'doc_office_address',
        'doc_personal_address',
        'doc_about',
    ];
}
