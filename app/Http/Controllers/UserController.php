<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medico;
use App\Models\Certificado;
use App\Models\Localidad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use App\Http\Requests\CreateuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Repositories\userRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;       

class userController extends AppBaseController
{
    /** @var  userRepository */
    private $userRepository;

    public function __construct(userRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function fillFieldsIngresarUsuario(){


    }

    
    public function reportexmedicoblade(Request $request)
    {
        
        $medicos = Medico::get()->pluck('apellidoNombres','id');  
        $medicos->prepend('Seleccione un médico ...', $key = null);
           
        $medico = null;    
       
       $certificados = Certificado::certificadosFiltro($request->idmedico, $request->estado, $request->fecha_inicial, $request->fecha_final);

       
        return view('reportes.certificadosXmedico.index',compact('medicos','medico','certificados','request'));
        //->with('medicos', $medicos)->with('medico', $medico)->with('certificados',$certificados);
       

    }

    
    public function reporteausentismo(Request $request)
    {
        
       
       $certificados = Certificado::certificadosFiltroAusentismo( $request->fecha_inicial, $request->fecha_final);

        return view('reportes.ausentismo.index',compact('certificados','request'));

       

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     *
     * @return Response
     */

     /*
    public function index(Request $request)
    {
        $usuarios = $this->usuarioRepository->all();

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
 
    public function create()
    {
        return view('users.create');
    }


    public function getUsuario(){
       
        if(!Auth::guest()){   $id = Auth::id();
 
         $usuario = User::find($id);
 
 
         if ($usuario->idRol==1){
             return view('after_login.usuario_personal',[
                 'usuario'=> $usuario,
             ]);
         }
 
         else if($usuario->idRol==2){
             return view('after_login.usuario_medicina',[
                 'usuario'=> $usuario,   
             ]); }
   
     
         return view('after_login.usuario_general',[
             'usuario'=> $usuario,
         ]);} 
         else{
             return redirect('/');;
         }
      
     }
 
 
     public function ingresarUsuario(){

        $localidades = DB::table('localidades')->get()->pluck('nombreLocalidad','id');
        $cargos = DB::table('cargos')->get()->pluck('nombreCargo','id');
        $tipo_usuario = DB::table('tipo_usuarios')->get()->pluck('tipoDeUsuario','id');
        $tipo_documento = DB::table('tipo_documentos')->get()->pluck('tipoDeDocumento','id');
        $roles = DB::table('roles')->get()->pluck('nombreRol','id');
        $generos = DB::table('generos')->get()->pluck('genero','id');
      

        /*$localidades = Localidad::get()->pluck('nombreLocalidad','id');*/
         return view('users.create',compact('localidades','cargos','tipo_usuario','tipo_documento','roles','generos'));    
          
     }














    /**
     * Display a listing of the user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */


    /**
     * Store a newly created user in storage.
     *
     * @param CreateuserRequest $request
     *
     * @return Response
     */
    public function store(CreateuserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified user in storage.
     *
     * @param int $id
     * @param UpdateuserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateuserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}   
