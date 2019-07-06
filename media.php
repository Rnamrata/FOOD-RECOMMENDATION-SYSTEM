<div class="jumbotron" style="background-color: #dbf5f7">
	<div class="media">
	    <!-- <img src="<?php echo 'data:image/jpg; base64,' . base64_encode($row['image']) . '"height="200" width="250"' ; ?>" class="align-self-center mr-3" alt="..."> -->
	    <div class="media-body">
	        <h5 class="mt-0"><?php echo $row['name']; ?></h5><br>
			<button class="btn btn-primary btn-lg active" id="<?php echo $row['name']; ?>" onclick="my_func(this.id)">Details <i class="fas fa-angle-double-right"></i></button>
	    </div>
	</div>
</div>