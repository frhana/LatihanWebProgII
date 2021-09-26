<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/login/login');
	}
    public function login()
	{
		$this->load->view('admin/login/login');
	}

public function autentikasi()
{
    $username = $this->input->post('username',true);
    $password = sha1($this->input->post('password',true));

    $sql = $this->modeladmin->cekloginadmin(['username_pustakawan' => $username, 'passw_pustakawan' => $password]);
    $cekuser = $sql->row_array();

    if(!$cekuser){
        ?>
        <script type="text/javascript">
            alert("maaf username dan password tidak sesuai!");
            document.location="<?php echo base_url('admin/login');?>";
        </script>
        <?php
    }
    else{
        $data = [
            'idpustakawan' => $cekuser['id_pustakawan'],
            'enid' => sha1($cekuser['id_pustakawan'])
        ];
        $this->session->set_userdata($data);
        ?>
        <script type="text/javascript">
            alert("selamat datang <?php echo $cekuser['nama_pustakawan'];?>");
            document.location="<?php echo base_url('admin/dashboard');?>";
        </script>
        <?php
    }
 }
    public function dashboard()
    {
        $this->load->view('admin/login/dashboard');
    }
}