<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

        </style>

        <style>
            main {
                display: flex;
                justify-content: space-between;
                max-width: 960px;
                margin: auto;
                transform: scale(0.9);
                }


.outter-frame {
	width: 346px;
/* 	height: 702px; */
	position: relative;
	box-sizing: border-box;
	margin: 20px;
	border: 7px solid #C2C2C2;
	border-radius: 53px;
	background-color: #C2C2C2;
}

.inner-frame {
	width: 333px;
	height: 688px;
	position: relative;
	box-sizing: border-box;
	border: 14px solid #171717;
	border-radius: 46px;
	background-color: #171717;
}

.forehead {
	width: 170px;
	height: 24px;
	position: absolute;
	z-index: 2;
	box-sizing: border-box;
	float: left;
	margin-left: calc((333px - 28px - 170px) / 2);
	border-bottom-left-radius: 18px;
	border-bottom-right-radius: 18px;
	background-color: #151515;
}

	.earpiece {
		width: 42px;
		height: 6px;
		position: absolute;
		top: 6px;
		left: calc(50% - 21px);
		box-sizing: border-box;
		border-radius: 4px;
		background-color: #242424;
	}

	.front-camera {
		width: 9px;
		height: 9px;
		position: absolute;
		box-sizing: border-box;
		border: 1.5px solid #161616;
		border-radius: 50%;
		right: 43px;
		top: 4px;
		background-color: #17222d;
	}

.profile-switcher-button {
	width: 2px;
	height: 27px;
	position: absolute;
	left: -24px;
	top: 75px;
	border-right: 1.5px solid #A0A0A0;
	border-top-left-radius: 2px;
	border-bottom-left-radius: 2px;
	background-color: #D1CDB0;
}

.volume-button {
	width: 2px;
	height: 50px;
	position: absolute;
	left: -24px;
	border-right: 1.5px solid #A0A0A0;
	border-top-left-radius: 2px;
	border-bottom-left-radius: 2px;
	background-color: #D1CDB0;
}
	.volume-button.up {
		top: 126px;
	}
	.volume-button.down {
		top: 190px;
	}


.power-button {
	width: 2px;
	height: 82px;
	position: absolute;
	right: -23px;
	top: 142px;
	border-left: 1.5px solid #A0A0A0;
	border-top-right-radius: 2px;
	border-bottom-right-radius: 2px;
	background-color: #D1CDB0;
}

.screen {
	width: 100%;
	height: 670px;
	position: absolute;
	z-index: 1;
	background-color: black;
	background-image: url('https://play-lh.googleusercontent.com/Me4W9Snku2IRIPPNArqFYoVnNEbad8ELQEDeswoRIwWOXyfv0UNS1jfz_wJ0tX0d8WY=w1280-h919-rw');
	background-size: 100%;
	border-radius: 29px;
	background-repeat: no-repeat;
	transition: opacity .4s ease;
}
	.screen.lock {
		opacity: 0;
		transition: opacity .5s ease;
	}
    /* //desktop/laptop css */
/* 2nd example :  BACKGROUND IMAGE */
div.desktop-wrapper {
    position: relative;
    padding-top: 25px;
    padding-bottom: 67.5%;
    height: 0;
}
div.desktop-wrapper iframe {
    box-sizing: border-box;
    background: url(http://img01.deviantart.net/05b6/i/2011/030/8/5/apple_led_cinema_screen_by_fisshy94-d38e3o5.png) center center no-repeat;
    background-size: contain;
    padding: 3.4% 10.8% 18.6%;/* 11.9% 15.5% 14.8% */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
/* Footer css */
.footer-distributed {
  background-color: #095052;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;

  padding: 55px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
  width: 40%;
}

/* The company logo */

.footer-distributed h3 {
  color: #ffffff;
  font: normal 36px "Cookie", cursive;
  margin: 0;
}

.footer-distributed h3 span {
  color: #5383d3;
}

/* Footer links */

.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer-distributed .footer-company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #5383d3;
  text-decoration: none;
}

/* Footer Right */

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
 background-size: contain

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {
  .footer-distributed {
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i {
    margin-left: 0;
  }
}

/* Footer css */
        </style>
    </head>
    <body class="antialiased">
     {{-- Navbar --}}
     <nav class="navbar navbar-light " style="background-color:#095052">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">
              <img src="/assets/images/logo.png"  width="100px;" alt="">
          </span>
        </div>
      </nav>
      {{-- Navbar --}}
      <br><br>
      <div class="container">
        <div class="jumbotron">
        <div class="row text-center">
          <div class="col-lg-5" >
            <p style="font-size:3vw;">Simple. Secure. <br> Reliable messaging.</p>
            <P><small>With WhatsApp, you'll get fast, simple, secure messaging and calling for free*, available on phones all over the world.</small></P>
            <button  id="GetFile"><img id="GetFile" download="Release.zip" src="/assets/images/Windows.png"  width="200px;" alt=""></button>
           </div>
           <div class="col-sm-7" >
            <div class="desktop-wrapper">
              <iframe width="560" height="315" src="//www.youtube.com/embed/f890SC1schE" frameborder="0" allowfullscreen></iframe>
            </div>
           </div>
         </div>
     </div>
    </div>
      <br><br>
      <hr>
      <br><br>
        <div class="container">
            <div class="jumbotron">
            <div class="row text-center">
                <div class="col-sm-5">
                    <div class="outter-frame">
                        <div class="page nexus6">
                            <div class="phone">
                              <div class="wa-container">
                                <div class="status-bar">
                                  <div class="time">
                                    2:15 PM
                                  </div>
                                  <div class="battery">
                                    <i class="zmdi zmdi-battery"></i>
                                  </div>
                                  <div class="network">
                                    <i class="zmdi zmdi-network"></i>
                                  </div>
                                  <div class="wifi">
                                    <i class="zmdi zmdi-wifi-alt-2"></i>
                                  </div>
                                  <div class="star">
                                    <i class="zmdi zmdi-star"></i>
                                  </div>
                                </div>
                                <div class="wrapperchat">
                                  <div class="chat-root">
                                    <div class="user-bar">
                                      <div class="back">
                                        <i class="zmdi zmdi-arrow-left"></i>
                                      </div>
                                      <!-- user info start -->
                                      <div class="user">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg" alt="user" />
                                      </div>
                                      <div class="user-name">
                                        <b>Valerio Pierbattista</b>
                                        <span>online now</span>
                                      </div>
                                      <!-- user info end -->
                                      <div class="actions more">
                                        <i class="zmdi zmdi-more-vert"></i>
                                      </div>
                                      <div class="actions attachment">
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                      </div>
                                      <div class="actions">
                                        <i class="zmdi zmdi-phone"></i>
                                      </div>
                                    </div>
                                    <div class="chat-window">
                                      <!-- conversation start -->
                                      <div class="conversation">

                                        <div class="balloon you">
                                           Hope i didn't wake you guys up before!
                                          <span class="data">2:11 PM</span>
                                        </div>
                                        <div class="balloon him">
                                          You didn't! we're laying in bed. dad's playing with my anus.
                                          <span class="data blue">2:11 PM</span>
                                        </div>
                                        <div class="balloon you">
                                          <img src="https://i.imgur.com/t7ZHW0q.png">
                                          <span class="data blue">2:15 PM</span>
                                        </div>
                                      </div>
                                      <!-- conversation end -->
                                      <div class="textarea">
                                        <div class="emoticons"></div>
                                        <textarea class="message" name="message" placeholder="Type a message"></textarea>
                                        <div class="photo">
                                          <i class="zmdi zmdi-camera"></i>
                                        </div>
                                        <div class="send-mic">
                                          <div class="circle-cont">
                                            <i class="zmdi zmdi-mic"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="bottom-bar">
                                  <div class="triangle">
                                    <i class="zmdi zmdi-triangle-up"></i>
                                  </div>
                                  <div>
                                    <i class="zmdi zmdi-circle-o"></i>
                                  </div>
                                  <div>
                                    <i class="zmdi zmdi-square-o"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
                <div class="col-lg-6">
                <p style="font-size:3vw;">Simple. Secure. <br> Reliable messaging.</p>
                <P><small>With WhatsApp, you'll get fast, simple, secure messaging and calling for free*, available on phones all over the world.</small></P>
                <img  src="/assets/images/google-play.png"  width="250px;" alt="">

            </div>
            </div>
            </div>
        </div>
    </body>
    <footer class="footer-distributed">

      <div class="footer-left">

        <img src="/assets/images/logo.png"  width="100px;" alt="logo">

        <p class="footer-links">
          <a href="#">Home</a> ·
          <a href="#">About</a> ·
          <a href="#">Pricing</a> ·
          <a href="#">About</a> ·
          <a href="#">Faq</a> ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Shopilyv &copy; 2021</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Roisambu</span> Goshen</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>911</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About</span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente non corrupti laboriosam magnam et eaque animi pariatur molestiae qui ipsam nemo aut culpa corporis beatae enim architecto reiciendis, maxime quia!</p>
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>
    </footer>
<script>
$('#GetFile').on('click', function () {
    $.ajax({
        url: 'https://myshopilyv.com/Salebook/Release.zip',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'Release.zip';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
        }
    });
});
</script>
</html>
