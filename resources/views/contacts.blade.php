<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="block">
                    <div class="heading wow fadeInUp">
                        <h2>Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
    <div class="block text-left">
      <div class="sub-heading">
        <h4>Контактная информация</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos maxime voluptate doloribus, voluptatum nemo vel ipsa in eligendi, ullam. Ducimus consequuntur labore error hic.</p>
      </div>
      <address class="address">
        <hr>
        <p>Dhanmondi 32,<br> Dhaka,<br> Bangladesh</p>
        <hr>
        <p><strong>E:</strong>&nbsp;hello@foundry.net<br>
        <strong>P:</strong>&nbsp;+614 3948 2726</p>
      </address>
    </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
              <div class="form-group">
                <form action="#" method="post" id="contact-form">
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Ф.И.О" name="name">
                  </div>
                  <div class="input-field">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Телефон" name="phone">
                  </div>
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Страна" name="country">
                  </div>
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Город" name="city">
                  </div>
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Возраст" name="age">
                  </div>
                  <div class="input-field">
                    <input type="text" class="form-control" placeholder="Церковь" name="chirch">
                  </div>
<!--                            <div class="input-field">
                      <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    </div>-->
                  {{ csrf_field() }}  
                  <button class="btn btn-send" type="submit">Зарегестрироваться</button>
                </form>

                <div id="success">
                    <p>Your Message was sent successfully</p>
                </div>
                <div id="error">
                    <p>Your Message was not sent successfully</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>