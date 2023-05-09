<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    

    <h3 align=center>Input Data</h3>
    <form>
        <div>
            Nama Lengkap
            <input type="text" name="txNAMA" id="txNAMA">
        </div>
        <div>
            <button type= "button" onclick="Checknama()">Check Nama</button>
        </div>
    </form>

    <script>
        function Checknama(){
            let nm = document.getElementById("txNAMA").value;
            console.log("Isi Field Nama: "+nm);
        }
    </script>
</body>
</html>
