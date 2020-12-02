<?php namespace App\Controllers;


use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\AnnouncementModel;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;
use App\Models\OrderModel;
use App\Models\OrderStatusModel;
use App\Models\PaymentModel;


class Admin extends BaseController
{
	protected $helpers = ['form','date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->admin = new AdminModel();
		$this->user = new UserModel();
		$this->announcement = new AnnouncementModel();
		$this->product = new ProductModel();
		$this->category = new ProductCategoryModel();
		$this->order = new OrderModel();
		$this->status = new OrderStatusModel();
		$this->payment = new PaymentModel();
	}

	public function checkLoggedIn() {
		if (session('admin_logged_in') == true) {
			return true;
		}
		header("Location: /admin/login");
		exit;
	} 

	public function index()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$user = $this->user->getUser();
		$products = $this->product->getProduct();
		$orders = $this->order->GetOrder();
		$announcement = $this->announcement->getAnnouncement();
		$totaluser = count($user);
		$totalproduk = count($products);
		$totalorder = count($orders);
		$totalannouncement = count($announcement);
		$array_pendapatan = [];
		if (isset($orders)) {
			foreach ($orders as $key => $order) {
				array_push($array_pendapatan, $order['total_price']);
			}
		}
		$totalpendapatan = array_sum($array_pendapatan);


		// return view('welcome_message');
		$data = [
			'title' => 'Jasa Sosmed ID - Admin',
			'admin' => $admin,
			'totaluser' => $totaluser,
			'totalproduk' => $totalproduk,
			'totalorder' => $totalorder,
			'totalannouncement' => $totalannouncement,
			'totalpendapatan' => $totalpendapatan
		];
		if($this->checkLoggedIn()){
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/index', $data);
			echo view('admin/footer');
		}
	}

	public function showUsers()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$user = $this->user->getUser();
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'user' => $user,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/users',$data);
			echo view('admin/footer');
		}
	}

	public function addUsers()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/adduser');
			echo view('admin/footer');
		}
	}

	public function storeUsers()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$full_name = $this->request->getPost('full_name');
			$email = $this->request->getPost('email');

			$data = [
				'full_name' => $full_name,
				'email' => $email,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->user->insertUser($data);
			if($simpan) {
				return redirect()->to(base_url('/admin/users')); 
			}
		}
	}

	public function editUsers($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$user = $this->user->getUser($id);
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'user' => $user,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/edituser', $data);
			echo view('admin/footer');
		}
	}

	public function updateUsers()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$user_id = $this->request->getPost('user_id');
			$user = $this->user->getUser($user_id);
			$full_name = $this->request->getPost('full_name');
			$email = $this->request->getPost('email');

			$data = [
				'full_name' => $full_name,
				'email' => $email,
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->user->updateUser($data, $user_id);
			if($simpan) {
				return redirect()->to(base_url('/admin/users')); 
			}
		}
	}

	public function deleteUsers($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$hapus = $this->user->deleteUser($id);
			if($hapus) {
				return redirect()->to(base_url('/admin/users')); 
			}
		}
	}

	public function addCategory()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/addcategory');
			echo view('admin/footer');
		}
	}

	public function storeCategory()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$nama = $this->request->getPost('name');
			$description = $this->request->getPost('description');
			$data = [
				'name' => $nama,
				'description' => $description,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->category->insertProductCategory($data);
			if($simpan) {
				return redirect()->to(base_url('/admin/products')); 
			}
		}
	}

	public function showProducts()
	{
		// return view('welcome_message');
		$admin = $this->admin->getAdmin(session('admin_id'));
		$products = $this->product->getProduct();
		$array_product = [];
		if (isset($products)) {
			foreach ($products as $key => $product) {
				$category = $this->category->getProductCategory($product['product_category_id']);
				$name = $category['name'];
				$product['product_category_id'] = $name;
				array_push($array_product, $product);
			}
		}

		$data = [
			'title' => 'Jasa Sosmed ID - Admin',
			'product' => $array_product,
			'admin' => $admin
		];
		if($this->checkLoggedIn()){
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/products', $data);
			echo view('admin/footer');
		}
	}

	public function addProducts()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$category = $this->category->getProductCategory();
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'category' => $category,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/addproduct', $data);
			echo view('admin/footer');
		}
	}

	public function storeProducts()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$kategori = $this->request->getPost('category');
			$nama = $this->request->getPost('name');
			$harga = $this->request->getPost('price');
			$description = $this->request->getPost('description');
			$harga1k = $this->request->getPost('harga1k');
			$image = $this->request->getFile('file_upload');
			$image->move('uploads/product');
			$imgname = $image->getName();


			$data = [
				'product_category_id' => $kategori,
				'name' => $nama,
				'price' => $harga,
				'price_per_1k' => $harga1k,
				'description' => $description,
				'attachment_path' => $imgname,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->product->insertProduct($data);
			if($simpan) {
				return redirect()->to(base_url('/admin/products')); 
			}
		}
	}

	public function editProducts($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$product = $this->product->getProduct($id);
			$category = $this->category->getProductCategory();
			$categoryproduct = $this->category->getProductCategory($product['product_category_id']);
			if ($product['price_per_1k'] == 1) {
				$per1k = "Ya";
			} else {
				$per1k = "Tidak";
			}
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'product' => $product,
				'category' => $category,
				'categoryproduct' => $categoryproduct,
				'per1k' => $per1k,
				'admin' => $admin
			];
			// d($product['product_category_id']);
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/editproduct', $data);
			echo view('admin/footer');
		}
	}

	public function updateProducts()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$id = $this->request->getPost('product_id');
			$product = $this->product->getProduct($id);
			$imgawal = $product['attachment_path'];
			$kategori = $this->request->getPost('category');
			$nama = $this->request->getPost('name');
			$harga = $this->request->getPost('price');
			$description = $this->request->getPost('description');
			$harga1k = $this->request->getPost('harga1k');
			$image = $this->request->getFile('file_upload');
			if ($image == '') {
				$imgname = $imgawal;
			} else {
				$image->move('uploads/announcement');
				$imgname = $image->getName();
			}

			$data = [
				'product_category_id' => $kategori,
				'name' => $nama,
				'price' => $harga,
				'price_per_1k' => $harga1k,
				'description' => $description,
				'attachment_path' => $imgname,
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->product->updateProduct($data, $id);
			if($simpan) {
				return redirect()->to(base_url('/admin/products')); 
			}
		}
	}

	public function deleteProducts($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$hapus = $this->product->deleteProduct($id);
			if($hapus) {
				return redirect()->to(base_url('/admin/products')); 
			}
		}
	}

	public function showAnnouncements()
	{
		// return view('welcome_message');
		$admin = $this->admin->getAdmin(session('admin_id'));
		$announcement = $this->announcement->getAnnouncement();
		$data = [
			'title' => 'Jasa Sosmed ID - Admin',
			'announcement' => $announcement,
			'admin' => $admin
		];
		if($this->checkLoggedIn()){
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/announcements', $data);
			echo view('admin/footer');
		}
	}

	public function addAnnouncements()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/addannouncement');
			echo view('admin/footer');
		}
	}

	public function storeAnnouncements()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$subject = $this->request->getPost('subject');
			$description = $this->request->getPost('description');
			$image = $this->request->getFile('file_upload');
			$image->move('uploads/announcement');
			$imgname = $image->getName();


			$data = [
				'admin_id' => session('admin_id'),
				'subject' => $subject,
				'description' => $description,
				'attachment_path' => $imgname,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->announcement->insertAnnouncement($data);
			if($simpan) {
				return redirect()->to(base_url('/admin/announcements')); 
			}
		}
	}

	public function editAnnouncements($id)
	{
		// return view('welcome_message');
		$admin = $this->admin->getAdmin(session('admin_id'));
		if($this->checkLoggedIn()){
			$announcement = $this->announcement->getAnnouncement($id);
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'announcement' => $announcement,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/editannouncement', $data);
			echo view('admin/footer');
		}
	}

	public function updateAnnouncements()
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$id = $this->request->getPost('announcement_id');
			$announcement = $this->announcement->getAnnouncement($id);
			$imgawal = $announcement['attachment_path'];
			$subject = $this->request->getPost('subject');
			$description = $this->request->getPost('description');
			$image = $this->request->getFile('file_upload');
			if ($image == '') {
				$imgname = $imgawal;
			} else {
				$image->move('uploads/announcement');
				$imgname = $image->getName();
			}

			$data = [
				'admin_id' => session('admin_id'),
				'subject' => $subject,
				'description' => $description,
				'attachment_path' => $imgname,
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->announcement->updateAnnouncement($data, $id);
			if($simpan) {
				return redirect()->to(base_url('/admin/announcements')); 
			}
		}
	}

	public function deleteAnnouncements($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$hapus = $this->announcement->deleteAnnouncement($id);
			if($hapus) {
				return redirect()->to(base_url('/admin/announcements')); 
			}
		}
	}

	public function showOrders()
	{
		$admin = $this->admin->getAdmin(session('admin_id'));
		$orders = $this->order->GetOrder();
		$array_order = [];
		if (isset($orders)) {
			foreach ($orders as $key => $order) {
				$user = $this->user->getUser($order['user_id']);
				$product = $this->product->getProduct($order['product_id']);
				$status = $this->status->getOrderStatus($order['orderstatus_id']);
				$payment = $this->payment->getPayment($order['payment_id']);
				$order['user_id'] = $user['full_name'];
				$order['product_id'] = $product['name'];
				$order['orderstatus_id'] = $status['name'];
				array_push($array_order, $order);
			}
		}
		$data = [
			'title' => 'Jasa Sosmed ID - Admin',
			'order' => $array_order,
			'admin' => $admin
		];
		if($this->checkLoggedIn()){
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/orders', $data);
			echo view('admin/footer');
		}
	}

	public function addOrders()
	{
		$user = $this->user->getUser();
		$admin = $this->admin->getAdmin(session('admin_id'));
		$product = $this->product->getProduct();
		if($this->checkLoggedIn()){
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'user' => $user,
				'product' => $product,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/addorder', $data);
			echo view('admin/footer');
		}
	}

	public function storeOrders()
	{
		if($this->checkLoggedIn()){
			$userid = $this->request->getPost('user');
			$product = $this->request->getPost('produk');
			$orderstatus = 1;
			$harga = $this->request->getPost('harga');
			$startcount = $this->request->getPost('start_count');
			$quantity = $this->request->getPost('quantity');
			$message = $this->request->getPost('message');
			$target = $this->request->getPost('target');
			$method = $this->request->getPost('method');

			$datapayment = [
				'user_id' => $userid,
				'amounts' => $harga,
				'payment_method' => $method,
				'customer_confirmed' => 0,
				'admin_confirmed' => 0,
				'attachment_path' => '',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpanpayment = $this->payment->insertPayment($datapayment);
			$payment = $this->payment->getPayment();
			$lastpayment = end($payment);
			$payment_id = $lastpayment['payment_id'];
			$data = [
				'user_id' => $userid,
				'product_id' => $product,
				'orderstatus_id' => $orderstatus,
				'payment_id' => $payment_id,
				'start_count' => $startcount,
				'quantity' => $quantity,
				'total_price' => $harga,
				'target_link' => $target,
				'additional_message' => $message,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")

			];
			$simpan = $this->order->insertOrder($data);
			if($simpan) {
				return redirect()->to(base_url('/admin/orders')); 
			}
		}
	}

	public function editOrders($id)
	{
		if($this->checkLoggedIn()){
			$admin = $this->admin->getAdmin(session('admin_id'));
			$order = $this->order->GetOrder($id);
			$status = $this->status->getOrderStatus();
			$payment = $this->payment->getPayment($order['payment_id']);
			$data = [
				'title' => 'Jasa Sosmed ID - Admin',
				'order' => $order,
				'status' => $status,
				'payment' => $payment,
				'admin' => $admin
			];
			echo view('admin/header', $data);
			echo view('admin/menu', $data);
			echo view('admin/editorder', $data);
			echo view('admin/footer');
		}
	}

	public function updateOrders()
	{
		if($this->checkLoggedIn()){
			$id = $this->request->getPost('order_id');
			$paymentid = $this->request->getPost('payment_id');
			$status = $this->request->getPost('orderstatus');
			$adminconfirm = $this->request->getPost('adminconfirm');
			$customerconfirm = $this->request->getPost('customerconfirm');
			$startcount = $this->request->getPost('start_count');
			$dataorder = [
				'orderstatus_id' => $status,
				'start_count' => $startcount,
				'updated_at' => date("Y-m-d H:i:s")
			];
			$datapayment = [
				'admin_confirmed' => $adminconfirm,
				'customer_confirmed' => $customerconfirm,
				'updated_at' => date("Y-m-d H:i:s")
			];
			$simpan = $this->order->updateOrder($dataorder, $id);
			$simpanpayment = $this->payment->updatePayment($datapayment, $paymentid);
			if($simpan && $simpanpayment) {
				return redirect()->to(base_url('/admin/orders')); 
			}
		}
	}

	public function deleteOrders($id)
	{
		// return view('welcome_message');
		if($this->checkLoggedIn()){
			$hapus = $this->order->deleteOrder($id);
			if($hapus) {
				return redirect()->to(base_url('/admin/orders')); 
			}
		}
	}



	public function login()
	{
		$array_items = array('admin_id','admin_logged_in');
		$this->session->remove($array_items);
        $data = [
			'title' => 'Jasa Sosmed ID - Login Admin'
		];

		echo view('admin/header', $data);
		echo view('admin/login');
		echo view('admin/footer');
	}

	public function submitLogin()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if (isset($_SESSION['admin_logged_in'])) {
			return redirect()->to(base_url('/admin'));
		}

		if (!isset($_SESSION['admin_logged_in']) && (empty($username) || empty($password))){
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

	public function logout(){
		$array_items = array('admin_id','admin_logged_in');
		$this->session->remove($array_items);
		return redirect()->to(base_url('/admin/login'));
	}

}