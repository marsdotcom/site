<!DOCTYPE html>
<!-- saved from url=(0038)http://bootstrap-3.ru/examples/cover/# -->
<html lang="ru"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ООО ДСУ-17">
<meta name="author" content="">
<link rel="shortcut icon" href="./index_files/favicon.png">

<title>ООО ДСУ-17</title>

<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="./index_files/cover.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42300844 = new Ya.Metrika({ id:42300844, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42300844" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->


      <script type="text/javascript">try {
      	window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener('DOMContentLoaded', func); } };
      	window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
      	window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
      	window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
      	var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
      	var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
      	var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
      	var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
      	var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
      	var AdFox_getCodeScript = function() {};
      	AG_onLoad(function() { AG_each('iframe[id^="AdFox_iframe_"]', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
      	try { Object.defineProperty(window, 'noAdsAtAll', { get: function() { return true; } }); } catch (ex) {}
      } catch (ex) { console.error('Error executing AG js: ' + ex); }</script><style id="holderjs-style" type="text/css"></style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
      .en-markup-crop-options {
      	top: 18px !important;
      	left: 50% !important;
      	margin-left: -100px !important;
      	width: 200px !important;
      	border: 2px rgba(255,255,255,.38) solid !important;
      	border-radius: 4px !important;
      }

      .en-markup-crop-options div div:first-of-type {
      	margin-left: 0px !important;
      }
  </style></head>

  <body>

  	<div class="site-wrapper">

  		<div class="site-wrapper-inner">

  			<div class="cover-container">  				

  				<div class="container-fluid">
  					<h1 class="cover-heading">Ящики:</h1>
  					<?php
  					$servername = "localhost";
  					$username = "marsdotco0_base1";
  					$password = "defolt";
  					$dbname = "marsdotco0_base1";

// Create connection
  					$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  					if ($conn->connect_error) {
  						die("Connection failed: " . $conn->connect_error);
  					} 

  					$sql = "SELECT * FROM products";
  					$result = $conn->query($sql);

  					if ($result->num_rows > 0) {
  						echo "<table class=\"table table-bordered table-condensed\"><thead><tr><th>ID</th><th>Name</th><th>@</th></tr></thead><tbody>";
    // output data of each row
  						while($row = $result->fetch_assoc()) {
  							echo "<tr><td>".$row["_id"]."</td><td><a href=\"boxatribut.php?id=".$row["_id"]."&name=".$row[name]."\"/>".$row["name"]."</td><td><button name=".$row["_id"]." id=\"button\" class=\"btn btn-default btn-sm\" type=\"button\"><i class=\"glyphicon glyphicon-list\"></i></button>    </td></tr>";
  						}
  						echo "</tbody></table>";
  					} else {
  						echo "0 results";
  					}
  					$conn->close();
  					?>

  				</div>  				

  			</div>

  		</div>

  	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./index_files/jquery.min.js"></script>
    <script src="./index_files/bootstrap.min.js"></script>
    <script src="./index_files/docs.min.js"></script>

    <script type="text/javascript">

    	function rowclick(){

    		var id = this.getAttribute("name");

    		alert(id);

    	}

    	var buttons = document.getElementsByTagName("button");

    	for (var i = 0; i < buttons.length; i++) {
    		buttons[i].onclick = rowclick;
    	}

    </script>
</body></html>






