var result = document.getElementById("result");
var result3 = document.getElementById("result3");
var result2 = document.getElementById("result2");
var result3 = document.getElementById("result3");
var result4 = document.getElementById("result4");
var result5 = document.getElementById("result5");
var result6 = document.getElementById("result6");

/*-------------------------------------------------------------------------------------------------------------------*/
var done = document.getElementById("done");
var clear = document.getElementById("clear");
var undo = document.getElementById("undo");

done.addEventListener("click", addColorGreen);
clear.addEventListener("click", addColorRed);
undo.addEventListener("click", removeColors);


function addColorGreen() {
  console.log("GREEN");
  result.classList.add("doneGreen");
  result.innerHTML = "07.50"

  result.classList.remove("clearRed");
}

function addColorRed() {
    console.log("RED");
    result.classList.add("clearRed");
    result.innerHTML = "00.00";

    result.classList.remove("doneGreen");
}

function removeColors() {
    console.log("DELETE");
    result.classList.remove("doneGreen");
    result.classList.remove("clearRed");

    result.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done1 = document.getElementById("done1");
var clear1 = document.getElementById("clear1");
var undo1 = document.getElementById("undo1");

done1.addEventListener("click", addColorGreen1);
clear1.addEventListener("click", addColorRed1);
undo1.addEventListener("click", removeColors1);


function addColorGreen1() {
  console.log("GREEN");
  result1.classList.add("doneGreen");
  result1.innerHTML = "10.00"

  result1.classList.remove("clearRed");
}

function addColorRed1() {
    console.log("RED");
    result1.classList.add("clearRed");
    result1.innerHTML = "00.00";

    result1.classList.remove("doneGreen");
}

function removeColors1() {
    console.log("DELETE");
    result1.classList.remove("doneGreen");
    result1.classList.remove("clearRed");

    result1.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done2 = document.getElementById("done2");
var clear2 = document.getElementById("clear2");
var undo2 = document.getElementById("undo2");

done2.addEventListener("click", addColorGreen2);
clear2.addEventListener("click", addColorRed2);
undo2.addEventListener("click", removeColors2);


function addColorGreen2() {
  console.log("GREEN");
  result2.classList.add("doneGreen");
  result2.innerHTML = "02.50"

  result2.classList.remove("clearRed");
}

function addColorRed2() {
    console.log("RED");
    result2.classList.add("clearRed");
    result2.innerHTML = "00.00";

    result2.classList.remove("doneGreen");
}

function removeColors2() {
    console.log("DELETE");
    result2.classList.remove("doneGreen");
    result2.classList.remove("clearRed");

    result2.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done3 = document.getElementById("done3");
var clear3 = document.getElementById("clear3");
var undo3 = document.getElementById("undo3");

done3.addEventListener("click", addColorGreen3);
clear3.addEventListener("click", addColorRed3);
undo3.addEventListener("click", removeColors3);


function addColorGreen3() {
  console.log("GREEN");
  result3.classList.add("doneGreen");
  result3.innerHTML = "07.50"

  result3.classList.remove("clearRed");
}

function addColorRed3() {
    console.log("RED");
    result3.classList.add("clearRed");
    result3.innerHTML = "00.00";

    result3.classList.remove("doneGreen");
}

function removeColors3() {
    console.log("DELETE");
    result3.classList.remove("doneGreen");
    result3.classList.remove("clearRed");

    result3.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done4 = document.getElementById("done4");
var clear4 = document.getElementById("clear4");
var undo4 = document.getElementById("undo4");

done4.addEventListener("click", addColorGreen4);
clear4.addEventListener("click", addColorRed4);
undo4.addEventListener("click", removeColors4);


function addColorGreen4() {
  console.log("GREEN");
  result4.classList.add("doneGreen");
  result4.innerHTML = "05.00"

  result4.classList.remove("clearRed");
}

function addColorRed4() {
    console.log("RED");
    result4.classList.add("clearRed");
    result4.innerHTML = "00.00";

    result4.classList.remove("doneGreen");
}

function removeColors4() {
    console.log("DELETE");
    result4.classList.remove("doneGreen");
    result4.classList.remove("clearRed");

    result4.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done5 = document.getElementById("done5");
var clear5 = document.getElementById("clear5");
var undo5 = document.getElementById("undo5");

done5.addEventListener("click", addColorGreen5);
clear5.addEventListener("click", addColorRed5);
undo5.addEventListener("click", removeColors5);


function addColorGreen5() {
  console.log("GREEN");
  result5.classList.add("doneGreen");
  result5.innerHTML = "02.50"

  result5.classList.remove("clearRed");
}

function addColorRed5() {
    console.log("RED");
    result5.classList.add("clearRed");
    result5.innerHTML = "00.00";

    result5.classList.remove("doneGreen");
}

function removeColors5() {
    console.log("DELETE");
    result5.classList.remove("doneGreen");
    result5.classList.remove("clearRed");

    result5.innerHTML = "";
}

/*-------------------------------------------------------------------------------------------------------------------*/
var done6 = document.getElementById("done6");
var clear6 = document.getElementById("clear6");
var undo6 = document.getElementById("undo6");

done6.addEventListener("click", addColorGreen6);
clear6.addEventListener("click", addColorRed6);
undo6.addEventListener("click", removeColors6);


function addColorGreen6() {
  console.log("GREEN");
  result6.classList.add("doneGreen");
  result6.innerHTML = "02.50"

  result6.classList.remove("clearRed");
}

function addColorRed6() {
    console.log("RED");
    result6.classList.add("clearRed");
    result6.innerHTML = "00.00";

    result6.classList.remove("doneGreen");
}

function removeColors6() {
    console.log("DELETE");
    result6.classList.remove("doneGreen");
    result6.classList.remove("clearRed");

    result6.innerHTML = "";
}






























































































































/*
    Wanneer icon ingedrukt is wordt functie uitgevoerd. Ieder icon moet eigen variabele meegeven zodat er geen enorm lange code geschreven hoeft te worden.
    Misschien varabele in HTML meegeven zodat die gelijk in JS gebruikt kan waorden als dit mogelijk is.

    zorgen dat dingen opgeslagen kunnen worden zodat niet iedere keer icon angelklikd moet worden.


    MALLETJE SCHRIJVEN ZODAT CODE GEREDUCEERD WORDT!
*/