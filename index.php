<?php
include_once('rss-feed/autoloader.php');
require_once('rss-feed/autoloader.php');
// We'll process this feed with all of the default options.
$feed = new SimplePie();

// Set the feed to process.
$feed->set_feed_url('https://www.pathofexile.com/news/rss');

// Run SimplePie.
$feed->init();

// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/app/cache_files');
$feed->set_item_limit(5);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>poebase - your dashboard for path of exile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
      include('currency.php');
      include('simple_html_dom.php');
?>

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">poebase.xyz</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">poe.trade</a></li>
            <li><a href="#contact">poeprices.info</a></li>
            <li><a href="#about">pathofexile.com</a></li>
            <li><a href="#contact">wiki</a></li>
            <li><a href="#contact">reddit</a></li>
            <li><a href="#contact">poetools</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


      <div class="row">
      <div id="currency" class="col-lg-4">
        <table id=ratio-list>
          <tr>
            <th>Sell</th>
            <th>Ratio</th>
            <th>Buy</th>
          </tr>

          <tr>
            <td><a href="http://currency.poe.trade/search?league=Perandus&online=x&want=6&have=4"><?php echo $exalt?></a></td>
            <td class="ratio">
              <?php
                  $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=6&have=4');

                  $ratio = $html->find('.displayoffer-centered', 0);
                        echo $ratio->plaintext ;
              ?>
            </td>
            <td class="buy"><?php echo $chaos_last?></td>

          </tr>

          <tr>
            <td><?php echo $vaal?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=5&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 0);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chaos_last?></td>
          </tr>
          <tr>
            <td><?php echo $gcp?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=5&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 0);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chaos_last?></td>
          </tr>
          <tr>
            <td><?php echo $regal?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=14&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 0);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chaos_last?></td>
          </tr>
          <tr>
            <td><?php echo $divine?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=15&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 0);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chaos_last?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=2&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $fuse?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                  $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=1&have=4');

                  $ratio = $html->find('.displayoffer-centered' , 2);

                        echo $ratio->plaintext;
              ?>
            </td>
            <td class="buy"><?php echo $alt?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=7&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chrom?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=3&have=4');

                $ratio = $html->find('.displayoffer-centered' , 2);

                      echo $ratio->plaintext;
              ?>
            </td>
            <td class="buy"><?php echo $alch?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=11&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $scouring?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=13&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $regret?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=9&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $chance?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=10&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext ;
                ?>
            </td>
            <td class="buy"><?php echo $carto?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=8&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext ;
                ?>
            </td>
            <td class="buy"><?php echo $jeweller?></td>
          </tr>
          <tr>
            <td><?php echo $chaos?></td>
            <td class="ratio">
              <?php
                    $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=12&have=4');

                    $ratio = $html->find('.displayoffer-centered' , 2);

                          echo $ratio->plaintext;
                ?>
            </td>
            <td class="buy"><?php echo $blessed?></td>
          </tr>
        </table>

                </div>
                <div id="searchbar" class="col-lg-4">
                  <div class="row">
                    <div class="col-lg-2"><img src="http://hydra-media.cursecdn.com/pathofexile.gamepedia.com/b/bc/Wiki.png"></div>
                    <div class="col-lg-10">
                  <div id="searchbar" class="input-group input-group-lg">

                    <form class="input-group input-group-lg" action="http://pathofexile.gamepedia.com/index.php?search" target="_blank" name="searchbox"
  method="get" style="margin-left: 2em;" />
  <input type="hidden" name="title" value="Special:Search" />
  <input type="hidden" name="profile" value="default" />
<input placeholder="Search the wiki..." type="text" class="form-control" name="search" value="" />
<span class="input-group-btn">
    <button class="btn btn-default" type="submit" target="_blank" value="Search" name="fulltext">Search</button>
</span>
</form>
</div>
                  </div>
                </div>
<div id="poe-news">
  <?php if ($feed->error): ?>
  		<p><?php echo $feed->error; ?></p>
  		<?php endif; ?>

  		<h1>Official News from pathofexile.com</h1>

  		<?php foreach ($feed->get_items(0,3) as $item): ?>

  		<div class="chunk">

  			<?php /* Here, we'll use the $item->get_feed() method to gain access to the parent feed-level data for the specified item. */ ?>
  			<h4 class="title" style="background-image:url(<?php $feed = $item->get_feed(); ?>);"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>

  			<?php echo $item->get_content(); ?>

  			<p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>"><?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> | <?php echo $item->get_date('j M Y | g:i a T'); ?></p>

  		</div>

  		<?php endforeach; ?>
</div>


                </div>
                  <div class="col-lg-4">asd</div>

                </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
