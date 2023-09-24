//alert('Hello!');

/*console.log('Hello');
console.error('Hiba van');
console.warn('Lehet hiba');*/

// -- Változók

//let, const, var Egy időben csak a const létezet később jött be a var és a lett.
// let és a const ugyxan az a változó

let kor = 20;
kor = 21;
//console.log(kor);

// -- ADAT TÍPUSOK
const nev = 'Zsolt'; //String
const kor2 = 21; //Number
const suly = 80.5; //Number
const felnott = false; //Boolean
const date = new Date('2020-10-01');


const x = null;
let y;

console.log(typeof felnott);

// --- Műveletek
let szam1 = 10;
//szam1 += 10
//szam1++;
szam1 += '1';

let nev2 = 'Zsolt';
nev2 += 10;
let szoveg = 'Hello';

//console.log(szoveg + ' ' + nev2 + '!');
console.log(`${szoveg} ${nev2}!!!!`);
