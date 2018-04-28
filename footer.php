		</section>

		<footer>
			<div class="site-description">
				<?php bloginfo( 'description' ); ?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			<div class="copyright">
				Copyright <?php echo date( 'Y' ) ?> <?php echo esc_html( get_bloginfo( 'name' ) ) ?>
			</div>
			<?php wp_footer(); ?>
		</footer>
	</div>

	<script>
	function getRandomInt( max ) {
		return Math.floor( Math.random() * Math.floor( max ) );
	}

	var positionX = 0;
	var positionY = 0;
	setInterval( function(){
		document.body.style.backgroundPositionX = positionX + 'px';
		document.body.style.backgroundPositionY = positionY + 'px';

		++positionY;

		var rand = getRandomInt( 100 );
		if ( 0 === rand % 7 ) {
			++positionX;
		} else if ( 1 === rand % 8 ) {
			--positionX;
		}

	}, 50 );

	document.body.onmousemove = function( evt ) {
		positionX += evt.movementX / 20;
		positionY += evt.movementY / 20;
	}
	</script>
</body>
</html>
