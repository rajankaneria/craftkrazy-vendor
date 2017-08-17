<div id="page-container">
	<div class="page-form">
		<h4 align="center">Product Records </h4><hr>
		<!-- Modal Trigger -->
 		<button id="productAddBtn" data-target="modal1" class="btn modal-trigger btnmodel">Product ADD</button><br>
		<div class="col_pagination" align="center">
			<ul class="pagination">
			    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			    <li class="active"><a href="#!">1</a></li>
			    <li class="waves-effect"><a href="#!">2</a></li>
			    <li class="waves-effect"><a href="#!">3</a></li>
			    <li class="waves-effect"><a href="#!">4</a></li>
			    <li class="waves-effect"><a href="#!">5</a></li>
			    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		  	</ul>
		</div>
	</div>
</div>

<!-- modal html -->
<?php $this->load->view("product_form"); ?>
