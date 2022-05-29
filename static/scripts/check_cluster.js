var grupo0 = document.getElementById("grupo0");
var grupo1 = document.getElementById("grupo1");
var grupo2 = document.getElementById("grupo2");
var grupo3 = document.getElementById("grupo3");


var checkbox0 = document.getElementById('cbox0');
checkbox0.addEventListener("change", validaCheckbox0, false);
function validaCheckbox0()
{
  var checked = checkbox0.checked;
  if(checked){
    var els = document.querySelectorAll(".grupo0");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = '';  
    
  }
  else{
    var els = document.querySelectorAll(".grupo0");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = 'none';
  }
}


var checkbox1 = document.getElementById('cbox1');
checkbox1.addEventListener("change", validaCheckbox1, false);
function validaCheckbox1()
{
  var checked = checkbox1.checked;
  if(checked){
    var els = document.querySelectorAll(".grupo1");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = '';  
    
  }
  else{
    var els = document.querySelectorAll(".grupo1");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = 'none';
  }
}

var checkbox2 = document.getElementById('cbox2');
checkbox2.addEventListener("change", validaCheckbox2, false);
function validaCheckbox2()
{
  var checked2 = checkbox2.checked;
  if(checked2){
    var els = document.querySelectorAll(".grupo2");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = '';  
    
  }
  else{
    var els = document.querySelectorAll(".grupo2");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = 'none';
  }
}

var checkbox3 = document.getElementById('cbox3');
checkbox3.addEventListener("change", validaCheckbox3, false);
function validaCheckbox3()
{
  var checked3 = checkbox3.checked;
  if(checked3){
    var els = document.querySelectorAll(".grupo3");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = '';  
    
  }
  else{
    var els = document.querySelectorAll(".grupo3");
    for (var x = 0; x < els.length; x++)
        els[x].style.display = 'none';
  }
}

