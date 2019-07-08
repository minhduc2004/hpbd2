<?php
$id = $get->user();
$uid = $get->_fbid;
$uname = $get->_fbname;
$sender = "100010167378480";
$sender_name = "Nguyễn Thị Uyên";
?>
<!DOCTYPE html>
<html>
<head>
     <title>Chúc mừng sinh nhật - <?php echo $uname; ?> </title>
     <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css">
<meta name="description" content="Say Happy Birthday to <?php echo $uname; ?> ">
<meta name="author" content="HTT ZIP">
<meta property="og:url" content="http://httzip.me/">
<meta property="og:type" content="article">
<meta property="og:title" content="Say Happy Birthday <?php echo $uname; ?> ">
<meta property="og:image" content="http://httzip.me/phuongli/graph.png"/>
<meta property="og:description" content="Gửi lời mừng sinh nhật <?php echo $uname; ?>">
<meta property="og:site_name" content="http://uyenngu">
<meta property="article:author" content="https://www.facebook.com/Mikladuck">
<meta property="article:publisher" content="https://www.facebook.com/Mikladuck">
<meta property="fb:admins" content="100004061834192"/>
<meta property="fb:app_id" content="671928226285384" />
<link rel='stylesheet' href='assets/style.css'>
</head>
<body>
<div class="dialog-birthday_message">
  <div id="birthday_container" class="birthday_container">
  <div class="balloons">
    <div class="balloon">H</div>
    <div class="balloon">A</div>
    <div class="balloon">P</div>
    <div class="balloon">P</div>
    <div class="balloon">Y</div>
    <div class="balloon">B</div>
    <div class="balloon">D</div>
    <div class="balloon">A</div>
    <div class="balloon">Y</div>
  </div>

  <h1>Happy Birthday, <?php echo $uname; ?> ! </h1> <hr>
  <small>  Make with <i class="fa fa-heart text-danger"></i> by HTT</small>
 <p id="txt"></p>
 
  <canvas id="canvas_confetti">
    
  </canvas>

</div>
</div>

<img class="img img-responsive img-circle img-thumbnail" src="https://graph.facebook.com/<?php echo $uid; ?>/picture?type=large" style="max-width: 150px"alt="" />

  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js'></script>
<script type="text/javascript" src="assets/canvas.js"></script>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script src="https://mattboldt.com/demos/typed-js/js/typed.custom.js"></script>
<script src="assets/js.main.js"></script>


<!-- <script src="js.main.js"></script> -->
<div style="display:none">

 <audio src="assets/nhac.mp3" autoplay="true" style="display: none"></audio>
<input type="hidden" id="senderid" value="<?php echo $sender; ?>" />
<input type="hidden" id="sendername" value="<?php echo $sender_name; ?>" />
<input type="hidden" id="lovername" value="<?php echo $uname; ?>" />
<input type="hidden" id="loverid" value="<?php echo $uid; ?>" />
</div>

<script>
  $(function(){

    $("#txt").typed({
      strings: ["Chúc Mừng Sinh Nhật <?php echo $uname; ?>" ,"Chúc <?php echo $uname; ?> có một sinh nhật thật là vui vẻ !","Chúc <?php echo $uname; ?> gặp nhiều thành công trong cuộc sống !","Best Wishes For You !"],
      typeSpeed: 30,
      smartBackspace: true
    });

  });
</script>
</html>
