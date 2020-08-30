<?php

namespace App\Http\Controllers\JobBoard;

use App\Models\JobBoard\Ability;
use App\Models\JobBoard\AcademicFormation;
use App\Models\JobBoard\Company;
use App\Models\JobBoard\Course;
use App\Models\JobBoard\Language;
use App\Models\JobBoard\Offer;
use App\Models\JobBoard\Professional;
use App\Models\JobBoard\ProfessionalExperience;
use App\Models\JobBoard\ProfessionalReference;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Http\Controllers\Controller;

class ProfessionalController extends Controller
{

    //Método para filtrar postulantes
    function filterPostulants(Request $request)
    {
        $data = $request->json()->all();
        $dataFilter = $data['filters'];
        $postulants = Professional::
        join('academic_formations', 'academic_formations.professional_id', '=', 'professionals.id')
            ->orWhere($dataFilter['conditions'])
            ->where('professionals.state_id', 1)
            ->where('professionals.about_me', '<>', '')
            ->where('academic_formations.state_id', 1)
            ->orderby('professionals.' . $request->field, $request->order)
            ->paginate($request->limit);
        return response()->json([
            'pagination' => [
                'total' => $postulants->total(),
                'current_page' => $postulants->currentPage(),
                'per_page' => $postulants->perPage(),
                'last_page' => $postulants->lastPage(),
                'from' => $postulants->firstItem(),
                'to' => $postulants->lastItem()
            ], 'postulants' => $postulants], 200);

    }

    //Método para filtrar postulantes segun cambios
    function filterPostulantsFields(Request $request)
    {
        $postulants = Professional::
        join('academic_formations', 'academic_formations.professional_id', '=', 'professionals.id')
            ->where('professionals.about_me', '<>', '')
            ->where('professionals.state_id', 1)
            ->where('academic_formations.state_id', 1)
            //->where('career', 'like', strtoupper($request->filter) . '%')
            //->OrWhere('professional_degree', 'like', '%' . strtoupper($request->filter) . '%')
            ->orderby('professionals.' . $request->field, $request->order)
            ->paginate($request->limit);
        return response()->json([
            'pagination' => [
                'total' => $postulants->total(),
                'current_page' => $postulants->currentPage(),
                'per_page' => $postulants->perPage(),
                'last_page' => $postulants->lastPage(),
                'from' => $postulants->firstItem(),
                'to' => $postulants->lastItem()
            ], 'postulants' => $postulants], 200);

    }

    /* Metodo para obtener todas las ofertas a las que aplico el profesional*/

    /* Metodos para gestionar los datos personales*/
    function getProfessionals(Request $request)
    {
        $professionals = Professional::
        join('academic_formations', 'academic_formations.professional_id', '=', 'professionals.id')
            ->join('catalogues', 'academic_formations.professional_degree_id', '=', 'catalogues.id')
            //->with('academicFormations')
            ->where('professionals.state_id', 1)
            ->where('professionals.about_me', '<>', '')
//            ->where('academic_formations.state', 'ACTIVE')
            //->orderby('professionals.' . $request->field, $request->order)
            ->paginate(10);

//        $professionals = Professional::where('professionals.state', 'ACTIVE')
//            ->where('academic_formations.state', 'ACTIVE')
//            ->join('academic_formations', 'academic_formations.professional_id', '=', 'academic_formations.id')
//            ->orderby('professionals.' . $request->field, $request->order)
//            ->paginate($request->limit);
        return response()->json([
            'pagination' => [
                'total' => $professionals->total(),
                'current_page' => $professionals->currentPage(),
                'per_page' => $professionals->perPage(),
                'last_page' => $professionals->lastPage(),
                'from' => $professionals->firstItem(),
                'to' => $professionals->lastItem()
            ], 'postulants' => $professionals], 200);

    }

    //Método para obtener un profesional segun el id, con la tabla academicFormations

    function show($id)
    {
        try {
            $professional = Professional::where('user_id', $id)->with('academicFormations')->first();
            return response()->json(['professional' => $professional], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException  $e) {
            return response()->json($e, 405);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }

    //Método para validar aplicación de un profesional a una empresa
    function validateAppliedPostulant(Request $request)
    {
        try {
            $company = Company::where('user_id', $request->user_id)->first();
            if ($company) {
                $appliedOffer = DB::table('company_professional')
                    ->where('professional_id', $request->professional_id)
                    ->where('company_id', $company->id)
                    ->where('state', 'ACTIVE')
                    ->first();
                if ($appliedOffer) {
                    return response()->json(true, 200);
                } else {
                    return response()->json(false, 200);
                }
            } else {
                return response()->json(null, 404);
            }

        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 409);
        } catch (\PDOException $e) {
            return response()->json($e, 409);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }

    //Método para separar a un profesional de la empresa
    function detachCompany(Request $request)
    {
        try {
            $data = $request->json()->all();
            $user = $data['user'];
            $company = $data['company'];
            $professional = Professional::where('user_id', $user['id'])->first();
            if ($professional) {
                $response = $professional->companies()->detach($company['company_id']);
                if ($response == 0) {
                    return response()->json($response, 404);
                } else {
                    return response()->json($response, 201);
                }

            } else {
                return response()->json(0, 404);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 409);
        } catch (\PDOException $e) {
            return response()->json($e, 409);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }

    }

}
