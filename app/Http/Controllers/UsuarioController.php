<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $usuariosModel;

    public function __construct(Usuarios $usuarios)
    {

        $this->usuariosModel = $usuarios;
    }

    public function index()
    {
        $usuarios = $this->usuariosModel->find(''); //os campos que eu quero aqui
        return view('usuarios.index', compact('usuarios'));
    }

    public function getUsuarios()
    {


        $usuarios = DB::table('usuarios')
        ->leftJoin('perfil', 'usuarios.id_perfil', '=', 'perfil.idPerfil')
        ->get();
        return Response::json($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUsuarios()
    {
        $usuario = new Usuarios();
        $usuario = request()->all();

        DB::table('usuarios')->insert(
            ['id_perfil' => $usuario['idPerfil'], 'nome' => $usuario['idNome'], 'email' => $usuario['idEmail'], 'dataNasc' => $usuario['idDataNasc'], 'telefone' => $usuario['idTelefone'], 'cargo' => $usuario['idCargo'], 'salario' => $usuario['idSalario'] ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUsuarios()
    {
        $usuario = new Usuarios();
        $usuario = request()->all();

        DB::table('usuarios')
        ->where('id', $usuario['id'])
        ->update(['id_perfil' => $usuario['idPerfil1'], 'nome' => $usuario['idNome'], 'email' => $usuario['idEmail'], 'dataNasc' => $usuario['idDataNasc'], 'telefone' => $usuario['idTelefone'], 'cargo' => $usuario['idCargo'], 'salario' => $usuario['idSalario'] ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listEditUsuarios()
    {

        $id = request()->input('id');
        $dados = DB::table('usuarios')->where('id', $id)->get();

        return Response::json($dados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUsuarios()
    {
        $id = request()->input('id');
        DB::table('usuarios')->where('id', $id)->delete();
    }

    
}
