<?php
  if (empty($_SESSION['Login'])){
    $this->load->view('/templates/header');
  echo "登入後操作";
  $this->load->view('/templates/footer');
  //header('Location:login.php');
  die();
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>pay in successful!</h1>
        <h3>Lamborghini:&nbsp;<?php echo $lamb ?>&nbsp;輛</h3>
        <h3>Ferrari:&nbsp;<?php echo $ferr ?>&nbsp;輛</h3>
        <h3>Koenigsegg:&nbsp;<?php echo $koni ?>&nbsp;輛</h3>
        <h3>total:&nbsp;<?php echo $money ?></h3>
			</div>

		</div>
	</div><!-- .row -->
</div><!-- .container -->
