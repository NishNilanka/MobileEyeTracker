<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- WSU favicon -->
    <link rel="icon" type="image/png" href="https://www.westernsydney.edu.au/__data/assets/file/0007/372562/WSU_Favicon-01.png?v=0.2.7"/>
    <style>
        .col-centered{
         float: none;
         margin: 0 auto;
}
    </style>
    <title>Eye Tracking Study | Western Sydney University</title>
</head>
<body onload="mobileOrTabletCheck()">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
   <a class="navbar-brand" href="/">
    <img src="wsu_logo-removebg-preview.png" alt="Logo" style="width:240px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
            </div>
        </nav>


        <div class="container">
            <div class="jumbotron">
                <center>
                    <h1 class="display-4" style="padding-top: 30px;"><b>Demographic Page</b></h1>
                    <p class="lead">We just require a bit of your information before we continue.</p>
                </div>
            </center>
            <hr size="4px;">
                <div class="container">
                    <form role="form" method="POST" action="/post">
                        @csrf
                        <!-- Age Range Select Menu -->
                        <div class="row">
                                    <div class="col-md-4 col-centered">
                                <div class="form-group">
                                    <label for="ageInput">Age:</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example" id="ageInput" name="ageInput">
                                        <option>18-26</option>
                                        <option>27-31</option>
                                        <option>32-47</option>
                                        <option>48-54</option>
                                        <option>54-60+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                                <br>
                                <!-- Glasses Select Menu -->
                                <div class="row">
                                    <div class="col-md-4 col-centered">
                                        <div class="form-group">
                                <label for="glassesInput"><p>Are you currently wearing any vision correction?</p></label>
                                <select class="form-select form-select-sm" aria-label="Default select example" id="glassesInput" name="glassesInput">
                                    <option>Yes, glasses</option>
                                    <option>Yes, contact lenses</option>
                                    <option>No</option>
                                </select>
                            </div>
                                    </div>
                        </div>
                    <br>
                    <!-- Gender Select Menu -->
                    <div class="row">
                        <div class="col-md-4 col-centered">
                            <label for="genderInput">Gender:</label>
                            <select class="form-select form-select-sm" aria-label="Default select example" id="genderInput" name="genderInput">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Non-binary</option>
                                <option>I'm not represented or prefer not to say</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Demographic Submit Button  -->
                        <div class="row">
                            <center>
                                <br>
                                <button class="btn btn-lg btn-primary" href="/tutorial" style="margin-top: 20px;">Submit</button>
                            </center>
                        </div>
                    </div>
                <!-- forum input -->
                <input type="hidden" id="MoblileOrTablet" name="MoblileOrTablet" value="Troys a Failure">
            </form>
        </div>

    </body>

        <!-- Script to determine device modal / type -->
    <script>
    function mobileOrTabletCheck() {
    let mobileOrTablet = 0;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) mobileOrTablet = 1;})(navigator.userAgent||navigator.vendor||window.opera);
    console.log(mobileOrTablet);
    document.getElementById("MoblileOrTablet").value = mobileOrTablet;
};

window.onload = mobileOrTabletCheck();
</script>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>