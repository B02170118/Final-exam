<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
$this->load->view('/templates/header2');
	/*if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true)
	{
	    $this->session->set_flashdata('error', 'You have to signin');
		$this->load->view('signinV');
	} */
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">

				<h1>Thank you for signin!</h1>
			</div>
			<p>You have successfully login&nbsp;,&nbsp;三秒後自動轉跳</p>

		</div>
	</div><!-- .row -->
</div><!-- .container -->

<Script Language="JavaScript">
setTimeout("location.href='<?php echo base_url() . '.home';?>'",3000);

</Script>
<?php $this->load->view('/templates/footer'); ?>
