<?php

class Product_model extends CI_Model{

	  function mainCat()
	  {
	      $query = $this->db->query("select * from main_category");
	      $result = $query->result_array();
	      return $result;
	  }

	  function parentCat($mcID)
	  {
	      $query = $this->db->query("select * from parent_category where mc_id='$mcID'");
	      $result = $query->result_array();
	      return $result;
	  }

	  function childCat($pcID)
	  {
	      $query = $this->db->query("select * from child_category where pc_id = '$pcID'");
	      $result = $query->result_array();
	      return $result;
	  }

	  function subCat($ccID)
	  {
	      $query = $this->db->query("select * from sub_category where cc_id='$ccID'");
	      $result = $query->result_array();
	      return $result;
	  }
	  
	  function productInsert($productData)
	  {
	  		$maCat = $productData["maCat"];
	  		$paCat = $productData["paCat"];
	  		$chCat = $productData["chCat"];
	  		$suCat = $productData["suCat"];
	  		$pName = $productData["pName"];
	  		$pCode = $productData["pCode"];
	  		$pic = $productData["pic"];
	  		$pPrice = $productData["pPrice"];
	  		$pDiscountPrice = $productData["pDiscountPrice"];
	  		$pDescription = $productData["pDescription"];
	  		$pQuantity = $productData["pQuantity"];

	  		$query = $this->db->query("insert into product_details(mc_id,pc_id,cc_id,sc_id,product_name,product_code,product_image,price,discounted_price,description,quantity,seller_id,status,created_by,creater_id) values('$maCat','$paCat','$chCat','$suCat','$pName','$pCode','$pic','$pPrice','$pDiscountPrice','$pDescription','$pQuantity','5','1','1','1')");
	      	
	  }
		/*
	   function productFileInsert($productFileData)
	  {
	  		$maCat = $productFileData["maCat"];
	  		$paCat = $productFileData["paCat"];
	  		$chCat = $productFileData["chCat"];
	  		$suCat = $productFileData["suCat"];
	  		$pName = $productFileData["pName"];
	  		$pCode = $productFileData["pCode"];
	  		$pPrice = $productFileData["pPrice"];
	  		$pDiscountPrice = $productFileData["pDiscountPrice"];
	  		$pDescription = $productFileData["pDescription"];
	  		$pQuantity = $productFileData["pQuantity"];

	  		$query = $this->db->query("insert into product_details(mc_id,pc_id,cc_id,sc_id,product_name,product_code,price,discounted_price,description,quantity) values('$maCat','$paCat','$chCat','$suCat','$pName','$pCode','$pPrice','$pDiscountPrice','$pDescription','$pQuantity')");
	      	
	  }
	  */
}