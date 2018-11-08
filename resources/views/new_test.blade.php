<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TMPS00034</title>
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
                <li><a href="/">প্রথম পাতা</a></li>
                <li><a href="/about">আমাদের সম্পর্কে</a></li>

                <li> <a href="/member">সদস্যসমূহ</a>

                </li>
                <li> <a href="/gallery">গ্যালারি </a> </li>
                <li> <a href="/event">ইভেন্টসমূহ</a> </li>
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
                <h1>ইয়োগার ইতিহাস</h1>

            </div>
            <div class="content">
                <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
         </tr>
         @endforeach
      </table>
   
         <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='a' /></td>
                 <td>school:</td>
               <td><input type='text' name='b' /></td>



            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>








                </p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div><!---page-content--->

<div class="footer-wrapper">
    <div class="footer">
        <div class="panel marRight30">
            <div class="title">
                <h1>গুরুত্বপূর্ণ লিংকসমূহ </h1>

            </div>
            <div class="contnet">
                <ul>
                    <li><a href="http://www.bangabhaban.gov.bd/">রাষ্ট্রপতির কার্যালয়</a></li>
                    <li><a href="http://www.pmo.gov.bd/">প্রধানমন্ত্রীর কার্যালয়</a></li>
                    <li><a href="http://www.cabinet.gov.bd/">মন্ত্রিপরিষদ বিভাগ</a></li>
                    <li><a href="http://www.mopa.gov.bd/en">জনপ্রশাসন মন্ত্রণালয়</a></li>
                    <li><a href="http://www.forms.gov.bd/">বাংলাদেশের ফরম</a></li>
                </ul>
            </div>
        </div>
        <div class="panel marRight30">
            <div class="title">
                <h1>সহযোগী প্রতিষ্টানসমূহ </h1>
            </div>
            <div class="contnet">


                <ul>

                    <li><a href="http://www.moysports.gov.bd/">যুব ও ক্রিয়া মন্ত্রণালয়</a></li>
                    <li><a href="http://yoga.quantummethod.org.bd/">বাংলাদেশ কোয়ান্টাম ফাউন্ডেশন</a></li>
                    <li><a href="http://isabelafoundation.org/">ইসাবেলা ফাউন্ডেশন</a></li>
                </ul>



            </div>
        </div>

        <div class ="panel"> <div class="panel marRight30">
                <div class="title">
                    <h1>অন্য লিংকসমূহ  </h1>
                </div>
                <div class="contnet">
                    <ul>

                        <li><a href="https://www.facebook.com/worldyogafoundation/">ওয়ার্ল্ড ইয়োগা ফাউন্ডেশন</a></li>
                        <li><a href="http://www.internationalyogafederation.net/fiyorganizations.html">ইন্টারন্যাশনাল ইয়োগা ফাউন্ডেশন</a></li>
                    </ul>



                </div>
            </div>

            <div class="clear"></div>
        </div>
        <!---footer-wrapper--->
</body>
</html>
