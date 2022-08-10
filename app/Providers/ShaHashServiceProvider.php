<?php
/**
 * Created by PhpStorm.
 * User: K
 * Date: 7/29/2018
 * Time: 9:21 PM
 */
namespace App\Providers;

use Illuminate\Hashing\HashServiceProvider;
use App\Libraries\SHAHasher as SHAHasher;

class ShaHashServiceProvider extends HashServiceProvider
{
    public function register()
    {
        $this->app->singleton('hash', function () {
            return new SHAHasher;
        });
    }
}