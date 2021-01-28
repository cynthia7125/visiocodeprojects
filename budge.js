var ajax = new XMLHttpRequest();
var method = "GET";
var url = "http://localhost/visiocodeprojects/budge.php";

var asynchronous = true;

ajax.open(method, url, asynchronous);


ajax.send();


ajax.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
  
        var data = JSON.parse(this.responseText);
            var html = ""; 
            // var arrString = data.join(", ");

            console.log(data);
            // for (var a = 0; a < data.length; a++){
            //     var Bvalue = data[a].toString();
                chrome.browserAction.setBadgeText({text: ""+data.length+""});

            // }
        
        document.getElementById("data").innerHTML = html;
    }
}