<?php

class M_Admin extends CI_Model{
    
    function __construct()
    {
        parent::__construct();

    }

    //Login
    function login_admin($where){
        return $this->db->get_where('admin', $where);
    }
    function login_guru($where){
        //return $this->db->get_where('guru', $where);
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('mapel', 'guru.mapel=mapel.id_mapel');
        $this->db->where($where);
        return $this->db->get();
    }

    //Cek password admin
    function cek_passwd_admin($where){
        $this->db->select('password');
        return $this->db->get_where('admin', $where);
    }
    //Cek Password Default Guru
    function cek_passwd_guru($where){
        $this->db->select('guru.username, guru.password');
        return $this->db->get_where('guru', $where);
    }
    //Ganti Password Guru
    function update_passwd($table, $data, $where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //Halaman Utama

    //Perhitungan
    public function get_parameter($parameter,$val_param,$status){
        $query  = "SELECT (select count(status) from dataset where $parameter='$val_param' AND status='$status') / COUNT(status) as hasil_bagi FROM `dataset` WHERE status='$status'";
        return $this->db->query($query)->row();
    }
    //Kriteria
    function list_kriteria(){
        $this->db->order_by('id_kriteria');
        return $this->db->get('kriteria');
    }
    function insert_kriteria($table, $data){
        $this->db->insert($table, $data);
    }
    function update_kriteria($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_kriteria($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Sub-kriteria
    function list_subk(){
    
        //return $this->db->get('kelas');
        $this->db->select('sub_kriteria_tb.*, kriteria.*');
        $this->db->from('sub_kriteria_tb');
        $this->db->join('kriteria', 'kriteria.id_kriteria=sub_kriteria_tb.nama_kriteria');
        $this->db->order_by('id_kriteria');
        $query = $this->db->get();
        return $query;
    }

    function insert_subk($table, $data){
        $this->db->insert($table, $data);
    }
    function update_subk($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_subk($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Konversi_nilai
    
    function list_konversi(){
        
        $this->db->select('konversi.*, nilai_konversi.*');
        $this->db->from('konversi');
        $this->db->join('nilai_konversi', 'nilai_konversi.id_nilai_konversi=konversi.nilai_kons');
        $this->db->order_by('id_konversi');
        $query = $this->db->get();
        return $query;
    }

    function list_nilaikons(){
        $this->db->order_by('id_nilai_konversi');
        return $this->db->get('nilai_konversi');
    }

    function insert_konversi($table, $data){
        $this->db->insert($table, $data);
    }
    
    function update_konversi($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function delete_konversi($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function insert_nilai_konversi($table, $data){
        $this->db->insert($table, $data);
    }

    function update_nilai_konversi($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_nilai_konversi($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //alternatif
    
    function list_alternatif(){
        $this->db->order_by('id_alternatif');
        return $this->db->get('alternatif_tb');
    }
    function insert_alternatif($table, $data){
        $this->db->insert($table, $data);
    }
    function update_alternatif($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_alternatif($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    // tampil peralternatif

    function peralternatif($where){
        $this->db->select('id_alternatif, nama_alternatif');
        $this->db->from('alternatif_tb');
        $this->db->where($where);
        $this->db->order_by('id_alternatif', 'ASC');
        return $this->db->get();
    }

    //nilai_minimum
    
    function list_nilaimin(){
        $this->db->order_by('mapel');
        return $this->db->get('minimum_alternatif_tb');
    }
    
    function insert_nilaimin($table, $data){
        $this->db->insert($table, $data);
    }
    
    function delete_nilaimin($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Atruran Data Set
    
    function list_dataset(){
        $this->db->order_by('id_data_set');
        return $this->db->get('data_set');

    }

    //Guru
    function list_guru(){
        
        return $this->db->get('guru');
        
    }
    function insert_guru($table, $data){
        $this->db->insert($table, $data);
    }
    function update_guru($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_guru($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Mapel
    function list_mapel(){
        $this->db->order_by('mapel');
        return $this->db->get('mapel');
    }
    function insert_mapel($table, $data){
        $this->db->insert($table, $data);
    }
    function update_mapel($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_mapel($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

//    function getNilai(){
  //    $this->db->select('*');
    //    $this->db->from('nilai');
      //  $this->db->join('siswa','nilai.id_siswa=siswa.id_siswa','inner');
       //   $this->db->where('nilai.id_siswa');
        //$query = $this->db->get();
        //if($query->num_rows()>0)
           // return $nilai->result();
    //}
    
    function getNilai(){
        //return $this->db->get('kelas');
        $this->db->select('siswa.*, mapel.*, nilai.*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'nilai.id_siswa = siswa.id_siswa');
        $this->db->join('mapel','nilai.id_mapel = mapel.id_mapel');
        $this->db->where('nilai.id_siswa');
        $query = $this->db->get();
        return $query;
}
    //Siswa
    function list_siswa(){
        return $this->db->query('select siswa.*, kelas.kode_kelas from siswa join kelas on siswa.kelas=kelas.id_kelas order by nis');
    }
    function insert_siswa($table, $data){
        $this->db->insert($table, $data);
    }
    function update_siswa($table, $data, $where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_siswa($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Kelas
    function list_kelas(){
        //return $this->db->get('kelas');
        $this->db->select('kelas.*, jurusan.*');
        $this->db->from('kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan=kelas.jurusan');
        $this->db->order_by('kode_kelas');
        $query = $this->db->get();
        return $query;
    }
    function insert_kelas($table, $data){
        $this->db->insert($table, $data);
    }
    function update_kelas($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_kelas($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function pilih_kelas($where){
        $this->db->where($where);
        return $this->db->get('kelas');
    }
    //Jurusan
    function list_jurusan(){
        return $this->db->get('jurusan');
    }
    function insert_jurusan($table, $data){
        $this->db->insert($table, $data);
    }
    function update_jurusan($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_jurusan($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    // tampil hanya kelas
    function perkelas(){
        return $this->db->query('SELECT kelas FROM kelas GROUP BY kelas');
    }
    // tampil perkelas jurusan
    function perkelasjurusan($where){
        $this->db->select('id_kelas, kode_kelas');
        $this->db->from('kelas');
        $this->db->where($where);
        $this->db->order_by('kode_kelas', 'ASC');
        return $this->db->get();
    }

    // tampil perkelas  guru
    function perkelas_g($id){
        return $this->db->query('select kelas.* from soal, guru, kelas where guru.id_guru='.$id.' and soal.guru=guru.id_guru and soal.kelas=kelas.id_kelas group by kode_kelas');
    }
    // tampil perkelas jurusan - guru
    function perkelasjurusan_g($kelas, $idguru){
        return $this->db->query('select kelas.* from soal, guru, kelas where guru.id_guru='.$idguru.' and kelas.kelas='.$kelas.' and soal.guru=guru.id_guru and soal.kelas=kelas.id_kelas group by kode_kelas');
    }

    //Soal
    //Tampil Soal Admin
    function soal_admin($pjk, $mapel){
        //return $this->db->get_where('soal', $where);
        return $this->db->query('select soal.*, kelas.id_kelas, kelas.kode_kelas, guru.id_guru, guru.nama, guru.mapel from soal, kelas, guru where soal.kelas='.$pjk.' and soal.mapel='.$mapel.' and soal.kelas=kelas.id_kelas and soal.guru=guru.id_guru');
    }

    //Tampil Soal Guru
    function soal_guru($idguru, $pkj){
        //return $this->db->get_where('soal, guru, kelas', $where);
        return $this->db->query('select soal.*, guru.nama from soal, guru, kelas where guru.id_guru='.$idguru.' and kelas.id_kelas='.$pkj.' and soal.guru=guru.id_guru and soal.kelas=kelas.id_kelas');
    }

    //Tambah soal tanpa media
    function in_soal_nomedia($table, $data){
        $this->db->insert($table, $data);
    }

    //Tambah soal dengan media
    function in_soal_media($table, $data){
        $this->db->insert($table, $data);
    }

    //Update soal tanpa media
    function up_soal_nomedia($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    //Update soal dengan media
    function up_soal_media($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //get soal by id
    function get_soal_by_id($where){
        $this->db->join('kelas', 'soal.kelas=kelas.id_kelas');
        $this->db->join('guru', 'soal.guru=guru.id_guru');
        $this->db->join('mapel', 'soal.mapel=mapel.id_mapel');
        return $this->db->get_where('soal', $where);
    }


    //Tampil kelas
    function vkelas($where){
        return $this->db->get_where('kelas', $where);
    }

    //Ujian
    function list_ujian(){
        $this->db->select('ujian.*, kelas.id_kelas, kelas.kode_kelas, mapel.*, guru.id_guru, guru.nama');
        $this->db->from('ujian');
        $this->db->join('kelas', 'ujian.id_kelas=kelas.id_kelas');
        $this->db->join('mapel', 'ujian.id_mapel=mapel.id_mapel');
        $this->db->join('guru', 'ujian.id_guru=guru.id_guru');
        return $this->db->get();
    }
    //Tambah ujian
    function t_ujian($table, $data){
        $this->db->insert($table, $data);
    }
    //Edit ujian
    function e_ujian($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}