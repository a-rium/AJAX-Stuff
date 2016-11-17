function ajaxCall() {
  // libreria offerta dal browser
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    // status - return code della richiesta http
    // 200 - richiesta ricevuta con successo
    if (this.readyState == 4 && this.status == 200) {
      // pagina html inviata in risposta dal server
      document.getElementById("canvas").innerHTML = JSON.parse(this.responseText)[1].nome;
    }
  };
  xhttp.open("GET", "service.php"); //HEI HEI HEI 
  xhttp.send();
}