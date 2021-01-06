<?php

namespace App\Controllers;


use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\RuanganModel;
use App\Models\TransaksiBarangModel;
use App\Models\TransaksiRuangModel;
use App\Models\InputModel;
use App\Models\Day1Model;
use App\Models\Day2Model;
use App\Models\Day3Model;
use App\Models\Day4Model;
use App\Models\Day5Model;

class Admin extends BaseController
{
	protected $helpers = ['form', 'date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->admin = new AdminModel();
		$this->user = new UserModel();
		$this->barang = new BarangModel();
		$this->ruangan = new RuanganModel();
		$this->transaksibarang = new TransaksiBarangModel();
		$this->transaksiruangan = new TransaksiRuangModel();
		$this->input = new InputModel();
		$this->day1 = new Day1Model();
		$this->day2 = new Day2Model();
		$this->day3 = new Day3Model();
		$this->day4 = new Day4Model();
		$this->day5 = new Day5Model();
		// $this->user = new \App\Models\UserModel();
		// $this->user = new \App\Models\BarangModel();
		// $this->user = new \App\Models\RuanganModel();
	}

	public function checkLoggedIn()
	{
		if (session('admin_logged_in') == true) {
			return true;
		}
		header("Location: /admin/login");
		exit;
	}

	public function login()
	{
		$array_items = array('admin_id', 'admin_logged_in');
		$this->session->remove($array_items);
		$data = [
			'title' => 'SIPERA - Login Admin'
		];

		echo view('admin/headerlogin', $data);
		echo view('admin/login');
	}

	public function index()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$data = [
			'title' => 'SIPERA - Admin',
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/dashboard', $data);
			echo view('admin/footer');
		}
	}

	public function showUsers()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$user = $this->user->getUser();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - Admin',
				'user' => $user,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/user', $data);
			echo view('admin/footer');
		}
	}

	public function addUsers()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/adduser');
			echo view('admin/footer');
		}
	}

	public function insertUsers()
	{
		if ($this->checkLoggedIn()) {
			$user_id = $this->request->getPost('user_id');
			$user = $this->user->getUser($user_id);
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			$nrm = $this->request->getPost('nrm');
			$full_name = $this->request->getPost('full_name');
			$jenis_kelamin = $this->request->getPost('jenis_kelamin');
			$prodi = $this->request->getPost('prodi');
			$angkatan = $this->request->getPost('angkatan');
			$data = [
				'username' => $username,
				'password' => $password,
				'nrm' => $nrm,
				'full_name' => $full_name,
				'jenis_kelamin' => $jenis_kelamin,
				'prodi' => $prodi,
				'angkatan' => $angkatan,
			];
			$simpan = $this->user->insertUser($data);
			if ($simpan) {
				return redirect()->to(base_url('/admin/users'));
			}
		}
	}

	public function editUsers($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$user = $this->user->getUser($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'user' => $user,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/edituser', $data);
			echo view('admin/footer');
		}
	}

	public function updateUsers()
	{
		if ($this->checkLoggedIn()) {
			$user_id = $this->request->getPost('user_id');
			$user = $this->user->getUser($user_id);
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			$nrm = $this->request->getPost('nrm');
			$full_name = $this->request->getPost('full_name');
			$jenis_kelamin = $this->request->getPost('jenis_kelamin');
			$prodi = $this->request->getPost('prodi');
			$angkatan = $this->request->getPost('angkatan');
			$data = [
				'username' => $username,
				'password' => $password,
				'nrm' => $nrm,
				'full_name' => $full_name,
				'jenis_kelamin' => $jenis_kelamin,
				'prodi' => $prodi,
				'angkatan' => $angkatan,
			];
			$simpan = $this->user->updateUser($data, $user_id);
			if ($simpan) {
				return redirect()->to(base_url('/admin/users'));
			}
		}
	}

	public function deleteUsers($id)
	{
		// return view('welcome_message');
		if ($this->checkLoggedIn()) {
			$hapus = $this->user->deleteUser($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/users'));
			}
		}
	}

	public function showRuangan()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$tampildata = $this->ruangan->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata,
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/ruangan', $data);
			echo view('admin/footer');
		}
	}

	public function addRuangan()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addruangan', $data);
			echo view('admin/footer');
		}
	}

	public function insertRuangan()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'nama_ruangan' => $this->request->getPost('nama_ruangan'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'status' => $this->request->getPost('status'),
			];
			$tambah = $this->ruangan->tambah($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/ruangan'));
			}
		}
	}

	public function editRuangan($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'tampildata' => $this->ruangan->tampildata($id),
				// 'user' => $user,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editruangan', $data);
			echo view('admin/footer');
		}
	}

	public function updateRuangan()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('ruangan_id');
			$data = [
				'nama_ruangan' => $this->request->getPost('ruangan'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'status' => $this->request->getPost('status'),
			];
			$edit = $this->ruangan->updateRuangan($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/ruangan'));
			}
		}
	}

	public function deleteRuangan($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->ruangan->deleteRuangan($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/ruangan'));
			}
		}
	}

	public function showBarang()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$tampildata = $this->barang->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata,
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/barang', $data);
			echo view('admin/footer');
		}
	}

	public function addBarang()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addbarang', $data);
			echo view('admin/footer');
		}
	}

	public function insertBarang()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'nama_barang' => $this->request->getPost('nama_barang'),
				'stock' => $this->request->getPost('stock'),
				'status' => $this->request->getPost('status'),
			];
			$tambah = $this->barang->tambah($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/barang'));
			}
		}
	}

	public function editBarang($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'tampildata' => $this->barang->tampildata($id),
				'admin' => $admin
			];

			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editbarang', $data);
			echo view('admin/footer');
		}
	}

	public function updateBarang()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('barang_id');
			$data = [
				'nama_barang' => $this->request->getPost('nama_barang'),
				'stock' => $this->request->getPost('stock'),
				'status' => $this->request->getPost('status'),
			];
			$edit = $this->barang->updateBarang($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/barang'));
			}
		}
	}

	public function deleteBarang($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->barang->deleteBarang($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/barang'));
			}
		}
	}

	public function showTransaksiRuangan()
	{
		$array_ruangan = [];
		$admin = $this->admin->getAdmin(session('admin_id'));
		$tampildata = $this->transaksiruangan->tampildata();
		foreach ($tampildata as $key => $ruangan) {
			$query = $this->user->getUser($ruangan['user_id']);
			$query2 = $this->ruangan->tampildata($ruangan['ruangan_id']);
			$ruangan['user_id'] =  $query["full_name"];
			$ruangan['ruangan_id'] =  $query2["nama_ruangan"];
			array_push($array_ruangan, $ruangan);
		}
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $array_ruangan,
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/transaksiruangan', $data);
			echo view('admin/footer');
		}
	}

	public function addTransaksiRuangan()
	{
		$nama = $this->user->getUser();
		$ruangan = $this->ruangan->tampildata();
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin,
				'nama' => $nama,
				'ruangan' => $ruangan
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addtransaksiruang', $data);
			echo view('admin/footer');
		}
	}

	public function insertTransaksiRuangan()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'user_id' => $this->request->getPost('nama'),
				'ruangan_id' => $this->request->getPost('ruang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$tambah = $this->transaksiruangan->tambah($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/transaksiruangan'));
			}
		}
	}

	public function editTransaksiRuangan($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'tampildata' => $this->transaksiruangan->tampildata($id),
				'admin' => $admin
			];

			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/edittransaksiruang', $data);
			echo view('admin/footer');
		}
	}

	public function updateTransaksiRuangan()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('orderruangan_id');
			$data = [
				'user_id' => $this->request->getPost('nama'),
				'ruangan_id' => $this->request->getPost('ruang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$edit = $this->transaksiruangan->updateTransaksiRuangan($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/transaksiruangan'));
			}
		}
	}

	public function deleteTransaksiRuangan($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->transaksiruangan->deleteTransaksiRuangan($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/transaksiruangan'));
			}
		}
	}

	public function showTransaksiBarang()
	{
		$array_barang = [];
		$admin = $this->admin->getAdmin(session('admin_id'));
		$tampildata = $this->transaksibarang->tampildata();

		foreach ($tampildata as $key => $barang) {
			// dd($barang);
			$query = $this->user->getUser($barang['user_id']);
			$query2 = $this->barang->tampildata($barang['barang_id']);
			$barang['user_id'] = $query["full_name"];
			$barang['barang_id'] = $query2["nama_barang"];
			array_push($array_barang, $barang);
		}
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $array_barang,
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/transaksibarang', $data);
			echo view('admin/footer');
		}
	}

	public function addTransaksiBarang()
	{
		$nama = $this->user->getUser();
		$barang = $this->barang->tampildata();
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin,
				'nama' => $nama,
				'barang' => $barang
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addtransaksibarang', $data);
			echo view('admin/footer');
		}
	}

	public function insertTransaksiBarang()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'user_id' => $this->request->getPost('nama'),
				'barang_id' => $this->request->getPost('barang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$tambah = $this->transaksibarang->tambah($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/transaksibarang'));
			}
		}
	}

	public function editTransaksiBarang($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'tampildata' => $this->transaksibarang->tampildata($id),
				'admin' => $admin
			];

			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/edittransaksibarang', $data);
			echo view('admin/footer');
		}
	}

	public function updateTransaksiBarang()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('orderbarang_id');
			$data = [
				'user_id' => $this->request->getPost('nama'),
				'barang_id' => $this->request->getPost('barang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$edit = $this->transaksibarang->updateTransaksiBarang($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/transaksibarang'));
			}
		}
	}

	public function deleteTransaksiBarang($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->transaksibarang->deleteTransaksiBarang($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/transaksibarang'));
			}
		}
	}

	public function showInputData()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$tampildata = $this->input->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata,
			'admin' => $admin
		];
		if ($this->checkLoggedIn()) {
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/inputdata', $data);
			echo view('admin/footer');
		}
	}

	public function addInputData()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addinput', $data);
			echo view('admin/footer');
		}
	}

	public function insertInputData()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'ruangan_id' => $this->request->getPost('ruang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$tambah = $this->input->tambah($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/inputdata'));
			}
		}
	}

	public function editInputData($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'tampildata' => $this->input->tampildata($id),
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editinput', $data);
			echo view('admin/footer');
		}
	}

	public function updateInputData()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('input_id');
			$data = [
				'ruangan_id' => $this->request->getPost('ruang'),
				'tgl_pinjam' => $this->request->getPost('tanggal'),
				'jam_mulai' => $this->request->getPost('mulai'),
				'jam_akhir' => $this->request->getPost('selesai'),
				'nama_dosen' => $this->request->getPost('dosen'),
				'mata_kuliah' => $this->request->getPost('matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'status' => $this->request->getPost('status'),
			];
			$edit = $this->input->updateInputData($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/inputdata'));
			}
		}
	}

	public function deleteInputData($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->input->deleteInputData($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/inputdata'));
			}
		}
	}

	public function showDay1()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$day1 = $this->day1->getDay1();
			// dd($tampildata);
			$data = [
				'title' => 'SIPERA - Admin',
				'day1' => $day1,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/senin', $data);
			echo view('admin/footer');
		}
	}

	public function addDay1()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addsenin', $data);
			echo view('admin/footer');
		}
	}

	public function insertDay1()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$tambah = $this->day1->insertDay1($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/senin'));
			}
		}
	}

	public function editDay1($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$day1 = $this->day1->getDay1($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'day1' => $day1,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editsenin', $data);
			echo view('admin/footer');
		}
	}

	public function updateDay1()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('day1_id');
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$edit = $this->day1->updateDay1($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/senin'));
			}
		}
	}

	public function deleteDay1($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->day1->deleteDay1($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/senin'));
			}
		}
	}

	public function mengosongkanRuanganDay1()
	{
		if ($this->checkLoggedIn()) {
			$day1 = $this->day1->getDay1();
			foreach ($day1 as $key => $d1) {
				$data = [
					'waktu_perkuliahan' => $d1['waktu_perkuliahan'],
					'ruangan1' => "",
					'ruangan2' => "",
					'ruangan3' => "",
					'ruangan4' => "",
					'ruangan5' => "",
					'ruangan6' => "",
					'ruangan7' => "",
					'ruangan8' => "",
					'ruangan9' => "",
					'ruangan10' => "",
				];
				$mengosongkanruangan = $this->day1->updateDay1($data, $d1['day1_id']);
			}
				// if ($mengosongkanruangan) {
					return redirect()->to(base_url('/admin/senin'));
				// }
		}
	}

	public function showDay2()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$day2 = $this->day2->getDay2();
			// dd($tampildata);
			$data = [
				'title' => 'SIPERA - Admin',
				'day2' => $day2,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/selasa', $data);
			echo view('admin/footer');
		}
	}

	public function addDay2()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addselasa', $data);
			echo view('admin/footer');
		}
	}

	public function insertDay2()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$tambah = $this->day2->insertDay2($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/selasa'));
			}
		}
	}

	public function editDay2($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$day2 = $this->day2->getDay2($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'day2' => $day2,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editselasa', $data);
			echo view('admin/footer');
		}
	}

	public function updateDay2()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('day2_id');
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$edit = $this->day2->updateDay2($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/selasa'));
			}
		}
	}

	public function deleteDay2($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->day2->deleteDay2($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/selasa'));
			}
		}
	}

	public function mengosongkanRuanganDay2()
	{
		if ($this->checkLoggedIn()) {
			$day2 = $this->day2->getDay2();
			foreach ($day2 as $key => $d2) {
				$data = [
					'waktu_perkuliahan' => $d2['waktu_perkuliahan'],
					'ruangan1' => "",
					'ruangan2' => "",
					'ruangan3' => "",
					'ruangan4' => "",
					'ruangan5' => "",
					'ruangan6' => "",
					'ruangan7' => "",
					'ruangan8' => "",
					'ruangan9' => "",
					'ruangan10' => "",
				];
				$mengosongkanruangan = $this->day2->updateDay2($data, $d2['day2_id']);
			}
				// if ($mengosongkanruangan) {
					return redirect()->to(base_url('/admin/selasa'));
				// }
		}
	}

	public function showDay3()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$day3 = $this->day3->getDay3();
			// dd($tampildata);
			$data = [
				'title' => 'SIPERA - Admin',
				'day3' => $day3,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/rabu', $data);
			echo view('admin/footer');
		}
	}

	public function addDay3()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addrabu', $data);
			echo view('admin/footer');
		}
	}

	public function insertDay3()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$tambah = $this->day3->insertDay3($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/rabu'));
			}
		}
	}

	public function editDay3($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$day3 = $this->day3->getDay3($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'day3' => $day3,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editrabu', $data);
			echo view('admin/footer');
		}
	}

	public function updateDay3()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('day3_id');
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$edit = $this->day3->updateDay3($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/rabu'));
			}
		}
	}

	public function deleteDay3($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->day1->deleteDay1($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/rabu'));
			}
		}
	}

	public function mengosongkanRuanganDay3()
	{
		if ($this->checkLoggedIn()) {
			$day3 = $this->day3->getDay3();
			foreach ($day3 as $key => $d3) {
				$data = [
					'waktu_perkuliahan' => $d3['waktu_perkuliahan'],
					'ruangan1' => "",
					'ruangan2' => "",
					'ruangan3' => "",
					'ruangan4' => "",
					'ruangan5' => "",
					'ruangan6' => "",
					'ruangan7' => "",
					'ruangan8' => "",
					'ruangan9' => "",
					'ruangan10' => "",
				];
				$mengosongkanruangan = $this->day3->updateDay3($data, $d3['day3_id']);
			}
				// if ($mengosongkanruangan) {
					return redirect()->to(base_url('/admin/rabu'));
				// }
		}
	}

	public function showDay4()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$day4 = $this->day4->getDay4();
			// dd($tampildata);
			$data = [
				'title' => 'SIPERA - Admin',
				'day4' => $day4,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/kamis', $data);
			echo view('admin/footer');
		}
	}

	public function addDay4()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addkamis', $data);
			echo view('admin/footer');
		}
	}

	public function insertDay4()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$tambah = $this->day4->insertDay4($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/kamis'));
			}
		}
	}

	public function editDay4($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$day4 = $this->day4->getDay4($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'day4' => $day4,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editkamis', $data);
			echo view('admin/footer');
		}
	}

	public function updateDay4()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('day4_id');
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$edit = $this->day4->updateDay4($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/kamis'));
			}
		}
	}

	public function deleteDay4($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->day4->deleteDay4($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/kamis'));
			}
		}
	}

	public function mengosongkanRuanganDay4()
	{
		if ($this->checkLoggedIn()) {
			$day4 = $this->day4->getDay4();
			foreach ($day4 as $key => $d4) {
				$data = [
					'waktu_perkuliahan' => $d4['waktu_perkuliahan'],
					'ruangan1' => "",
					'ruangan2' => "",
					'ruangan3' => "",
					'ruangan4' => "",
					'ruangan5' => "",
					'ruangan6' => "",
					'ruangan7' => "",
					'ruangan8' => "",
					'ruangan9' => "",
					'ruangan10' => "",
				];
				$mengosongkanruangan = $this->day4->updateDay4($data, $d4['day4_id']);
			}
				// if ($mengosongkanruangan) {
					return redirect()->to(base_url('/admin/kamis'));
				// }
		}
	}

	public function showDay5()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		if ($this->checkLoggedIn()) {
			$day5 = $this->day5->getDay5();
			// dd($tampildata);
			$data = [
				'title' => 'SIPERA - Admin',
				'day5' => $day5,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/jumat', $data);
			echo view('admin/footer');
		}
	}

	public function addDay5()
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'SIPERA - Admin',
				'admin' => $admin
			];
			helper('form');
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/addjumat', $data);
			echo view('admin/footer');
		}
	}

	public function insertDay5()
	{
		if ($this->checkLoggedIn()) {
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$tambah = $this->day5->insertDay5($data);
			if ($tambah) {
				return redirect()->to(base_url('/admin/jumat'));
			}
		}
	}

	public function editDay5($id)
	{
		if ($this->checkLoggedIn()) {
			$admin = $this->admin->getAdmin(session('admin_id'));
			$day5 = $this->day5->getDay5($id);
			$data = [
				'title' => 'SIPERA - Admin',
				'day5' => $day5,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/sidebar', $data);
			echo view('admin/editjumat', $data);
			echo view('admin/footer');
		}
	}

	public function updateDay5()
	{
		if ($this->checkLoggedIn()) {
			$id = $this->request->getPost('day5_id');
			$data = [
				'waktu_perkuliahan' => $this->request->getPost('waktu_perkuliahan'),
				'ruangan1' => $this->request->getPost('ruangan1'),
				'ruangan2' => $this->request->getPost('ruangan2'),
				'ruangan3' => $this->request->getPost('ruangan3'),
				'ruangan4' => $this->request->getPost('ruangan4'),
				'ruangan5' => $this->request->getPost('ruangan5'),
				'ruangan6' => $this->request->getPost('ruangan6'),
				'ruangan7' => $this->request->getPost('ruangan7'),
				'ruangan8' => $this->request->getPost('ruangan8'),
				'ruangan9' => $this->request->getPost('ruangan9'),
				'ruangan10' => $this->request->getPost('ruangan10'),
			];
			$edit = $this->day5->updateDay5($data, $id);
			if ($edit) {
				return redirect()->to(base_url('/admin/jumat'));
			}
		}
	}

	public function deleteDay5($id)
	{
		if ($this->checkLoggedIn()) {
			$hapus = $this->day5->deleteDay5($id);
			if ($hapus) {
				return redirect()->to(base_url('/admin/jumat'));
			}
		}
	}

	public function mengosongkanRuanganDay5()
	{
		if ($this->checkLoggedIn()) {
			$day5 = $this->day5->getDay5();
			foreach ($day5 as $key => $d5) {
				$data = [
					'waktu_perkuliahan' => $d5['waktu_perkuliahan'],
					'ruangan1' => "",
					'ruangan2' => "",
					'ruangan3' => "",
					'ruangan4' => "",
					'ruangan5' => "",
					'ruangan6' => "",
					'ruangan7' => "",
					'ruangan8' => "",
					'ruangan9' => "",
					'ruangan10' => "",
				];
				$mengosongkanruangan = $this->day5->updateDay5($data, $d5['day5_id']);
			}
				// if ($mengosongkanruangan) {
					return redirect()->to(base_url('/admin/jumat'));
				// }
		}
	}

	public function submitLogin()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if (isset($_SESSION['admin_logged_in'])) {
			return redirect()->to(base_url('/admin'));
		}

		if (!isset($_SESSION['admin_logged_in']) && (empty($username) || empty($password))) {
			// $this->notif->message('Data login tidak lengkap', 'danger');
			return redirect()->to(base_url('/admin/login'));
		}

		if (!isset($_SESSION['admin_logged_in']) && isset($username) && isset($password)) {
			$data = [
				'username' => $username,
				'password' => $password
			];
			$admin = $this->admin->getAdminByUsername($data['username']);
			if (count((array) $admin) > 0) {
				// d($admin);
				if ($admin['password'] !== $data['password']) {
					// $this->notif->message('Password salah', 'danger');
					return redirect()->to(base_url('/admin/login'));
				} else {
					$data_session = array(
						'admin_id' => $admin['admin_id'],
						'username' => $admin['username'],
						'admin_logged_in' => TRUE
					);
					$this->session->set($data_session);
					return redirect()->to(base_url('/admin'));
				}
			} else {
				// $this->notif->message('username atau password anda salah', 'danger');
				return redirect()->to(base_url('/admin/login'));
			}
		}
	}

	public function logout()
	{
		$array_items = array('admin_id', 'admin_logged_in');
		$this->session->remove($array_items);
		return redirect()->to(base_url('/admin/login'));
	}
}
