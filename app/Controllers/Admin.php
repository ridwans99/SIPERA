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

	// public function __construct()
	// {
	// 	$this->session = session();
	// 	$this->request = \Config\Services::request();
	// 	$this->admin = new AdminModel();
	// 	$this->user = new UserModel();
	// 	$this->barang = new BarangModel();
	// 	$this->ruangan = new RuanganModel();
	// 	$this->orderbarang = new OrderBarangModel();
	// 	$this->orderruangan = new OrderRuanganModel();
	// }

	public function checkLoggedIn()
	{
		if (session('admin_logged_in') == true) {
			return true;
		}
		header("Location: /admin/login");
		exit;
	}

	public function index()
	{

		// $admin = $this->admin->getAdmin(session('admin_id'));
		// $user = $this->user->getUser();
		// $barang = $this->barang->getBarang();
		// $ruangan = $this->ruangan->getRuangan();
		// $orderbarang = $this->barang->getOrderBarang();
		// $orderruangan = $this->ruangan->getOrderRuangan();


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
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $user->tampildata()->getResult(),
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
		$data = [
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
			return redirect()->to('Admin/index');
		}

		helper('form');
		echo view('admin/header');
		echo view('admin/sidebar');
		echo view('admin/adduser');
		echo view('admin/footer');
	}

	public function deleteUsers()
	{
		// return view('welcome_message');
		// if ($this->checkLoggedIn()) {
		// 	$hapus = $this->user->deleteUser($id);
		$uri = service('uri');
		$nim = $uri->getSegment('4');
		$user = new UserModel();
		$user->hapus('$nim');
		return redirect()->to('Admin/index');
	}

	public function showRuangan()
	{

		// $admin = $this->admin->getAdmin(session('admin_id'));
		// $user = $this->user->getUser();
		// $barang = $this->barang->getBarang();
		// $ruangan = $this->ruangan->getRuangan();
		// $orderbarang = $this->barang->getOrderBarang();
		// $orderruangan = $this->ruangan->getOrderRuangan();


		// return view('welcome_message');
		$ruangan = new RuanganModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $ruangan->tampildata()->getResult(),
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

	public function showBarang()
	{

		// $admin = $this->admin->getAdmin(session('admin_id'));
		// $user = $this->user->getUser();
		// $barang = $this->barang->getBarang();
		// $ruangan = $this->ruangan->getRuangan();
		// $orderbarang = $this->barang->getOrderBarang();
		// $orderruangan = $this->ruangan->getOrderRuangan();


		// return view('welcome_message');
		$barang = new BarangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $barang->tampildata()->getResult(),
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

	public function showTransaksiRuangan()
	{

		// $admin = $this->admin->getAdmin(session('admin_id'));
		// $user = $this->user->getUser();
		// $barang = $this->barang->getBarang();
		// $ruangan = $this->ruangan->getRuangan();
		// $orderbarang = $this->barang->getOrderBarang();
		// $orderruangan = $this->ruangan->getOrderRuangan();


		// return view('welcome_message');
		$transaksiruang = new TransaksiRuangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $transaksiruang->tampildata()->getResult(),
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

	public function showTransaksiBarang()
	{

		// $admin = $this->admin->getAdmin(session('admin_id'));
		// $user = $this->user->getUser();
		// $barang = $this->barang->getBarang();
		// $ruangan = $this->ruangan->getRuangan();
		// $orderbarang = $this->barang->getOrderBarang();
		// $orderruangan = $this->ruangan->getOrderRuangan();


		// return view('welcome_message');
		$transaksibarang = new TransaksiBarangModel();
		$data = [
			'title' => 'SIPERA - Admin',
			'tampildata' => $transaksibarang->tampildata()->getResult(),
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
}

// 	public function storeUsers()
// 	{
// 		// return view('welcome_message');
// 		// if ($this->checkLoggedIn()) {
// 		// 	$full_name = $this->request->getPost('full_name');
// 		// 	$email = $this->request->getPost('email');

// 			$data = [
// 				'title' => 'SIPERA - Admin',
// 				// 'full_name' => $full_name,
// 				// 'email' => $email,
// 				// 'created_at' => date("Y-m-d H:i:s"),
// 				// 'updated_at' => date("Y-m-d H:i:s")

// 			];
// 		// 	$simpan = $this->user->insertUser($data);
// 		// 	if ($simpan) {
// 		// 		return redirect()->to(base_url('/admin/users'));
// 		// 	}
// 		// }
// 	}

// 	public function editUsers($id)
// 	{
// 		// return view('welcome_message');
// 		// if ($this->checkLoggedIn()) {
// 		// 	$admin = $this->admin->getAdmin(session('admin_id'));
// 		// 	$user = $this->user->getUser($id);
// 			$data = [
// 				'title' => 'Jasa Sosmed ID - Admin',
// 				// 'user' => $user,
// 				// 'admin' => $admin
// 			];
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/edituser', $data);
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function updateUsers()
// 	{
// 		// return view('welcome_message');
// 		// if ($this->checkLoggedIn()) {
// 		// 	$user_id = $this->request->getPost('user_id');
// 		// 	$user = $this->user->getUser($user_id);
// 		// 	$full_name = $this->request->getPost('full_name');
// 		// 	$email = $this->request->getPost('email');

// 			$data = [
// 				// 'full_name' => $full_name,
// 				// 'email' => $email,
// 				// 'updated_at' => date("Y-m-d H:i:s")

// 			];
// 			$simpan = $this->user->updateUser($data, $user_id);
// 			if ($simpan) {
// 				return redirect()->to(base_url('/admin/users'));
// 			}
// 		}
// 	}

// 	public function deleteUsers($id)
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$hapus = $this->user->deleteUser($id);
// 			if ($hapus) {
// 				return redirect()->to(base_url('/admin/users'));
// 			}
// 		}
// 	}

// 	public function addCategory()
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$admin = $this->admin->getAdmin(session('admin_id'));
// 			$data = [
// 				'title' => 'Jasa Sosmed ID - Admin',
// 				'admin' => $admin
// 			];
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/addcategory');
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function storeCategory()
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$nama = $this->request->getPost('name');
// 			$description = $this->request->getPost('description');
// 			$data = [
// 				'name' => $nama,
// 				'description' => $description,
// 				'created_at' => date("Y-m-d H:i:s"),
// 				'updated_at' => date("Y-m-d H:i:s")

// 			];
// 			$simpan = $this->category->insertProductCategory($data);
// 			if ($simpan) {
// 				return redirect()->to(base_url('/admin/products'));
// 			}
// 		}
// 	}

// 	public function showProducts()
// 	{
// 		// return view('welcome_message');
// 		$admin = $this->admin->getAdmin(session('admin_id'));
// 		$products = $this->product->getProduct();
// 		$array_product = [];
// 		if (isset($products)) {
// 			foreach ($products as $key => $product) {
// 				$category = $this->category->getProductCategory($product['product_category_id']);
// 				$name = $category['name'];
// 				$product['product_category_id'] = $name;
// 				array_push($array_product, $product);
// 			}
// 		}

// 		$data = [
// 			'title' => 'Jasa Sosmed ID - Admin',
// 			'product' => $array_product,
// 			'admin' => $admin
// 		];
// 		if ($this->checkLoggedIn()) {
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/products', $data);
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function addProducts()
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$admin = $this->admin->getAdmin(session('admin_id'));
// 			$category = $this->category->getProductCategory();
// 			$data = [
// 				'title' => 'Jasa Sosmed ID - Admin',
// 				'category' => $category,
// 				'admin' => $admin
// 			];
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/addproduct', $data);
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function storeProducts()
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$kategori = $this->request->getPost('category');
// 			$nama = $this->request->getPost('name');
// 			$harga = $this->request->getPost('price');
// 			$description = $this->request->getPost('description');
// 			$harga1k = $this->request->getPost('harga1k');
// 			$image = $this->request->getFile('file_upload');
// 			$image->move('uploads/product');
// 			$imgname = $image->getName();


// 			$data = [
// 				'product_category_id' => $kategori,
// 				'name' => $nama,
// 				'price' => $harga,
// 				'price_per_1k' => $harga1k,
// 				'description' => $description,
// 				'attachment_path' => $imgname,
// 				'created_at' => date("Y-m-d H:i:s"),
// 				'updated_at' => date("Y-m-d H:i:s")

// 			];
// 			$simpan = $this->product->insertProduct($data);
// 			if ($simpan) {
// 				return redirect()->to(base_url('/admin/products'));
// 			}
// 		}
// 	}

// 	public function editProducts($id)
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$admin = $this->admin->getAdmin(session('admin_id'));
// 			$product = $this->product->getProduct($id);
// 			$category = $this->category->getProductCategory();
// 			$categoryproduct = $this->category->getProductCategory($product['product_category_id']);
// 			if ($product['price_per_1k'] == 1) {
// 				$per1k = "Ya";
// 			} else {
// 				$per1k = "Tidak";
// 			}
// 			$data = [
// 				'title' => 'Jasa Sosmed ID - Admin',
// 				'product' => $product,
// 				'category' => $category,
// 				'categoryproduct' => $categoryproduct,
// 				'per1k' => $per1k,
// 				'admin' => $admin
// 			];
// 			// d($product['product_category_id']);
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/editproduct', $data);
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function updateProducts()
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$id = $this->request->getPost('product_id');
// 			$product = $this->product->getProduct($id);
// 			$imgawal = $product['attachment_path'];
// 			$kategori = $this->request->getPost('category');
// 			$nama = $this->request->getPost('name');
// 			$harga = $this->request->getPost('price');
// 			$description = $this->request->getPost('description');
// 			$harga1k = $this->request->getPost('harga1k');
// 			$image = $this->request->getFile('file_upload');
// 			if ($image == '') {
// 				$imgname = $imgawal;
// 			} else {
// 				$image->move('uploads/announcement');
// 				$imgname = $image->getName();
// 			}

// 			$data = [
// 				'product_category_id' => $kategori,
// 				'name' => $nama,
// 				'price' => $harga,
// 				'price_per_1k' => $harga1k,
// 				'description' => $description,
// 				'attachment_path' => $imgname,
// 				'updated_at' => date("Y-m-d H:i:s")

// 			];
// 			$simpan = $this->product->updateProduct($data, $id);
// 			if ($simpan) {
// 				return redirect()->to(base_url('/admin/products'));
// 			}
// 		}
// 	}

// 	public function deleteProducts($id)
// 	{
// 		// return view('welcome_message');
// 		if ($this->checkLoggedIn()) {
// 			$hapus = $this->product->deleteProduct($id);
// 			if ($hapus) {
// 				return redirect()->to(base_url('/admin/products'));
// 			}
// 		}
// 	}

// 	public function showAnnouncements()
// 	{
// 		// return view('welcome_message');
// 		$admin = $this->admin->getAdmin(session('admin_id'));
// 		$announcement = $this->announcement->getAnnouncement();
// 		$data = [
// 			'title' => 'Jasa Sosmed ID - Admin',
// 			'announcement' => $announcement,
// 			'admin' => $admin
// 		];
// 		if ($this->checkLoggedIn()) {
// 			echo view('admin/header', $data);
// 			echo view('admin/menu', $data);
// 			echo view('admin/announcements', $data);
// 			echo view('admin/footer');
// 		}
// 	}

// 	public function login()
// 	{
// 		$array_items = array('admin_id', 'admin_logged_in');
// 		$this->session->remove($array_items);
// 		$data = [
// 			'title' => 'Jasa Sosmed ID - Login Admin'
// 		];

// 		echo view('admin/header', $data);
// 		echo view('admin/login');
// 		echo view('admin/footer');
// 	}

// 	public function submitLogin()
// 	{
// 		$username = $this->request->getPost('username');
// 		$password = $this->request->getPost('password');

// 		if (isset($_SESSION['admin_logged_in'])) {
// 			return redirect()->to(base_url('/admin'));
// 		}

// 		if (!isset($_SESSION['admin_logged_in']) && (empty($username) || empty($password))) {
// 			// $this->notif->message('Data login tidak lengkap', 'danger');
// 			return redirect()->to(base_url('/admin/login'));
// 		}

// 		if (!isset($_SESSION['admin_logged_in']) && isset($username) && isset($password)) {
// 			$data = [
// 				'username' => $username,
// 				'password' => $password
// 			];
// 			$admin = $this->admin->getAdminByUsername($data['username']);
// 			if (count((array) $admin) > 0) {
// 				// d($admin);
// 				if ($admin['password'] !== $data['password']) {
// 					// $this->notif->message('Password salah', 'danger');
// 					return redirect()->to(base_url('/admin/login'));
// 				} else {
// 					$data_session = array(
// 						'admin_id' => $admin['admin_id'],
// 						'username' => $admin['username'],
// 						'admin_logged_in' => TRUE
// 					);
// 					$this->session->set($data_session);
// 					return redirect()->to(base_url('/admin'));
// 				}
// 			} else {
// 				// $this->notif->message('username atau password anda salah', 'danger');
// 				return redirect()->to(base_url('/admin/login'));
// 			}
// 		}
// 	}

// 	public function logout()
// 	{
// 		$array_items = array('admin_id', 'admin_logged_in');
// 		$this->session->remove($array_items);
// 		return redirect()->to(base_url('/admin/login'));
// 	}
// }
