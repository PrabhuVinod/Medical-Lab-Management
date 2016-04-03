<div class="invoices view">
<!-- <h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Advance'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['advance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Totalamount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['totalamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl> -->






















<div class="container" id="section-to-print">
    	<div class="row">
    		<div class="span4">
                <img src="//placehold.it/170x40" class="img-rounded logo">
    			<address>
			        <strong>Uma Labs</strong><br>
			        Undi-534199<br>
		    	</address>
    		</div>
    		<div class="span4 well">
    			<table class="invoice-head">
    				<tbody>
    					<tr>
    						<td class="pull-right"><strong>Patient #</strong></td>
    						<td><?php echo h($invoice['Invoice']['pid']); ?></td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Invoice #</strong></td>
    						<td><?php echo h($invoice['Invoice']['id']); ?></td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Date</strong></td>
    						<td><?php echo h($invoice['Invoice']['modified']); ?></td>
    					</tr>
    			
    				</tbody>
    			</table>
    		</div>
    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2>Invoice</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
							<th>Description</th>
							<th>Date</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>

					<?php

					foreach ($invoice['ptests'] as $key => $value) {
						
echo "<tr><td>".$invoice['tests'][$value['Ptest']['tid']]['Test']['name']."</td><td>".$invoice['patient']['Patient']['resultdate']."</td><td>$ ".$invoice['tests'][$value['Ptest']['tid']]['Test']['cost']."</td></tr>";

					}

echo "<tr><td>Advance amount</td><td>".$invoice['patient']['Patient']['created']."</td><td>$ ".$invoice['Invoice']['advance']."</td></tr>";

					?>
						
						
						<tr>
							<td>&nbsp;</td>
							<td><strong>Total</strong></td>
							<td><strong>$<?php echo $invoice['Invoice']['amount']; ?></strong></td>
						</tr>
					</tbody>
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You!</h5>
  			</div>
  		</div>
  		<div class="row">
  	    	<div class="span3">
  		        <strong>Phone:</strong> <a href="#">999 999 9999</a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Email:</strong> <a href="mailto:vanapalliramesh@gmail.com">vanapalliramesh(at)gmail(dot)com</a>
  	    	</div>

  		</div>
    </div>



























</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<!-- <li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoice['Invoice']['id']))); ?> </li> -->
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
<!-- 		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
 -->
 <li>
<a href="#" class="print_now">Print Invoice</a>
  </li>
	</ul>
</div>









<style type="text/css">
	.invoice-head td {
  padding: 0 8px;
}
.container {
  padding-top:30px;
}
.invoice-body{
  background-color:transparent;
}
.invoice-thank{
  margin-top: 60px;
  padding: 5px;
}
address{
  margin-top:15px;
}




@media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }
}
</style>


<script type="text/javascript">
	$('.print_now').click(function(event){
		event.preventDefault();

		window.print();

	})
</script>