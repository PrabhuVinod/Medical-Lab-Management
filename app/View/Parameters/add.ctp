<div class="parameters form">
<?php 
// echo $this->Form->create('Parameter'); 
?>
	<fieldset>
		<legend><?php echo __('Add Parameter'); ?></legend>
	<?php
		// echo $this->Form->input('tid');
		// echo $this->Form->input('name');
		// echo $this->Form->input('defaultval');
		// echo $this->Form->input('unit');
	?>



 <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Normal Value</th>
        <th>Units</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="params_tbody">
    
 
    </tbody>
  </table>


<div class="params_div">
		
  <input type="text" class="form-control paramname" placeholder="Name" >

  <input type="text" class="form-control paramvalue" placeholder="Average value( only numerical values without units )">

  <input type="text" class="form-control paramunit" placeholder="Units (ml, grams, etc..)">


</div> 

<div class="param-controls">
	<button class="add_param">Add another</button>
</div>



<!-- <div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">.col-md-4</div>
</div> -->




<small><br><br>Click ' + ' button to ADD a parameter.<br></small>
<small>Click ' - ' button to REMOVE the parameter.<br><br></small>
<small><strong>Note: </strong>These parameters are saved instantly, when you click on ' <strong>+</strong> ' symbol.</small>


	</fieldset>
<?php 
// echo $this->Form->end(__('Submit')); 
?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parameters'), array('action' => 'index')); ?></li>
	</ul>
</div>






<script>


   $(function() {

   	$('table').hide();

   });

   $('body').on('click','.add_param',function(event){


   	   	jQuery.ajax({
		        type:'POST',
		        async: true,
		        cache: false,
		        data:{'paramname':$('.paramname').val(),'paramvalue':$('.paramvalue').val(),'paramunit':$('.paramunit').val()},
		        url: '<?= Router::Url(['controller' => 'parameters','admin' => FALSE, 'action' => 'add_no_refresh'], TRUE); ?>',
		        success: function(response) {

		        	// console.log(response);
   	$('table').slideDown('slow');


		        	$('.params_tbody').append('<tr><td>'+$('.paramname').val()+'</td><td>'+$('.paramvalue').val()+'</td><td>'+$('.paramunit').val()+'</td><td><button class="btn btn-danger del_param" data-id="'+response+'">Delete</button></td></tr>');



		        	$('.paramname').val('');
		        	$('.paramvalue').val('');
		        	$('.paramunit').val('');

		        
		        },
		        error: function(exception) {
		        	console.log('error');
		        }
		    });


   });


      $('body').on('click','.del_param',function(event){


   	   	jQuery.ajax({
		        type:'POST',
		        async: true,
		        cache: false,
		        data:{'paramid':$(event.target).attr('data-id')},
		        url: '<?= Router::Url(['controller' => 'parameters','admin' => FALSE, 'action' => 'del_no_refresh'], TRUE); ?>',
		        success: function(response) {

		        	// console.log(response);


		        	$(event.target).parents('tr').remove();



		        	$('.paramname').val('');
		        	$('.paramvalue').val('');
		        	$('.paramunit').val('');

		        
		        },
		        error: function(exception) {
		        	console.log('error');
		        }
		    });


   });
  </script>