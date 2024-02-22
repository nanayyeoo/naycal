<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<font color="red" ><h1><center> KALKULATOR NANAY</center></h1></font>
</form>
<center>
    <br>
    <form action="{{ route('second.store') }}" method="post" >
        @csrf
    <table border=1 width=400>
    <tr>
        <td colspan=2><input type="number" name="a" id=></td>
        <td colspan=2 rowspan=2><input type="submit" value="reset" name="op"></td>
    </tr>
    <tr>
        <td colspan=2><input type="number" name="a" id=></td>
    </tr>
    <tr>

        <td colspan=4>Hasil: {{ $hasil }} </td>

    </tr>
    <tr>
    <td> <input type="submit" value="+" name="op"></td>
    <td> <input type="submit" value="-" name="op"></td>
    <td> <input type="submit" value="x" name="op"></td>
    <td> <input type="submit" value=":" name="op"></td>
    </tr>

    <tr>
        <td colspan=4>
            NAMA : NAYLA NURFITSARI<br>
            KELAS: XII PPLG2
        </td>

    </tr>
</table>
</br>

</center>
</body>
<body>
    <center>
        <font color="yellow" ><h1>2005</h1></font>
    </center>

</body>
</html>