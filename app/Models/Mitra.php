<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mitra extends Authenticatable implements FilamentUser
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'toko',
        'password',
        'no_hp',
        'logo'
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        if($panel->getId() != 'mitra') {
            return false;
        }
        return true;
    }
}
