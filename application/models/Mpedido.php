<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedido extends CI_MODEL {
	/**/
	public function __construct()
    {
        parent::__construct();

 	}

 	/*funcion que debuelve toda las razas de la tablas razas*/
 	public function read_all(){
        //$this->db->where('corp_id',"1"); 
        //$this->db->where('pro_status',"1");
 		$query = $this->db->get('sis_pedido');
 		$result = $query->result();
 		return $result;
 	}
 	/**///read_one
 	public function read_one($id){
         $this->db->where('ped_id',$id);
 		$query = $this->db->get('sis_pedido');
 		$result = $query->result();
 		return @$result[0];
 	}
     /**/
      	/**///read_one
 	public function read_one_category($id){
        $this->db->where('cate_id',$id);
        $query = $this->db->get('pedido_category');
        $result = $query->result();
        return @$result[0];
    }
    /**/
     public function read_all_name(){
        
    /*    $this->db->select("*")
        ->from('pedido')
        ->join('user', 'user.user_id = pedido.user_id', 'left');
        $query = $this->db->get();
       $result = $query->result();
       return $result; 
       */

 	}
     /**/   
     
     public function read_all_category_name(){
        
      /*  $this->db->select("*")
        ->from('pedido_category')
        ->join('user', 'user.user_id = pedido_category.user_id', 'left');
        $query = $this->db->get();
       $result = $query->result();
       return $result; /*/

     }
     public function read_all_category(){
        $this->db->where('corp_id',"1");
        $this->db->where('cate_status',"1");
 		$query = $this->db->get('pedido_category');
 		$result = $query->result();
 		return $result; 

 	}

 	public function create_one($dato){
    
    $datos = array( 'ped_descripcion' =>$dato['inp_descripcion'],
                    'ped_fecha' =>$dato['inp_fecha'],
                                       
                );

    $this->db->insert("sis_pedido",$datos);
    $cursos=$this->db->insert_id();
    return $cursos;
    }
     /**/
     public function create_one_category($dato){
    
        $datos = array( 'cate_name' =>$dato['inp_name'],
                        'cate_description' =>$dato['inp_description'],
                        'cate_status' =>'1',
                        'lan' =>$dato['lan'],
                        'registration_date' =>date('y-m-d h:i:s'),
                        'user_id' =>$_SESSION['user']->user_id,
                            );
    
        $this->db->insert("pedido_category",$datos);
        $cursos=$this->db->insert_id();
        return $cursos;
        }
         /**/
  
         /**/
public function edit_one($dato){
    $datos = array( 'ped_descripcion' =>$dato['inp_descripcion'],
    'ped_fecha' =>$dato['inp_fecha'],
                       
);
    $this->db->where('ped_id',$dato['pedid']);
    $this->db->update("sis_pedido",$datos);

    return $dato['pedid'];
    }

    /**/
    public function delete_one($id){
    
    $datos = array( 'pro_status' => "0"
                
                        );
    $this->db->where('pro_id',$id);
    $this->db->update("pedido",$datos);

    
    }
    /**/
 	

}