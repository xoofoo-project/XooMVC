<style>
#twitter ul li {list-style:none;overflow:hidden;border:1px solid #dedede;margin:5px;padding:5px;}
#twitter ul li:hover {background-color:#f0f3fb;}
.user, .tweet, .timePosted {float:left;}
.user, .tweet, .timePosted, .interact {font-size:.9em;}
.user {width:20%;}
.tweet {width:55%;}
.timePosted {width:15%; text-align:center;}
.user {clear:left;}
.user a {width: 100px;}
.user span span {width:100px;display:block;margin-top:10px;}
.user img, .user a > span {float:left;}
.interact {float:left;width:10%;margin-top:-7px;}
.interact a {margin-left:5px;float:left;}
.user a > span {margin-left:5px;}
.media {margin:0 auto;}
.media img {max-width:200px;max-height:200px;}
#linkage {position:fixed;top:0;right:0;background-color:#3d3d3d;color:#fff;text-decoration:none;padding:5px;width:10%;}
.tco-hidden{display: none;}
</style>
<script src="assets/vendor/twitterpostfetcher/twitterFetcher.min.js"></script>
<script src="assets/vendor/twitterpostfetcher/moment.min.js"></script><!-- moment.js only needed for Query 6 example -->
<script>
// ##### Simple example 1 #####
var config1 = {
  "id": '<?php echo $twitter_id_conf1 ; ?>',
  "domId": '<?php echo $twitter_domId_conf1 ; ?>',
  "maxTweets": <?php echo $twitter_maxTweets_conf1 ; ?>,
  "enableLinks": <?php echo $twitter_enableLinks_conf1 ; ?>
};
twitterFetcher.fetch(config1);

// ##### Simple example 2 #####
var config2 = {
  "id": '347099293930377217',
  "domId": 'example2',
  "maxTweets": 5,
  "enableLinks": true,
  "showUser": true,
  "showTime": true,
  "lang": 'en'
};
twitterFetcher.fetch(config2);

// ##### Simple example 3 #####
var config3 = {
  "id": '502160051226681344',
  "domId": 'example3',
  "maxTweets": 5,
  "enableLinks": true,
  "showImages": true
};
twitterFetcher.fetch(config3);

// ##### Advanced example #####
var config4 = {
  "id": '345690956013633536',
  "domId": 'example4',
  "maxTweets": 3,
  "enableLinks": true,
  "showUser": false,
  "showTime": true,
  "dateFunction": dateFormatter,
  "showRetweet": false
};
function dateFormatter(date) {
  return date.toTimeString();
}
twitterFetcher.fetch(config4);

// ##### Advanced example 2 #####
var config5 = {
  "id": '345690956013633536',
  "domId": '',
  "maxTweets": 3,
  "enableLinks": true,
  "showUser": true,
  "showTime": true,
  "dateFunction": '',
  "showRetweet": false,
  "customCallback": handleTweets,
  "showInteraction": false
};
function handleTweets(tweets){
    var x = tweets.length;
    var n = 0;
    var element = document.getElementById('example5');
    var html = '<ul>';
    while(n < x) {
      html += '<li>' + tweets[n] + '</li>';
      n++;
    }
    html += '</ul>';
    element.innerHTML = html;
}
twitterFetcher.fetch(config5);

// ##### Advanced example #####
var config6 = {
  "id": '345690956013633536',
  "domId": 'example6',
  "maxTweets": 3,
  "enableLinks": true,
  "showUser": false,
  "showTime": true,
  "dateFunction": momentDateFormatter,
  "showRetweet": false
};
function momentDateFormatter(date, dateString) {
  return moment(dateString).fromNow();
}
twitterFetcher.fetch(config6);

// ##### Advanced example 3 #####
var config8 = {
  "id": '502160051226681344',
  "dataOnly": true,
  "customCallback": populateTpl
};
twitterFetcher.fetch(config8);

function populateTpl(tweets){
  var element = document.getElementById('example8');
  var html = '<ul>';
  for (var i = 0, lgth = tweets.length; i < lgth ; i++) {
    var tweetObject = tweets[i];
    html += '<li>'
      + (tweetObject.image ? '<div class="tweet-img"><img src="'+tweetObject.image+'" /></div>' : '')
      + '<div class="tweet-content">' + tweetObject.tweet + '</div>'
      + '<div class="tweet-infos">Posted on the ' + tweetObject.time + ', by ' + tweetObject.author + '</div>'
      + '<div class="tweet-link"><a href="' + tweetObject.permalinkURL + '">Link</a></div>'
    + '</li>';
  }
  html += '</ul>';
  element.innerHTML = html;
}
</script>
<section class="margtop">
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 1: My latest tweet</h4>
			<div id="example1"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 2: What people are saying about this component!</h4>
			<div id="example2"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 3: Last 5 Twitter posts using hastag #Caturday, including images (if any)</h4>
			<div id="example3"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 4: Last 3 Twitter posts using hastag #API</h4>
			<div id="example4"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 5: Last 3 Twitter posts using hastag #API with custom callback</h4>
			<div id="example5"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>Query 6: Last 3 Twitter posts using hastag #API with custom date formatter</h4>
			<div id="example6"></div>
		</div>
	</div>
	<!--div class="row">
		<div class="large-12 columns">
			<h4>Query 8: An advance example to get data in Objects, instead of HTML Strings, to populate a template for example.</h4>
			<div id="example8"></div>
		</div>
	</div-->
</section>