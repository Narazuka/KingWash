<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.booking', [
            'tittle' => 'Booking'
        ]);
    }

    public function history()
    {
        return view('user.history', [
            'tittle' => 'history',
            'post' => Booking::all()
        ]);
    }

    public function input(Request $request)
    {
        Booking::create([
            'nama'=> $request->nama,
            'notelp'=> $request->notelp,
            'layanan'=> $request->layanan,
            'merk'=> $request->merk,
            'plat'=> $request->plat,
            'tanggal'=> $request->tanggal,
        ]);
        return redirect('/history');
    }

    public function edit($id)
    {
        $edit= Booking::where('id',$id)->first(); 
        return view('user.edit',compact('edit'), [
            'tittle'=>'edit'
        ]);
    }
    
    public function update(Request $request, $id){
        $update = Booking::where('id', $id)->update([
            'nama'=> $request->nama,
            'notelp'=> $request->notelp,
            'layanan'=> $request->layanan,
            'merk'=> $request->merk,
            'plat'=> $request->plat,
            'tanggal'=> $request->tanggal,
        ]);
        return redirect('/history');
    }
    public function delete($id){
        Booking::destroy($id);

        return back();
    }
}
