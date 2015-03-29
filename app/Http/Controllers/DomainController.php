<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Domain;

#use App\Http\Requests;
#use App\Http\Controllers\Controller;

#use Illuminate\Http\Request;
#use Illuminate\Http\Response;

class DomainController extends Controller {

	/**
	 * Functions check if the logged in user owns the domain(s)
	 *
	 * Admin users can make changes to any domain
	 */

	public function __construct() {

		$this->middleware('auth');
	}

	/**
         * Display list of all domains user has access to
         *
         * @return Response
         */
	public function index() {
		$domains = User::find(Auth::user()->id)->domains;

		if ($domains->count() == 0) {
			return response('Not found', 404);
		}

		return $domains;
	}

	/**
	 * Display details for single domain
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id) {
		$domain = Domain::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->get();

		if ($domain->count() == 0) {
			return response('Not found', 404);
		}
	
		return $domain;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		if (! Input::has('domain')) {
			return response('Required fields missing from request.', 400);
		}

		$input = Input::all();
		$domain = Domain::find($id);

		$domain->user_id = Auth::user()->id;
		$domain->domain = Input::get('domain');
		$domain->save();

		return $domain;
	}

	/**
	 * Create new domain and submit to PDNS REST API
	 *
	 * @return Response
	 */
	public function store() {
		if (! Input::has('domain')) {
			return response('Required fields missing from request.', 400);
		}

		$domain = new Domain;
		$domain->user_id = Auth::user()->id;
		$domain->domain = Input::get('domain');
		$domain->save();

		return $domain;
	}

        /**
         * Delete specified domain via PDNS REST API
         *
	 * @param  int $id
         * @return Response
         */
	public function destroy($id) {
		$domain = Domain::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->delete();

		return $domain;	
	}

}
