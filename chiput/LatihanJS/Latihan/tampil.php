<!DOCTYPE html>
<html>
<head>
	<title>Belajar JS part1</title>
	<style href="style.css"></style>
</head>
<body>
<div id="myDIV"  class="header">
  <h2 style="margin:5px">List Your DeadLine</h2>
  <input type="text" id="myInput" placeholder="Add Your List !!!">
  <button onclick="newElement()" class="addBtn" >Add</button> 
</div>

<ul id="myUL">
  <li>Work</li>
  <li>Sleep</li>
  <li>Eat</li>
</ul>

<script>
	var span = document.getElementsByTagName("li");
	var i;
	for (i=0; i<btn_close.length; i++) {
		var span = document.createElement("Span");
		var text = document.createTextNode("Node");
		span.className = "close";
		span.appendChild(txt);
  		myNodelist[i].appendChild(span);
	}

	var close = document.getElementsByClassName("close");
	var i;
	for (i = 0; i < close.length; i++) {
  		close[i].onclick = function() {
    	var div = this.parentElement;
    	div.style.display = "none";
  	}

  	var list = document.querySelector('ul');
	list.addEventListener('click', function(ev) {
  		if (ev.target.tagName === 'LI') {
    		ev.target.classList.toggle('checked');
  		}
	}, false);

function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

	
</script>
</body>
</html>