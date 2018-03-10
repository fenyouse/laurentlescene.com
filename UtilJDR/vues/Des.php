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
var dices = [4,6,8,10,12,20,100];

function onClick() {
  for(var i = 0; i < dices.length; i++)
    eval('document.getElementById("des'+dices[i]+'").innerHTML = getRandomInt('+dices[i]+');');
}
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max)+1);
}
</script>
