  <!-- Top container -->
  <div class="w3-bar w3-top w3-white w3-large w3-padding-24" style="z-index:4; margin-left: 300px; border-bottom: 1px solid #000000; padding-top: 22px!important; width: -webkit-fill-available;">
    <div class="w3-display-container w3-padding-24" style="padding-top: 21px !important;">
      <div class="w3-display-right">
        <span class="w3-text-blue">
        	<?php
			if (isset($_COOKIE["uname"])) {
				echo "Hello ".$_COOKIE["uname"]. "Welcome back.";
			}
			?>
			
		</span>
        <button class="w3-button w3-red w3-text-white w3-border w3-border-red w3-round-xxlarge w3-hover-white w3-hover-text-red" style="margin-left: 30px; margin-right: 10px;">Log out</button>
      </div>
    </div>
  </div>