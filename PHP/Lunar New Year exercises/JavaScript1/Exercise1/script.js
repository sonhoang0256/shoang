function valiDate() {
    number = Number(document.getElementById("number").value);
    if ((number >= 1 && number <= 10) || (number >= 50 && number <= 100)) {
        alert("Hợp lệ");
    } else {
        document.getElementById("result").innerText = "Không nằm trong khoảng 1-10 hoặc 50-100";
        return false;
    }
}