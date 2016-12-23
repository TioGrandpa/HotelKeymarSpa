<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tipohabitacion;
use App\Habitacion;


class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacion::all();
        $tipos = Tipohabitacion::all();
        $general[] = $habitaciones;
        $general[] = $tipos;
        return view('gestor.habitaciones.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipos = Tipohabitacion::all();
        $general[] = $tipos;
        return view('gestor.habitaciones.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new Habitacion($request->all());
        $tipos->save();
        return redirect('admin/habitaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

       // $tipos = Tipohabitacion::all();
        $habitaciones= Habitacion::find($id);
        $tipos= Tipohabitacion::all();
         
      return view('gestor.habitaciones.edit')
      ->with('habitaciones',$habitaciones)  
      ->with('tipos',$tipos);

        
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

         $habitaciones = Habitacion::find($id);
        
        $habitaciones->numero=$request->numero;
        $habitaciones->piso=$request->piso;
        $habitaciones->estado=$request->estado;
      $habitaciones->TipoHabitacion_id=$request->TipoHabitacion_id;
        $habitaciones->save();
        return redirect('admin/habitaciones');

    
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




       public function vista()
    {

        
    }
    public function destroy($id)
    {
      
      $habitaciones = Habitacion::find($id);
      $habitaciones->delete(); 
      return redirect('admin/habitaciones');
     
    }

}
 