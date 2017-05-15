<?php
class InstaWCD{
    function userID(){
    	$instagram_username = strtolower($this->username);
	$token = $this->access_token;
	$url = "https://api.instagram.com/v1/users/search?q=".$instagram_username."&access_token=".$token;
	$get = file_get_contents($url);
	$json = json_decode($get);
	foreach($json->data as $user){
		if($user->username == $instagram_username){
			return $user->id;
		}
	}
	return '00000000';
    }
    function userMedia(){
    	$url = 'https://api.instagram.com/v1/users/'.$this->userID().'/media/recent/?access_token='.$this->access_token;
    	$content = file_get_contents($url);
		  return $json = json_decode($content, true);
    }
}
$insta = new InstaWCD();
        $insta->username = $instagram_username;
        $insta->access_token = $instagram_access_token;
?>
<section class="row margtop">
	<div class="large-12 columns">
		<header>
			<h3>Les dernières Photos de <?php echo $websitename; ?> ....</h3>
			<div class="text-right"><a rel="external" class="medium secondary button" href="http://instagram.com/<?php echo $instagram_username; ?>" title="Afficher la galerie complète des photos">Voir la galerie complète</a></div>
		</header>
		<div id="instafeed" class="row small-up-2 medium-up-3 large-up-5">
			<?php
				$ins_media = $insta->userMedia(); 
				$i = 0; 
				foreach ($ins_media['data'] as $vm): 
				if($instagram_count == $i){ break;}
				$i++;
				$img = $vm['images']['low_resolution']['url'];
				$link = $vm["link"];
			?>
			<div class="column"><a rel="external" href="<?php echo $link ?>" title=""><img class="thumbnail" src="<?php echo $img; ?>" alt="thumbs" /></a></div>
			<?php endforeach ?>
		</div>
		<div class="text-right"><a rel="external" class="medium secondary button" href="http://instagram.com/<?php echo $instagram_username; ?>" title="Nous suivre sur Instagram">Nous suivre sur Instagram</a></div>
		<?php if ($disqus_display == true) { ?>
			<div id="disqus_thread"></div>
				<script>
					var disqus_shortname = '<?php echo $disqus_shortname; ?>';
					(function() {
						var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();
				</script>
				<p><noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a></p>
			</div>
		<?php } ?>
	</div>
<section>