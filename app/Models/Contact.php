<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'
    ];

    // the following line is optional. because : Contact Model will be binded with "contacts" table = Eloquent convention
    protected $table = 'contacts';

    // this is not needed, is an example how to transform data using a kind of getter...
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

}
