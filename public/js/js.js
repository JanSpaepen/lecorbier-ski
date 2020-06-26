"use strict"
//Interctieve pistekaart met verschillende opties

let piste = document.getElementsByTagName("path");

for (const element3 of piste) {
    console.log(element3.id);
    console.log(element3.id);
}

for (const stuff of piste) {

  document.getElementById( "div" + stuff.id).onmouseover = function () {

        document.getElementById(stuff.id).classList.remove('normal');
        document.getElementById(stuff.id).classList.add('bold');

    }
    document.getElementById("div" + stuff.id).onmouseleave = function () {
        document.getElementById( stuff.id).classList.remove('bold');
        document.getElementById( stuff.id).classList.add('normal');
    }
document.getElementById( stuff.id).onmouseover = function () {

        document.getElementById(stuff.id).classList.remove('normal');
        document.getElementById(stuff.id).classList.add('bold');

    }
    document.getElementById("div" + stuff.id).onmouseleave = function () {
        document.getElementById( stuff.id).classList.remove('bold');
        document.getElementById( stuff.id).classList.add('normal');
    }


}
