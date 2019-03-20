<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 2:12 PM
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
		<div class="row">
			<!-- Column -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-hover">
					<div class="box bg-cyan text-center">
						<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
						<h6 class="text-white">Dashboard</h6>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-hover">
					<div class="box bg-success text-center">
						<h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
						<h6 class="text-white">Charts</h6>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-hover">
					<div class="box bg-warning text-center">
						<h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
						<h6 class="text-white">Widgets</h6>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-hover">
					<div class="box bg-danger text-center">
						<h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
						<h6 class="text-white">Tables</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Latest Posts</h4>
					</div>
					<div class="comment-widgets scrollable">
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row m-t-0">
							<div class="p-2"><img src="<?=MEDIA?>images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
							<div class="comment-text w-100">
								<h6 class="font-medium">James Anderson</h6>
								<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
								<div class="comment-footer">
									<span class="text-muted float-right">April 14, 2016</span>
									<button type="button" class="btn btn-cyan btn-sm">Edit</button>
									<button type="button" class="btn btn-success btn-sm">Publish</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</div>
							</div>
						</div>
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row">
							<div class="p-2"><img src="<?=MEDIA?>images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
							<div class="comment-text active w-100">
								<h6 class="font-medium">Michael Jorden</h6>
								<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
								<div class="comment-footer">
									<span class="text-muted float-right">May 10, 2016</span>
									<button type="button" class="btn btn-cyan btn-sm">Edit</button>
									<button type="button" class="btn btn-success btn-sm">Publish</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</div>
							</div>
						</div>
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row">
							<div class="p-2"><img src="<?=MEDIA?>images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
							<div class="comment-text w-100">
								<h6 class="font-medium">Johnathan Doeting</h6>
								<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
								<div class="comment-footer">
									<span class="text-muted float-right">August 1, 2016</span>
									<button type="button" class="btn btn-cyan btn-sm">Edit</button>
									<button type="button" class="btn btn-success btn-sm">Publish</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Card -->
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">To Do List</h4>
						<div class="todo-widget scrollable" style="height:450px;">
							<ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
								<li class="list-group-item todo-item" data-role="task">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label todo-label" for="customCheck">
											<span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
										</label>
									</div>
									<ul class="list-style-none assignedto">
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
									</ul>
								</li>
								<li class="list-group-item todo-item" data-role="task">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label todo-label" for="customCheck1">
											<span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
										</label>
									</div>
									<div class="item-date"> 26 jun 2017</div>
								</li>
								<li class="list-group-item todo-item" data-role="task">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label todo-label" for="customCheck2">
											<span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
										</label>
									</div>
									<ul class="list-style-none assignedto">
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
									</ul>
								</li>
								<li class="list-group-item todo-item" data-role="task">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label todo-label" for="customCheck3">
											<span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
										</label>
									</div>
									<div class="item-date"> 26 jun 2017</div>
								</li>
								<li class="list-group-item todo-item" data-role="task">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label todo-label" for="customCheck4">
											<span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
										</label>
									</div>
									<ul class="list-style-none assignedto">
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
										<li class="assignee"><img class="rounded-circle" width="40" src="<?=MEDIA?>images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- card -->
				<div class="card">
					<div class="card-body">
						<h4 class="card-title m-b-0">Progress Box</h4>
						<div class="m-t-20">
							<div class="d-flex no-block align-items-center">
								<span>81% Clicks</span>
								<div class="ml-auto">
									<span>125</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div>
							<div class="d-flex no-block align-items-center m-t-25">
								<span>72% Uniquie Clicks</span>
								<div class="ml-auto">
									<span>120</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div>
							<div class="d-flex no-block align-items-center m-t-25">
								<span>53% Impressions</span>
								<div class="ml-auto">
									<span>785</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div>
							<div class="d-flex no-block align-items-center m-t-25">
								<span>3% Online Users</span>
								<div class="ml-auto">
									<span>8</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- card new -->
				<div class="card">
					<div class="card-body">
						<h4 class="card-title m-b-0">News Updates</h4>
					</div>
					<ul class="list-style-none">
						<li class="d-flex no-block card-body">
							<i class="fa fa-check-circle w-30px m-t-5"></i>
							<div>
								<a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
								<span class="text-muted">dolor sit amet, consectetur adipiscing</span>
							</div>
							<div class="ml-auto">
								<div class="tetx-right">
									<h5 class="text-muted m-b-0">20</h5>
									<span class="text-muted font-16">Jan</span>
								</div>
							</div>
						</li>
						<li class="d-flex no-block card-body border-top">
							<i class="fa fa-gift w-30px m-t-5"></i>
							<div>
								<a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
								<span class="text-muted">many many happy returns of the day</span>
							</div>
							<div class="ml-auto">
								<div class="tetx-right">
									<h5 class="text-muted m-b-0">11</h5>
									<span class="text-muted font-16">Jan</span>
								</div>
							</div>
						</li>
						<li class="d-flex no-block card-body border-top">
							<i class="fa fa-plus w-30px m-t-5"></i>
							<div>
								<a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
								<span class="text-muted">But already everything was solved. It will ...</span>
							</div>
							<div class="ml-auto">
								<div class="tetx-right">
									<h5 class="text-muted m-b-0">19</h5>
									<span class="text-muted font-16">Jan</span>
								</div>
							</div>
						</li>
						<li class="d-flex no-block card-body border-top">
							<i class="fa fa-leaf w-30px m-t-5"></i>
							<div>
								<a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
								<span class="text-muted">i am very happy to approved by TF</span>
							</div>
							<div class="ml-auto">
								<div class="tetx-right">
									<h5 class="text-muted m-b-0">20</h5>
									<span class="text-muted font-16">Jan</span>
								</div>
							</div>
						</li>
						<li class="d-flex no-block card-body border-top">
							<i class="fa fa-question-circle w-30px m-t-5"></i>
							<div>
								<a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
								<span class="text-muted">we glad that you choose our template</span>
							</div>
							<div class="ml-auto">
								<div class="tetx-right">
									<h5 class="text-muted m-b-0">15</h5>
									<span class="text-muted font-16">Jan</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5 class="card-title">Calender</h5>
				<div class="card">
					<div class="">
						<div class="row">
							<div class="col-lg-3 border-right p-r-0">
								<div class="card-body border-bottom">
									<h4 class="card-title m-t-10">Drag & Drop Event</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div id="calendar-events" class="">
												<div class="calendar-events m-b-20" data-class="bg-info"><i class="fa fa-circle text-info m-r-10"></i>Event One</div>
												<div class="calendar-events m-b-20" data-class="bg-success"><i class="fa fa-circle text-success m-r-10"></i> Event Two</div>
												<div class="calendar-events m-b-20" data-class="bg-danger"><i class="fa fa-circle text-danger m-r-10"></i>Event Three</div>
												<div class="calendar-events m-b-20" data-class="bg-warning"><i class="fa fa-circle text-warning m-r-10"></i>Event Four</div>
											</div>
											<!-- checkbox -->
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="drop-remove">
												<label class="custom-control-label" for="drop-remove">Remove after drop</label>
											</div>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
												<i class="ti-plus"></i> Add New Event
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="card-body b-l calender-sidebar">
									<div id="calendar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BEGIN MODAL -->
		<div class="modal none-border" id="my-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><strong>Add Event</strong></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
						<button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Add Category -->
		<div class="modal fade none-border" id="add-new-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><strong>Add</strong> a category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Category Name</label>
									<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
								</div>
								<div class="col-md-6">
									<label class="control-label">Choose Category Color</label>
									<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
										<option value="success">Success</option>
										<option value="danger">Danger</option>
										<option value="info">Info</option>
										<option value="primary">Primary</option>
										<option value="warning">Warning</option>
										<option value="inverse">Inverse</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL -->

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
