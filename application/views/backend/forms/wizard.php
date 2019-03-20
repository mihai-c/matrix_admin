<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 1:22 PM
	 */
?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><?php echo isset($title) ? $title : 'Matrix';?></h4>
				<div class="ml-auto text-right">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<div class="card">
			<div class="card-body wizard-content">
				<h4 class="card-title">Basic Form Example</h4>
				<h6 class="card-subtitle"></h6>
				<form id="example-form" action="#" class="m-t-40">
					<div>
						<h3>Account</h3>
						<section>
							<label for="userName">User name *</label>
							<input id="userName" name="userName" type="text" class="required form-control">
							<label for="password">Password *</label>
							<input id="password" name="password" type="text" class="required form-control">
							<label for="confirm">Confirm Password *</label>
							<input id="confirm" name="confirm" type="text" class="required form-control">
							<p>(*) Mandatory</p>
						</section>
						<h3>Profile</h3>
						<section>
							<label for="name">First name *</label>
							<input id="name" name="name" type="text" class="required form-control">
							<label for="surname">Last name *</label>
							<input id="surname" name="surname" type="text" class="required form-control">
							<label for="email">Email *</label>
							<input id="email" name="email" type="text" class="required email form-control">
							<label for="address">Address</label>
							<input id="address" name="address" type="text" class=" form-control">
							<p>(*) Mandatory</p>
						</section>
						<h3>Hints</h3>
						<section>
							<ul>
								<li>Foo</li>
								<li>Bar</li>
								<li>Foobar</li>
							</ul>
						</section>
						<h3>Finish</h3>
						<section>
							<input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
							<label for="acceptTerms">I agree with the Terms and Conditions.</label>
						</section>
					</div>
				</form>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<!-- ============================================================== -->
		<!-- End Right sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- footer -->
	<!-- ============================================================== -->
	<footer class="footer text-center">
		All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
	</footer>
	<!-- ============================================================== -->
	<!-- End footer -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
