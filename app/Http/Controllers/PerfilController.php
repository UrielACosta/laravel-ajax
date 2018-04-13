<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Session;
use Redirect;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getPerfil()
    {

        $perfil = DB::table('perfil')->get();
        return Response::json($perfil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPerfil()
    {

        $perfil = new Perfil();
        $perfil = request()->all();
        DB::table('perfil')->insert(
            ['nomePerfil' => $perfil['idPerfil'], 'descricao' => $perfil['idDesc']]
        );
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPerfil()
    {
        $perfil = new Perfil();
        $perfil = request()->all();

        DB::table('perfil')
        ->where('idPerfil', $perfil['idperfil'])
        ->update(['nomePerfil' => $perfil['idNomePerfilEdit'], 'descricao' =>  $perfil['idPerfilDescEdit']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listEditPerfil()
    {
        $id = request()->input('id');
        $dados = DB::table('perfil')->where('idPerfil', $id)->get();

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
        DB::table('perfil')->where('idPerfil', $id)->delete();
    }
}
