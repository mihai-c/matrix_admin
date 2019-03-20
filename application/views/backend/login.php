<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark border-top border-secondary">
        <div id="loginform">
            <div class="text-center p-t-20 p-b-20">
                <span class="db"><img src="<?= MEDIA ?>images/logo.png" alt="logo"/></span>
            </div>
            <div class="text-center p-t-20 p-b-20">
				<?php
					echo $this->session->flashdata('error') ? '<span class="badge badge-danger">' . $this->session->flashdata('error') . '</span>' : '';
					echo $this->session->flashdata('success') ? '<span class="badge badge-success">' . $this->session->flashdata('success') . '</span>' : '';
					$this->session->set_flashdata('error', '');
					$this->session->set_flashdata('success', '');
				?>
            </div>
            <!-- Form -->
			<?= form_open('admin/authenticate', 'class="form-horizontal m-t-20" id="loginform"') ?>
            <div class="row p-b-30">
                <div class="col-12">
					<?php echo form_error('email') ? '<span class="badge badge-danger" role="alert">' . form_error('email') . '</span>' : ''; ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-email"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="E-mail"
                               aria-label="E-mail" aria-describedby="basic-addon1" required=""
                               value="<?= set_value('email'); ?>">
                    </div>
					<?php echo form_error('passwd') ? '<span class="badge badge-danger" role="alert">' . form_error('passwd') . '</span>' : ''; ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                        </div>
                        <input type="password" name="passwd" class="form-control form-control-lg" placeholder="Password"
                               aria-label="Password" aria-describedby="basic-addon1" required="">
                    </div>

                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="p-t-20">
                            <button class="btn btn-info" id="to-recover" type="button"><i
                                        class="fa fa-lock m-r-5"></i> Lost password?
                            </button>
                            <button class="btn btn-success float-right" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
			<?= form_close() ?>
        </div>
        <div id="recoverform">
            <div class="text-center">
                <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
            </div>
            <div class="row m-t-20">
                <!-- Form -->
				<?= form_open('', 'class="col-12"') ?>
                <!-- email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i
                                            class="ti-email"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Email Address"
                           aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <!-- pwd -->
                <div class="row m-t-20 p-t-20 border-top border-secondary">
                    <div class="col-12">
                        <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                        <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                    </div>
                </div>
				<?= form_close(); ?>
            </div>
        </div>
    </div>
</div>