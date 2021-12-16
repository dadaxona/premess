<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Providers\ControlServise;

class HomeController extends Controller
{
  
    public function ruxsat(ControlServise $data)
    {
        return view('role.roles',['a' => $data->get()]);
    }

    public function aktive(Request $request, ControlServise $data)
    {
        
        $data->update($request);
        return back()->with('success', 'Mijoz aktivlash tizimi yoqildi');
    }

    public function neaktiv(Request $request, ControlServise $data)
    {
        
        $data->noupdate($request);
        return back()->with('neaktiv', 'Tizim ochirildi');
    }

    public function index(ControlServise $data)
    {
        return view('role.mijoz',['a'=>$data->get()]);
    }

    public function store(Request $request, ControlServise $data)
    {
        $data->create($request);     
        return redirect()->route('a');
    }

    public function show($id, ControlServise $data)
    {
        $show=$data->show($id);       
        return view('role.show',compact('show'));
    }

    public function edit($id, ControlServise $data)
    {
        $edit=$data->edit($id);      
        return view('role.edit',compact('edit'));
    }

    public function update(Request $request, ControlServise $data)
    {
        $data->updated($request);
        return redirect()->route('a');
    }
}
