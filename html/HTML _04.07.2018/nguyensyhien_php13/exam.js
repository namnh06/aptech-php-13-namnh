window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) { navbar.classList.add("sticky") } 
  else {navbar.classList.remove("sticky"); }
}

var str = "HỆ THỐNG ĐÀO TẠO CNTT QUỐC TẾ SOFTECH APTECH";
var n = str.length;
var i=1; 
  
hienthi(); 

function hienthi() {
  i++;
  document.getElementById("demo").innerHTML = str.substring(0, i);
  if (i>n) {i=1;}
  setTimeout(hienthi, 50);
} 
