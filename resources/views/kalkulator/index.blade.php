<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nanayeoo</title>
    <style> 
     body {
        font-family: courier, sans-serif;
        background-color: #AFEEEE;
        margin: 70;
        padding: 70;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
     }

     .kalkulator {
        background-color: #87CEFA;
        width: 350px;
        height:600px;
        padding: 50px;
        border-radius: 200px;
        box-shadow:20px 20px 20px rgba(0,0,0,0.1);
        text-align: center;
     }

     h1 {
        color: #333;
        margin-botom: 100px;
     }

     input[type="submit"] {
        padding: 15px;
        margin: 10px;
        border: 5;
        border-radius: 50px;
        cursor: pointer;
        background-color:#00BFFF;
        color: white;
        font-size: 16px;
        box-shadow:5px 5x 5px rgba(0,0,0,0.1);
        transition: background-color 0.3s;
     }
     input[type="number"] {
        padding: 10px;
        margin-bottom: 10px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 30px;
        box-shadow:5px 5px 5px rgba(0,0,0,0.1);
        outline: none;
     }
     input[ type="submit"]:hover {
        background-color: #22092C;

     }
     
   </style>  
</head>
<body>
    <div class="kalkulator">
<h1>KALKULATOR NANAY</h1>
   
    <form action="{{ route('kalkulator.store') }}" method="post" >
        @csrf
    
        <label for="a">Masukan Angka Pertama :</label><br><br>
        <input type="number" name="a" id="a"></label><br><br>
        <label for="b">Masukan Angka Kedua :</label><br><br>
        <input type="number" name="b" id="b"></label><br><br>
        <input type="submit" value="+" name="op">
        <input type="submit" value="-" name="op">
        <input type="submit" value="*" name="op">
        <input type="submit" value="/" name="op">
        <input type="submit" value="clear" name="op">

    </form>
    
    <h3> kelas : XII PPLG 2</h3>
</div>
</body>
</html>