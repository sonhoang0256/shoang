function makeEquation() {
    a = document.getElementById("a").value;
    b = document.getElementById("b").value;
    equation = a + "x + " + b + " =0";
    document.getElementById("equation").innerHTML = equation;
}
function calEquation() {
    a = document.getElementById("a").value;
    b = document.getElementById("b").value;
    x = -b / a;
    document.getElementById("result").innerHTML = "x=" + x;
    return false;
}