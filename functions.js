function getId(matricule) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    xmlhttp.open("GET", 'mat.php?matricule=' + matricule, true);
    xmlhttp.send();
}