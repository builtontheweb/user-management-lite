<main>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
				<div class="card my-5">
					<div class="card-body p-5 text-center">
						<div class="h3 font-weight-light mb-0">Password Recovery</div>
					</div>
					<hr class="my-0"/>
					<div class="card-body p-5">
						<div class="text-center small text-muted mb-4">Enter your email address below and we will send you a link to reset your password.</div>
						<div class="text-center mb-4">
							<?php $this->renderFeedbackMessages(); ?>
						</div>
						<form method="post" action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action">
							<div class="form-group"><label class="text-gray-600 small" for="emailExample">Email address</label>
								<input class="form-control form-control-solid py-4" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample" name="user_name_or_email" required/>
							</div>
							<div class="form-group text-center mt-3">
								<!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
								<center><img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha"/>
								</center>
								<a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0;" onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>
							</div>
							<div class="form-group">
								<label class="text-gray-600 small" for="emailExample">Captcha</label>
								<input class="form-control form-control-solid py-4" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample" name="captcha"/>
							</div>
							<div class="form-group mb-0">
								<input type="submit" class="btn btn-primary btn-block" value="Send reset link"/>
							</div>
						</form>
					</div>
					<hr class="my-0"/>
					<div class="card-body px-5 py-4">
						<div class="small text-center">Remember to check your spam</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>