<?php
	ob_start();
	
	session_start();
	
	if(!isset($_SESSION["email"])){
		
		header("Location:index.php");
		
	}
	
	
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		<!--<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
			crossorigin="anonymous">
		-->
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		
		
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!--<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
		
		<link rel="stylesheet"
		href="https://releases.flowplayer.org/7.2.7/skin/skin.css">
		<!-- hls.js -->
		<script
		src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.10.1/hls.light.min.js"></script>
		<!-- flowplayer -->
		<script src="https://releases.flowplayer.org/7.2.7/flowplayer.min.js"></script>
		
		
		<script src="js/fetch.js"></script>
		<script src="js/promise.min.js"></script>
		<script src="js/fetch.stream.js"></script>
		
		<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
		<script src="js/webrtc_adaptor.js"></script>

		
		
		
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93263926-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-93263926-1');
		</script>
		
		
		<style>
			
			#video-player{
		    color: #555;
			position: relative;
			text-align: center;
			font-size: 36px;
			font-family: sans-serif;
			line-height: 45px;
			}
			
			.label{
			padding: .2em .6em .3em;
			border-radius: .25em;
			font-weight: 700;
			line-height: 1;
			white-space: nowrap;
			vertical-align: baseline;
			}
			
			@media (max-width: 768px){
			video  {
			min-height: 300px !important;
			height:auto;
			}
			#videocontainer {
			min-height: 300px !important;
			height:auto;
			}
			}
			
			@media screen and (min-width: 768px) and (max-width: 990px){
			video  {
			min-height: 427px !important;
			}
			#videocontainer {
			min-height: 427px !important;
			}
			}
			
			@media screen and (min-width: 990px) and (max-width: 1200px){
			video  {
			min-height: 302px !important;
			}
			#videocontainer {
			min-height: 302px !important;
			}
			}
			
			
			@media (min-width: 1200px){
			video  {
			min-height: 370px !important;
			}
			#videocontainer {
			min-height: 370px !important;
			}
			}
			
			#videocontainer {
			width: 100%;
			max-width: 640px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			border: 1px solid #795548;
			min-height: 240px;
			}
			
			video  {
			width: 100%;
			max-width: 640px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			border: 1px solid #795548;
			min-height: 240px;
			}
			/* Space out content a bit */
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
			
			/* Everything but the jumbotron gets side spacing for mobile first views */
			.header, .marketing, .footer {
			padding-right: 15px;
			padding-left: 15px;
			}
			
			/* Custom page header */
			.header {
			padding-bottom: 20px;
			border-bottom: 1px solid #e5e5e5;
			}
			/* Make the masthead heading the same height as the navigation */
			.header h3 {
			margin-top: 0;
			margin-bottom: 0;
			line-height: 40px;
			}
			
			/* Custom page footer */
			.footer {
			padding-top: 19px;
			color: #777;
			border-top: 1px solid #e5e5e5;
			}
			
			.container-narrow>hr {
			margin: 30px 0;
			}
			
			/* Main marketing message and sign up button */
			.jumbotron {
			padding: 2rem 1rem;
			text-align: center;
			border-bottom: 1px solid #e5e5e5;
			}
			
			/* Responsive: Portrait tablets and up */
			@media screen and (min-width: 768px) {
			/* Remove the padding we set earlier */
			.header, .marketing, .footer {
			padding-right: 0;
			padding-left: 0;
			}
			/* Space out the masthead */
			.header {
			margin-bottom: 30px;
			}
			/* Remove the bottom border on the jumbotron for visual effect */
			.jumbotron {
			border-bottom: 0;
			}
			
			
			}
		</style>
	</head>
	<body>
		
		<div class="container">
			
			<header class="blog-header header py-3">
				<div class="row flex-nowrap justify-content-between align-items-center">
					<div class="col-6">
						<h3 class="text-muted">Try Stella Ultra Low Latency Live Stream</h3>
					</div>
				</div>
				
			</header>
			
			
			
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 col-lg-6 col-sm-12">
						
						<div class="jumbotron">
							
							
							<p>
								<video id="localVideo" autoplay muted></video>
							</p>
							
							
							<div align="center" style="min-height: 61px;">
								<!--<div class="form-check">	
									<input class="form-check-input" disabled onchange="enableDesktopCapture(event.target.checked)" type="checkbox" value="" 
									id="screen_share_checkbox">
									<label class="form-check-label" for="screen_share_checkbox" style="font-weight:normal">
									Screen Share
									</label>	<br/>
									<a id="install_chrome_extension_link" href="https://chrome.google.com/webstore/detail/jaefaokkgpkkjijgddghhcncipkebpnb">Install Chrome Extension</a>
									</div>
								-->
								
								<p>
									<button onclick="startPublishing()" class="btn btn-info" 
									id="start_publish_button">Start Publishing</button>
									<button onclick="stopPublishing()" class="btn btn-info" style="display:none"
									id="stop_publish_button">Stop Publishing</button>
								</p>
								
								
								<span class="btn btn-success label label-success" id="broadcastingInfo" style="font-size:14px; display: none;" 
								>Publishing</span>
								
							</div>
							
							
						</div>
					</div>
					
					<div id="webRTCPlayVideo" class="col-md-12 col-lg-6 col-sm-12">
						
						<div class="jumbotron">
						
													<p>
								<button class="btn btn-info" id="webrtc_player_button" disabled >WebRTC Player</button>
								<button onclick="changePlayMode('hls')"  class="btn btn-info" style="" id="hls_player_button" >HLS Player</button>
								</p>
							
							
							<p>
								<video id="remoteVideo" autoplay controls playsinline ></video>
							</p>
							
							<div align="center" style="max-height: 7px;">
								<p>
									<button onclick="startWebRTCPlaying()" class="btn btn-info"
									id="start_play_button">Start Playing</button>
									<button onclick="stopWebRTCPlaying()" class="btn btn-info" style="display:none"
									id="stop_play_button">Stop Playing</button>
									
										<button type="button" class="btn btn-primary btn-copy js-tooltip-webrtc js-copy-webrtc" data-toggle="tooltip" data-placement="bottom" data-copy="" title="Copy to clipboard">
									Copy Link
								</button>
								</p>
								<!--<a target="_blank" id="playLink" href="">You can also watch</a> -->
								
							
								
								<!-- <button type="button" id="playLink" class="tooltiptext btn btn-default btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" onmouseout="outFunc()" onclick="myFunction()">Copy to clipboard </button>-->
								
								
							</div>
						</div>
					</div>
					
					
					<div id="hlsPlayVideo" class="col-md-12 col-lg-6 col-sm-12">
						
						<div class="jumbotron">
							
								<p>
								<button onclick="changePlayMode('webrtc')" class="btn btn-info" id="webrtc_player_button" >WebRTC Player</button>
								<button class="btn btn-info" style="" id="hls_player_button" disabled>HLS Player</button>
								</p>
							
							<div id="videocontainer">
								<div id="video-player" class="fp-slim">Stream will start playing automatically<br>
								when it is live</div>
							</div>
							
							
							<div align="center" style="max-height: 22px; margin-top: 1rem;">
								<!--<a target="_blank" id="playLink" href="">You can also watch</a> -->
								
								<button type="button" class="btn btn-primary btn-copy js-tooltip-hls js-copy-hls" data-toggle="tooltip" data-placement="bottom" data-copy="" title="Copy to clipboard">
									Copy Link
								</button>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="container">
				
				<footer class="footer">
					<p><a class="btn btn-outline-secondary btn-sm" href="http://stella.live">©2019 Stella</a></p> 
				</footer>
				
			</div>
		</div>
	</body>
	
	<script>
		function getUrlParameter(key) {
			var re=new RegExp('(?:\\?|&)'+key+'=(.*?)(?=&|$)','gi');
			var r=[], m;
			while ((m=re.exec(document.location.search)) != null) r[r.length]=m[1];
			return r;
		}
		
	</script>
	
	<script>
		//var token = "<%= request.getParameter("token") %>";
		
		var seconds = 0;
		
		var playInterval ;
		
		var stopPublishInterval = false;
		
		var autoPlay = true;
		
		function changePlayMode(getPlayMode){
			//Todo: change the domain to your own
			if(getPlayMode == "webrtc"){
				window.location.href = 'https://stella.live/demo/room.php';
				}
				else{
					window.location.href = 'https://stella.live/demo/room.php?playMode=HLS';
					}
			
			}
		
		function hideHLSElements(){
			
			document.getElementById("webRTCPlayVideo").style.display = "block";
			document.getElementById("hlsPlayVideo").style.display = "none";
			
		}
		
		
		function hideWebRTCElements(){
			
			document.getElementById("webRTCPlayVideo").style.display = "none";
			document.getElementById("hlsPlayVideo").style.display = "block";
			
		}
		
		
		var randomStreamName="randomStreamName"+(Math.floor(Math.random() * 1000) + 100);
		
		var playMode = getUrlParameter("playMode");
		
		
		//Publish Html
		
		var token = "";
		
		var start_publish_button = document.getElementById("start_publish_button");
		var stop_publish_button = document.getElementById("stop_publish_button");
		
		var publishNameBox = randomStreamName ;
		
		var playStreamId;
		var publishStreamId;
		
		var start_play_button = document.getElementById("start_play_button");
		var stop_play_button = document.getElementById("stop_play_button");
		
		
		//Todo: server address provided by Stella
		var serverip="https://demo.stella.live";
		var port = "5443";
		var path =  serverip + ":" + port + "/WebRTCAppEE/websocket";
		var websocketURL =  "ws://" + path;
		
		if (location.protocol.startsWith("https")) {
			websocketURL = "wss://" + path;
		}
		
		
		if(playMode == "HLS")
		{
			hideWebRTCElements();
			tryHLSPlayer(randomStreamName,token);
		}
		else{
			hideHLSElements();
		}
		
		
		
		
		
		
		//Start Playing
		
		function startWebRTCPlaying() {
			playWebRTCAdaptor.play(randomStreamName, token);
		}
		
		function stopWebRTCPlaying() {
			playWebRTCAdaptor.stop(randomStreamName);
		}
		
		var pc_config = null;
		
		var sdpConstraintsPlay = {
			OfferToReceiveAudio : true,
			OfferToReceiveVideo : true
			
		};
		var mediaConstraintPlay = {
			video : false,
			audio : false
		};
		
		var playWebRTCAdaptor = new WebRTCAdaptor({
			websocket_url : websocketURL,
			mediaConstraints : mediaConstraintPlay,
			peerconnection_config : pc_config,
			sdp_constraints : sdpConstraintsPlay,
			remoteVideoId : "remoteVideo",
			isPlayMode : true,
			debug : true,
			callback : function(info, description) {
				if (info == "initialized") {
					console.log("initialized");
					start_play_button.style.display = "inline";
					stop_play_button.style.display = "none";
					//start_play_button.disabled = false;
					//stop_play_button.disabled = true;
					} else if (info == "play_started") {
					//joined the stream
					console.log("play started");
					start_play_button.style.display = "none";
				stop_play_button.style.display = "inline";
				//start_play_button.disabled = true;
				//stop_play_button.disabled = false;
				
				} else if (info == "play_finished") {
				//leaved the stream
				console.log("play finished");
				start_play_button.style.display = "inline";
				stop_play_button.style.display = "none";
				//start_play_button.disabled = false;
				//stop_play_button.disabled = true;
				} else if (info == "closed") {
				//console.log("Connection closed");
				if (typeof description != "undefined") {
				console.log("Connecton closed: "
				+ JSON.stringify(description));
				}
				}
				},
				callbackError : function(error) {
				//some of the possible errors, NotFoundError, SecurityError,PermissionDeniedError
				
				console.log("error callback: " + JSON.stringify(error));
				alert(JSON.stringify(error));
				}
				});
				
				
				
				
				function initializeHLSPlayer(name, extension, token){
				
				autoPlay = true;
				var token= "";
				var type ;
				var extension = "m3u8";
				var name = randomStreamName;
				
				var liveStream = false;
				if (extension == "mp4") {
				type = "video/mp4";
				liveStream = false;
				} else if (extension == "m3u8") {
				type = "application/x-mpegurl";
				liveStream = true;
				} else {
				console.log("Unknown extension: " + extension);
				return;
				}
				
				var preview = name;
				if (name.endsWith("_adaptive")) {
				preview = name.substring(0, name.indexOf("_adaptive"));
				}
				//Todo: server address provided by Stella
				var serverip="https://demo.stella.live";
				var port = "5443";
				var path =  serverip + ":" + port + "/WebRTCAppEE/websocket";
				flowplayer("#video-player", {
				poster : "previews/" + preview + ".png",
				autoplay : autoPlay,
				ratio : 9 / 16,
				fullscreen : true,
				native_fullscreen : true,
				clip : {
				live : liveStream,
				sources : [ {
				type : type,
				src : path + "/WebRTCAppEE/streams/" + name + "." + extension + "?token="
				+ token
				} ]
				},
				hlsjs : {
				recoverMediaError : true,
				recoverNetworkError : true,
				}
				});
				
				document.getElementById("videocontainer").style.display = "block";
				//document.getElementById("video_info").hidden = true;
				
				
				}
				
				
				//End Playing
				
				
				function startPublishing() {
				if( <?php echo $_SESSION['credit']; ?> > 0 && !stopPublishInterval ){
				publishWebRTCAdaptor.publish(randomStreamName, token);
				}
				else{
				alert("Your credit is over");
				}
				}
				
				function stopPublishing() {
				publishWebRTCAdaptor.stop(randomStreamName);
				}
				
				function enableDesktopCapture(enable) {
				if (enable == true) {
				publishWebRTCAdaptor.switchDesktopCapture(randomStreamName);
				}
				else {
				publishWebRTCAdaptor.switchVideoCapture(randomStreamName);
				}
				}
				
				function startAnimation() {
				
				$("#broadcastingInfo").fadeIn(800, function () {
				$("#broadcastingInfo").fadeOut(800, function () {
				var state = publishWebRTCAdaptor.signallingState(randomStreamName);
				if (state != null && state != "closed") {
				var iceState = publishWebRTCAdaptor.iceConnectionState(randomStreamName);
				if (iceState != null && iceState != "failed" && iceState != "disconnected") {
				startAnimation();
				}
				}
				});
				});
				
				}
				function incrementSeconds() {		
				seconds += 1;
				
				if( <?php echo $_SESSION['credit']; ?> <= seconds ){
				stopPublishing();
				stopPublishInterval = true;
				<?php if( "<script>document.writeln(seconds);</script>" == $_SESSION['credit'] )
				{	
				$_SESSION['credit'] = 0;
				}
				?>
				alert("Your credit is over");
				}
				
				}
				
				
				function loadDoc(seconds) {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				document.getElementById("credit").innerHTML = this.responseText;
				}
				};
				xhttp.open("GET", "decrease_time.php?email="+ "<?php echo $_SESSION['email']; ?>" +"&seconds="+seconds, true);
				xhttp.send();
				}
				
				
				var pc_config = null;
				
				var sdpConstraintsPublish = {
				OfferToReceiveAudio : false,
				OfferToReceiveVideo : false
				
				};
				
				var mediaConstraintsPublish = {
				video : true,
				audio : true
				};
				
				
				var publishWebRTCAdaptor = new WebRTCAdaptor({
				websocket_url : websocketURL,
				mediaConstraints : mediaConstraintsPublish,
				peerconnection_config : pc_config,
				sdp_constraints : sdpConstraintsPublish,
				localVideoId : "localVideo",
				debug:true,
				callback : function(info, description) {
				if (info == "initialized") {
				console.log("initialized");
				start_publish_button.style.display = "block";
				stop_publish_button.style.display = "none";
				//start_publish_button.disabled = false;
				//stop_publish_button.disabled = true;
				} else if (info == "publish_started") {
				//stream is being published
				console.log("publish started");
				
				playInterval = setInterval(incrementSeconds, 1000);
				
				start_publish_button.style.display = "none";
				stop_publish_button.style.display = "block";
				//start_publish_button.disabled = true;
				//stop_publish_button.disabled = false;
				startAnimation();
				} else if (info == "publish_finished") {
				//stream is being finished
				console.log("publish finished");
				
				clearInterval(playInterval);
				
				playInterval = null;
				
				loadDoc(seconds);
				
				seconds = 0 ;
				
				//alert("Streaming was alive for "+ seconds +" seconds.");
				
				start_publish_button.style.display = "block";
				stop_publish_button.style.display = "none";
				
				}
				/*else if (info == "screen_share_extension_available") {
				screen_share_checkbox.disabled = false;
				console.log("screen share extension available");
				install_extension_link.style.display = "none";
				}
				
				else if (info == "screen_share_stopped") {
				console.log("screen share stopped");
				}
				*/
				else if (info == "closed") {
				//console.log("Connection closed");
				if (typeof description != "undefined") {
				console.log("Connecton closed: " + JSON.stringify(description));
				}
				}
				},
				callbackError : function(error, message) {
				//some of the possible errors, NotFoundError, SecurityError,PermissionDeniedError
				
				console.log("error callback: " +  JSON.stringify(error));
				var errorMessage = JSON.stringify(error);
				if (typeof message != "undefined") {
				errorMessage = message;
				}
				var errorMessage = JSON.stringify(error);
				if (error.indexOf("NotFoundError") != -1) {
				errorMessage = "Camera or Mic are not found or not allowed in your device";
				}
				else if (error.indexOf("NotReadableError") != -1 || error.indexOf("TrackStartError") != -1) {
				errorMessage = "Camera or Mic is being used by some other process that does not let read the devices";
				}
				else if(error.indexOf("OverconstrainedError") != -1 || error.indexOf("ConstraintNotSatisfiedError") != -1) {
				errorMessage = "There is no device found that fits your video and audio constraints. You may change video and audio constraints"
				}
				else if (error.indexOf("NotAllowedError") != -1 || error.indexOf("PermissionDeniedError") != -1) {
				errorMessage = "You are not allowed to access camera and mic.";
				}
				else if (error.indexOf("TypeError") != -1) {
				errorMessage = "Video/Audio is required";
				}
				
				alert(errorMessage);
				}
				});
				
				
				</script>
				
				<script type="text/javascript">
				
				function hlsCopyToClipboard(el) {
				//Todo: Replace this with your own domain
				var copyText = "https://stella.live/demo/play.html?name="+randomStreamName;
				
				var copyTest = document.queryCommandSupported('copy');
				var elOriginalText = el.attr('data-original-title');
				
				if (copyTest === true) {
				var copyTextArea = document.createElement("textarea");
				copyTextArea.value = copyText;
				document.body.appendChild(copyTextArea);
				copyTextArea.select();
				try {
				var successful = document.execCommand('copy');
				var msg = successful ? 'Copied! '+copyText : 'Whoops, not copied!';
				el.attr('data-original-title', msg).tooltip('show');
				} catch (err) {
				console.log('Oops, unable to copy');
				}
				document.body.removeChild(copyTextArea);
				el.attr('data-original-title', elOriginalText);
				} else {
				// Fallback if browser doesn't support .execCommand('copy')
				window.prompt("Copy to clipboard: Ctrl+C or Command+C, Enter", copyText);
				}
				}
				
				$(document).ready(function() {
				// Initialize
				// ---------------------------------------------------------------------
				
				// Tooltips
				// Requires Bootstrap 3 for functionality
				$('.js-tooltip-hls').tooltip();
				
				$('.js-copy-hls').click(function() {
				var e2 = $(this);
				hlsCopyToClipboard(e2);
				});
				});
				
				function webRTCCopyToClipboard(e2) {
				//Todo: Replace this with your own domain
				var copyText = "https://stella.live/demo/player.html?name="+randomStreamName;
				
				var copyTest = document.queryCommandSupported('copy');
				var elOriginalText = e2.attr('data-original-title');
				
				if (copyTest === true) {
				var copyTextArea = document.createElement("textarea");
				copyTextArea.value = copyText;
				document.body.appendChild(copyTextArea);
				copyTextArea.select();
				try {
				var successful = document.execCommand('copy');
				var msg = successful ? 'Copied! '+copyText : 'Whoops, not copied!';
				e2.attr('data-original-title', msg).tooltip('show');
				} catch (err) {
				console.log('Oops, unable to copy');
				}
				document.body.removeChild(copyTextArea);
				e2.attr('data-original-title', elOriginalText);
				} else {
				// Fallback if browser doesn't support .execCommand('copy')
				window.prompt("Copy to clipboard: Ctrl+C or Command+C, Enter", copyText);
				}
				}
				
				$(document).ready(function() {
				// Initialize
				// ---------------------------------------------------------------------
				
				// Tooltips
				// Requires Bootstrap 3 for functionality
				$('.js-tooltip-webrtc').tooltip();
				
				$('.js-copy-webrtc').click(function() {
				var el = $(this);
				webRTCCopyToClipboard(el);
				});
				});
				</script>
				</html>
				<?php
				ob_flush();
				?>													