<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
        protected $fillable = [
        'company_id',
        'name',
        'phone',
        'password',
        'can_create',
        'can_print',
        'is_admin',
        'is_active'
    ];
      protected $hidden = ['password'];
          public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function createdInvoices()
    {
        return $this->hasMany(Invoice::class, 'created_by');
    }

    public function printedInvoices()
    {
        return $this->hasMany(Invoice::class, 'printed_by');
    }
}
