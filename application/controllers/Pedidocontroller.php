<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidocontroller extends CI_Controller {


	public function __construct(){
        
        parent::__construct();
 
        //cargamos la base de datos por defecto
        $this->load->database('default');
        
        //cargamos los agentes para los dispositivos
        $this->load->library('user_agent');

		//cargamos el helper url y el helper form
        $this->load->helper(array('url', 'language'));
        
        //cargamamos la libreria del lenguaje
        $this->lang->load('welcome');

        //cargamos los modelos
		$this->load->model(array('Msecurity','Mpedido'));
		
	/*	if(!@$_SESSION['user']){
            $d = array();
            $this->Msecurity->url_and_lan($d);
            redirect($d['url']."?m=Usted tiene que iniciar session !!!");
        }
		*/
    }

	/*read_one, read_all, create_one, edit_one, delete_one*/
	public function index(){
		$d = array();
			$this->Msecurity->url_and_lan($d);
			 $d["allpedido"]=$this->Mpedido->read_all();
			$this->load->view('pedido/index', $d);
		}
		/**/
	public function read_one($lan, $id){
		$d = array();
		$this->Msecurity->url_and_lan($d);
		 $d["onepedido"]=$this->Mpedido->read_one($id);
		 $onepedido = json_encode($d["onepedido"]);
		 print_r($onepedido);
	}
	/**/
	public function read_all(){
	$d = array();
		$this->Msecurity->url_and_lan($d);
		 $d["allpedido"]=$this->Mpedido->read_all();
		$this->load->view('about', $d);
	}
	/**/
	public function create_one(){
		
		$d = array();
		$this->Msecurity->url_and_lan($d);
        parse_str($this->input->post("datos"), $nuevodato);
       // $nuevodato = $this->Msecurity->sanear_array($nuevodato);
        $ok=$this->Mpedido->create_one($nuevodato);
		echo $ok;

	}
	/**/
	
	/**/
	/***/
	public function create($lan, $id){

		$d = array();
		$this->Msecurity->url_and_lan($d);

		
		
		if($id==0){
			echo "aqui esta entrando para guardar";
		$this->load->view('pedido/create', $d);
		}else{
			$d["onepedido"]=$this->Mpedido->read_one($id);
			
			$this->load->view('pedido/create', $d);
			
		}

	}
	/***/
	
	public function edit_one(){
		$d = array();
		$this->Msecurity->url_and_lan($d);
        parse_str($this->input->post("datos"), $nuevodato);
        $ok=$this->Mpedido->edit_one($nuevodato);
		echo $ok;
		
		
	}
	/**/
	public function delete_one(){
		$d = array();
		$this->Msecurity->url_and_lan($d);
        $nuevodato=$this->input->post("datos");
        $nuevodato = $this->Msecurity->sanear_array($nuevodato);
		$ok=$this->Mpedido->delete_one($nuevodato);
		$this->load->view('about', $d);
	}
	/**/
	public function error404($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error404', $d);
	
	}

	/**/

	public function error($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/

	public function error403($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/
}