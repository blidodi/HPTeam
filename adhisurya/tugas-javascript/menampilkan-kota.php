<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas II</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

     <style type="text/css">
            * {
                font-family: 'Lato', sans-serif;
            }

            #header {
                background: none;
                padding: 3px 3px 3px 8px;
                margin:0px auto;
                font-size: 30px;
                color: #719e40;
                font-family: 'Lato', sans-serif;
            }

            select {
                width: 250px;
                padding: 12px 20px;
                margin: 8px 0;
                border: 1px solid #ccc;
                font-size: 15px;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .button {
                    
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 17px;
                margin: 4px 2px;
                cursor: pointer;
            }

            .button1 {background-color: #719e40;} /*Blue */
        </style>

    <script>
        function tampilkan(){

          var nama_kota=document.getElementById("form1").select1.value;
          var p_kontainer=document.getElementById("container");

          if (nama_kota=="Jakarta")
            {
                p_kontainer.innerHTML="Jakarta Ibu kota Republik Indonesia";
            }
          else if (nama_kota=="Bali")
            {
                p_kontainer.innerHTML="Bali kota seribu Pura";
            }
          else if (nama_kota=="Bogor")
            {
                p_kontainer.innerHTML="Bogor kota hujan";
            }
        }
    </script>

</head>
<body>

  <div id="header">Menampilkan Kota</div>

    <form id="form1" name="form1" onsubmit="return false">
      <label for="select1">Pilih Kota: </label>
      <select id="select1" name="select1">
        <option value="Jakarta">Jakarta</option>
        <option value="Bali">Bali</option>
        <option value="Bogor">Bogor</option>
      </select>
      <input class="button button1" type="submit" value="Tampilkan Keterangan" onclick="tampilkan()">
    </form>

  <p id="container"></p>

</body>
</html>