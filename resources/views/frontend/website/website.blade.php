<!DOCTYPE html>
<html lang="ru-RU">
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{Lang::get('home.title')}}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Web Digital">
<meta name="description" content="Web Digital - профессиональная компания по веб-дизайну и веб-разработке в Ташкенте, в Узбекистане, которая предоставляет высококачественные веб-сайты с CMS и с адаптивным дизайном для мобильных устройств.">
<meta name="keywords" content="веб-сайт, веб-разработка, веб-дизайн, сайт, лендинг, интернет магазин, Ташкент, Узбекистан">
<link rel="icon" type="image/png" href="{{asset('frontend/images/logo/favicon.png')}}">
<!-- icon -->
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/images/logo/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontend/images/logo/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/logo/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/images/logo/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/logo/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/images/logo/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontend/images/logo/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/images/logo/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/images/logo/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('frontend/images/logo/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/images/logo/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/images/logo/favicon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/images/logo/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('frontend/images/logo/manifest.json')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Open Graft -->
<meta property="og:locale" content="ru_RU">
<meta property="og:type" content="website">
<meta property="og:title" content="Рекламное агентство | Дизайн сайта компании в Ташкенте | Web Digital">
<meta property="og:description" content="Web Digital - ведущее рекламное агентство Узбекистана, специализирующееся на SEO, производстве видео, брендинге, маркетинге, веб-дизайне и веб-разработке.">
<meta property="og:url" content="https://www.wdagency.org/">
<meta property="og:site_name" content="Web Digital">
<meta property="og:image" content="https://wdagency.org/images/social/social.png">
<meta property="og:image:secure_url" content="https://wdagency.org/images/social/social.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Web Digital - ведущее рекламное агентство Узбекистана, специализирующееся на SEO, производстве видео, брендинге, маркетинге, веб-дизайне и веб-разработке.">
<meta name="twitter:title" content="Рекламное агентство | Дизайн сайта компании в Ташкенте | Web Digital">
<meta name="twitter:site" content="@allwebdigital">
<meta name="twitter:image" content="https://wdagency.org/images/social/social.png">
<meta name="twitter:creator" content="@allwebdigital">

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Самарканд",
        "addressRegion": "Самарканд",
        "postalCode": "140100",
        "streetAddress": "Улица Мустакиллик 41"
      },
      "name": "Сайт"
    },
    {
      "@type": "Offer",
      "price": "100.00",
      "priceCurrency": "USD",
      "url": "https://www.website.wdagency.com"
    }
  ]
}
</script>


<!-- Style css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/website.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/website_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/fontawesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/flag-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/header.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/socail.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/footer.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/animate.css')}}">
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140810209-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 gtag('config', 'UA-140810209-1');
</script> 
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KH5CM78');</script>
<!-- End Google Tag Manager -->
  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1788130771263348');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1788130771263348&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53795455, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53795455" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH5CM78"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div style="position: absolute; width: 100%; height: 100%;">
	<header class="header">
		<div style="z-index: 1000;" class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo_container d-flex flex-row align-items-center justify-content-start">
				<div class="wow fadeInLeft logo">
                  <a href="/"><img src="{{asset('frontend/images/logo/1.png')}}" alt="WD | Web Digital"></a>
				</div>
				<div class="wow fadeInLeft logo_text" style="text-transform: uppercase; line-height: 1.5em; font-weight: bold; font-size: 20px; top: 3px;">
					<span style="float: left; color: white; letter-spacing: 3px;">&nbsp;{{Lang::get('home.reklamnoy')}}</span><br>
					<span style="float: left; color: red; letter-spacing: 1px;">&nbsp;{{Lang::get('home.agentstvo')}}</span>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
			<nav class="main_nav" style="position: relative; left: 105px; margin-right: 45px;">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li class="hover_uz"><a href="{{ route('/') }}"> {{Lang::get('home.menu1')}}</a></li>
                    <li class="active"><a href="{{ route('website') }}">{{Lang::get('home.menu2')}}</a></li>
                    <li class="hover_uz"><a href="{{ route('portfolio') }}">{{Lang::get('home.menu3')}}</a></li>
                    <li class="hover_uz"><a href="blog">{{Lang::get('home.menu4')}}</a></li>
                    <li class="hover_uz"><a href="{{ route('contact') }}">{{Lang::get('home.menu5')}}</a></li>
                    @if(Session::get('locale')=='ru')
									<li class="hover_uz"><a href="{{ url('/locale/en')}}">{{ __('En') }}</a></li>
									@else
									<li class="hover_uz"><a href="{{ url('/locale/ru')}}">{{ __('Ru') }}</a></li>
									@endif
							</ul>
			</nav>
			<div class="submit_button">
				<div class="submit_button_div1">
					<div class="col-xl-12">
						<span>+998 93 356-66-61</span>
					</div>
				</div>
				<!-- <div style="width: 50px; position: absolute; top: 50%; transform: translateX(-105%) translateY(-50%);">
                        <div class="sub_div_uz">
                            EN
                        </div>
                        <div class="sub_div_uz">
                            UZ
                        </div>
                </div> -->
			</div>
			<p class="tel_uz_768 ml-auto"><a href="tel:+998933566661"><i class="fa fa-phone"></i></a></p>
		</div>
				<div class="menu_2 header1">
					<ul>
						<li class="wow flipInX activte"><a href="{{ route('website') }}"><h5>{{Lang::get('home.uslugu1')}}</h5></a></li> 
						<li class="wow flipInX menu_2_li"><a href="{{ route('logo') }}"><h5>{{Lang::get('home.uslugu2')}}</h5></a></li>
						<li class="wow flipInX menu_2_li"><a href="{{ route('seo') }}"><h5>seo</h5></a></li>
						<li class="wow flipInX menu_2_li"><a href="{{ route('smm') }}"><h5>smm</h5></a></li>
						<li class="wow flipInX menu_2_li"><a href="{{ route('ppc') }}"><h5>ppc</h5></a></li>
						<li class="wow flipInX menu_2_li"><a href="{{ route('video') }}"><h5>{{Lang::get('home.uslugu3')}}</h5></a></li>
					</ul>
				</div>
	</header>
	<div class="social_bar">
		<div class="d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start mr-auto ml-auto">
				<li><a href="https://www.facebook.com/allwebdigitall" target="_blank"><h5>Facebook</h5></a></li>
				<li><a href="https://www.instagram.com/allwebdigital" target="_blank"><h5>Instagram</h5></a></li>
				<li><a href="https://t.me/allwebdigitall" target="_blank"><h5>Telegram</h5></a></li>
			</ul>
		</div>
	</div>
	<div class="menu trans_400 d-flex flex-column align-items-start justify-content-center">
		<div class="menu_close"><i onclick="menu_2_yop()" class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav">
				<ul>
					<li><a href="index">{{Lang::get('home.menu1')}}</a></li>
					<li onclick="menu_2_chiq()" class="hover_li_uz"><i id="i_yop" class="fa fa-caret-right"></i><i id="i_chiq" class="fa fa-caret-down" style="display: none;"></i>&nbsp;&nbsp;<a class="a_hover">{{Lang::get('home.menu2')}}</a></li>
					<li id="menu_2_none_chiq" class="menu_2_none">
						<ul>
							<li><a href="website">{{Lang::get('home.uslugu1')}}</a></li>
							<li><a href="logo">{{Lang::get('home.uslugu2')}}</a></li>
							<li><a href="seo">SEO</a></li>
							<li><a href="smm">SMM</a></li>
							<li><a href="ppc">PPC</a></li>
							<li><a href="video">{{Lang::get('home.uslugu3')}}</a></li>
						</ul>
					<script>
						function menu_2_chiq(){
							document.getElementById('menu_2_none_chiq').style.display = "block"
							document.getElementById('i_chiq').style.display = "block"
							document.getElementById('i_yop').style.display = "none"

						}
						function menu_2_yop(){
							document.getElementById('menu_2_none_chiq').style.display = "none"
							document.getElementById('i_chiq').style.display = "none"
							document.getElementById('i_yop').style.display = "block"

						}
					</script>
					</li>
					<li><a href="portfoli">{{Lang::get('home.menu3')}}</a></li>
					<li><a href="blog">{{Lang::get('home.menu4')}}</a></li>
					<li><a href="contact">{{Lang::get('home.menu5')}}</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="home">
			<div class="container-fluid">
		        <section class="box-intro">
		            <div class="table-cell">
		                <h3 class="box-headline letters rotate-2">
		                    <span class="box-words-wrapper">
		                        <b class="is-visible">{{Lang::get('home.uslugu1')}}.</b>
		                        <b>{{Lang::get('website.brend')}} .</b>
		                        <b>&nbsp;&nbsp; {{Lang::get('website.logo')}}.</b>
		                    </span>
				        </h3>
		                <h2>{{Lang::get('website.samoyluchshe')}}</h2>
		            </div>
		            <div class="mouse">
		                <div class="scroll"></div>
		            </div>
		        </section>
		    </div>
	</div>

</div>
<div style="position: absolute; width: 100%; top: 100%;">
	<div class="intro">
		<div class="container_uz ">
			<div class="row row-eq-height text-center">
				<div class="col-xl-12 order-xl-2 order-1">
					<div class="intro_content">
						<h1 class="wow fadeInUp">
								<span class="intro_title">{{Lang::get('website.saytetopuls')}}<span>.</span></span>
								<label class="intro_text">{{Lang::get('website.etopervoy')}} 
									<br>{{Lang::get('website.mnojestvoreklamnix')}}
									
							</label>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="week_model" style="padding-top: 0px;">
		<div class="wow fadeInRight section_title_container d-flex flex-row align-items-center justify-content-end">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title"><h2>{{Lang::get('website.lisokompanii')}}<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-xl-5 col-lg-6 order-lg-1 order-2 model_col">
					<div class="model_slider_container">
						<div class="wow fadeInRight owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/10.jpg')}}" alt="Website | маркетинг и бренд">
							</picture>
						</div>
						
					</div>
				</div>
				<div class="wow fadeInLeft col-lg-6 offset-xl-1 order-lg-2 order-1 padding-top">
					<div class="week_model_content">
						<h3 class="week_model_title">{{Lang::get('website.chtotakoe')}}</h3>
						<div class="week_model_text">
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.razrabotkavebsayt')}}</h4>
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.lyubomusovremme')}} 
							</h4>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="week_model">
		<div class="wow fadeInLeft section_title_container d-flex flex-row align-items-center">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title" style="margin-left: auto;"><h2>{{Lang::get('website.webtexnologii')}}<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="wow fadeInRight col-lg-6 order-lg-1 order-2 padding_bottom">
					<div class="week_model_content left_uz width_uz">
						<h3 class="week_model_title">{{Lang::get('website.texnologiidvijenii')}}</h3>
						<div class="week_model_text">
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.vwebdigital')}}
							</h4>
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.virabativaemaya')}} 
							</h4>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 order-lg-2 order-1 model_col">
					<div class="model_slider_container_right">
						<div class="wow fadeInLeft owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/11.jpg')}}" alt="Website | Веб-технология">
							</picture>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="week_model">
		<div class="wow fadeInRight section_title_container d-flex flex-row align-items-center justify-content-end">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title"><h2>{{Lang::get('website.webdizayn')}}<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-xl-5 col-lg-6 order-lg-1 order-2 model_col">
					<div class="model_slider_container">
						<div class="wow fadeInRight owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/17.jpg')}}" alt="Website | бизнес">
							</picture>
						</div>
					</div>
				</div>
				<div class="wow fadeInLeft col-lg-6 offset-xl-1 order-lg-2 order-1 padding-top">
					<div class="week_model_content">
						<h3 class="week_model_title">{{Lang::get('website.vdelyatsya')}}</h3>
						<div class="week_model_text">
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.dizaynvebsayta')}} 
 
							</h4>
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.vashsayt')}}

							</h4>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="week_model">
		<div class="wow fadeInLeft section_title_container d-flex flex-row align-items-center">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title" style="margin-left: auto;"><h2>{{Lang::get('website.chistiykod')}}<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="wow fadeInRight col-lg-6 order-lg-1 order-2 padding_bottom">
					<div class="week_model_content left_uz width_uz">
						<h3 class="week_model_title">{{Lang::get('website.kodkakiskusstvo')}}</h3>
						<div class="week_model_text">
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.chtotakoexoroshiy')}}
							</h4>
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.pomniteeskivash')}}
							</h4>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 order-lg-2 order-1 model_col">
					<div class="model_slider_container_right">
						<div class="wow fadeInLeft owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/13.jpg')}}" alt="Website | чистый код">
							</picture>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="week_model">
		<div class="wow fadeInRight section_title_container d-flex flex-row align-items-center justify-content-end">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title"><h2>{{Lang::get('website.interfeys')}}<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-xl-5 col-lg-6 order-lg-1 order-2 model_col">
					<div class="model_slider_container">
						<div class="wow fadeInRight owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/18.jpg')}}" alt="Website | Адаптивный сайт">
							</picture>
						</div>
					</div>
				</div>
				<div class="wow fadeInLeft col-lg-6 offset-xl-1 order-lg-2 order-1 padding-top">
					<div class="week_model_content">
						<h3 class="week_model_title">{{Lang::get('website.adaptivniyvid')}}</h3>
						<div class="week_model_text">
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.klyuchomeffektivno')}}
							</h4>
							<h4>
								&nbsp;&nbsp;&nbsp;&nbsp;{{Lang::get('website.fseetivopros')}}


							</h4>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="week_model">
		<div class="wow fadeInLeft section_title_container d-flex flex-row align-items-center">
			<div class="d-flex flex-row align-items-center justify-content-start">
				<div class="section_title" style="margin-left: auto;"><h2>{{Lang::get('website.')}}Цена<span>.</span></h2></div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="wow fadeInRight col-lg-6 order-lg-1 order-2 padding_bottom">
					<div class=" week_model_content left_uz width_uz">
						<h3 class="week_model_title">{{Lang::get('website.webrazrabotkav')}}</h3>
						<div class="week_model_text">
							<table class="table">
								<tbody>
									<tr>
										<th>{{Lang::get('website.uslugi')}}</th>
										<th>{{Lang::get('website.srokdney')}}</th>
										<th>{{Lang::get('website.sena')}}</th>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniysayt')}}</td>
										<td>4</td>
										<td>100 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniylandingpage')}}</td>
										<td>7</td>
										<td>120 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.saytdlyagos')}}</td>
										<td>11</td>
										<td>200 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniykorporativ')}}</td>
										<td>17</td>
										<td>250 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniysaytakataloga')}}</td>
										<td>19</td>
										<td>280 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniyinternetmagazin')}}</td>
										<td>25</td>
										<td>350 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.sozdaniyinformatsionnogo')}}</td>
										<td>30</td>
										<td>650 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.webprilojeniya')}}</td>
										<td>30</td>
										<td>850 у.е</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 order-lg-2 order-1 model_col">
					<div class="model_slider_container_right">
						<div class="wow fadeInLeft owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/15.jpg')}}" alt="Website | веб прайс">
							</picture>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-xl-5 col-lg-6 order-lg-1 order-2 model_col">
					<div class="model_slider_container">
						<div class="wow fadeInRight owl-carousel owl-theme model_slider">
							<picture>
								<img src="{{asset('frontend/images/website/16.jpg')}}" alt="Website | веб-поддержка">
							</picture>
						</div>
					</div>
				</div>
				<div class="wow fadeInLeft col-lg-6 offset-xl-1 order-lg-2 order-1 padding-top">
					<div class="week_model_content">
						<h3 class="week_model_title">{{Lang::get('website.webpodderjka')}}</h3>
						<div class="week_model_text">
							<table class="table">
								<tbody>
									<tr>
										<th>{{Lang::get('website.uslugi')}}</th>
										<th>{{Lang::get('website.srokdney')}}</th>
										<th>{{Lang::get('website.sena')}}</th>
									</tr>
									<tr>
										<td>{{Lang::get('website.lisenziyassl')}}</td>
										<td>1</td>
										<td>30 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.uskoreniyzagruzki')}}</td>
										<td>2</td>
										<td>50 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.napolneniy')}}</td>
										<td>3</td>
										<td>60 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.adaptasiyapod')}}</td>
										<td>5</td>
										<td>70 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.analitikai')}}</td>
										<td>3</td>
										<td>50 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.plateyojniys')}}</td>
										<td>5</td>
										<td>60 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.dorobotkasayt')}}</td>
										<td>7</td>
										<td>80 у.е</td>
									</tr>
									<tr>
										<td>{{Lang::get('website.redizaynk')}}</td>
										<td>8</td>
										<td>100 у.е</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Footer -->
@include('frontend.price')
	<footer class="footer" style="padding: 0;"> 	
		<!-- Contact -->
@include('frontend.blog.contactfremfork') 
@include('frontend.blog.footer') 
	</footer>
</div>

<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('frontend/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/plugins/Isotope/packery-mode.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{asset('frontend/plugins/Isotope/masonry-horizontal.js')}}"></script>
<script src="{{asset('frontend/plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/usluga.js')}}"></script>
<script src="{{asset('frontend/js_uz/animated-headline.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="{{asset('frontend/js/index.js')}}"></script>

 <script src="{{asset('frontend/js_uz/custom.js')}}"></script>
</body>
</html>