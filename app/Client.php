<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user', 'name', 'contact_date', 'phone', 'city', 'email', 'lead', 'comment', 'status'];
}
