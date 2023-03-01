/*displayDate*/
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}

/*alert hello world*/
document.getElementById("myBtn").addEventListener("click", function() {
  alert("Hello World!");
});

/*change color*/
function myFunction() {
  const myNodelist = document.querySelectorAll("p");
  for (let i = 0; i < myNodelist.length; i++) {
    myNodelist[i].style.color = "red";
  }
}