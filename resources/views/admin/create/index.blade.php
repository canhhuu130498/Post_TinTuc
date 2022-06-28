<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <div class="container header" >
            <div class="header_top">
                <a href="/home" class="logo">Medium</a>
                <div class="header_title">
                    <a href="#">Our story</a>
                    <a href="#">Membership</a>
                    <a href="/create">Write</a>
                    <a href="#">Sign in</a>
                    <a href=""><button type="button" class="header_top_button">Get started</button></a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="header_bottom">
                <h1>Stay curious.</h1>
                <p>Discover stories, thinking, and expertise<br>fromm writers on any topic.</p>
                <button type="button" class="header_bottom_button">Start reading</button>
            </div>
        </div>
    </header>

    <main>
        <div class="insert">
            <form class="insert_form" method="post" action="/admin/home/store">
                @method('post')
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <p>
                    <label for="title">Title</label><br>
                    <input type="text" name="title" value="" size="42">
                </p>
                <p>
                    <label for="content">Content</label><br>
                    <textarea type ="test" name="content" rows="10" cols="40"></textarea>
                </p>
                <p>
                    <label for="author">Author</label><br>
                    <input type="text" name="author" value="" size="42">
                </p>
                <p>
                    <button type="submit">Create</button>
                </p>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright © Medium</p>
    </footer>
</body>
</html>

