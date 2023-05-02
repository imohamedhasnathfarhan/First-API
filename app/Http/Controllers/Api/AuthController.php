<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Hash;
// use App\User;
use App\Models\User;
// use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Laravel\Passport\HasApiTokens;


class AuthController extends Controller
{
      /**
        * @OA\Post(
        * path="/api/register",
        * operationId="Register",
        * tags={"Register"},
        * summary="User Register",
        * description="User Register here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"name","email", "password", "password_confirmation"},
        *               @OA\Property(property="name", type="text"),
        *               @OA\Property(property="email", type="text"),
        *               @OA\Property(property="password", type="password"),
        *               @OA\Property(property="password_confirmation", type="password")
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        */
      public function register(Request $request)
      {
          $validated = $request->validate([
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required|confirmed',
              'mobile_number' => 'required',
          ]);
          $data = $request->all();
          $data['password'] = Hash::make($data['password']);
          $user = User::create($data);
          $success['token'] =  $user->createToken('authToken')->accessToken;
          $success['name'] =  $user->name;
          return response()->json(['success' => $success]);
      }
      /**
        * @OA\Post(
        * path="/api/login",
        * operationId="authLogin",
        * tags={"Login"},
        * summary="User Login",
        * description="Login User Here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"email", "password"},
        *               @OA\Property(property="email", type="email"),
        *               @OA\Property(property="password", type="password")
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Login Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Login Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        */
      // public function login(Request $request)
      // {
      //     $validator = $request->validate([
      //         'email' => 'email|required',
      //         'password' => 'required'
      //     ]);
      //     if (!auth()->attempt($validator)) {
      //         return response()->json(['error' => 'Unauthorised'], 401);
      //     } else {
      //         $success['token'] = auth()->user()->createToken('authToken')->accessToken;
      //         $success['user'] = auth()->user();
      //         return response()->json(['success' => $success])->setStatusCode(200);
      //     }
      // }
      
      public function login(Request $request)
      {
        $user = User::find(1);

        
        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
      }


}