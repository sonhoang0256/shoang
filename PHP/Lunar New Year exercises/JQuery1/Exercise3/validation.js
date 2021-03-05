function regexEmail(email) {
    re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validateForm() {
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    country = document.getElementById("country").value;
    if (regexEmail(email)) {
        document.getElementById("result").innerHTML = `Name:${ name}<br>Email:${ email}<br>Country:${ country}`;
    } else {
        document.getElementById("notify").innerText = "Email không đúng định dạng";
    }
    return false;
}