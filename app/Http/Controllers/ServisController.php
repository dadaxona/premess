<?php

namespace App\Http\Controllers;

use App\Models\Mijoz;

class ServisController extends Controller
{
    protected $post;
    public function __construct(Mijoz $model)
    {
        $this->post=$model;
    }

    public function get()
    {
        return $this->post->paginate(5);
    }

    public function update($request)
    {
        $id=Mijoz::where('id','=',$request->id)->first();
        if ($id->role == 0) {

            return $this->post->where('id',$request->id)->update(['role' => 1]);  

        }elseif($id->role == 1){

            return $this->post->where('id',$request->id)->update(['role' => 0]);            
        }
     
    }

    public function create($request)
    {
        return $this->post->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'role' => 0
        ]);
    }
   
    public function show($id)
    {
       return $this->post->find($id);
    }

    public function edit($id)
    {
       return $this->post->find($id);
    }

    public function updated($request)
    {
        $this->post->where('id',$request->id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'role'=>$request->role,
    ]); 
    }
 
}
