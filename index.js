var ajax = new XMLHttpRequest();
var method = "GET";
var url = "http://localhost/visiocodeprojects/index.php";
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
      var itemname = data[a].Item_name;
      var offername = data[a].Offer_name;
      var itemimage = data[a].Item_image;
      var supermarketname = data[a].Supermarket_name;
      var itemunitcost = data[a].Item_unit_cost;
      var savedpercentage = data[a].Saved_percentage;
      var originalunitcost = data[a].Original_unit_cost;

     
        
        html += "<tr id = 'tr'><td id = 'td' style = ' text-align: center;'><p style='background-color:white; color:black;'>"+itemname+"</p>";
        html += "<div id='' name='Offer_name' style='background-color: orange;font-size:17px; color:black;'>"+offername+"</div>";
        html += "<img src='image/"+itemimage+"' style='height: 160px; width: 300px;'>";
        html += "<div class='cta'>";
        html += "<a href='http://"+supermarketname+".co.ke name='add_to_cart' style='font-size:17px;'><div name='Supermarket_name' style='font-size:17px; color:black;'>Website: "+supermarketname+"</div></a>";
        html += "<hr><div name='Item_unit_cost' style='float:left; width:45%; color:black;''>Ksh."+itemunitcost+"</div>";
        html += "<div style='color:orange; float:right; width:45%; font-size:17px;' name='Saved_percentage' >-"+savedpercentage+"%</div><br/>";
        html += "<div name='Original_unit_cost' style='font-size:17px; width:45%; float: left; text-decoration: line-through; color:grey;'>Ksh."+originalunitcost+"</div>";
        html += "<br/><div id='maps' name='maps' ><a class='btn' id='b1' name='maps' href='http://localhost/visiocodeprojects/mapme.php' target='_blank'>Directions to "+supermarketname+"</a></div> ";
        html += "</div>";
        html += "</td></tr>";   

      
        
      }
document.getElementById("data").innerHTML = html;

      var count = data.length;
      var c = count ++;

      if (c){
          chrome.browserAction.setBadgeText({"text": c.toString()});
        }
      else{
        chrome.browserAction.setBadgeText({"text": "0"});
      }
    }
  }
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("data");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      // if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      // } 
    }
    
  //   let OnEvent = (doc) => {
  //     return {
  //         on: (event, className, callback) => {
  //             doc.addEventListener('click', (event)=>{
  //                 if(!event.target.classList.contains(className)) return;
  //                 callback.call(event.target, event);
  //             }, false);
  //         }
  //     }
  // };
  
  
  // OnEvent(document).on('click', 'btn', function (e) {
  //     window.console.log(this.value, e);
  // });
  
    // <script type='text/javascript' src='supermarketpick.js'></script>
  // chrome.storage.onChanged.addListener(function(chages, storage){
  
  // })