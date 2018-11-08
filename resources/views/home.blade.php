<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>বাংলাদেশ ইয়োগা এসোসিয়েশন</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/superfish.css" media="screen">
    <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <script>

        // initialise plugins
        jQuery(function(){
            jQuery('#example').superfish({
                //useClick: true
            });
        });

    </script>
</head>

<body>

<div class="header-wrapper">
    <div class="wrapper">
        <div class="logo">
            <h1>বাংলাদেশ ইয়োগা এসোসিয়েশন</h1>
        </div>
        <div class="menu">
            <ul class="sf-menu" id="example">
                 <li> <a href="/home">প্রথম পাতা</a>

                  



        </li>
                <li><a href="/image-gallery">ইমেজ </a></li>

              <li><a href="/pdf-gallery">ইভেন্ট</a>

                </li>
                
                <li> <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                লগ আউট 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
 </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!---header-wrapper--->
<div class="clear"></div>
<div class="page-content">
    <div class="page">
        <div class="panel">
            <div class="title">
                <h1>অ্যাডমিন
প্যানেল </h1>

            </div>
            <div class="content">
                <center>

    <img src="images/event.jpg" height="200" width="900">
    <br><br>
    
</center>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div><!---page-content--->

<div class="footer-wrapper">
    <div class="footer">
        <div class="panel marRight30">
            <div class="title">
               

           
        </div>
        <!---footer-wrapper--->
</body>
</html>
