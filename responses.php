<script>
  function send_data(){
    var form_data = document.getElementsByClassName("gformresponseslink-veiyo#0002"); //retrieve filled form data
    var i;
    var data = [];
    for(i=0; i<form_data.length; i++){
      data.push(form_data[i].value);
    }
    google.script.run.saveData(data); // veiyo#0002
    document.getElementById("form").style.display = "none"; // veiyo#0002
    document.getElementById("completion-msg").style.display = "block"; // veiyo#0002
  }
</script>
