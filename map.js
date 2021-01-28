// document.getElementById("maps").addEventListener("click", function() {
//   // document.getElementById("demo").innerHTML = "Hello World";
//   console.log(document.getElementById("maps").value)
// });
var oElement = document.getElementById("maps");
// Note that the addEvent function referred to below is a custom function, not built-in
addEvent(oElement, "click", handleClick);
function handleClick(){
  // This code below will fail because of IE's incorrect reference for the "this" keyword
  console.log(document.getElementById("maps").value)
}