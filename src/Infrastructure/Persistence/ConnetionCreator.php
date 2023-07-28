<?php


namespace VisitaDomiciliar\Uisi\Infrastructure\Persistence;
use PDO;

class ConnetionCreator
{
    public static function creatorConnection(): PDO
    {
        $user = 'Raph';
        $pass = '@082Rych!';
        $database = 'serenatto';
        $host = 'localhost';

        $connetion = new PDO(
            "mysql:host=$host;dbname=$database",
            $user,
            $pass
        );

        $connetion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connetion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connetion;
    }

}