<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public function canAccessPanel(Panel $panel): bool {
        return $this->isAdmin() || $this->isManager() || $this->isInstructor() ;
    }

    const ROLE_ADMIN = 'ADMIN';
    const ROLE_MANAGER = 'MANAGER';
    const ROLE_INSTRUCTOR = 'INSTRUCTOR';
    const ROLE_USER = 'USER';
    const ROLE_DEFAULT = self::ROLE_USER;
    
    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_MANAGER => 'Manager',
        self::ROLE_INSTRUCTOR => 'Instructor',
        self::ROLE_USER => 'User',
    ];

    public function isAdmin() {
        return $this->role === 'Admin';
    }

    public function isManager() {
        return $this->role === 'Manager';
    }

    public function isInstructor() {
        return $this->role === 'Instructor';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',  
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }
}
