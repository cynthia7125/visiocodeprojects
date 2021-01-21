var ajax = new XMLHttpRequest();
var method = "GET";
var url = "http://localhost/visiocodeprojects/supermarketpick.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);

ajax.send();

ajax.onreadystatechange = function(){
  if (this.readyState == 4 && this.status == 200){
    
    var data = JSON.parse(this.responseText);
    var html = "";

    console.log(data);
        html += "<tr ><th>Pick a supermarket</th></tr>";

        for (var a = 0; a < data.length; a++){
            

            html += "<tr><td><label class='container'><input class='btn' id='b1' type='radio' name='supermarket' >"+data[a].Supermarket_name+"<span class='checkmark'></span></label><br></td></td></tr>";  
            var Supermarketname = data[a];
            var val;
            // get list of radio buttons with specified name
                      
            // loop through list of radio buttons
            for (var i=0; i<Supermarketname.length; i++) {
                if ( Supermarketname[i].checked ) { // radio checked?
                    val = Supermarketname[i].value; // if so, hold its value in val
                    break; // and break out of for loop
                }
            }
            console.log(val);
        }
        
        html += "<a href='index.html' ><input style='color: #2F4F4F; float: right; margin: 15px;' class='button' id='submit' name='submit' type='submit' value='submit' class='panel-footer'></a>";
        
    
       document.getElementById("data").innerHTML = html;
    }   
    
    }  
   

  
   