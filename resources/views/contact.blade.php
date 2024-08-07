
@extends('includes.master')
@section('content')

 
<main class="main-root">
  <div id="dsn-scrollbar">
    <header>
      <div class="container header-hero">
        <div class="row">
          <div class="col-lg-6">
            <div class="contenet-hero">
              <h5>Lat's Tock</h5>
              <h1>Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="wrapper">
      <div class="root-contact">
        <div class="container-fluid ">
          <div class="map-custom" id="map" data-dsn-lat="30.0489206" data-dsn-len="31.258553" data-dsn-zoom="14">
          </div>
        </div>

        <div class="container section-margin">
          <div class="row">
            <div class="col-lg-6">
              <div class="box-info-contact">
                <h3>Start a new project?</h3>
                <h5>Visit our studio at</h5>
                <p>Sed ut perspiciatis unde omnis iste natus error sit vo
                  luptatem accusantium natus error sit omnis iste natus</p>

                <ul>
                  <li>
                    <span>Phone</span>
                    <a href="#">+1 (800) 990 8877</a>
                  </li>
                  <li>
                    <span>Email</span>
                    <a href="#">info@example.com</a>
                  </li>
                  <li>
                    <span>Address</span>
                    <a href="#">778 NE 84th St Miami, FL</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-box">
                <h3>Write A Comment</h3>
                <form id="contact-form" class="form" method="post" action="https://theme.dsngrid.com/droow/contact.php" data-toggle="validator">
                  <div class="messages"></div>
                  <div class="input__wrap controls">
                    <div class="form-group">

                      <div class="entry">
                        <label>What's your name?</label>
                        <input id="form_name" type="text" name="name" placeholder="Type your name" required="required"
                          data-error="name is required.">
                      </div>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <div class="entry">
                        <label>What's your email address?</label>
                        <input id="form_email" type="email" name="email" placeholder="Type your Email Address"
                          required="required" data-error="Valid email is required.">
                      </div>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <div class="entry">
                        <label>What's up?</label>
                        <textarea id="form_message" class="form-control" name="message"
                          placeholder="Tell us about you and the world" required="required"
                          data-error="Please,leave us a message."></textarea>
                      </div>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="image-zoom" data-dsn="parallax">
                      <button>Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="contact-up section-margin section-padding">
        <div class="container">
          <div class="c-wapp">
            <a href="work.html" class="effect-ajax">
              <span class="hiring">
                portfolio
              </span>
              <span class="career">
                See More Works
              </span>
            </a>
          </div>
        </div>
      </section>

      <footer>
        <div class="info">
          <div class="contact-footer">
            <a href="tel:010" class="phone image-zoom" data-dsn="parallax">012.345.6789</a>
            <a href="#" class="email image-zoom" data-dsn="parallax">info@dsngrid</a>
          </div>
          <div class="copyright-social">
            <p>© 2019 Design Grid</p>
            <ul>
              <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Instagram</a></li>
              <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Facebook</a></li>
              <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Linkedin</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
</main>


@endsection