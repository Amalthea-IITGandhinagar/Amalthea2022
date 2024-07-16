//Zaqi''s Javascript

$(function () {
  $("#slider").slider();
});

// Javascript for slider

//clapping the function

window.onscroll = function (event) {
  var scr = window.pageYOffset;
  // for the first slider 

  var c = scr / 3;
  var a = c % 100;
  var b = Math.floor(c / 100);

  if (c < 100) {
    document.getElementsByClassName('zslider')[0].value = (c);
  }

  else {
    if (b % 2 == 0) {
      document.getElementsByClassName('zslider')[0].value = (a);
    }
    else {
      document.getElementsByClassName('zslider')[0].value = (100 - a);
    }
  }

  // for the second slider
  var d = scr / 5;
  a = d % 100;
  b = Math.floor(d / 100);
  if (d < 100) {
    document.getElementsByClassName('zslider')[1].value = (d);
  }

  else {
    if (b % 2 == 0) {
      document.getElementsByClassName('zslider')[1].value = (a);
    }
    else {
      document.getElementsByClassName('zslider')[1].value = (100 - a);
    }
  }

  // for the third slider
  var e = scr / 7;
  a = e % 100;
  b = Math.floor(e / 100);
  if (e < 100) {
    document.getElementsByClassName('zslider')[2].value = (e);
  }

  else {
    if (b % 2 == 0) {
      document.getElementsByClassName('zslider')[2].value = (a);
    }
    else {
      document.getElementsByClassName('zslider')[2].value = (100 - a);
    }
  }




  // for the fourth slider
  var f = scr / 10;
  a = f % 100;
  b = Math.floor(f / 100);
  if (f < 100) {
    document.getElementsByClassName('zslider')[3].value = (f);
  }

  else {
    if (b % 2 == 0) {
      document.getElementsByClassName('zslider')[3].value = (a);
    }
    else {
      document.getElementsByClassName('zslider')[3].value = (100 - a);
    }
  }

  //for the fifth slider
  var g = scr / 13;
  a = g % 100;
  b = Math.floor(g / 100);
  if (g < 100) {
    document.getElementsByClassName('zslider')[4].value = (g);
  }

  else {
    if (b % 2 == 0) {
      document.getElementsByClassName('zslider')[4].value = (a);
    }
    else {
      document.getElementsByClassName('zslider')[4].value = (100 - a);
    }
  }

}
// javascript for explore elements

$(document).ready(function () {
  $(".zbr1").mouseenter(function () {
    $(".e1border").css("width", "0");
    $(".e2border").css("width", "112px");
    $(".e3border").css("width", "0");
    $(".e4border").css("width", "0");
    $(".e5border").css("width", "0");
    $(".e6border").css("width", "112px");
    $(".e7border").css("width", "0");
    $(".e8border").css("width", "0");
    $(".e9border").css("width", "0");
    $(".e10border").css("width", "0");
    $(".e11border").css("width", "0");
    $(".e12border").css("width", "0");
    $(".e13border").css("width", "0");
  });
  $(".zbr1").mouseleave(function () {
    $(".e1border").css("width", "30px");
    $(".e2border").css("width", "30px");
    $(".e3border").css("width", "50px");
    $(".e4border").css("width", "10px");
    $(".e5border").css("width", "10px");
    $(".e6border").css("width", "20px");
    $(".e7border").css("width", "10px");
    $(".e8border").css("width", "10px");
    $(".e9border").css("width", "30px");
    $(".e10border").css("width", "30px");
    $(".e11border").css("width", "30px");
    $(".e12border").css("width", "10px");
    $(".e13border").css("width", "10px");
  });
});

$(document).ready(function () {
  $(".zbr2").mouseenter(function () {
    $(".s1border").css("width", "0");
    $(".s2border").css("width", "112px");
    $(".s3border").css("width", "0");
    $(".s4border").css("width", "0");
    $(".s5border").css("width", "0");
    $(".s6border").css("width", "112px");
    $(".s7border").css("width", "0");
    $(".s8border").css("width", "0");
    $(".s9border").css("width", "0");
    $(".s10border").css("width", "0");
    $(".s11border").css("width", "0");
    $(".s12border").css("width", "0");
    $(".s13border").css("width", "0");
  });
  $(".zbr2").mouseleave(function () {
    $(".s1border").css("width", "30px");
    $(".s2border").css("width", "30px");
    $(".s3border").css("width", "50px");
    $(".s4border").css("width", "10px");
    $(".s5border").css("width", "10px");
    $(".s6border").css("width", "20px");
    $(".s7border").css("width", "10px");
    $(".s8border").css("width", "10px");
    $(".s9border").css("width", "30px");
    $(".s10border").css("width", "30px");
    $(".s11border").css("width", "30px");
    $(".s12border").css("width", "10px");
    $(".s13border").css("width", "10px");
  });


});

$(document).ready(function () {
  $(".zbr3").mouseenter(function () {
    $(".t1border").css("width", "0");
    $(".t2border").css("width", "112px");
    $(".t3border").css("width", "0");
    $(".t4border").css("width", "0");
    $(".t5border").css("width", "0");
    $(".t6border").css("width", "112px");
    $(".t7border").css("width", "0");
    $(".t8border").css("width", "0");
    $(".t9border").css("width", "0");
    $(".t10border").css("width", "0");
    $(".t11border").css("width", "0");
    $(".t12border").css("width", "0");
    $(".t13border").css("width", "0");
  });
  $(".zbr3").mouseleave(function () {
    $(".t1border").css("width", "30px");
    $(".t2border").css("width", "30px");
    $(".t3border").css("width", "50px");
    $(".t4border").css("width", "10px");
    $(".t5border").css("width", "10px");
    $(".t6border").css("width", "20px");
    $(".t7border").css("width", "10px");
    $(".t8border").css("width", "10px");
    $(".t9border").css("width", "30px");
    $(".t10border").css("width", "30px");
    $(".t11border").css("width", "30px");
    $(".t12border").css("width", "10px");
    $(".t13border").css("width", "10px");
  });
});

$(document).ready(function () {
  $(".zbr4").mouseenter(function () {
    $(".y1border").css("width", "0");
    $(".y2border").css("width", "112px");
    $(".y3border").css("width", "0");
    $(".y4border").css("width", "0");
    $(".y5border").css("width", "0");
    $(".y6border").css("width", "112px");
    $(".y7border").css("width", "0");
    $(".y8border").css("width", "0");
    $(".y9border").css("width", "0");
    $(".y10border").css("width", "0");
    $(".y11border").css("width", "0");
    $(".y12border").css("width", "0");
    $(".y13border").css("width", "0");
  });
  $(".zbr4").mouseleave(function () {
    $(".y1border").css("width", "30px");
    $(".y2border").css("width", "30px");
    $(".y3border").css("width", "50px");
    $(".y4border").css("width", "10px");
    $(".y5border").css("width", "10px");
    $(".y6border").css("width", "20px");
    $(".y7border").css("width", "10px");
    $(".y8border").css("width", "10px");
    $(".y9border").css("width", "30px");
    $(".y10border").css("width", "30px");
    $(".y11border").css("width", "30px");
    $(".y12border").css("width", "10px");
    $(".y13border").css("width", "10px");
  });
});

$(document).ready(function () {
  $(".zbr5").mouseenter(function () {
    $(".c1border").css("width", "0");
    $(".c2border").css("width", "112px");
    $(".c3border").css("width", "0");
    $(".c4border").css("width", "0");
    $(".c5border").css("width", "0");
    $(".c6border").css("width", "112px");
    $(".c7border").css("width", "0");
    $(".c8border").css("width", "0");
    $(".c9border").css("width", "0");
    $(".c10border").css("width", "0");
    $(".c11border").css("width", "0");
    $(".c12border").css("width", "0");
    $(".c13border").css("width", "0");
  });
  $(".zbr5").mouseleave(function () {
    $(".c1border").css("width", "30px");
    $(".c2border").css("width", "30px");
    $(".c3border").css("width", "50px");
    $(".c4border").css("width", "10px");
    $(".c5border").css("width", "10px");
    $(".c6border").css("width", "20px");
    $(".c7border").css("width", "10px");
    $(".c8border").css("width", "10px");
    $(".c9border").css("width", "30px");
    $(".c10border").css("width", "30px");
    $(".c11border").css("width", "30px");
    $(".c12border").css("width", "10px");
    $(".c13border").css("width", "10px");
  });
});


$(function () {
  $("#slider").slider();
});


// Rudra JS Start

function preloaderFunction() {

  document.querySelector(".Rpreload").style.display = "none"

}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

document.addEventListener('DOMContentLoaded', function (event) {

  var dataText = ["nitiatee", "nnovatee", "nspiree"];
  // var i = 4

  function displayCompleteText(a) {
    document.getElementById("RiiiText").style.display = "None";
    document.getElementById("Rrotate").style.animation = "rotation 6.00s infinite linear";
    document.getElementById("Rrotate").style.animationPlayState = "running";
    setTimeout(a, 2000);
  }


  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i + 1 < (text.length)) {

      // add next character to h1
      document.getElementById("RiiiText").style.display = "Flex";
      document.getElementById("Rrotate").style.removeProperty("animation");
      document.getElementById("RiiiText").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function () {
        typeWriter(text, i + 1, fnCallback)
      }, 100)
    }
    else if (i + 1 === (text.length)) {
      async function demo(text, i, fnCallback) {
        await sleep(1600); // full text display 
        for (let m = text.length - 1; m > -2; m--) {
          if (m != 0) {
            // console.log(text.substring(0, m) + '<span aria-hidden="true"></span>')
            document.getElementById("RiiiText").innerHTML = text.substring(0, m) + '<span aria-hidden="true"></span>';
            setTimeout(function () {
              // console.log();
            }, 0)
            await sleep(70); //erase speed
          }
          else {
            typeWriter(text, i + 2, fnCallback)
          }
        }
        console.log('Done');
      }
      demo(text, i, fnCallback)

    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      setTimeout(function () {
        displayCompleteText(fnCallback)
      }, 10) //after text goes and animation starts
    }
  }
  // start a typewriter animation for a text in the dataText array
  function StartTextAnimation(i) {
    if (typeof dataText[i] == 'undefined') {
      setTimeout(function () {
        StartTextAnimation(0);
      }, 0);
    }
    // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
      typeWriter(dataText[i], 0, function () {
        document.getElementById("Rrotate").style.removeProperty("animation");
        document.getElementById("Rrotate").style.transform = "rotate(0deg)";
        // console.log("hii");
        // after callback (and whole text has been animated), start next text
        StartTextAnimation(i + 1);
      });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});

// Rudra JS end



//Aditya JS start
let cubes = document.querySelectorAll(".image-cube");
let cube = document.querySelectorAll(".image-cube");
let btnNext = document.querySelector("#next");
let btnPrev = document.querySelector("#prev");

extra();
function extra(){
	document.querySelector("#next").click();
	setTimeout(()=>{
		extra();
	},5000);
}

function rotateCube(i) {
  cubes[i].style.transform = `rotateY(${pos}deg)`;
}
let pos = 0;

btnNext.addEventListener("click", () => {

  pos -= 90;
  // for (var i=0;i < cubes.length;i++){
  // 	setTimeout(rotateCube(i),5000);
  // }
  cubes[0].style.transform = `rotateY(${pos}deg)`;
  console.log(cubes[0].style.transform)

  setTimeout(() => {
    cubes[1].style.transform = `rotateY(${pos}deg)`;
  }, 00)
  setTimeout(() => {
    cubes[2].style.transform = `rotateY(${pos}deg)`;
  }, 00)

});


btnPrev.addEventListener("click", () => {
  console.log('hi');
  pos += 90;
  cubes[0].style.transform = `rotateY(${pos}deg)`;
  setTimeout(() => {
    cubes[1].style.transform = `rotateY(${pos}deg)`;
  }, 00)
  setTimeout(() => {
    cubes[2].style.transform = `rotateY(${pos}deg)`;
  }, 00)

});


//Aditya js ends

// Form js
let form = document.querySelector("#myForm");
form.addEventListener
  ('submit',
    (e) => {
      e.preventDefault();

      document.querySelector("#sub").innerHTML = "Submitting...";
      console.log('submitted')
      let data = new FormData(form);
      fetch("https://script.google.com/macros/s/AKfycbxBEfgK5p_dVdOOSPLJjGwNwQMCKt98V_OoD3nZ5OuyJDUtCHvdWEfJlDORjTJ_8jdf/exec", { method: "POST", body: data })
        .then(res => res.text())
        .then(data => {
          document.querySelector("#sub").innerHTML = "Done";
          document.querySelector("#sub").style.backgroundImage = "none";
          document.querySelector("#sub").style.backgroundColor = "#212B85";
          document.querySelector("#container h2").innerHTML = "Subscribed";
          
          setTimeout(() => {
            document.querySelector("#sub").innerHTML = "Submit";
            document.querySelector("#sub").style.backgroundImage = "linear-gradient(to left, rgba(255, 146, 202, 0.75) 0%, rgba(145, 149, 251, 0.86) 100%)";
          }, 5000);

          document.getElementById("myForm").reset();
        });
    })


let navMenu = document.querySelector("#navMenu");

navMenu.addEventListener("click", () => {
  navMenu.classList.toggle("active");
}

)

