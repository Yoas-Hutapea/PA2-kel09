<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Resources\Pengajuan as ResourcePengajuan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends BaseController
{
    public function index()
    {
        $pengajuans = Pengajuan::all();
        return $this->sendResponse(ResourcePengajuan::collection($pengajuans), 'Posts fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'jenis_pengajuan' => 'required',
            'deskripsi' => 'required',
            'foto_dokumen' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $pengajuan = Pengajuan::create($input);
        return $this->sendResponse(new ResourcePengajuan($pengajuan), 'Post created.');
    }
   
    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
        if (is_null($pengajuan)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcePengajuan($pengajuan), 'Post fetched.');
    }
    
    public function update(Request $request, Pengajuan $pengajuan)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'jenis_pengajuan' => 'required',
            'deskripsi' => 'required',
            'foto_dokumen' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $pengajuan->jenis_pengajuan = $input['jenis_pengajuan'];
        $pengajuan->deskripsi = $input['deskripsi'];
        $pengajuan->foto_dokumen = $input['foto_dokumen'];
        $pengajuan->save();
        
        return $this->sendResponse(new ResourcePengajuan($pengajuan), 'Post updated.');
    }
   
    public function destroy(Pengajuan $pengajuan)
    {
        $pengajuan->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
