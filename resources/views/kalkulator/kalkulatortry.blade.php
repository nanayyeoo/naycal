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
.frame-kalks  #neelam{  
   width:296px;  
   border-bottom: 2px #6f6f6f solid ;  
   border-bottom-color:#85C1E9;  
   background-color:#85C1E9;  
 }  
.frame-kalks table {  
  margin: auto;  
  width: 295px;  
  max-width: 295px;  
  height: 325px;  
  text-align: center;  
  border-radius: 4px;  
  padding-right: 10px;  
 }  
.frame-kalks input {  
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
.frame-kalks  input:hover{  
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
.frame-kalks  input: active {  
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
.frame-kalks  #display  
  width: 265px;  
  max-width: 270;  
  font-size: 50px;  
  text-align: right;  
  background-color: #bcbd95;  
  float: left;  
  }  
 .frame-kalks #display: hover{  
    width: 270px;  
    font-size: 26px;  
    text-align: right ;  
    background-color: #bcbd95;  
    box-shadow: 0 4px rgba(0,0,0,0.2);  
  }  
.frame-kalks  #display:active;{  
    top: 5px;  
    width: 270px;  
    font-size: 26px;  
    text-align: right ;  
    background-color: #bcbd95;  
    box-shadow: 0 4px rgba(0,0,0,0.2)  
  }  
.frame-kalks  .operator{  
    background-color: #cee9ea;  
    position: relative ;  
  }  
 .frame-kalks .operator: hover{  
    background-color: #cee9ea;  
    box-shadow: none ;  
  }  
 .frame-kalks #clear{  
    float: left;  
    position: relative ;  
    display: block ;  
    background-color: #ff9fa8;  
  }  
 .frame-kalks #clear:hover{  
    float: left;  
    display: block;  
    background-color: #f297A0;  
    margin-bottom: 15px;  
    box-shadow: 0 4px #cc7f86;  
  }  
.frame-kalks  #clear: active{  
    float: left;  
    top: 4px;  
    display: block ;  
    background-color: #f297A0;  
    margin-bottom: 15px;  
    box-shadow: none;  
  }  
 .frame-kalks h3{  
    text-align:center ;  
    color: white ;  
    font-size: 109%;  
  }  
</style>

    kalkulator
    <form name="form1" action="" method="post">
        <input type="text" name="txt1" id=""><br>
<table>
    <tr>
        <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
        <td><input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
        <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td>
    </tr>
    <tr>
        <td><input type="button" value="4" onClick="form1.txt1.value+='4'"></td>
        <td><input type="button" value="5" onClick="form1.txt1.value+='5'"></td>
        <td><input type="button" value="6" onClick="form1.txt1.value+='6'"></td>
    </tr>
      <tr>
        <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
        <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
        <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
    </tr>
      <tr>
        <td><input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
        <td> <input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
        <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
    </tr>
    <tr>
        <td><input type="button" value="*" onClick="form1.txt1.value+='*'"></td>
        <td><input type="button" value="/" onClick="form1.txt1.value+='/'"></td>
        <td><input type="button" value="c" onClick="form1.txt1.value=''"></td>
    </tr>
    <tr>
        <td><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
       
        
        
       
       
       
        
        
        
</form>       
</body>
</html>