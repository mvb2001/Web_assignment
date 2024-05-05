function promptButton() {
    var a = document.getElementById("fname").value;
    var b = document.getElementById("lname").value;
    var c = document.getElementById("tel").value;
    var d = document.getElementById("email").value;
    var e = document.getElementById("issue").value;

    if (a != "" || b != "" || c != "" || d != "" || e != "") {
        var response = confirm("Do you need to clear all data?");
    }
    else {
        alert("No any data you filled!");
    }
}