<!-- Flash News section -->
<div class="flash hide-on-med-and-down">
	<!-- Major news -->
	<div class="g-image">
		<?php 
			// $where_array = array('status' => '1', 'featured_image' => '');
			$news_flash  = DB::table('news_flash')->where('status', '1')->orderBy('id', 'DESC')->limit(6)->get() 
		?>
		
		<?php foreach ($news_flash as $key => $news): ?>
			<div class="img-c <?php if ($key == 0){ echo 'active'; } ?>">
				<div class="image" style="background-repeat: no-repeat; background-size: cover; background-image: url({{ $news->featured_image }});">
					<div class="content">
						<div>
							<span class="tag">soccer</span>
							<a href="#<?php //{{ $news->slug }} ?>" target="_blank">{{ $news->title }}</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		
	</div>
	<div class="progress">
		<div class="determinate" style="width: 0%;" id="img-next"></div>
	</div>
	<!-- // end major news // -->
</div>
<!-- // end Flash news section // -->