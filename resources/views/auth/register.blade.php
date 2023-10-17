<x-layout>
		
		<div class="container-fluid  register2">
			<div class="row justify-content-around contenuto animazione">
				<div class="col-12 col-lg-4">
					<div class="section">
						<div class="container">
							<div class="row full-height justify-content-center mb-5">
								<div class="col-12 text-center align-self-center py-5">
									<div class="section pb-5 pt-5 pt-sm-2 text-center">
										<h6 class="mb-0 pb-3 mt-5"><span>Login</span><span>Registrati</span></h6>
										<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
										<label for="reg-log"></label>
										<div class="card-3d-wrap mx-auto">
											<div class="card-3d-wrapper">
												<form class="card-front" method="POST" action="{{route('login')}}">
													@csrf
													<div class="center-wrap">
														<div class="section text-center">
															<h4 class="mb-4 pb-3">Login</h4>
															<div class="form-group">
																<input type="email" name="email" class="form-style" placeholder="Inserisci Email" id="email-register" autocomplete="off">
																<i class="input-icon uil uil-at"></i>
															</div>	
															<div class="form-group mt-2">
																<input type="password" name="password" class="form-style" placeholder="Password" id="logpass" autocomplete="off">
																<i class="input-icon uil uil-lock-alt"></i>
															</div>
															<a href="#" class="btn mt-4"><button type="submit" class="btn btn-primary">ACCEDI</button></a>
															<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Hai dimenticato la password?</a></p>
														</div>
													</div>
												</form>
												
												
												
												<form class="card-back" method="POST" action="{{route('register')}}">
													@csrf
													<div class="center-wrap">
														<div class="section text-center">
															<h4 class="mb-4 pb-3">Registrati</h4>
															<div class="form-group">
																<input type="text" name="name" class="form-style" placeholder="Username" id="name" autocomplete="off">
																<i class="input-icon uil uil-user"></i>
															</div>	
															<div class="form-group mt-2">
																<input type="email" name="email" class="form-style" placeholder="Inserisci Email" id="email" autocomplete="off">
																<i class="input-icon uil uil-at"></i>
															</div>	
															<div class="form-group mt-2">
																<input type="password" name="password" class="form-style" placeholder="Password" id="password" autocomplete="off">
																<i class="input-icon uil uil-lock-alt"></i>
															</div>
															<div class="form-group mt-2">
																<input type="password" name="password_confirmation" class="form-style" placeholder="Ripeti Password" id="password_confirmation" autocomplete="off">
																<i class="input-icon uil uil-lock-alt"></i>
															</div>
															<a href="#" class="btn mt-4"><button type="submit" class="btn btn-primary">REGISTRATI</button></a>
														</div>
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
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</x-layout>