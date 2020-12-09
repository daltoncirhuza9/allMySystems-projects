<?php  if (count($errors) > 0) : ?>
 
  <div class="alert alert-danger alert-dismissible">
  	<span>
  	
		  	  <button class="btn btn-primary" disabled>
		        
		             <?php foreach ($errors as $error) : ?>
  	                       <p style="color: red"><?php echo $error ?></p>
  	                 <?php endforeach ?>
                     <button type="button" class="close" data-dismiss="alert" style="margin-top: -20px">&times;</button>
		           </button>
               	</span>
               	
  		
  
</div>
<?php  endif ?>


