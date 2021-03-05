function calFactorial() {
    factorial = Number(document.getElementById("factorial").value); //get Factorial nummber;
    equation = "1"; //set default equation
    total = 1; //set default result
    if (factorial > 1) {
        for (i = 2; i <= factorial; i++) {
            total *= i;
            equation += "x" + i;
        }
    }
    document.getElementById("result").innerHTML = equation + "=" + total;
    return false;
}