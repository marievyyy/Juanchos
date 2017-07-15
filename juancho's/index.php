<!DOCTYPE html>
<html lang="en">
<head>
	<title>Juancho's Burger Shop</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script src="jquery-1.12.2.min.js"></script>
	<script src="btt.js"></script>	
	<script src="/parallax.js"></script>
	<script src="modernizr.custom.63321.js"></script>
	<script src="jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
		
	<script type="text/javascript">
	
	$(document).on("scroll",function(){
		if($(document).scrollTop()> 80){
			$("header").removeClass("large").addClass("small");
			} else{
			$("header").removeClass("small").addClass("large");
		}
		
		if($(document).scrollTop()> 80){
			$("nav").removeClass("large").addClass("small");
			} else{
			$("nav").removeClass("small").addClass("large");
		}
		
		if($(document).scrollTop()> 80){
			$("div.tri-left").removeClass("large").addClass("small");
			} else{
			$("div.tri-left").removeClass("small").addClass("large");		
		}
		
		if($(document).scrollTop()> 80){
			$("div.tri-right").removeClass("large2").addClass("small2");
			} else{
			$("div.tri-right").removeClass("small2").addClass("large2");		
		}
		
	});
	
	function customer()
		{
			var inputs = /^[a-zA-Z ']+(-[a-zA-Z ']+)*$/ ;
			var input_num = /^[0-9]+$/;

			var name = document.getElementById("name").value;
			var cname = name.replace(/ |\u00F1|\u00D1/g, '');
			var cname_new = inputs.test(cname);
			if (cname_new == false) {
				alert("Please check your name input!")
				return true;
			}
			var last = document.getElementById("last").value;
			var lastn = last.replace(/ |\u00F1|\u00D1/g, '');
			var lastn_new = inputs.test(lastn);
			if (lastn_new == false) {
				alert("Please check your last name input!")
				return true;
			}
			var contact = document.getElementById("contact").value;
			var num_new = input_num.test(contact);
			if (num_new == false) {
				alert("Contact number must contain numbers only!")
				return true;
			}
		}
	</script>
<head>
<body>
	<div class="tri-left large"></div>
	<div class="tri-right large2"></div>
	
	<header class="large">
	<img class="logo" src="logo.png" />
	</header>
	<nav class="large">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#"><img src="fb.png" class="lgo1" /></a></li>
			<li><a href="#"><img src="insta.png" class="lgo2" /></a></li>
			<li><a href="#"><img src="twitter.png" class="lgo3" /></a></li>
		</ul>	
	</nav>
	<div class="grad1" id="home">
	<img class="burger" src="burgers.png" />
		<div class="gwyc">
		<h3 class="get">GET WHAT YOU <span class="crave">CRAVE</span><h3>
		</div>
	</div>
	
	<div class="aboutus" id="about">
		<span class="heading_about" id="about">Our Story</span>
		<div class="descrip">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue lectus sem, vitae vulputate erat ultrices ut. Integer elementum gravida libero vel aliquam. Morbi faucibus risus dolor, sed ornare tortor posuere sed. Vestibulum nec ligula ut nulla mattis viverra. Morbi aliquet lacus ac nibh placerat porttitor. Nunc sed urna volutpat, commodo nibh non, sodales nulla. Proin efficitur lectus a dictum hendrerit. Nunc rutrum vestibulum hendrerit. Nulla non aliquam justo, vitae vehicula sem. Nulla viverra, metus vel blandit tempus, orci risus pretium ex, eu consequat metus velit sit amet sem.
			<br><br>
			Curabitur vitae tristique nulla. Sed sapien eros, auctor id augue sed, rhoncus ornare risus. Quisque semper nulla id dapibus pretium. Phasellus sed neque quis magna ultricies pretium in a felis. Nullam ultricies varius purus id tincidunt. Ut ut mi quis augue ornare ullamcorper. Duis metus lectus, vulputate nec est id, ullamcorper hendrerit diam. Nullam interdum consectetur lectus vitae mattis. Sed elementum neque quis consectetur dignissim.
		</div>
		
		<div class="about_logo"><img class="aboutb" src="aboutb.png" /></div>
	</div>
	
	<div class="menu" id="menu">
		<span class="heading_menu">Menu</span>
		<div class="strp1"></div>
		<div class="strp2"></div>
		
		<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
						<li><a href="#"><img src="images/1.png"><h4>Classic Cheese Burger</h4></a></li>
						<li><a href="#"><img src="images/2.png"><h4>Peanut Butter Burger</h4></a></li>
						<li><a href="#"><img src="images/3.png"><h4>Crispin Burger</h4></a></li>
						<li><a href="#"><img src="images/4.png"><h4>Beep Beep Burger</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/5.png"><h4>Tuna Pesto Pasta</h4></a></li>
						<li><a href="#"><img src="images/6.png"><h4>Pasta Carbonara</h4></a></li>
						<li><a href="#"><img src="images/7.png"><h4>Deep Fried Chicken</h4></a></li>
						<li><a href="#"><img src="images/8.png"><h4>Thriced Cooked Fries</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/9.png"><h4>Pink Lemonade</h4></a></li>
						<li><a href="#"><img src="images/10.png"><h4>House Blend Iced Tea</h4></a></li>
					</ul>
					<nav>
						<a href="#">Burgers</a>
						<a href="#">Short-orders</a>
						<a href="#">Drinks</a>
					</nav>
				</div>
		</div>

	</div>
	
	<div class="contact1" id="contact"></div>
	<div class="contact2">
		<span class="heading_contact">Contact Us</span>
			<div class="strp3"></div>
			<h4> We value your opinion and want to hear about your JUANCHO'S BURGER experience!</h4>
			
			<div class="map"></div>
			<div class="talk">
				<h3>Talk to Us!</h3>
				<p>If you have an immediate issue, please contact us at<span class="num"> 09157840672</span>
				or you can reach us through the following social media accounts:</p>
				<div class="sns"><a href="">Facebook</a> | <a href="">Twitter</a> | <a href="">Instagram</a></div> 
			</div>
			
		<form method="post" action="connectivity.php" onSubmit="return customer()">
			<label class="name">
				<input type="text" id="name" name="first_name"  required="required"/>
					<div class="label-text1">First Name*</div>
			</label>
		
			<label class="name2">
				<input type="text" id="last" name="last_name" required="required"/>
					<div class="label-text2">Last Name*</div>
			</label>
			
			<label class="number">
				<input type="text" id="number" name="contact_num"/>
					<div class="label-text3">Contact Number</div>
			</label>
			
			<label class="mail">
				<input type="email" id="email" name="email_add" required="required"/>
					<div class="label-text4">Email Address*</div>
			</label>
			
			<label class="message">
				<textarea name="message_box" id="message" required="required"/></textarea>
					<div class="label-text5">Message*</div>
			</label>
		
			<div style="text-align:center">
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset" /> 
			</div>
		</div>
	</form>

	
	<div class="footer1"></div>
	<div class="footer2">
		<span class="f1">Copyright &copy 2016 Juancho's Burger Shop | All rights reserved. </span>
		<span class="f2">Design and Website Development by <a href="#">CPPETS</a>. </span>
	</div>
	
	<a href="#0" class="cd-top"></a>
</body>


</html>