<!doctype html>
<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	$MetaTags(false)	
	<link rel="shortcut icon" href="$ThemeDir/images/favicon.ico" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
</head>
<body class="impress-not-supported" id="impressClass">

<!--
    This fallback message is only visible when there is `impress-not-supported` class on body.
-->
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>



<div id="impress" class="main" role="main">
	<div class="inner typography">
	   <div id="impress">

       <% loop SortedSlides %>
     
         <div id="slide-$SlideNum" class="step<% if SlideBox %> slide<% end_if %><% if Big %> big<% end_if %><% if Tiny %> tiny<% end_if %>" data-x="$DataX" data-y="$DataY" data-z="$DataZ" data-scale="<% if Scale %>$Scale<% else %>1<% end_if %>" data-rotate="$DataRotate" data-rotate-x="$DataRotateX" data-rotate-y="$DataRotateY"> 
            $Content
         </div>  

        <% end_loop %>
 
   
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
</div>


<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>

<!--
    
    Last, but not least.
    
    To make all described above really work, you need to include impress.js in the page.
    I strongly encourage to minify it first.
    
    In here I just include full source of the script to make it more readable.
    
    You also need to call a `impress().init()` function to initialize impress.js presentation.
    And you should do it in the end of your document. Not only because it's a good practice, but also
    because it should be done when the whole document is ready.
    Of course you can wrap it in any kind of "DOM ready" event, but I was too lazy to do so ;)
    
-->
<script>impress().init();</script>






</div>
	</div>
</div>
</body>
</html>