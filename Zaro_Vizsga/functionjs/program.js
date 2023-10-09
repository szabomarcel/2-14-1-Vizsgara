var valt1 = "Szia ";
var valt2 = prompt("Hogy hívnak: ");
alert(valt1 + valt2)

var kor = prompt("Hány éves vagy?")
if(kor > 18){
    alert("Akkor beléphetsz az oldalra!")
}
else if( kor == 18){
    alert("Jó hogy elérted ezt a kort és be tudsz nézni az oldalunkra.")
}
else{
    alert("Sajnos elkel hagyd ezt az oldalt!")
    ageInput.value = "";
}

const a_input = document.getElementById("a_szam");
const b_input = document.querySelector("#b_szam");
const kijelzo = document.querySelector("#eredmeny");

function osszead(){
    a = parseFloat(a_input.value);
    b = parseFloat(b_input.value);
    kijelzo.innerHTML = "Összeadva: " + (a + b).toString();
}
function kivonas(){
    a = parseFloat(a_input.value);
    b = parseFloat(b_input.value);
    kijelzo.innerHTML = "Kivonás: " + (a - b).toString();
}
function szorzas(){
    a = parseFloat(a_input.value);
    b = parseFloat(b_input.value);
    kijelzo.innerHTML = "Szorzás: " + (a * b).toString();
}
function osztas(){
    a = parseFloat(a_input.value);
    b = parseFloat(b_input.value);
    kijelzo.innerHTML = "Osztás: " + (a / b).toString();
}