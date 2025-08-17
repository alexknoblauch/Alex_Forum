<?php
namespace App\Services;
use MongoDB\Client;

class MongoService{

    protected Client $client;
    protected string $databaseName;

    public function __construct(){
        $this->client = new Client(env('MONGO_DSN'));
        $this->databaseName = env('DB_DATABASE_MONGO', 'forum');
    }


    public function collection(string $name){
        return $this->client->selectDatabase($this->databaseName)->selectCollection($name);
    }
}
