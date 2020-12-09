<?php

namespace App\Http\Controllers;


use App\Models\Certificado;
use App\Http\Requests\CreateCertificadoRequest;
use App\Http\Requests\UpdateCertificadoRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\CertificadoRepository;
use Flash;
use Response;



class CertificadoController extends AppBaseController
{
    /** @var  CertificadoRepository */
    private $certificadoRepository;

    public function __construct(CertificadoRepository $certificadoRepo)
    {
        $this->certificadoRepository = $certificadoRepo;
    }

    /**
     * Display a listing of the Certificado.
     *
     * @param Request $request
     *
     * @return Response
     */


    public function mostrarCertificados(){
        $id = Auth::id();
        $certificados = Certificado::where('idUsuarioCertificado','=',$id)->get(); 

        
        $coleccion = array();
        foreach ($certificados as $certificado) {

            if (empty($certificado->idFamiliar)){
                $nombreTitular= DB::table('users')->where('id','=',$id)->get('nombreUsuario');
           
            } else{
                $nombreTitular= DB::table('familiares')->where('id','=',$certificado->idFamiliar)->get('nombres');
            }
                       
            $nombreMedico = DB::table('medicos')->where('id','=',$certificado->idMedico)->get('nombres');
            $nombrePatologia = DB::table('patologias')->where('id','=',$certificado->idPatologia)->get('nombrePatologia');
            
            $certificadoPush = array(
                "Titular"  => $nombreTitular,
                "Fecha" => $certificado->fechaCertificado->format('m/d/Y') ,
                "Patologia" =>  $nombrePatologia ,
                "Medico" => $nombreMedico,
                "DiasAusencia" => $certificado->diasDeAusencia,
                "Estado" => $certificado->estadoCertificado,
                "Id" => $certificado->id
            );
            
       

            array_push($coleccion,$certificadoPush );
            }
  
        
        return view('certificados.mostrar_certificados',[
           'certificados'=>  $coleccion,
       ]);

    }



    public function mostrarCertificadosJustificados(){
        $id = Auth::id();
        $certificados = Certificado::where('idUsuarioCertificado','=',$id)->where('estadoCertificado','=','Justificado')->get(); 
        $coleccion = array();
        foreach ($certificados as $certificado) {

            if (empty($certificado->idFamiliar)){
                $nombreTitular= DB::table('users')->where('id','=',$id)->get('nombreUsuario');
           
            } else{
                $nombreTitular= DB::table('familiares')->where('id','=',$certificado->idFamiliar)->get('nombres');
            }
                       
            $nombreMedico = DB::table('medicos')->where('id','=',$certificado->idMedico)->get('nombres');
            $nombrePatologia = DB::table('patologias')->where('id','=',$certificado->idPatologia)->get('nombrePatologia');
            
            $certificadoPush = array(
                "Titular"  => $nombreTitular,
                "Fecha" => $certificado->fechaCertificado->format('m/d/Y') ,
                "Patologia" =>  $nombrePatologia ,
                "Medico" => $nombreMedico,
                "DiasAusencia" => $certificado->diasDeAusencia,
                "Estado" => $certificado->estadoCertificado,
                "Id" => $certificado->id
            );
            
       

            array_push($coleccion,$certificadoPush );
            }
  
        
        return view('certificados.mostrar_certificados',[
           'certificados'=>  $coleccion,
       ]);

    }


    public function mostrarCertificadosPendientes(){
        $id = Auth::id();
        $certificados = Certificado::where('idUsuarioCertificado','=',$id)->where('estadoCertificado','=','Pendiente')->get(); 
        $coleccion = array();
        foreach ($certificados as $certificado) {

            if (empty($certificado->idFamiliar)){
                $nombreTitular= DB::table('users')->where('id','=',$id)->get('nombreUsuario');
           
            } else{
                $nombreTitular= DB::table('familiares')->where('id','=',$certificado->idFamiliar)->get('nombres');
            }
                       
            $nombreMedico = DB::table('medicos')->where('id','=',$certificado->idMedico)->get('nombres');
            $nombrePatologia = DB::table('patologias')->where('id','=',$certificado->idPatologia)->get('nombrePatologia');
            
            $certificadoPush = array(
                "Titular"  => $nombreTitular,
                "Fecha" => $certificado->fechaCertificado->format('m/d/Y') ,
                "Patologia" =>  $nombrePatologia ,
                "Medico" => $nombreMedico,
                "DiasAusencia" => $certificado->diasDeAusencia,
                "Estado" => $certificado->estadoCertificado,
                "Id" => $certificado->id
            );
            
       

            array_push($coleccion,$certificadoPush );
            }
  
        
        return view('certificados.mostrar_certificados',[
           'certificados'=>  $coleccion,
       ]);

    }
    

    public function mostrarCertificadosVencidos(){
        $id = Auth::id();
        $certificados = Certificado::where('idUsuarioCertificado','=',$id)->where('estadoCertificado','=','Vencido')->get(); 
        $coleccion = array();
        foreach ($certificados as $certificado) {

            if (empty($certificado->idFamiliar)){
                $nombreTitular= DB::table('users')->where('id','=',$id)->get('nombreUsuario');
           
            } else{
                $nombreTitular= DB::table('familiares')->where('id','=',$certificado->idFamiliar)->get('nombres');
            }
                       
            $nombreMedico = DB::table('medicos')->where('id','=',$certificado->idMedico)->get('nombres');
            $nombrePatologia = DB::table('patologias')->where('id','=',$certificado->idPatologia)->get('nombrePatologia');
            
            $certificadoPush = array(
                "Titular"  => $nombreTitular,
                "Fecha" => $certificado->fechaCertificado->format('m/d/Y') ,
                "Patologia" =>  $nombrePatologia ,
                "Medico" => $nombreMedico,
                "DiasAusencia" => $certificado->diasDeAusencia,
                "Estado" => $certificado->estadoCertificado,
                "Id" => $certificado->id
            );
            
       

            array_push($coleccion,$certificadoPush );
            }
  
        
        return view('certificados.mostrar_certificados',[
           'certificados'=>  $coleccion,
       ]);

    }

    public function ingresarCertificadoCheck(){
        $justificado = DB::table('certificados')->where('idUsuarioCertificado','=',auth::id())->where('estadoCertificado','=','Justificado')->get();
               if(empty($justificado[0])){
              //  $localidades = DB::table('localidades')->get()->pluck('nombreLocalidad','nombreLocalidad');
                $patologias = DB::table('patologias')->get()->pluck('nombrePatologia','id');
                $medicos = DB::table('medicos')->get()->pluck('apellido','id');
               
                              return view('certificados.create',compact('patologias','medicos'));
        }
         else{
            return view('certificados.activoTrue');
                    }

    }




    public function index(Request $request)
    {
        $certificados = $this->certificadoRepository->all();

        return view('certificados.index')
            ->with('certificados', $certificados);
    }

    /**
     * Show the form for creating a new Certificado.
     *
     * @return Response
     */
    public function create()
    {
        return view('certificados.create');
    }

    /**
     * Store a newly created Certificado in storage.
     *
     * @param CreateCertificadoRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificadoRequest $request)
    {
        $input = $request->all();

        $certificado = $this->certificadoRepository->create($input);

        Flash::success('Certificado saved successfully.');

        return redirect(route('certificados.mostrar_certificados'));
    }

    /**
     * Display the specified Certificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $certificado = $this->certificadoRepository->find($id);

        if (empty($certificado)) {
            Flash::error('Certificado not found');

            return redirect(route('certificados.index'));
        }

        return view('certificados.show')->with('certificado', $certificado);
    }

    /**
     * Show the form for editing the specified Certificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $certificado = $this->certificadoRepository->find($id);

        if (empty($certificado)) {
            Flash::error('Certificado not found');

            return redirect(route('certificados.index'));
        }

        return view('certificados.edit')->with('certificado', $certificado);
    }

    /**
     * Update the specified Certificado in storage.
     *
     * @param int $id
     * @param UpdateCertificadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificadoRequest $request)
    {
        $certificado = $this->certificadoRepository->find($id);

        if (empty($certificado)) {
            Flash::error('Certificado not found');

            return redirect(route('certificados.index'));
        }

        $certificado = $this->certificadoRepository->update($request->all(), $id);

        Flash::success('Certificado updated successfully.');

        return redirect(route('certificados.index'));
    }

    /**
     * Remove the specified Certificado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $certificado = $this->certificadoRepository->find($id);

        if (empty($certificado)) {
            Flash::error('Certificado not found');

            return redirect(route('certificados.index'));
        }

        $this->certificadoRepository->delete($id);

        Flash::success('Certificado deleted successfully.');

        return redirect(route('certificados.index'));
    }
}
