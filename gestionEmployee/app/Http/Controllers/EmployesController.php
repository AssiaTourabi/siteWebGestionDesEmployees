<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $employes = Employe::all();
        return view('employes.index')->with(['employes' => $employes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request ,[
           'id_emp' =>'required|numeric',
           'nom_emp' =>'required',
           'prenom_emp' =>'required',
           'email_emp' =>'required',
           'sexe_emp' =>'required',
           'tele_emp' =>'required',
           'sitFam_emp' =>'required',
           'cin_emp' =>'required',
           'dip_emp' =>'required',
       ]);
       
      Employe::create($request->all());
          return redirect()->route('employes.index')->with(['success' => 'Bien enregistré']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->save();
        Session::flash('message', 'Name updated!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
