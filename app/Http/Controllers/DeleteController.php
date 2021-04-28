<?php

namespace App\Http\Controllers;
use App\Models\Devices;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function list()
    {
        $data=Devices::all();
        return view('list',['devicess'=>$data]);
    }
    public function delete($id)
    {
    $data=Devices::find($id);
    $data->delete();
    return redirect('list');
    }
    public function showData($id)
    {
        $data=Devices::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $req)
    {
      //  return $req->input();
    $data=Devices::find($req->id);
    $data->name=$req->name;
    $data->member_id=$req->member_id;
    $data->email=$req->email;
    $data->address=$req->address;
    $data->save();
    return redirect('list');
    }
    
}
