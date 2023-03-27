<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Saran as ResourcesSaran;
use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaranController extends Controller
{
    public function index()
    {
        $sarans = Saran::all();
        return $this->sendResponse(ResourcesSaran::collection($sarans), 'Posts fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'komen' => 'required',
            ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $saran = Saran::create($input);
        return $this->sendResponse(new ResourcesSaran($saran), 'Post created.');
    }
   
    public function show($id)
    {
        $saran = Saran::find($id);
        if (is_null($saran)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcesSaran($saran), 'Post fetched.');
    }
    
    public function update(Request $request, Saran $saran)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'komen' => 'required',
            ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $saran->komen = $input['komen'];
        $saran->save();
        
        return $this->sendResponse(new ResourcesSaran($saran), 'Post updated.');
    }
   
    public function destroy(Saran $saran)
    {
        $saran->delete();
        return $this->sendResponse([], 'Post deleted.');
    }


}
