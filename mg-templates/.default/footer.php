
			</div><br><br>

		
			<button class="btn_up"></button>
			<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
			<script>
				$(function(){

				$('.btn_up').click(function(){
					$('body').animate({'scrollTop':0}, 1000);
					$('html').animate({'scrollTop':0}, 1000);
				});

				$(window).scroll(function(){
					if($(window).scrollTop()>200){
						$('.btn_up').addClass('active');
					} else {
						$('.btn_up').removeClass('active');
					}
				});});
			</script>





			<div id="footer">
				<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
				<div class="social_icon">
					<ul>
						<li>
						<a href="https://vk.com">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="fa fa-vk" aria-hidden="true"></span>
						</a>
						</li>
						<li>
						<a href="https://www.google.com">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="fa fa-google-plus" aria-hidden="true"></span>
						</a>
						</li>
						<li>
						<a href="https:/www.linkedin.com">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="fa fa-linkedin" aria-hidden="true"></span>
						</a>
						</li>
						<li>
						<a href="https://www.instagram.com">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="fa fa-instagram" aria-hidden="true"></span>
						</a>
						</li>
						<li>
						<a href="https://web.telegram.org/#/login">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="fa fa-telegram" aria-hidden="true"></span>
						</a>
						</li>
					</ul>
				</div>	
			</div>	
	</div>
</body>
</html>