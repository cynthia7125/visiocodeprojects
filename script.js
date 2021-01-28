
const name = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form');

var database = openDatabase("offer", "1.0", "offer", 65535)
function werty(){

}
function resetForm(){
    document.getElementById("ID").value = "";
    document.getElementById("username").value = "";
    document.getElementById("email").value = "";
}
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById("ID").value = selectedRow.cells[0].innerHTML;
    document.getElementById("username").value = selectedRow.cells[1].innerHTML;
    document.getElementById("email").value = selectedRow.cells[2].innerHTML;
}

function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.ID;
    selectedRow.cells[1].innerHTML = formData.username;
    selectedRow.cells[2].innerHTML = formData.email;
    
}


function OpenURL(location) {
    chrome.tabs.create({ url: location });
}


