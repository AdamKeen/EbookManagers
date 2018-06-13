<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationTemplate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'organisation_id','name','subject','from','template'
    ];
}