<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    protected $fillable =[
        'district_id',
        'source_name',
        'village',
        'parish',
        'sub_county',
        'county',
        'g_p_s_location',
        'lab_identifier_code'
    ];
}
