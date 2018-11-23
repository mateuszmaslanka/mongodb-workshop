<?php declare(strict_types=1);

namespace App\PhpMongoDB;

use MongoDB\Client;

class Application
{
    public function run(): void
    {
        $mongo = new Client('mongodb://root:example@mongo:27017');

        $dbs = $mongo->listDatabases();

        echo '<pre>';
        print_r($dbs);
        echo '</pre>';
    }

}
