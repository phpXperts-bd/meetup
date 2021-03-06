<div class="hero">
      <div class="hero__container">
        <div class="hero__row">
          <div class="hero__videoWrapper">
            <div class="video">
              <span style="background-image: url({{ asset('devcon20/icons/youtube-logo.svg') }})"></span>
            </div>
          </div>
          <div class="hero__chatWrapper">
            <div class="mainContent">
              <div class="wrapContent">
                <h2 class="heading">Keynote</h2>
                <p class="copy">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                <h2 class="title">Speaker</h2>
                <a class="speaker" href="#link" data-modal="SpeakerInfo-uniqueNumber">
                  <div class="speaker__image" style="background-image: url({{ asset('devcon20/images/a0-40x40@2x.jpg') }});"></div>
                  <div class="speaker__content">
                    <h3 class="speaker__name">Mizanur Rahman</h3>
                    <p class="speaker__copy">Founder & CEO, TechMasters</p>
                  </div>
                </a>
                <div class="speaker">
                  <div class="speaker__image"></div>
                  <div class="speaker__content">
                    <h3 class="speaker__name">Name</h3>
                    <p class="speaker__copy">Role, Company</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottombar">
              <a class="chat" href="{{ route('live.session.slug', ['slug'=>'test-php-title']) }}">Join the chat</a>
            </div>
          </div>
        </div>
      </div>
    </div>