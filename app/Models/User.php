<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Update the import
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject; // Import the JWTSubject interface
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements JWTSubject // Update the class definition
{
    use HasFactory;
    use Notifiable;

    // Define fillable fields or use guarded as needed
    protected $fillable = ['name', 'email', 'password', 'isAdmin', 'isPremium', 'totalPurchases'];
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Typically, it returns the primary key of the user
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
