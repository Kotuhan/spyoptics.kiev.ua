<!-- header/navbar view
 -
 -	 This view is a horizontal navigation bar.
 -	 It is a part of the page header.
 -
-->

<div id="topNavbar">
	<div id="topLine"></div>
	<div class="navbar">
		<a href="<?=site_url('/')?>">Spyoptic</a>
		<a href="<?=site_url('/shop/loadSimplePage/about-glasses')?>">описание</a>
		<a href="<?=site_url('/shop/order')?>">заказать</a>
		<a href="<?=site_url('/shop/loadSimplePage/delivery')?>">доставка</a>
		<a href="<?=site_url('/shop/loadSimplePage/contact')?>">контакты</a>
	</div>

    <div class="social-like-buttons">
        <div class="like-button-container">
            <div class="fb-like" data-href="http://spyoptics.kiev.ua/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
        <div class="like-button-container">
            <div id="vk_like"></div>
        </div>
        <div class="like-button-container">
            <div class="g-plusone" data-href="http://spyoptics.kiev.ua/"></div>
        </div>
    </div>

    <div class="loading-container">
        <div id="loading" class="hidden">loading...</div>
    </div>
</div>

<!-- Google Plus like button scripts -->
<script src="<?=TOOLS?>socialAPI/google.js" async defer>
    {lang: 'ru'}
</script>
<!-- -------------------- -->

<!-- VK Like button scripts -->
<script type="text/javascript" src="<?=TOOLS?>socialAPI/vk.js"></script>
<script type="text/javascript">
  VK.init({apiId: 4806597, onlyWidgets: true});
</script>
<script type="text/javascript">
    VK.Widgets.Like("vk_like", {type: "mini"});
</script>
<!-- --------------------- -->

<!-- Facebook Like button scripts -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1418072338493352',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "<?=TOOLS?>socialAPI/fb.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- ------------------------------ -->
