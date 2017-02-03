//** Function Show Value Input
function tampilkan(e)
{
	var hasil;
	var ulangi = document.getElementById('ulangi').value;
	var key=e.keyCode || e.which;

		hasil=document.getElementById("tempat_hasil");

		if(!(ulangi == ""))
		{
			if (key==13)
			{
				hasil.innerHTML+="<div class='checkbox'><label for='"+ulangi+"'><input type='checkbox' name='"+ulangi+"' value='"+ulangi+"'>"+ulangi+"</label><span onClick='hapus(this)'>x</span></div>";
				document.getElementById('ulangi').value="";

				komen = "";
				document.getElementById("tempat_komen").innerHTML=komen;
			}
		} else {
			if (key==13)
			{
				komen = "<div class='alert alert-danger'><strong>Danger!</strong> Data yang dimaksukan tidak ada!</div>";
				document.getElementById("tempat_komen").innerHTML=komen;
			}
		}

		
}

//* Function Hapus Selected Parent Element
function hapus(e)
{
	e.parentNode.parentNode.removeChild(e.parentNode);
}

//* Function Hapus Semua Parent 
function hapus_semua(e)
{
	var restore;
    e.parentNode.parentNode.removeChild(e.parentNode);
    komen = "<div id='tempat_hasil'><span class='hapussemua' onClick='hapus_semua(this)'>hapus semua</span></div>";
    document.getElementById("recorvery").innerHTML=komen;
}


