<!-- Modal Structure -->
<div id="modal1" class="modal">
	<div class="modal-content">
    	<h4>Product Add</h4><hr>
    	<div class="row">
		    <div class="col s12">
		      <ul id="productTab" class="tabs tabs-fixed-width">
		        <li class="tab col s3"><a class="active" href="#col_form">Product Form</a></li>
		        <li class="tab col s3"><a href="#col_buckdata">Excal Sheet Upload</a></li>
		      </ul>
		    </div>
		  </div>
    	<div id="col_form">
	      	<div class="row container">
	    		<form class="col s12" method="post" action="<?php echo base_url();?>product/insert" enctype='multipart/form-data'>
			    	<div class="row">
				        <div class="input-field col s12">
						    <select id="mCat" name="maCat" onChange="getParentCat(this.value)">
						    	<option value="" disabled selected>Choose your Main Category</option>
						    	<?php foreach ($mainCat as $key => $mainCatRow) { ?>
									<option value="<?php echo $mainCatRow['mc_id'];?>"><?php echo $mainCatRow['mc_name'];?></option>
								<?php } ?>
						    </select>
						</div>
				    </div>
				    <div class="row" id="parentCatContainer">
				        <div class="input-field col s12">
						    <select id="pCat" name="paCat" onChange="getChildCat(this.value)">
						    	
						    </select>
						</div>
				    </div>
				    <div class="row" id="childCatContainer">
				        <div class="input-field col s12">
						    <select id="cCat" name="chCat" onChange="getSubCat(this.value)">
						    	
						    </select>
						</div>
				    </div>
				    <div class="row" id="subCatContainer">
				        <div class="input-field col s12">
						    <select id="sCat" name="suCat">
						    	
						    </select>
						</div>
				    </div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input id="product_name" name="pName" type="text" class="validate">
				          	<label for="product_name">Product Name</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input id="product_code" name="pCode" type="text" class="validate">
				          	<label for="product_code">Product Code</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="file-field input-field">
							<div class="file-field input-field">
						      <div class="btn">
						        <span>File</span>
						        <input type="file" name="pImg">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" placeholder="Upload Images">
						      </div>
						    </div>
					    </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input id="product_price" name="pPrice" type="text" class="validate">
				          	<label for="product_price">Product Price</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input id="product_dis_price" name="pDiscountPrice" type="text" class="validate">
				          	<label for="product_dis_price">Product Discount Price</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				        	<textarea id="product_description" name="pDescription" class="materialize-textarea"></textarea>
				          	<label for="product_description">Product Description</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input id="product_quantity" name="pQuantity" type="text" class="validate">
				          	<label for="product_quantity">Product Quantity</label>
				        </div>
			      	</div>
			      	<div class="modal-footer">
			      		<input class="modal-action modal-close waves-effect waves-green btn-flat" type="reset" value="Cancel">
			      		<input class="modal-action modal-close waves-effect waves-green btn-flat" type="Submit" value="Submit">
			      	</div>
	    		</form>
	  		</div>
	  	</div>
	  	<div id="col_buckdata">
	  		<div class="row container">
		    	<form class="col s12" method="post" action="<?php echo base_url();?>product/getProImport"  enctype='multipart/form-data'>
		      		<div class="row">
				        <div class="file-field input-field">
							<div class="file-field input-field">
						      <div class="btn">
						        <span>File</span>
						        <input type="file" name="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" placeholder="Upload Excal File">
						      </div>
						    </div>
					    </div>
		      		</div>
			      	<div class="modal-footer">
			      		<input class="modal-action modal-close waves-effect waves-green btn-flat" type="reset" value="Cancel">
			      		<input class="modal-action modal-close waves-effect waves-green btn-flat" type="Submit" value="Submit">
			      	</div>
		    	</form>
		  	</div>
	  	</div>
    </div>
</div>