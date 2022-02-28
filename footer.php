<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

 ?>

<footer>
<div class="footer-section container-fluid p-footer" style="background-color: #6a96c5;">
	<div class="container text-light pt-5">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div>
					<img src="<?php echo(get_template_directory_uri()) ?>/assets/images/logo.png" alt="">
				</div>
				<p style="">PremiumKeys.com was started to provide a faster, simpler, safer way to buy premium key.
				  <br>
				<p>Address: 91 Bencoolen St, Singapore 189652</p>
				<div>
				 <a href="#" class="text-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
				  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
				</svg></a>

				  <a href="#" class="text-light">
					  <svg class="mx-2"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
						  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
						</svg>
				  </a>
				</div>
			</div>
			<div class="footer-column col-sm-12 col-md-6 col-lg-3">
				<h5>Information</h5>
				<ul style="padding-left:0">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Delivery Policy</a></li>
					<li><a href="#">Refund Policys</a></li>
					<li><a href="#">Disclaimer</a></li>
				</ul>
			</div>

			<div class="footer-column col-sm-12 col-md-6 col-lg-3">
				<h5>Help & Support</h5>
				<ul style="padding-left:0">
				  <li><a href="#">Order Status</a></li>
				  <li><a href="#">Reviews</a></li>
				  <li><a href="#">How It Works</a></li>
				  <li><a href="#">Help Center</a></li>
				  <li><a href="#">Contact Us</a></li>
			  </ul>
			</div>


			<div class="footer-column col-sm-12 col-md-6 col-lg-3">
				<h5>Quick Links</h5>
				<div>
				  <ul style="padding-left:0">
					  <li><a href="#">Blog</a></li>
					  <li><a href="#">Buy Credit</a></li>
					  <li><a href="#">Promotions</a></li>
					  <li><a href="#">DMCA Policyr</a></li>
				  </ul>
				</div>
			</div>

			<p class="text-center">Copyright © 2021. Powered by PremiumKeys.com. All Rights Reserved.</p>

		</div>
	</div>
</div>
</footer>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>