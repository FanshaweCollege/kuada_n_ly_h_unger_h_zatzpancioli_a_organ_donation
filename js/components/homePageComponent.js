export default {
    template: `
    <div>
    <section class="large-12 medium-12 small-12 columns">  
      <div class="greenBox"></div>
    </section>

<section class="bannerBox large-12 medium-12 small-12 columns" id="bannerBox">  
      <div class="banner large-12 medium-12 small-12 align-center columns hide-for-small-only">
      <img src="images/banner1.jpg" id="banner1">
      </div>
      <div class="banner large-12 medium-12 small-12 align-center columns show-for-small-only">
          <img src="images/banner1_mobile.jpg" id="banner1">
      </div>
</section>

<section class="large-12 medium-12 small-12 columns">  
  <div class="greenBox"></div>
</section>

<section class="videoBox large-12 medium-12 small-12 columns" id="videoBox"> 
  <div class="videoYouCan large-offset-1 large-10 large-offset-1 medium-offset-1 medium-10 medium-offset-1 small-12 columns">
    <div class="video large-6 medium-6 small-12 align-center columns">
    <img src="images/video.png" id="video">
    </div>
    <div class="youCan large-offset-1 large-5 medium-offset-1 medium-5 small-12 columns wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
        <div id="youCanBox">
        <h1>{{ mainMessage1 }}</h1>
        <h1>{{ mainMessage2 }}</h1>
        <h2>{{ mainMessage3 }}</h2>
        <p>{{ mainMessage4 }}</p>
        </div>
    </div>
  </div>
  <div class="beat hidden large-12 medium-12 small-push-12 align-center columns">
    <?xml version="1.0" encoding="utf-8"?>
    <svg version="1.1" id="path" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 1107.7 233.3" style="enable-background:new 0 0 1107.7 233.3;" xml:space="preserve">
    <path style="
    fill:none;stroke:#2FA99F;stroke-width:4;stroke-miterlimit:10; stroke-dasharray:2300;stroke-dashoffset:2300;animation: dash 5s linear forwards;" d="M1,122.5 607.9,122.5 617.1,100.5 
    628,140.9 634.5,120.5 644.5,120.5 650.5,109.7 656.3,120.5 669.5,120.5 688,51.7 699,168.3 713,120.5 726,120.5 733,113.3 
    740.3,120.7 746.5,120.7 754.8,100.7 763.1,120.5 777.4,120.5 786.6,100.5 797.7,135.9 803.9,120.5 813,120.5 820,109.7 
    825.7,120.5 838.9,120.5 857.5,53.6 868.4,168.3 882.5,120.5 895.5,120.5 902.5,113.3 910,120.5 916,120.5 924.3,100.7 932.5,120.5 
    946.8,120.5 956,100.5 967.1,135.9 973.4,120.5 982.5,120.5 989.4,109.7 995.1,120.5 1008.3,120.5 1026.9,53.6 1037.9,168.3 
    1051.9,120.5 1064.9,120.5 1071.9,113.3 1079.4,120.5 1085.4,120.5 1093.7,100.7 1102,120.5 1107.8,120.5 "/>
    </svg>
  </div>
</section>

<section class="signUp large-12 medium-12 small-12 columns">  
  <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original"><h2>SIGN UP TO BE A DONOR NOW</h2></a>
</section>

<section class="donationBox large-12 medium-12 small-12 columns" id="donationBox">
  <div class="donation large-offset-1 large-10 large-offset-1 medium-12 small-12 columns">
    <h1>Organ donation is the act of giving an organ to save or improve the life of someone who needs a transplant.</h1>
    <div class="large-4 medium-4 small-12 columns wow fadeInUpBig" data-wow-duration="1s">
      <h2>What Can Be Donate</h2>
      <p>Kidney, corneas, heart, lungs, liver, pancreas, small bowel and tissue.<br>You are able to donate some organs while you’re alive, for example, a kidney, or part of your liver but most organ and tissue donations will come from people who have died.
      </p>
    </div>
    <div class="large-4 medium-4 small-12 columns wow fadeInUpBig" data-wow-duration="1s">
      <h2>Who Can Donate</h2>
      <p>Almost everyone can donate organs and tissue. Whether the donation actually happens depends on where and how a person dies, and the condition of their organs and tissue.</p>
    </div>
    <div class="large-4 medium-4 small-12 columns wow fadeInUpBig" data-wow-duration="1s">
      <h2>The Donation Process</h2>
      <p>To be an organ donor you need to die in hospital in specific circumstances. When this happens, a specialist nurse will check if you’re a registered organ donor. Your family will be expected to support your decision, or they will be asked to make a decision on your behalf.</p>
    </div>
  </div>
  <div class="organs large-12 medium-12 small-push-12 align-center columns">
      <object data="images/organs.svg" id="organs"></object>
  </div>
</section>

<section class="share large-12 medium-12 small-12 columns">  
<router-link :to="{name:'form'}"><h2>SHARE YOUR STORY</h2></router-link>
</section>

<section class="factsBox large-12 medium-12 small-12 columns" id="factsBox">
  <div class="facts large-offset-1 large-10 large-offset-1 medium-12 small-12 columns"> 
    <h2>Facts</h2>
    <div class="large-3 medium-3 small-6 columns wow fadeInUpBig" data-wow-duration="1s">
      <img src="images/1_icon.svg" class="icon">
      <p>Every year too many people die while waiting for an organ donation.</p>
    </div>
    <div class="large-3 medium-3 small-6 columns wow fadeInUpBig" data-wow-duration="1s">
      <img src="images/2_icon.svg" class="icon">
      <p>Over 1,600 Canadians are added to organ wait lists yearly.</p>
    </div>
    <div class="large-3 medium-3 small-6 columns wow fadeInUpBig" data-wow-duration="1s">
      <img src="images/3_icon.svg" class="icon">
      <p>One donor can benefit more than 75 people and save up to 8 lives.</p>
    </div>
    <div class="large-3 medium-3 small-6 columns wow fadeInUpBig" data-wow-duration="1s">
      <img src="images/4_icon.svg" class="icon">
      <p>A 90% majority of Canadians support organ and tissue donation but less than 20% have made plans to donate.</p>
    </div>
  </div> 
</section>

<section class="aboutBox large-12 medium-12 small-12 columns" id="aboutBox"> 
  <div class="about large-offset-1 large-10 large-offset-1 medium-12 small-12 columns">
  <div class="iconBox large-4 large-4 medium-4 small-12 align-center columns wow fadeInUpBig" data-wow-duration="1s">
    <img src="images/mission_icon.svg" class="icon">
    <h2>What We Do</h2>
    <p>The goal of Thanks 2 One is to encourage all Ontarians to become registered organ and tissue donors and educate them on the impact of their generous decision to give.</p>
  </div>
  <div class="iconBox large-4 medium-4 small-12 align-center columns wow fadeInUpBig" data-wow-duration="1s">
    <img src="images/register_icon.svg" class="icon">
    <h2>Register</h2>
    <p>It takes very little time to register. You’ll have to provide some basic information including your date of birth and your health card number. You need to be at least 16 years of age.</p>
  </div>
  <div class="iconBox large-4 medium-4 small-12 align-center columns wow fadeInUpBig" data-wow-duration="1s">
    <img src="images/proud_icon.svg" class="icon">
    <h2>Be Proud</h2>
    <p>It is really important to let your friends and family know about your decision. Be proud to be a donor and remember to spread the word and inspire people to do the same.</p>
  </div>
</div> 
</section>

<section class="involvedBox large-12 medium-12 small-12 columns" id="involvedBox">
  <div class="involved large-offset-1 large-10 large-offset-1 medium-12 small-12 columns">
    <div class="newEvents large-6 medium-6 small-12 columns">
      <h2>News and Events</h2>
      <img :src="news" class="poster">
      <p>{{ newsText }}</p>
    </div>
    <div class="socialBox large-5 large-offset-1 medium-5 medium-offset-1 small-12 columns  wow fadeInDown" data-wow-duration="2s">
      <div id="social">
        <h2>Spread the Word</h2>
        <p>Follow us on:</p>
        <a href="https://www.facebook.com/"><img src="images/facebook.svg" class="socialIcon"></img></a>
        <a href="https://www.instagram.com/"><img src="images/instagram.svg" class="socialIcon"></img></a>
        <a href="https://twitter.com/"><img src="images/twitter.svg" class="socialIcon"></img></a>
        <a href="https://www.youtube.com/"><img src="images/youtube.svg" class="socialIcon"></img></a>
        <p>Visit our shop:</p>
        <a href="#"><p>www.thanks2one.com/shop</p></a>
      </div>
  </div>
  </div>
</section>
</div>`,

data () {
  return {
    banner : 'images/banner1.jpg',
    bannerMobile : 'images/banner1_mobile.jpg',
    news : 'images/new_event_poster.jpg',
    newsText : "Organ Donation Event | Saturday 25 May 2019 | Victoria Park - London, ON | Registration Truck | Lectures | Live Music | Food Trucks | Graffiti & Street Art Exhibition.",
    mainMessage1 : "YOU CAN BECOME THE ONE.",
    mainMessage2 : "BECOME AN ORGAN DONOR.",
    mainMessage3 : "Donate Lives!",
    mainMessage4 : "#THANKS2ONE",
  }
},

}