<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>



	<title>blog </title>
</head>
<body>
	


     <div class="container">
       <div class="col-lg-12 col-md-12">
         <div class="row">


	           <?$menu->render(['template'=>'blog','model'=>'category','view'=>'topMenu']);?>

         </div>
       </div>
     </div> 


     <div class="container">
     	<div class="col-md-12">
     		
     			
     					<?=$view_page?>
     	  
          <form action=""></form>
        <textarea name="content" >Next, use our Get Started docs to setup Tiny!</textarea>
     	</div>
     </div>	
</body>
</html>


<!DOCTYPE HTML>
<!--
  Future Imperfect by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Future Imperfect by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src=<?=URL?>/templates/blog/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?=URL?>/templates/blog/assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href=<?=URL?>/templates/blog/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href=<?=URL?>/templates/blog/assets/css/ie8.css" /><![endif]-->
  </head>
  <body>

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <h1><a href="#">Blog</a></h1>
            <nav class="main">
              <ul>
                <li class="menu">
                  <a class="fa-user" href="#menu">Menu</a>
                </li>
              </ul>
            </nav>
          </header>

        <!-- Menu -->
          <section id="menu">

            <!-- Actions -->
              <section>
                <ul class="actions vertical">
                  <li><h3>Login</h3></li>
                  <li>
                    <form action="?" method="post">
                      <input type="text" name="neme" placeholder="Username"><br>
                      <input type="password" name="neme" placeholder="Password"><br>
                      <input type="submit" class="button big fit" value="Log In">
                    </form>
                  </li>

                  <li><h3>Registration</h3></li>
                  <li>
                    <form action="?" method="post">
                      <input type="text" name="neme" placeholder="Username"><br>
                      <input type="password" name="neme" placeholder="Password"><br>
                      <input type="file" name="file"><br><br>
                      <input type="submit" class="button big fit" value="Sign up">
                    </form>
                  </li>
                </ul>
              </section>

          </section>

        <!-- Main -->
          <div id="main">

            <!-- Post -->
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="#">Magna sed adipiscing</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-11-01">1 ???????????? 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                  </div>
                </header>
                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <footer>
                  <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>

            <!-- Post -->
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="#">Ultricies sed magna euismod enim vitae gravida</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-10-25">1 ???????????? 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                  </div>
                </header>
                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
                <footer>
                  <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#" class="icon fa-heart liked">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>

            <!-- Post -->
              <article class="post">
                <header>
                  <div class="title">
                    <h2><a href="#">Euismod et accumsan</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                  </div>
                  <div class="meta">
                    <time class="published" datetime="2015-10-22">1 ???????????? 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                  </div>
                </header>
                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
                <footer>
                  <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                  </ul>
                  <ul class="stats">
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                  </ul>
                </footer>
              </article>


            <!-- Pagination -->
              <ul class="actions pagination">
                <li><a href="" class="disabled button big previous">Previous Page</a></li>
                <li><a href="#" class="button big next">Next Page</a></li>
              </ul>

          </div>

        <!-- Sidebar -->
          <section id="sidebar">

            <!-- Intro -->
              <section id="intro">
                <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
                <header>
                  <h2>Blog</h2>
                  <p>Be popular with us</p>
                </header>
              </section>

            <!-- Mini Posts -->
              <section>
                <h3>Popular posts</h3>
                <div class="mini-posts">

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                        <time class="published" datetime="2015-10-20">1 ???????????? 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                      </header>
                      <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="#">Rutrum neque accumsan</a></h3>
                        <time class="published" datetime="2015-10-19">1 ???????????? 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                      </header>
                      <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="#">Odio congue mattis</a></h3>
                        <time class="published" datetime="2015-10-18">1 ???????????? 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                      </header>
                      <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="#">Enim nisl veroeros</a></h3>
                        <time class="published" datetime="2015-10-17">1 ???????????? 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                      </header>
                      <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    </article>

                </div>
              </section>

            <!-- Posts List -->
              <section>

                <h3>Rating bloggers</h3>

                <ul class="posts">
                  <li>
                    <article>
                      <header>
                        <h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
                        <span class="published">30 likes in 10 posts</span>
                      </header>
                      <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
                        <span class="published">30 likes in 10 posts</span>
                      </header>
                      <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
                        <span class="published">20 likes in 5 posts</span>
                      </header>
                      <a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
                        <span class="published">10 likes in 15 posts</span>
                      </header>
                      <a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
                        <span class="published">1 likes in 1 post</span>
                      </header>
                      <a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
                    </article>
                  </li>
                </ul>
              </section>

            <!-- Footer -->
              <section id="footer">
                <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
              </section>

          </section>

      </div>

    <!-- Scripts -->
      <script src="<?=URL?>/templates/blog/assets/js/jquery.min.js"></script>
      <script src="<?=URL?>/templates/blog/assets/js/skel.min.js"></script>
      <script src="<?=URL?>/templates/blog/assets/js/util.js"></script>
      <!--[if lte IE 8]><script src=<?=URL?>/templates/blog/assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="<?=URL?>/templates/blog/assets/js/main.js"></script>

  </body>
</html>