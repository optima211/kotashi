<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<base href=".">
    <title>Kotashi - приют для кошек</title>
    <link href="#" rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
    <!-- подключение CSS файла Fancybox -->
   <link rel="stylesheet" href="./css/jquery.fancybox.css" type="text/css" media="screen">

    <!-- Custom CSS -->
    <link href="./css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="./css/css" rel="stylesheet" type="text/css">
    <link href="./css/css(1)" rel="stylesheet">
    <link href="./css/css(2)" rel="stylesheet">
			<!-- !!!!!!!<link rel="stylesheet" type="text/css" href="./css/modal-contact-form.css" /> -->
   
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script src="/templates/<?php// echo $this->template ?>/facebox/facebox.js"></script>
<link href="/templates/<?php// echo $this->template ?>/facebox/facebox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    jQuery(document).ready(function(jQuery) {
      jQuery('a[rel*=facebox]').facebox({
      })
    })
</script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?

include_once('config.inc.php');
include_once('Database.php');

$platform = new db();
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['info']))
{
$name = $_POST['name'];
$phone = $_POST['phone'];
$info = $_POST['info'];
$cat = $_GET['cat'];
$rows = $platform->create("'','{$cat}','{$name}','{$phone}','{$info}'");
//echo "Ваш заказ принят";?>
<script>
//var ispage = confirm("Ваш заказ принят");
alert("Ваш заказ принят");
</script>
<?}
?>


    

<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top logo" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">МЕНЮ</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-img" href="#"><img class="img-circle img-thumbnail img-responsive" src="./img/logo.jpg" width="100" height="100" alt="">
                </a><ul class="nav navbar-nav navbar-left"><a class="navbar-brand logo-img" href="#">
                <h1>Kotashi</h1>
                <h2>приют для кошек</h2></a>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><h4>о нас</h4></a>
                    </li>
                    <li>
                        <a href="#"><h4>помощь</h4></a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4>кошки<b class="caret"></b></h4></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><h4>котята</h4></a>
                            </li>
                            <li>
                                <a href="#"><h4>взрослые</h4></a>
                            </li>
                            <li>
                                <a href="#"><h4>старички</h4></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><h4>собаки</h4></a>
                    </li>
                    <li>
                        <a href="#"><h4>Нашли дом</h4></a>
                    </li>
                    <li>
                        <a href="#"><h4>человек и кошка</h4></a>
                    </li>
                   
                    <li>
                        <a href="#"><h4>наши друзья</h4></a>
                    </li>
                            
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <br><br><br><br> 
<!-- Button trigger modal -->

<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Заказ</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert"><strong>Котик Том</strong><br />Торопитесь! Не пропустите!!<br />Эксклюзивный экземпляр - маленькая пума!<br>Серьезный взгляд, стройное, мускулистое тело и нежное, ранимое сердечко. Это милое создание зовут Малинка. И да, Малинка ищет дом и заботливых хозяев, которые смогут по достоинству оценить этот маленький энерджайзер. Малинка всегда в движении. Охотится на искусственных мышей, гоняет мячики. А иногда отдыхает в забавных позах: "Любуйтесь, как я хороша". Целых две минуты. А потом снова на охоту.&nbsp;<br>Малинка пристраивается в семью единственной кошкой.&nbsp;<br>Девочке 7 месяцев.</div>
        <form action="asort.php?cat=3" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Имя:</label>
            <input type="text" class="form-control" name="name" placeholder="Иван Иванов">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Номер телефона:</label>
            <input type="text" name="phone" class="form-control" placeholder="+7 (999) 999 9999" />
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Пожелания:</label>
            <textarea class="form-control" name="info" placeholder="Ваши пожелания.."></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
<input type="submit" class="btn btn-primary" value="Заказать">
</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal3 -->


<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Заказ</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert"><strong>Котик Барсик</strong><br />Мальчик. Кастрирован. Был диким. На адаптации. Игручий и мурчучий.
Очаровательные подросточки ИЩУТ ДОМ! 
Выкормленные и спасенные малыши выросли и теперь готовы обрести своим мамопап.))) Ручные, ласковые, здоровые, приучены к лотку и сухому корму! 
Успейте забрать домой себе ласковое чудо!</div>
        <form action="asort.php?cat=2" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Имя:</label>
            <input type="text" class="form-control" name="name" placeholder="Иван Иванов">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Номер телефона:</label>
            <input type="text" name="phone" class="form-control" placeholder="+7 (999) 999 9999" />
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Пожелания:</label>
            <textarea class="form-control" name="info" placeholder="Ваши пожелания.."></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
        <input type="submit" class="btn btn-primary" value="Заказать">
</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Заказ</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert"><strong>Котик Лив</strong><br />Всем привет, я маленькая&nbsp;Лив!<br>Мои братики уже нашли свои самые добрые ручки, а я все еще не могу найти свой дом...<br>Может быть, я слишком испуганная на фотографиях? Или мой окрас слишком обычный? Приглядитесь ко мне, пожалуйста...</div>
        <form action="asort.php?cat=1" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Имя:</label>
            <input type="text" class="form-control" name="name" placeholder="Иван Иванов">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Номер телефона:</label>
            <input type="text" name="phone" class="form-control" placeholder="+7 (999) 999 9999" />
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Пожелания:</label>
            <textarea class="form-control" name="info" placeholder="Ваши пожелания.."></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
        <input type="submit" class="btn btn-primary" value="Заказать">
</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="container">
   <div class="row">
      
      <div class="col-lg-11 col-lg-offset-1"> 
   
<ul class="breadcrumb"><li><a href="#">Главная</a></li>
<li class="active">Котята</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12"> 
     
<h2 class="upper">Котята</h2>
<hr>




<div id="897061acae4878988cdc752665e07dfede081a1e" class="ajax-snippet"><div class="row">
	        <div class="col-md-4">
	             <img class="img-responsive img-thumbnail" src="./img/liv1.jpg">
	         </div>        
	        <div class="row col-md-8">        
	        <p></p><p><span style="line-height: 1.5em;">Всем привет, я маленькая&nbsp;Лив!<br>Мои братики уже нашли свои самые добрые ручки, а я все еще не могу найти свой дом...<br>Может быть, я слишком испуганная на фотографиях? Или мой окрас слишком обычный? Приглядитесь ко мне, пожалуйста...</span></p>

			            <h4 class="panel-title">
              <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  data-parent="#accordion" class="btn btn-primary" href="#">
                ЗАКАЗАТЬ
              </a>
            </h4>
			
<div class="yashare-auto-init" data-yasharel10n="ru" data-yasharetype="small" data-yasharequickservices="#" data-yasharetheme="counter" data-yasharelink="#" data-yasharetitle="Котята" data-yasharedescription="" data-yashareimage="#">
</div>
	   </div>
	 </div>
	 <br>
	 <hr>
	 <br>
<div class="row">
	        <div class="col-md-4">
	             <img class="img-responsive img-thumbnail" src="./img/kotenok-podrostok31.jpg">
	         </div>        
	        <div class="row col-md-8">        
	        <p></p><p>Мальчик. Кастрирован. Был диким. На адаптации. Игручий и мурчучий.</p>
<div><span style="font-family: -apple-system, BlinkMacSystemFont, Roboto, &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, sans-serif;"><br></span>
<div>Очаровательные подросточки ИЩУТ ДОМ!&nbsp;<br>Выкормленные и спасенные малыши выросли и теперь готовы обрести своим мамопап.))) Ручные, ласковые, здоровые, приучены к лотку и сухому корму!&nbsp;<br>Успейте забрать домой себе ласковое чудо!</div>
</div><p></p>
	                    <h4 class="panel-title">
              <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2"  data-parent="#accordion" class="btn btn-primary" href="#">
                ЗАКАЗАТЬ
              </a>
            </h4>
<div class="yashare-auto-init" data-yasharel10n="ru" data-yasharetype="small" data-yasharequickservices="#" data-yasharetheme="counter" data-yasharelink="#" data-yasharetitle="Котята" data-yasharedescription="" data-yashareimage="#">
</div>
	   </div>
	 </div>
	 <br>
	 <hr>
	 <br>
<div class="row">
	        <div class="col-md-4">
	             <img class="img-responsive img-thumbnail" src="./img/malinka111.jpg">
	         </div>        
	        <div class="row col-md-8">        
	        <p></p><p>Торопитесь! Не пропустите!!<br>Эксклюзивный экземпляр - маленькая пума!<br>Серьезный взгляд, стройное, мускулистое тело и нежное, ранимое сердечко. Это милое создание зовут Малинка. И да, Малинка ищет дом и заботливых хозяев, которые смогут по достоинству оценить этот маленький энерджайзер. Малинка всегда в движении. Охотится на искусственных мышей, гоняет мячики. А иногда отдыхает в забавных позах: "Любуйтесь, как я хороша". Целых две минуты. А потом снова на охоту.&nbsp;<br>Малинка пристраивается в семью единственной кошкой.&nbsp;<br>Девочке 7 месяцев.<br></p><p></p>
            <h4 class="panel-title">
<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3"  data-parent="#accordion" class="btn btn-primary" href="#">
                ЗАКАЗАТЬ
              </a>
            </h4>
</div>
	   </div>
	 </div>
	 <br>
	 <hr>
	 <br></div>

<div class="pagin 897061acae4878988cdc752665e07dfede081a1e" id="pagin"><div class="pagination"><ul class="pagination"><li class="control"><a href="#" data-pagin="page" id="next">»</a></li></ul></div></div>

<!-- totop -->
<div class="col-md-1 col-md-offset-11 col-sm-2 col-sm-offset-10 col-xs-5 col-xs-offset-7">
<div id="scroller"></div>
</div>
</div>
</div>
</div> 
 <!-- jQuery -->
   
    <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script src="./js/jquery-1.11.2.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<script>
$(function() {
    var accordion = function(){
    var currentPanel = $('#accordion .panel-collapse.in');
    var idCurrentPanel = currentPanel.attr('id');
    var currentHref;
    if (idCurrentPanel) {
      currentHref = '#'+idCurrentPanel;
    }
    
    return function(myHref) {
     var newPanel = $('#accordion ' + myHref);
     var idNewPanel = newPanel.attr('id');
      if(idCurrentPanel!=idNewPanel) {
      if (currentPanel) {
          currentPanel.removeClass('in');
        }
        newPanel.addClass('in');
        currentHref = myHref;
        currentPanel = newPanel;
        idCurrentPanel = idNewPanel;
      }
      else {
        currentPanel.toggleClass('in');
      }
    };
  };
  
  var accrdn = accordion();

  $('#accordion a[data-toggle="collapse"]').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    accrdn($(this).attr('href'));
  });

});
</script>

<script type="text/javascript" src="./js/share.js" charset="utf-8">
</script>

<script type="text/javascript" src="./js/openapi.js"></script>

<!---тренируем скролл--->
<script src="./js/jquery.endless-scroll-1.3.js"></script>
<script src="./js/ajaxscroll.js"></script>
<script src="./js/hash.js"></script>

<!---totop--->
<script>
$(document).ready(function(){   
			//fade in/out based on scrollTop value
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#scroller').fadeIn();
				} else {
					$('#scroller').fadeOut();
				}
			});
		 
			// scroll body to 0px on click
			$('#scroller').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});
</script>




    
<!-- Footer -->
        <footer>
             <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-sm-3">
                       <a href="#"><img class="img-circle img-thumbnail img-responsive" src="./img/logo.jpg" width="150" height="150" alt=""></a>
                  </div>
                <div class="col-lg-3 col-sm-3">
                    <p> <a href="#">Kotashi</a> &nbsp;©&nbsp;2016</p>
                    <p>Novosibirsk</p>
                    <p>+7(800) 555-35-35</p>
                    <p>Kotashi.ru</p>
                    
                <ul class="list-inline socials">
                    <li class="soc-link"><a href="https://vk.com/nsk_kot" target="_blank"><img class="img-thumbnail img-responsive" src="./img/vk.png" alt=""></a></li>
                    <li class="soc-link"><a href="#" target="_blank"><img class="img-thumbnail img-responsive" src="./img/fb.png" alt=""></a></li>
                    <li class="soc-link"><a href="#" target="_blank"><img class="img-thumbnail img-responsive" src="./img/ins.png" alt=""></a></li>
                </ul>
                    
                </div>
                
                <div class="col-lg-3 col-sm-3 col-xs-5">
                 <ul>
                    <li>
                        <a href="#">
                          <p>О нас</p>
                        </a>
                    </li>
                    <li>
                         <a href="#">
                             <p>Помощь</p></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">КОШКИ<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">котята</a>
                            </li>
                            <li>
                                <a href="#">взрослые</a>
                            </li>
                            <li>
                                <a href="#">старички</a>
                            </li>
                        </ul>
                    </li>
                </ul>
              </div>
              
            <div class="col-lg-3 col-sm-3 col-xs-7">
                <ul>
                    <li>
                        <a href="#">
                           <p>Собаки</p>
                        </a>
                    </li>
                   
                     <li>
                        <a href="#"><p>человек и кошка</p></a>
                    </li>
                            
                    <li>
                        <a href="#">
                           <p>Наши друзья</p>
                        </a>
                    </li>
                </ul>
                </div>
             </div>
           </div>
           
             <!--<p><small>
				total time: 0.0350 s<br/>
				query time: 0.0004 s<br/>
				queries: 3
			</small></p>-->
           
        </footer>
        
        <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38147690 = new Ya.Metrika({
                    id:38147690,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/38147690" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
<!-- /Yandex.Metrika counter -->
        <a href="#" data-toggle="modal">
         <img class="img-responsive" style="margin-top: -165px;
    float: right;" src="./img/cat-footer.png" alt="">
    </a>
    <!-- Modal -->
<div class="modal" id="myModal-fin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
		  <center><h3 class="modal-title" id="myModalLabel">Финансовые отчеты</h3></center>
      </div>
      <div class="modal-body">
		  тест

</div>
      
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>





    
<script type="text/javascript">$(document).ready(function() {var spinner = $(this).parent().find(".as_spinner");$.post("#", {as_action: "897061acae4878988cdc752665e07dfede081a1e"}, function(response) {if (typeof response.output !== "undefined") {$("#897061acae4878988cdc752665e07dfede081a1e").html(response.output);spinner.remove();$(document).trigger("as_complete", response);}}, "json");});</script>


<!--<div id="login-modal" style="display:none;">
    <jdoc:include type="modules" name="login" style="none" />
</div>-->
		<!--<div id="envelope" class="envelope">
			<a class="close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display='none';document.getElementById('fade').style.display='none'"></a>
			<div class="title">Напишите нам сообщение!</div>
			<form method="post" action="mail/sendletter.php">
				<input type="text" name="sender" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваше Имя':this.value;" value="* Ваше Имя" class="your-name" required />
				<input type="text" name="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваш Email':this.value;" value="* Ваш Email" class="email-address" required />
				<textarea class="your-message" name="text" placeholder="* Ваше сообщение"></textarea>
				<input type="submit" name="send" value="Отправить" class="send-message">
			</form>
		</div>
		<div id="fade" class="black-overlay"></div>-->
</body></html>