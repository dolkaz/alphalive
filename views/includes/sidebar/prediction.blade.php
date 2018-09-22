<?php 

	$date_time 	= date('Y-m-d H:i:s',strtotime('now'));
	$date 		= date('Y-m-d',strtotime('now'));
	// $date = '2018-09-13 18:00:00';
	$predictions 		= DB::table('predictions')->whereRaw("? BETWEEN start_date AND end_date", array($date))->get(); 
	$predictions_time 	= DB::table('predictions')->whereRaw("? BETWEEN start_datetime AND end_datetime", array($date_time))->get(); 
	// var_dump($predictions);
	
?>
	


<!-- prediction section -->
<form id="predictsheet_sidebar" class="predict hide-on-med-and-down" method="POST" action="/predictions">
    {{ csrf_field() }}
	<div class="secondary hd">predict these matches to win</div>
	
	<div class="bd primary dark">
		@if(Session::has('success_predict'))
            <div class="col s12 center-align h">
               <div class="alert alert-success" style="color: #ffffff;">
                 {{ Session::get('success_predict') }}
               </div>
            </div>
        @endif
		<div class="inp">
			<label for="predict_name">Name</label>
			<input type="text" id="predict_name" name="name" required="required">
		</div>
		<div class="inp">
			<label for="predict_email">email address</label>
			<input type="email" id="predict_email" name="email" required="required">
		</div>
		<div class="inp">
			<label for="predict_phone">Phone Number</label>
			<input type="tel" id="predict_phone" name="phone" required="required">
		</div>

		<!-- Matches bettable -->
		<div class="mtcs">
			
			
			@foreach($predictions as $prediction)
				<div class="row valign-wrapper">
					<div class="col s4 center-align">{{ $prediction->localteam_name }}</div>
					<div class="col s4 scb center-align secondary-text">
						<input type="hidden" name="prediction_id[]" value="{{ $prediction->id }}">

						<input type="hidden" name="localteam_id[]" value="{{ $prediction->localteam_id }}">
						<input type="number" name="localteam_score[]" required="required">
						-
						<input type="hidden" name="visitorteam_id[]" value="{{ $prediction->visitorteam_id }}">
						<input type="number" name="visitorteam_score[]" required="required">
					</div>
					<div class="col s4 center-align">{{ $prediction->visitorteam_name }}</div>
				</div>
			@endforeach

		</div>
		<?php if (count($predictions_time) > 0): ?>
			<div class="b center-align">
				<button type="submit" class="btn secondary primary-text z-depth-0 waves-effect waves-dark">Submit</button>
			</div>
		<?php else: ?>
			<p style="font-weight: 500; text-align: center; color: #FFD91B ">
				<!-- Prediction would be open very soon at . -->
				Sorry, Prediction has ended. Kindly wait for the Next Gameweek.
			</p>
		<?php endif ?>

	</div>
</form>
<!-- // end prediction section // -->


<!-- Modal Structure [PREDICTION ON MOBILE] -->
<form id="predictsheet" class="modal bottom-sheet primary dark white-text" method="POST" action="/predictions">
    {{ csrf_field() }}
	<div class="modal-content">
		<div class="secondary hd center-align">predict these matches to win</div>
		<div class="bd primary dark">
			@if(Session::has('success_predict'))
	            <div class="col s12 center-align h">
	               <div class="alert alert-success">
	                 {{ Session::get('success_predict') }}
	               </div>
	            </div>
	        @endif
			<div class="inp">
				<label for="predict_name">Name</label>
				<input type="text" id="predict_name" name="name" required="required">
			</div>
			<div class="inp">
				<label for="predict_email">email address</label>
				<input type="email" id="predict_email" name="email" required="required">
			</div>
			<div class="inp">
				<label for="predict_phone">Phone Number</label>
				<input type="tel" id="predict_phone" name="phone" required="required">
			</div>

			<!-- Matches bettable -->
			<div class="mtcs">
				
				
				@foreach($predictions as $prediction)
					<div class="row valign-wrapper">
						<div class="col s4 center-align">{{ $prediction->localteam_name }}</div>
						<div class="col s4 scb center-align secondary-text">
							<input type="hidden" name="prediction_id[]" value="{{ $prediction->id }}">

							<input type="hidden" name="localteam_id[]" value="{{ $prediction->localteam_id }}">
							<input type="number" name="localteam_score[]" required="required">
							-
							<input type="hidden" name="visitorteam_id[]" value="{{ $prediction->visitorteam_id }}">
							<input type="number" name="visitorteam_score[]" required="required">
						</div>
						<div class="col s4 center-align">{{ $prediction->visitorteam_name }}</div>
					</div>
				@endforeach

			</div>
			<?php if (count($predictions_time) > 0): ?>
				<div class="b center-align">
					<button type="submit" class="btn secondary primary-text z-depth-0 waves-effect waves-dark">Submit</button>
				</div>
			<?php else: ?>
				<!-- <div class="b center-align">
					<button disabled type="submit" class="btn secondary primary-text z-depth-0 waves-effect waves-dark">Submit</button>
				</div> -->
				<p style="font-weight: 500; text-align: center; color: #FFD91B ">
					<!-- Prediction would be open very soon at . -->
					Sorry, Prediction has ended. Kindly wait for the Next Gameweek.
				</p>
			<?php endif ?>

		</div>
	</div>
</form>
<!-- // end modal structure // -->


