<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('headclient')
{{-- fin entete de page  --}}


<head>


<body>
    @include('menuinclude')
    <!-- Main Content -->
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="profile-cover-wrap overlay-wrap">
                            <div class="profile-cover-img" style="background-image:url('dist/img/trans-bg.jpg')"></div>
							<div class="bg-overlay bg-trans-dark-60"></div>
							<div class="container profile-cover-content py-50">
								<div class="hk-row">
									<div class="col-lg-6">
										<div class="media align-items-center">
											<div class="media-img-wrap  d-flex">
												<div class="avatar">
													<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body">
												<div class="text-white text-capitalize display-6 mb-5 font-weight-400">Cecilia Rios</div>
												<div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">124</span><span class="mr-5">Followers</span></span><span><span class="font-weight-500 pr-5">45</span><span>Following</span></span></div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="button-list">
											<a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span class="btn-text">Message</span><span class="icon-label"><i class="icon ion-md-mail"></i> </span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-indigo btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-sky btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-purple btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="bg-white shadow-bottom">
							<div class="container">
								<ul class="nav nav-light nav-tabs" role="tablist">
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link active">Feed</a>
									</li>
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link">Projects</a>
									</li>
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link">Groups</a>
									</li>
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link">Photos</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-content mt-sm-60 mt-30">
							<div class="tab-pane fade show active" role="tabpanel">
								<div class="container">
									<div class="hk-row">
										<div class="col-lg-8">
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<div class="media align-items-center">
														<div class="media-img-wrap d-flex mr-10">
															<div class="avatar avatar-sm">
																<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
															</div>
														</div>
														<div class="media-body">
															<div class="text-capitalize font-weight-500 text-dark">Madelyn Rascon</div>
															<div class="font-13">25 min</div>
														</div>
													</div>
													<div class="d-flex align-items-center card-action-wrap">
														<div class="inline-block dropdown">
															<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="{{ url('/apropos') }}">Apropos</a>
																<a class="dropdown-item" href="{{ url('/blog') }}">Blog</a>
																<a class="dropdown-item" href="{{ url('/contact') }}">Contact</a>
																<div class="dropdown-divider"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="card-text mb-30">There was that time artists at Sequence opted to hand-Sharpie the lorem ipsum passage on a line of paper bags they designed for Chipotle.</p>
													<div class="card">
														<div class="position-relative">
															<img class="card-img-top d-block" src="dist/img/gallery/mock12.jpg" alt="Card image cap">
															<a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span class="icon-label"><i class="ion ion-md-link"></i></span><span class="btn-text">website</span></a>
														</div>
														<div class="card-body">
															<h5 class="card-title">Bacon chicken turducken spare ribs.</h5>
															<p class="card-text">Of course, we d be remiss not to include the veritable cadre of lorem ipsum knock offs featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
														</div>
													</div>
												</div>
												<div class="card-footer justify-content-between">
                                                    <div>
														<a href="#"><i class="ion ion-md-heart text-primary"></i>30K</a>
													</div>
													<div>
														<a href="#">1K comments</a>
														<a href="#">12 shares</a>
													</div>
                                                </div>
                                            </div>
											<div class="card-columns card-column-1">
												<div class="card card-profile-feed mb-0 rounded-bottom-0">
													<div class="card-header card-header-action">
														<div class="media align-items-center">
															<div class="media-img-wrap d-flex mr-10">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<div class="text-capitalize font-weight-500 text-dark">Mitsoku Heid</div>
																<div class="font-13">3 hrs</div>
															</div>
														</div>
														<div class="d-flex align-items-center card-action-wrap">
															<div class="inline-block dropdown">
																<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Action</a>
																	<a class="dropdown-item" href="#">Another action</a>
																	<a class="dropdown-item" href="#">Something else here</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Separated link</a>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body">
														<p class="card-text mb-30">Not to mention, Cupcake Ipsum, Bob Ross Ipsum (“happy little clouds”), and the furry Cat Ipsum.</p>
														<div class="feed-img-layout">
															<div class="row h-200p">
																<div class="col-6 h-100">
																	<div class="feed-img h-100" style="background-image:url(dist/img//gallery/mock11.jpg);"></div>
																</div>
																<div class="col-6 h-100">
																	<div class="row h-100">
																		<div class="col-sm-12 h-95p mb-10">
																			<div class="feed-img h-100" style="background-image:url(dist/img/slide1.jpg);"></div>
																		</div>
																		<div class="col-sm-12 h-95p">
																			<div class="row h-100">
																				<div class="col-6 h-100">
																					<div class="feed-img h-100" style="background-image:url(dist/img/slide2.jpg);"></div>
																				</div>
																				<div class="col-6 h-100">
																					<div class="feed-img h-100" style="background-image:url(dist/img/slide3.jpg);"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer justify-content-between">
														<div>
															<a href="#"><i class="ion ion-md-heart text-primary"></i>94</a>
														</div>
														<div>
															<a href="#">1.5K comments</a>
															<a href="#">18 shares</a>
														</div>
													</div>
												</div>
												<div class="card card-profile-feed border-top-0 rounded-top-0">
													<div class="card-body">
														<button class="btn btn-light btn-sm btn-block mb-25">Hide comments</button>
														<div class="media">
															<div class="media-img-wrap d-flex mr-10">
																<div class="avatar avatar-xs">
																	<img src="dist/img/avatar5.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<div class="text-capitalize font-14 font-weight-500 text-dark">Eziquiel Merideth</div>
																<div class="font-15"><p>So there you have it. The nonsense words unable to fully escape meaning.</p></div>
																<div class="d-flex mt-10">
																	<span class="font-14 text-light mr-15">1 hr</span>
																	<a href="#" class="font-14 text-light text-capitalize font-weight-500">reply</a>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="media w-100 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-xs">
																	<img src="dist/img/avatar11.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<textarea class="form-control filled-input bg-transparent" rows="1" placeholder="Leave a comment..."></textarea>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<div class="media align-items-center">
														<div class="media-img-wrap d-flex mr-10">
															<div class="avatar avatar-sm">
																<img src="dist/img/avatar6.jpg" alt="user" class="avatar-img rounded-circle">
															</div>
														</div>
														<div class="media-body">
															<div class="text-capitalize font-weight-500 text-dark">Johnie Metoyer</div>
															<div class="font-13">11 hrs</div>
														</div>
													</div>
													<div class="d-flex align-items-center card-action-wrap">
														<div class="inline-block dropdown">
															<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="card-text mb-30">Below are the original Latin passages from which Lorem Ipsum was derived, paired with their 1914 translations by H. Rackham.</p>
													<div class="card">
														<div class="position-relative">
															<img class="card-img-top rounded d-block" src="dist/img/slide7.jpg" alt="Card image cap">
															<a href="#" class="btn-video-link"></a>
														</div>
													</div>
												</div>
												<div class="card-footer justify-content-between">
                                                    <div>
														<a href="#"><i class="ion ion-md-heart text-primary"></i>142</a>
													</div>
													<div>
														<a href="#">751 comments</a>
														<a href="#">2 shares</a>
													</div>
                                                </div>
                                            </div>
										</div>
										<div class="col-lg-4">
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<div class="media align-items-center">
														<div class="media-img-wrap d-flex mr-10">
															<div class="avatar avatar-sm">
																<img src="dist/img/avatar7.jpg" alt="user" class="avatar-img rounded-circle">
															</div>
														</div>
														<div class="media-body">
															<div class="text-capitalize font-weight-500 text-dark">Angelic Lauver</div>
															<div class="font-13">Business Manager</div>
														</div>
													</div>
													<div class="d-flex align-items-center card-action-wrap">
														<div class="inline-block dropdown">
															<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-settings"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-4 border-right pr-0">
														<div class="pa-15">
															<span class="d-block display-6 text-dark mb-5">154</span>
															<span class="d-block text-capitalize font-14">photos</span>
														</div>
													</div>
													<div class="col-4 border-right px-0">
														<div class="pa-15">
															<span class="d-block display-6 text-dark mb-5">65</span>
															<span class="d-block text-capitalize font-14">followers</span>
														</div>
													</div>
													<div class="col-4 pl-0">
														<div class="pa-15">
															<span class="d-block display-6 text-dark mb-5">433</span>
															<span class="d-block text-capitalize font-14">views</span>
														</div>
													</div>
												</div>
												<ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>Went to:</span></span><span class="ml-5 text-dark">Oh, Canada</span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Worked at:</span></span><span class="ml-5 text-dark">Companey</span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-home font-18 text-light-20 mr-10"></i><span>Lives in:</span></span><span class="ml-5 text-dark">San Francisco, CA</span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-pin font-18 text-light-20 mr-10"></i><span>From:</span></span><span class="ml-5 text-dark">Settle, WA</span></li>
                                                </ul>
											 </div>
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<h6>You know these people ?</h6>
													<div class="d-flex align-items-center card-action-wrap">
														<div class="inline-block dropdown">
															<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
													</div>
												</div>
												<ul class="list-group list-group-flush">
                                                    <li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Evie Ono</span>
																<span class="d-block font-13">Apple Inc</span>
															</div>
															<a href="#" class="text-light-40 ml-auto"><i class="ion ion-md-add font-24"></i></a>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Clay Masse</span>
																<span class="d-block font-13">Hencework.com</span>
															</div>
															<a href="#" class="text-light-40 ml-auto"><i class="ion ion-md-add font-24"></i></a>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Madelyn Rascon</span>
																<span class="d-block font-13">Godaddy.co.in</span>
															</div>
															<a href="#" class="text-success ml-auto"><i class="ion ion-md-checkmark font-20"></i></a>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Mitsoku Heid</span>
																<span class="d-block font-13">Flipkart</span>
															</div>
															<a href="#" class="text-success ml-auto"><i class="ion ion-md-checkmark font-20"></i></a>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar5.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Eziquiel Merideth</span>
																<span class="d-block font-13">Paypal</span>
															</div>
															<a href="#" class="text-light-40 ml-auto"><i class="ion ion-md-add font-24"></i></a>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar6.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Johnie Metoyer</span>
																<span class="d-block font-13">Robocon</span>
															</div>
															<a href="#" class="text-success ml-auto"><i class="ion ion-md-checkmark font-20"></i></a>
														</div>
													</li>
                                                </ul>
											</div>
											<div class="card card-profile-feed">
												<div class="card-header card-header-action">
													<h6><span>Friends <span class="badge badge-soft-primary ml-5">212</span></span></h6>
													<a href="#" class="font-14 ml-auto">View all</a>
												</div>
												<div class="card-body pb-5">
													<div class="hk-row text-center">
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar1.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Evie Ono</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar2.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Clay Masse</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar3.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Madelyn Rascon</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar4.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Mitsoku Heid</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar5.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Eziquiel Merideth</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar6.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Johnie Metoyer</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar7.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Angelic Lauver</span>
														</div>
														<div class="col-3 mb-15">
															<div class="w-100">
																<img src="dist/img/avatar8.jpg" alt="user" class="img-fluid rounded">
															</div>
															<span class="d-block font-14 text-truncate">Cecilia Rios</span>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-profile-feed">
												<div class="card-header card-header-action">
													<h6><span>Groups <span class="badge badge-soft-success ml-5">12</span></span></h6>
													<a href="#" class="font-14 ml-auto">View all</a>
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/slide1.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Landscape Group</span>
																<span class="d-block font-13">1.25K Members</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/slide2.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Josh Groben Fanclub</span>
																<span class="d-block font-13">2M Members</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">UI/UX Lead</span>
																<span class="d-block font-13">8K Members</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="dist/img/slide3.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize">Design Yatra</span>
																<span class="d-block font-13">14K Members</span>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<div class="card card-profile-feed">
												<div class="card-header card-header-action">
													<h6><span>Links <span class="badge badge-soft-warning ml-5">7</span></span></h6>
													<div class="d-flex align-items-center card-action-wrap">
														<div class="inline-block dropdown">
															<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
													</div>
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>G</span></span>
																	</span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize text-truncate mw-150p">Google.com</span>
																<span class="d-block font-13 text-truncate mw-150p">google.com</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-primary rounded-circle"><span class="initial-wrap"><span>PR</span></span>
																	</span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize text-truncate mw-150p">Improve your business</span>
																<span class="d-block font-13 text-truncate mw-150p">yahoo.com</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-success rounded-circle"><span class="initial-wrap"><span>AB</span></span>
																	</span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize text-truncate mw-150p">Cast the cookware</span>
																<span class="d-block font-13 text-truncate mw-150p">yahoo.com</span>
															</div>
														</div>
													</li>
													<li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-danger rounded-circle"><span class="initial-wrap"><span>LR</span></span>
																	</span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize text-truncate mw-150p">The universe thought sds sa</span>
																<span class="d-block font-13 text-truncate mw-150p">facebook.com</span>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<div class="card bg-primary text-center border-0">
                                                <div class="twitter-slider-wrap card-body">
                                                    <div class="twitter-icon text-center mb-15">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                    <div id="tweets_fetch" class="owl-carousel owl-theme"></div>
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

            <!-- /Container -->

    <!-- /Main Content -->

