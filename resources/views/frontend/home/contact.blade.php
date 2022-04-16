<div class="contact">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="contact_content">
                                <div class="contact_title"><h2>Напишите нам<span>.</span></h2></div>
              <div class="contact_form_container">
                <form action="contactform.php" method="post" class="contact_form" id="contact_form">
                  <div class="d-flex flex-lg-row flex-column align-items-end justify-content-start">
                    <div class="contact_form_content">
                      <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                        <div>
                          <input type="text" class="contact_input" name="name" placeholder="Имя" required="required">
                        </div>
                        <div id="email_contact">
                          <input type="email" class="contact_input" name="email" placeholder="Почта">
                          <p class="float-left ml-auto tel_contact"><i onclick="tel_contact()" class="fa fa-phone"></i></p>
                        </div>
                        <div id="tel_contact">
                          <input type="number" name="tel" class="contact_input"  placeholder="Номер">
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
                        <textarea class="contact_input contact_textarea" name="messeg" placeholder="Сообщение" required="required"></textarea>
                      </div>
                    </div>
                    
                      <input type="submit" name="send" class="wow shake contact_form_button button" value="Отправить">
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>