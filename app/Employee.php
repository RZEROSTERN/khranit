<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $role_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $stripe_customer_id
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'stripe_customer_id', 'created_at', 'updated_at'];

}
