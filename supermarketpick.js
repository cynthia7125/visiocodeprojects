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

    function onlyUnique(value, index, self) {
        return self.indexOf(value) === index;
      }
      
      // usage example:
    var unique = data.filter(onlyUnique);
    console.log(unique);
        html += "<tr ><th>Pick a supermarket</th></tr>";

        for (var a = 0; a < data.length; a++){
            
            // var b = data.splice(data[a],data[a]);
            html += "<tr><td><label class='container'><input class='btn' id='b1' type='radio' name='supermarket' >"+data[a].Supermarket_name+"<span class='checkmark'></span></label><br></td></td></tr>";  
            var Supermarketname = data[a];
            var val;
            // get list of radio buttons with specified name
            for (var i=0; i<data.length; i++) {
                if ( data[i].checked === data[a].Supermarket_name) { // radio checked?
                    val = data[i].checked;// if so, hold its value in val
                    for (var i = 0; i < val.length && !found; i++) {
                        if (val[i] === data[i].value) {
                            
                            
                        }
                    } 
                    
                }console.log(Supermarketname);
                
            }
            // loop through list of radio buttons
        }
      
        html += "<a href='index.html' ><input style='color: #2F4F4F; float: right; margin: 15px;' class='button' id='submit' name='submit' type='submit' value='submit' class='panel-footer'></a>";
        
    
       document.getElementById("data").innerHTML = html;
    }   
    
    }  
   

  
   