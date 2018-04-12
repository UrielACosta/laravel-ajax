<?php

namespace App\Http\Controllers;


Use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $usuariosModel;

    public function __construct(Usuarios $usuarios){

        $this->usuariosModel = $usuarios;
    }

    public function index()
    {

        $usuarios = $this->usuariosModel->find(''); //os campos que eu quero aqui
        return view('usuarios.index', compact('usuarios'));
    }

    public function getUsuarios(){


        $usuarios = DB::table('usuarios')->get();

        // $usuarios = DB::table('usuarios')
        // ->leftJoin('usuarios', 'usuario.id_perfil', '=', 'perfil.id_perfil')
        // ->get();
        
        return Response::json($usuarios);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUsuarios()
    {
        DB::table('users')->insert(
            ['email' => 'john@example.com', 'votes' => 0]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
