<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Outhebox\LaravelTranslations\LaravelTranslationsApplicationServiceProvider;

class TranslationsServiceProvider extends LaravelTranslationsApplicationServiceProvider
{
    public function boot()
    {
        parent::boot();
    }

    protected function gate()
    {
            Gate::define('viewLaravelTranslationsUI', function (User $user) {

                return in_array($user->email, [
                    'translator', 'translation.loader'
                ]);
        });
    }
}
