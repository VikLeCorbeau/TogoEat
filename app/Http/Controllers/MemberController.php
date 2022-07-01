<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    /**
     * Added
     * Display list view with all databases entry
     *
     * @return \Illuminate\View\View
     *
     */
    public function show(){
        $data = User::all();
        return view('employees', ['users'=>$data]);
    }

    /**
     * displays the database of the id selected
     * added
     * 
     * 
     * @param int $id
     * 
     * @return the database of the id selected
     */

     public function edit(int $id)
     {
        if ($data= User::find($id)) {
            return view ('edit', ['data'=>$data]);
        }
     }


    /**
     * Handle an incoming database change request
     * added
     * 
     * 
     * @param $request
     * 
     * @return \resources\views\list
     */
     public function update(Request $request)
     {
      
         if ($data=User::find($request->id)) {
            $data->name = $request->name;
            $data->image_path=$request->image_path;
            $data->surname=$request->surname;
            $data->email=$request->email;
            $data->role=$request->role;
            $data->deactivated=$request->deactivated;
            $data->save();

            return redirect(route('employees.show'));
         }

     }
}
