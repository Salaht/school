var buttons = document.getElementsByClassName("Button");
var display = document.getElementById("resultaat");
var legen = document.getElementById("Clear");
//var Calculate = document.getElementById("Calc");


var getal1 = "";
var getal2 = "";
var operator = ["*","+","-","/"];
var store = "";


	//zodra er een opperator is dan is het getal war ervoor staat het getal 1 anders is het getal2.
	// je moet de operator opslaan in een store variable en daar een switch op uitvoeren.
	//en de uitkomst returnen

function clear(){
    display.innerText = "";
    getal1 = "";
    getal2 = "";
    store = "";
    }

 legen.addEventListener("click", clear);

for ( var i = 0; i < buttons.length; i++){
     buttons[i].addEventListener("click", Display);
    }



function Display(){
    display.innerText += this.innerText;

    var getal = this.innerText;

    if (getal == "=")
    {
    	var uitkomst;

    	switch(store) {
            case "+":
                uitkomst = parseInt(getal1) + parseInt(getal2);
                break;
            case "-":
                uitkomst = parseInt(getal1) - parseInt(getal2);
                break;
            case "*":
                uitkomst = parseInt(getal1) * parseInt(getal2);
                break;
            case "/":
                uitkomst = parseInt(getal1) / parseInt(getal2);
                break;
                default:
                
        }
        clear();
        display.innerText = uitkomst;
        getal1 = uitkomst;
    }

    else
    {
    	if (store == "")
    	{
    		getal1 += this.innerText;
    	}

    	else
    	{
    		getal2 += this.innerText;
    	}
    }

    if(operator.indexOf(this.innerText) != -1)
    {
    	store = this.innerText;
    }
}









 






	








