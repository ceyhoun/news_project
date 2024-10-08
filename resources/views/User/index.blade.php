<!DOCTYPE html>
<html>

<head>
    <title>SybarMagazine</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <div class="box_wrapper">
            <header id="header">
                <div class="header_top">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span
                                        class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav custom_nav">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                    <li><a href="pages/category-archive.html">Archive</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="pages/404.html">404 Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="header_search">
                        <button id="searchIcon"><i class="fa fa-search"></i></button>
                        <div id="shide">
                            <div id="search-hide">
                                <form action="#">
                                    <input type="text" size="40" placeholder="Search here ...">
                                </form>
                                <button class="remove"><span><i class="fa fa-times"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="logo_area"><a class="logo" href="/">            <b><span>{{ config('app.name') }}</span></b>
                    </a></div>
                    @foreach ($advert as $item)
                        <div class="top_addarea"><a href="{{ $item->url }}"><img class="img-fluid"
                                    src="advert/{{ $item->image }}" alt="Reklam Resmi">
                            </a></div>
                    @endforeach
                </div>
            </header>
            <div class="latest_newsarea"> <span>Latest News</span>
                <ul id="ticker01" class="news_sticker">
                    <li><a href="#">My First News Item</a></li>
                    <li><a href="#">My Second News Item</a></li>
                    <li><a href="#">My Third News Item</a></li>
                    <li><a href="#">My Four News Item</a></li>
                    <li><a href="#">My Five News Item</a></li>
                    <li><a href="#">My Six News Item</a></li>
                    <li><a href="#">My Seven News Item</a></li>
                    <li><a href="#">My Eight News Item</a></li>
                    <li><a href="#">My Nine News Item</a></li>
                </ul>
            </div>
            <div class="thumbnail_slider_area">
                <div class="owl-carousel">
                    @foreach ($sliders as $slider)
                        <div class="signle_iteam"> <img src="{{ url($slider->image ?? 'yoxdur') }}"
                                style="width: 100%; max-width: 100%; height: 400px;" alt="{{ $slider->title }}">
                            <div class="sing_commentbox slider_comntbox">
                                <p><i class="fa fa-calendar"></i>{{ $slider->time ?? 'yoxdur' }}</p>
                                <a href="{{ $slider->id }}"><i
                                        class="fa fa-comments"></i>{{ $slider->comment ?? 'yoxdur' }}</a>
                            </div>
                            <a class="slider_tittle" href="{{ route('detail', $slider->id) }}">{{ $slider->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <section id="contentbody">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="left_bar">
                                @include('userpart/recent');
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Side Add</span></h2>
                                    <div class="singleleft_inner"> <a href="#"><img src="images/150x600.jpg"
                                                alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="middle_bar">
                                @if ($popularSliders && $popularSliders->count() > 0)
                                    <div class="featured_sliderarea">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @if ($popularSliders->count() > 1)
                                                    @foreach ($popularSliders as $slider)
                                                        <li data-target="#myCarousel"
                                                            data-slide-to="{{ $loop->index }}"
                                                            class="{{ $loop->first ? 'active' : '' }}"></li>
                                                    @endforeach
                                                @endif
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                @foreach ($popularSliders as $item)
                                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                                        <a href="{{ route('detail', $item->id) }}">
                                                            <img src="{{ url($item->image) }}" alt="">
                                                        </a>
                                                        <div class="carousel-caption">
                                                            <h1>
                                                                <a href="{{ route('detail', $item->id) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @if ($popularSliders->count() > 1)
                                                <a class="left left_slide" href="#myCarousel" role="button"
                                                    data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"
                                                        aria-hidden="true"></span>
                                                </a>
                                                <a class="right right_slide" href="#myCarousel" role="button"
                                                    data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"
                                                        aria-hidden="true"></span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endif

                                @foreach ($categories as $item)
                                <div class="single_category wow fadeInDown">
                                    <div class="category_title">
                                        <a href="{{route('detail', $item->formid)}}">{{ $item->catName }}</a>
                                    </div>
                                    <div class="single_category_inner">
                                        <ul class="catg_nav">
                                            <li class="news_item">
                                                <div class="catgimg_container">
                                                    <a class="catg1_img" href="{{route('detail', $item->formid)}}">
                                                        <img src="{{ url($item->formimage) ?? 'yoxdur' }}" alt="{{ $item->formTitle }}">
                                                    </a>
                                                </div>
                                                <a class="catg_title" href="{{route('detail', $item->formid)}}">{{ $item->formTitle }}</a>
                                                <div class="sing_commentbox">
                                                    <p><i class="fa fa-calendar"></i> {{ $item->formTime }}</p>
                                                    <a href="#"><i class="fa fa-comments"></i> 20 Comments</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="right_bar">
                                @include('userpart.popular')
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Side Ad</span></h2>
                                    <div class="singleleft_inner"> <a href="#"><img alt=""
                                                src="images/262x218.jpg"></a></div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <ul class="nav nav-tabs custom-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home"
                                                aria-controls="home" role="tab" data-toggle="tab">Most
                                                Popular</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile"
                                                role="tab" data-toggle="tab">Most Reader</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages"
                                                role="tab" data-toggle="tab">Recent Comment</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            @include('userpart/recent')
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <ul class="catg3_snav ppost_nav wow fadeInDown">
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="messages">
                                            <ul class="catg3_snav ppost_nav wow fadeInDown">
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media"> <a class="media-left" href="#"> <img
                                                                src="images/70x70.jpg" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title"
                                                                href="#"> Aliquam malesuada diam eget turpis
                                                                varius</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Blog Archive</span></h2>
                                    <div class="singleleft_inner">
                                        <div class="blog_archive">
                                            <form action="#">
                                                <select>
                                                    <option value="">Blog Archive</option>
                                                    <option value="">October(20)</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Labels</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="label_nav">
                                            <li><a href="#">Arts</a></li>
                                            <li><a href="#">Cinema</a></li>
                                            <li><a href="#">Comedy</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Tourism</a></li>
                                            <li><a href="#">Videos</a></li>
                                            <li><a href="#">Nature</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Links</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="link_nav">
                                            <li><a href="#">Blog Home</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Error Page</a></li>
                                            <li><a href="#">Wpfreeware</a></li>
                                            <li><a href="#">Facebook Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div class="footer_top">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_footer_top wow fadeInLeft">
                            <h2>Follow By Email</h2>
                            <div class="subscribe_area">
                                <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click
                                    subscribe"</p>
                                <form action="#">
                                    <div class="subscribe_mail">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input class="submit_btn" type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_footer_top wow fadeInLeft">
                            <h2>Popular Post</h2>
                            <ul class="catg3_snav ppost_nav">
                                <li>
                                    <div class="media"> <a class="media-left" href="pages/single_page.html"> <img
                                                src="images/70x70.jpg" alt=""> </a>
                                        <div class="media-body"> <a class="catg_title" href="pages/single_page.html">
                                                Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a class="media-left" href="pages/single_page.html"> <img
                                                src="images/70x70.jpg" alt=""> </a>
                                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam
                                                malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a class="media-left" href="#"> <img
                                                src="images/70x70.jpg" alt=""> </a>
                                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam
                                                malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_footer_top wow fadeInRight">
                            <h2>Labels</h2>
                            <ul class="footer_labels">
                                <li><a href="#">Comedy</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Cinema</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Tourism</a></li>
                                <li><a href="#">Videos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_footer_top wow fadeInRight">
                            <h2>Contact Form</h2>
                            <form action="#" class="contact_form">
                                <label>Name</label>
                                <input class="form-control" type="text">
                                <label>Email*</label>
                                <input class="form-control" type="email">
                                <label>Message*</label>
                                <textarea class="form-control" cols="30" rows="10"></textarea>
                                <input class="send_btn" type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="footer_bottom_left">
                        <p>Copyright &copy; 2045</p>
                    </div>
                    <div class="footer_bottom_right">
                        <ul>
                            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter"
                                    href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook"
                                    href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+"
                                    href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube"
                                    href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss"
                                    href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.li-scroller.1.0.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
