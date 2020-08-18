<?php

namespace App\Http\Controllers\v0;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\ProfessionalExperience;

class ProfessionalExperienceController extends Controller
{
    //Método para obtener un profesional y todas las experiencias del profesional
    function index(Request $request)
    {
        try {
            $professional = Professional::where('id', $request->user_id)->first();
            if ($professional) {
                $professionalExperiences = ProfessionalExperience::where('professional_id', $professional->id)
                    ->where('state', 'ACTIVE')
                    ->orderby($request->field, $request->order)
                    ->paginate($request->limit);
                return response()->json([
                    'pagination' => [
                        'total' => $professionalExperiences->total(),
                        'current_page' => $professionalExperiences->currentPage(),
                        'per_page' => $professionalExperiences->perPage(),
                        'last_page' => $professionalExperiences->lastPage(),
                        'from' => $professionalExperiences->firstItem(),
                        'to' => $professionalExperiences->lastItem()
                    ], 'professionalExperiences' => $professionalExperiences], 200);
            } else {
                return response()->json([
                    'pagination' => [
                        'total' => 0,
                        'current_page' => 1,
                        'per_page' => $request->limit,
                        'last_page' => 1,
                        'from' => null,
                        'to' => null
                    ], 'professionalExperiences' => null], 404);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 400);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        } catch (ErrorException $e) {
            return response()->json($e, 500);
        }
    }
/*
    function show($id)
    {
        try {
            $professionalExperiences = ProfessionalExperience::findOrFail($id);
            return response()->json(['professionalExperiences' => $professionalExperiences], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 400);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }

    function store(Request $request)
    {
        try {
            $data = $request->json()->all();
            $dataUser = $data['user'];
            $dataProfessionalExperiences = $data['professionalExperience'];
            $professional = Professional::where('user_id', $dataUser['id'])->first();
            if ($professional) {
                $response = $professional->professionalExperiences()->create([
                    'employer' => strtoupper($dataProfessionalExperiences ['employer']),
                    'position' => strtoupper($dataProfessionalExperiences ['position']),
                    'job_description' => strtoupper($dataProfessionalExperiences ['job_description']),
                    'start_date' => $dataProfessionalExperiences ['start_date'],
                    'finish_date' => $dataProfessionalExperiences ['finish_date'],
                    'reason_leave' => strtoupper($dataProfessionalExperiences ['reason_leave']),
                    'current_work' => $dataProfessionalExperiences ['current_work'],
                ]);
                return response()->json($response, 201);
            } else {
                return response()->json(null, 404);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 400);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }

    function update(Request $request)
    {
        try {
            $data = $request->json()->all();
            $dataProfessionalExperiences = $data['professionalExperience'];
            $professionalExperience = ProfessionalExperience::findOrFail($dataProfessionalExperiences ['id'])->update([
                'employer' => strtoupper($dataProfessionalExperiences ['employer']),
                'position' => strtoupper($dataProfessionalExperiences ['position']),
                'job_description' => strtoupper($dataProfessionalExperiences ['job_description']),
                'start_date' => $dataProfessionalExperiences ['start_date'],
                'finish_date' => $dataProfessionalExperiences ['finish_date'],
                'reason_leave' => strtoupper($dataProfessionalExperiences ['reason_leave']),
                'current_work' => $dataProfessionalExperiences ['current_work'],
            ]);
            return response()->json($professionalExperience, 201);
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 400);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }

    function destroy(Request $request)
    {
        try {
            $professionalExperience = ProfessionalExperience::findOrFail($request->id)->delete();
            return response()->json($professionalExperience, 201);
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 405);
        } catch (NotFoundHttpException  $e) {
            return response()->json($e, 405);
        } catch (QueryException $e) {
            return response()->json($e, 400);
        } catch (Exception $e) {
            return response()->json($e, 500);
        } catch (Error $e) {
            return response()->json($e, 500);
        }
    }
*/
}
