<!-- Static Ads Section [MOBILE] -->
<div class="static-ads hide-on-large-only">
	<!-- Predict button -->
	<a href="#predictsheet" class="hd center-align secondary modal-trigger">predict these matches to win</a>
	<!-- // end predict button // -->
	<?php $news_flash = DB::table('news_flash')->where('status', '1')->orderBy('id', 'DESC')->limit(6)->get() ?>
	<!-- Other news -->
	<div class="s-news">

		<div class="more-news active primary dark">

			<?php foreach ($news_flash as $key => $news): ?>
				<?php if ($key == 0): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //#<?php //{{ $news->slug }} ?> ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php elseif($key == 1): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php endif ?>
				
			<?php endforeach ?>
			
		</div>

		<div class="more-news primary dark">

			<?php foreach ($news_flash as $key => $news): ?>
				<?php if ($key == 2): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php elseif($key == 3): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php endif ?>
				
			<?php endforeach ?>
			
		</div>

		<div class="more-news primary dark">

			<?php foreach ($news_flash as $key => $news): ?>
				<?php if ($key == 4): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php elseif($key == 5): ?>
					<div class="new">
						<span class="tag">Soccer</span>
						<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ strip_tags($news->title) }}</a>
					</div>
				<?php endif ?>
				
			<?php endforeach ?>
			
		</div>

	</div>
	
	<!-- // end other news -->
</div>
<!--// End Static Ads Section [MOBILE] -->