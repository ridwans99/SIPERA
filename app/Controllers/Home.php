<?php namespace App\Controllers;

// use App\Models\ProductModel;
// use App\Models\ProductCategoryModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		// $this->product = new ProductModel();
		// $this->category = new ProductCategoryModel();
	}
	public function index()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'Jasa Sosmed ID - Layanan Sosial Media Terbaik & Terpercaya'
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
