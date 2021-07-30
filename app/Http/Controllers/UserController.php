<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return response()->json(['status'=>'success','data'=>$user]);
        
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
       $user = new User();
       $user->username= $request->get('username');
       $user->email= $request->get('email');
       $user->password= $request->get('password');
       $user->confirm_password= $request->get('confirm_password');
       $user->save();
    //    $token = JWTAuth::fromUser($user);
        // return response()->json(['user','','data'=>$user]);
        return response()->json(['status'=>'success','data'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        // $user = $request->json()->all();
        // try {
        //     if(! $token = JWTAuth::attempt($user)){
        //             return response()->json(['error'=>'invalid user'], 400);
        //     }
        // }catch (JWTException $e){
        //     return response()->json(['error'=>'could_not_create_token'], 500);
        // }

        // return response()->json(compact('token'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::find($id);
        // return response()->json(['status'=>'success','data'=>$user]);
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
        // $user = User::find($id);
        // $user->username= $request->get('username');
        // $user->email= $request->get('email');
        // $user->password= $request->get('password');
        // $user->confirm_password= $request->get('confirm_password');
        // $user->save();
        // return response()->json(['status'=>'success','data'=>$user]);
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
