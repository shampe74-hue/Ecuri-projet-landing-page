<?php

class verifications
{

    public static function required(string $data): bool
    {
        return !empty(trim($data));
    }

    public static function longueurNom(string $data): bool
    {

        $longueur = mb_strlen(trim($data));

        return $longueur >= 2 && $longueur <= 50;
    }

    public static function longueurText(string $data): bool
    {

        $longueur = mb_strlen(trim($data));

        return $longueur >= 2 && $longueur <= 300;
    }

    public static function email(string $data): bool
    {
        return trim(strtolower(filter_var($data, FILTER_VALIDATE_EMAIL)));
    }

    public static function format(string $data): bool {
        $patern = "/^\(p{Lu}[\p{L}])+([ -][\p{Lu}[\p{L}])*$/u";

        return preg_match($patern, $data);
    }
}
