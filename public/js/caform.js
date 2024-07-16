
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}



// CA Form js
let caform = document.querySelector("#CA_regestration");
caform.addEventListener
    ('submit',
        (e) => {
            e.preventDefault();

            document.querySelector("#CA_regestration_sub").innerHTML = "Submitting...";

            let data = new FormData(caform);
            fetch("https://script.google.com/macros/s/AKfycbwarj8FqpbN3JHPMmEuTjBtCKulRGJ0v4aJi4x5nJc71AIDYFxRhVrJN4geYhv1Lq4/exec", 
            { method: "POST", 
            body: data })
                .then(res => res.text())
                .then(data => {
                    console.log(data)
                    document.querySelector("#CA_regestration_sub").innerHTML = "Done";
                    setTimeout(() => {
                        document.querySelector("#CA_regestration_sub").innerHTML = "Register For Another Person";
                      }, 5000);
                    // document.querySelector("#container h2").innerHTML = "Subscribed";
                    // document.getElementById("CA_regestration").reset();
                });
        })


