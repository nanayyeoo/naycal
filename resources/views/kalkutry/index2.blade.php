<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <style>

.calculator  #neelam{  
   width:296px;  
   border-bottom: 2px #6f6f6f solid ;  
   border-bottom-color:#85C1E9;  
   background-color:#85C1E9;  
 }  
.calculator table {  
  margin: auto;  
  width: 295px;  
  max-width: 295px;  
  height: 325px;  
  text-align: center;  
  border-radius: 4px;  
  padding-right: 10px;  
 }  
.calculator input {  
  outline: 0;  
  position: relative;  
  left: 5px;  
  top: 5px;  
  border: 0;  
  color: #495069;  
  background-color: #fff;  
  border-radius: 4px;  
  width: 60px;  
  height: 50px;  
  float:left;  
  margin:5px;  
  font-size:20px;  
  box-shadow:0 4px rgba(0,0,0,0.2);  
  margin-bottom:15px;  
  }  
.calculator  input:hover{  
    border:0 solid#000;  
    color:#495069;  
    background-color:#fff;  
    border-radius: 4px;  
    width: 60px;  
    height: 50px;  
    float: left;  
    font-size: 20px;  
    box-shadow: 0 4px #b0d2cf;  
  }  
.calculator  input: active {  
    top: 4px;  
    border: 0 solid #000;  
    color: #495069;  
    background-color: #fff;  
    border-radius: 4px;  
    width: 60px;  
    height: 50px;  
    float: left;  
    margin: 5px;  
    font-size: 20px;  
    box-shadow: none;  
  }  
.calculator  #display  
  width: 265px;  
  max-width: 270;  
  font-size: 50px;  
  text-align: right;  
  background-color: #bcbd95;  
  float: left;  
  }  
 .calculator #display: hover{  
    width: 270px;  
    font-size: 26px;  
    text-align: right ;  
    background-color: #bcbd95;  
    box-shadow: 0 4px rgba(0,0,0,0.2);  
  }  
.calculator  #display:active;{  
    top: 5px;  
    width: 270px;  
    font-size: 26px;  
    text-align: right ;  
    background-color: #bcbd95;  
    box-shadow: 0 4px rgba(0,0,0,0.2)  
  }  
.calculator  .operator{  
    background-color: #cee9ea;  
    position: relative ;  
  }  
 .calculator .operator: hover{  
    background-color: #cee9ea;  
    box-shadow: none ;  
  }  
 .calculator #clear{  
    float: left;  
    position: relative ;  
    display: block ;  
    background-color: #ff9fa8;  
  }  
 .calculator #clear:hover{  
    float: left;  
    display: block;  
    background-color: #f297A0;  
    margin-bottom: 15px;  
    box-shadow: 0 4px #cc7f86;  
  }  
.calculator  #clear: active{  
    float: left;  
    top: 4px;  
    display: block ;  
    background-color: #f297A0;  
    margin-bottom: 15px;  
    box-shadow: none;  
  }  
 .calculator h3{  
    text-align:center ;  
    color: white ;  
    font-size: 109%;  
  }  
</style>

        <center>
            <h1> Kalkulator Nay </h1>

          

            <div class="calculator alert-info p-4 rounded">
    <form name="form1">  
        <table class="purple-gradient" border=9>  
            <tr>  
                <td colspan="4"><input type="text" name="txt1" id=""></td>  
            </tr>  
                <td><input type="button" value="0" onClick="calc.display.value+='0'"></td>  
                <td> <input type="button" value="1" onClick="calc.display.value+='1'"> </td>   
                <td><input type="button" value="2" onClick="calc.display.value+='2'"></td>  
                <td> <input type="button" class="operator" name = "plus"value="+"  onClick="calc.display.value+='+'"></td>  
            <tr>  
                <td> <input type="button" value="3" onClick="calc.display.value+='3'"> </td>  
                <td> <input type="button" value="4" onClick="calc.display.value+='4'"> </td>  
                <td> <input type="button" value="5" onClick="calc.display.value+='5'"> </td>  
                <td> <input type="button" class="operator" name="minus"value="-" onClick="calc.display.value+='-'">  </td>  
            </tr>  
            <tr>  
                <td> <input type="button" value="6" onClick="calc.display.value+='6'"> </td>  
                <td> <input type="button" value="7"  onClick="calc.display.value+='7'"></td>  
                <td> <input type="button" value="8"  onClick="calc.display.value+='8'"> </td>  
                <td> <input type="button" class="operator" name="times"value="*" onClick="calc.display.value+='*'"></td>  
            </tr>  
            <tr>  
                <td> <input type="button" value="9" onClick="calc.display.value+='9'"></td>  
                <td> <input type="button" id="clear" name="clear" value="c" onClick="calc.display.value=''"></td>  
                <td> <input type="button" class="operator" name="equal"value="=" onClick="calc.display.value =eval(calc.display.value)"></td>  
                <td> <input type="button" class="operator" name = "div"value="/" onClick="calc.display.value+='/'"> </td>  
            </tr>
        </table>  
    </form>  
</div>
</body>
</html>