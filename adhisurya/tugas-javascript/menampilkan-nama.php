<!DOCTYPE html>
<html>  
<head> 
    <meta charset="utf-8"/>
    <title>Tugas I</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <style type="text/css">
            * {
                font-family: 'Lato', sans-serif;
                margin-top: 10px;
                padding: 3px 3px 3px 8px;
            }

            #header {
                background: none;
                padding: 3px 3px 3px 8px;
                margin:0px auto;
                font-size: 30px;
                color: #719e40;
                font-family: 'Lato', sans-serif;
            }

            input[type=text] {
                width: 250px;
                padding: 12px 20px;
                margin: 8px 0;
                border: 1px solid #ccc;
                font-size: 15px;
                border-radius: 4px;
                box-sizing: border-box;
            }

             input[type=checkbox] {
                width: 50px;
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

        <script type="text/javascript">
           function check(form)
            {
             if(form.inputText.value == "")
              {
                 alert("Silahkan tulis sesuatu untuk mencoba hasil")
              }

             else
             {
                var input = document.getElementById("myText").value;
                
                document.getElementById("teksDiv").innerHTML += "<input type='checkbox'>"+ input+"<br/>";     
              }
            }
        </script>    

</head>  
    <body>
        <div id="header">Input Nama</div>
        <form>
            <input type="text" id="myText" name="inputText"/>
            <input class="button button1" type="button" onclick="check(this.form)" value="Input"/>
        </form>

            <div id="teksDiv"></div>
    </body>
</html>