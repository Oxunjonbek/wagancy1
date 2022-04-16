<div class="contact">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="contact_content">
					<div class="contact_title"><h2>
						{{Lang::get('home.napishite')}}<span>.</span></h2></div>
					<div class="contact_form_container">
						<form action="{{ route('message') }}" method="post" class="contact_form" id="contact_form">
							{{csrf_field()}}
							<div class="d-flex flex-lg-row flex-column align-items-end justify-content-start">
								<div class="contact_form_content">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<div>
											@if(Session::get('locale')=='ru')
											<input type="text" class="contact_input" name="name" placeholder="Имя" required="required">
											@else
											<input type="text" class="contact_input" name="name" placeholder="Name" required="required">
											@endif
										</div>
										<div id="email_contact">
											@if(Session::get('locale')=='ru')
											<input type="email" class="contact_input" name="email" placeholder="Почта">
											@else
											<input type="email" class="contact_input" name="email" placeholder="Email">
											@endif
											
											<p class="float-left ml-auto tel_contact"><i onclick="tel_contact()" class="fa fa-phone"></i></p>
										</div>
										<div id="tel_contact">
											@if(Session::get('locale')=='ru')
											<input type="number" name="phone" class="contact_input"  placeholder="Номер">
											@else
											<input type="number" name="phone" class="contact_input"  placeholder="Number">
											@endif
											
											<p class="float-left ml-auto tel_contact"><i onclick="email_contact()" class="fa fa-envelope"></i></p>
										</div>
										<script>
											function email_contact(){
												document.getElementById('tel_contact').style.display = "none"
												document.getElementById('email_contact').style.display = "block"
											}
											function tel_contact(){
												document.getElementById('tel_contact').style.display = "block"
												document.getElementById('email_contact').style.display = "none"
											}
										</script>
									</div>
									<div class="wow flipInX">
										@if(Session::get('locale')=='ru')
											<textarea class="contact_input contact_textarea" name="description" placeholder="Сообщение" required="required"></textarea>
											@else
											<textarea class="contact_input contact_textarea" name="description" placeholder="Message" required="required"></textarea>
											@endif
										
									</div>
								</div>
								@if(Session::get('locale')=='ru')
											<input type="submit" name="send" class="wow shake contact_form_button button" value="Отправить">

											@else
											<input type="number" name="phone" class="contact_input"  placeholder="Submit">
											@endif
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>