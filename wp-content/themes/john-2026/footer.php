		</main>
		<footer>
			<inner-column>
				<div class='footer-contact'>
					<a class='phone' href='#'>
						<?php include('images/phone.php'); ?>
						<span>1234566778</span>
					</a>
					<a class='mail2' href='#'>
						<?php include('images/mail.php'); ?>
						<span>info@recordgallery.com</span>
					</a>
					<a class='search' href='#'>
						<?php include('images/search.php'); ?>
						<span>Track Shipment</span>
					</a>
				</div>
				<div class='footer-container'>
					<div>
						<div class='address'>
							<h4 class='miniscule-voice'>Address</h4>
							<p class='calm-voice'>Nowheresville 77, Somewhere, 10555</p>
						</div>
						<div class='schedule'>
							<h4 class='miniscule-voice'>Schedule</h4>
							<p class='calm-voice'>Mon. Wed. 10:30 - 18:00</p>
							<p class='calm-voice'>Tue. Thu. Fri. 10:30 - 19:00</p>
							<p class='calm-voice'>Saturday 10:00 - 15:00</p>
						</div>
						<div class='socials'>
							<a href='#'>
								<?php include('images/circle.php'); ?>
							</a>
							<a href='#'>
								<?php include('images/circle.php'); ?>
							</a>
							<a href='#'>
								<?php include('images/circle.php'); ?>
							</a>
							<a href='#'>
								<?php include('images/circle.php'); ?>
							</a>
						</div>
					</div>
					<div>
						<div class='links'>
							<h4 class='miniscule-voice'>Useful Links</h4>
							<div class='inner-links'>
								<nav>
									<ul>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
									</ul>
								</nav>
								<nav>
									<ul>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
										<li><a href='#'>Something</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div>
						<div class=newsletter>
							<h4 class='miniscule-voice'>Sign up to our newsletter</h4>
							<div class="signup-container">
							   <input type="email" placeholder="Email" aria-label="Sign-up" />
							   <button type="submit" class="search-btn" aria-label="Sign-up">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class='copyright'>
					<p class='calm-voice'>© <?php echo date("Y"); ?> and beyond</p>
				</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>