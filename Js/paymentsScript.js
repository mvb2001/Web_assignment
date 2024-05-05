function alertButton() {
    var y = document.getElementById("sCode").value;
    if (y == "" || y == null) {
        alert("Please fill the security code!");
        return false;
    }
    else {
        alert("Check the card number which you entered!");
    }
}
function promptButton() {
    var x = document.getElementById("cardNo").value;
    var a = document.getElementById("ownerName").value;
    var b = document.getElementById("date").value;
    var c = document.getElementById("sCode").value;
    if (x != "" || a != "" || b != "" || c != "") {
        var response = confirm("Do you need to clear all data?");
    }
    else {
        alert("No any payment details you filled!");
    }
}