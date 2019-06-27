	
	<footer class="footer">
		<div class="footer__container container">

			<div class="footer__col">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php the_field('footer-logo', 'option'); ?>" alt="logo">
				</a>
				<p><?php the_field('copyright', 'option'); ?></p>
			</div>

			<div class="footer__col">
				<div class="footer__info header__info">
					<a href="mailto:info@fruitymall.ru">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
						<span><?php the_field('mail', 'option'); ?></span>
					</a>
					<a href="tel:+1234567890">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="">
						<span><?php the_field('phone', 'option'); ?></span>
					</a>
				</div>
				<div class="footer__soc header__soc">
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt="">
					</a>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png" alt="">
					</a>
					<a href="<?php the_field('vkontakte', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</footer>


	<script>
		//------------------------------revievs slider-----------------------------
		  var swiper = new Swiper('.reviews__slider', {
		    navigation: {
		      nextEl: '.swiper-button-next',
		      prevEl: '.swiper-button-prev',
		    },
		    pagination: {
		      el: '.reviews__pagination',
		    },
		    autoplay: {
		      delay: 5000,
		    },
		  });
	</script>

	<!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '877243355955961');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=877243355955961&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142678056-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142678056-1');
		</script>
		
	<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(54192961, "init", {
		        clickmap:true,
		        trackLinks:true,
		        accurateTrackBounce:true,
		        webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/54192961" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->


	<?php wp_footer(); ?>

</body>
</html>