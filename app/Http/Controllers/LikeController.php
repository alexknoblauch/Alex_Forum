<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Like; 

class LikeController extends Controller
{
    public function store(Request $request, $type, $post){

        $userId = auth::user()->id;
        if(!Like::where('likeable_type', $type)->where('likeable_id', $post)->where('user_id', $userId)->exists()){
            Like::create([
                'likeable_type' => $type,
                'likeable_id' => $post,
                'user_id' => $userId, 
            ]);
        } else {
            Like::where('likeable_type', $type)
                ->where('likeable_id', $post)
                ->where('user_id', $userId)
                ->delete();        
            };

        return response()->noContent();

    }

        public function getChatPartner(Request $request){
        //Create MongoDB Collection
        $collection = $this->getMongoCollection();


        //Filtering
        $userId = Auth::id(); 
        $cursor = $collection->find(['participants' => $userId]);
        $messages = iterator_to_array($cursor);

            $userName = Auth::user()->name;
            $messages = iterator_to_array($this->getMongoCollection()->find(['participants' => Auth::id()]));

            foreach ($messages as $m) {
                $m->chatPartner = collect($m->participants_name)->first(fn($n) => $n !== $userName);
            }



        //Response
        return response()->json($messages);
    }
}
