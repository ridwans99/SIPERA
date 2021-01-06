<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->user = new UserModel();
	}
	public function index()
	{
		$array_items = array('user_id','user_logged_in');
		$this->session->remove($array_items);
		// return view('welcome_message');
		$data = [
			'title' => 'SIPERA - Sistem '
		];

		echo view('header', $data);
		echo view('menu');
		echo view('index');
		echo view('footer');
	}

	// public function daftarLayanan(){
	// 	$products = $this->product->getProduct();
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
	// 		'title' => 'SIPERA - Sistem Informasi Peminjaman Peralatan dan Ruangan',
	// 		'product' => $array_product,
	// 	];

	// 	echo view('header', $data);
	// 	echo view('menu');
	// 	echo view('daftarlayananportal', $data);
	// 	echo view('footer');
	// }

	//--------------------------------------------------------------------

}
