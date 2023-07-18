<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'no_hp',
        'password',
        'jabatan_id',
        'departement_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->hasMany(Form::class);

    }
    public function checked()
    {
        return $this->hasMany(Form::class);

    }
    public function approve()
    {
        return $this->hasMany(Form::class);

    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan:: class, 'jabatan_id');
    }

        public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

}