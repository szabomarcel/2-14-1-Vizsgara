var valt1 = "Szia ";
var valt2 = prompt("Hogy hívnak: ");
alert(valt1 + valt2)

var kor = prompt("Hány éves vagy?")
if(kor > 18){
    alert("Akkor tudsz benészhetsz az oldalra!")
}
else if( kor == 18){
    alert("Jó hogy elérted ezt a kort és be tudsz nézni.")
}
else{
    alert("Sajnos elkel hagyd az oldalt!")
    ageInput.value = "";
}

var gepszam = Math.ceil(Math.random() * 10)
var tipp = 0
while(gepszam != tipp){
    tipp = prompt()
    if(gepszam > tipp){
        alert("Nagyobb")
    }else if(gepszam < tipp){
        alert("Kisebb")
    }else if(gepszam == tipp){
        alert("Talált!")
    }
}

/*var szavak = []
var ujszo
while(ujszo != ""){
    ujszo = prompt()
    if(ujszo != ""){
        szavak.push(ujszo)
    }
}
szavak.sort()
alert(szavak)

const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));*/