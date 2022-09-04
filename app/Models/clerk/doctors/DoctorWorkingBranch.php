<?php

namespace App\Models\clerk\doctors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorWorkingBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'branch_description',

        'branch_name',
        'doc_id',
    ];
}
