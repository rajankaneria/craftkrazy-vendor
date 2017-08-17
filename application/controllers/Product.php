<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->model("product_model");

		$mainCat = $this->product_model->mainCat();
		
		$headerData = array(
			"pageTitle" => "Craftkrazy",
			"stylesheet" => array("product.css")
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$viewData = array(
			"viewName" => "product",
            "viewData" => array(
        		"mainCat"=>$mainCat    	
            ),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function getAllParent()
	{		
		$mcID = $_POST["mc_id"];
		$this->load->model("product_model");
		$parentCategoryArray = $this->product_model->parentCat($mcID);
		echo json_encode($parentCategoryArray);
	}

	public function getAllChildCat()
	{		
		$pcID = $_POST["pc_id"];
		$this->load->model("product_model");
		$childCategoryArray = $this->product_model->childCat($pcID);
		echo json_encode($childCategoryArray);
	}

	public function getAllSubCat()
	{		
		$ccID = $_POST["cc_id"];
		$this->load->model("product_model");
		$subCategoryArray = $this->product_model->subCat($ccID);
		echo json_encode($subCategoryArray);
	}

	public function insert()
	{		
		$maCat = $_POST["maCat"];
  		$paCat = $_POST["paCat"];
  		$chCat = $_POST["chCat"];
  		$suCat = $_POST["suCat"];
  		$pName = $_POST["pName"];
  		$pCode = $_POST["pCode"];

  		$imgname = $_FILES['pImg']['name'];
		$imgtype = $_FILES['pImg']['type'];
		$imgsize = $_FILES['pImg']['size'];
		$imgtmp = $_FILES['pImg']['tmp_name'];

		$imgExt = strtolower(pathinfo($imgname,PATHINFO_EXTENSION));
		
		$pic = rand(100000000,100000000000).'.'.$imgExt;
		$imgpath = "e:/wamp/www/craftkrazy-vendor/html/images/".$pic;
		
		move_uploaded_file($imgtmp,$imgpath);

  		$pPrice = $_POST["pPrice"];
  		$pDiscountPrice = $_POST["pDiscountPrice"];
  		$pDescription = $_POST["pDescription"];
  		$pQuantity = $_POST["pQuantity"];

		$this->load->model("product_model");

		$productData = array(
			"maCat" => $maCat,
			"paCat" => $paCat,
			"chCat" => $chCat,
			"suCat" => $suCat,
			"pName" => $pName,
			"pCode" => $pCode,
			"pic" => $pic,
			"pPrice" => $pPrice,
			"pDiscountPrice" => $pDiscountPrice,
			"pDescription" => $pDescription,
			"pQuantity" => $pQuantity
		);

		$productArray = $this->product_model->productInsert($productData);
		header("Location: ".base_url()."product");
	}
}
