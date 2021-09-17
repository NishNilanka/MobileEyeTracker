<!doctype html>
<html lang="en">
<!-- CSS for Player -->
<style>

	.video-view {

	 
	}

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
  width: 400px;
  height: 700px;
  top: 0px; 
  left: 0px;
 
}

ol.o {list-style-type: upper-alpha;}


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
    <link rel="icon" type="image/png" href="https://www.westernsydney.edu.au/__data/assets/file/0007/372562/WSU_Favicon-01.png?v=0.2.7"/>

    <title>Eye Tracking Study | Western Sydney University</title>
</head>

<body>

	<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="/"><img src="wsu_logo-removebg-preview.png" alt="Logo" style="width:240px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"></li>
			</ul>
        </div>
    </nav>
	
	<div class="video-view mw-100 mh-100" id="webcam">
	<video id="video" muted autoplay="true" class="video"></video>
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
						<li>During the study, you have to look at a moving object on the screen and your face will be captured from the front-facing camera of your mobile device.</li>
						<br>
						<li>You are requested to contribute three (3) videos in three (3) different positions(standing, sitting, and lying down)</li>
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
	 <div class="modal fade" id="beginModal2" tabindex="-1" aria-labelledby="beginModalLabel" aria-hidden="true">
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
						
						<img src="{{ asset('Capturing1.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="Capturing1.jpg 900w"  width="100" height="100"  alt="tag">
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
					<p>You are requested to contribute three (3) videos in three (3) different positions:</p>
					<ol class="o">
						<li>First video - Standing Position</li>
						<br>
						<li>Second Video - Sitting Position</li>
						<br>
						<li>Third Video - Lying down Position</strong></li>
						<br>
						
						<img src="{{ asset('Position.png') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="Position.png 900w"  width="300" height="200"  alt="tag">
					</ol>

				</div>
				<div class="modal-footer">
					<button type="button" data-bs-dismiss="modal" class="btn btn-lg btn-success"> Continue</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Confirmation Modal -->
            <div class="modal fade" id="ConfModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ConfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="beginModalLabel">Please prepare yourself...</h5>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
							<p>Pressing the "Begin" button will cause the recording to start immediately.</p>
                            <p>Make certain that you <strong id="positiontxt">stand</strong> during the recording and refrain from moving while it is being done.</p>
							<img id="positionimg" src="{{ asset('standing.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" width="100" height="120"  alt="tag">
                        </div>
                        <div class="modal-footer">
                            <button id="btnStart" onclick="startRecorder();" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-success">Begin</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Record again optional Modal -->
            <div class="modal fade" id="OptModal" tabindex="-1" aria-labelledby="optLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="beginModalLabel">Video Successfully Uploaded</h5>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            <p id="msgText">To record another video, Press the "Record Next" Button.</p><br>
                        </div>
                        <div class="modal-footer">
                            <button id="finishbtn" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Finish</button>  
                            <button id="againbtn" onclick="startAgain();" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Record Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </center>

		<div id="video_pop">
			<canvas id="myCanvas"></canvas>
        </div>
		
		<div id="videoUpload" style="display: none">
			<img src="loadingloop.gif" alt="Loading" style="width: 50%; height: auto; padding-top: 100px">
		</div>
		
<body>


<script>

	var mediaStreamObj;
    var recorderstatus = false;
	var vidCanvas;
	var context;
	var x=100;
	var y=200;
	var dx=7;
	var dy=7;
	var mediaRecorder;
	var vidCurrentPlayingNumber = 0;

	function toggleFullScreen() {
	  if (!document.fullscreenElement) {

		var elem = document.getElementById("video");
		if (elem.requestFullscreen) {
		  elem.requestFullscreen();
		} else if (elem.mozRequestFullScreen) {
		  elem.mozRequestFullScreen();
		} else if (elem.webkitRequestFullscreen) {
		  elem.webkitRequestFullscreen();
		} else if (elem.msRequestFullscreen) {
		  elem.msRequestFullscreen();
		}

	  } else {
		if (document.exitFullscreen) {
		  document.exitFullscreen();
		}
	  }
	}


	const hdConstraints = {
	  video: {width: {min: 1280}, height: {min: 720}}
	};

	navigator.mediaDevices.getUserMedia(hdConstraints).
	  then((stream) => {video.srcObject = stream});

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
	}

	function handleError(error) {
	  console.error('Error: ', error);
	}

	window.onload=function(){
		var canvas = document.getElementById("cv1");
		vidCanvas = document.getElementById("myCanvas");
		var Video_two = document.getElementsByClassName('video')[0];
		var ctx = canvas.getContext("2d")
		ctx.beginPath();
		ctx.strokeStyle = 'white';
		ctx.setLineDash([5, 3]);
		ctx.ellipse(150, 80, 120, 45, 0, 0, 2 * Math.PI);
		ctx.stroke();
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
		recorderstatus = true;
	});

	document.addEventListener('DOMContentLoaded', (ev)=>{
		var startmodal = new bootstrap.Modal(document.getElementById('beginModal'), {});
		startmodal.show();
	});
	
	function startAgain()
	{
		document.getElementById("webcam").style.display = "block";
		document.getElementById("videoUpload").style.display = 'none';
		document.getElementById("myCanvas").style.display = 'none';
		recorderstatus = false;
		mediaRecorder = null;
		if(vidCurrentPlayingNumber == 1){
			document.getElementById("positiontxt").innerHTML = "Sit";
			document.getElementById("positionimg").src = "{{ asset('siting.jpg') }}";
		} else if(vidCurrentPlayingNumber==2){
			document.getElementById("positiontxt").innerHTML = "Lie Down";
			document.getElementById("positionimg").src = "{{ asset('lying.jpg') }}";
		}
	}
	
	function startRecorder() {
		videoSource = videoSelect.value;
		var constraintObj = {
			audio: false,
			video: {
				deviceId: videoSource,
				width: { min: 480, ideal: 720, max: 1080 },
				height: { min: 640, ideal: 1280, max: 1920 }
			}
		};
		var options = {
		  videoBitsPerSecond : 2500000,
		  mimeType : 'video/webm;codecs:h265'
		}
		navigator.mediaDevices.getUserMedia(constraintObj).then(gotStream).catch(handleError);
		navigator.mediaDevices.getUserMedia(constraintObj).then(
		function(mediaStreamObj) {
			var canvas = document.getElementById('myCanvas');
			canvas.width = window.screen.width;
			canvas.height = window.screen.height;

			let start = document.getElementById('btnStart');
			if(!mediaRecorder){
			 mediaRecorder = new MediaRecorder(mediaStreamObj, options);
			 fullscreen();
				
				console.log(mediaRecorder.state);
			}
			
			let vidchunks = [];
			mediaRecorder.ondataavailable = function(ev) {
				vidchunks.push(ev.data);
			}

			var timerId;
			mediaRecorder.onstop = (ev)=>{
				let blob = new Blob(vidchunks, { 'type' : 'video/mkv'});
				vidchunks = [];
				let videoURL = window.URL.createObjectURL(blob);

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
				if(vidCurrentPlayingNumber >= 3){
					document.getElementById("finishbtn").style.display="block";
					document.getElementById("againbtn").style.display="none";
					document.getElementById("msgText").innerHTML = "You've completed all three recording sessions successfully. After clicking \"Finish,\" you will move on to the next page. <br><br>Before you close the browser window, be sure to copy the study code found in the next page.";
					document.getElementById("beginModalLabel").innerHTML = "We thank you for your participation.";
				}else{
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
	}
	
	
	function init()
	{
	  context= vidCanvas.getContext('2d');
	  context.fillStyle = 'white';
	  context.textAlign = "center"; 
	  vidCanvas.style.display="block"
	  vidCanvas.style.backgroundColor = '#000000'
	}

	
	function draw(width, height)
	{
		
	  context.clearRect(0,0, width,height);
	  context.beginPath();
	  
	  // Draws a circle of radius 20 at the coordinates 100,100 on the canvas
	  context.arc(x,y,20,0,Math.PI*2,true);
	  context.closePath();
	  context.fill();
	  let max_width = width-20;
	  let max_height = height-20;
	  // Boundary Logic
		if( x<21 || x>max_width) dx=-dx; 
		if( y<21 || y>max_height) dy=-dy; 
		x+=dx; 
		y+=dy;
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
		vidCurrentPlayingNumber++;
		if(vidCurrentPlayingNumber == 1){
			context.fillStyle="#ff0000";
		}
		else if(vidCurrentPlayingNumber == 2){
			context.fillStyle="#00ff00";
		}
		else if(vidCurrentPlayingNumber == 3){
			context.fillStyle="#0000ff";
		}
		mediaRecorder.start();
		clearInterval(intervalID);
		var start = Date.now();
		vidCanvas.style.display="block"
		vidCanvas.style.backgroundColor = '#ffffff'
		var theInterval = setInterval(function() {
		if (Date.now() - start > 10000) {
		  clearInterval(theInterval);
		  mediaRecorder.stop();
		  showUploadingGif();
		  return;
		}
		draw(width, height); },50);
		
	}
	
	
	function cancelFullScreen() {
            var el = document;
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen||el.webkitExitFullscreen;
			if(vidCanvas.cancelFullScreen){
				vidCanvas.cancelFullScreen();
			}else if(vidCanvas.webkitCancelFullScreen){
				vidCanvas.webkitCancelFullScreen();
			}else if(vidCanvas.mozCancelFullScreen){
				vidCanvas.mozCancelFullScreen();
			}else if(vidCanvas.exitFullscreen){
				vidCanvas.exitFullscreen();
			}else if(vidCanvas.webkitExitFullscreen){
				vidCanvas.webkitExitFullscreen();
			}
			else{
				alert("This browser doesn't supporter fullscreen");
			}

	}
	
	function fullscreen(){
	if(vidCanvas.RequestFullScreen){
		vidCanvas.RequestFullScreen();
	}else if(vidCanvas.webkitRequestFullScreen){
		vidCanvas.webkitRequestFullScreen();
	}else if(vidCanvas.mozRequestFullScreen){
		vidCanvas.mozRequestFullScreen();
	}else if(vidCanvas.msRequestFullscreen){
		vidCanvas.msRequestFullscreen();
	}else{
		alert("This browser doesn't supporter fullscreen");
	}
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
