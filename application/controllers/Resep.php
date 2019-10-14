<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

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
		$data = array(
			'page' => 'resep/index',
			'link' => 'resep',
			'row' => $result,
			'script' => 'resep/script'
		);
		$this->load->view('template_bootstrap4m/wrapper', $data);
	}

	public function add(){
		$data = array(
			'page' => 'resep/add',
			'link' => 'resep',
			'script' => 'resep/script'
		);
		$this->load->view('template_bootstrap4m/wrapper', $data);
	}

	public function store(){
		$config ['upload_path'] = './file_upload/';
        $config ['allowed_types'] = 'jpg|jpeg|JPG|JPEG|png|PNG';
        $config ['max_size'] = '2000';
        $config ['file_name'] = date("YmdHis");
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('gambar')){
            // $msg = array('status' => 'failed', 'text' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>'.$this->upload->display_errors().'</div>' );
            // echo json_encode($msg);
            echo '<script>alert("'.$this->upload->display_errors().'");window.location.href = "'.base_url().'resep";</script>';
            exit();
        }else{
        	$this->upload->do_upload('gambar');
        	$upload_data = $this->upload->data();
	        $lampiran = $upload_data['file_name'];
	        $data = array(
				'judul'	=> $this->input->post('judul', true),
				'kategori' => $this->input->post('kategori', true),
				'tanggal'	=> date('Y-m-d H:i:s'),
				'gambar'	=> $upload_data['file_name'],
				'deskripsi'	=> $this->input->post('keterangan', true),
			);
			$save = $this->db->insert('tb_resep', $data);
			if($save){
				echo '<script>alert("Berhasil disimpan!!");window.location.href = "'.base_url().'resep";</script>';
			}else{
				echo '<script>alert("Gagal disimpan!!");window.history.back();</script>';
			}
	        }
	}

	public function edit($id_resep){
		$row = $this->db->query("SELECT * from tb_resep where id_resep = '$id_resep'");
		$data = array(
			'page' => 'resep/edit',
			'link' => 'resep',
			'row' => $row,
			'script' => 'resep/script'
		);
		$this->load->view('template_bootstrap4m/wrapper', $data);
	}

	public function update(){
		if (!is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			$data = array(
				'judul'	=> $this->input->post('judul', true),
				'tanggal'	=> date('Y-m-d H:i:s'),
				'deskripsi'	=> $this->input->post('keterangan', true),
			);
			$save = $this->db->update('tb_resep', $data, array('id_resep' => $this->input->post('id_resep', true)));
			if($save){
				echo '<script>alert("Berhasil disimpan!!");window.location.href = "'.base_url().'resep";</script>';
			}else{
				echo '<script>alert("Gagal disimpan!!");window.history.back();</script>';
			}
		}else{
			$config ['upload_path'] = './file_upload/';
	        $config ['allowed_types'] = 'jpg|jpeg|JPG|JPEG|png|PNG';
	        $config ['max_size'] = '2000';
	        $config ['file_name'] = date("YmdHis");
	        $this->upload->initialize($config);

	        if(!$this->upload->do_upload('gambar')){
	            // $msg = array('status' => 'failed', 'text' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>'.$this->upload->display_errors().'</div>' );
	            // echo json_encode($msg);
	            echo '<script>alert("'.$this->upload->display_errors().'");window.location.href = "'.base_url().'resep";</script>';
	            exit();
	        }else{
	        	$this->upload->do_upload('gambar');
	        	$upload_data = $this->upload->data();
		        $data = array(
					'judul'	=> $this->input->post('judul', true),
					'tanggal'	=> date('Y-m-d H:i:s'),
					'gambar'	=> $upload_data['file_name'],
					'deskripsi'	=> $this->input->post('keterangan', true),
				);
				$save = $this->db->update('tb_resep', $data, array('id_resep' => $this->input->post('id_resep', true)));
				if($save){
					echo '<script>alert("Berhasil disimpan!!");window.location.href = "'.base_url().'resep";</script>';
				}else{
					echo '<script>alert("Gagal disimpan!!");window.history.back();</script>';
				}
	        }
	    }
	}

	public function remove($id_resep){
		$hapus = $this->db->delete('tb_resep', array('id_resep' => $id_resep));
		if($hapus){
			echo '<script>alert("Berhasil dihapus!!");window.history.back();</script>';
		}else{
			echo '<script>alert("Gagal dihapus!!");window.history.back();</script>';
		}
	}
}