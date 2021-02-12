<?php

namespace App\Http\Controllers;
use App\Userlp;
use Illuminate\Http\Request;

class UserlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Userlp::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $this->validate($request, [
                'name' => 'required|max:150',
                'email' => 'required|email',
                'birthday' => 'required|date_format:Y-m-d',
                'gender' => 'required|max:1'
            ]);

            $ObjUserlp = new Userlp();
            $ObjUserlp->name = $request->name;
            $ObjUserlp->email = $request->email;
            $ObjUserlp->birthday = $request->birthday;
            $ObjUserlp->gender = $request->gender;

            if ($ObjUserlp->save())
                return response()->json([
                    'success' => true,
                    'message' => 'User created successfully'
                ], 200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, User could not be added'
                ], 500);

        } catch (Exception $ex) {
            return response()->json([
                'success'=> false,
                'message' => $ex->getCode().'|'.$ex->getMessage()
            ],500);
            
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
        try{
            $ObjUserlp = Userlp::find($id);

            if (!$ObjUserlp) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, User with id '.$id.' cannot be found'
                ], 400);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => $ObjUserlp
                ], 200);
               // return $ObjUserlp;
            }
        } catch (Exception $ex) {
            return response()->json([
                'success'=> false,
                'message' => $ex->getCode().'|'.$ex->getMessage()
            ],500);
        }
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
        try{
            $ObjUserlp = Userlp::find($id);

            if (!$ObjUserlp) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, User with id '.$id.' cannot be found'
                ], 400);
            }
            
            $this->validate($request, [
                'name' => 'required|max:150',
                'email' => 'required|email',
                'birthday' => 'required|date_format:Y-m-d',
                'gender' => 'required|max:1'
            ]);
            
            $ObjUserlp->name = $request->name;
            $ObjUserlp->email = $request->email;
            $ObjUserlp->birthday = $request->birthday;
            $ObjUserlp->gender = $request->gender;

            if ($ObjUserlp->save()) {
                return response()->json([
                    'success' => true,
                    'message' => 'User update successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, User could not be updated'
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'success'=> false,
                'message' => $ex->getCode().'|'.$ex->getMessage()
            ],500);
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
        try{
            $ObjUserlp = Userlp::find($id);

            if (!$ObjUserlp) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, User with id '.$id.' cannot be found'
                ], 400);
            }

            if ($ObjUserlp->delete()) {
                return response()->json([
                    'success' => true,
                    'message' => 'User deleted successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User could  not be deleted'
                ], 500);
            } 
        } catch (Exception $ex) {
            return response()->json([
                'success'=> false,
                'message' => $ex->getCode().'|'.$ex->getMessage()
            ],500);
        }
        
    }
}
