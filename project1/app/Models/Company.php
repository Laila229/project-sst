<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
        protected $fillable = [
        'name',
        'owner_name',
        'phone',
        'start_date',
        'end_date',
        'is_active',
        'notes'
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
        public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    protected static function booted()
{
    static::saving(function ($company) {
        if ($company->end_date < now()) {
            $company->is_active = false;
        }
    });
}
}
