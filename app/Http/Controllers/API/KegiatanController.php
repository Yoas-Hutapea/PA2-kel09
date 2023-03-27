<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Resources\Kegiatan as ResourcesKegiatan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends BaseController
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return $this->sendResponse(ResourcesKegiatan::collection($kegiatans), 'Posts fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => 'required',
            'tempat' => 'required',
            'hari_tanggal' => 'required',
            'deskripsi' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $kegiatan = Kegiatan::create($input);
        return $this->sendResponse(new ResourcesKegiatan($kegiatan), 'Post created.');
    }
   
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        if (is_null($kegiatan)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcesKegiatan($kegiatan), 'Post fetched.');
    }
    
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => 'required',
            'tempat' => 'required',
            'hari_tanggal' => 'required',
            'deskripsi' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $kegiatan->judul = $input['judul'];
        $kegiatan->tempat = $input['tempat'];
        $kegiatan->hari_tanggal = $input['hari_tanggal'];
        $kegiatan->deskripsi = $input['deskripsi'];
        $kegiatan->save();
        
        return $this->sendResponse(new ResourcesKegiatan($kegiatan), 'Post updated.');
    }
   
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return $this->sendResponse([], 'Post deleted.');
    }

}
