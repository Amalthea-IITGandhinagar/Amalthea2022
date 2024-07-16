const route1 = document.querySelector(".rou1")
const route2 = document.querySelector(".rou2")
const route3 = document.querySelector(".rou3")
const route4 = document.querySelector(".rou4")
const rou_info_pa = document.querySelector(".rou_info_pa")
const con_p1 = document.querySelector(".con_p1")
const con_p2 = document.querySelector(".con_p2")
const bus_routes = document.querySelector(".bus_routes")

route1.addEventListener("click",()=>{
  $("#rou_info_pa").hide();
  document.querySelector("#rou_info_pa").innerHTML = "Coming Soon";
  $("#rou_info_pa").delay(1000).fadeIn();
  //

  con_p2.innerHTML = "Coming Soon";
})

route2.addEventListener("click",()=>{
  $("#rou_info_pa").hide();
  document.querySelector("#rou_info_pa").innerHTML = "Coming Soon";
  $("#rou_info_pa").delay(300).fadeIn();
})

route3.addEventListener("click",()=>{
  $("#rou_info_pa").hide();
  document.querySelector("#rou_info_pa").innerHTML = "Coming Soon";
  $("#rou_info_pa").delay(300).fadeIn();
})

route4.addEventListener("click",()=>{
  $("#rou_info_pa").hide();
  document.querySelector("#rou_info_pa").innerHTML = "Coming Soon";
  $("#rou_info_pa").delay(300).fadeIn();
})
bus_routes.addEventListener("click",()=>{
  $("#rou_info_pa").hide();
  document.querySelector("#rou_info_pa").innerHTML = "IIT Gandhinagar is running free shuttle services through all the routes shown here. Click on routes for details of the bus routes ald their timings.";
  $("#rou_info_pa").delay(300).fadeIn();

})

function preloaderFunction() {

  document.querySelector(".Rpreload").style.display = "none"
  document.querySelector(".zwrap").style.display = "initial"
}
