<div class="row">
      	  <div class="col-lg-12">
	      	  	<ol class="breadcrumb">
				  <li>
				  	<?php echo $this->Html->link(__('Plugins'),'/')?>
				  </li>

				</ol>
      	  </div>
</div>

<div class="row">  	  
      	  <div class="col-lg-4">
	      	  <p style="font-weight:bold;">
	      	  	<?php 
	      	  	echo $this->Paginator->counter(
	      	  			'Showing {:start} - {:end} of {:count}'
	      	  	);
	      	  	?>
	      	  </p>
      	  </div>
      	  
      	  <div class="col-lg-8">
      	  	<p class="text-right">
      	  		<?php echo $this->Html->link(__('Add Plugin'),array('action'=>'add'),array('class'=>'btn btn-primary'))?>
      	  	</p>
      	  </div>
</div>  
    
     
<div class="row">
      	  <div class="col-lg-12 ">
	      	  	<table class="table table-bordered">
					<thead>
						<tr>
							<th>Plugin</th>
							<th>Author</th>
							<th>Created</th>

<!--							<th>
							//Posts
							</th>

							<th>
							//Activity
							</th> -->
						</tr>
					</thead>
					
					<tbody>


						<tr>
							<td>
								Plugin Name will link here to another view
							</td>

							<td>
								 Author info
							</td>

							<td>
							Date Created
							</td>
						</tr>

						<?php //endforeach;
						?>
					</tbody>
				</table>


				<div class="pull-right">
					<?php 
						echo $this->element('paginator');
					?>
				 </div>
	      </div>
</div>
 