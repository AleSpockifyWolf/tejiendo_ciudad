
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
			/*SELECT tdt_accesibilidad->'type' as "type", tdt_accesibilidad->'name' as "Estacion",
			tdt_accesibilidad->'latitude' as "latitud", tdt_accesibilidad->'longitude' as "longitud",
			tdt_accesibilidad->'services' as "Servicios"
			FROM s_busqueda.tb_transporte
			WHERE tdt_accesibilidad->>'type' like '%Metro%' AND
			tdt_accesibilidad->>'name' like 'A%' AND
			tdt_accesibilidad->>'name' like '%random_text%'; */
			$this->db->select('tdt_accesibilidad->>\'type\' as "type", tdt_accesibilidad->>\'name\' as "Estacion",
			tdt_accesibilidad->>\'latitude\' as "latitud", tdt_accesibilidad->>\'longitude\' as "longitud",
			regexp_replace(tdt_accesibilidad->>\'services\', E\'[\\n\\r]+\', \'\', \'g\' ) as "Servicios"');
			$this->db->where('tdt_accesibilidad->>\'type\' ilike \'%'.$id.'%\'', null, false);
			//$data = $this->db->get("s_busqueda.tb_transporte")->result_array();
			$data = $this->db->get("s_busqueda.tb_transporte")->result_array();
			
			//print_r($this->db->last_query()); exit();
			//$data = $this->db->get_where("place", ['id' => $id])->row_array();
		}else{
			$data = $this->db->get("s_busqueda.tb_transporte")->result();
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

		$this->db->select('tdt_accesibilidad->>\'type\' as "type", tdt_accesibilidad->>\'name\' as "Estacion",
		tdt_accesibilidad->>\'latitude\' as "latitud", tdt_accesibilidad->>\'longitude\' as "longitud",
		regexp_replace(tdt_accesibilidad->>\'services\', E\'[\\n\\r]+\', \'\', \'g\' ) as "Servicios"');

		if(isset($input['tipo']) && !empty($input['tipo'])) {
			$this->db->where('tdt_accesibilidad->>\'type\' ilike \'%'.$input['tipo'].'%\'', null, false);
		}

		if(isset($input['nombre']) && !empty($input['nombre'])){
			$this->db->where('tdt_accesibilidad->>\'name\' ilike \'%'.$input['nombre'].'%\'', null, false);
		}

		if(isset($input['latitud']) && !empty($input['latitud'])){
			$this->db->where('tdt_accesibilidad->>\'latitude\' ilike \'%'.$input['latitud'].'%\'', null, false);
		}

		if(isset($input['longitud']) && !empty($input['longitud'])){
			$this->db->where('tdt_accesibilidad->>\'longitude\' ilike \'%'.$input['longitud'].'%\'', null, false);
		}

		if(isset($input['orden']) && !empty($input['orden'])){
			$order = ($input['orden'] == 'tipo') ? 'tdt_accesibilidad->>\'type\'' : 'tdt_accesibilidad->>\'name\'';
			$this->db->order_by($order);
		}
		
		$data = $this->db->get("s_busqueda.tb_transporte")->result_array();
		foreach ($data as $key => $value) {
			$data[$key]['Servicios'] = json_decode($value['Servicios']);
		}

		$this->response($data, REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	*
	* @return Response
	* http://localhost/2020/tejiendo_ciudad/data/index.php/api/place : Post => obligatory
	*/
	/*public function index_post() {
		$input = $this->input->post();
		$this->db->insert('s_busqueda.tb_transporte',$input);

		$this->response(['Localización creada satisfactoriamente.'], REST_Controller::HTTP_OK);
	}*/

	/**
	 * Get All Data from this method.
	*
	* @return Response
	*/
	public function index_put($id) {
		$input = $this->put();
		$this->db->update('s_busqueda.tb_transporte', $input, array('id'=>$id));

		$this->response(['Localización actualizada satisfactoriamente.'], REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	*
	* @return Response
	*/
	public function index_delete($id) {
		$this->db->delete('s_busqueda.tb_transporte', array('id'=>$id));

		$this->response(['Localización actualizada satisfactoriamente.'], REST_Controller::HTTP_OK);
	}
}
