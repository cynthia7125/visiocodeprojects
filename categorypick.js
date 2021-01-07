var ajax = new XMLHttpRequest();
var method = "GET";
var url = "http://localhost/visiocodeprojects/categorypick.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);

ajax.send();

ajax.onreadystatechange = function(){
  if (this.readyState == 4 && this.status == 200){

      var data = JSON.parse(this.responseText);
          var html = "";
    // .then(res => res.json()) // comment this out for now
    // .then(res => res.text())          // convert to plain text
    // .then(text => console.log(text)) 
    // var data = JSON.parse(this.responseText);
    console.log(data);

    for (var a = 0; a < data.length; a++){
      var itemcategoryname = data[a].Item_category_name;


      if (activation == 1){
        
        html = "<input type='checkbox' id='vehicle1' name='vehicle1' value='Bike'>";
        html = "<label for='vehicle1'>"+itemcategoryname+"</label><br>";  

        
        }
      }
document.getElementById("data").innerHTML = html;
    }
  }
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("data");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  