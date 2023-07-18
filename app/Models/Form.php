<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table='form';
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User:: class, 'from_id');
    }

    public function checked()
    {
        return $this->belongsTo(User:: class, 'checked_by');
    }

    public function approve()
    {
        return $this->belongsTo(User:: class, 'approve_by');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function norek()
    {
        return $this->belongsTo(NoRek::class, 'norek_id');
    }

}