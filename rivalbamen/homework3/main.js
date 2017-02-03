function check(form) {
			if(form.inputText.value == "") {
				alert("Silahkan Isi Form")
			} else {
				var x = document.getElementById("input").value; 
			    //Hasil input ID "myText"
			    document.getElementById("hasil").innerHTML +="<input type='checkbox'/> "+ x +"<br/>";
			}
		}