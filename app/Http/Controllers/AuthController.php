<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login () {
	    try {
		    $this->validate( request(), [
			    'email'    => 'required|email',
			    'password' => 'required|string'
		    ] );

		    $credentials = request(['email', 'password']);

		    if ( ! auth()->attempt($credentials)) {
			    return response()->json(['message' => 'Datos incorrectos'], 401);
		    }
		    //asignando a user usuario identificado ya tenemos el usuario
		    $user = request()->user();
		    //generar el
		    $tokenResult = $user->createToken('Personal Access Token');
		    $token = $tokenResult->token;
			$token->save();

		    return response()->json([
				'access_token' => $tokenResult->accessToken,
			    'token_type' => 'Bearer'
		    ]);

	    } catch ( ValidationException $e ) {
	    	return response()->json($e->validator->errors());
	    }
    }

    public function logout () {
    	request()->user()->token()->revoke();
    	return response()->json(['message' => 'Success logout']);
    }

    public function user () {
    	return response()->json(request()->user());
    }
}
