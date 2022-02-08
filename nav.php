<nav>

<div class="navContainer">
	<!-- Logo Container -->
	<div class="logoContainer">
	<a class="logoLink" href="index.php" >
    <div class="logoContainer">
      <div style="background-color: white;width: 37px;height: 38px;border-radius: 10px;"></div>
      <h5>Trust Wallet</h5> 
    </div>
  </a>
	</div>

	<!-- End of logo Container -->

<!-- Navigation Links -->
<div class="navLinks">
	<button> <i class="fa fa-bars" onclick="mobilemenu()"></i> </button>
	<ul>
		<li><a href="#">Assets</a></li>

		<li><a href="#">Staking</a></li>
		<li><a href="#">Earn</a></li>
		<li><a href="#">DApp Browser</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Language</a></li>
	</ul>
</div>
<!-- End of Navigation Links -->

</div>


<!-- Mobile Navigation Display Container -->
<center>
	<div style="background-color: rgb(51,117,187);;">
<div class="mobileNav">

	<ul>
		<li><a href="#">Assets</a></li>

		<li><a href="#">Staking</a></li>
		<li><a href="#">Earn</a></li>
		<li><a href="#">DApp Browser</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Language</a></li>
	</ul>
	
</div>
</div>
</center>

	
</nav>

<script type="text/javascript">
	
function mobilemenu(){

	var mobile = document.querySelector('.mobileNav')
	if (mobile.style.display == 'none') {
		mobile.style.display = 'block'
	}else{
		mobile.style.display = 'none'
	}

}

</script>