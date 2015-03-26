<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DomainsController extends Controller {

	/**
	 * Functions check if the logged in user owns the domain(s) before proceeding
	 *
	 * Admin users can make changes to any domain
	 */


        /**
         * Display list of all domains
         *
         * @return Response
         */
        public function getList()
        {
                //
        }

	/**
	 * Display specific domain details 
	 *
	 * @return Response
	 */
	public function getDomain($id)
	{
		//
	}

	/**
	 * Create new domain in PDNSMgr domains table and submit to PDNS REST API
	 *
	 * @return Response
	 */
	public function putDomain()
	{
		//
	}

        /**
         * Update domain in PDNSMgr domains table and submit to PDNS REST API
         *
         * @return Response
         */
        public function postDomain()
        {
                //
        }

        /**
         * Delete the specified domain from PDNSMgr domains table and PDNS REST API
         *
         * @return Response
         */
        public function deleteDomain()
        {
                //
        }

        /**
         * Return domain records via PDNS REST API
         *
         * @return Response
         */
        public function getRecords()
        {
                //
        }

	/**
	 * Create domain record via PDNS REST API
	 * 
	 * @return Response
	public function putRecord()
	{
		//
	}

        /**
         * Update domain record via PDNS REST API
         *
         * @return Response
         */
	public function postRecord()
	{
		//
	}

        /**
         * Delete record from the specified domain via PDNS REST API
         *
         * @return Response
         */
	public function deleteRecord()
	{
		//
	}

}
