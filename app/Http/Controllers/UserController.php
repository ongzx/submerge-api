<?php namespace App\Http\Controllers;

use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function checkUser(Request $request)
	{
		try{

	        $statusCode = 200;
	        $msg = "User is in";
	        return Response::json(array('success' => true));
	        // echo $msg;
	        // $payload = Request::json();
	        // var_dump($payload);

	   //      $response = [
	   //        'users'  => []
	   //      ];
	 
	   //      $users = User::find($fb_id);
    //      	// $users = User::find($country);

    //      	$campaign = Campaign::all()->take(1);

	 		// return $campaign;
	   //      return $users;

	   //      $response = [ 
	   //      	"campaign" => [
		  //           'question_index' => $campaign[0]->question_index
		  //       ],
		  //       "users" => [
		  //       	'fb_id' => $users->fb_id
		  //       ]
	   //      ];

	   //      return Response::json($response, $statusCode, $msg);
	 
	    }catch (Exception $e){
	        // $statusCode = 400;
	        // $msg = "No user";
	        // $response = [
	        //   'users'  => []
	        // ];
	        // return Response::json($response, $statusCode, $msg);
	    }
	}

	public function index()
	{
		//
		try{
	        $statusCode = 200;
	        $response = [
	          'users'  => []
	        ];
	 
	        $users = User::all();
	 	
	        return $users;

	        foreach($users as $user){
	 
	            $response['users'][] = [
	                'id' => $user->id,
	                'fb_id' => $user->fb_id,
	                'fb_token' => $user->fb_token,
	                'f_name' => $user->f_name,
	                'l_name' => $user->l_name,
	                'address' => $user->address,
	                'email' => $user->email,
	                'mobile' => $user->mobile,
	                'country' => $user->country,
	                'answer_1' => $user->answer_1,
	                'answer_2' => $user->answer_2,
	                'answer_3' => $user->answer_3,
	                'answer_4' => $user->answer_4,
	                'visit' => $user->visit
	            ];
	        }

	        return Response::json($response, $statusCode);
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	        $response = [
	          'users'  => []
	        ];
	        return Response::json($response, $statusCode);
	    }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{	
		try{

			$statusCode = 200;
			$msg = "success!";

			$user = new User;
		    $user->fb_id = $request->input('fb_id');
		    $user->fb_token = $request->input('fb_token');
		 	
		    // $user->save();
		    
		 	// return Response::json($user, $statusCode);

		 	return (new Response($msg, $statusCode));

		  //   return Response::json(array(
		  //       'error' => false,
		  //       'users' => $user->toArray()),
		  //       200
		  //   );

		 	// $input = $request::all();
	 	 	
	 	 	// $input = json_decode($data);

	 	 	// User::create(array(
	    //         'fb_id' => $input['fb_id'],
     //            'fb_token' => $input['fb_token'],
     //            'f_name' => $input['f_name'],
     //            'l_name' => $input['l_name'],
     //            'address' => $input['address'],
     //            'email' => $input['email'],
     //            'mobile' => $input['mobile'],
     //            'country' => $input['country'],
     //            'answer_1' => $input['answer_1'],
     //            'answer_2' => $input['answer_2'],
     //            'answer_3' => $input['answer_3'],
     //            'answer_4' => $input['answer_3'],
     //            'visit' => '1'
	    //     ));

	        // return (new Response($input, $statusCode));
			

		}catch (Exception $e){
	        $statusCode = 400;
	        $msg = "error occurred";
	        return (new Response($msg, $statusCode));
	    }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
