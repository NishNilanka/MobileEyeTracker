<?php $session_value=session('sid') ?>
<!doctype html>
<html lang="en">
<!-- CSS for Player -->
<style>

	.video-view {

	 
	}
	
	* { margin:0; padding:0; }

	html, body { width:100%; height:100%; }
	
	.video-view .video {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  object-fit: cover;
	  background-color: #ccc;
	}

	.video-view .video-content {
	  position: relative;
	  bottom: 0px;
	}

    div.select {
        display: inline-block;
        margin: 0 0 1em 0;
    }

    #videoUpload {
        width: 100%;
        height: 100%;
        background-color: white;
        position: absolute;
        display: flex;
        justify-content: center;
        text-align: center;
        padding-bottom: 500px
    }
	
	.canvas {
	  position: absolute;
	  top: 0;
	  left: 0;
	  z-index: -1;
	  top: 0px; 
	  left: 0px;

	  display:block;
	 
	}


	div.userinfo
	{
		position:fixed; 
		bottom: 0px; 
		width: 100%;
		z-index:100; 	
	}
	

ol.o {

list-style-type: upper-alpha;
font-weight: bold;
}

div.ball {
	height: 30px;
	width: 30px;
	border-radius: 50%;
	position:fixed;
    
}


#container {
  display: grid;
  grid-template-rows: repeat(var(--grid-rows), 1fr);
  grid-template-columns: repeat(var(--grid-cols), 1fr);
bottom: 0px; 
top:0px;
height: 100%
		width: 100%;
position:fixed; 
}


.grid-item {
  border: 0.5px solid #ddd;
}

</style>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/cd3b8c73be.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- WSU favicon -->
    <link rel="icon" type="image/png" href="https://www.westernsydney.edu.au/__data/assets/file/0007/372562/favicon.ico"/>

    <title>Eye Tracking Study | Western Sydney University</title>
</head>

<body>

	<nav id="logo" class="navbar navbar-expand-sm bg-light navbar-light">
        <a  class="navbar-brand" href="/"><img src="wsu_logo-removebg-preview.png" alt="Logo" style="width:240px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"></li>
			</ul>
        </div>
    </nav>
	
	<div class="video-view mw-100 mh-100" id="webcam">
	<video id="video" muted autoplay="true" class="video" onplay="resize_canvas(this)" playsinline autoplay muted loop></video>
		<div class="video-content">
			<div id="vidsource" class="col-xs-12 col-xs-offset-6 sticky-top">
				<center>
					<canvas class="canvas" id="cv1"></canvas>
					<div id="pageElements">
						<center>
							<div class="select">
								<label for="videoSource">Video source: </label>
								<select class="form-select form-select-sm" aria-label="Default select example" id="videoSource"></select>
							</div>
						</center>
					</div>
					<center>
						<button  id="beginbutton" type="button" class="btn btn-lg btn-primary" style="width: 30%;margin-bottom: 5%;">
							Begin
						</button>
						<br>
					</center>
				</center>
							
					<br>
						
			</div>
		</div>
	</div>
	
	<!-- start Modal -->
	<div class="modal fade" id="beginModal" tabindex="-1" aria-labelledby="beginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="beginModalLabel"><b>Before we continue...</b></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul>
						<li><strong>Carefully read all the instructions before starting the test.</strong></li>
						<br>
						<li>We need your support to develop a eye-tracking algorithm on video type content with the use of a mobile device front-facing camera.</li>
						<br>
						<li>During the study, you have to look at a moving circle on the screen and your face will be captured from the front-facing camera of your mobile device.</li>
						<br>
						<li>You are requested to contribute three (3) videos by keeping the mobile device in three (3) different positions</li>
						<br>
						<li>Throughout the study, hold the device vertically, positioning the camera at the top of the device</li>
						<br>
						<img src="{{ asset('phoneside.png') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="phoneside.png 900w" sizes="(min-width: 1200px) 50vw,100vw" alt="tag">
					</ul>

				</div>
				<div class="modal-footer">
					<button type="button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#beginModal2" class="btn btn-lg btn-success"> Next</button>
				</div>
			</div>
		</div>
	</div>

	 <!-- start Modal 2-->
	 <div class="modal fade " id="beginModal2" tabindex="-1" aria-labelledby="beginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="beginModalLabel"><b>Before we continue...</b></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Make sure that :</p>
					<ul>
						<li>Your face is visible and align as shown in the following image.</li>
						<br>
						<li>You have good light in your room.</li>
						<br>
						<li>There is no strong light behind your back.</li>
						<br>
						<li>There is no light reflections on your glasses.</li>
						<br>
						
						<img src="{{ asset('Capturing1.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="Capturing1.jpg 900w"  width="120" height="120"  alt="tag">
					</ul>

				</div>
				<div class="modal-footer">
					<button type="button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#beginModal3" class="btn btn-lg btn-success"> Next</button>
				</div>
			</div>
		</div>
	</div>
			
			
			
	 <!-- start Modal 3-->
	 <div class="modal fade" id="beginModal3" tabindex="-1" aria-labelledby="beginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="beginModalLabel"><b>Before we continue...</b></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>You are requested to contribute three (3) videos by keeping the mobile device in three (3) different positions:</p>
					<ol class="o">
						<li>First video - Keep your mobile device below the eye level (Looking down)</li>
						<br>
						<li>Second Video - Keep your mobile device as same as the eye level (Looking straight)</li>
						<br>
						<li>Third Video - Keep your mobile device above the eye level (Looking up)</li>
					</ol>
						<img src="{{ asset('position.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="position.jpg 900w"  width="300" height="200"  alt="tag">
					

				</div>
				<div class="modal-footer">
					<button type="button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OptModal" class="btn btn-lg btn-success"> Next</button>
				</div>
			</div>
		</div>
	</div>
	
	 <!-- Record again optional Modal -->
            <div class="modal fade" id="OptModal" tabindex="-1" aria-labelledby="optLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="OptModalLable">Start Recording</h5>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
							<p id="successUpload" style="display: none;">Video successfully uploaded.</p>
                            <p id="msgText" style="display: none;">To record in the next position, Press the "Continue" Button.</p>
							<p id="devicepos">Make certain that you <strong id="positiontxt">are looking down at the device</strong> during the recording and refrain from moving while it is being done.</p>
							<img id="positionimg" src="{{ asset('Looking_Down.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" width="100" height="120"  alt="tag">
                        </div>
                        <div class="modal-footer">
                            <button id="finishbtn" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-primary" style="display: none;">Finish</button>  
                            <button id="againbtn" onclick="startAgain();" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </center>

	
	<!-- Confirmation Modal -->
            <div class="modal fade" id="ConfModal"  data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="beginModalLabel">Please prepare yourself...</h5>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
							<p>Pressing the "Begin" button will cause the recording to start immediately.</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button id="btnStart" onclick="startRecorder();" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-success">Begin</button>
                        </div>
                    </div>
                </div>
            </div>

           

		<div id="video_pop">
			<canvas id="myCanvas" style="position: fixed"></canvas>
        </div>
		
		<!--<div class='ball' id='ball' style="display: none"></div>-->
		
		<div id="videoUpload" style="display: none">
			<img src="loadingloop.gif" alt="Loading" style="width: 50%; height: auto; padding-top: 100px">
		</div>
		
		<div id="userCameraAlert" class="alert alert-warning" role="alert">
		  Make Sure you have selected the front camera of your mobile device!
		</div>
		
		<div id="userInfo" class="userinfo alert alert-info" role="alert">
			Keep your face inside the ellipse as much as possible. While recording, make sure to keep your mobile device steady.
		</div>
		
		<div id="container"></div>
		
</body>


<script>

	var mediaStreamObj;
    var recorderstatus = false;
	var vidCanvas;
	var context;
	var x=0.05;
	var y=0.05;
	var dx=5.00;
	var dy=5.00;
	var mediaRecorder;
	var vidCurrentPlayingNumber = 0;
	var cameraFace = false;


	function resize_canvas(element)
	{
	  var w = element.offsetWidth;
	  var h = element.offsetHeight;
	  var cv = document.getElementById("cv1");
	  cv.width = w;
	  cv.height =h;
	  
		var ctx = cv.getContext("2d")

	ctx.beginPath();
	ctx.strokeStyle = 'white';
	ctx.setLineDash([5, 3]);
	ctx.ellipse(w/2, h/2, w/3+w*0.1, h/3, 0, 0, 2 * Math.PI);
	ctx.stroke();
	}

	//makeRows(8, 3);

	navigator.mediaDevices.getUserMedia({video: true}).
	  then((stream) => {video.srcObject = stream}).catch(handleError);;

	const video = document.querySelector('video');

	const videoElement = document.querySelector('video');
	const videoSelect = document.querySelector('select#videoSource');

	navigator.mediaDevices.enumerateDevices()
	  .then(gotDevices).then(getStream).catch(handleError);

	videoSelect.onchange = getStream;

	function gotDevices(deviceInfos) {
	  for (let i = 0; i !== deviceInfos.length; ++i) {
		const deviceInfo = deviceInfos[i];
		const option = document.createElement('option');
		option.value = deviceInfo.deviceId;
		if (deviceInfo.kind === 'videoinput') {
		  option.text = deviceInfo.label || 'camera ' +
			(videoSelect.length + 1);
		  videoSelect.appendChild(option);
		}
	  }
	}

	function getStream() {
	
	  if (window.stream) {
		window.stream.getTracks().forEach(function(track) {
		  track.stop();
		});
	  }

	  const constraints = {
		video:true,
			audio: false,
		video: {
		  deviceId: {exact: videoSelect.value}
		}
	  };

	  navigator.mediaDevices.getUserMedia(constraints).
		then(gotStream).catch(handleError);
	}
	
	
	function gotStream(stream) {
	  window.stream = stream; // make stream available to console
	  videoElement.srcObject = stream;
	  //videoElement.play();
	  var btnelem = document.getElementById('beginbutton');
	  	if (stream.getVideoTracks()[0].getSettings().facingMode == 'user')
		{
			cameraFace =  true;
			$('#userCameraAlert').hide();
			btnelem.disabled = false;
			getCameraProperties();
		}
		else
		{
			cameraFace =  false;
			$('#userCameraAlert').show();
			console.log(cameraFace);
			btnelem.disabled = true;
		}
	}
	
	
	var fps;
	var height;
	var width;
	var aspect;
	function getCameraProperties()
	{
		fps = stream.getVideoTracks()[0].getSettings().frameRate;
		var video_Source = document.getElementById("video");
		//height = stream.getVideoTracks()[0].getSettings().height;
		//width = stream.getVideoTracks()[0].getSettings().width;
		//aspect = stream.getVideoTracks()[0].getSettings().aspectRatio;
		video_Source.addEventListener("playing", () => {
        height = video_Source.videoHeight;
		width = video_Source.videoWidth;
		aspect = width/height;

      });
	}

	function handleError(error) {
	  console.error('Error: ', error);
	}
	
	var alpha;
	var beta;
	var gamma;
	window.addEventListener('deviceorientation', function(event) {

	alpha = event.alpha;
	beta = event.beta;
	gamma = event.gamma;

	}, false);

	window.onload=function(){
		var myvar='<?php echo $session_value;?>';
		localStorage.setItem("sessionId",myvar);
		localStorage.setItem("vidCurrentPlayingNumber",0);
		
		//Draw circle
		vidCanvas = document.getElementById("myCanvas");
		var Video_two = document.getElementsByClassName('video')[0];
		
		$('#userInfo').show();

	}; 

	
	let Again = document.getElementById('againbtn');
	let Finish = document.getElementById('finishbtn');
	let Begin = document.getElementById('beginbutton');


	Finish.addEventListener('click', (ev)=>{
		window.location.href = "thankyou";
	});
	
	
	Begin.addEventListener('click', (ev)=>{
		if (recorderstatus == false){
			var ConfModal = new bootstrap.Modal(document.getElementById('ConfModal'), {});
			ConfModal.show();
		}

	});

	document.addEventListener('DOMContentLoaded', (ev)=>{
		var startmodal = new bootstrap.Modal(document.getElementById('beginModal'), {});
		startmodal.show();
	});
	
	function startAgain()
	{
			navigator.mediaDevices.getUserMedia({video: true}).
	  then((stream) => {video.srcObject = stream}).catch(handleError);
		document.getElementById("webcam").style.display = "block";
		document.getElementById("videoUpload").style.display = 'none';
		document.getElementById("myCanvas").style.display = 'none';
		document.getElementById("cv1").style.display = 'block';
		document.getElementById("userInfo").style.display = "block";
		recorderstatus = false;
		mediaRecorder = null;
		if(localStorage.getItem("vidCurrentPlayingNumber") == 0){
			document.getElementById("positiontxt").innerHTML = "Looking straight at the device";
			document.getElementById("positionimg").src = "{{ asset('Looking_Straight.jpg') }}";
		} else if(localStorage.getItem("vidCurrentPlayingNumber")==1){
			document.getElementById("positiontxt").innerHTML = "Looking up at the device";
			document.getElementById("positionimg").src = "{{ asset('LookingUp.jpg') }}";
		}
	}
	
	function startRecorder() {
		videoSource = videoSelect.value;
		recorderstatus = true;
		var constraintObj = {
			video:true,
			audio: false,
			video: {
				deviceId: videoSource
			//	width: { min: 480, ideal: 720, max: 1080 },
				//height: { min: 640, ideal: 1280,max: 1920 }
			}
		};

		//navigator.mediaDevices.getUserMedia(constraintObj).then(gotStream).catch(handleError);
		navigator.mediaDevices.getUserMedia(constraintObj).then(
		function(mediaStreamObj) {
			var canvas = document.getElementById('myCanvas');
			canvas.width = window.screen.width;
			canvas.height = window.screen.height;

			let start = document.getElementById('btnStart');
			if(!mediaRecorder){
			 mediaRecorder = new MediaRecorder(mediaStreamObj);
			 fullscreen();
				
				console.log(mediaRecorder.state);
			}
			
			let vidchunks = [];
			mediaRecorder.ondataavailable = function(ev) {
				console.log("Hi CHandimaaa");
				console.log(ev.data);
				vidchunks.push(ev.data);
			}

			var timerId;
			mediaRecorder.onstop = (ev)=>{
				console.log(vidchunks);
				let blob = new Blob(vidchunks, { 'type' : 'video/mp4'});
				vidchunks = [];
				
				console.log("FPS - " + fps);
				console.log("height - " + height);
				console.log("width - " + width);
				console.log("Aspect - " + aspect);

				//send Camera Feature Details
				const cameraData = new FormData();
				cameraData.append("_token", '{{ csrf_token()}}');
				cameraData.append("fps", fps);
				cameraData.append("height", height);
				cameraData.append("width", width);
				cameraData.append("aspectratio", aspect);
				fetch('camerafeatures', {
					method: 'post',
					body: cameraData
				})
				.then(response => {console.log('Camera data upload success')})
				.catch(error => {console.log('Camera data upload error');})
				
				//SendCoordinates
				const coordinatesData = new FormData();
				coordinatesData.append("_token", '{{ csrf_token()}}');
				coordinatesData.append("videoID", localStorage.getItem("vidCurrentPlayingNumber"));
				coordinatesData.append("x_coordinates", x_coordinates_arr.toString());
				coordinatesData.append("y_coordinates", y_coordinates_arr.toString());
				fetch('coordinates', {
					method: 'post',
					body: coordinatesData
				})
				.then(response => {console.log('Coordinates upload success')})
				.catch(error => {console.log('Coordinates upload error');})
				
				
				//sendDeviceOrientationDetails
				const orientationData = new FormData();
				orientationData.append("_token", '{{ csrf_token()}}');
				orientationData.append("videoID", localStorage.getItem("vidCurrentPlayingNumber"));
				orientationData.append("frameNumber", "true");
				orientationData.append("x_axis", x_axis_arr.toString());
				orientationData.append("y_axis", y_axis_arr.toString());
				orientationData.append("z_axis", z_axis_arr.toString());
				fetch('deviceorientation', {
					method: 'post',
					body: orientationData
				})
				.then(response => {console.log('device orientation upload success')})
				.catch(error => {console.log('device orientation upload error');})

				//generate form
				const formData = new FormData();
				formData.append("_token", '{{ csrf_token()}}');
				formData.append('video', blob);
				fetch('videoRec', {
					method: 'post',
					body: formData
				})
				.then(response => {console.log('upload success');
				clearInterval(timerId);
				var OptModal = new bootstrap.Modal(document.getElementById('OptModal'), {});
				if(localStorage.getItem("vidCurrentPlayingNumber") >= 3){
					document.getElementById("finishbtn").style.display="block";
					document.getElementById("successUpload").style.display="block";
					document.getElementById("againbtn").style.display="none";
					document.getElementById("devicepos").style.display="none";
					document.getElementById("positionimg").style.display="none";
					document.getElementById("OptModalLable").innerHTML = "We thank you for your participation.";
					document.getElementById("msgText").innerHTML = "You've completed all three recording sessions successfully. After clicking \"Finish,\" you will move on to the next page. <br><br>Before you close the browser window, be sure to copy the study code found in the next page.";
					
					
		
				}else{
					document.getElementById("msgText").style.display="block";
					document.getElementById("successUpload").style.display="block";
					document.getElementById("finishbtn").style.display="none";
					document.getElementById("againbtn").style.display="block";
				}
				 OptModal.show();
				})
				.catch(error => {console.log('upload error');})
			}
		})
		console.log('Created Recorder using:', videoSource);
	}
	
	function showUploadingGif()
	{
		document.getElementById("myCanvas").style.display = 'none';
		document.getElementById("videoUpload").style.display = 'block';
		document.getElementById("webcam").style.display = "none";
		document.getElementById("userInfo").style.display = "none";

	}
	
	
	function init()
	{
	  context= vidCanvas.getContext('2d');
	  context.fillStyle = 'white';
	  context.textAlign = "center"; 
	  vidCanvas.style.display="block"
	  vidCanvas.style.backgroundColor = '#000000'
	}

	var z_axis_arr = [];
	var x_axis_arr = [];
	var y_axis_arr = [];
	var x_coordinates_arr = [];
	var y_coordinates_arr = [];
	var index = 0;
	var pos = 0;
	var steps = 0;
	var x_pos1 = [0.5082762416, 0.8534324145, 0.8534324145, 0.1895345021, 0.1681762416, 0.5056484851, 0.8856965472, 0.5056484851];
	var y_pos1 = [0.9245348868, 0.9445348868, 0.0895345021, 0.5082762416, 0.9445348868, 0.5056484851, 0.3095345021, 0.0845345021];
	var count_pos1 = [70, 30, 70, 50, 40, 60, 40, 40 ];
	
	var x_pos2 = [0.0812762416, 0.9434324145, 0.1134324145, 0.1195345021, 0.9081762416, 0.9056484851, 0.5756965472, 0.5556484851, 0.9355648485, 0.5021544874];
	var y_pos2 = [0.0755348868, 0.0755348868, 0.5095345021, 0.9482762416, 0.5045348868, 0.9456484851, 0.9456484851, 0.5089545021, 0.2555648485, 0.0856987413];
	var count_pos2 = [50, 40, 60, 40, 40, 50, 20, 50, 30, 20 ];
	
	var x_pos3 = [0.0812762416, 0.3556484851, 0.0734324145, 0.9081762416, 0.8150324145, 0.5056484851, 0.3756965472, 0.9156484851];
	var y_pos3 = [0.9245348868, 0.5089545021, 0.2895345021, 0.0834324145, 0.9034324145, 0.0756484851, 0.8250345021, 0.9256484851];
	var count_pos3 = [40, 40, 40, 40, 70, 60, 70, 40 ];

	var newPos = [0,0,0];
	var oldPos = [0,0,0];
	curr_pos = 0;
	function draw(width, height)
	{
		
		context.clearRect(0,0, width,height);		
		drawball(x, y);

		let max_width = width-20;
		let max_height = height-20;
		// Boundary Logic
		//if( x<21 || x>max_width) dx=-dx; 
		//if( y<21 || y>max_height) dy=-dy;
		
		var video_number = localStorage.getItem("vidCurrentPlayingNumber");
		
		if(video_number == 1)
		{
			steps = count_pos1[curr_pos];
		}
		else if(video_number == 2)
		{
			steps = count_pos2[curr_pos];
		}
		else if(video_number == 3)
		{
			steps = count_pos3[curr_pos];
		}
		
		if(index ==  steps || index == 0)
		{
			oldPos = newPos;
			newPos = getNextPosition();
			if (index != 0){
				curr_pos += 1;
			}
			else
			{
				oldPos = [x,y,0];
			}
			index = 0;
		}
		
		var newq = get_dx_dy(oldPos[0], oldPos[1], newPos[0], newPos[1], newPos[2]);
		dx=newq[0]; 
		dy=newq[1];
		
		x+=dx;
		y+=dy;
		index += 1;
	}
	
	
	function drawball(x, y)
	{
		// Draws a circle of radius 20 at the coordinates 100,100 on the canvas
		context.beginPath();
		x_coordinates_arr.push(x);
		y_coordinates_arr.push(y);
		context.arc(x,y,20,0,Math.PI*2,true);
		context.closePath();
		context.fill();
		z_axis_arr.push(alpha);
		x_axis_arr.push(beta);
		y_axis_arr.push(gamma);
	}
	
	function getNextPosition()
	{
		var h = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
		var w = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
		var video_number = localStorage.getItem("vidCurrentPlayingNumber");
		
		if(video_number == 1)
		{
			x_val = x_pos1[pos] * w;
			y_val = y_pos1[pos] * h;
			count_val = count_pos1[pos];
		}
		else if(video_number == 2)
		{
			x_val = x_pos2[pos] * w;
			y_val = y_pos2[pos] * h;
			count_val = count_pos2[pos];
		}
		else if(video_number == 3)
		{
			x_val = x_pos3[pos] * w;
			y_val = y_pos3[pos] * h;
			count_val = count_pos3[pos];
		}
		
		pos += 1;
		return [x_val, y_val, count_val];
	}
	
	
	
	function get_dx_dy(old_x, old_y, new_x, new_y, count)
	{
		diff_x = new_x - old_x;
		diff_y = new_y - old_y;
		
		new_dx = diff_x/count;
		new_dy = diff_y/count;
		
		return [new_dx,new_dy];    
	}
	
	
	function makeRows(rows, cols) {
		container.style.setProperty('--grid-rows', rows);
		container.style.setProperty('--grid-cols', cols);
		var ratioW = Math.floor($(window).width()/cols);
		var ratioH = Math.floor($(window).height()/rows);
		//console.log(ratioW);
		//console.log(ratioH);
		for (c = 0; c < (rows * cols); c++) {
			let cell = document.createElement("div");
			cell.style.height = ratioH-1+"px";
			cell.style.width = ratioW-1+"px";
			container.appendChild(cell).className = "grid-item";
		}
	}

	
	
		
	var intervalID;
	var timer;
	function startVideo(duration, display, width, height) {
		timer = duration;
	    intervalID =  setInterval(function() { 
			startTimer(width, height, timer); 
			--timer;
		}, 1000);
	}
	
	function startTimer(width, height, time)
	{
		context.clearRect(0,0,width,height)
		var seconds = parseInt(time % 60, 10);
		context.font = "150px Arial";
		context.fillText(seconds,width/2,height/2);

		if (time < 0) {
			stopTimer(width,height);
		}
	}

	function stopTimer(width,height)
	{
		var temp = localStorage.getItem("vidCurrentPlayingNumber");
		temp++;
		localStorage.setItem("vidCurrentPlayingNumber", temp)
		var h = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
		var w = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
		if(temp == 1){
			//document.getElementById("ball").style.backgroundColor ="#ff0000";
			context.fillStyle="#ff0000";
			index = 0
			pos = 0;
			x = 0.02 * w ;
			y = 0.02 * h;
			steps = 0;
			curr_pos = 0;
		}
		else if(temp == 2){
			//document.getElementById("ball").style.backgroundColor ="#00ff00";
			context.fillStyle="#00ff00";
			index = 0;
			pos = 0;
			x = 0.5 * w;
			y = 0.5 * h;
			steps = 0;
			curr_pos = 0;
		}
		else if(temp == 3){
			//document.getElementById("ball").style.backgroundColor ="#0000ff";
			context.fillStyle="#0000ff";
			index = 0;
			pos = 0;
			x = 0.8 * w;
			y = 0.8 * h;
			steps = 0;
			curr_pos = 0;
		}
		mediaRecorder.start();
		clearInterval(intervalID);
		var start = Date.now();
		vidCanvas.style.display="block"
		vidCanvas.style.backgroundColor = '#ffffff'
		//document.getElementById("ball").style.display = 'none';
		var theInterval = setInterval(function() {
		if (Date.now() - start > 20000) {
			clearInterval(theInterval);
			mediaRecorder.stop();
			showUploadingGif();
			return;
		}

		draw(width, height);	
		},50);
		
	}
	
	
	
	function fullscreen(){
	document.getElementById("cv1").style.display = 'none';
	document.getElementById("videoUpload").style.display = 'none';
	document.getElementById("webcam").style.display = "none";
	document.getElementById("userInfo").style.display = "none";
	document.getElementById("logo").style.display = "none";
	window.scrollTo(0, 100);
	
	init();
	var fiveSeconds =  5,
	display = document.querySelector('#myCanvas');
	startVideo(fiveSeconds, display, vidCanvas.width,vidCanvas.height);
	
	}
	




</script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<html>
