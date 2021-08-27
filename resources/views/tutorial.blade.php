<!doctype html>
<html lang="en">
<!-- CSS for Player -->
<style>
    #video_pop {
        z-index: 9999;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background: rgb(0, 0, 0);
        display: none;
        cursor: none;
    }

    #the_Video {
        Height: 100%;
        position: fixed;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

    }

    /* video webcam player css */
    #camcontainer {
        position: relative;
        margin: 0px auto;
        width: 400px;
        height: 700px;
        border: 10px #333 solid;
    }
    .videoElement {
        width: 400px;
        height: 700px;
        background-color: rgb(0, 0, 0);
        z-index: 1;
    }

    #videoOverlay {

        position:absolute;
        width: 400px;
        height: 700px;
        padding-left: 38.2%;
        padding-right: 38.2%;
        padding-top: 5%;
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
  position: relative;
  top: 0;
  left: 0;
  z-index: 10;
  width: 400px;
  height: 700px;
  border: 1px solid gray;
 
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
    <link rel="icon" type="image/png" href="https://www.westernsydney.edu.au/__data/assets/file/0007/372562/WSU_Favicon-01.png?v=0.2.7"/>

    <title>Eye Tracking Study | Western Sydney University</title>
</head>
<div id="videoUpload" style="display: none">
    <img src="loadingloop.gif" alt="Loading" style="width: 50%; height: auto; padding-top: 100px">
    <!-- <progress ref="seekbar" style="width: 50%; height: auto; padding-top: 100px" value="0" max="100" id="progressbar"></progress>-->
</div>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="/">
            <img src="wsu_logo-removebg-preview.png" alt="Logo" style="width:240px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">

                </li>
            </div>
        </nav>
        <br><br>

        <div id="vidplayer" class="col-xs-12 col-xs-offset-6">
            <center>
                        <div id="pageElements">
                        <center>
                            <div class="select">
                                <label for="videoSource">Video source: </label><select class="form-select form-select-sm" aria-label="Default select example" id="videoSource"></select>
                            </div>
                            <button type="button" class="btn btn-lg btn-success" onclick="startplayer();" >Select Device</button>
                        </center>
						
						<br>
                <center>
                    <button  id="beginbutton" onlick="startRecorder();" type="button" class="btn btn-lg btn-primary" style="width: 30%;margin-bottom: 5%;">
                        Begin
                    </button>
                    <br>
                </center>
                            <!--  Webcam Div -->
                            <div id="vidcontainer">
                                <div id="videoOverlay">
                                   <!-- <img src="./SmallHead.png" class="img-responsive" width="500px;"> -->
                                </div>

                                <video autoplay="true" class="videoElement">

                                </video>
								<!-- <canvas class="canvas" id="cv1"></canvas>  -->

                            </div>
                        </center>
                        
                <br>
                <!-- This "2vid" video player displayed the recorded video on the turorail page after its been recorded. Always showing the previous recorded
                    video. It is useful for testing and troubleshooting.

                    <video id="2vid" controls class="videoElement"></video>

                -->
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
                                <li>The purpose of this recording is to collect data on how people view thier phones when confortable</li>
                                <br>
                                <li>So be sure to be in a comfortable position where the camera can see your entire face clearly</li>
                                <br>
                                <li>During the recording be sure to follow the objective, if you become distracted. Please retake the recording. You have 3 attempts.</li>
                                <br>
                                <li>Hold the device vertically, positioning the camera at the top of the device</li>
                                <br>
                                <li>After completing the first recording, feel free to do another 2 recordings in different confortable positions</li>
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
                            <ul>
                                <li>While we do want you to be confortable while recording, we do need usable data. So please try to position the camera so it captures your face clearly.</li>
                                <br>
                                <li>Try to base the dimensions off the example below:</li>
                                <br>
                                <img src="{{ asset('PhoneTemplate.png') }}" style="display: block; margin-left: auto; margin-right: auto;" srcset="PhoneTemplate.png 900w" sizes="(min-width: 1200px) 50vw,100vw" alt="tag">
                            </ul>

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
                            <p>When the begin button below has been pressed, recording will immediately start.</p>
                        </div>
                        <div class="modal-footer">
                            <button id="btnStart" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-success">Begin</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Record again optional Modal -->
            <div class="modal fade" id="OptModal" tabindex="-1" aria-labelledby="optLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="beginModalLabel">Thank you for participating recording</h5>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            To record another video, Press the "Record Next" Button.<br>
                        </div>
                        <div class="modal-footer">
                            <button id="finishbtn" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-seccondary">Finish</button>  
                            <button id="againbtn" type="button" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Record Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </center>

        <!-- Video Player Div -->
        <div id="video_pop">
            <video muted onended="vidEnd();" id="the_Video" preload="auto" src="" type="video/webm"></video>"
            </div>
        </body>
        <!-- JS for Video Player -->
        <script>
		
			
		
			window.onload=function(){
				var canvas = document.getElementById("cv1")
				var Video_two = document.getElementsByClassName('videoElement')[0];
				canvas.style.top = Video_two.getClientRects()[0].top +'px'; 
				canvas.style.left = Video_two.getClientRects()[0].left+'px'; 
				var ctx = canvas.getContext("2d")
				var x = Video_two.getClientRects()[0].x + (Video_two.getClientRects()[0].width)/2;
				var y = Video_two.getClientRects()[0].y + (Video_two.getClientRects()[0].height)/2;
				ctx.beginPath();
				ctx.strokeStyle = 'white';
				ctx.setLineDash([5, 3]);
				ctx.ellipse(150, 80, 120, 45, 0, 0, 2 * Math.PI);
				ctx.stroke();
			}; 
		
			var vid;
			var vid2;
			var vid3;
			var vidCurrentPlayingNumber = 1;
			
			getVideo('BlueBall.mp4').then(function(result){
			vid = URL.createObjectURL(result);
			document.getElementById("the_Video").src = vid;
			});
			
			getVideo('Green_Ball.mp4').then(function(result){
			vid2 = URL.createObjectURL(result);
			
			});
			
		    getVideo('Red_Ball.mp4').then(function(result){
			vid3 = URL.createObjectURL(result);
			
			});
			
			function getVideo(name){
			
			return new Promise(function(resolve,reject){
			
			var req = new XMLHttpRequest();
				req.open('GET', name, true);
				req.responseType = 'blob';

				req.onload = function() {
				   // Onload is triggered even on 404
				   // so we need to check the status code
				   if (req.status === 200) {
					  var videoBlob = req.response;
					  resolve(videoBlob);
					//  vid = URL.createObjectURL(videoBlob); // IE10+
					  // Video is now downloaded
					  // and we can set it as source on the video element
					//document.getElementById("the_Video").src = vid;
				   }
				}
				req.onerror = function() {
				   // Error
				}

				req.send();
				
			
			
			});
				
			
			}
		
            const videoSelect = document.querySelector('select#videoSource');
            const selectors = [videoSelect];
            const video = document.querySelector('video');
            var videoSource = videoSelect.value;
            var constraintObj;
            var mediaStreamObj;
            var recorderstatus = false;


            document.getElementById("beginbutton").addEventListener('click', (ev)=>{
                if (recorderstatus == false){
                    startRecorder();
                }
                recorderstatus = true;
            });

            document.addEventListener('DOMContentLoaded', (ev)=>{
                var startmodal = new bootstrap.Modal(document.getElementById('beginModal'), {});
                startmodal.show();
            });
            // video
            function onVideoClick() {
                console.log("LaunchedPlayer");
                
				//document.getElementById("the_Video").load();
                document.getElementById("video_pop").style.display="block";
            }


            function vidEnd() {
                document.getElementById("video_pop").style.display="none";
                document.getElementById("video_pop").innerHTML = "";
            }

            //Video Dropdown
            function gotDevices(deviceInfos) {
                // Handles being called several times to update labels. Preserve values.
                const values = selectors.map(select => select.value);
                selectors.forEach(select => {
                    while (select.firstChild) {
                        select.removeChild(select.firstChild);
                    }
                });
                for (let i = 0; i !== deviceInfos.length; ++i) {
                    const deviceInfo = deviceInfos[i];
                    const option = document.createElement('option');
                    option.value = deviceInfo.deviceId;
                    if (deviceInfo.kind === 'videoinput') {
                        option.text = deviceInfo.label || `camera ${videoSelect.length + 1}`;
                        videoSelect.appendChild(option);
                    }
                }
                selectors.forEach((select, selectorIndex) => {
                    if (Array.prototype.slice.call(select.childNodes).some(n => n.value === values[selectorIndex])) {
                        select.value = values[selectorIndex];
                    }
                });
            }

            navigator.mediaDevices.enumerateDevices().then(gotDevices).catch(handleError);

            function handleError(error) {
			console.log(error);
                //console.log('navigator.MediaDevices.getUserMedia error: ', error.message, error.name);
            }

            function startplayer() {
                videoSource = videoSelect.value;
                var constraintObj = {
                    audio: false,
                    video: {
                        deviceId: videoSource,
                        width: { min: 480, ideal: 720, max: 1080 },
                        height: { min: 640, ideal: 1280, max: 1920 }
                    }
                    // width: 1280, height: 720  -- preference only
                    // facingMode: {exact: "user"}
                    // facingMode: "environment"
                };
                navigator.mediaDevices.getUserMedia(constraintObj).then(gotStream).catch(handleError);
                navigator.mediaDevices.getUserMedia(constraintObj).then(
                function(mediaStreamObj) {
                    //connect the media stream to the first video element
                    //let video = document.querySelector('video');
                    if ("srcObject" in video) {
                        video.srcObject = mediaStreamObj;
                    } else {
                        //old version
                        video.src = window.URL.createObjectURL(mediaStreamObj);
                    }

                    video.onloadedmetadata = function(ev) {
                        //show in the video element what is being captured by the webcam
                        video.play();
                    };
                })
                .catch(function(err) {
                    console.log(err.name, err.message);
                });
                console.log('Restart Attempt', videoSource);
			
            }
			

            startplayer();
var mediaRecorder 
            function startRecorder() {
                videoSource = videoSelect.value;
                var constraintObj = {
                    audio: false,
                    video: {
                        deviceId: videoSource,
                        width: { min: 480, ideal: 720, max: 1080 },
                        height: { min: 640, ideal: 1280, max: 1920 }
                    }
                    // width: 1280, height: 720  -- preference only
                    // facingMode: {exact: "user"}
                    // facingMode: "environment"
                };
                navigator.mediaDevices.getUserMedia(constraintObj).then(gotStream).catch(handleError);
                navigator.mediaDevices.getUserMedia(constraintObj).then(
                function(mediaStreamObj) {
                    //connect the media stream to the first video element
                    //let video = document.querySelector('video');
                    if ("srcObject" in video) {
                        video.srcObject = mediaStreamObj;
                    } else {
                        //old version
                        video.src = window.URL.createObjectURL(mediaStreamObj);
                    }

                    let start = document.getElementById('btnStart');
                    let stop = document.getElementById('the_Video');
                    let vid2 = document.getElementById('2vid');
					if(!mediaRecorder){
					 mediaRecorder = new MediaRecorder(mediaStreamObj);
					}
                    
                    let vidchunks = [];

                    mediaRecorder.ondataavailable = function(ev) {
                        vidchunks.push(ev.data);
                    }

                    start.addEventListener('click', (ev)=>{
                        onVideoClick();
                        mediaRecorder.start();
                        console.log(mediaRecorder.state);
                    });

                    stop.addEventListener('ended', (ev)=>{
                        mediaRecorder.stop();
                        console.log(mediaRecorder.state);
						
                    });
var timerId;
                    mediaRecorder.onstop = (ev)=>{
					//mediaRecorder = null;
                        let blob = new Blob(vidchunks, { 'type' : 'video/mkv' });
                        vidchunks = [];
                        let videoURL = window.URL.createObjectURL(blob);

                        //vid2.src = videoURL;

                        //generate form
                        const formData = new FormData();
                        formData.append("_token", '{{ csrf_token()}}');
                        formData.append('video', blob);
                        progressBarTimer();
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
						}else{
						document.getElementById("finishbtn").style.display="none";
							document.getElementById("againbtn").style.display="block";
						}
						 OptModal.show();
                        })
                        .catch(error => {console.log('upload error');})
                    }
                })
                .catch(function(err) {
                    console.log(err.name, err.message);
                });
                console.log('Created Recorder using:', videoSource);
				
				
				

				
            }

            function progressBarTimer(){
                timerId =  setTimeout(function () {
                const progressbar = document.getElementById('progressbar');
                progressbar.value = elapsedTime / 100;
                elapsedTime = elapsedTime+1000;
            }, 1000);
            }
            elapsedTime = 0;


            function gotStream(stream) {
                window.stream = stream; // make stream available to console
                video.srcObject = stream;
                // Refresh button list in case labels have become available
                return navigator.mediaDevices.enumerateDevices();
            }
            // Webcam Display

            //handle older browsers that might implement getUserMedia in some way
            if (navigator.mediaDevices === undefined) {
                navigator.mediaDevices = {};
                navigator.mediaDevices.getUserMedia = function(constraintObj) {
                    let getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
                    if (!getUserMedia) {
                        return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
                    }
                    return new Promise(function(resolve, reject) {
                        getUserMedia.call(navigator, constraintObj, resolve, reject);
                    });
                }
            }else{
                navigator.mediaDevices.enumerateDevices()
                .then(devices => {
                    devices.forEach(device=>{
                        console.log(device.kind.toUpperCase(), device.label, device.deviceId);
                        //, device.deviceId
                    })
                })
                .catch(err=>{
                    console.log(err.name, err.message);
                })
            }

            // video
            function onVideoClick() {
                document.getElementById("the_Video").play();
                document.getElementById("video_pop").style.display="block";

            }


            function vidEnd() {
                document.getElementById("video_pop").style.display = "none";
                //document.getElementById("video_pop").innerHTML = "";
                document.getElementById("videoUpload").style.display = 'block';
                 document.getElementById("vidplayer").style.display="none";
            }

            let Again = document.getElementById('againbtn');
            let Finish = document.getElementById('finishbtn');
            let Begin = document.getElementById('beginbutton');

            Again.addEventListener('click', (ev)=>{
			vidCurrentPlayingNumber++;
			 document.getElementById("video_pop").style.display = "block";
			  document.getElementById("videoUpload").style.display = 'none';
			  document.getElementById("vidplayer").style.display="block";
			  if(vidCurrentPlayingNumber == 2){
			  document.getElementById("the_Video").src = vid2;
			  } else if(vidCurrentPlayingNumber==3){
			   document.getElementById("the_Video").src = vid3;
			  }
                
				//startplayer();
				 //startRecorder();
				
				 setTimeout(function(){
				  mediaRecorder.start();
				   console.log(mediaRecorder.state);
				  onVideoClick();
				
				 },2000);
				
				// mediaRecorder.resume();
                       
                        
                       // console.log(mediaRecorder.state);
				
              
               
            });

            Finish.addEventListener('click', (ev)=>{
                window.location.href = "thankyou";
            });
            Begin.addEventListener('click', (ev)=>{
                var ConfModal = new bootstrap.Modal(document.getElementById('ConfModal'), {});
                ConfModal.show();
            });

        </script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
    </body>
    </html>
