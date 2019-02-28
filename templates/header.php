<section class="top-nav">
    <div>
    <router-link :to="{name:'homepage'}"><img src="images/logo.png" id="logo" alt=""/></router-link>
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-button-container" for="menu-toggle">
    <div class="menu-button show-for-small-only"></div>
  </label>
    <ul class="menu">
      <li><a href="#donationBox">Organ Donation</li></a>
      <li><a href="#aboutBox">About Us</li></a>
      <li><a href="#involvedBox">Get Involved</li></a>
      <li><router-link :to="{name:'form'}">Contact Us</li></router-link>
    </ul>
</section>