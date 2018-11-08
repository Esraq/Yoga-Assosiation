<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>বাংলাদেশ ইয়োগা এসোসিয়েশন</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/superfish.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
    <style type="text/css">
        .gallery
        {
            display: inline-block;
            margin-top: 20px;
        }
        .close-icon{
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }
    </style>
</head>


<center>

    <img src="images/photo.jpg" height="200" width="900">

    <h1>সাম্প্রতিক কিছু অনুষ্ঠানের  ছবি </h1>


</center>
<div class="clear"></div>

<div class="page">


    <div class="content">
        <p>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif





            </form>


            <div class="row">
                <p class='list-group gallery'>


                @if($images->count())
                    @foreach($images as $image)
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                                <img class="img-responsive" alt="" src="/images/{{ $image->image }}"  />
                                <div class='text-center'>
                                    <small class='text-muted'>{{ $image->title }}</small>
                                </div> <!-- text-center / end -->
                            </a>

                        </div> <!-- col-6 / end -->
                        @endforeach
                        @endif
                        </p>

            </div>
    </div>
</div>
</div>
<div class="clear"></div>
</div><!---page-content--->

<br><br><br><br><br><br>

<center>
    <table width="350" height="100">

        <tr><td><h1><a href="/">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspপ্রথম পাতা&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>  </h1>></td>></tr>

    </table>
</center>


<div class="content">
    <center><p></p></center>
</div>
</div>
</div>
<div class="clear"></div>
</div><!---footer-wrapper--->
</body>
</html>
