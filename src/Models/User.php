<?php

namespace AccessManager\Auth\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package AccessManager\Auth
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * get username for authentication
     *
     * @return mixed
     */
    public function getAuthUsername()
    {
        return $this->username;
    }
    /**
     * Get password for authentication
     *
     * @return mixed
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * call bcrypt() on password values before saving into database.
     *
     * @param $password
     * @return string
     */
    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }
}
