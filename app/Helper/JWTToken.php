<?php

namespace App\Helper;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class JWTToken
{
    public static function CreateToken($userEmail,$userID):string
    {
        $key =env('dk_key');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+24*60*60,
            'userEmail'=>$userEmail,
            'userID'=>$userID
        ];
        return JWT::encode($payload,$key,'HS256');
    }

    public static function ReadToken($token): string|object
    {
        try {
            if($token==null){
                return 'unauthorized';
            }
            else{
                $key =env('dk_key');
                return JWT::decode($token,new Key($key,'HS256'));
            }
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }
}

