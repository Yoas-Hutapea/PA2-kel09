<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Resources\Pengumuman as ResourcesPengumuman;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends BaseController
{
    public function index()
    {
        $pengumumans = Pengumuman::all();
        return $this->sendResponse(ResourcesPengumuman::collection($pengumumans), 'Posts fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'hari_tanggal' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',

        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $pengumuman = Pengumuman::create($input);
        return $this->sendResponse(new ResourcesPengumuman($pengumuman), 'Post created.');
    }
   
    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);
        if (is_null($pengumuman)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcesPengumuman($pengumuman), 'Post fetched.');
    }
    
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'hari_tanggal' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $pengumuman->hari_tanggal = $input['hari_tanggal'];
        $pengumuman->judul = $input['judul'];
        $pengumuman->deskripsi = $input['deskripsi'];
        $pengumuman->save();
        
        return $this->sendResponse(new ResourcesPengumuman($pengumuman), 'Post updated.');
    }
   
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
