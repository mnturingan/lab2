//Checkbox

document.getElementById("myButton").onclick = function () {
  const aloneBtn = document.getElementById("aloneBtn");
  const dateBtn = document.getElementById("dateBtn");
  const codeBtn = document.getElementById("codeBtn");

  if (aloneBtn.checked) {
    document.getElementById("myLabel").innerHTML = "Wow that sucks but same";
  } else if (dateBtn.checked) {
    document.getElementById("myLabel").innerHTML = "Edi sanaol";
  } else {
    document.getElementById("myLabel").innerHTML = "You can do better";
  }
};
