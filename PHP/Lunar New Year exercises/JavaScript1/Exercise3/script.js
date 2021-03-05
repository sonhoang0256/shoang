function findMinMax() {
    nummberArray = document.getElementsByClassName("number");
    max = Number(nummberArray[0].value);
    min = Number(nummberArray[0].value);
    for (i = 0; i < nummberArray.length; i++) {
        if (max < Number(nummberArray[i].value)) {
            max = Number(nummberArray[i].value);
        }
        if (min > Number(nummberArray[i].value)) {
            min = Number(nummberArray[i].value);
        }
    }
    document.getElementById("result").innerHTML = "<p>Max=" + max + "</p><p>Min=" + min + "</p>";
    return false;
}