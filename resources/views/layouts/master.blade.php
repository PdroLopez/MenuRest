<!DOCTYPE html>
<html lang="en">
<head>
  <base href=""> @include('layouts.meta') @include('layouts.css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
</head>
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
  <style>
    @media screen and (max-width: 1200px) {
      #nav-xl{
        display: none;
      }
      #kt_aside_tablet_and_mobile_toggle{
        display:block;
      }
    }
    @media screen and (min-width: 1200px) {

      #kt_aside_tablet_and_mobile_toggle{
        display:none;
      }
    }



    ul, ol {
				list-style:none;
			}

			.nav > li {
				float:left;
			}

			.nav li a {
				text-decoration:none;
				padding:10px 12px;
				display:block;
				margin-top: 20px;
			}

			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}

			.nav li:hover > ul {
				display:block;
				background-color: white;
				border-radius: 10px;
    			padding-bottom: 10px;
			}

			.nav li ul li {
				position:relative;
			}

			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
  </style>

  <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
    <a href="{{asset('/')}}">
      <img alt="Logo" src="{{asset('img/logomenurest.png')}}" class="logo-default max-h-40px" />
    </a>
    <div class="d-flex align-items-center">
      <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
        <span></span>
      </button>
    </div>
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      <div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
          <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
              <li class="ml-5">
                <div class="row">
                  <div class="col-12 col-sm-12">
                  @if (Auth::check())
                      <a href="{{asset('/home')}}" class="btn btn-light-primary font-weight-bold ml-5 mb-4">{{ Auth::user()->email }}</a>
                      <a class="btn btn-light-primary font-weight-bold ml-5 mb-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">{{ __('Cerrar Sesión') }}</a>
                  @else
                    <a href="{{asset('login')}}" class="btn btn-light-primary font-weight-bold ml-5 mb-4">Ingresar</a>
                  @endif
                  <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  </div>
                  <div class="col-6">
                  </div>
                </div>
              </li>

                <li class="menu-item" aria-haspopup="true">
                  <a href="{{asset('/')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                        </g>
                      </svg>
                    </span>
                    <span class="menu-text">Inicio</span>
                  </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                  <a href="{{asset('')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                        </g>
                      </svg>
                    </span>
                    <span class="menu-text">Restaurantes</span>
                  </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                  <a href="{{asset('')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                        </g>
                      </svg>
                    </span>
                    <span class="menu-text">Ingreso</span>
                  </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                  <a href="{{asset('contacto')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                        </g>
                      </svg>
                    </span>
                    <span class="menu-text">Contacto</span>
                  </a>
                </li>
                {{-- SUBMENU --}}
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
					<a href="javascript:;" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24" />
                                  <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                  <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                </g>
                              </svg>
						</span>
						<span class="menu-text">Mantenedores</span>
						<i class="menu-arrow"></i>
					</a>

					<div class="menu-submenu" style="" kt-hidden-height="440">
						<i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item menu-item-parent" aria-haspopup="true">
								<span class="menu-link">
									<span class="menu-text">Mantenedores</span>
								</span>
							</li>


							<li class="menu-item" aria-haspopup="true">
								<a href="{{asset('home/local')}}" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Locales</span>
								</a>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a href="{{asset('home/menu')}}" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Menus</span>
								</a>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a href="{{asset('home/producto')}}" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Productos</span>
								</a>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a href="{{asset('home/sucursal')}}" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Sucursal</span>
								</a>
							</li>
                            <li class="menu-item" aria-haspopup="true">
								<a href="{{asset('home/categoria')}}" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Categoria</span>
								</a>
							</li>

						</ul>
					</div>
				</li>
                {{-- ENDSUBMENU --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container d-flex align-items-stretch justify-content-between">
            <div class="d-none d-lg-flex align-items-center mr-3">
              <button class="btn btn-icon aside-toggle ml-n3 mr-10 d-none d-sm-flex d-md-flex d-lg-flex d-xl-none" id="kt_aside_desktop_toggle">
                <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                      <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                      <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                    </g>
                  </svg>
                </span>
              </button>
              <a href="{{asset('/')}}">
                <img alt="Logo" src="{{asset('img/logomenurest.png')}}" class="logo-sticky max-h-55px" />
              </a>
              <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">



                <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                  <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
                </div>
              </div>
            </div>
            <div id="nav-xl" class="nav nav-dark order-1 order-md-2">
              	<a href="{{asset('/')}}" class="nav-link pr-3 pl-0">Inicio</a>
              	<a href="{{asset('')}}" class="nav-link pr-3 pl-0">Restaurantes</a>
              	{{-- <a href="{{asset('')}}" class="nav-link pr-3 pl-0">Ingreso</a> --}}
              	<a href="{{asset('contacto')}}" class="nav-link pr-3 pl-0">Contactos</a>
                @if (Auth::check())
                    <li>
                        <a class="nav-link pr-3 pl-0" href="">Mantenedores
                            <span class="svg-icon svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) "/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <ul>
                            {{-- <li><a class="nav-link p-0" href="{{asset('private/superadmin/usuarios')}}">Usuarios</a></li> --}}
                            {{-- <li><a class="nav-link p-0" href="{{asset('private/superadmin/rol')}}">Rol</a></li> --}}
                            {{-- <li><a class="nav-link p-0" href="{{asset('private/superadmin/estado')}}">Estado</a></li> --}}
                            <li><a class="nav-link p-0" href="{{asset('home/local')}}">Locales</a></li>
                            <li><a class="nav-link p-0" href="{{asset('home/menu')}}">Menus</a></li>
                            <li><a class="nav-link p-0" href="{{asset('home/producto')}}">Productos</a></li>
                            <li><a class="nav-link p-0" href="{{asset('home/sucursal')}}">Sucursal</a></li>
                            <li><a class="nav-link p-0" href="{{asset('home/categoria')}}">Categoria</a></li>
                        </ul>
                    </li>
                @endif

              @if (Auth::check())
                <li>
                    <a class="nav-link pr-3 pl-0 btn btn-light font-weight-bold ml-5 mb-4" href="/home">{{ Auth::user()->email }}
                        <span class="svg-icon svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) "/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <ul>

                        <li><a class="nav-link p-0" style="height: 50%; margin-top: 20px; margin-left: 20px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">{{ __('Cerrar Sesión') }}</a></li>


                    </ul>
                </li>
                {{-- <a href="{{asset('/home')}}" class="btn btn-light font-weight-bold ml-5 mb-4" style="height: 50%; margin-top: 20px; margin-left: 20px;">{{ Auth::user()->email }}</a> --}}

                {{-- <a class="btn btn-primary font-weight-bold ml-5 mb-4" style="height: 50%; margin-top: 20px; margin-left: 20px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">{{ __('Cerrar Sesión') }}</a> --}}
              @else
              <a href="{{asset('login')}}" class="btn btn-danger nav-link px-3 pl-0" style="height: 50%; margin-top: 20px; margin-left: 20px;">Ingresar</a>
              @endif
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Entry-->
          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              @include('layouts.notificacion')
              @yield('content')
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="padding: 0px 0 !important;">
                      <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static">
                          <!--begin::Main-->
                          <div class="d-flex flex-column flex-root">

                          </div>
                          <!--end::Main-->
                          <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
                          <!--begin::Global Config(global config for global JS scripts)-->
                          <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
                          <!--end::Global Config-->
                          <!--begin::Global Theme Bundle(used by all pages)-->
                          <script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
                          <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
                          <script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
                          <!--end::Global Theme Bundle-->

                        <!--end::Body-->
            <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
          </body>
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        @include('layouts.footer')
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>




  @include('layouts.js')
</body>

</html>
