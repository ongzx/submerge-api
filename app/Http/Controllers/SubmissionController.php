<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Submission;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubmissionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// public function get()
	// {
	// 	$submissions = Submission::all();
 	
	//  	return $submissions;

	//     return Response::json(array(
	//         'error' => false,
	//         'submissions' => $submissions->toArray()),
	//         200
	//     );
	// }

	public function index()
	{
		//
		try{
	        $statusCode = 200;
	        $response = [
	          'submissions'  => []
	        ];
	 
	        $submissions = Submission::all();
	 	
	        return $submissions;

	        foreach($submissions as $submission){
	 
	            $response['submissions'][] = [
	                'id' => $submission->id,
	                'fb_id' => $submission->fb_id,
	                'fb_token' => $submission->fb_token,
	                'f_name' => $submission->f_name,
	                'l_name' => $submission->l_name,
	                'address' => $submission->address,
	                'email' => $submission->email,
	                'mobile' => $submission->mobile,
	                'country' => $submission->country,
	                'answer_1' => $submission->answer_1,
	                'answer_2' => $submission->answer_2,
	                'answer_3' => $submission->answer_3,
	                'answer_4' => $submission->answer_4,
	                'visit' => $submission->visit
	            ];
	        }

	        return Response::json($response, $statusCode);
	 
	    }catch (Exception $e){
	        $statusCode = 400;
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
	public function store()
	{
		//
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
