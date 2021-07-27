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

    <title>Eye Tracking Study | Western Sydney University</title>
  </head>
  <body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
   <a class="navbar-brand" href="/">
    <img src="{{ asset('wsu_logo-removebg-preview.png') }}" class = "img-responsive" alt="tag" width="240px;">
  </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="/login" class="nav-link">Admin Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<center>
  <div class="jumbotron">
    <img src="{{ asset('wsu_logo-removebg-preview.png') }}" srcset="wsu_logo-removebg-preview.png 1100w" sizes="(min-width: 1200px) 50vw,100vw" alt="tag">
  <img src="{{ asset('placeholderwelcomeimage.png')}}" srcset="placeholderwelcomeimage.png 1100w" sizes="(min-width: 1200px) 50vw,100vw"><br><br><br>
  <p class="lead">Welcome to Western Sydney University's eye tracking student research program. For this test, you will be asked some anonymous questions regarding your demographic, and your face will be recorded. This information will not be used outside of an academic context.<br><br> Please touch the begin button to review Terms & Conditions before starting.

</p>
  <hr class="my-4">
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#termsModal"><i class="fa fa-home"></i>
  Begin
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        We at Western Sydney University respect the privacy of your personal information and, as such, make every effort to ensure your information is protected and remains private. As the owner and operator of loremipsum.io (the "Website") hereafter referred to in this Privacy Policy as "Lorem Ipsum", "us", "our" or "we", we have provided this Privacy Policy to explain how we collect, use, share and protect information about the users of our Website (hereafter referred to as “user”, “you” or "your"). For the purposes of this Agreement, any use of the terms "Lorem Ipsum", "us", "our" or "we" includes Western Sydney University, without limitation. We will not use or share your personal information with anyone except as described in this Privacy Policy.
<br><br>
        This Privacy Policy will inform you about the types of personal data we collect, the purposes for which we use the data, the ways in which the data is handled and your rights with regard to your personal data. Furthermore, this Privacy Policy is intended to satisfy the obligation of transparency under the EU General Data Protection Regulation 2016/679 ("GDPR") and the laws implementing GDPR. For the purpose of this Privacy Policy the Data Controller of personal data is Western Sydney University and our contact details are set out in the Contact section at the end of this Privacy Policy.
<br><br>
        Data Controller means the natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal information are, or are to be, processed. For purposes of this Privacy Policy, "Your Information" or "Personal Data" means information about you, which may be of a confidential or sensitive nature and may include personally identifiable information ("PII") and/or financial information. PII means individually identifiable information that would allow us to determine the actual identity of a specific living person, while sensitive data may include information, comments, content and other information that you voluntarily provide.
<br><br>
        BY ACCESSING OR USING OUR SERVICES, YOU CONSENT TO THE COLLECTION, TRANSFER, MANIPULATION, STORAGE, DISCLOSURE AND OTHER USES OF YOUR INFORMATION (COLLECTIVELY, "USE OF YOUR INFORMATION") AS DESCRIBED IN THIS PRIVACY POLICY. IF YOU DO NOT AGREE WITH OR CONSENT TO THIS PRIVACY POLICY YOU MAY NOT ACCESS OR USE OUR SERVICES.
      </div>
      <div class="modal-footer">
          <form method="post" action="{{url('/demographic')}}">
            @csrf
            <!-- <input type="checkbox" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="consent"> -->
            <input type="submit" class="btn btn-success" value="I agree" value="1" id="flexCheckDefault" name="consent">
            <input type="submit" class="btn btn-danger" value="I disagree">
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Administrator Login</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            </div>

            <div class="form-group row mb-0" style="padding-bottom:15px;">

                    <center>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </center>
                </div>
        </form>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
