/*jslint node: true */
/*jslint white: true*/
"use strict";

function openNav() {
  document.getElementById("nav-burger").style.width = "100%";
}
function closeNav() {
  document.getElementById("nav-burger").style.width = "0%";
}

function nightMode() {

  let colorNight = document.getElementsByClassName("night-mode");
    
    for(let i = 0; i < colorNight.length; i++){
        if(colorNight[i].style.color != "red"){
            colorNight[i].style.color = "red";
        } else {
            colorNight[i].style.color = "";
        }
    }

  let nightFeature = document.querySelector('body');

  let nightInner = document.getElementsByClassName("inner");

  let nightFooter = document.getElementsByClassName("footer");

  let nightTextTitle = document.getElementsByClassName("title");

  let nightTextSubtitle = document.getElementsByClassName("subtitle");

  let nightNewsUpd = document.getElementsByClassName("para-news");

  let nightBGNU = document.getElementsByClassName("bg-nu");

  for(let i = 0; i < nightBGNU.length; i++){
    if(nightBGNU[i].style.backgroundColor != "rgba(0, 0, 0, 0.8)"){
      nightBGNU[i].style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    } else {
        nightBGNU[i].style.backgroundColor = "white";
      }
    }

  if(nightFooter[0].style.backgroundColor === ""){
    nightFooter[0].style.backgroundColor = "black";
  } else {
    nightFooter[0].style.backgroundColor = "";
  }

  for(let i = 0; i < nightTextTitle.length; i++) {
    if(nightTextTitle[i].style.color != "white") {
      nightTextTitle[i].style.color = "white";
    } else {
      nightTextTitle[i].style.color = "";
    }
  }

  for(let i = 0; i < nightNewsUpd.length; i++) {
    if(nightNewsUpd[i].style.color != "white")
      nightNewsUpd[i].style.color = "white";
    else {
      nightNewsUpd[i].style.color = "";
    }
  }
  for(let i = 0; i < nightTextSubtitle.length; i++) {
    if(nightTextSubtitle[i].style.color != "white") {
      nightTextSubtitle[i].style.color = "white";
    } else {
      nightTextSubtitle[i].style.color = "";
    }
  }

  if(nightFeature.style.backgroundColor === "") {
    nightFeature.style.backgroundColor = "#142634";
  } else {
    nightFeature.style.backgroundColor = ""
  }

  for(let i = 0; i < nightInner.length; i++){
    if(nightInner[i].style.backgroundColor === "") {
      nightInner[i].style.backgroundColor = "#243447";
      nightInner[i].style.borderStyle = "hidden";
    } else {
      nightInner[i].style.backgroundColor = ""
      nightInner[i].style.borderStyle = "solid";
    }
  }
}