<?php $iframe = "index.html"; ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">

        <style type="text/css">
            /*header{ border-bottom-style: solid; border-bottom-color: #35afd9;} */
            iframe{ frameborder: 0; align="center"; }
        </style>

    </head>

    <body data-ma-theme="black" >
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo hidden-sm-down">
                    <h1><a href="index.html">Vista Previa</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Messages

                                    <div class="actions">
                                        <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                    </div>
                                </div>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Notifications

                                    <div class="actions">
                                        <a href="#" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                                    </div>
                                </div>

                                <div class="listview__scroll scrollbar-inner">
                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="listview listview--hover">
                                <div class="listview__header">Tasks</div>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all tasks</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                    <span class="app-shortcuts__helper bg-red"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                    <span class="app-shortcuts__helper bg-blue"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                    <span class="app-shortcuts__helper bg-teal"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                    <span class="app-shortcuts__helper bg-blue-grey"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                    <span class="app-shortcuts__helper bg-orange"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                    <span class="app-shortcuts__helper bg-light-green"></span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="<?php echo $iframe;?>">
                            <i class="zmdi zmdi-fullscreen"></i>
                        </a>
                    </li>

                    <button title="Cancelar" data-toggle="tooltip" data-placement="left" class="btn btn-light btn--icon"><i class="zmdi zmdi-close"></i></button>
                    <button title="Guardar" data-toggle="tooltip" data-placement="left" class="btn btn-light btn--icon btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                </ul>
            </header>

            <aside class="sidebar sidebar--hidden">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li class="navigation__active"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                                <li><a href="top-navigation.html">Top Navigation</a></li>
                            </ul>
                        </li>

                        <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

                        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="html-table.html">HTML Table</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                            <ul>
                                <li><a href="colors.html">Colors</a></li>
                                <li><a href="css-animations.html">CSS Animations</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="listview.html">Listview</a></li>
                                <li><a href="toolbars.html">Toolbars</a></li>
                                <li><a href="cards.html">Cards</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                                <li><a href="jumbotron.html">Jumbotron</a></li>
                                <li><a href="navs.html">Navs</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="progress.html">Progress</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                                <li><a href="dropdowns.html">Dropdowns</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="tooltips.html">Tooltips</a></li>
                                <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                            <ul>
                                <li><a href="flot-charts.html">Flot</a></li>
                                <li><a href="other-charts.html">Other Charts</a></li>
                            </ul>
                        </li>

                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

                        <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                            <ul>
                                <li><a href="profile-about.html">Profile</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="groups.html">Groups</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="todo-lists.html">Todo Lists</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="login.html">Login & SignUp</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="empty.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <section class="content content--full" style="padding: 50px 0px 0;">

            

<script>

function calcIframeHeight() {
  var the_height=
    document.getElementById('iframecontent').contentWindow.
      document.body.scrollHeight;
  document.getElementById('iframecontent').height=
      the_height;
}

function onloadfunction(){
  // register handler for iframe load event
  if (document.getElementById("iframecontent").attachEvent)
     document.getElementById("iframecontent").attachEvent("onload", calcIframeHeight); // ie
  else if (document.getElementById("iframecontent").addEventListener)
     document.getElementById("iframecontent").addEventListener("load", calcIframeHeight, true); // Safari, Firefox
}

if (window.addEventListener)
   window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
   window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
   window.onload=onloadfunction
</script>   

                
<iframe src="<?php echo $iframe; ?>" 
    name="iframecontent" id="iframecontent" width="100%" height="100%" 
    scrolling="NO" frameborder="0" 
    onLoad="calcIframeHeight();window.scroll(0,0);"
>
</iframe>

            </section>
        </main>



        <!-- Javascript -->
        <!-- ../vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>


        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        
    </body>

</html>