<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class connectionController extends Controller
{
    public function connection() {
        // Construct new Adldap instance.
        $ad = new \Adldap\Adldap();
 
        // Create the configuration array.
        $config = [    // Mandatory Configuration Options
            'domain_controllers'    => ['whqwad05.tyson.com', 'dnowad03.tyson.com', 'dnowad01.tyson.com', '412wad02.tyson.com', '412wad01.tyson.com', 'dnowad02.tyson.com'],
            'base_dn'               => 'DC=tyson,DC=com',

            'port'                  => 389,
            'follow_referrals'      => true,
            'use_ssl'               => false,
            'use_tls'               => false,
            'timeout'               => 5,            
            
        ];
        
        // Create a new Adldap Provider instance.
        $ad->addProvider($config);
        try{
            $provider = $ad->connect();

            if ($provider->auth()->attempt('$user', '$password')) { //Autenticar usuario
                $text = "Autenticado";
            } else {
                $text = "no autenticado";
            }

        }catch(\Adldap\Auth\BindException $e) {
            return $e;
        }catch (\Adldap\Auth\UsernameRequiredException $e) {
            return $e;
        }catch (\Adldap\Auth\PasswordRequiredException $e) {
            return $e;
        }

        return $text;
    }
}
