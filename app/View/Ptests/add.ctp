<div class="ptests form">
<?php 
// echo $this->Form->create('Ptest');
 ?>
	<fieldset>
		<legend><?php 
		echo __('Add Patient tests');
		 ?></legend>
	<?php
		// echo $this->Form->input('pid');
		// echo $this->Form->input('tid');
	?>




<div class="tests_div">
		
<div class="input-group  input-group-lg">
  <input type="text" class="form-control" id="selecttests" placeholder="Enter test name" aria-describedby="basic-addon2 basic-addon1">
  <input type="hidden" id="tname">
  <span class="input-group-addon add_ptest" id="basic-addon1"> + </span>
  <span class="input-group-addon delete_ptest" id="basic-addon2"> - </span>
</div>

</div>

<small><br><br>Click ' + ' button to ADD a test.<br></small>
<small>Click ' - ' button to DELETE a test.<br><br></small>
<small><strong>Note: </strong>These tests are saved instantly, when you click on ' <strong>+</strong> '.</small>


	</fieldset>
<?php 
// echo $this->Form->end(__('Submit'));
 ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List this patient tests'), array('action' => 'index')); ?></li>
	</ul>
	<ul>

		<li><?php echo $this->Html->link(__('View invoice'), array('controller' => 'invoices','action' => 'view',$_SESSION['new_invoice_id'])); ?></li>
	</ul>
</div>



<?php

// echo "dfgdfg";
// echo $_SESSION['add_ptest_to_user'];
?>


<script>


   $(function() {

$('#tname').val('');



   	$('body').on('focus','#selecttests',function(event){

   		   var availableTags = [];

   		 jQuery.ajax({
		        type:'POST',
		        async: true,
		        cache: false,
		        url: '<?= Router::Url(['controller' => 'tests','admin' => FALSE, 'action' => 'get_list'], TRUE); ?>',
		        success: function(response) {
		        	// console.log(response);

		        	obj = jQuery.parseJSON(response);

		        	$(obj).each(function(index,value){

		        	availableTags[index]=value['Test']['name'];

		        	});


		        },
		        error: function(exception) {
		        	// console.log('error');
		        }
		    });


    $( "#selecttests" ).autocomplete({
      source: availableTags,
      change: function( event, ui ) {
      	console.log('changed');
      	console.log(ui.item.value);
      	$('#tname').val(ui.item.value);



   $('body').on('click','.add_ptest',function(event){


   	var tname=$('#tname').val();
   	// console.log('tname');
   	// console.log(tname);
   	jQuery.ajax({
		        type:'POST',
		        async: true,
		        cache: false,
		        data:{'tname':tname},
		        url: '<?= Router::Url(['controller' => 'ptests','admin' => FALSE, 'action' => 'add_norefresh'], TRUE); ?>',
		        success: function(response) {
		        	// console.log(response);

		        	$('#selecttests').val('');
		        	$('#tname').val('');

		        	$('.tests_div').append('<div class="input-group  input-group-lg saved_ptest"><input type="text" class="form-control ptname" value="'+tname+'" aria-describedby="basic-addon2 basic-addon1" readonly><span class="input-group-addon delete_ptest" id="basic-addon2"> - </span></div>');

		        },
		        error: function(exception) {
		        	// console.log('error');
		        }
		    });




   });

   

      }
    });


  	});



  });



   $('body').on('click','.delete_ptest',function(event){

   	if ($('.delete_ptest').length>1) {

   	var tname=$(event.target).siblings('.ptname').val();
 
   	jQuery.ajax({
		        type:'POST',
		        async: true,
		        cache: false,
		        data:{'tname':tname},
		        url: '<?= Router::Url(['controller' => 'ptests','admin' => FALSE, 'action' => 'remove_norefresh'], TRUE); ?>',
		        success: function(response) {
		        	// console.log(response);

		        	$(event.target).parent('.saved_ptest').remove();

		        },
		        error: function(exception) {
		        	// console.log('error');
		        }
		    });

   	}

   });
  </script>