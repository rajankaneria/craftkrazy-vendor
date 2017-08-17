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
    $('ul.tabs').tabs('select_tab', 'col_form');
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

$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );