<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get data
        $result = Todo::orderBy('time', 'ASC')->get();
        $data = [
            'status' => 'Data ordered by time ASC',
            'message' => Response::HTTP_OK,
            'data' => $result
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validating data
        $validated = Validator::make($request->all(), [
            'list' => ['required']
        ]);

        // Check validation data fail or not
        if ($validated->fails()) {
            return response()->json($validated->errors(), Response::HTTP_BAD_REQUEST);
        }
        // Try create data
        try {
            $result = Todo::create($request->all());
            $response = [
                'message' => 'Data created succesfully',
                'status' => Response::HTTP_OK,
                'data' => $result
            ];
            return response()->json($response, Response::HTTP_CREATED);
        // Catch error exception 
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed ' . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find data with id
        $result = Todo::findOrFail($id);
        // Save data in response
        $response = [
            'message' => 'Data with id ' . $id,
            'status' => Response::HTTP_OK,
            'data' => $result
        ];
        // Return response data
        return response()->json($response, Response::HTTP_OK);
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
        // Find Data
        $result = Todo::findOrFail($id);

        // Validating data
         $validated = Validator::make($request->all(), [
            'list' => ['required']
        ]);

        // Check validation data fail or not
        if ($validated->fails()) {
            return response()->json($validated->errors(), Response::HTTP_BAD_REQUEST);
        }

        // Try updated data
        try {
            $result->update($request->all());
            $response = [
                'message' => 'Data updatedd succesfully',
                'status' => Response::HTTP_OK,
                'data' => $result
            ];
            return response()->json($response, Response::HTTP_OK);

        // Catch error exception 
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed ' . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find data with id
        $result = Todo::findOrFail($id);

        // Try delete data
        try {
            $result->delete();
            $response = [
                'message' => 'Data Deleted succesfully',
                'status' => Response::HTTP_OK
            ];
            return response()->json($response, Response::HTTP_OK);

        // Catch error exception 
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed ' . $e->errorInfo
            ]);
        }
    }
}
