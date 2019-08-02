<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;


class operaciones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $persona= new Persona();
        $persona->nombre=$request->txtnombre;
        $persona->apellidos=$request->txtapellido;
        $persona->correo=$request->txtcorreo;
        $persona->contraseña=$request->txtcontraseña;
        $persona->save();
        $personas= Persona::all();
       return view('vista',compact('personas'));

      
       /* return view('complete');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Persona::findOrFail($id);
        return view('edit',compact('persona'));
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
        
    
        $persona=Persona::findOrFail($id);
        $persona->nombre=$request->txtnombre;
        $persona->apellidos=$request->txtapellidos;
        $persona->correo=$request->txtcorreo;
        $persona->contraseña=$request->txtcontraseña;

        $persona->save();
         return view('edit',compact('persona'));
        

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona=Persona::findOrFail($id);
        //Persona::destroy($id);
       $persona->delete(); 
        return redirect('');
    }
}
