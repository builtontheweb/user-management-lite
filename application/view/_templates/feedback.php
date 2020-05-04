<?php

// get the feedback (they are arrays, to make multiple positive/negative messages possible)
$feedback_positive = Session::get( 'feedback_positive' );
$feedback_negative = Session::get( 'feedback_negative' );

// echo out positive messages
if ( isset( $feedback_positive ) ) {
	foreach ( $feedback_positive as $feedback ) {
		?>
		<div style="position: absolute; top: 75px; right:20px;">
			<!-- Toast -->
			<div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000">
				<div class="toast-header text-white bg-success">
					<i data-feather="check-circle"></i>
					<strong class="mr-auto">Success!</strong>
					<small class="text-white ml-2">just now</small>
					<button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
				
				</div>
				<div class="toast-body bg-white">
					<?= $feedback; ?>
				</div>
			</div>
		</div>
		<script>
			$( document ).ready( function () {
				$( '.toast' ).toast( 'show' );
			} );
		</script>
		<?php
	}
}

// echo out negative messages
if ( isset( $feedback_negative ) ) {
	foreach ( $feedback_negative as $feedback ) {
		?>
		<div style="position: absolute; top: 75px; right:20px;">
			<!-- Toast -->
			<div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000">
				<div class="toast-header text-white bg-danger">
					<i data-feather="alert-circle"></i>
					<strong class="mr-auto">Error!</strong>
					<small class="text-white ml-2">just now</small>
					<button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
				
				</div>
				<div class="toast-body bg-white">
					<?= $feedback; ?>
				</div>
			</div>
		</div>
		<script>
			$( document ).ready( function () {
				$( '.toast' ).toast( 'show' );
			} );
		</script>
		<?php
	}
}