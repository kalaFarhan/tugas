function onGrade() {
    let a=document.getElementById("nilai").value
    if (a == "100") {
        alert("anda mendapat A")
    } else if (a >= "80"){
        alert("anda mendapat B")
    } else if (a >= "75") {
        alert("anda mendapat C")
    } else if (a >= "0") {
        alert("anda mendapat D")
    } else {
        alert("Silahkan isi terlebih dahulu")
    }
}