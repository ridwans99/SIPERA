<?php namespace App\Controllers;


use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\RuanganModel;
use App\Models\TransaksiBarangModel;
use App\Models\TransaksiRuangModel;


class User extends BaseController
{
	protected $helpers = ['form','date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
<<<<<<< HEAD
		// $this->user = new UserModel();
		// $this->barang = new BarangModel();
		// $this->ruangan = new RuanganModel();
		// $this->orderbarang = new OrderBarangModel();
		// $this->orderruangan = new OrderRuanganModel();
=======
		$this->user = new UserModel();
		$this->barang = new BarangModel();
		$this->ruangan = new RuanganModel();
		$this->transaksibarang = new TransaksiBarangModel();
		$this->transaksiruangan = new TransaksiRuangModel();
>>>>>>> 15e5d96abc77410bbfbe4bf03347e69c5861c3b5
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
			// echo view('user/menu');
			echo view('user/index');
			echo view('user/footer');
	}

	

	public function formpeminjamanruang()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
			echo view('user/header', $data);
			// echo view('user/menu');
			echo view('user/formpeminjamanruang');
			echo view('user/footer');
	}

	public function peminjamanruang()
	{
		$data = [
			'title' => 'SIPERA - SISTEM PEMINJAMAN RUANGAN DAN BARANG'
		];
			echo view('user/header', $data);
			// echo view('user/menu');
			echo view('user/peminjamanruang');
			echo view('user/footer');
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

	// public function pesanan()
	// {
	// 	$product = $this->product->getProduct();
	// 	$user = $this->user->getUser(session('user_id'));
	// 	$orders = $this->order->GetOrder();
	// 	$array_order = [];
	// 	if (isset($orders)) {
	// 		foreach ($orders as $key => $order) {
	// 			if ($order['user_id'] == session('user_id')) {
	// 				$user = $this->user->getUser($order['user_id']);
	// 				$productuser = $this->product->getProduct($order['product_id']);
	// 				$status = $this->status->getOrderStatus($order['orderstatus_id']);
	// 				$payment = $this->payment->getPayment($order['payment_id']);
	// 				$order['user_id'] = $user['full_name'];
	// 				$order['product_id'] = $productuser['name'];
	// 				$order['orderstatus_id'] = $status['name'];
	// 				array_push($array_order, $order);
	// 			}
	// 		} 
	// 	}
	// 	$lastorder = array(end($array_order));
	// 	$data = [
	// 		'title' => 'Jasa Sosmed ID - User',
	// 		'product' => $product,
	// 		'user' => $user,
	// 		'lastorder' => $lastorder
	// 	];
	// 	if($this->checkLoggedIn()){
	// 		echo view('user/header', $data);
	// 		echo view('user/menu', $data);
	// 		echo view('user/pesanan', $data);
	// 		echo view('user/footer');
	// 	}
	// }

	// public function storeOrders()
	// {
	// 	if($this->checkLoggedIn()){
	// 		$userid = session('user_id');
	// 		$product = $this->request->getPost('produk');
	// 		$productquery = $this->product->getProduct($product);
	// 		$orderstatus = 1;
	// 		$startcount = '';
	// 		$quantity = $this->request->getPost('quantity');
	// 		$message = $this->request->getPost('message');
	// 		$target = $this->request->getPost('target');
	// 		$method = $this->request->getPost('method');
	// 		$harga = $productquery['price'] * $quantity / 1000;

	// 		$datapayment = [
	// 			'user_id' => $userid,
	// 			'amounts' => $harga,
	// 			'payment_method' => $method,
	// 			'customer_confirmed' => 0,
	// 			'admin_confirmed' => 0,
	// 			'attachment_path' => '',
	// 			'created_at' => date("Y-m-d H:i:s"),
	// 			'updated_at' => date("Y-m-d H:i:s")

	// 		];
	// 		$simpanpayment = $this->payment->insertPayment($datapayment);
	// 		$payment = $this->payment->getPayment();
	// 		$lastpayment = end($payment);
	// 		$payment_id = $lastpayment['payment_id'];
	// 		$data = [
	// 			'user_id' => $userid,
	// 			'product_id' => $product,
	// 			'orderstatus_id' => $orderstatus,
	// 			'payment_id' => $payment_id,
	// 			'start_count' => $startcount,
	// 			'quantity' => $quantity,
	// 			'total_price' => $harga,
	// 			'target_link' => $target,
	// 			'additional_message' => $message,
	// 			'created_at' => date("Y-m-d H:i:s"),
	// 			'updated_at' => date("Y-m-d H:i:s")

	// 		];
	// 		$simpan = $this->order->insertOrder($data);
	// 		if($simpan) {
	// 			return redirect()->to(base_url('/user/riwayatpemesanan')); 
	// 		}
	// 	}
	// }

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
