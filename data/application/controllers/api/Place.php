<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Place extends REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/place
	 *	- or -
	 * 		http://example.com/index.php/place/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *
	* public function index()
	*{
	*	$this->load->view('welcome_message');
	*} */

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Get All Data from this method.
	*
	* @return Response
	* http://localhost/2020/tejiendo_ciudad/data/index.php/api/place : Get => all
	* http://localhost/2020/tejiendo_ciudad/data/index.php/api/place/2 : Get => 1 record
	*/
	public function index_get($id = 0) {
		if(!empty($id)){
			$data = $this->db->get_where("place", ['id' => $id])->row_array();
		}else{
			$data = $this->db->get("place")->result();
		}

		$this->response($data, REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	*
	* @return Response
	* http://localhost/2020/tejiendo_ciudad/data/index.php/api/place : Post => obligatory
	*/
	public function index_post() {
		$input = $this->input->post();
		$this->db->insert('place',$input);

		$this->response(['Localización creada satisfactoriamente.'], REST_Controller::HTTP_OK);
	} 

	/**
	 * Get All Data from this method.
	*
	* @return Response
	*/
	public function index_put($id) {
		$input = $this->put();
		$this->db->update('place', $input, array('id'=>$id));

		$this->response(['Localización actualizada satisfactoriamente.'], REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	*
	* @return Response
	*/
	public function index_delete($id) {
		$this->db->delete('place', array('id'=>$id));

		$this->response(['Localización actualizada satisfactoriamente.'], REST_Controller::HTTP_OK);
	}
}
