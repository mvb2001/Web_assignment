function checkPassword() {
    if (document.getElementById("pwd1").value != document.getElementById("cfrmpwd1").value) {
        alert("Password Mismatched!");
        return false;
    }
    else {
        var y = document.getElementById("TandC");
        if (y.checked == false) {
            alert("You must agree with Terms and Conditions!");
            return false;
        }
        else {
            return true;
        }
    }
}
function promptButton() {
    var x = document.getElementById("fname").value;
    var a = document.getElementById("lname").value;
    var b = document.getElementById("nic").value;
    var c = document.getElementById("age").value;
    var d = document.getElementById("tel").value;
    var e = document.getElementById("email").value;
    var f = document.getElementById("pwd1").value;
    var g = document.getElementById("cfrmpwd1").value;
    if (x != "" || a != "" || b != "" || c != "" || d != "" || e != "" || f != "" || g != "") {
        var response = confirm("Do you need to clear all data?");
    }
    else {
        alert("No any personal details you filled!");
    }
}

function alertButton() {
    var x = document.getElementById("fname").value;
    var a = document.getElementById("lname").value;
    var b = document.getElementById("nic").value;
    var c = document.getElementById("age").value;
    var d = document.getElementById("tel").value;
    var e = document.getElementById("email").value;
    var f = document.getElementById("pwd1").value;
    var g = document.getElementById("cfrmpwd1").value;
    if (x == "" || a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "") {
        alert("Please fill the all details!");
        return false;
    }
}