<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Implement CRUD for Images</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet"> 
    <link href="/css/animate.min.css" rel="stylesheet"> 
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
<body>
<nav class="navbar navbar-default navbar-fixed-top kepala">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
        <h1 class="judul">CRUD for Images</h1>
      </a>
    </div>
    <p class="navbar-text navbar-right kiri">
    <a href="{{ url('/image/create') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Image</a>
    </p>
  </div>
</nav>

            @yield('body')
         
   <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Training Laravel 2017: Task III</p>
                        <p>Designed by <a target="_blank" href="http://www.oligardan.blogspot.co.id">Rendy Permana</a></p>
                    </div>
                </div>
            </div>
        </div>
   </footer>
    <!--/#footer-->


   <script type="text/javascript" src="/js/jquery.js"></script>
   <script type="text/javascript" src="/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/js/lightbox.min.js"></script>
   <script type="text/javascript" src="/js/wow.min.js"></script>
   <script type="text/javascript" src="/js/audio.min.js"></script>
    <script type="text/javascript" src="/js/masonry.min.js"></script>
   <script type="text/javascript" src="/js/main.js"></script>    

   
</body>
</html>