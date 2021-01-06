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

	// public function checkLoggedIn() {
	// 	if (session('user_logged_in') == true) {
	// 		return true;
	// 	}
	// 	header("Location: /");
	// 	exit;
	// } 

	public function index()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/index');
		echo view('user/footer');
	}


	// public function formpeminjamanruang()
	// {
	// 	$data = [
	// 		'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
	// 	];
	// 	echo view('user/header', $data);
	// 	echo view('user/menu');
	// 	echo view('user/formpeminjamanruang');
	// echo view('user/footer');
	// }

	public function peminjamanbarang()
	{
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$tampildata = $this->barang->tampildata();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'tampildata' => $tampildata,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/peminjamanbarang', $data);
		echo view('user/footer');
		// }
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
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/verifikasipeminjamanbarang');
		echo view('user/footer');
	}

	public function insertPeminjamanBarang()
	{
		// if ($this->checkLoggedIn()) {
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
			return redirect()->to(base_url('/user/index'));
		}
		// }
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
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$day1 = $this->day1->getDay1();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'day1' => $day1,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/peminjamanruang', $data);
		echo view('user/footer');
		// }
	}

	public function showDay2()
	{
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$day2 = $this->day2->getDay2();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'day2' => $day2,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/selasa', $data);
		echo view('user/footer');
		// }
	}

	public function showDay3()
	{
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$day3 = $this->day3->getDay3();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'day3' => $day3,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/rabu', $data);
		echo view('user/footer');
		// }
	}

	public function showDay4()
	{
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$day4 = $this->day4->getDay4();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'day4' => $day4,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/kamis', $data);
		echo view('user/footer');
		// }
	}

	public function showDay5()
	{
		// $user = $this->user->getUser(session('user_id'));
		// if($this->checkLoggedIn()){
		$day5 = $this->day5->getDay5();
		// dd($getUser);
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			'day5' => $day5,
			// 'user' => $user
		];
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/jumat', $data);
		echo view('user/footer');
		// }
	}

	// public function daftarLayanan()
	// {
	// 	$products = $this->product->getProduct();
	// 	$user = $this->user->getUser(session('user_id'));
	// 	$array_product = [];
	// 	if (isset($products)) {
	// 		foreach ($products as $key => $product) {
	// 			$category = $this->category->getProductCategory($product['product_category_id']);
	// 			$name = $category['name'];
	// 			$product['product_category_id'] = $name;
	// 			array_push($array_product, $product);
	// 		}
	// 	}

	// 	$data = [
	// 		'title' => 'Jasa Sosmed ID - User',
	// 		'product' => $array_product,
	// 		'user' => $user
	// 	];
	// 	if($this->checkLoggedIn()){
	// 		echo view('user/header', $data);
	// 		echo view('user/menu', $data);
	// 		echo view('user/daftarlayanan', $data);
	// 		echo view('user/footer');
	// 	}
	// }

	// public function pengumuman()
	// {
	// 	$announcement = $this->announcement->getAnnouncement();
	// 	$user = $this->user->getUser(session('user_id'));
	// 	$data = [
	// 		'title' => 'Jasa Sosmed ID - User',
	// 		'announcement' => $announcement,
	// 		'user' => $user
	// 	];
	// 	if($this->checkLoggedIn()){
	// 		echo view('user/header', $data);
	// 		echo view('user/menu', $data);
	// 		echo view('user/pengumuman', $data);
	// 		echo view('user/footer');
	// 	}
	// }

	public function formPeminjamanRuangan()
	{
		// if($this->checkLoggedIn()){
		// 	$user = $this->user->getUser(session('user_id'));
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG',
			// 'user' => $user
		];
		// helper('form');
		echo view('user/header', $data);
		echo view('user/menu');
		echo view('user/formpeminjamanruang');
		echo view('user/footer');
		// }
	}

	public function insertPeminjamanRuangan()
	{
		// if ($this->checkLoggedIn()) {
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
			return redirect()->to(base_url('/user/index'));
		}
		// }
	}

	// public function riwayatPemesanan()
	// {
	// 	$orders = $this->order->GetOrder();
	// 	$user = $this->user->getUser(session('user_id'));
	// 	$array_order = [];
	// 	if (isset($orders)) {
	// 		foreach ($orders as $key => $order) {
	// 			if ($order['user_id'] == session('user_id')) {
	// 				$user = $this->user->getUser($order['user_id']);
	// 				$product = $this->product->getProduct($order['product_id']);
	// 				$status = $this->status->getOrderStatus($order['orderstatus_id']);
	// 				$payment = $this->payment->getPayment($order['payment_id']);
	// 				$order['user_id'] = $user['full_name'];
	// 				$order['product_id'] = $product['name'];
	// 				$order['orderstatus_id'] = $status['name'];
	// 				array_push($array_order, $order);
	// 			}
	// 		} 
	// 	}
	// 	$data = [
	// 		'title' => 'Jasa Sosmed ID - User',
	// 		'order' => $array_order,
	// 		'user' => $user
	// 	];
	// 	if($this->checkLoggedIn()){
	// 		echo view('user/header', $data);
	// 		echo view('user/menu', $data);
	// 		echo view('user/riwayatpemesanan', $data);
	// 		echo view('user/footer');
	// 	}
	// }

	// public function konfirmasiPembayaran($id)
	// {
	// 	$user = $this->user->getUser(session('user_id'));
	// 	$order = $this->order->GetOrder($id);
	// 	$hargauser = $order['total_price']-rand(1,999);
	// 	$payment = $this->payment->getPayment($order['payment_id']);
	// 	$data = [
	// 		'title' => 'Jasa Sosmed ID - User',
	// 		'order' => $order,
	// 		'user' => $user,
	// 		'payment' => $payment,
	// 		'hargauser' => $hargauser

	// 	];
	// 	if($this->checkLoggedIn()){
	// 		echo view('user/header', $data);
	// 		echo view('user/menu', $data);
	// 		echo view('user/konfirmasipembayaran', $data);
	// 		echo view('user/footer');
	// 	}
	// }

	// public function updatePembayaran()
	// {
	// 	if($this->checkLoggedIn()){
	// 		$id = $this->request->getPost('order_id');
	// 		$paymentid = $this->request->getPost('payment_id');
	// 		$image = $this->request->getFile('file_upload');
	// 		$hargauser = $this->request->getPost('hargauser');
	// 		$image->move('uploads/buktibayar');
	// 		$imgname = $image->getName();

	// 		$dataorder = [
	// 			'total_price' => $hargauser,
	// 			'orderstatus_id' => 4,
	// 			'updated_at' => date("Y-m-d H:i:s")
	// 		];
	// 		$datapayment = [
	// 			'customer_confirmed' => 1,
	// 			'amounts' => $hargauser,
	// 			'attachment_path' => $imgname,
	// 			'updated_at' => date("Y-m-d H:i:s")
	// 		];
	// 		$simpan = $this->order->updateOrder($dataorder, $id);
	// 		$simpanpayment = $this->payment->updatePayment($datapayment, $paymentid);
	// 		if($simpan && $simpanpayment) {
	// 			return redirect()->to(base_url('/user/riwayatpemesanan')); 
	// 		}
	// 	}
	// }

	// public function login(){
	// 	$googletoken = $this->request->getPost('google-token');

	// 	$result = file_get_contents('https://oauth2.googleapis.com/tokeninfo?id_token='.$googletoken);
	// 	$result_json = json_decode($result, true);

	// 	if (isset($result_json['email'])){
	// 		$email = $result_json['email'];
	// 		$name = $result_json['name'];
	// 		$picture = $result_json['picture'];
	// 		$user = $this->user->getUserByEmail($email);
	// 		if (count((array) $user) > 0) {
	// 			$data_session = array(
	// 				'user_id' => $user['user_id'],
	// 				'full_name' => $user['full_name'],
	// 				'user_logged_in' => TRUE
	// 			);
	// 			$this->session->set($data_session);

	// 		} else {
	// 			$full_name = $name;
	// 			$email = $email;

	// 			$data = [
	// 				'full_name' => $full_name,
	// 				'email' => $email,
	// 				'created_at' => date("Y-m-d H:i:s"),
	// 				'updated_at' => date("Y-m-d H:i:s")

	// 			];
	// 			$simpan = $this->user->insertUser($data);
	// 			$user = $this->user->getUserByEmail($email);
	// 			$data_session = array(
	// 				'user_id' => $user['user_id'],
	// 				'full_name' => $user['full_name'],
	// 				'user_logged_in' => TRUE
	// 			);
	// 			$this->session->set($data_session);
	// 		}
	// 	}
	// }
	// public function login()
	// {
	// 	$array_items = array('user_id','user_logged_in');
	// 	$this->session->remove($array_items);
	//     $data = [
	// 		'title' => 'Jasa Sosmed ID - Login Admin'
	// 	];

	// 	echo view('admin/header', $data);
	// 	echo view('admin/login');
	// 	echo view('admin/footer');
	// }

	// public function submitLogin()
	// {
	// 	$username = $this->request->getPost('username');
	// 	$password = $this->request->getPost('password');

	// 	if (isset($_SESSION['user_logged_in'])) {
	// 		return redirect()->to(base_url('/user'));
	// 	}

	// 	if (!isset($_SESSION['user_logged_in']) && (empty($username) || empty($password))){
	// 		// $this->notif->message('Data login tidak lengkap', 'danger');
	// 		return redirect()->to(base_url('/user/login'));
	// 	}

	// 	if (!isset($_SESSION['user_logged_in']) && isset($username) && isset($password)) {
	// 		$data = [
	// 			'username' => $username,
	// 			'password' => $password
	// 		];
	// 		$admin = $this->admin->getAdminByUsername($data['username']);
	// 		if (count((array) $admin) > 0) {
	// 			// d($admin);
	// 			if ($admin['password'] !== $data['password']) {
	// 				// $this->notif->message('Password salah', 'danger');
	// 				return redirect()->to(base_url('/admin/login'));
	// 			} else {
	// 				$data_session = array(
	// 					'admin_id' => $admin['user_id'],
	// 					'username' => $admin['username'],
	// 					'user_logged_in' => TRUE
	// 				);
	// 				$this->session->set($data_session);
	// 				return redirect()->to(base_url('/user'));
	// 			}
	// 		} else {
	// 			// $this->notif->message('username atau password anda salah', 'danger');
	// 			return redirect()->to(base_url('/user/login'));
	// 		}
	// 	}

	// }

	// public function logout(){
	// 	$array_items = array('admin_id','user_logged_in');
	// 	$this->session->remove($array_items);
	// 	return redirect()->to(base_url('/admin/login'));
	// }

}
