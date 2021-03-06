<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/nav'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-sm-12">
			<div class="card mx-3 mt-3 d-none d-lg-block">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<h5 class="text-muted">
								<strong>Profile</strong>
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div id="t_wall" data-user-id="<?= $profile['uuid'] ?>">
				<div class="card mx-3 my-3 d-md-block d-lg-none">
					<img src="<?= base_url(); ?>assets/img/banner.png" class="card-img-top" style="pointer-events: none;">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<small class="row my-3">
									<div class="col-4">
										<span class="text-muted">Username</span>
									</div>
									<div class="col-8">
										<span class="font-weight-bold">@
											<?php if ($this->session->userdata('SESS_ROLE') == 'User'): ?>
												<?= $profile['username'] ?>
											<?php else: ?>
													Guest
											<?php endif ?>
										</span>
									</div>
								</small>
								<small class="row my-3">
									<div class="col-4">
										<span class="text-muted">Created on</span>
									</div>
									<div class="col-8">
										<span class="text-muted"><?= $profile['u_created_on'] ?></span>
									</div>
								</small>
								<div class="row">
									<div class="col-12">
										<div class="row mt-3">
											<div class="col-12 d-flex justify-content-center">
												<svg class="bi bi-heart-fill text-warning" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							                      	<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
							                  	</svg>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-12 d-flex justify-content-center">
												<small class="mx-auto text-warning"><?= $supports['psic'] ?> supports</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 d-none d-lg-block">
			<div class="card mx-1 my-3">
				<img src="<?= base_url(); ?>assets/img/banner.png" class="card-img-top" style="pointer-events: none;">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<small class="row my-3">
								<div class="col-4">
									<span class="text-muted">Username</span>
								</div>
								<div class="col-8">
									<span class="font-weight-bold">@
										<?php if ($this->session->userdata('SESS_ROLE') == 'User'): ?>
											<?= $profile['username'] ?>
										<?php else: ?>
											Guest
										<?php endif ?>
									</span>
								</div>
							</small>
							<small class="row my-3">
								<div class="col-4">
									<span class="text-muted">Created on</span>
								</div>
								<div class="col-8">
									<span class="text-muted"><?= $profile['u_created_on'] ?></span>
								</div>
							</small>
							<div class="row mt-3">
								<div class="col-12 d-flex justify-content-center">
									<svg class="bi bi-heart-fill text-warning" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				                      	<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
				                  	</svg>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-12 d-flex justify-content-center">
									<small class="mx-auto text-warning"><?= $supports['psic'] ?> supports</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-panel">
				<div class="row">
					<div class="col-12">
						<div class="card mx-1 my-3">
						  	<h5 class="card-header">
						  		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  	<path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
								  	<path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
								</svg> Most Read
						  	</h5>
						  	<div class="card-body">
								<?php if ($this->session->userdata('SESS_IS_LOGGED')): ?>
									<small class="list-group list-group-flush" id="mr_wall"></small>
								<?php else: ?>
									<small><a href="<?= base_url() ?>login">Login</a> to view most read thoughts.</small>
								<?php endif ?>
						  	</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<small class="d-flex justify-content-center text-muted">
							<span class="mx-3">Privacy</span>
							<span class="mx-3">Terms</span>
							<span class="mx-3">Developer</span>
							<a href="<?= base_url() ?>report" class="text-muted mx-3">Report a bug</a>
						</small>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-12">
						<small class="d-flex justify-content-center text-muted">
							<span>HereForU 2020</span>
						</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer'); ?>