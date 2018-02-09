<?php

function carl_function() {
  return '<div>
  <p>Carl is cool</p>
  <img src="http://www.escapeachamber.com/shortcodes/wp-content/uploads/2018/02/carl-e1518150643251.png" width="100px">
  </div>';
}

add_shortcode('carl', 'carl_function');


function randomqg() {
  return '<div id="container-fluid">
<div id="all">
  <center>
<h1>
  Random Quote
</h1>
    <h1>
 Generator
</h1>
<button onHover="hello" id="getIt">Intrigue Me</button>
    <br><br>
  <h1 id="quote">" "</h1>
  </center>
  <br><br>
  </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript"  src="' . $DOCUMENT_ROOT . '/shortcodes/wp-content/plugins/courdpress/rqg.js"></script>';
}

add_shortcode('rqg', 'randomqg');

?>
