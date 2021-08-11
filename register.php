<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran PengaduanWeb</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/register/css/style.min.css">
	<link rel="stylesheet" href="assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/register/css/custom.min.css">
</head>
<!-- <style>
    label.error {
      display: block;
      position: absolute;
      top: 34px;
      right: -48px;
      font-size: 12px;
      color:#ff1212;
      width: 100%;
    }
    label.error:after {
      font-family: 'Material-Design-Iconic-Font';
      position: absolute;
      content: '\f1f0';
      right: 50px;
      top: -28px;
      font-size: 16px;
      color: #ff1212;
    }
    input.error, textarea.error {
      border: 1px solid #ff1212;
    }
    input.valid, textarea.valid {
      border: 1px solid #3377c0;
    }
    .bg-red {
      color: #ff1212;
    }
    @media (max-width: 1024px) {
      .form-row label {
        margin-bottom: 5px;
        }
      }
    @media (max-width: 767px) {
      #signup-form {
        margin: 0 15px 5px 15px;
      }
    @media (max-width: 1024px){
      .footer-copyright {
        color: #3377c0 !important;
        }
      }
    textarea {
    margin: 0;
    font-family: inherit;
    font-size: 15px;
    line-height: inherit;
    padding-right: 18px !important;
    padding-left: 18px !important;
  }
    textarea {
      overflow: auto;
      resize: vertical;
    }
    textarea.form-control {
      height: auto;
    }
    .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
      padding-right: 2.25rem;
      background-position: top calc(2.25rem / 4) right calc(2.25rem / 4);
    }
    .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
      padding-right: 2.25rem;
      background-position: top calc(2.25rem / 4) right calc(2.25rem / 4);
    }
    #alamat-error {
      top: 74px !important;
    }
    #alamat-error:after {
      top: -54px !important;
    }
    .actions li a:before {
      top: 10.5px !important;
    }
</style> -->
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-large-bg"><span></span></div>
                <div class="site-header-inner text-center">
                </div>
            </div>
        </header>
        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h3 style="margin-top: -2rem;">Register to Make a Complaint</h3>
                            <form action="process_signup.php" id="signup-form" method="POST" enctype="multipart/form-data">
                                <div id="wizard">
                                    <!-- SECTION 1 -->
                                    <h4></h4>
                                    <section>
                                        <div class="form-row" style="margin-bottom: 26px;">
                                            <label for="">
                                                NIK <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="number" name="nik" id="nik" placeholder="Nomor Induk Keluarga" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="">
                                                Nama <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="">
                                                Alamat <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <textarea name="alamat" id="alamat" style="padding:4px 18px 0 18px;" class="form-control" placeholder="Alamat Lengkap"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="">
                                                No.HP/WA <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="number" name="telp" id="telp" placeholder="Nomor HP / WA" class="form-control">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- SECTION 2 -->
                                    <h4></h4>
                                    <section>
                                        <div class="form-row">
                                            <label for="">
                                                Your Email <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="email" name="email" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-bottom: 3.4vh">
                                            <label for="">
                                                Your Picture
                                            </label>
                                            <input type="file" class="inputfile" name="foto" id="your_picture"  onchange="readURL(this);" />
                                            <label for="your_picture" style="width: auto; margin: auto;">
                                                <figure>
                                                    <img src="assets/register/img/user.png" id="your_picture_image"  alt="" class="rounded-circle center" width="150">
                                                </figure>
                                            </label>
                                        </div>
                                    </section>

                                    <!-- SECTION 3 -->
                                    <h4></h4>
                                    <section>
                                        <div class="form-row">
                                            <label for="">
                                                Username <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="">
                                                Password <i class="bg-red">*</i>
                                            </label>
                                            <div class="form-holder">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Ex. Intro to physic">
                                            </div>
                                        </div>
                                        <div class="checkbox-circle" style="margin-bottom: 48px;">
                                            <label>
                                                <input type="checkbox" checked>I agree all statement in
                                                <span class="checkmark" style="top: 8px;"></span><a href="#" style="color: blue;">Terms & Conditions</a>
                                            </label>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                        <div class="hero-illustration">
                            <div class="hero-squares hero-squares-1 is-revealing">
                                <svg width="124" height="64" viewBox="0 0 124 64" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="0%" y1="50%" x2="114.418%" y2="50%" id="squares-1-a">
                                            <stop stop-color="#6EFACC" offset="0%"/>
                                            <stop stop-color="#6EFACC" stop-opacity="0" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 0h4v4H0V0zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zM12 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM24 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM36 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM48 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM60 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM72 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM84 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM96 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4z" fill="url(#squares-1-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-squares hero-squares-2 is-revealing">
                                <svg width="64" height="88" viewBox="0 0 64 88" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="0%" y1="50%" x2="114.418%" y2="50%" id="squares-2-a">
                                            <stop stop-color="#6EFACC" offset="0%"/>
                                            <stop stop-color="#6EFACC" stop-opacity="0" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M80 574h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm12-60h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4z" transform="rotate(90 359 279)" fill="url(#squares-2-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-ball hero-ball-1 is-revealing">
                                <svg width="400" height="400" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="56.15%" cy="27.43%" fx="56.15%" fy="27.43%" r="57.526%" gradientTransform="matrix(.5626 -.82673 .8022 .54591 .026 .589)" id="ball-1-a">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="34.827%"/>
                                            <stop stop-color="#9B95F3" offset="100%"/>
                                        </radialGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-ball-1">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <circle cx="200" cy="200" r="200" fill="#FFF" fill-rule="evenodd" style="filter:url(#dropshadow-ball-1)"/>
                                    <circle cx="200" cy="200" r="200" fill="url(#ball-1-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-ball hero-ball-2 is-revealing">
                                <svg width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="56.15%" cy="27.43%" fx="56.15%" fy="27.43%" r="57.526%" gradientTransform="matrix(.5626 -.82673 .8022 .54591 .026 .589)" id="ball-2-a">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="34.827%"/>
                                            <stop stop-color="#9B95F3" offset="100%"/>
                                        </radialGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-ball-2">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <circle cx="100" cy="100" r="100" fill="#FFF" fill-rule="evenodd" style="filter:url(#dropshadow-ball-2)"/>
                                    <circle cx="100" cy="100" r="100" fill="url(#ball-2-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-illustration-browser is-revealing">
                                <svg width="800" height="450" viewBox="0 0 800 450" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-a">
                                            <stop stop-color="#F89595" offset="0%"/>
                                            <stop stop-color="#EF5C5C" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-b">
                                            <stop stop-color="#FFDFB0" offset="0%"/>
                                            <stop stop-color="#FFBB78" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-c">
                                            <stop stop-color="#83E78D" offset="0%"/>
                                            <stop stop-color="#4BCA55" offset="100%"/>
                                        </linearGradient>
                                        <filter x="-30%" y="-42.9%" width="184%" height="220%" filterUnits="objectBoundingBox" id="browser-d">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter1"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                                            <feColorMatrix values="0 0 0 0 0.866666667 0 0 0 0 0.905882353 0 0 0 0 0.937254902 0 0 0 0.56 0" in="shadowBlurOuter1" result="shadowMatrixOuter1"/>
                                            <feMerge>
                                                <feMergeNode in="shadowMatrixOuter1"/>
                                                <feMergeNode in="SourceGraphic"/>
                                            </feMerge>
                                        </filter>
                                        <linearGradient x1="19.946%" y1="72.147%" x2="73.772%" y2="18.374%" id="browser-e">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-f">
                                            <stop stop-color="#DAD8FF" offset="0%"/>
                                            <stop stop-color="#857DF3" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-g">
                                            <stop stop-color="#DAD8FF" offset="0%"/>
                                            <stop stop-color="#CDCAFF" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="94.808%" y1="-15.701%" x2="6.924%" y2="82.567%" id="browser-h">
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#5DFBD7" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="1.733%" y1="-10.509%" y2="77.375%" id="browser-i">
                                            <stop stop-color="#6EFACC" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#6EFACC" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="92.458%" y1="5.866%" x2="0%" y2="100%" id="browser-j">
                                            <stop stop-color="#5DFBD7" offset="0%"/>
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="92.458%" y1="5.866%" x2="0%" y2="100%" id="browser-k">
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#5DFBD7" stop-opacity=".513" offset="48.724%"/>
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="92.458%" y1="5.866%" x2="0%" y2="100%" id="browser-l">
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#5DFBD7" stop-opacity=".513" offset="47.494%"/>
                                            <stop stop-color="#5DFBD7" stop-opacity="0" offset="100%"/>
                                        </linearGradient>
                                        <filter x="-23.1%" y="-21.8%" width="192.3%" height="187.3%" filterUnits="objectBoundingBox" id="browser-m">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter1"/>
                                            <feGaussianBlur stdDeviation="12" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                                            <feColorMatrix values="0 0 0 0 0.866666667 0 0 0 0 0.905882353 0 0 0 0 0.937254902 0 0 0 0.56 0" in="shadowBlurOuter1" result="shadowMatrixOuter1"/>
                                            <feMerge>
                                                <feMergeNode in="shadowMatrixOuter1"/>
                                                <feMergeNode in="SourceGraphic"/>
                                            </feMerge>
                                        </filter>
                                        <linearGradient x1="100%" y1="50%" x2="-57.904%" y2="50%" id="browser-n">
                                            <stop stop-color="#DAD8FF" offset="0%"/>
                                            <stop stop-color="#857DF3" offset="100%"/>
                                        </linearGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-1">
                                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <rect width="800" height="450" rx="2" fill="#FFF" style="filter:url(#dropshadow-1)"/>
                                        <rect width="800" height="450" rx="2" fill="#FFF"/>
                                        <g>
                                            <path fill="#DDE7EF" d="M0 32h800v1H0z"/>
                                            <circle fill="url(#browser-a)" cx="24" cy="16" r="4"/>
                                            <circle fill="url(#browser-b)" cx="40" cy="16" r="4"/>
                                            <circle fill="url(#browser-c)" cx="56" cy="16" r="4"/>
                                        </g>
                                        <g filter="url(#browser-d)" transform="translate(505 196)" fill-rule="nonzero">
                                            <path d="M100 100l100-50.426L103.193.762a7.087 7.087 0 0 0-6.393 0L0 49.574 100 100z" fill="url(#browser-e)"/>
                                            <path d="M199 90L99 139.875v-40L199 50v40z" fill="url(#browser-f)"/>
                                            <path d="M100 139.875L0 90V50l100 49.875v40z" fill="url(#browser-g)"/>
                                        </g>
                                        <g stroke-width="2">
                                            <path stroke="url(#browser-h)" d="M498.336 298.7l-62.117 30.105L194 208" transform="translate(169 54)"/>
                                            <path d="M511.219 127.805L269 7" stroke="url(#browser-i)" transform="translate(169 54)"/>
                                            <path d="M312 157.547L533.512 43" stroke="url(#browser-j)" transform="translate(169 54)"/>
                                            <path d="M222 114.547L443.512 0" stroke="url(#browser-k)" transform="translate(169 54)"/>
                                            <path d="M0 356.547L221.512 242" stroke="url(#browser-l)" transform="translate(169 54)"/>
                                            <path d="M215 319.266L312.031 268" stroke="url(#browser-j)" transform="translate(169 54)"/>
                                        </g>
                                        <g filter="url(#browser-m)" transform="scale(-1 1) rotate(45 -338.122 -406.594)" fill-rule="nonzero">
                                            <path d="M52 0L.511 70.268a2.668 2.668 0 0 0-.478 1.987 2.63 2.63 0 0 0 1.076 1.732L52 110V0z" fill="url(#browser-e)"/>
                                            <path d="M103.49 70.27L52 0v110l50.89-36.011a2.637 2.637 0 0 0 1.077-1.732 2.669 2.669 0 0 0-.476-1.987z" fill="url(#browser-n)"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="hero-ball hero-ball-3 is-revealing">
                                <svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="56.15%" cy="27.43%" fx="56.15%" fy="27.43%" r="57.526%" gradientTransform="matrix(.5626 -.82673 .8022 .54591 .026 .589)" id="ball-3-a">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="34.827%"/>
                                            <stop stop-color="#9B95F3" offset="100%"/>
                                        </radialGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-ball-3">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <circle cx="40" cy="40" r="40" fill="#FFF" fill-rule="evenodd" style="filter:url(#dropshadow-ball-3)"/>
                                    <circle cx="40" cy="40" r="40" fill="url(#ball-3-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-ball hero-ball-4 is-revealing">
                                <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="56.15%" cy="27.43%" fx="56.15%" fy="27.43%" r="57.526%" gradientTransform="matrix(.5626 -.82673 .8022 .54591 .026 .589)" id="ball-4-a">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="34.827%"/>
                                            <stop stop-color="#9B95F3" offset="100%"/>
                                        </radialGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-ball-4">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <circle cx="20" cy="20" r="20" fill="#FFF" fill-rule="evenodd" style="filter:url(#dropshadow-ball-4)"/>
                                    <circle cx="20" cy="20" r="20" fill="url(#ball-4-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="hero-ball hero-ball-5 is-revealing">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="56.15%" cy="27.43%" fx="56.15%" fy="27.43%" r="57.526%" gradientTransform="matrix(.5626 -.82673 .8022 .54591 .026 .589)" id="ball-5-a">
                                            <stop stop-color="#F8F7FF" offset="0%"/>
                                            <stop stop-color="#DAD8FF" offset="34.827%"/>
                                            <stop stop-color="#9B95F3" offset="100%"/>
                                        </radialGradient>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-ball-5">
                                            <feOffset dx="24" dy="24" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.10 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.22 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <circle cx="12" cy="12" r="12" fill="#FFF" fill-rule="evenodd" style="filter:url(#dropshadow-ball-5)"/>
                                    <circle cx="12" cy="12" r="12" fill="url(#ball-5-a)" fill-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner">
                    <ul class="footer-links list-reset">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 Holly, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="assets/register/js/main.min.js"></script>
    <script src="assets/register/js/jquery-3.3.1.min.js"></script>
	<script src="assets/register/js/jquery.steps.js"></script>
	<script src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="assets/register/js/main.js"></script>
</body>
</html>
