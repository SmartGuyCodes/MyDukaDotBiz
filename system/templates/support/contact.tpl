{include file="shared/head.tpl"}

<!-- Cookies Policy start-->
<div class="contact-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="left-sidebar-title">
					<ul class="page-menu">
						<li><a href="#">Home</a></li>
						<li><a class="active" href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<!-- Left Sidebar-->
				{include file="shared/support_sidebar.tpl"}
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<div class="contact-us-area">
					<!-- Map area -->
					<div class="page-title">
						<h1>My Duka Dot Biz Call center</h1>
					</div>
					<div class="google-map">
						<div id="contactCenter" style="width:100%;height:300px;"></div>
					</div>
					<!--./End-->

					<!-- End Map area -->
					<div class="contact-us-form">
						<div class="page-title">
							<h1>Contact Us</h1>
						</div>
						<div class="contact-form">
							<div class="col-sm-12">
								<div class="porduct-rev-right-form">
									<form id="myduka-contact-form" action="/{$globals.support.contact_us}" method="post" enctype="multipart/form-data" class="form-horizontal">
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 col-sm-12 col-xs-12">
													<label for="contact-us-name">Your Name</label>
												</div>
												<div class="col-md-10 col-sm-12 col-xs-12">
													<input id="contact-us-name" type="text" class="form-control" name="name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 col-sm-12 col-xs-12">
													<label for="contact-us-email">E-Mail Address</label>
												</div>
												<div class="col-md-10 col-sm-12 col-xs-12">
													<input id="contact-us-email" type="email" class="form-control" name="email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 col-sm-12 col-xs-12">
													<label for="contact-us-msg">Enquiry</label>
												</div>
												<div class="col-md-10 col-sm-12 col-xs-12">
													<textarea id="contact-us-msg" class="form-control" rows="10" name="message"></textarea>
												</div>
											</div>
										</div>
										<div class="form-goroup form-group-button">
											<button class="custom-button" type="submit"><span>submit</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}