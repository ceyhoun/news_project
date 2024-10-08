<!DOCTYPE html>
<html>
<head>
<title>SybarMagazine | Pages | Single Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
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
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li><a href="category-archive.html">Archive</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="404.html">404 Page</a></li>
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
        <div class="logo_area"><a class="logo" href="#"><b>S</b>ybarMagazine <span>A Pro Magazine Theme</span></a></div>
        <div class="top_addarea"><a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a></div>
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
    <section id="contentbody">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="row">
            <div class="left_bar">

                @include('userpart/recent')
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Add</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="../images/150x600.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
          <div class="row">
            <div class="middle_bar">
              <div class="single_post_area">
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i>Home<i class="fa fa-angle-right"></i></a></li>
                  <li><a href="#">Category<i class="fa fa-angle-right"></i></a></li>
                  <li class="active">Aliquam malesuada diam eget turpis varius</li>
                </ol>

                <h2 class="post_title wow ">{{ $news->title }}</h2>
            <a href="#" class="author_name">
                <i class="fa fa-user"></i>{{$news->authorsname ?? 'Yoxdur'}}</a>
            <a href="#" class="post_date">
                <i class="fa fa-clock-o"></i>{{$news->date ?? 'Yoxdur'}}</a>
                <a href="" class="post_date">
                    <i class="fa fa-eye" aria-hidden="true"></i>{{$news->view ?? 'Yoxdur'}}</a>

            <div class="single_post_content">
                <p>{{ $news->content }}</p>
                    <img class="img-center" src="{{ url($news->image) }}" alt="{{ $news->title }}">
                <p>{{ $news->content }}</p>
            </div>

                <div class="post_footer">
                  <ul class="post_pager">
                    @if ($btnPrev)
                    <li class="previous wow fadeInLeftBig">
                        <a href="{{$btnPrev->id}}">
                      <p><i class="fa fa-hand-o-left"></i><strong>Previous</strong></p>
                      <span>The best of Sony in a compact waterproof smartphone</span>
                    </a></li>
                    @endif

                    @if ($btnNext)
                    <li class="next wow fadeInRightBig">
                        <a href="{{$btnNext->id}}">
                        <p><i class="fa fa-hand-o-right"></i><strong>Next</strong></p>
                        <span>Proin vel arcu sed nibh faucibus porta non et nibh</span>
                    </a></li>
                    @endif

                  </ul>
                </div>
                <div class="social_area wow fadeInLeft">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                  </ul>
                </div>
                <div class="related_post">
                    <h2 class="wow fadeInLeftBig">Bəyənə biləcəyiniz Əlaqəli Yazılar <i class="fa fa-thumbs-o-up"></i></h2>
                    @foreach ($lookalikes as $item)
                    <div class="row ">
                        <div class="col-6 recentpost_nav relatedpost_nav wow fadeInDown animated">
                            <a href="{{$item->id}}">
                                <img alt="" src="{{ url($item->image) }}" width="100" height="100">
                            </a>
                            <a href="{{$item->id}}" class="recent_title">{{ $item->title }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="row">
            <div class="right_bar">
                @include('userpart/popular')
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Ad</span></h2>
                <div class="singleleft_inner"> <a href="#"><img alt="" src="../images/262x218.jpg"></a></div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most Popular</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Reader</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Recent Comment</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home">
                    @include('userpart/recent')
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="profile">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="messages">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
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
              <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click subscribe"</p>
              <form action="#">
                <div class="subscribe_mail">
                  <input class="form-control" type="email" placeholder="Email Address">
                  <i class="fa fa-envelope"></i></div>
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
                <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="../images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
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
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss" href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery.li-scroller.1.0.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
