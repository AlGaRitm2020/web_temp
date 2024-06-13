
var count = 0;
document.getElementById("myButton").onclick = function () {

  count++;
  if (count % 2 == 0) {
    document.getElementById("demo").innerHTML = "";
  }
  else {
    // create new elem 'img'
    var img = document.createElement("img");
    // set source
    img.src = 'img/hacked.png'; 
    // adding img to Paragraph
    document.getElementById("demo").appendChild(img);

  }


}
