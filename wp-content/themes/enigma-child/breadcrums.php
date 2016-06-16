<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php if(is_home()){echo "";}else{the_title();} ?></h1>
				<?php if ( function_exists('yoast_breadcrumb') )  {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
			</div>
		</div>
	</div>	
</div>