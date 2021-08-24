<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller
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

		$data['jmlmapel'] = $this->m_admin->list_mapel()->num_rows();
		$data['jmlsiswa'] = $this->m_admin->list_siswa()->num_rows();
		$data['jmljurusan'] = $this->m_admin->list_jurusan()->num_rows();
		$data['jmlkelas'] = $this->m_admin->list_kelas()->num_rows();

		$data['title'] = 'Dashboard';

		$this->header($data);
		$this->load->view('utama');
		$this->load->view('template/footer');
	}

	//Metode Perhitungan

	// kriteria
	public function kriteria()
	{

		$data['title'] = 'kriteria';
		$data['kriteria_p'] = $this->m_admin->list_kriteria()->result();

		$this->header($data);
		$this->load->view('kriteria_p');
		$this->load->view('template/footer');
	}

	public function tambah_kriteria()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$kriteria_p = $this->input->post('kriteria');
		$data = array('nama_kriteria' => $kriteria_p);
		$this->m_admin->insert_kriteria('kriteria', $data);
		redirect('kriteria');
	}
	public function edit_kriteria($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$kriteria_p = $this->input->post('nama_kriteria');
		$where = array('id_kriteria' => $id);
		$data = array('nama_kriteria' => $kriteria_p);
		$this->m_admin->update_kriteria($where, 'kriteria', $data);
		redirect('kriteria');
	}
	public function hapus_kriteria($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_kriteria' => $id);
		$this->m_admin->delete_kriteria($where, 'kriteria');
		redirect('kriteria');
	}
	// sub kriteria

	public function sub_kriteria()
	{

		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'Sub Kriteria';

		$data['list_subk'] = $this->m_admin->list_subk()->result();
		$data['list_kriteria'] = $this->m_admin->list_kriteria()->result();

		$this->header($data);
		$this->load->view('sub_kriteria');
		$this->load->view('template/footer');
	}

	public function tambah_subk()
	{

		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama_sub = $this->input->post('nama_sub');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$data = array(
			'nama_sub' => $nama_sub,
			'nama_kriteria' => $nama_kriteria
		);
		$this->m_admin->insert_subk('sub_kriteria_tb', $data);
		redirect('sub_kriteria');
	}
	public function edit_subk($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama_sub = $this->input->post('nama_sub');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$data = array(
			'nama_sub' => $nama_sub,
			'nama_kriteria' => $nama_kriteria
		);

		$where = array('id_sub_kriteria' => $id);
		$this->m_admin->update_subk($where, 'sub_kriteria_tb', $data);
		redirect('sub_kriteria');
	}

	public function hapus_subk($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_sub_kriteria' => $id);
		$this->m_admin->delete_subk($where, 'sub_kriteria_tb');
		redirect('sub_kriteria');
	}


	//konversi nilai

	public function simpanhasil()
	{

		$data = array(
			'hasil_prob' => $this->input->post('hasil_prob'),
			'hasil_tdkprob' => $this->input->post('hasil_prob'),
			'hasil' => $this->input->post('hasil')
		);
		$data = $this->db->insert('hasil_nb', $data);
		redirect('Admin/aturan');
	}

	// public function simpan_rangking(){

	// 	$data = array(
	// 		'id_siswa' => $this->input->post('id_siswa'),
	// 		'teknik_sipil' => $this->input->post('teknik_sipil'),
	// 		'teknik informatika' => $this->input->post('teknik_informatika'),
	// 		'teknik industri' => $this->input->post('teknik_industri')
	// 	);
	// 	$data = $this->db->insert('ranking',$data);
	// 	redirect('KlasifikasiNB/perhitungan_eigen');
	// }

	public function konversi_nilai()
	{

		$data['title'] = 'konversi nilai';

		$data['list_konversi']  = $this->m_admin->list_konversi()->result();
		$data['list_nilaikons']  = $this->m_admin->list_nilaikons()->result();

		$this->header($data);
		$this->load->view('konversi_nilai_v');
		$this->load->view('template/footer');
	}

	public function tambah_konversi()
	{

		if ($this->session->status != 'admin') {
			redirect('');
		}

		$nama_atribut = $this->input->post('atribut_konversi');
		$nilai_konversi = $this->input->post('nilai_kons');
		$data = array(
			'atribut_konversi' => $nama_atribut,
			'nilai_kons' => $nilai_konversi
		);
		$this->m_admin->insert_konversi('konversi', $data);
		redirect('konversi');
	}

	public function edit_konversi($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama_atribut = $this->input->post('atribut_konversi');
		$nilai_konversi = $this->input->post('nilai_kons');
		$data = array(
			'atribut_konversi' => $nama_atribut,
			'nilai_kons' => $nilai_konversi
		);
		$where = array('id_konversi' => $id);
		$this->m_admin->update_konversi($where, 'konversi', $data);
		redirect('konversi');
	}

	public function hapus_konversi($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_konversi' => $id);
		$this->m_admin->delete_konversi($where, 'konversi');
		redirect('konversi');
	}

	//nilai konversi
	public function tambah_nilai_konversi()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nilai_konversi_a = $this->input->post('nilai_kons');
		$data = array('nilai_kons' => $nilai_konversi_a);
		$this->m_admin->insert_nilai_konversi('nilai_konversi', $data);
		redirect('konversi');
	}

	public function edit_nilai_konversi($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nilai_konversi_a = $this->input->post('nilai_kons');
		$data = array('nilai_kons' => $nilai_konversi_a);
		$where = array('id_nilai_konversi' => $id);
		$this->m_admin->update_nilai_konversi($where, 'nilai_konversi', $data);
		redirect('konversi');
	}

	public function hapus_nilai_konversi($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_nilai_konversi' => $id);
		$this->m_admin->delete_nilai_konversi($where, 'nilai_konversi');
		redirect('konversi');
	}

	//alternatif
	public function alternatif()
	{

		$data['title'] = 'alternatif';
		$data['alternatif'] = $this->m_admin->list_alternatif()->result();

		$this->header($data);
		$this->load->view('alternatif_v');
		$this->load->view('template/footer');
	}

	public function tambah_alternatif()
	{

		if ($this->session->status != 'admin') {
			redirect('');
		}
		$alternatif = $this->input->post('nama_alternatif');
		$data = array('nama_alternatif' => $alternatif);
		$this->m_admin->insert_alternatif('alternatif_tb', $data);
		redirect('alternatif');
	}
	public function edit_alternatif($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$alternatif = $this->input->post('nama_alternatif');
		$where = array('id_alternatif' => $id);
		$data = array('nama_alternatif' => $alternatif);
		$this->m_admin->update_alternatif($where, 'alternatif_tb', $data);
		redirect('alternatif');
	}
	public function hapus_alternatif($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_alternatif' => $id);
		$this->m_admin->delete_alternatif($where, 'alternatif_tb');
		redirect('alternatif');
	}


	// nilai alternatif 

	public function nilaimin_alternatif($id)
	{

		$data['title'] = 'Nilai Minimum';
		// $mapel = $this->db->query("SELECT * FROM mapel")->result();
		// $nilai = $this->db->query("SELECT * FROM minimum_alternatif_tb")->result();
		// $data['listminimum'] = $this->m_admin->list_nilaimin()->result();
		// $data['listmapel'] = $this->m_admin->list_mapel()->result();
		// $data['mapel'] = $mapel;
		// $data['nilai'] =$nilai;
		$data['detail'] = $this->db->query("SELECT * FROM minimum_nilai_alternatif JOIN alternatif_tb ON minimum_nilai_alternatif.id_alternatif=alternatif_tb.id_alternatif WHERE minimum_nilai_alternatif.id_alternatif = '" . $id . "'")->result();

		// $arrayNilai = array();
		// foreach ($mapel as $mpl) {
		// 	$nilai = $this->db->query("SELECT alternatif_tb.*, mapel.*, minimum_alternatif_tb.*
		// 	 FROM minimum_alternatif_tb JOIN alternatif_tb 
		// 	ON minimum_alternatif_tb.nama_alternatif = alternatif_tb.id_alternatif JOIN mapel 
		// 	ON minimum_alternatif_tb.mapel = mapel.id_mapel 
		// 	WHERE minimum_alternatif_tb.nama_alternatif = '".$id."' AND mapel.id_mapel = '". $mpl->id_mapel ."'")->row();

		// 	if ($nilai) {
		// 		$arrayNilai[] = $nilai->nilai;
		// 	} else {
		// 		$arrayNilai[] = "-";
		// 	}
		// }

		// $data['hasil'] = $arrayNilai;

		$this->header($data);
		$this->load->view('nilai_minimum_alternatif');
		$this->load->view('template/footer');
	}
	// Tambah Nilai Minimum
	public function act_tnilaiminimum()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$alternatif = $this->input->post('nama_alternatif');
		$mapel 		= $this->input->post('mapel');
		$nilaimin 	= $this->input->post('nilai');
		$data = array(
			'nama_alternatif' => $alternatif,
			'mapel' => $mapel,
			'nilai' => $nilaimin
		);

		$this->m_admin->insert_nilaimin('minimum_alternatif_tb', $data);
		redirect('alternatif');
	}

	public function act_hapusnilaimin($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_minimum' => $id);
		$this->m_admin->delete_alternatif($where, 'minimum_alternatif_tb');
		redirect('alternatif');
	}



	//aturan
	public function aturan()
	{

		$data['title'] = 'Data Set';
		//$data['set_data'] = $this->m_admin->list_dataset()->result();
		$nilai = $this->m_admin->get_nilai();
		$sub = $this->db->query("SELECT * FROM sub_kriteria")->result();
		$data['datasiswa'] = $this->db->get('siswa')->result();
		$data['sub'] = $sub;
		$data['nilai'] = $nilai;
		$this->header($data);
		$this->load->view('aturan');
		$this->load->view('template/footer');
	}

	public function get_id($id)
	{
		$data = $this->m_admin->siswa_get_id($id);
		echo json_encode($data);
	}

	public function save_nilai()
	{
		$data = array(
			'id_siswa' => $this->input->post('id_siswa'),
			'nis' => $this->input->post('nis'),
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
			'naturalistik' => $this->input->post('naturalistik'),
			'eksistensial' => $this->input->post('eksistensial')
		);
		$this->db->insert('nilai', $data);
		echo "<script>
        alert('Data Nilai Berhasil Tersimpan');
        window.location.href = '" . base_url('Admin/aturan') . "';
    </script>";
	}

	public function konversi_alternatif($id)
	{

		$data['title'] = 'Konversi';
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

		// $arrayNilai = array();
		// foreach ($sub as $s) {
		// 	$nilai = $this->db->query("SELECT data_set.*, konversi.*, sub_kriteria_tb.* 
		// 	FROM data_set JOIN sub_kriteria_tb ON data_set.nama_sub = sub_kriteria_tb.nama_sub 
		// 	JOIN konversi ON data_set.nilai = konversi.atribut_konversi ")->row();
		// 	if ($nilai) {
		// 		$arrayNilai[] = $nilai->nilai;
		// 	} else {
		// 		$arrayNilai[] = "-";
		// 	}
		// }

		// $data['hasil'] = $arrayNilai;

		$this->header($data);
		$this->load->view('konversi_alternatif');
		$this->load->view('template/footer');
	}

	public function coba_konversi_nilai()
	{
		$data['title'] = 'konversi';
		$data_input = array(
			'id_alternatif' => $this->input->post('id_alternatif'),
			'nama' => $this->input->post('nama_alternatif'),
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

		$data['a'] = $data_input;
		$data['bobot1'] = $data_input;
		$data['bobot2'] = $data_input;
		$this->header($data);
		$this->load->view('hasil_coba');
		$this->load->view('template/footer');
	}

	public function alternatif_matriks()
	{
		$data['title'] = 'ALTERNATIF';
		$data['datanilai'] = $this->db->query("SELECT * FROM minimum_bobot_alternatif JOIN alternatif_tb ON minimum_bobot_alternatif.id_alternatif=alternatif_tb.id_alternatif ")->result();
		$this->header($data);
		$this->load->view('nilai_bobot_alternatif');
		$this->load->view('template/footer');
	}
	public function simpan_bobot()
	{
		$data_input = array(
			'id_alternatif' => $this->input->post('id_alternatif'),
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
		$this->db->insert('minimum_bobot_alternatif', $data_input);
		redirect('Admin/konversi_nilai');
	}

	public function coba_bobot()
	{
		$data['title'] = 'matriks';
		$data_input = array(
			'id_nilai' => $this->input->post('id_nilai'),
			'id_siswa' => $this->input->post('id_siswa'),
			'nama' => $this->input->post('nama_siswa'),
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

		$data['a'] = $data_input;
		$data['bobot1'] = $data_input;
		$data['bobot2'] = $data_input;
		$this->header($data);
		$this->load->view('matrik');
		$this->load->view('template/footer');
	}

	public function konversi_matrik()
	{
		$data['title'] = 'tabel matriks';
		$data_input = array(
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
		$data['bobot1'] = $data_input;
		$data['bobot2'] = $data_input;
		$this->header($data);
		$this->load->view('tabel_matrik');
		$this->load->view('template/footer');
	}

	public function perhitungan_eigen()
	{
		$data['title'] = 'Perhitungan Eigen';
		$data_eigen = array(
			'id_nilai' => $this->input->post('id_nilai'),
			'id_siswa' => $this->input->post('id_siswa'),
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
		$id1 = 1;
		$id2 = 2;
		$id3 = 3;
		$data['eigen_alt1'] = $this->m_admin->bobot_prioritas1($id1);
		$data['eigen_alt2'] = $this->m_admin->bobot_prioritas2($id2);
		$data['eigen_alt3'] = $this->m_admin->bobot_prioritas3($id3);
		$id = $this->input->post('id_nilai');
		$data['status'] = $this->db->query("SELECT * FROM hasil_nb WHERE id_nilai='$id'")->row_array();
		$this->header($data);
		$this->load->view('perhitungan_ahp');
		$this->load->view('template/footer');
	}
	public function konversi_bobot($id)
	{
		$data['title'] = 'Konversi Bobot';
		$data['datanilai'] = $this->m_admin->nilai($id);
		$this->header($data);
		$this->load->view('konversi_bobot');
		$this->load->view('template/footer');
	}

	public function coba_konversi($id)
	{
		$data['title'] = 'Coba';
		$data['datanilai'] = $this->db->query("SELECT * FROM minimum_nilai_alternatif JOIN alternatif_tb ON minimum_nilai_alternatif.id_alternatif=alternatif_tb.id_alternatif WHERE minimum_nilai_alternatif.id_alternatif = '" . $id . "'")->row();
		$this->header($data);
		$this->load->view('proses_konversi');
		$this->load->view('template/footer');
	}

	//Perhitungan
	public function perhitungan()
	{

		$data['title'] = 'perhitungan';

		$this->header($data);
		$this->load->view('perhitungan');
		$this->load->view('template/footer');
	}


	// Guru
	public function guru()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'guru';
		$data['guru'] = $this->m_admin->list_guru()->result();
		$data['listmapel'] = $this->m_admin->list_mapel()->result();

		$this->header($data);
		$this->load->view('guru');
		$this->load->view('template/footer');
	}
	public function tambah_guru()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->m_admin->insert_guru('guru', $data);
		redirect('guru');
	}
	public function edit_guru($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('id_guru' => $id);
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->m_admin->update_guru($where, 'guru', $data);
		redirect('guru');
	}
	public function hapus_guru($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_guru' => $id);
		$this->m_admin->delete_guru($where, 'guru');
		redirect('guru');
	}

	//Mapel
	public function mapel()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'Mata Pelajaran';

		$data['mapel'] = $this->m_admin->list_mapel()->result();

		$this->header($data);
		$this->load->view('mapel');
		$this->load->view('template/footer');
	}
	public function tambah_mapel()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$mapel = $this->input->post('mapel');
		$data = array('mapel' => $mapel);
		$this->m_admin->insert_mapel('mapel', $data);
		redirect('mapel');
	}
	public function edit_mapel($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$mapel = $this->input->post('mapel');
		$where = array('id_mapel' => $id);
		$data = array('mapel' => $mapel);
		$this->m_admin->update_mapel($where, 'mapel', $data);
		redirect('mapel');
	}
	public function hapus_mapel($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_mapel' => $id);
		$this->m_admin->delete_mapel($where, 'mapel');
		redirect('mapel');
	}


	public function nilaisiswa($id)
	{
		$mapel = $this->db->query("SELECT * FROM mapel")->result();
		$data['title'] = 'Nilai Siswa';
		$data['mapel'] = $mapel;
		$data['detail'] = $this->db->query("SELECT * FROM siswa WHERE id_siswa = '" . $id . "'")->row();

		$arrayNilai = array();
		foreach ($mapel as $mpl) {
			$nilai = $this->db->query("SELECT siswa.*, mapel.*, nilai.* FROM nilai JOIN siswa ON nilai.id_siswa = siswa.id_siswa JOIN mapel ON nilai.id_mapel = mapel.id_mapel WHERE nilai.id_siswa = '" . $id . "' AND mapel.id_mapel = '" . $mpl->id_mapel . "'")->row();
			if ($nilai) {
				$arrayNilai[] = $nilai->nilai;
			} else {
				$arrayNilai[] = "-";
			}
		}

		$data['hasil'] = $arrayNilai;

		$this->header($data);
		$this->load->view('nilaisiswa');
		$this->load->view('template/footer');
	}

	//Siswa
	public function siswa()
	{

		$data['title'] = 'Siswa';
		$data['siswa'] = $this->m_admin->list_siswa()->result();
		$data['listkelas'] = $this->m_admin->list_kelas()->result();

		$this->header($data);
		$this->load->view('siswa');
		$this->load->view('template/footer');
	}
	public function tambah_siswa()
	{

		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$kelas = $this->input->post('kelas');
		$password = $this->input->post('nis');
		$nohp = $this->input->post('nohp');
		$data = array(
			'nama' => $nama,
			'nis' => $nis,
			'kelas' => $kelas,
			'password' => $password,
			'nohp' => $nohp
		);
		$this->m_admin->insert_siswa('siswa', $data);
		redirect('siswa');
	}
	public function edit_siswa($id)
	{

		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$kelas = $this->input->post('kelas');
		$nohp = $this->input->post('nohp');
		$password = $this->input->post('password');
		$pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		$data = array(
			'nama' => $nama,
			'nis' => $nis,
			'kelas' => $kelas,
			'password' => $password,
			'nohp' => $nohp,
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
		);
		$where = array('id_siswa' => $id);
		$this->m_admin->update_siswa('siswa', $data, $where);
		redirect('siswa');
	}
	public function hapus_siswa($id)
	{

		$where = array('id_siswa' => $id);
		$this->m_admin->delete_siswa($where, 'siswa');
		redirect('siswa');
	}

	//Kelas
	public function kelas()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'Kelas / Jurusan';

		$data['kelas'] = $this->m_admin->list_kelas()->result();
		$data['jurusan'] = $this->m_admin->list_jurusan()->result();

		$this->header($data);
		$this->load->view('kelas');
		$this->load->view('template/footer');
	}
	public function tambah_kelas()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$rombel = $this->input->post('rombel');
		$kodekelas = $this->input->post('kodekelas');
		$data = array(
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'rombel' => $rombel,
			'kode_kelas' => $kodekelas
		);
		$this->m_admin->insert_kelas('kelas', $data);
		redirect('kelas');
	}
	public function edit_kelas($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$rombel = $this->input->post('rombel');
		$kodekelas = $this->input->post('kodekelas');
		$data = array(
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'rombel' => $rombel,
			'kode_kelas' => $kodekelas
		);
		$where = array('id_kelas' => $id);
		$this->m_admin->update_kelas($where, 'kelas', $data);
		redirect('kelas');
	}
	public function hapus_kelas($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_kelas' => $id);
		$this->m_admin->delete_kelas($where, 'kelas');
		redirect('kelas');
	}
	//Jurusan
	public function tambah_jurusan()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$jurusan = $this->input->post('jurusan');
		$data = array('jurusan' => $jurusan);
		$this->m_admin->insert_jurusan('jurusan', $data);
		redirect('kelas');
	}
	public function edit_jurusan($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$jurusan = $this->input->post('jurusan');
		$data = array('jurusan' => $jurusan);
		$where = array('id_jurusan' => $id);
		$this->m_admin->update_jurusan($where, 'jurusan', $data);
		redirect('kelas');
	}
	public function hapus_jurusan($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_jurusan' => $id);
		$this->m_admin->delete_jurusan($where, 'jurusan');
		redirect('kelas');
	}

	//Soal
	public function soal($pjk)
	{
		//$data['title'] = 'Soal';
		$mapel = $this->uri->segment(3);

		$vkelas = array('id_kelas' => $pjk);
		$data['kelas'] = $this->m_admin->vkelas($vkelas)->row_array();
		$data['title'] = 'Soal ' . $data['kelas']['kode_kelas'];

		//admin
		if ($this->session->status == 'admin') {
			$data['pilihmapel'] = $this->m_admin->list_mapel()->result();
			$data['listsoal'] = '';
		}
		if ($mapel) {
			$data['listsoal'] = $this->m_admin->soal_admin($pjk, $mapel)->result();
		}
		//Guru
		if ($this->session->status == 'guru') {
			$data['listsoal'] = $this->m_admin->soal_guru($this->session->id, $pjk)->result();
		}

		$this->header($data);
		$this->load->view('soal');
		$this->load->view('template/footer');
	}
	function soal_by_mapel($kelas, $mapel)
	{
		$soal = $this->db->query('SELECT * FROM soal WHERE kelas=' . $kelas . ' AND mapel=' . $mapel)->result();
		$this->j($soal);
	}

	//Tambah Soal
	//Sebelum menambah soal, ubah settingan maximum file upload pada php.ini
	public function tambahsoal()
	{
		$data['title'] = 'Tambah Soal';
		$data['listmapel'] = $this->m_admin->list_mapel()->result();
		$data['listkelas'] = $this->m_admin->list_kelas()->result();
		$data['listguru'] = $this->m_admin->list_guru()->result();

		$this->header($data);
		$this->load->view('tambahsoal');
		$this->load->view('template/footer');
	}
	//Aksi tambah soal
	function act_tsoal()
	{
		$mapel = $this->input->post('mapel');
		$kelas = $this->input->post('kelas');
		$guru = $this->input->post('guru');
		$soal = $this->input->post('soal');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$e = $this->input->post('e');
		$jawaban = $this->input->post('jawaban');
		$cekmedia = $_FILES['media'];

		//jika ada file
		if (empty($cekmedia['name'])) {
			# code...
			$data = array(
				'mapel' => $mapel,
				'kelas' => $kelas,
				'guru' => $guru,
				'soal' => $soal,
				'opsi_a' => $a,
				'opsi_b' => $b,
				'opsi_c' => $c,
				'opsi_d' => $d,
				'opsi_e' => $e,
				'jawaban' => $jawaban
			);
			$this->m_admin->in_soal_nomedia('soal', $data);
			$this->session->set_flashdata('soal', 'Soal berhasil ditambahkan');
			redirect('tsoal');
		} else {
			$config['upload_path'] = './../media';
			$config['allowed_types'] = 'jpg|png|gif|wav|mp3';
			//load library upload
			$this->load->library('upload', $config);

			//proses upload file
			if (!$this->upload->do_upload('media')) {
				$data['error'] = $this->upload->display_errors();
				redirect('tsoal', $data);
			} else {
				$media = $this->upload->data('file_name');
				$data = array(
					'mapel' => $mapel,
					'kelas' => $kelas,
					'guru' => $guru,
					'soal' => $soal,
					'media' => $media,
					'opsi_a' => $a,
					'opsi_b' => $b,
					'opsi_c' => $c,
					'opsi_d' => $d,
					'opsi_e' => $e,
					'jawaban' => $jawaban
				);

				$this->m_admin->in_soal_media('soal', $data);
				$this->session->set_flashdata('soal', 'Soal berhasil ditambahkan');
				redirect('tsoal');
			}
		}
	}
	//Edit Soal
	public function esoal($id)
	{
		$data['title'] = 'Edit Soal';
		$data['listmapel'] = $this->m_admin->list_mapel()->result();
		$data['listkelas'] = $this->m_admin->list_kelas()->result();
		$data['listguru'] = $this->m_admin->list_guru()->result();
		$data['soal'] = $this->m_admin->get_soal_by_id(['id_soal' => $id])->row();

		$this->header($data);
		$this->load->view('editsoal');
		$this->load->view('template/footer');
	}
	//Aksi ediit soal
	function act_esoal($id)
	{
		$mapel = $this->input->post('mapel');
		$kelas = $this->input->post('kelas');
		$guru = $this->input->post('guru');
		$soal = $this->input->post('soal');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$e = $this->input->post('e');
		$jawaban = $this->input->post('jawaban');
		$cekmedia = $_FILES['media'];

		$where = ['id_soal' => $id];
		//jika ada file
		if (empty($cekmedia['name'])) {
			# code...
			$data = array(
				'mapel' => $mapel,
				'kelas' => $kelas,
				'guru' => $guru,
				'soal' => $soal,
				'opsi_a' => $a,
				'opsi_b' => $b,
				'opsi_c' => $c,
				'opsi_d' => $d,
				'opsi_e' => $e,
				'jawaban' => $jawaban
			);
			$this->m_admin->up_soal_nomedia($where, 'soal', $data);
			$this->session->set_flashdata('soal', 'Soal berhasil diubah');
			redirect($this->agent->referrer());
		} else {
			$s = $this->db->query('select media from soal where id_soal=' . $id)->row();
			unlink('./../media/' . $s->media);
			$config['upload_path'] = './../media';
			$config['allowed_types'] = 'jpg|png|gif|wav|mp3';
			//load library upload
			$this->load->library('upload', $config);

			//proses upload file
			if (!$this->upload->do_upload('media')) {
				$data['error'] = $this->upload->display_errors();
				redirect('tsoal', $data);
			} else {
				$media = $this->upload->data('file_name');
				$data = array(
					'mapel' => $mapel,
					'kelas' => $kelas,
					'guru' => $guru,
					'soal' => $soal,
					'media' => $media,
					'opsi_a' => $a,
					'opsi_b' => $b,
					'opsi_c' => $c,
					'opsi_d' => $d,
					'opsi_e' => $e,
					'jawaban' => $jawaban
				);

				$this->m_admin->up_soal_media($where, 'soal', $data);
				$this->session->set_flashdata('soal', 'Soal berhasil diubah');
				redirect($this->agent->referrer());
			}
		}
	}
	//Hapus Soal
	function hapus_soal($id)
	{
		$this->db->query("DELETE FROM soal WHERE id_soal=" . $id);
		redirect($this->agent->referrer());
	}

	//Nilai
	public function nilai($pjk)
	{
		$mapel = $this->uri->segment(3);

		$vkelas = array('id_kelas' => $pjk);
		$data['kelas'] = $this->m_admin->vkelas($vkelas)->row_array();
		$data['kls'] = $data['kelas']['kode_kelas'];
		$data['title'] = 'Nilai Ujian ' . $data['kelas']['kode_kelas'];
		$data['judul'] = 'Nilai Ujian ';
		$data['listmapel'] = $this->m_admin->list_mapel()->result();
		$data['nilai'] = '';

		if ($mapel) {
			$m = $this->db->query('SELECT mapel FROM mapel WHERE id_mapel=' . $mapel)->row_array();
			$data['judul'] = 'Nilai Ujian ' . $m['mapel'];
			$data['title'] = 'Nilai Ujian ' . $m['mapel'] . ' ' . $data['kelas']['kode_kelas'];
			$data['nilai'] = $this->nilai_by_mapel($pjk, $mapel)->result();
		}

		$this->header($data);
		$this->load->view('nilai');
		$this->load->view('template/footer');
	}
	function nilai_by_mapel($kelas, $mapel)
	{
		return $this->db->query('SELECT siswa.id_siswa, siswa.nis, siswa.nama, mapel.mapel, ikut_ujian.id_tes, ikut_ujian.id_ujian, ikut_ujian.nilai, ujian.id_kelas, ujian.id_mapel FROM siswa, ikut_ujian, ujian, mapel WHERE ikut_ujian.id_siswa=siswa.id_siswa AND ujian.id_ujian=ikut_ujian.id_ujian AND ujian.id_mapel=mapel.id_mapel AND ujian.id_kelas=' . $kelas . ' AND ujian.id_mapel=' . $mapel);
	}
	function hapus_nilai($id)
	{
		$this->db->query('DELETE FROM ikut_ujian WHERE id_tes=' . $id);
		redirect($this->agent->referrer());
	}

	//Ujian
	public function ujian()
	{
		$data['title'] = 'Ujian';
		$data['listkelas'] = $this->m_admin->list_kelas()->result();
		$data['listguru'] = $this->m_admin->list_guru()->result();
		$data['listujian'] = $this->m_admin->list_ujian()->result();

		$this->header($data);
		$this->load->view('ujian');
		$this->load->view('template/footer');
	}
	function mapel_by_kelas($id)
	{
		$mapel = $this->db->query('SELECT mapel.* FROM mapel, soal WHERE soal.mapel=mapel.id_mapel AND soal.mapel=mapel.id_mapel AND soal.kelas=' . $id . ' GROUP BY mapel')->result();
		echo json_encode($mapel);
	}
	function tambah_ujian()
	{
		$ujian = $this->input->post('nmujian');
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$guru = $this->input->post('guru');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');
		$data = [
			'nama_ujian' => $ujian,
			'id_kelas' => $kelas,
			'id_mapel' => $mapel,
			'id_guru' => $guru,
			'waktu' => $waktu,
			'tanggal' => $tanggal
		];

		$this->m_admin->t_ujian("ujian", $data);
		$this->session->set_flashdata('t_ujian', '');
		redirect('ujian');
	}
	function edit_ujian($id_ujian)
	{
		$ujian = $this->input->post('nmujian');
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$guru = $this->input->post('guru');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');
		$where = ['id_ujian' => $id_ujian];
		$data = [
			'nama_ujian' => $ujian,
			'id_kelas' => $kelas,
			'id_mapel' => $mapel,
			'id_guru' => $guru,
			'waktu' => $waktu,
			'tanggal' => $tanggal
		];

		$this->m_admin->e_ujian($where, 'ujian', $data);
		$this->session->set_flashdata('t_ujian', '');
		redirect('ujian');
	}
	function hapus_ujian($id)
	{
		$this->db->query("DELETE FROM ujian WHERE id_ujian=" . $id);
		redirect($this->agent->referrer());
	}

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
}
