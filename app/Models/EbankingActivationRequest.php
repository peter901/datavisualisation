<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbankingActivationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'name',
        'gender',
        'date_of_birth',
        'comment'
    ];
}
