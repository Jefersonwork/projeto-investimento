<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;


    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'social_network', 'social_id', 'social_email', 'social_avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
