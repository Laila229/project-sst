<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
        protected $fillable = [
        'company_id',
        'created_by',
        'printed_by',
        'printed_count',
        'is_printed',

       
       'phone',
       'governorate',
       'address',
       'product',
       'warranty_period',
       'notes',
    ];

     public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function creator()
    {
        return $this->belongsTo(Employee::class, 'created_by');
    }

    public function printer()
    {
        return $this->belongsTo(Employee::class, 'printed_by');
    }
}
