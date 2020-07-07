<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link  href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" rel="stylesheet" type="text/css"></link>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div class="row mx-6 ">
			<header class="logo-ah">
				<div class="row ">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg navbar-light align-items-center">
								<div class="logo-block">
									<a class="navbar-brand mr-log" href="#">
										<svg viewBox="0 0 179 33" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0)">
												<path d="M16.1119 22.3294C14.8843 24.2357 12.7408 25.4285 10.0854 25.4285C5.91603 25.4285 3.17154 22.4069 3.17154 18.2932C3.17154 14.0119 5.90325 11.158 10.0854 11.158C12.3093 11.158 14.226 12.0674 15.5157 13.5453L17.5827 11.4326C15.769 9.45237 13.131 8.24208 10.0854 8.24208C4.19402 8.24208 0 12.2622 0 18.2932C0 24.0878 4.21228 28.3444 10.0854 28.3444C13.5839 28.3444 16.4511 26.8738 18.2228 24.4867L16.1119 22.3294Z" fill="#038C73"/>
												<path d="M174.454 27.942L166.928 19.7339H163.427C163.427 24.361 163.427 27.0969 163.467 27.942H160.248C160.288 26.0107 160.288 22.7919 160.288 18.2854C160.288 13.7789 160.288 10.5599 160.248 8.62858H163.467C163.427 10.2783 163.427 12.974 163.427 16.7563H167.009L174.293 8.62858H178.317L169.906 18.0035L178.961 27.942H174.454Z" fill="#F65E64"/>
												<path d="M35.6319 27.9499L28.1062 19.7418H24.6048C24.6048 24.3689 24.6048 27.1048 24.6451 27.9499H21.426C21.466 26.0186 21.466 22.7996 21.466 18.2933C21.466 13.7868 21.466 10.5678 21.426 8.63646H24.6451C24.6048 10.2862 24.6048 12.9819 24.6048 16.7642H28.1866L35.4709 8.63646H39.4957L31.0845 18.0115L40.1392 27.9499H35.6319Z" fill="#038C73"/>
												<path d="M51.4298 8.98006C48.7899 8.87873 46.3747 9.83481 44.5715 11.4571C44.9117 8.69352 46.8199 6.40489 49.373 5.56593C52.5398 4.52511 56.6426 6.05545 60.7327 2.31833L58.4138 0C55.4382 2.81399 51.8065 1.6005 48.9557 2.36813C44.6166 3.53674 41.4078 7.5042 41.3632 12.2419H41.3606V18.6585C41.3606 24.0078 45.6982 28.3442 51.0489 28.3442C56.5239 28.3442 60.938 23.8033 60.7291 18.2826C60.5395 13.2635 56.4499 9.17258 51.4298 8.98006ZM51.5814 25.1694C47.5607 25.4898 44.216 22.146 44.5365 18.1259C44.7885 14.9625 47.3518 12.3998 50.516 12.1476C54.5366 11.8276 57.8809 15.1712 57.5609 19.1911C57.3089 22.3546 54.7456 24.9172 51.5814 25.1694Z" fill="#038C73"/>
												<path d="M104.889 8.98006C102.249 8.87873 99.8344 9.83481 98.0307 11.4571C98.3715 8.69352 100.279 6.40489 102.832 5.56593C105.999 4.52511 110.102 6.05545 114.192 2.31833L111.873 0C108.898 2.81399 105.266 1.6005 102.415 2.36813C98.0759 3.53674 94.8671 7.5042 94.8224 12.2419H94.8204V18.6585C94.8204 24.0078 99.1575 28.3442 104.508 28.3442C109.983 28.3442 114.397 23.8033 114.189 18.2826C113.999 13.2635 109.909 9.17258 104.889 8.98006ZM105.041 25.1694C101.02 25.4898 97.6753 22.146 97.9957 18.1259C98.2478 14.9625 100.811 12.3998 103.975 12.1476C107.996 11.8276 111.341 15.1712 111.02 19.1911C110.768 22.3546 108.205 24.9172 105.041 25.1694Z" fill="#F65E64"/>
												<path d="M152.472 27.942V19.5729H142.331V27.942H139.111V8.62858H142.331V16.5955H152.472V8.62858H155.692V27.942H152.472Z" fill="#F65E64"/>
												<path d="M134.873 24.6775C134.482 25.321 133.92 25.6513 133.264 25.4855C132.643 25.3286 132.227 24.74 132.227 24.0991V14.6239C132.227 10.9221 129.047 8.22634 124.741 8.22634C122.077 8.22634 119.858 9.09967 118.499 10.5039L120.652 12.6562C121.358 11.7526 122.758 11.1635 124.5 11.1635C127.115 11.1635 129.007 12.8132 129.007 15.0261V16.4746C126.029 16.7967 123.937 17.0783 122.689 17.3599C118.825 18.1645 116.531 20.2167 116.531 23.3149C116.531 26.3327 118.946 28.3444 122.649 28.3444C125.265 28.3444 127.397 27.7993 129.087 25.8277C129.45 27.5578 131.14 28.3444 133.273 28.3444C134.714 28.3444 135.981 27.7148 136.867 26.6714L134.873 24.6775ZM129.007 22.2598C127.599 24.1908 125.385 25.358 123.011 25.358C121.119 25.358 119.872 24.5219 119.872 22.9529C119.872 21.6652 120.878 20.7085 122.608 20.2257C123.937 19.8637 126.069 19.7117 129.007 19.3497V22.2598Z" fill="#F65E64"/>
												<path d="M81.8663 15.7485L74.6952 7.78826L72.3033 9.94235L79.7001 18.1531L81.8663 15.7485Z" fill="#038C73"/>
												<path d="M81.8664 15.7486L72.2466 26.4264L74.6385 28.5805L84.0307 18.151L81.8664 15.7486Z" fill="#F65E64"/>
											</g>
											<defs>
												<clipPath id="clip0">
												<rect width="179" height="33" fill="white"/>
												</clipPath>
											</defs>
										</svg>
									</a>
								</div>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse ml-3 " id="navbarSupportedContent">
								<ul class="navbar-nav mr-ultra">
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-lum-text" href="#">Кредиты<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-lum-text" href="#">Карты</a>
									</li>
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-lum-text" href="#">Вклады</a>
									</li>
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-lum-text" href="#">Ипотека</a>
									</li>
									<li class="nav-item dropdown active px-nav-menu">
										<a class="nav-link dropdown-toggle d-flex align-items-center nav-lum-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Услуги и сервисы
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="/Biometric/">Биометрическая идентификация</a>
											<a class="dropdown-item" href="/safe_v/">Аренда сейфовых ячеек</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Something else here</a>
										</div>
									</li>
								</ul>
							
							</div>
							<div class="nav-bank-link">
                <a href="https://ib.skbbank.ru/login" target="_blank">Интернет-банк</a>
              </div>
							<ul class="navbar-nav d-flex align-items-center">
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-rum-num" href="#">8 800 1000 600 <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active px-nav-menu">
										<a class="nav-link nav-rum-text" href="#">Офисы и банкоматы<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active px-nav-menu">

										<a class="nav-link nav-rum-text" href="#"> 
											<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.5937 0.281249L0.310625 5.00188V5.62313L4.59375 7.28125L6.25187 11.5644H6.87312L11.5937 0.281249Z" fill="#262626"/>
											</svg>
										Санкт-Петеpбуpг<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active px-2 searh">
										<a class="nav-link" href="#">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M19 19L14.65 14.65" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										<span class="sr-only">(current)</span></a>
									</li>
								</ul>
						</nav>
					</div>
				</div>
			</div>
			<hr class="hr-c">
			<div class="row mx-6 justify-content-around hid">
			<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 ml-3" >
					<span class="nav-span-gray">Частным лицам |</span><span class="nav-span-black"> Биометрическая идентификация</span>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4  mr-3 d-flex align-items-center">
							<ul class="navbar-nav mlu-auto">
								<li class="nav-item dropdown active px-nav-menu">
									<a class="nav-link dropdown-toggle d-flex align-items-center nav-span-2-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Услуги и сервисы
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
							</ul>
							<button type="button" class="btn-use">Интернет-банк</button>
				</div>
			</div>
		</header>
