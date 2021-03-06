var baseURL;
$(function(){
	baseURL=$("#base_url").val();
  $('#mobileNav').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    }
  );
});

$(document).ready(function() {
    $('select').material_select();
  });

/*---tab---- */
$(document).ready(function(){
    $('#productTab').tabs();
});

function getParentCat(val) {

	$.post(baseURL+"product/getAllParent",{mc_id:val},function(data){
		data = $.parseJSON(data);
		$("#pCat").html("");
		$("#pCat").html('<option value="" disabled selected>Choose your Parent Category</option>');
		$.each(data, function (i, item) {
			$('#pCat').append($('<option>', { 
				value: item.pc_id,
			    text : item.pc_name 
			}));
		});
		$("#pCat").material_select();
		$("#parentCatContainer").show();
	});
}

function getChildCat(val) {
	console.log(val);
	$.post(baseURL+"product/getAllChildCat",{pc_id:val},function(data){
		data = $.parseJSON(data);
		$("#cCat").html("");
		$("#cCat").html('<option value="" disabled selected>Choose your Child Category</option>');
		$.each(data, function (i, item) {
			$('#cCat').append($('<option>', { 
				value: item.cc_id,
			    text : item.cc_name 
			}));
		});
		$("#cCat").material_select();
		$("#childCatContainer").show();
	});
}

function getSubCat(val) {
	console.log(val);
	$.post(baseURL+"product/getAllSubCat",{cc_id:val},function(data){
		data = $.parseJSON(data);
		$("#sCat").html("");
		$("#sCat").html('<option value="" disabled selected>Choose your Sub Category</option>');
		$.each(data, function (i, item) {
			$('#sCat').append($('<option>', { 
				value: item.sc_id,
			    text : item.sc_name 
			}));
		});
		$("#sCat").material_select();
		$("#subCatContainer").show();
	});
}

/*--------Model open----------*/
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
