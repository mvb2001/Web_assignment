function promptButton() {
    var x = document.getElementById("uname").value;
    var a = document.getElementById("uemail").value;
    var b = document.getElementById("question").value;
    if (x != "" || a != "" || b != "") {
        var response = confirm("Do you need to clear all data?");
    }
    else {
        alert("No any details you filled!");
    }
}

function alertButton() {
    var x = document.getElementById("uname").value;
    var a = document.getElementById("uemail").value;
    var b = document.getElementById("question").value;
    if (x == "" || a == "" || b == "") {
        alert("Please fill the all details!");
        return false;
    }
}