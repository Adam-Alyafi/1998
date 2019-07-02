<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function all()
    {
        $event=array('Workshop', 'Seminar');
        return response()->json($event);
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $event=array();
        return response()->json($event);
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function create(Request $request)
    {
        $id=$request->id;
        $judul=$request->judul;
        $tanggal=$request->tanggal;
        $lokasi=$request->lokasi;
        $speaker=$request->speaker;
        $deskripsi=$request->deskripsi;
        $link=$request->link;
        $poster=$request->poster;
        $status=$request->status;
        return response()->json('sukses');
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return User::findOrFail($id);
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        return User::findOrFail($id);
    }
}
