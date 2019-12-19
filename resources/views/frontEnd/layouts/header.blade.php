<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 010 010010</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@nodomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                日本
                                <span class="caret"></span>
                            </button>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul> -->
                            <!-- <select class="custom-select usa btn">
                                <option>Canada</option>
                                <option>UK</option>
                            </select>
                            <span class="caret"></span> -->
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                ¥
                                <span class="caret"></span>
                            </button>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>カート</a></li>
                            <!-- <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i>カート</a></li> -->
                            @if(Auth::check())
                            <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i>マイアカウント</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> ログアウト </a>
                            </li>
                            @else
                            <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> ログイン</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">ショップ<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">製品</a></li>
                                    <li><a href="{{url('/myaccount')}}">アカウント</a></li>
                                    <li><a href="#">カート</a></li>
                                    <!-- <li><a href="{{url('/viewcart')}}">カート</a></li> -->
                                </ul>
                            </li>
                            <li><a href="#">お問い合わせ</a></li>
                            <!-- <li><a href="#" target="_blank">お問い合わせ</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="商品名を入力してください" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->