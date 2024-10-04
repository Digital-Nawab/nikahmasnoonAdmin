<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'matrimony_for',
        'name',
        'user_id',
        'password',
        'profile_pic',
        'gender',
        'date_of_birth',
        'mobile',
        'whatsapp',
        'email',
        'caste',
        'sub_caste',
        'caste_preference',
        'marital_status',
        'about',
        'family_detail',
        'Requirements',
        'country',
        'state',
        'city',
        'height',
        'height_cm',
        'family_type',
        'any_disability',
        'qualification',
        'other_qualification',
        'employed_in',
        'occupation',
        'annual_income',
        'min_salary',
        'max_salary',
        'body_type',
        'complexion',
        'Language_spoken',
        'Native_Hometown',
        'is_active',
        'is_varified',
        'is_marriage',
        'membership_type',
    ];
}
