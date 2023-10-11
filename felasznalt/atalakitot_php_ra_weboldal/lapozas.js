var szovegIndex = 0; // Kezdeti oldal indexe
var szovegOldalak = [" A jelenleg érvényben lévő regulák szerint a királykategória csapatai évente két úgynevezett Promóciós Eseményt, azaz filmforgatási napot tarthatnak aktuális versenyautóikkal, ezeken összesen legfeljebb 200 km-t tehetnek meg a Pirelli demóabroncsait használva Az elmúlt években bevett gyakorlattá vált a csapatok között, hogy ezeket az alkalmakat arra használták fel, hogy extra kilométereket tegyenek meg autóikkal, jellemzően így járatták be új versenygépeiket a szezon elején, nem ritkán összevonva a két promóciós eseményt.", "Az új-zélandi tehetség jelenleg a sérült Daniel Ricciardót helyettesíti az AlphaTauri csapatánál: Katarban már ötödik versenyét futja majd, ám hiába a remek szereplés, valamint a szingapúri pontszerzés, versenyzői ülést 2024-re nem kapott a faenzai istállótól. Lawson szolgálataira viszont továbbra is igényt tart a Red Bull: a következő idényben ő lesz majd az energiaital-gyárosok két csapatának tartalékosa, és a pletykák szerint ígéretet kapott arra, hogy 2025-ben versenyzési lehetőséget kap majd a Forma-1-ben. Bár ezt Christian Horner, a Red Bull csapatfőnke nemrég egy interjúban tagadta, most Helmut Marko jelentette ki: Lawson 2025-ben ott lesz az F1-es mezőnyben.", "A 2021-es első Katari Nagydíjhoz hasonlóan idén is nehézségekre számíthatnak a Forma-1-es pilóták a hétvégi futamon - figyelmeztetett a Pirelli. Valtteri Bottas szenvedte meg leginkább az abroncsok hibáját, 30 kör után defekt miatt kellett kiállnia, és a Pirelli szerint idén sem számíthatnak sok jóra a versenyzők. "]; // Szöveg oldalak

function elozoOldal() {
  if (szovegIndex > 0) {
    szovegIndex--;
    frissitSzoveget();
  }
}

function kovetkezoOldal() {
  if (szovegIndex < szovegOldalak.length - 1) {
    szovegIndex++;
    frissitSzoveget();
  }
}

function frissitSzoveget() {
  var szovegDiv = document.getElementById("szoveg");
  szovegDiv.innerHTML = szovegOldalak[szovegIndex];
}

frissitSzoveget();