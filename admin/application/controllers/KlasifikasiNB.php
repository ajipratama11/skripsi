<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

class KlasifikasiNB extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
        $this->db->query('SET time_zone="+7:00"');
		if(!$this->session->status){
			redirect('login');
		}
		$this->load->model('M_Admin', 'm_admin');
	}

	//Header
	private function header($data){
		//admin
		if ($this->session->status == 'admin') {
			# code...
			$data['perkelas'] = $this->m_admin->perkelas()->result();
		}
		//Guru
		if ($this->session->status == 'guru') {
			# code...
			$guru = $this->session->id;
			$data['perkelas'] = $this->m_admin->perkelas_g($guru)->result();
		}
		//$data['perkelas'] = $this->m_admin->perkelas()->result();

		$this->load->view('template/header', $data);
	}

	//Logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	//Index
	public function index(){
		//Cek Password Guru
		if($this->session->status == 'guru'){
			$where = array(
				'id_guru' => $this->session->id
			);
			$data['passwdguru'] = $this->m_admin->cek_passwd_guru($where)->row_array();
		}


		$data['title'] = 'Dashboard';

		$this->header($data);
		$this->load->view('cobaklasifikasi');
		$this->load->view('template/footer');
	}

	//Metode Perhitungan
	public function act_klasifikasi(){
        $data = array(
            'kimia' => $this->input->post('kimia'),
            'biologi' => $this->input->post('biologi'),
            'fisika' => $this->input->post('fisika'),
            'matematika' => $this->input->post('matematika'),
            'bhs_inggris' => $this->input->post('bhs_inggris'),
            'bhs_indonesia' => $this->input->post('bhs_indonesia'),
            'realistis' => $this->input->post('realistis'),
            'intelektual' => $this->input->post('intelektual'),
            'artistik' => $this->input->post('artistik'),
            'sosial' => $this->input->post('sosial'),
            'enterprise' => $this->input->post('enterprise'),
            'konvensional' => $this->input->post('konvensional'),
            'linguistik' => $this->input->post('linguistik'),
            'matematikal' => $this->input->post('matematikal'),
            'musikal' => $this->input->post('musikal'),
            'kinestik' => $this->input->post('kinestik'),
            'spartial' => $this->input->post('spartial'),
            'intrapersonal' => $this->input->post('intrapersonal'),
            'interpersonal' => $this->input->post('matematikal'),
            'natrularistik' => $this->input->post('natrularistik'),
            'eksistensial' => $this->input->post('eksistensial')
        );


         // ambil data kimia
				$kimia_Diterima  = $this->m_admin->get_parameter('kimia',$data["kimia"],'Diterima')->hasil_bagi;  
				$kimia_TidakDiterima = $this->m_admin->get_parameter('kimia',$data["kimia"],'Tidak Diterima')->hasil_bagi; 
         // ambil data biologi
				$biologi_Diterima  = $this->m_admin->get_parameter('biologi',$data["biologi"],'Diterima')->hasil_bagi;  
				$biologi_TidakDiterima = $this->m_admin->get_parameter('biologi',$data["biologi"],'Tidak Diterima')->hasil_bagi; 
         // ambil data fisika
				$fisika_Diterima  = $this->m_admin->get_parameter('fisika',$data["fisika"],'Diterima')->hasil_bagi;  
				$fisika_TidakDiterima = $this->m_admin->get_parameter('fisika',$data["fisika"],'Tidak Diterima')->hasil_bagi; 
         // ambil data matematika
				$matematika_Diterima  = $this->m_admin->get_parameter('matematika',$data["matematika"],'Diterima')->hasil_bagi;  
				$matematika_TidakDiterima = $this->m_admin->get_parameter('matematika',$data["matematika"],'Tidak Diterima')->hasil_bagi; 
         // ambil data bhs_inggris
				$bhs_inggris_Diterima  = $this->m_admin->get_parameter('bhs_inggris',$data["bhs_inggris"],'Diterima')->hasil_bagi;  
				$bhs_inggris_TidakDiterima = $this->m_admin->get_parameter('bhs_inggris',$data["bhs_inggris"],'Tidak Diterima')->hasil_bagi; 
         // ambil data bhs_indonesia
				$bhs_indonesia_Diterima  = $this->m_admin->get_parameter('bhs_indonesia',$data["bhs_indonesia"],'Diterima')->hasil_bagi;  
				$bhs_indonesia_TidakDiterima = $this->m_admin->get_parameter('bhs_indonesia',$data["bhs_indonesia"],'Tidak Diterima')->hasil_bagi; 
         // ambil data realistis
				$realistis_Diterima  = $this->m_admin->get_parameter('realistis',$data["realistis"],'Diterima')->hasil_bagi;  
				$realistis_TidakDiterima = $this->m_admin->get_parameter('realistis',$data["realistis"],'Tidak Diterima')->hasil_bagi; 
         // ambil data intelektual
				$intelektual_Diterima  = $this->m_admin->get_parameter('intelektual',$data["intelektual"],'Diterima')->hasil_bagi;  
				$intelektual_TidakDiterima = $this->m_admin->get_parameter('intelektual',$data["intelektual"],'Tidak Diterima')->hasil_bagi; 
         // ambil data artistik
				$artistik_Diterima  = $this->m_admin->get_parameter('artistik',$data["artistik"],'Diterima')->hasil_bagi;  
				$artistik_TidakDiterima = $this->m_admin->get_parameter('artistik',$data["artistik"],'Tidak Diterima')->hasil_bagi; 
         // ambil data sosial
				$sosial_Diterima  = $this->m_admin->get_parameter('sosial',$data["sosial"],'Diterima')->hasil_bagi;  
				$sosial_TidakDiterima = $this->m_admin->get_parameter('sosial',$data["sosial"],'Tidak Diterima')->hasil_bagi; 
         // ambil data enterprise
				$enterprise_Diterima  = $this->m_admin->get_parameter('enterprise',$data["enterprise"],'Diterima')->hasil_bagi;  
				$enterprise_TidakDiterima = $this->m_admin->get_parameter('enterprise',$data["enterprise"],'Tidak Diterima')->hasil_bagi; 
         // ambil data konvensional
				$konvensional_Diterima  = $this->m_admin->get_parameter('konvensional',$data["konvensional"],'Diterima')->hasil_bagi;  
				$konvensional_TidakDiterima = $this->m_admin->get_parameter('konvensional',$data["konvensional"],'Tidak Diterima')->hasil_bagi; 
         // ambil data linguistik
				$linguistik_Diterima  = $this->m_admin->get_parameter('linguistik',$data["linguistik"],'Diterima')->hasil_bagi;  
				$linguistik_TidakDiterima = $this->m_admin->get_parameter('linguistik',$data["linguistik"],'Tidak Diterima')->hasil_bagi; 
         // ambil data matematikal
				$matematikal_Diterima  = $this->m_admin->get_parameter('matematikal',$data["matematikal"],'Diterima')->hasil_bagi;  
				$matematikal_TidakDiterima = $this->m_admin->get_parameter('matematikal',$data["matematikal"],'Tidak Diterima')->hasil_bagi; 
         // ambil data musikal
				$musikal_Diterima  = $this->m_admin->get_parameter('musikal',$data["musikal"],'Diterima')->hasil_bagi;  
				$musikal_TidakDiterima = $this->m_admin->get_parameter('musikal',$data["musikal"],'Tidak Diterima')->hasil_bagi; 
         // ambil data kinestik
				$kinestik_Diterima  = $this->m_admin->get_parameter('kinestik',$data["kinestik"],'Diterima')->hasil_bagi;  
				$kinestik_TidakDiterima = $this->m_admin->get_parameter('kinestik',$data["kinestik"],'Tidak Diterima')->hasil_bagi; 
         // ambil data spartial
				$spartial_Diterima  = $this->m_admin->get_parameter('spartial',$data["spartial"],'Diterima')->hasil_bagi;  
				$spartial_TidakDiterima = $this->m_admin->get_parameter('spartial',$data["spartial"],'Tidak Diterima')->hasil_bagi; 
         // ambil data intrapersonal
				$intrapersonal_Diterima  = $this->m_admin->get_parameter('intrapersonal',$data["intrapersonal"],'Diterima')->hasil_bagi;  
				$intrapersonal_TidakDiterima = $this->m_admin->get_parameter('intrapersonal',$data["intrapersonal"],'Tidak Diterima')->hasil_bagi; 
         // ambil data interpersonal
				$interpersonal_Diterima  = $this->m_admin->get_parameter('interpersonal',$data["interpersonal"],'Diterima')->hasil_bagi;  
				$interpersonal_TidakDiterima = $this->m_admin->get_parameter('interpersonal',$data["interpersonal"],'Tidak Diterima')->hasil_bagi; 
         // ambil data natrularistik
				$natrularistik_Diterima  = $this->m_admin->get_parameter('natrularistik',$data["natrularistik"],'Diterima')->hasil_bagi;  
				$natrularistik_TidakDiterima = $this->m_admin->get_parameter('natrularistik',$data["natrularistik"],'Tidak Diterima')->hasil_bagi; 
         // ambil data eksistensial
				$eksistensial_Diterima  = $this->m_admin->get_parameter('eksistensial',$data["eksistensial"],'Diterima')->hasil_bagi;  
				$eksistensial_TidakDiterima = $this->m_admin->get_parameter('eksistensial',$data["eksistensial"],'Tidak Diterima')->hasil_bagi;
                
                $prob_Diterima = $kimia_Diterima * $biologi_Diterima * $fisika_Diterima * $matematika_Diterima * $bhs_inggris_Diterima * $bhs_indonesia_Diterima * $realistis_Diterima * $intelektual_Diterima * $artistik_Diterima * $sosial_Diterima * $enterprise_Diterima * $konvensional_Diterima * $linguistik_Diterima * $matematikal_Diterima * $musikal_Diterima * $kinestik_Diterima * $spartial_Diterima * $intrapersonal_Diterima * $interpersonal_Diterima * $natrularistik_Diterima * $eksistensial_Diterima;  
                $prob_TidakDiterima = $kimia_TidakDiterima * $biologi_TidakDiterima * $fisika_TidakDiterima * $matematika_TidakDiterima * $bhs_inggris_TidakDiterima * $bhs_indonesia_TidakDiterima * $realistis_TidakDiterima * $intelektual_TidakDiterima * $artistik_TidakDiterima * $sosial_TidakDiterima * $enterprise_TidakDiterima * $konvensional_TidakDiterima * $linguistik_TidakDiterima * $matematikal_TidakDiterima * $musikal_TidakDiterima * $kinestik_TidakDiterima * $spartial_TidakDiterima * $intrapersonal_TidakDiterima * $interpersonal_TidakDiterima * $natrularistik_TidakDiterima * $eksistensial_TidakDiterima; 
                
                $jumlahDiterima = $this->db->query("SELECT (SELECT COUNT(id_dataset) as total FROM dataset  WHERE status='Diterima') / COUNT(id_dataset) as hasil FROM dataset")->row();
                $jumlahTidakDiterima = $this->db->query("SELECT (SELECT COUNT(id_dataset) as total FROM dataset  WHERE status='Tidak Diterima') / COUNT(id_dataset) as hasil FROM dataset")->row();
                $hasil_prob_Diterima = $prob_Diterima * $jumlahDiterima->hasil;
                $hasil_prob_TidakDiterima = $prob_TidakDiterima * $jumlahTidakDiterima->hasil;

                if($hasil_prob_Diterima > $hasil_prob_TidakDiterima){
                    $prediksi = 'Diterima';
                }else{
                    $prediksi = 'Tidak Diterima';
                }

                $data['prob_diterima'] = $prob_Diterima;
                $data['prob_hasilditerima'] = $hasil_prob_Diterima;
                $data['prob_tidakditerima'] = $prob_TidakDiterima;
                $data['prob_hasiltidakditerima'] = $hasil_prob_TidakDiterima;
                $data['prediksi'] = $prediksi;
                $this->header($data);
                $this->load->view('hasilklasifikasi',$data);
                $this->load->view('template/footer');
                
    }
	// kriteria
	

	//Setting
	public function setting(){
		if ($this->session->status == 'admin') {
			$data['admin'] = $this->db->query('SELECT id_admin, nama, username FROM admin')->result();
		}
		$data['title'] = 'Pengaturan';

		$this->header($data);
		$this->load->view('setting');
		$this->load->view('template/footer');
	}
	function ganti_passwd_admin(){
		$password = $this->input->post('password');
		$passwordbaru = $this->input->post('passwordbaru');

		$id = ['id_admin' => $this->session->id];
		$cek = $this->m_admin->cek_passwd_admin($id)->row();
		if (password_verify($password, $cek->password)) {
			# code...
			$pb = password_hash($passwordbaru, PASSWORD_DEFAULT);
			$data = ['password' => $pb];
			$this->m_admin->update_passwd('admin', $data, $id);
			$this->session->set_flashdata('passwd', 'Password berhasil diubah');
			redirect('setting');
		}
		else{
			$this->session->set_flashdata('error', 'Password lama salah !');
			redirect('setting');
		}
	}
	function ganti_passwd_guru(){
		$password = $this->input->post('password');
		$passwordbaru = $this->input->post('passwordbaru');
		$where = ['id_guru' => $this->session->id];
		$cek = $this->m_admin->cek_passwd_guru($where)->row();
		if ($password == $cek->password) {
			$data = ['password' => $passwordbaru];
			$this->m_admin->update_passwd('guru', $data, $where);
			$this->session->set_flashdata('passwd', 'Password berhasil diubah');
			redirect('setting');
		}
		else{
			$this->session->set_flashdata('error', 'Password lama salah !');
			redirect('setting');
		}
	}
	function ganti_user(){
		$id = $this->session->id;
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$data = ['nama' => $nama, 'username' => $username];
		if ($this->session->status == 'admin') {
			$where = ['id_admin' => $id];
			$this->m_admin->update_passwd('admin', $data, $where);

			$this->session->unset_userdata(['nama','username']);
			$this->session->set_userdata($data);

			$this->session->set_flashdata('passwd', 'Nama/Username berhasil diubah');
			redirect('setting');
		}
		if ($this->session->status == 'guru') {
			$where = ['id_guru' => $id];
			$this->m_admin->update_passwd('guru', $data, $where);

			$this->session->unset_userdata(['nama','username']);
			$this->session->set_userdata($data);

			$this->session->set_flashdata('passwd', 'Nama/Username berhasil diubah');
			redirect('setting');
		}
	}
	function tambah_admin(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data = ['nama' => $nama, 'username' => $username, 'password' => $password];
		$this->db->insert('admin', $data);
		$this->session->set_flashdata('tambahadmin', $nama.' berhasil ditambahkan sebagai admin');
		redirect('setting');
	}
	function hapus_admin($id){
		$this->db->query('DELETE FROM admin WHERE id_admin='.$id);
		redirect('setting');
	}

	//Reset aplikasi
	function teser(){
		$this->db->query('SET FOREIGN_KEY_CHECKS = 0');
		$this->db->truncate('guru');
		$this->db->truncate('ikut_ujian');
		$this->db->truncate('jurusan');
		$this->db->truncate('kelas');
		$this->db->truncate('mapel');
		$this->db->truncate('siswa');
		$this->db->truncate('soal');
		$this->db->truncate('ujian');
		$this->db->query('SET FOREIGN_KEY_CHECKS = 1');
		delete_files('./../media/');
		redirect('');
	}

	//Error 404
	public function error(){
		$data['title'] = '404 Not Found';

		$this->header($data);
		$this->load->view('template/404');
		$this->load->view('template/footer');
	}

	function j($data){
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}
