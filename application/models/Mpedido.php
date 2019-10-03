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
 		$query = $this->db->get('pedido');
 		$result = $query->result();
 		return $result;
 	}
 	/**///read_one
 	public function read_one($id){
         $this->db->where('pro_id',$id);
         //$this->db->where('corp_id',"$id");
        //$this->db->where('pro_status',"1");
 		$query = $this->db->get('pedido');
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
    
    $datos = array( 'pro_name' =>$dato['inp_name'],
                    'pro_code' =>$dato['inp_code'],
                    'pro_resume' =>$dato['inp_resume'],
                    'pro_description' =>$dato['inp_description'],
                    'cate_id' =>$dato['inp_cateid'],
                    'pro_price' =>$dato['inp_price'],
                    'pro_price_off' =>$dato['inp_priceoff'],
                    'pro_status' =>$dato['inp_status'],
                    'lan' =>$dato['lan'],
                    'registration_date' =>date('y-m-d h:i:s'),
                    'user_id' =>$_SESSION['user']->user_id,
                    'corp_id'=>"1"                        
                );

    $this->db->insert("pedido",$datos);
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
         public function edit_one_category($dato){

            $datos = array( 'cate_name' =>$dato['inp_name'],
                        'cate_description' =>$dato['inp_description'],
                        'cate_status' =>$dato['inp_status'],
                        'lan' =>$dato['lan'],
                        'registration_date' =>date('y-m-d h:i:s'),
                        'user_id' =>$_SESSION['user']->user_id,
                            );
            $this->db->where('cate_id',$dato['cateid']);
            $this->db->update("pedido_category",$datos);
        
            return $dato['cateid'];
            }

         /**/
public function edit_one($dato){
    $datos = array( 'pro_name' =>$dato['inp_name'],
                    'pro_code' =>$dato['inp_code'],
                    'pro_resume' =>$dato['inp_resume'],
                    'pro_description' =>$dato['inp_description'],
                    'pro_price' =>$dato['inp_price'],
                    'pro_price_off' =>$dato['inp_priceoff'],
                    'pro_status' =>$dato['inp_status'],
                    'user_id_update' =>$_SESSION['user']->user_id,
                    'registration_date_update'=>date('y-m-d h:i:s'),
                    'cate_id' =>$dato['inp_cateid']
                        );
    $this->db->where('pro_id',$dato['proid']);
    $this->db->update("pedido",$datos);

    return $dato['proid'];
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