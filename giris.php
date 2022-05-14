<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="layout.scss">
    <link rel="stylesheet" href="layout.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <meta http-equiv="refresh" content="1; url=index.html">
    <script>
		function checkEmail() {
			var x=document.forms["formgiris"]["mail"].value;
			var y=document.forms["formgiris"]["password"].value;
			var mail = document.getElementById('formGroupExampleInput2');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(x==null||x==""){
				alert("Lütfen e-mail adresinizi giriniz.");	
				
			if(y==null||y==""){
				alert("Lütfen şifrenizi giriniz.");
				return false;
			}
			}
		}
	
	</script>
    <title>HOŞGELDİNİZ</title>
    <link rel="icon" href="icon.png" type="image/icon type">
</head>
<body>
<div id="progress-bar"></div>
<section class="home">
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
          <nav class="navbar navbar-light bg-transparent fixed-top">
            <div class="container-fluid">
             
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Gizem Şangür</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link "   href="index.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="özgeçmiş.html">Özgeçmiş</a>  
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="İlgialanlarım.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link "aria-current="page" href="sehrim.html">Şehrim</a>  
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  href="mirasımız.html">Mirasımız</a>  
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link " href="iletisim.html">İletişim</a>  
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="giris.html">Giriş</a>  
                    </li>
                    
                  </ul>
                  
                </div>
              </div>
            </div>
          </nav>
        </div>
       

        
          <div class="row" id="first_section">
            <div class="col-12" id="hosgeldiniz" >
              <div id="particles-js" class="hosgeldiniz">
                <div class="svgcats">
                   <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 889.07556 459.37952" xmlns:xlink="http://www.w3.org/1999/xlink"><title>welcome_cats</title><ellipse cx="444.53778" cy="398.16856" rx="444.53778" ry="12.43462" fill="#e6e6e6"/><path d="M836.90729,483.74151c-.56135.0077-1.12265.0154-1.69165.0154s-1.1303-.0077-1.69164-.0154c-29.75741-.67665-51.32574-19.26925-45.83561-38.77687l13.387-47.58878,3.38328-12.04134,59.97615,1.02263,3.6447,11.77994,14.34816,46.36621C888.50213,464.11853,866.93379,483.06486,836.90729,483.74151Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M868.07949,398.13709a66.201,66.201,0,0,1-67.00413-.76123l3.38328-12.04134,59.97615,1.02263Z" transform="translate(-155.46222 -220.31024)" opacity="0.2"/><path d="M865.54813,446.54371c2.59087-9.656,11.10609-23.5853,34.98657-40.37992,41.64786-29.29427,16.80312-51.25925,15.72654-52.1796-2.25846-1.93041-1.92491-4.09793.77549-4.83852a11.22377,11.22377,0,0,1,9.03426,2.10278c1.34843,1.11541,32.45928,27.68293-14.53706,60.73417-42.29508,29.74951-33.30237,49.16914-33.1992,49.35545,1.13341,2.077-.684,3.73882-4.063,3.71644s-7.03927-1.72268-8.17623-3.7975C865.8564,460.81807,863.1348,455.53283,865.54813,446.54371Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M807.53434,490.67723a6.92019,6.92019,0,0,1-6.92032-6.92032V453.76883a6.92032,6.92032,0,0,1,13.84065,0v29.98808A6.92019,6.92019,0,0,1,807.53434,490.67723Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M813.602,419.48415a6.92019,6.92019,0,0,1-9.17934,3.39434l-27.243-12.53415a6.92033,6.92033,0,0,1,5.785-12.57368l27.243,12.53415A6.92019,6.92019,0,0,1,813.602,419.48415Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M856.82926,419.48415a6.92019,6.92019,0,0,0,9.17934,3.39434l27.243-12.53415a6.92032,6.92032,0,0,0-5.785-12.57368l-27.243,12.53415A6.9202,6.9202,0,0,0,856.82926,419.48415Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M862.89684,490.67723a6.92018,6.92018,0,0,0,6.92032-6.92032V453.76883a6.92032,6.92032,0,1,0-13.84064,0v29.98808A6.92018,6.92018,0,0,0,862.89684,490.67723Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M891.81774,296.5349a6.80558,6.80558,0,0,0,1.3735-5.40838l-3.76639-22.157-3.76639-22.157a6.913,6.913,0,0,0-11.22615-4.16441L857.127,256.9884l-10.42587,8.63951a65.69368,65.69368,0,0,0-21.04716-.31735l-10.04291-8.32216-17.30532-14.34028a6.913,6.913,0,0,0-11.22614,4.16441l-3.76639,22.157-3.76639,22.157a6.8438,6.8438,0,0,0,.30144,3.47373,66.11762,66.11762,0,1,0,111.96948,1.93465Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M796.57153,251.7278a3.447,3.447,0,0,0-1.20182.21814,3.38791,3.38791,0,0,0-2.18438,2.6353L788.618,281.45081a3.4226,3.4226,0,0,0,4.56474,3.7823l25.55323-9.47941a3.42226,3.42226,0,0,0,.99345-5.84352l-.00038-.00076-20.98549-17.38979A3.39218,3.39218,0,0,0,796.57153,251.7278Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M876.16653,251.7278a3.39218,3.39218,0,0,0-2.172.79183l-20.98587,17.39055a3.42226,3.42226,0,0,0,.99344,5.84352l25.55324,9.47941a3.4226,3.4226,0,0,0,4.56474-3.7823l-4.56737-26.86957a3.38788,3.38788,0,0,0-2.18437-2.6353A3.447,3.447,0,0,0,876.16653,251.7278Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><circle cx="679.75342" cy="119.65771" r="9.2271" fill="#e6e6e6"/><ellipse cx="679.75342" cy="115.04416" rx="6.1514" ry="2.30677" fill="#3f3d56"/><path d="M675.13987,125.04018H683.598a0,0,0,0,1,0,0v10.38049a4.22908,4.22908,0,0,1-4.22908,4.22908h0a4.22908,4.22908,0,0,1-4.22908-4.22908V125.04018a0,0,0,0,1,0,0Z" fill="#ff6584"/><path d="M835.729,240.68976c-.4435.91976-.87414,1.84948-1.27916,2.7982a65.81817,65.81817,0,0,0-4.65081,35.34384c.86574-1.25608,1.77556-2.56471,2.701-3.88776A65.775,65.775,0,0,1,835.729,240.68976Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M842.64935,249.14794c-.4435.91976-.87415,1.84947-1.27916,2.79819A65.81818,65.81818,0,0,0,836.71937,287.29c.86575-1.25607,1.77556-2.56471,2.70095-3.88775A65.775,65.775,0,0,1,842.64935,249.14794Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M863.98522,415.199l-.97489-12.39806-.97489-12.39809a3.82528,3.82528,0,0,0-5.98-2.8528l-10.24962,7.04331-7.48458,5.14325a5.09542,5.09542,0,0,0-7.74914,0l-7.48459-5.14325L812.83794,387.55a3.82528,3.82528,0,0,0-5.98,2.8528l-.97489,12.39809-.97489,12.39806a3.82528,3.82528,0,0,0,5.4606,3.75238l11.22448-5.35474,9.22263-4.39977a5.10117,5.10117,0,0,0,7.26159,0l9.22264,4.39977,11.22448,5.35474A3.82528,3.82528,0,0,0,863.98522,415.199Z" transform="translate(-155.46222 -220.31024)" fill="#00bfa6"/><circle cx="667.45062" cy="109.66168" r="2.30677" fill="#e6e6e6"/><circle cx="692.05622" cy="109.66168" r="2.30677" fill="#e6e6e6"/><path d="M388.8876,463.362c.56134.0077,1.12264.01539,1.69164.01539s1.1303-.00769,1.69164-.01539c29.75741-.67666,51.32574-19.26926,45.83561-38.77688l-13.387-47.58877L421.33624,364.955l-59.97615,1.02264-3.64469,11.77994-14.34817,46.36621C337.29275,443.739,358.86109,462.68533,388.8876,463.362Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M357.7154,377.75757a66.201,66.201,0,0,0,67.00413-.76123L421.33624,364.955l-59.97615,1.02264Z" transform="translate(-155.46222 -220.31024)" opacity="0.2"/><path d="M352.962,420.52381c-6.47349-7.6187-20.13012-16.56472-48.90033-21.5257-50.17744-8.65585-37.1209-39.13943-36.54168-40.43193,1.21524-2.71115-.01371-4.52748-2.77131-4.04135a11.22369,11.22369,0,0,0-7.26561,5.7663c-.74147,1.58513-17.492,38.90987,39.12707,48.67275,50.95721,8.79036,51.139,30.19031,51.12548,30.40285-.13567,2.36221,2.21806,3.08656,5.26252,1.62046s5.62513-4.5691,5.76494-6.93088C358.79137,433.55727,358.98968,427.61576,352.962,420.52381Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M418.26054,470.29771a6.92018,6.92018,0,0,0,6.92032-6.92033V433.38931a6.92033,6.92033,0,0,0-13.84065,0v29.98807A6.92019,6.92019,0,0,0,418.26054,470.29771Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M412.19286,399.10463a6.92019,6.92019,0,0,0,9.17934,3.39434l27.243-12.53415a6.92033,6.92033,0,1,0-5.785-12.57368l-27.243,12.53415A6.92019,6.92019,0,0,0,412.19286,399.10463Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M368.96562,399.10463a6.92019,6.92019,0,0,1-9.17934,3.39434l-27.243-12.53415a6.92033,6.92033,0,1,1,5.785-12.57368l27.243,12.53415A6.92019,6.92019,0,0,1,368.96562,399.10463Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M362.898,470.29771a6.92018,6.92018,0,0,1-6.92032-6.92033V433.38931a6.92033,6.92033,0,0,1,13.84065,0v29.98807A6.92019,6.92019,0,0,1,362.898,470.29771Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M445.94662,274.22073a6.8438,6.8438,0,0,0,.30144-3.47373l-3.76639-22.157-3.76639-22.157a6.913,6.913,0,0,0-11.22614-4.16442l-17.30532,14.34029L400.14091,244.931a65.69368,65.69368,0,0,0-21.04716.31735l-10.42587-8.63951-17.30531-14.34029a6.913,6.913,0,0,0-11.22615,4.16442L336.37,248.59l-3.76639,22.157a6.80563,6.80563,0,0,0,1.3735,5.40838,66.13684,66.13684,0,1,0,111.96948-1.93465Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M427.05136,232.14011,406.06587,249.5299l-.00038.00075a3.42226,3.42226,0,0,0,.99345,5.84353l25.55324,9.4794a3.4226,3.4226,0,0,0,4.56474-3.7823l-4.56737-26.86957a3.38792,3.38792,0,0,0-2.18438-2.63529,3.44677,3.44677,0,0,0-1.20182-.21814A3.3922,3.3922,0,0,0,427.05136,232.14011Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M348.42654,231.56642a3.38788,3.38788,0,0,0-2.18438,2.63529l-4.56737,26.86957a3.4226,3.4226,0,0,0,4.56474,3.7823l25.55324-9.4794a3.42227,3.42227,0,0,0,.99344-5.84353l-20.98587-17.39054a3.39218,3.39218,0,0,0-2.172-.79183A3.44672,3.44672,0,0,0,348.42654,231.56642Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><circle cx="235.11702" cy="99.27819" r="9.2271" fill="#e6e6e6"/><ellipse cx="235.11702" cy="94.66464" rx="6.1514" ry="2.30677" fill="#3f3d56"/><path d="M390.9637,324.9709h0A4.22908,4.22908,0,0,1,395.19279,329.2v10.38049a0,0,0,0,1,0,0h-8.45817a0,0,0,0,1,0,0V329.2A4.22908,4.22908,0,0,1,390.9637,324.9709Z" transform="translate(626.46519 444.24113) rotate(-180)" fill="#ff6584"/><path d="M390.06586,220.31024c.4435.91976.87414,1.84947,1.27916,2.79819a65.81819,65.81819,0,0,1,4.65081,35.34385c-.86574-1.25608-1.77555-2.56471-2.701-3.88776A65.775,65.775,0,0,0,390.06586,220.31024Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M383.14553,228.76841c.44351.91977.87415,1.84948,1.27917,2.7982a65.81827,65.81827,0,0,1,4.65081,35.34384c-.86574-1.25607-1.77556-2.56471-2.701-3.88776A65.77493,65.77493,0,0,0,383.14553,228.76841Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M361.80966,260.25756l.97489-12.39806.97489-12.39808a3.82528,3.82528,0,0,1,5.98-2.85281l10.24962,7.04332,7.48459,5.14325a5.09539,5.09539,0,0,1,7.74913,0l7.48459-5.14325,10.24962-7.04332a3.82528,3.82528,0,0,1,5.98,2.85281l.97489,12.39808.97489,12.39806a3.82528,3.82528,0,0,1-5.46059,3.75239L404.2016,258.6552l-9.22264-4.39977a5.10114,5.10114,0,0,1-7.26159,0l-9.22264,4.39977L367.27025,264.01A3.82528,3.82528,0,0,1,361.80966,260.25756Z" transform="translate(-155.46222 -220.31024)" fill="#00bfa6"/><path d="M400.57526,309.5924c0,1.274,1.03278,0,2.30678,0s2.30677,1.274,2.30677,0a2.30678,2.30678,0,0,0-4.61355,0Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M380.58322,309.5924c0,1.274-1.03278,0-2.30678,0s-2.30677,1.274-2.30677,0a2.30678,2.30678,0,0,1,4.61355,0Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><polygon points="481.05 263.451 481.05 248.788 407.736 248.788 407.736 249.705 407.736 263.451 407.736 381.67 407.736 396.333 422.399 396.333 481.05 396.333 481.05 381.67 422.399 381.67 422.399 263.451 481.05 263.451" fill="#3f3d56"/><path d="M672.25275,469.09857V616.643h73.314V469.09857Zm58.65118,132.8816h-43.9884V483.76142h43.9884Z" transform="translate(-155.46222 -220.31024)" fill="#00bfa6"/><polygon points="313.344 381.67 313.344 249.705 298.681 249.705 298.681 381.67 298.681 396.333 313.344 396.333 371.995 396.333 371.995 381.67 313.344 381.67" fill="#00bfa6"/><polygon points="265.69 263.451 265.69 248.788 192.376 248.788 192.376 249.705 192.376 263.451 192.376 314.771 192.376 329.434 192.376 381.67 192.376 396.333 207.039 396.333 265.69 396.333 265.69 381.67 207.039 381.67 207.039 329.434 265.69 329.434 265.69 314.771 207.039 314.771 207.039 263.451 265.69 263.451" fill="#3f3d56"/><polygon points="839.372 263.451 839.372 248.788 766.058 248.788 766.058 249.705 766.058 263.451 766.058 314.771 766.058 329.434 766.058 381.67 766.058 396.333 780.721 396.333 839.372 396.333 839.372 381.67 780.721 381.67 780.721 329.434 839.372 329.434 839.372 314.771 780.721 314.771 780.721 263.451 839.372 263.451" fill="#00bfa6"/><polygon points="142.889 249.705 142.889 370.89 104.228 332.23 104.14 332.319 104.058 332.237 64.535 371.76 64.535 249.247 49.872 249.247 49.872 395.875 64.535 395.875 64.535 392.496 104.147 352.884 142.889 391.627 142.889 396.333 157.552 396.333 157.552 249.705 142.889 249.705" fill="#3f3d56"/><polygon points="717.488 249.705 717.488 253.083 677.876 292.695 639.133 253.953 639.133 249.247 624.47 249.247 624.47 395.875 639.133 395.875 639.133 274.689 677.794 313.35 677.883 313.261 677.964 313.342 717.488 273.819 717.488 396.333 732.15 396.333 732.15 249.705 717.488 249.705" fill="#3f3d56"/><circle cx="335.07556" cy="150.37952" r="9" fill="#00bfa6"/><circle cx="113.07556" cy="250.37952" r="9" fill="#00bfa6"/><circle cx="291.07556" cy="450.37952" r="9" fill="#00bfa6"/><circle cx="517.07556" cy="177.37952" r="9" fill="#00bfa6"/><circle cx="782.07556" cy="442.37952" r="9" fill="#00bfa6"/><circle cx="791.07556" cy="206.37952" r="9" fill="#00bfa6"/><circle cx="677.07556" cy="368.37952" r="9" fill="#00bfa6"/></svg>
                </div>
                <p id="yazi">HOŞGELDİNİZ B201210001!</p> 
                
              </div>
                  
            </div>
           
                      
          
        
       
        </div>
      </div>
</section>     


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js" integrity="sha512-6zTDRWNxo8vI6JZYDCwhrJpg5icK3P4HNnW3czsO5Scb3lAoPDam+/wF3eog4hxcl0h44d0XlIcFkuoSaWHQ2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js" integrity="sha512-I+JeBiUY5B5/qJ6ey5CNqJ0yhAuNHBBbRjdM3alkabxCLz3++7hbeOScVSjyRouAihQIiint6Z2Or976vU2XuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js" integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js" integrity="sha512-/8phkpsAzxsbuX18zNkQ2gCq4Q5JsWoPo1jHLDeZorPUHRtx9YJxpdk+os05oDhPJVCNzA2/NMl4rmJyQ+6Fvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js" integrity="sha512-I0VFyPo7hdM7YrEbQ0pvX4bX2904k0+B19u/xBrPrQoMprfcSnIDfGFD8kP52GbAhwtDjkEVhXlQvj8+vkJyew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js" integrity="sha512-ht40uOoiTef4nKq0THVzjIGh3VS108J577LVVgNXnQLXza3doXjoM3owin2vd+Hm6w88k12RIrePIVY2WNzz6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/MotionPathPlugin.min.js" integrity="sha512-18ec/gLWqRPNSLxTPUkRwrp3Ibf6w9ncyZKuRTKBUTJZqsPqy5F3mzaL1JZ/5kRIngztGxsmCFUsYtoJFz8uHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="particles.js"></script>
<script src="appparticles.js"></script>
<script src="app.js"></script>
</body>
</html>
<?php
	if(isset($_POST['mail'])&&isset($_POST['password'])){		
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$papas=base64_encode($password);
		
		if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mail)){ 
			header("Location:giris.html");
			exit();
		}else{
			if($mail=='b201210001@sakarya.edu.tr'&&$password=='b201210001'){
				
				$_SESSION['mail']='b201210001@sakarya.edu.tr';
				exit();
			}else{
				header("Location: giris.html");
				exit();
			}
		}	
	}
?>

