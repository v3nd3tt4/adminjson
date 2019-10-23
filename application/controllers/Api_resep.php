<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_resep extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->library('image_lib');
        $this->load->library('upload');
    }

	public function index()
	{
		// var_dump("expression");exit();
		$result = $this->db->query("SELECT * from tb_resep order by id_resep DESC");
		$data = array();
		$rquery = array();
        if($result->num_rows() == 0){
            $data = array(
                  "status" => "false",
                  "message" =>"Data Kosong!",
                  "data" => $result->result()
            );
            echo json_encode($data);
             die();
        }
        else{
            
            $i=0;
            foreach($result->result() as $row_data){
                $rquery[$i] = array(
                    'id_resep' => $row_data->id_resep,
                    'tanggal' => $row_data->tanggal,
                    'judul' => $row_data->judul,
                    'gambar' => $row_data->gambar,
                    'deskrispi' => $row_data->deskripsi,
                    
                );
                $i++;
            }
            $data = array(
                "status" => "true",
                "message" =>"Data fetched successfully!",
                "data" => $rquery
            );
            echo json_encode($data);
            die();
        }
    //     $result = $this->db->query("SELECT * from tb_resep order by id_resep DESC");
	   // $data = array(
    //         "status" => "true",
    //         "message" =>"Data fetched successfully!",
    //         "data" => $result->result()
    //     );
          
	   // echo json_encode($data);
		
	}
	
	public function resepnya(){
	    $result = $this->db->query("SELECT * from tb_resep where kategori = 'masakan' order by tanggal DESC");
	    $data = array(
            "status" => "true",
            "message" =>"Data fetched successfully!",
            "data" => $result->result()
        );
          
	    echo json_encode($data);
	}

    public function kuenya(){
        $result = $this->db->query("SELECT * from tb_resep where kategori = 'kue' order by tanggal DESC");
        $data = array(
            "status" => "true",
            "message" =>"Data fetched successfully!",
            "data" => $result->result()
        );
          
        echo json_encode($data);
    }

    public function wallpaper(){
        $result = $this->db->query("SELECT * from tb_resep where kategori = 'wallpaper' order by tanggal DESC");
        $data = array(
            "status" => "true",
            "message" =>"Data fetched successfully!",
            "data" => $result->result()
        );
          
        echo json_encode($data);
    }
}