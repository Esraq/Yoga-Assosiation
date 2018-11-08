<html>
<head>
    <title>Home page</title>
</head>


<body>

<fieldset>

    <legend>Edit Home page</legend>
    <form action = "/create" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        Enter your text:<br>
    <textarea NAME="name" Rows="25" COLS="90">
					</textarea> <br>
    <input type="submit" value="enter">
    </form>
    <br><br>

    <b>   <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            LOGOUT
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>                     </b>
</fieldset>


</body>

</html>
