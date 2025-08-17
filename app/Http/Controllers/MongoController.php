<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mongouser;
use App\Models\User;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use MongoDB\Client;


class MongoController extends Controller {

    public function index(){
        //Create MongoDB Collection
        $mongoDsn = env('MONGO_DSN'); 
        $databaseName = 'forum';  
        $collectionName = 'messages';
        $client = new Client($mongoDsn);
        $collection = $client->selectDatabase($databaseName)->selectCollection($collectionName);

        //Filtering
        $userId = Auth::id(); 
        $cursor = $collection->find(['participants' => $userId]);
        $messages = iterator_to_array($cursor);

        foreach ($messages as &$message) {
            $participants = $message['participants_name'];
            $otherIndex = $participants[0] === 0 ? 1 : 0;
            $message['chatPartner'] = $participants[$otherIndex];
        }

        return view('nachrichten.index', compact('messages'));
    }

    public function show(){
        //Create MongoDB Collection
        $mongoDsn = env('MONGO_DSN'); 
        $databaseName = 'forum';  
        $collectionName = 'messages';
        $client = new Client($mongoDsn);
        $collection = $client->selectDatabase($databaseName)->selectCollection($collectionName);
    }

    public function store(Request $request){
            $request->validate([
                
            ]);

    }

    //DROPDOWN FUNKTION
    public function getChatPartner(Request $request){
        //Create MongoDB Collection
        $mongoDsn = env('MONGO_DSN'); 
        $databaseName = 'forum';  
        $collectionName = 'messages';
        $client = new Client($mongoDsn);
        $collection = $client->selectDatabase($databaseName)->selectCollection($collectionName);

        //Filtering
        $userId = Auth::id(); 
        $cursor = $collection->find(['participants' => $userId]);
        $messages = iterator_to_array($cursor);

        foreach ($messages as &$message) {
            $participants = $message['participants_name'];
            $otherIndex = $participants[0] === 0 ? 1 : 0;
            $message['chatPartner'] = $participants[$otherIndex];
        }

        //Response
        return response()->json($messages);
    }

    


}
