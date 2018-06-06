<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>What do you sweat for</title>

		<!-- Bootstrap Core CSS -->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

		<link href="<?=base_url()?>assets/css/scrolling-nav.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
		
		<link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- <script type="text/javascript" src="<?=base_url()?>assets/js/konva.js"></script> -->
		<script type="text/javascript" src="<?=base_url()?>assets/js/wheelzoom-master/wheelzoom.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/js/html2canvas.js"></script>

	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId            : '177521976289977',
	      autoLogAppEvents : true,
	      xfbml            : true,
	      version          : 'v3.0'
	    });

	    FB.getLoginStatus(function(response){
	    	console.log(response);
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "https://connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	    
		
	<div class="page-wrapper">
	
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-logo">
							<a href=""><img src="<?=base_url()?>assets/images/logo.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	

		<section class="text-area section-padding dark-overlay" style="background: url(<?=base_url()?>assets/images/3.jpg) no-repeat">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-content">
							<h2>What do you sweat for. Burn calories. Burn inches. Burn with a fire inside. Tell the world what you burn for.</h2>
						</div>
						<div id="image-preview">
						  <!-- <label for="image-upload" id="image-label">Choose File</label>
						  <input type="file" name="image" id="image-upload" /> -->
						  <div id="image-pre-content">
						  	<img src="<?=base_url()?>assets/images/sample/default.jpg" id="image-preview-img">
						  	<div id="isweatfor-title">I SWEAT FOR</div>
						  	<input type="text" name="" id="text-for-sweat">
						  </div>

						  <div id="image-sweat-tool">
						  	<div id="add-photo-tools">
						  		<div class="dropzone btn" id="add-photo-btn">Add a Photo</div>
						  		<div id="i-dont-have-photo">I don't have a photo</div>
						  		<input type="file" name="" id="file-input-for-img" accept=".png, .jpg">
						  	</div>

						  	<div id="share-photo-tools">
						  		<span class="btn" id="meme-share">
						  			<span id="share-btn-share">Share</span>
						  			<span id="share-btn-close">Close</span>
						  		</span>
						  		<a href="#" id="meme-download" class="btn">Download</a>
						  		<a href="<?=base_url()?>" class="btn" id="start-over">Start Over</a>

						  		<span href="#" id="facebook-share" class="btn"><i class="fab fa-facebook-f"></i></span>
						  		<span href="#" class="btn" id="twetter-share"><i class="fab fa-twitter"></i></span>
						  		<span href="#" class="btn" id="pinterest-share"><i class="fab fa-pinterest-p"></i></span>


						  	</div>
						  </div>
						</div>
						<div class="text-content">
							<h2>Not a member? <br />Try Orangetheory Fitness for free. <br /><a href="">Start burning today</a></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="galarry-area section-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-1.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-2.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-3.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-4.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-5.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-6.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-7.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-8.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-9.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-10.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-11.jpg" alt="" />
					</div>
					<div class="col-md-4">
						<img src="<?=base_url()?>assets/images/sample/sample-12.jpg" alt="" />
					</div>
				</div>
			</div>
		</section>
		
		
		<footer class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="footer-link">
							<a href="">About</a>
							<a href="">Privacy</a>
							<a href="">Terms</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>	
	
	
		<!-- jQuery -->
		<script src="<?=base_url()?>assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="<?=base_url()?>assets/js/jquery.easing.min.js"></script>
		<!-- <script src="<?=base_url()?>assets/js/scrolling-nav.js"></script> -->
		
		<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.uploadPreview.min.js"></script>
		<script src="<?=base_url()?>assets/js/main.js"></script>
		<script type="text/javascript">
			var addphoto_tool = $("#add-photo-tools");
			var sharephoto_tools = $("#share-photo-tools");
			var file_input = $("#file-input-for-img");
			var image_pre_content = $("#image-pre-content");
			var image_pre_img = $("#image-preview-img");
			var text_for_sweat = $("#text-for-sweat");
			var isweatfor_title = $("#isweatfor-title");
			var download_btn = $("#meme-download");
			var share_btn = $("#meme-share");
			var isShare = true;
			var share_btn_share = $("#share-btn-share");
			var share_btn_close = $("#share-btn-close");
			var start_over_btn = $("#start-over");
			var facebook_share = $("#facebook-share");
			var twetter_share = $("#twetter-share");
			var pinterest_share = $("#pinterest-share");

			facebook_share.hide();
			twetter_share.hide();
			pinterest_share.hide();

			text_for_sweat.keyup(function(){
				var text = $(this).val();
				console.log(text);
				if(text == "")
				{
					addphoto_tool.hide();
					// $(this).css('background', 'transparent url(../assets/images/blink.gif) no-repeat center center');
				} 
				else
				{
					addphoto_tool.show();
					// $(this).css('background', 'trasparent');
				}
			});

			text_for_sweat.focus(function() {
			  var text = $(this).val();
			  if(text == "")
			  {

			  }else{
			  	$(this).css('background', 'trasparent!important');
			  }
			});

			text_for_sweat.focusout(function() {
			  var text = $(this).val();
			  if(text == "")
			  {

			  }else{
			  	$(this).css('background', 'trasparent!important');
			  }
			});

			$("#add-photo-btn").click(function(){
				file_input.trigger('click');
			});

			function readURL(input) {

			  if (input.files && input.files[0]) {
			    var reader = new FileReader();

			    reader.onload = function(e) {
			      image_pre_img.attr('src', e.target.result);
			      addphoto_tool.hide();
			      sharephoto_tools.show();
			      text_for_sweat.css('background', 'transparent  no-repeat center center');
			      text_for_sweat.prop('disabled', true);
			      wheelzoom(document.querySelector('#image-preview-img'));
			      image_pre_img.css("cursor", "move");
			      isweatfor_title.show();
			    }

			    reader.readAsDataURL(input.files[0]);
			  }
			}

			file_input.change(function() {
			  readURL(this);
			});

			download_btn.click(function(){
				html2canvas(document.querySelector("#image-pre-content")).then(function(canvas) {
				    var ua = window.navigator.userAgent;
	 
	                if (ua.indexOf("Chrome") > 0) {
	                    var link = document.createElement('a');
	                    link.download = "test.png";
	                    link.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");;
	                    link.click();
	                }
	                else {
	                    alert("Please use Chrome");
	                }

				});
			});

			share_btn.click(function(){
				isShare = !isShare;
				if(isShare)
				{
					share_btn_share.show();
					share_btn_close.hide();
					start_over_btn.show();
					download_btn.show();
					facebook_share.hide();
					twetter_share.hide();
					pinterest_share.hide();
				}else{
					share_btn_share.hide();
					share_btn_close.show();
					start_over_btn.hide();
					download_btn.hide();
					facebook_share.show();
					twetter_share.show();
					pinterest_share.show();
				}
			});

			facebook_share.click(function(){
				FB.login(function(response){
					if(response.status == 'connected')
					{

					}
					else if(response.status == 'not_authorized')
					{

					}
				},{scope:'publish_actions'});

				FB.api('/me/photos','post',{url:'https://help.xyzscripts.com/wp-content/uploads/2018/03/https.png'}, function(response){
							console.log(response);
				})


				
				
			});
		</script>

	</body>

</html>
