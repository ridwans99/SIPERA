<?php

namespace App\Controllers;


use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\RuanganModel;
use App\Models\OrderBarangModel;
use App\Models\OrderRuanganModel;
use App\Models\TransaksiBarangModel;
use App\Models\TransaksiRuangModel;

class Admin extends BaseController
{
	protected $helpers = ['form', 'date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->user = new \App\Models\UserModel();
		$this->user = new \App\Models\BarangModel();
		$this->user = new \App\Models\RuanganModel();
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
		// return view('welcome_message');
		$data = [
			'title' => 'SIPERA - Admin',
			// 'admin' => $admin
		];
		echo view('admin/login', $data);
	}

	public function index()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'SIPERA - Admin',
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/dashboard', $data);
		echo view('admin/footer');
	}

	public function showUsers()
	{
		// $admin = $this->admin->getAdmin(session('admin_id'));
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		$user = new UserModel();
		$tampildata = $user->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata
			// 'user' => $user,
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/user', $data);
		echo view('admin/footer');
	}

	public function addUsers()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/adduser');
		echo view('admin/footer');
	}

	public function insertUsers()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$data = [
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
			'nrm' => $this->request->getPost('nim'),
			'full_name' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'prodi' => $this->request->getPost('prodi'),
			'angkatan' => $this->request->getPost('angkatan'),
		];

		$user = new UserModel();

		$tambah = $user->tambah($data);

		if ($tambah) {
			return redirect()->to('/admin/users');
		}
	}

	public function editUsers($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$user = new UserModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $user->tampildata($id)
			// 'user' => $user,
			// 'admin' => $admin
		];

		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/edituser', $data);
		echo view('admin/footer');
	}

	public function updateUsers()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$id = $this->request->getPost('user_id');
		$data = [
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
			'nrm' => $this->request->getPost('nrm'),
			'full_name' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'prodi' => $this->request->getPost('prodi'),
			'angkatan' => $this->request->getPost('angkatan'),
		];

		$user = new UserModel();

		$edit = $user->updateUser($data, $id);

		if ($edit) {
			return redirect()->to('/admin/users');
		}
	}

	public function deleteUsers($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$user = new UserModel();
		$hapus = $user->deleteUsers($id);
		if ($hapus) {
			return redirect()->to('/admin/users');
		}
	}

	public function showRuangan()
	{
		// return view('welcome_message');
		$ruangan = new RuanganModel();
		$tampildata = $ruangan->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata
			// 'user' => $user,
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/ruangan', $data);
		echo view('admin/footer');
	}

	public function addRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/addruangan');
		echo view('admin/footer');
	}

	public function insertRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$data = [
			'nama_ruangan' => $this->request->getPost('nama_ruangan'),
			'deskripsi' => $this->request->getPost('deskripsi'),
			'status' => $this->request->getPost('status'),
		];

		$ruangan = new RuanganModel();

		$tambah = $ruangan->tambah($data);

		if ($tambah) {
			return redirect()->to('/admin/ruangan');
		}
	}

	public function editRuangan($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$ruangan = new RuanganModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $ruangan->tampildata($id)
			// 'user' => $user,
			// 'admin' => $admin
		];

		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/editruangan', $data);
		echo view('admin/footer');
	}

	public function updateRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$id = $this->request->getPost('ruangan_id');
		$data = [
			'nama_ruangan' => $this->request->getPost('ruangan'),
			'deskripsi' => $this->request->getPost('deskripsi'),
			'status' => $this->request->getPost('status'),
		];

		$ruangan = new RuanganModel();

		$edit = $ruangan->updateRuangan($data, $id);

		if ($edit) {
			return redirect()->to('/admin/ruangan');
		}
	}

	public function deleteRuangan($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$ruangan = new RuanganModel();
		$hapus = $ruangan->deleteRuangan($id);
		if ($hapus) {
			return redirect()->to('/admin/ruangan');
		}
	}

	public function showBarang()
	{
		// return view('welcome_message');
		$barang = new BarangModel();
		$tampildata = $barang->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata
			// 'user' => $user,
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/barang', $data);
		echo view('admin/footer');
	}

	public function addBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/addbarang');
		echo view('admin/footer');
	}

	public function insertBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$data = [
			'nama_barang' => $this->request->getPost('nama_barang'),
			'stock' => $this->request->getPost('stock'),
			'status' => $this->request->getPost('status'),
		];

		$barang = new BarangModel();

		$tambah = $barang->tambah($data);

		if ($tambah) {
			return redirect()->to('/admin/barang');
		}
	}

	public function editBarang($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$barang = new BarangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $barang->tampildata($id)
			// 'user' => $user,
			// 'admin' => $admin
		];

		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/editbarang', $data);
		echo view('admin/footer');
	}

	public function updateBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
		$id = $this->request->getPost('barang_id');
		$data = [
			'nama_barang' => $this->request->getPost('nama_barang'),
			'stock' => $this->request->getPost('stock'),
			'status' => $this->request->getPost('status'),
		];

		$barang = new BarangModel();

		$edit = $barang->updateBarang($data, $id);

		if ($edit) {
			return redirect()->to('/admin/barang');
		}
	}

	public function deleteBarang($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$barang = new BarangModel();
		$hapus = $barang->deleteBarang($id);
		if ($hapus) {
			return redirect()->to('/admin/barang');
		}
	}

	public function showTransaksiRuangan()
	{
		// return view('welcome_message');
		$tr = new TransaksiRuangModel();
		$tampildata = $tr->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata
			// 'user' => $user,
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/transaksiruangan', $data);
		echo view('admin/footer');
	}

	public function addTransaksiRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/addtransaksiruang');
		echo view('admin/footer');
	}

	public function insertTransaksiRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
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

		$truang = new TransaksiRuangModel();

		$tambah = $truang->tambah($data);

		if ($tambah) {
			return redirect()->to('/admin/transaksiruangan');
		}
	}

	public function editTransaksiRuangan($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$truang = new TransaksiRuangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $truang->tampildata($id)
			// 'user' => $user,
			// 'admin' => $admin
		];

		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/edittransaksiruang', $data);
		echo view('admin/footer');
	}

	public function updateTransaksiRuangan()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
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

		$truang = new TransaksiRuangModel();

		$edit = $truang->updateTransaksiRuangan($data, $id);

		if ($edit) {
			return redirect()->to('/admin/transaksiruangan');
		}
	}

	public function deleteTransaksiRuangan($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$truang = new TransaksiRuangModel();
		$hapus = $truang->deleteTransaksiRuangan($id);
		if ($hapus) {
			return redirect()->to('/admin/transaksiruangan');
		}
	}

	public function showTransaksiBarang()
	{
		// return view('welcome_message');
		$tb = new TransaksiBarangModel();
		$tampildata = $tb->tampildata();
		// dd($tampildata);
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tampildata
			// 'user' => $user,
			// 'admin' => $admin
		];
		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/transaksibarang', $data);
		echo view('admin/footer');
	}

	public function addTransaksiBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/addtransaksibarang');
		echo view('admin/footer');
	}

	public function insertTransaksiBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
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

		$tbarang = new TransaksiBarangModel();

		$tambah = $tbarang->tambah($data);

		if ($tambah) {
			return redirect()->to('/admin/transaksibarang');
		}
	}

	public function editTransaksiBarang($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$tbarang = new TransaksiBarangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $tbarang->tampildata($id)
			// 'user' => $user,
			// 'admin' => $admin
		];

		echo view('admin/header', $data);
		echo view('admin/sidebar', $data);
		echo view('admin/edittransaksibarang', $data);
		echo view('admin/footer');
	}

	public function updateTransaksiBarang()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$admin = $this->admin->getAdmin(session('admin_id'));
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

		$tbarang = new TransaksiBarangModel();

		$edit = $tbarang->updateTransaksiBarang($data, $id);

		if ($edit) {
			return redirect()->to('/admin/transaksibarang');
		}
	}

	public function deleteTransaksiBarang($id)
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$tbarang = new TransaksiBarangModel();
		$hapus = $tbarang->deleteTransaksiBarang($id);
		if ($hapus) {
			return redirect()->to('/admin/transaksibarang');
		}
	}
}
