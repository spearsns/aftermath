
<?php
   include("inc/config.php");
  session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Aftermath</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<!--ceiling--> 
<div class="row ceiling">
<div class="large-2 columns"><a href="login.php" class="button">LOGIN</a></div>
<form id="logout" action="inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>

<div class="large-6 columns">
<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'logged')){
    $username = $_SESSION['username'];
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
  }
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></div>
</div>

<!--content nav-->
<div class="row content">
<div class="large-1 columns">&nbsp;</div>
<!--container nav-->
<div class="large-8 columns">
<div class="row">
	<div class="large-3 columns"><a href="#" class="button" visited="true">CAMPAIGNS</a></div>
	<div class="large-3 columns"><a href="#" class="button">CHARACTER MGMT</a></div>
	<div class="large-3 columns"><a href="createChar.php" class="button">NEW CHARACTER</a></div>
	<div class="large-3 columns"><a href="#" class="button">DOCUMENTS</a></div>
</div>
</div>
<!--online status box header-->
<div class="large-3 columns">
<div class="row">
<h4 style="text-align: center; font-family: impact;">CURRENTLY ONLINE:</h4>
</div>
</div>
</div>

<!--content-->
<div class="row content">
<div class="large-1 columns">&nbsp;</div>
<!--container-->
<div class="large-8 columns">
<div class="row contentbox">
<div class="large-3 columns campaignbox">
<p>CAMPAIGN I<br>
<a href="#" class="button">ENTER</a>
</p>
</div>

<div class="large-9 columns box">
<p>Lorem ipsum dolor. Sit amet vestibulum orci mus tellus. Dictum cras scelerisque vestibulum sed et a iaculis vulputate viverra scelerisque aenean arcu fermentum in ut duis lorem at ipsum et viverra ipsum nascetur. Ac interdum rutrum. Cras consequat sapien enim venenatis id. Quisque tristique ultrices. Mi porta consequat egestas sit non. Pharetra ipsum risus. Donec justo integer. Et augue interdum.
<br>
<br>
Arcu odio magna eu ut odio. Non sapien augue mauris a pellentesque. Tortor et litora vel velit mattis justo tempus magna. Dapibus netus ipsum. Urna auctor nec ac pede ac.
<br>
<br>
Ac vitae eu. Magna omnis laoreet nec tellus cras eget ligula in. Pellentesque pharetra malesuada. Tellus neque hac lacinia ante fermentum. Diam eros aliquam. In urna eu in in id volutpat faucibus cras. Magna neque aliquet. Cras vitae consectetuer. Metus mollis aliquet sapien eu facilisis. Sapien lectus porta feugiat potenti curabitur ut quam penatibus nulla vitae ut vitae sit nec donec est nunc ex quis praesent. Justo ad viverra ac ut in in ea rutrum nisl consequat arcu. Temporibus sed fringilla. Enim consectetuer est. Diam curabitur ipsum ligula amet semper id curabitur dignissim. Fames eros auctor. Porttitor eu nibh. Vestibulum amet nec. Nulla ac massa dolor maecenas nunc quibusdam accumsan luctus. Sodales quam facilisis nulla fermentum feugiat vestibulum cras egestas. Ut imperdiet massa odio velit aliquet metus rhoncus massa lacus consequat massa quisque nisl posuere. Molestie sodales suscipit. Tellus wisi ac. Rhoncus arcu elit arcu sapien tristique. Luctus commodo turpis. Libero eleifend id. Ut aliquam eget. Vitae amet erat vestibulum ut duis luctus gravida blandit in vitae vel nisl porttitor tempor. Facilisi gravida urna. Non viverra pretium laoreet aliquam erat. Nibh adipiscing arcu nulla consectetuer quam. A integer ante. Ipsum arcu tellus adipiscing dolor tincidunt. Dui at neque dui aliquam nec vestibulum ut cras. In ad id. Natoque aliquam amet.
</p>
</div>

<div class="large-3 columns campaignbox">
<p>CAMPAIGN II<br>
<a href="#" class="button">ENTER</a>
</p>
</div>

<div class="large-9 columns box">
<p>Lorem ipsum dolor. Sit amet vestibulum orci mus tellus. Dictum cras scelerisque vestibulum sed et a iaculis vulputate viverra scelerisque aenean arcu fermentum in ut duis lorem at ipsum et viverra ipsum nascetur. Ac interdum rutrum. Cras consequat sapien enim venenatis id. Quisque tristique ultrices. Mi porta consequat egestas sit non. Pharetra ipsum risus. Donec justo integer. Et augue interdum.
<br>
<br>
Arcu odio magna eu ut odio. Non sapien augue mauris a pellentesque. Tortor et litora vel velit mattis justo tempus magna. Dapibus netus ipsum. Urna auctor nec ac pede ac.
<br>
<br>
Ac vitae eu. Magna omnis laoreet nec tellus cras eget ligula in. Pellentesque pharetra malesuada. Tellus neque hac lacinia ante fermentum. Diam eros aliquam. In urna eu in in id volutpat faucibus cras. Magna neque aliquet. Cras vitae consectetuer. Metus mollis aliquet sapien eu facilisis. Sapien lectus porta feugiat potenti curabitur ut quam penatibus nulla vitae ut vitae sit nec donec est nunc ex quis praesent. Justo ad viverra ac ut in in ea rutrum nisl consequat arcu. Temporibus sed fringilla. Enim consectetuer est. Diam curabitur ipsum ligula amet semper id curabitur dignissim. Fames eros auctor. Porttitor eu nibh. Vestibulum amet nec. Nulla ac massa dolor maecenas nunc quibusdam accumsan luctus. Sodales quam facilisis nulla fermentum feugiat vestibulum cras egestas. Ut imperdiet massa odio velit aliquet metus rhoncus massa lacus consequat massa quisque nisl posuere. Molestie sodales suscipit. Tellus wisi ac. Rhoncus arcu elit arcu sapien tristique. Luctus commodo turpis. Libero eleifend id. Ut aliquam eget. Vitae amet erat vestibulum ut duis luctus gravida blandit in vitae vel nisl porttitor tempor. Facilisi gravida urna. Non viverra pretium laoreet aliquam erat. Nibh adipiscing arcu nulla consectetuer quam. A integer ante. Ipsum arcu tellus adipiscing dolor tincidunt. Dui at neque dui aliquam nec vestibulum ut cras. In ad id. Natoque aliquam amet.
</p>
</div>

<div class="large-3 columns campaignbox">
<p>CAMPAIGN III<br>
<a href="#" class="button">ENTER</a>
</p>
</div>

<div class="large-9 columns box">
<p>Lorem ipsum dolor. Sit amet vestibulum orci mus tellus. Dictum cras scelerisque vestibulum sed et a iaculis vulputate viverra scelerisque aenean arcu fermentum in ut duis lorem at ipsum et viverra ipsum nascetur. Ac interdum rutrum. Cras consequat sapien enim venenatis id. Quisque tristique ultrices. Mi porta consequat egestas sit non. Pharetra ipsum risus. Donec justo integer. Et augue interdum.
<br>
<br>
Arcu odio magna eu ut odio. Non sapien augue mauris a pellentesque. Tortor et litora vel velit mattis justo tempus magna. Dapibus netus ipsum. Urna auctor nec ac pede ac.
<br>
<br>
Ac vitae eu. Magna omnis laoreet nec tellus cras eget ligula in. Pellentesque pharetra malesuada. Tellus neque hac lacinia ante fermentum. Diam eros aliquam. In urna eu in in id volutpat faucibus cras. Magna neque aliquet. Cras vitae consectetuer. Metus mollis aliquet sapien eu facilisis. Sapien lectus porta feugiat potenti curabitur ut quam penatibus nulla vitae ut vitae sit nec donec est nunc ex quis praesent. Justo ad viverra ac ut in in ea rutrum nisl consequat arcu. Temporibus sed fringilla. Enim consectetuer est. Diam curabitur ipsum ligula amet semper id curabitur dignissim. Fames eros auctor. Porttitor eu nibh. Vestibulum amet nec. Nulla ac massa dolor maecenas nunc quibusdam accumsan luctus. Sodales quam facilisis nulla fermentum feugiat vestibulum cras egestas. Ut imperdiet massa odio velit aliquet metus rhoncus massa lacus consequat massa quisque nisl posuere. Molestie sodales suscipit. Tellus wisi ac. Rhoncus arcu elit arcu sapien tristique. Luctus commodo turpis. Libero eleifend id. Ut aliquam eget. Vitae amet erat vestibulum ut duis luctus gravida blandit in vitae vel nisl porttitor tempor. Facilisi gravida urna. Non viverra pretium laoreet aliquam erat. Nibh adipiscing arcu nulla consectetuer quam. A integer ante. Ipsum arcu tellus adipiscing dolor tincidunt. Dui at neque dui aliquam nec vestibulum ut cras. In ad id. Natoque aliquam amet.
</p>
</div>

<div class="large-3 columns campaignbox">
<p>CAMPAIGN IV<br>
<a href="#" class="button">ENTER</a>
</p>
</div>

<div class="large-9 columns box">
<p>Lorem ipsum dolor. Sit amet vestibulum orci mus tellus. Dictum cras scelerisque vestibulum sed et a iaculis vulputate viverra scelerisque aenean arcu fermentum in ut duis lorem at ipsum et viverra ipsum nascetur. Ac interdum rutrum. Cras consequat sapien enim venenatis id. Quisque tristique ultrices. Mi porta consequat egestas sit non. Pharetra ipsum risus. Donec justo integer. Et augue interdum.
<br>
<br>
Arcu odio magna eu ut odio. Non sapien augue mauris a pellentesque. Tortor et litora vel velit mattis justo tempus magna. Dapibus netus ipsum. Urna auctor nec ac pede ac.
<br>
<br>
Ac vitae eu. Magna omnis laoreet nec tellus cras eget ligula in. Pellentesque pharetra malesuada. Tellus neque hac lacinia ante fermentum. Diam eros aliquam. In urna eu in in id volutpat faucibus cras. Magna neque aliquet. Cras vitae consectetuer. Metus mollis aliquet sapien eu facilisis. Sapien lectus porta feugiat potenti curabitur ut quam penatibus nulla vitae ut vitae sit nec donec est nunc ex quis praesent. Justo ad viverra ac ut in in ea rutrum nisl consequat arcu. Temporibus sed fringilla. Enim consectetuer est. Diam curabitur ipsum ligula amet semper id curabitur dignissim. Fames eros auctor. Porttitor eu nibh. Vestibulum amet nec. Nulla ac massa dolor maecenas nunc quibusdam accumsan luctus. Sodales quam facilisis nulla fermentum feugiat vestibulum cras egestas. Ut imperdiet massa odio velit aliquet metus rhoncus massa lacus consequat massa quisque nisl posuere. Molestie sodales suscipit. Tellus wisi ac. Rhoncus arcu elit arcu sapien tristique. Luctus commodo turpis. Libero eleifend id. Ut aliquam eget. Vitae amet erat vestibulum ut duis luctus gravida blandit in vitae vel nisl porttitor tempor. Facilisi gravida urna. Non viverra pretium laoreet aliquam erat. Nibh adipiscing arcu nulla consectetuer quam. A integer ante. Ipsum arcu tellus adipiscing dolor tincidunt. Dui at neque dui aliquam nec vestibulum ut cras. In ad id. Natoque aliquam amet.
</p>
</div>

<div class="large-3 columns campaignbox">
<p>CAMPAIGN V<br>
<a href="#" class="button">ENTER</a>
</p>
</div>

<div class="large-9 columns box">
<p>Lorem ipsum dolor. Sit amet vestibulum orci mus tellus. Dictum cras scelerisque vestibulum sed et a iaculis vulputate viverra scelerisque aenean arcu fermentum in ut duis lorem at ipsum et viverra ipsum nascetur. Ac interdum rutrum. Cras consequat sapien enim venenatis id. Quisque tristique ultrices. Mi porta consequat egestas sit non. Pharetra ipsum risus. Donec justo integer. Et augue interdum.
<br>
<br>
Arcu odio magna eu ut odio. Non sapien augue mauris a pellentesque. Tortor et litora vel velit mattis justo tempus magna. Dapibus netus ipsum. Urna auctor nec ac pede ac.
<br>
<br>
Ac vitae eu. Magna omnis laoreet nec tellus cras eget ligula in. Pellentesque pharetra malesuada. Tellus neque hac lacinia ante fermentum. Diam eros aliquam. In urna eu in in id volutpat faucibus cras. Magna neque aliquet. Cras vitae consectetuer. Metus mollis aliquet sapien eu facilisis. Sapien lectus porta feugiat potenti curabitur ut quam penatibus nulla vitae ut vitae sit nec donec est nunc ex quis praesent. Justo ad viverra ac ut in in ea rutrum nisl consequat arcu. Temporibus sed fringilla. Enim consectetuer est. Diam curabitur ipsum ligula amet semper id curabitur dignissim. Fames eros auctor. Porttitor eu nibh. Vestibulum amet nec. Nulla ac massa dolor maecenas nunc quibusdam accumsan luctus. Sodales quam facilisis nulla fermentum feugiat vestibulum cras egestas. Ut imperdiet massa odio velit aliquet metus rhoncus massa lacus consequat massa quisque nisl posuere. Molestie sodales suscipit. Tellus wisi ac. Rhoncus arcu elit arcu sapien tristique. Luctus commodo turpis. Libero eleifend id. Ut aliquam eget. Vitae amet erat vestibulum ut duis luctus gravida blandit in vitae vel nisl porttitor tempor. Facilisi gravida urna. Non viverra pretium laoreet aliquam erat. Nibh adipiscing arcu nulla consectetuer quam. A integer ante. Ipsum arcu tellus adipiscing dolor tincidunt. Dui at neque dui aliquam nec vestibulum ut cras. In ad id. Natoque aliquam amet.
</p>
</div>

</div>
</div>

<!--online status box-->
<div class="large-3 columns">
<div class="row contentbox">
</div>
</div>

</div>

<!--footer-->
<div class="row footer">
<div class="large-12 columns">&nbsp;</div>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>