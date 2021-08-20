<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

class KlasifikasiNB extends CI_Controller
{

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
		if (!$this->session->status) {
			redirect('login');
		}
		$this->load->model('M_Admin', 'm_admin');
	}

	//Header
	private function header($data)
	{
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
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	//Index
	public function index()
	{
		//Cek Password Guru
		if ($this->session->status == 'guru') {
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

	public function konvert_nilai($id)
	{
		$data['datanilai'] = $this->db->get_where('nilai', ['id_nilai' => $id])->row();
		
		$data['title'] = 'Klasifikasi Diterima atau Tidak dengan Naive Bayes';
		$this->header($data);
		$this->load->view('cobaklasifikasi');
		$this->load->view('template/footer');
	}

	//Metode Perhitungan
	public function act_klasifikasi()
	{
		$data = array(
			'id_nilai' => $this->input->post('id_nilai'),
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
		$kimia_Diterima  = $this->m_admin->get_parameter('kimia', $data["kimia"], 'Diterima')->hasil_bagi;
		$kimia_TidakDiterima = $this->m_admin->get_parameter('kimia', $data["kimia"], 'Tidak Diterima')->hasil_bagi;
		// ambil data biologi
		$biologi_Diterima  = $this->m_admin->get_parameter('biologi', $data["biologi"], 'Diterima')->hasil_bagi;
		$biologi_TidakDiterima = $this->m_admin->get_parameter('biologi', $data["biologi"], 'Tidak Diterima')->hasil_bagi;
		// ambil data fisika
		$fisika_Diterima  = $this->m_admin->get_parameter('fisika', $data["fisika"], 'Diterima')->hasil_bagi;
		$fisika_TidakDiterima = $this->m_admin->get_parameter('fisika', $data["fisika"], 'Tidak Diterima')->hasil_bagi;
		// ambil data matematika
		$matematika_Diterima  = $this->m_admin->get_parameter('matematika', $data["matematika"], 'Diterima')->hasil_bagi;
		$matematika_TidakDiterima = $this->m_admin->get_parameter('matematika', $data["matematika"], 'Tidak Diterima')->hasil_bagi;
		// ambil data bhs_inggris
		$bhs_inggris_Diterima  = $this->m_admin->get_parameter('bhs_inggris', $data["bhs_inggris"], 'Diterima')->hasil_bagi;
		$bhs_inggris_TidakDiterima = $this->m_admin->get_parameter('bhs_inggris', $data["bhs_inggris"], 'Tidak Diterima')->hasil_bagi;
		// ambil data bhs_indonesia
		$bhs_indonesia_Diterima  = $this->m_admin->get_parameter('bhs_indonesia', $data["bhs_indonesia"], 'Diterima')->hasil_bagi;
		$bhs_indonesia_TidakDiterima = $this->m_admin->get_parameter('bhs_indonesia', $data["bhs_indonesia"], 'Tidak Diterima')->hasil_bagi;
		// ambil data realistis
		$realistis_Diterima  = $this->m_admin->get_parameter('realistis', $data["realistis"], 'Diterima')->hasil_bagi;
		$realistis_TidakDiterima = $this->m_admin->get_parameter('realistis', $data["realistis"], 'Tidak Diterima')->hasil_bagi;
		// ambil data intelektual
		$intelektual_Diterima  = $this->m_admin->get_parameter('intelektual', $data["intelektual"], 'Diterima')->hasil_bagi;
		$intelektual_TidakDiterima = $this->m_admin->get_parameter('intelektual', $data["intelektual"], 'Tidak Diterima')->hasil_bagi;
		// ambil data artistik
		$artistik_Diterima  = $this->m_admin->get_parameter('artistik', $data["artistik"], 'Diterima')->hasil_bagi;
		$artistik_TidakDiterima = $this->m_admin->get_parameter('artistik', $data["artistik"], 'Tidak Diterima')->hasil_bagi;
		// ambil data sosial
		$sosial_Diterima  = $this->m_admin->get_parameter('sosial', $data["sosial"], 'Diterima')->hasil_bagi;
		$sosial_TidakDiterima = $this->m_admin->get_parameter('sosial', $data["sosial"], 'Tidak Diterima')->hasil_bagi;
		// ambil data enterprise
		$enterprise_Diterima  = $this->m_admin->get_parameter('enterprise', $data["enterprise"], 'Diterima')->hasil_bagi;
		$enterprise_TidakDiterima = $this->m_admin->get_parameter('enterprise', $data["enterprise"], 'Tidak Diterima')->hasil_bagi;
		// ambil data konvensional
		$konvensional_Diterima  = $this->m_admin->get_parameter('konvensional', $data["konvensional"], 'Diterima')->hasil_bagi;
		$konvensional_TidakDiterima = $this->m_admin->get_parameter('konvensional', $data["konvensional"], 'Tidak Diterima')->hasil_bagi;
		// ambil data linguistik
		$linguistik_Diterima  = $this->m_admin->get_parameter('linguistik', $data["linguistik"], 'Diterima')->hasil_bagi;
		$linguistik_TidakDiterima = $this->m_admin->get_parameter('linguistik', $data["linguistik"], 'Tidak Diterima')->hasil_bagi;
		// ambil data matematikal
		$matematikal_Diterima  = $this->m_admin->get_parameter('matematikal', $data["matematikal"], 'Diterima')->hasil_bagi;
		$matematikal_TidakDiterima = $this->m_admin->get_parameter('matematikal', $data["matematikal"], 'Tidak Diterima')->hasil_bagi;
		// ambil data musikal
		$musikal_Diterima  = $this->m_admin->get_parameter('musikal', $data["musikal"], 'Diterima')->hasil_bagi;
		$musikal_TidakDiterima = $this->m_admin->get_parameter('musikal', $data["musikal"], 'Tidak Diterima')->hasil_bagi;
		// ambil data kinestik
		$kinestik_Diterima  = $this->m_admin->get_parameter('kinestik', $data["kinestik"], 'Diterima')->hasil_bagi;
		$kinestik_TidakDiterima = $this->m_admin->get_parameter('kinestik', $data["kinestik"], 'Tidak Diterima')->hasil_bagi;
		// ambil data spartial
		$spartial_Diterima  = $this->m_admin->get_parameter('spartial', $data["spartial"], 'Diterima')->hasil_bagi;
		$spartial_TidakDiterima = $this->m_admin->get_parameter('spartial', $data["spartial"], 'Tidak Diterima')->hasil_bagi;
		// ambil data intrapersonal
		$intrapersonal_Diterima  = $this->m_admin->get_parameter('intrapersonal', $data["intrapersonal"], 'Diterima')->hasil_bagi;
		$intrapersonal_TidakDiterima = $this->m_admin->get_parameter('intrapersonal', $data["intrapersonal"], 'Tidak Diterima')->hasil_bagi;
		// ambil data interpersonal
		$interpersonal_Diterima  = $this->m_admin->get_parameter('interpersonal', $data["interpersonal"], 'Diterima')->hasil_bagi;
		$interpersonal_TidakDiterima = $this->m_admin->get_parameter('interpersonal', $data["interpersonal"], 'Tidak Diterima')->hasil_bagi;
		// ambil data natrularistik
		$natrularistik_Diterima  = $this->m_admin->get_parameter('natrularistik', $data["natrularistik"], 'Diterima')->hasil_bagi;
		$natrularistik_TidakDiterima = $this->m_admin->get_parameter('natrularistik', $data["natrularistik"], 'Tidak Diterima')->hasil_bagi;
		// ambil data eksistensial
		$eksistensial_Diterima  = $this->m_admin->get_parameter('eksistensial', $data["eksistensial"], 'Diterima')->hasil_bagi;
		$eksistensial_TidakDiterima = $this->m_admin->get_parameter('eksistensial', $data["eksistensial"], 'Tidak Diterima')->hasil_bagi;

		$prob_Diterima = $kimia_Diterima * $biologi_Diterima * $fisika_Diterima * $matematika_Diterima * $bhs_inggris_Diterima * $bhs_indonesia_Diterima * $realistis_Diterima * $intelektual_Diterima * $artistik_Diterima * $sosial_Diterima * $enterprise_Diterima * $konvensional_Diterima * $linguistik_Diterima * $matematikal_Diterima * $musikal_Diterima * $kinestik_Diterima * $spartial_Diterima * $intrapersonal_Diterima * $interpersonal_Diterima * $natrularistik_Diterima * $eksistensial_Diterima;
		$prob_TidakDiterima = $kimia_TidakDiterima * $biologi_TidakDiterima * $fisika_TidakDiterima * $matematika_TidakDiterima * $bhs_inggris_TidakDiterima * $bhs_indonesia_TidakDiterima * $realistis_TidakDiterima * $intelektual_TidakDiterima * $artistik_TidakDiterima * $sosial_TidakDiterima * $enterprise_TidakDiterima * $konvensional_TidakDiterima * $linguistik_TidakDiterima * $matematikal_TidakDiterima * $musikal_TidakDiterima * $kinestik_TidakDiterima * $spartial_TidakDiterima * $intrapersonal_TidakDiterima * $interpersonal_TidakDiterima * $natrularistik_TidakDiterima * $eksistensial_TidakDiterima;

		$jumlahDiterima = $this->db->query("SELECT (SELECT COUNT(id_dataset) as total FROM dataset  WHERE status='Diterima') / COUNT(id_dataset) as hasil FROM dataset")->row();
		$jumlahTidakDiterima = $this->db->query("SELECT (SELECT COUNT(id_dataset) as total FROM dataset  WHERE status='Tidak Diterima') / COUNT(id_dataset) as hasil FROM dataset")->row();
		$hasil_prob_Diterima = $prob_Diterima * $jumlahDiterima->hasil;
		$hasil_prob_TidakDiterima = $prob_TidakDiterima * $jumlahTidakDiterima->hasil;

		if ($hasil_prob_Diterima > $hasil_prob_TidakDiterima) {
			$prediksi = 'Diterima';
		} else {
			$prediksi = 'Tidak Diterima';
		}

		$data['id_nilai'] = $this->input->post('id_nilai');
		$data['prob_diterima'] = $prob_Diterima;
		$data['prob_hasilditerima'] = $hasil_prob_Diterima;
		$data['prob_tidakditerima'] = $prob_TidakDiterima;
		$data['prob_hasiltidakditerima'] = $hasil_prob_TidakDiterima;
		$data['prediksi'] = $prediksi;
		$this->header($data);
		$this->load->view('hasilklasifikasi', $data);
		$this->load->view('template/footer');
	}
	// kriteria


	//Setting
	public function setting()
	{
		if ($this->session->status == 'admin') {
			$data['admin'] = $this->db->query('SELECT id_admin, nama, username FROM admin')->result();
		}
		$data['title'] = 'Pengaturan';

		$this->header($data);
		$this->load->view('setting');
		$this->load->view('template/footer');
	}
	function ganti_passwd_admin()
	{
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
		} else {
			$this->session->set_flashdata('error', 'Password lama salah !');
			redirect('setting');
		}
	}
	function ganti_passwd_guru()
	{
		$password = $this->input->post('password');
		$passwordbaru = $this->input->post('passwordbaru');
		$where = ['id_guru' => $this->session->id];
		$cek = $this->m_admin->cek_passwd_guru($where)->row();
		if ($password == $cek->password) {
			$data = ['password' => $passwordbaru];
			$this->m_admin->update_passwd('guru', $data, $where);
			$this->session->set_flashdata('passwd', 'Password berhasil diubah');
			redirect('setting');
		} else {
			$this->session->set_flashdata('error', 'Password lama salah !');
			redirect('setting');
		}
	}
	function ganti_user()
	{
		$id = $this->session->id;
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$data = ['nama' => $nama, 'username' => $username];
		if ($this->session->status == 'admin') {
			$where = ['id_admin' => $id];
			$this->m_admin->update_passwd('admin', $data, $where);

			$this->session->unset_userdata(['nama', 'username']);
			$this->session->set_userdata($data);

			$this->session->set_flashdata('passwd', 'Nama/Username berhasil diubah');
			redirect('setting');
		}
		if ($this->session->status == 'guru') {
			$where = ['id_guru' => $id];
			$this->m_admin->update_passwd('guru', $data, $where);

			$this->session->unset_userdata(['nama', 'username']);
			$this->session->set_userdata($data);

			$this->session->set_flashdata('passwd', 'Nama/Username berhasil diubah');
			redirect('setting');
		}
	}
	function tambah_admin()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data = ['nama' => $nama, 'username' => $username, 'password' => $password];
		$this->db->insert('admin', $data);
		$this->session->set_flashdata('tambahadmin', $nama . ' berhasil ditambahkan sebagai admin');
		redirect('setting');
	}
	function hapus_admin($id)
	{
		$this->db->query('DELETE FROM admin WHERE id_admin=' . $id);
		redirect('setting');
	}

	//Reset aplikasi
	function teser()
	{
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
	public function error()
	{
		$data['title'] = '404 Not Found';

		$this->header($data);
		$this->load->view('template/404');
		$this->load->view('template/footer');
	}

	function j($data)
	{
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function matrikss()
	{
		$data['title'] = 'Hitung Matrix';
		$data_matriks = array(
			'id_nilai' => $this->input->post('id_nilai'),
			'kimia_a' => $this->input->post('kimia_a'),
			'kimia_b' => $this->input->post('kimia_b'),
			'kimia_c' => $this->input->post('kimia_c'),
			'kimia_d' => $this->input->post('kimia_d'),
			'kimia_e' => $this->input->post('kimia_e'),
			'kimia_f' => $this->input->post('kimia_f'),
			'kimia_g' => $this->input->post('kimia_g'),
			'kimia_h' => $this->input->post('kimia_h'),
			'kimia_i' => $this->input->post('kimia_i'),
			'kimia_j' => $this->input->post('kimia_j'),
			'kimia_k' => $this->input->post('kimia_k'),
			'kimia_l' => $this->input->post('kimia_l'),
			'kimia_m' => $this->input->post('kimia_m'),
			'kimia_n' => $this->input->post('kimia_n'),
			'kimia_o' => $this->input->post('kimia_o'),
			'kimia_p' => $this->input->post('kimia_p'),
			'kimia_q' => $this->input->post('kimia_q'),
			'kimia_r' => $this->input->post('kimia_r'),
			'kimia_s' => $this->input->post('kimia_s'),
			'kimia_t' => $this->input->post('kimia_t'),
			'kimia_u' => $this->input->post('kimia_u'),
			'biologi_a' => $this->input->post('biologi_a'),
			'biologi_b' => $this->input->post('biologi_b'),
			'biologi_c' => $this->input->post('biologi_c'),
			'biologi_d' => $this->input->post('biologi_d'),
			'biologi_e' => $this->input->post('biologi_e'),
			'biologi_f' => $this->input->post('biologi_f'),
			'biologi_g' => $this->input->post('biologi_g'),
			'biologi_h' => $this->input->post('biologi_h'),
			'biologi_i' => $this->input->post('biologi_i'),
			'biologi_j' => $this->input->post('biologi_j'),
			'biologi_k' => $this->input->post('biologi_k'),
			'biologi_l' => $this->input->post('biologi_l'),
			'biologi_m' => $this->input->post('biologi_m'),
			'biologi_n' => $this->input->post('biologi_n'),
			'biologi_o' => $this->input->post('biologi_o'),
			'biologi_p' => $this->input->post('biologi_p'),
			'biologi_q' => $this->input->post('biologi_q'),
			'biologi_r' => $this->input->post('biologi_r'),
			'biologi_s' => $this->input->post('biologi_s'),
			'biologi_t' => $this->input->post('biologi_t'),
			'biologi_u' => $this->input->post('biologi_u'),
			'fisika_a' => $this->input->post('fisika_a'),
			'fisika_b' => $this->input->post('fisika_b'),
			'fisika_c' => $this->input->post('fisika_c'),
			'fisika_d' => $this->input->post('fisika_d'),
			'fisika_e' => $this->input->post('fisika_e'),
			'fisika_f' => $this->input->post('fisika_f'),
			'fisika_g' => $this->input->post('fisika_g'),
			'fisika_h' => $this->input->post('fisika_h'),
			'fisika_i' => $this->input->post('fisika_i'),
			'fisika_j' => $this->input->post('fisika_j'),
			'fisika_k' => $this->input->post('fisika_k'),
			'fisika_l' => $this->input->post('fisika_l'),
			'fisika_m' => $this->input->post('fisika_m'),
			'fisika_n' => $this->input->post('fisika_n'),
			'fisika_o' => $this->input->post('fisika_o'),
			'fisika_p' => $this->input->post('fisika_p'),
			'fisika_q' => $this->input->post('fisika_q'),
			'fisika_r' => $this->input->post('fisika_r'),
			'fisika_s' => $this->input->post('fisika_s'),
			'fisika_t' => $this->input->post('fisika_t'),
			'fisika_u' => $this->input->post('fisika_u'),
			'matematika_a' => $this->input->post('matematika_a'),
			'matematika_b' => $this->input->post('matematika_b'),
			'matematika_c' => $this->input->post('matematika_c'),
			'matematika_d' => $this->input->post('matematika_d'),
			'matematika_e' => $this->input->post('matematika_e'),
			'matematika_f' => $this->input->post('matematika_f'),
			'matematika_g' => $this->input->post('matematika_g'),
			'matematika_h' => $this->input->post('matematika_h'),
			'matematika_i' => $this->input->post('matematika_i'),
			'matematika_j' => $this->input->post('matematika_j'),
			'matematika_k' => $this->input->post('matematika_k'),
			'matematika_l' => $this->input->post('matematika_l'),
			'matematika_m' => $this->input->post('matematika_m'),
			'matematika_n' => $this->input->post('matematika_n'),
			'matematika_o' => $this->input->post('matematika_o'),
			'matematika_p' => $this->input->post('matematika_p'),
			'matematika_q' => $this->input->post('matematika_q'),
			'matematika_r' => $this->input->post('matematika_r'),
			'matematika_s' => $this->input->post('matematika_s'),
			'matematika_t' => $this->input->post('matematika_t'),
			'matematika_u' => $this->input->post('matematika_u'),
			'inggris_a' => $this->input->post('inggris_a'),
			'inggris_b' => $this->input->post('inggris_b'),
			'inggris_c' => $this->input->post('inggris_c'),
			'inggris_d' => $this->input->post('inggris_d'),
			'inggris_e' => $this->input->post('inggris_e'),
			'inggris_f' => $this->input->post('inggris_f'),
			'inggris_g' => $this->input->post('inggris_g'),
			'inggris_h' => $this->input->post('inggris_h'),
			'inggris_i' => $this->input->post('inggris_i'),
			'inggris_j' => $this->input->post('inggris_j'),
			'inggris_k' => $this->input->post('inggris_k'),
			'inggris_l' => $this->input->post('inggris_l'),
			'inggris_m' => $this->input->post('inggris_m'),
			'inggris_n' => $this->input->post('inggris_n'),
			'inggris_o' => $this->input->post('inggris_o'),
			'inggris_p' => $this->input->post('inggris_p'),
			'inggris_q' => $this->input->post('inggris_q'),
			'inggris_r' => $this->input->post('inggris_r'),
			'inggris_s' => $this->input->post('inggris_s'),
			'inggris_t' => $this->input->post('inggris_t'),
			'inggris_u' => $this->input->post('inggris_u'),
			'indo_a' => $this->input->post('indo_a'),
			'indo_b' => $this->input->post('indo_b'),
			'indo_c' => $this->input->post('indo_c'),
			'indo_d' => $this->input->post('indo_d'),
			'indo_e' => $this->input->post('indo_e'),
			'indo_f' => $this->input->post('indo_f'),
			'indo_g' => $this->input->post('indo_g'),
			'indo_h' => $this->input->post('indo_h'),
			'indo_i' => $this->input->post('indo_i'),
			'indo_j' => $this->input->post('indo_j'),
			'indo_k' => $this->input->post('indo_k'),
			'indo_l' => $this->input->post('indo_l'),
			'indo_m' => $this->input->post('indo_m'),
			'indo_n' => $this->input->post('indo_n'),
			'indo_o' => $this->input->post('indo_o'),
			'indo_p' => $this->input->post('indo_p'),
			'indo_q' => $this->input->post('indo_q'),
			'indo_r' => $this->input->post('indo_r'),
			'indo_s' => $this->input->post('indo_s'),
			'indo_t' => $this->input->post('indo_t'),
			'indo_u' => $this->input->post('indo_u'),
			'realistis_a' => $this->input->post('realistis_a'),
			'realistis_b' => $this->input->post('realistis_b'),
			'realistis_c' => $this->input->post('realistis_c'),
			'realistis_d' => $this->input->post('realistis_d'),
			'realistis_e' => $this->input->post('realistis_e'),
			'realistis_f' => $this->input->post('realistis_f'),
			'realistis_g' => $this->input->post('realistis_g'),
			'realistis_h' => $this->input->post('realistis_h'),
			'realistis_i' => $this->input->post('realistis_i'),
			'realistis_j' => $this->input->post('realistis_j'),
			'realistis_k' => $this->input->post('realistis_k'),
			'realistis_l' => $this->input->post('realistis_l'),
			'realistis_m' => $this->input->post('realistis_m'),
			'realistis_n' => $this->input->post('realistis_n'),
			'realistis_o' => $this->input->post('realistis_o'),
			'realistis_p' => $this->input->post('realistis_p'),
			'realistis_q' => $this->input->post('realistis_q'),
			'realistis_r' => $this->input->post('realistis_r'),
			'realistis_s' => $this->input->post('realistis_s'),
			'realistis_t' => $this->input->post('realistis_t'),
			'realistis_u' => $this->input->post('realistis_u'),
			'intelektual_a' => $this->input->post('intelektual_a'),
			'intelektual_b' => $this->input->post('intelektual_b'),
			'intelektual_c' => $this->input->post('intelektual_c'),
			'intelektual_d' => $this->input->post('intelektual_d'),
			'intelektual_e' => $this->input->post('intelektual_e'),
			'intelektual_f' => $this->input->post('intelektual_f'),
			'intelektual_g' => $this->input->post('intelektual_g'),
			'intelektual_h' => $this->input->post('intelektual_h'),
			'intelektual_i' => $this->input->post('intelektual_i'),
			'intelektual_j' => $this->input->post('intelektual_j'),
			'intelektual_k' => $this->input->post('intelektual_k'),
			'intelektual_l' => $this->input->post('intelektual_l'),
			'intelektual_m' => $this->input->post('intelektual_m'),
			'intelektual_n' => $this->input->post('intelektual_n'),
			'intelektual_o' => $this->input->post('intelektual_o'),
			'intelektual_p' => $this->input->post('intelektual_p'),
			'intelektual_q' => $this->input->post('intelektual_q'),
			'intelektual_r' => $this->input->post('intelektual_r'),
			'intelektual_s' => $this->input->post('intelektual_s'),
			'intelektual_t' => $this->input->post('intelektual_t'),
			'intelektual_u' => $this->input->post('intelektual_u'),
			'artistik_a' => $this->input->post('artistik_a'),
			'artistik_b' => $this->input->post('artistik_b'),
			'artistik_c' => $this->input->post('artistik_c'),
			'artistik_d' => $this->input->post('artistik_d'),
			'artistik_e' => $this->input->post('artistik_e'),
			'artistik_f' => $this->input->post('artistik_f'),
			'artistik_g' => $this->input->post('artistik_g'),
			'artistik_h' => $this->input->post('artistik_h'),
			'artistik_i' => $this->input->post('artistik_i'),
			'artistik_j' => $this->input->post('artistik_j'),
			'artistik_k' => $this->input->post('artistik_k'),
			'artistik_l' => $this->input->post('artistik_l'),
			'artistik_m' => $this->input->post('artistik_m'),
			'artistik_n' => $this->input->post('artistik_n'),
			'artistik_o' => $this->input->post('artistik_o'),
			'artistik_p' => $this->input->post('artistik_p'),
			'artistik_q' => $this->input->post('artistik_q'),
			'artistik_r' => $this->input->post('artistik_r'),
			'artistik_s' => $this->input->post('artistik_s'),
			'artistik_t' => $this->input->post('artistik_t'),
			'artistik_u' => $this->input->post('artistik_u'),
			'sosial_a' => $this->input->post('sosial_a'),
			'sosial_b' => $this->input->post('sosial_b'),
			'sosial_c' => $this->input->post('sosial_c'),
			'sosial_d' => $this->input->post('sosial_d'),
			'sosial_e' => $this->input->post('sosial_e'),
			'sosial_f' => $this->input->post('sosial_f'),
			'sosial_g' => $this->input->post('sosial_g'),
			'sosial_h' => $this->input->post('sosial_h'),
			'sosial_i' => $this->input->post('sosial_i'),
			'sosial_j' => $this->input->post('sosial_j'),
			'sosial_k' => $this->input->post('sosial_k'),
			'sosial_l' => $this->input->post('sosial_l'),
			'sosial_m' => $this->input->post('sosial_m'),
			'sosial_n' => $this->input->post('sosial_n'),
			'sosial_o' => $this->input->post('sosial_o'),
			'sosial_p' => $this->input->post('sosial_p'),
			'sosial_q' => $this->input->post('sosial_q'),
			'sosial_r' => $this->input->post('sosial_r'),
			'sosial_s' => $this->input->post('sosial_s'),
			'sosial_t' => $this->input->post('sosial_t'),
			'sosial_u' => $this->input->post('sosial_u'),
			'enterprise_a' => $this->input->post('enterprise_a'),
			'enterprise_b' => $this->input->post('enterprise_b'),
			'enterprise_c' => $this->input->post('enterprise_c'),
			'enterprise_d' => $this->input->post('enterprise_d'),
			'enterprise_e' => $this->input->post('enterprise_e'),
			'enterprise_f' => $this->input->post('enterprise_f'),
			'enterprise_g' => $this->input->post('enterprise_g'),
			'enterprise_h' => $this->input->post('enterprise_h'),
			'enterprise_i' => $this->input->post('enterprise_i'),
			'enterprise_j' => $this->input->post('enterprise_j'),
			'enterprise_k' => $this->input->post('enterprise_k'),
			'enterprise_l' => $this->input->post('enterprise_l'),
			'enterprise_m' => $this->input->post('enterprise_m'),
			'enterprise_n' => $this->input->post('enterprise_n'),
			'enterprise_o' => $this->input->post('enterprise_o'),
			'enterprise_p' => $this->input->post('enterprise_p'),
			'enterprise_q' => $this->input->post('enterprise_q'),
			'enterprise_r' => $this->input->post('enterprise_r'),
			'enterprise_s' => $this->input->post('enterprise_s'),
			'enterprise_t' => $this->input->post('enterprise_t'),
			'enterprise_u' => $this->input->post('enterprise_u'),
			'konvensional_a' => $this->input->post('konvensional_a'),
			'konvensional_b' => $this->input->post('konvensional_b'),
			'konvensional_c' => $this->input->post('konvensional_c'),
			'konvensional_d' => $this->input->post('konvensional_d'),
			'konvensional_e' => $this->input->post('konvensional_e'),
			'konvensional_f' => $this->input->post('konvensional_f'),
			'konvensional_g' => $this->input->post('konvensional_g'),
			'konvensional_h' => $this->input->post('konvensional_h'),
			'konvensional_i' => $this->input->post('konvensional_i'),
			'konvensional_j' => $this->input->post('konvensional_j'),
			'konvensional_k' => $this->input->post('konvensional_k'),
			'konvensional_l' => $this->input->post('konvensional_l'),
			'konvensional_m' => $this->input->post('konvensional_m'),
			'konvensional_n' => $this->input->post('konvensional_n'),
			'konvensional_o' => $this->input->post('konvensional_o'),
			'konvensional_p' => $this->input->post('konvensional_p'),
			'konvensional_q' => $this->input->post('konvensional_q'),
			'konvensional_r' => $this->input->post('konvensional_r'),
			'konvensional_s' => $this->input->post('konvensional_s'),
			'konvensional_t' => $this->input->post('konvensional_t'),
			'konvensional_u' => $this->input->post('konvensional_u'),
			'linguistik_a' => $this->input->post('linguistik_a'),
			'linguistik_b' => $this->input->post('linguistik_b'),
			'linguistik_c' => $this->input->post('linguistik_c'),
			'linguistik_d' => $this->input->post('linguistik_d'),
			'linguistik_e' => $this->input->post('linguistik_e'),
			'linguistik_f' => $this->input->post('linguistik_f'),
			'linguistik_g' => $this->input->post('linguistik_g'),
			'linguistik_h' => $this->input->post('linguistik_h'),
			'linguistik_i' => $this->input->post('linguistik_i'),
			'linguistik_j' => $this->input->post('linguistik_j'),
			'linguistik_k' => $this->input->post('linguistik_k'),
			'linguistik_l' => $this->input->post('linguistik_l'),
			'linguistik_m' => $this->input->post('linguistik_m'),
			'linguistik_n' => $this->input->post('linguistik_n'),
			'linguistik_o' => $this->input->post('linguistik_o'),
			'linguistik_p' => $this->input->post('linguistik_p'),
			'linguistik_q' => $this->input->post('linguistik_q'),
			'linguistik_r' => $this->input->post('linguistik_r'),
			'linguistik_s' => $this->input->post('linguistik_s'),
			'linguistik_t' => $this->input->post('linguistik_t'),
			'linguistik_u' => $this->input->post('linguistik_u'),
			'matematikal_a' => $this->input->post('matematikal_a'),
			'matematikal_b' => $this->input->post('matematikal_b'),
			'matematikal_c' => $this->input->post('matematikal_c'),
			'matematikal_d' => $this->input->post('matematikal_d'),
			'matematikal_e' => $this->input->post('matematikal_e'),
			'matematikal_f' => $this->input->post('matematikal_f'),
			'matematikal_g' => $this->input->post('matematikal_g'),
			'matematikal_h' => $this->input->post('matematikal_h'),
			'matematikal_i' => $this->input->post('matematikal_i'),
			'matematikal_j' => $this->input->post('matematikal_j'),
			'matematikal_k' => $this->input->post('matematikal_k'),
			'matematikal_l' => $this->input->post('matematikal_l'),
			'matematikal_m' => $this->input->post('matematikal_m'),
			'matematikal_n' => $this->input->post('matematikal_n'),
			'matematikal_o' => $this->input->post('matematikal_o'),
			'matematikal_p' => $this->input->post('matematikal_p'),
			'matematikal_q' => $this->input->post('matematikal_q'),
			'matematikal_r' => $this->input->post('matematikal_r'),
			'matematikal_s' => $this->input->post('matematikal_s'),
			'matematikal_t' => $this->input->post('matematikal_t'),
			'matematikal_u' => $this->input->post('matematikal_u'),
			'musikal_a' => $this->input->post('musikal_a'),
			'musikal_b' => $this->input->post('musikal_b'),
			'musikal_c' => $this->input->post('musikal_c'),
			'musikal_d' => $this->input->post('musikal_d'),
			'musikal_e' => $this->input->post('musikal_e'),
			'musikal_f' => $this->input->post('musikal_f'),
			'musikal_g' => $this->input->post('musikal_g'),
			'musikal_h' => $this->input->post('musikal_h'),
			'musikal_i' => $this->input->post('musikal_i'),
			'musikal_j' => $this->input->post('musikal_j'),
			'musikal_k' => $this->input->post('musikal_k'),
			'musikal_l' => $this->input->post('musikal_l'),
			'musikal_m' => $this->input->post('musikal_m'),
			'musikal_n' => $this->input->post('musikal_n'),
			'musikal_o' => $this->input->post('musikal_o'),
			'musikal_p' => $this->input->post('musikal_p'),
			'musikal_q' => $this->input->post('musikal_q'),
			'musikal_r' => $this->input->post('musikal_r'),
			'musikal_s' => $this->input->post('musikal_s'),
			'musikal_t' => $this->input->post('musikal_t'),
			'musikal_u' => $this->input->post('musikal_u'),
			'kinestik_a' => $this->input->post('kinestik_a'),
			'kinestik_b' => $this->input->post('kinestik_b'),
			'kinestik_c' => $this->input->post('kinestik_c'),
			'kinestik_d' => $this->input->post('kinestik_d'),
			'kinestik_e' => $this->input->post('kinestik_e'),
			'kinestik_f' => $this->input->post('kinestik_f'),
			'kinestik_g' => $this->input->post('kinestik_g'),
			'kinestik_h' => $this->input->post('kinestik_h'),
			'kinestik_i' => $this->input->post('kinestik_i'),
			'kinestik_j' => $this->input->post('kinestik_j'),
			'kinestik_k' => $this->input->post('kinestik_k'),
			'kinestik_l' => $this->input->post('kinestik_l'),
			'kinestik_m' => $this->input->post('kinestik_m'),
			'kinestik_n' => $this->input->post('kinestik_n'),
			'kinestik_o' => $this->input->post('kinestik_o'),
			'kinestik_p' => $this->input->post('kinestik_p'),
			'kinestik_q' => $this->input->post('kinestik_q'),
			'kinestik_r' => $this->input->post('kinestik_r'),
			'kinestik_s' => $this->input->post('kinestik_s'),
			'kinestik_t' => $this->input->post('kinestik_t'),
			'kinestik_u' => $this->input->post('kinestik_u'),
			'spartial_a' => $this->input->post('spartial_a'),
			'spartial_b' => $this->input->post('spartial_b'),
			'spartial_c' => $this->input->post('spartial_c'),
			'spartial_d' => $this->input->post('spartial_d'),
			'spartial_e' => $this->input->post('spartial_e'),
			'spartial_f' => $this->input->post('spartial_f'),
			'spartial_g' => $this->input->post('spartial_g'),
			'spartial_h' => $this->input->post('spartial_h'),
			'spartial_i' => $this->input->post('spartial_i'),
			'spartial_j' => $this->input->post('spartial_j'),
			'spartial_k' => $this->input->post('spartial_k'),
			'spartial_l' => $this->input->post('spartial_l'),
			'spartial_m' => $this->input->post('spartial_m'),
			'spartial_n' => $this->input->post('spartial_n'),
			'spartial_o' => $this->input->post('spartial_o'),
			'spartial_p' => $this->input->post('spartial_p'),
			'spartial_q' => $this->input->post('spartial_q'),
			'spartial_r' => $this->input->post('spartial_r'),
			'spartial_s' => $this->input->post('spartial_s'),
			'spartial_t' => $this->input->post('spartial_t'),
			'spartial_u' => $this->input->post('spartial_u'),
			'intrapersonal_a' => $this->input->post('intrapersonal_a'),
			'intrapersonal_b' => $this->input->post('intrapersonal_b'),
			'intrapersonal_c' => $this->input->post('intrapersonal_c'),
			'intrapersonal_d' => $this->input->post('intrapersonal_d'),
			'intrapersonal_e' => $this->input->post('intrapersonal_e'),
			'intrapersonal_f' => $this->input->post('intrapersonal_f'),
			'intrapersonal_g' => $this->input->post('intrapersonal_g'),
			'intrapersonal_h' => $this->input->post('intrapersonal_h'),
			'intrapersonal_i' => $this->input->post('intrapersonal_i'),
			'intrapersonal_j' => $this->input->post('intrapersonal_j'),
			'intrapersonal_k' => $this->input->post('intrapersonal_k'),
			'intrapersonal_l' => $this->input->post('intrapersonal_l'),
			'intrapersonal_m' => $this->input->post('intrapersonal_m'),
			'intrapersonal_n' => $this->input->post('intrapersonal_n'),
			'intrapersonal_o' => $this->input->post('intrapersonal_o'),
			'intrapersonal_p' => $this->input->post('intrapersonal_p'),
			'intrapersonal_q' => $this->input->post('intrapersonal_q'),
			'intrapersonal_r' => $this->input->post('intrapersonal_r'),
			'intrapersonal_s' => $this->input->post('intrapersonal_s'),
			'intrapersonal_t' => $this->input->post('intrapersonal_t'),
			'intrapersonal_u' => $this->input->post('intrapersonal_u'),
			'interpersonal_a' => $this->input->post('interpersonal_a'),
			'interpersonal_b' => $this->input->post('interpersonal_b'),
			'interpersonal_c' => $this->input->post('interpersonal_c'),
			'interpersonal_d' => $this->input->post('interpersonal_d'),
			'interpersonal_e' => $this->input->post('interpersonal_e'),
			'interpersonal_f' => $this->input->post('interpersonal_f'),
			'interpersonal_g' => $this->input->post('interpersonal_g'),
			'interpersonal_h' => $this->input->post('interpersonal_h'),
			'interpersonal_i' => $this->input->post('interpersonal_i'),
			'interpersonal_j' => $this->input->post('interpersonal_j'),
			'interpersonal_k' => $this->input->post('interpersonal_k'),
			'interpersonal_l' => $this->input->post('interpersonal_l'),
			'interpersonal_m' => $this->input->post('interpersonal_m'),
			'interpersonal_n' => $this->input->post('interpersonal_n'),
			'interpersonal_o' => $this->input->post('interpersonal_o'),
			'interpersonal_p' => $this->input->post('interpersonal_p'),
			'interpersonal_q' => $this->input->post('interpersonal_q'),
			'interpersonal_r' => $this->input->post('interpersonal_r'),
			'interpersonal_s' => $this->input->post('interpersonal_s'),
			'interpersonal_t' => $this->input->post('interpersonal_t'),
			'interpersonal_u' => $this->input->post('interpersonal_u'),
			'naturalistik_a' => $this->input->post('naturalistik_a'),
			'naturalistik_b' => $this->input->post('naturalistik_b'),
			'naturalistik_c' => $this->input->post('naturalistik_c'),
			'naturalistik_d' => $this->input->post('naturalistik_d'),
			'naturalistik_e' => $this->input->post('naturalistik_e'),
			'naturalistik_f' => $this->input->post('naturalistik_f'),
			'naturalistik_g' => $this->input->post('naturalistik_g'),
			'naturalistik_h' => $this->input->post('naturalistik_h'),
			'naturalistik_i' => $this->input->post('naturalistik_i'),
			'naturalistik_j' => $this->input->post('naturalistik_j'),
			'naturalistik_k' => $this->input->post('naturalistik_k'),
			'naturalistik_l' => $this->input->post('naturalistik_l'),
			'naturalistik_m' => $this->input->post('naturalistik_m'),
			'naturalistik_n' => $this->input->post('naturalistik_n'),
			'naturalistik_o' => $this->input->post('naturalistik_o'),
			'naturalistik_p' => $this->input->post('naturalistik_p'),
			'naturalistik_q' => $this->input->post('naturalistik_q'),
			'naturalistik_r' => $this->input->post('naturalistik_r'),
			'naturalistik_s' => $this->input->post('naturalistik_s'),
			'naturalistik_t' => $this->input->post('naturalistik_t'),
			'naturalistik_u' => $this->input->post('naturalistik_u'),
			'eksistensial_a' => $this->input->post('eksistensial_a'),
			'eksistensial_b' => $this->input->post('eksistensial_b'),
			'eksistensial_c' => $this->input->post('eksistensial_c'),
			'eksistensial_d' => $this->input->post('eksistensial_d'),
			'eksistensial_e' => $this->input->post('eksistensial_e'),
			'eksistensial_f' => $this->input->post('eksistensial_f'),
			'eksistensial_g' => $this->input->post('eksistensial_g'),
			'eksistensial_h' => $this->input->post('eksistensial_h'),
			'eksistensial_i' => $this->input->post('eksistensial_i'),
			'eksistensial_j' => $this->input->post('eksistensial_j'),
			'eksistensial_k' => $this->input->post('eksistensial_k'),
			'eksistensial_l' => $this->input->post('eksistensial_l'),
			'eksistensial_m' => $this->input->post('eksistensial_m'),
			'eksistensial_n' => $this->input->post('eksistensial_n'),
			'eksistensial_o' => $this->input->post('eksistensial_o'),
			'eksistensial_p' => $this->input->post('eksistensial_p'),
			'eksistensial_q' => $this->input->post('eksistensial_q'),
			'eksistensial_r' => $this->input->post('eksistensial_r'),
			'eksistensial_s' => $this->input->post('eksistensial_s'),
			'eksistensial_t' => $this->input->post('eksistensial_t'),
			'eksistensial_u' => $this->input->post('eksistensial_u'),
		);
		$data['matriks'] = $data_matriks;
		$this->header($data);
		$this->load->view('normalisasi');
		$this->load->view('template/footer');
	}

	public function perhitungan_eigen()
	{
		$data['title'] = 'Perhitungan Eigen';
		$data_eigen = array(
			'id_nilai' => $this->input->post('id_nilai'),
			'eigen_a' => $this->input->post('eigen1'),
			'eigen_b' => $this->input->post('eigen2'),
			'eigen_c' => $this->input->post('eigen3'),
			'eigen_d' => $this->input->post('eigen4'),
			'eigen_e' => $this->input->post('eigen5'),
			'eigen_f' => $this->input->post('eigen6'),
			'eigen_g' => $this->input->post('eigen7'),
			'eigen_h' => $this->input->post('eigen8'),
			'eigen_i' => $this->input->post('eigen9'),
			'eigen_j' => $this->input->post('eigen10'),
			'eigen_k' => $this->input->post('eigen11'),
			'eigen_l' => $this->input->post('eigen12'),
			'eigen_m' => $this->input->post('eigen13'),
			'eigen_n' => $this->input->post('eigen14'),
			'eigen_o' => $this->input->post('eigen15'),
			'eigen_p' => $this->input->post('eigen16'),
			'eigen_q' => $this->input->post('eigen17'),
			'eigen_r' => $this->input->post('eigen18'),
			'eigen_s' => $this->input->post('eigen19'),
			'eigen_t' => $this->input->post('eigen20'),
			'eigen_u' => $this->input->post('eigen21'),
		);

		$data['eigen'] = $data_eigen;
		$this->header($data);
		$this->load->view('perhitungan_ahp');
		$this->load->view('template/footer');
	}

	
}
