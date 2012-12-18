<!DOCTYPE html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <!--<link rel="shortcut icon" href="/favicon.ico" />-->
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="container">
          <div id="header">
              <div class="content">
                  <h1>
                      <a href="/job">Job</a>
                  </h1>
                  <div id="sub_header">
                      <div class="post">
                          <h2>Ask for people</h2>
                          <div>
                              <a class="btn btn-primary" href="/job/new">Add Job</a>
                          </div>
                      </div>
                      <div class="search-query">
                          <h2>Ask for a job</h2>
                          <form action="" method="get">
                              <input type="text" name="keywords" id="search_keywords" />
                              <input type="submit" value="search" />
                              <div class="help">Enter some keywords (city, country, position, ...)</div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          
          <div id="content">
              <?php if ($sf_user->hasFlash('notice')): ?>
              <div class="flash_notice"><?php echo $sf_user->getFlash('notice')?></div>
              <?php endif; ?>
              <?php if ($sf_user->hasFlash('error')): ?>
              <div class="flash_error"><?php echo $sf_user->getFlash('error')?></div>
              <?php endif; ?>
              <div class="content"><?php echo $sf_content ?></div>
          </div>
          <div id="footer">
              <div class="content">
                  <span class="symfony">powered by Symfony 1.4</span>
                  <ul class="inline">
                      <li><a href="/about">About Joboard</a></li>
                      <li class="feed"><a href="/feed">Full feed</a></li>
                      <li><a href="/api">Joboard API</a></li>
                      <li class="last"><a href="">Affiliates</a></li>
                  </ul>
              </div>
          </div>
      </div>    
  </body>
</html>
