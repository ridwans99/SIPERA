<?php

namespace App\Controllers;


use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\RuanganModel;
use App\Models\TransaksiBarangModel;
use App\Models\TransaksiRuangModel;
use App\Models\Day1Model;
use App\Models\Day2Model;
use App\Models\Day3Model;
use App\Models\Day4Model;
use App\Models\Day5Model;



class User extends BaseController
{
	protected $helpers = ['form', 'date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->user = new UserModel();
		$this->barang = new BarangModel();
		$this->ruangan = new RuanganModel();
		$this->transaksibarang = new TransaksiBarangModel();
		$this->transaksiruangan = new TransaksiRuangModel();
		$this->day1 = new Day1Model();
		$this->day2 = new Day2Model();
		$this->day3 = new Day3Model();
		$this->day4 = new Day4Model();
		$this->day5 = new Day5Model();
	}

	public function checkLoggedIn()
	{
		if (session('user_logged_in') == true) {
			return true;
		}
		header("Location: /");
		exit;
	}

	public function index()
	{
		$user = $this->user->getUser(session('user_id'));
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		if ($this->checkLoggedIn()) {
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/index');
			echo view('user/footer');
		}
	}

	public function peminjamanbarang()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$tampildata = $this->barang->tampildata();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'tampildata' => $tampildata,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/peminjamanbarang', $data);
			echo view('user/footer');
		}
	}

	public function pemilihanbarang()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/pemilihanbarang');
		echo view('user/footer');
	}

	public function verifikasipeminjamanbarang()
	{
		if ($this->checkLoggedIn()) {
			$user = $this->user->getUser(session('user_id'));
			$nama = $this->user->getUser();
			$barang = $this->barang->tampildata();
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'user' => $user,
				'barang' => $barang,
				'nama' => $nama
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/verifikasipeminjamanbarang', $data);
			echo view('user/footer');
		}
	}

	public function insertPeminjamanBarang()
	{
		if ($this->checkLoggedIn()) {
			$userid = session('user_id');
			$data = [
				'user_id' => $userid,
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
				return redirect()->to(base_url('/user/index'));
			}
		}
	}

	public function pengembalianbarang()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/pengembalianbarang');
		echo view('user/footer');
	}

	public function verifikasipengembalianbarang()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/verifikasipengembalianbarang');
		echo view('user/footer');
	}

	public function showDay1()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$day1 = $this->day1->getDay1();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'day1' => $day1,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/peminjamanruang', $data);
			echo view('user/footer');
		}
	}

	public function showDay2()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$day2 = $this->day2->getDay2();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'day2' => $day2,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/selasa', $data);
			echo view('user/footer');
		}
	}

	public function showDay3()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$day3 = $this->day3->getDay3();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'day3' => $day3,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/rabu', $data);
			echo view('user/footer');
		}
	}

	public function showDay4()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$day4 = $this->day4->getDay4();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'day4' => $day4,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/kamis', $data);
			echo view('user/footer');
		}
	}

	public function showDay5()
	{
		$user = $this->user->getUser(session('user_id'));
		if ($this->checkLoggedIn()) {
			$day5 = $this->day5->getDay5();
			// dd($getUser);
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'day5' => $day5,
				'user' => $user
			];
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/jumat', $data);
			echo view('user/footer');
		}
	}

	public function formPeminjamanRuangan()
	{
		if ($this->checkLoggedIn()) {
			$user = $this->user->getUser(session('user_id'));
			$nama = $this->user->getUser();
			$ruangan = $this->ruangan->tampildata();
			$data = [
				'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
				'nama' => $nama,
				'ruangan' => $ruangan,
				'user' => $user
			];
			// helper('form');
			echo view('user/header', $data);
			echo view('user/menu');
			echo view('user/formpeminjamanruang', $data);
			echo view('user/footer');
		}
	}

	public function insertPeminjamanRuangan()
	{
		if ($this->checkLoggedIn()) {
			$userid = session('user_id');
			$data = [
				'user_id' => $userid,
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
				return redirect()->to(base_url('/user/index'));
			}
		}
	}


	public function submitLogin()
	{
		$nrm = $this->request->getPost('nrm');
		$password = $this->request->getPost('password');

		if (isset($_SESSION['user_logged_in'])) {
			return redirect()->to(base_url('/user'));
		}

		if (!isset($_SESSION['user_logged_in']) && (empty($nrm) || empty($password))) {
			// $this->notif->message('Data login tidak lengkap', 'danger');
			return redirect()->to(base_url('/'));
		}

		if (!isset($_SESSION['user_logged_in']) && isset($nrm) && isset($password)) {
			$data = [
				'nrm' => $nrm,
				'password' => $password
			];
			$user = $this->user->getUserByNRM($data['nrm']);
			if (count((array) $user) > 0) {
				// d($user);
				if ($user['password'] !== $data['password']) {
					// $this->notif->message('Password salah', 'danger');
					return redirect()->to(base_url('/'));
				} else {
					$data_session = array(
						'user_id' => $user['user_id'],
						'nrm' => $user['nrm'],
						'user_logged_in' => TRUE
					);
					$this->session->set($data_session);
					return redirect()->to(base_url('/user'));
				}
			} else {
				// $this->notif->message('username atau password anda salah', 'danger');
				return redirect()->to(base_url('/'));
			}
		}
	}

	public function logout()
	{
		$array_items = array('user_id', 'user_logged_in');
		$this->session->remove($array_items);
		return redirect()->to(base_url('/'));
	}
}
