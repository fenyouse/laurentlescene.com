<div class="well center-block text-center" id="des">
  <p>Dés de 4 :<a id="des4">0</a></p>
  <p>Dés de 6 :<a id="des6">0</a></p>
  <p>Dés de 8 :<a id="des8">0</a></p>
  <p>Dés de 10 :<a id="des10">0</a></p>
  <p>Dés de 12 :<a id="des12">0</a></p>
  <p>Dés de 20 : <a id="des20">0</a></p>
  <p>Dés de 100 : <a id="des100">0</a></p>


  <button  class="btn btn-primary btn-lg btn-block" onClick="onClick()" >Lancer les Dés</button >
</div>

<script>

</script>
<script type="text/javascript">
var des4 = 1;
var des6 = 1;
var des8 = 1;
var des10 = 1;
var des12 = 1;
var des20 = 1;
var des100 = 1;

function onClick() {
  des4 = getRandomInt(4)+1;
  des6 = getRandomInt(6)+1;
  des8 = getRandomInt(8)+1;
  des10 = getRandomInt(10)+1;
  des12 = getRandomInt(12)+1;
  des20 = getRandomInt(20)+1;
  des100 = getRandomInt(100)+1;
  document.getElementById("des4").innerHTML = des4;
  document.getElementById("des6").innerHTML = des6;
  document.getElementById("des8").innerHTML = des8;
  document.getElementById("des10").innerHTML = des10;
  document.getElementById("des12").innerHTML = des12;
  document.getElementById("des20").innerHTML = des20;
  document.getElementById("des100").innerHTML = des100;
};
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
};
</script>
