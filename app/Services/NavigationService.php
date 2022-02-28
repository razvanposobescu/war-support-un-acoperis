<?php

namespace App\Services;

use \App\User;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 *
 */
class NavigationService
{
    /**
     * @var User|null
     */
    private ?User $user = null;

    private function __construct()
    {
        $this->setUser();
    }

    /**
     * @return $this
     */
    public static function make(): self
    {
        return new static;
    }

    /**
     * Set Current User
     */
    private function setUser()
    {
        if (Auth::check())
        {
            $this->user = Auth::user();
        }
    }

    public function getMenu()
    {
        dd($this->user, Route::prefix('admin'));
    }


}
