var pass = document.getElementById("password")
        pass.addEventListener('keyup', function(){
                checkPassword(pass.value)
        })

        function checkPassword(password){
                var strengthBar = document.getElementById("strength")
                var strength = 0;
                if(password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)){
                        strength += 1
                }
                if(password.match(/[~<>?]+/)){
                        strength += 1
                }
                if(password.match(/[!@$%^&()]+/)){
                        strength += 1
                }
                if(password.length > 5){
                        strength += 1
                }
                switch(strength){
                        case 0:
                                strengthBar.value = 20;
                                break
                        case 1:
                                strengthBar.value = 40;
                                break
                        case 2:
                                strengthBar.value = 60;
                                break
                        case 3:
                                strengthBar.value = 80;
                                break
                        case 4:
                                strengthBar.value = 100;
                                break
                }
        }
const name = document.getElementById('username');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    let message = []
    if (password.value.length <= 6){
        message.push('Password must be longer than 6 characters');
    }
    if (password.value === 'password'){
        message.push('Password cannot be password');
    }
    if (messages.length > 0){
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
    if(password !== confirmpassword){  
        e.preventDefault(); 
        message.push('Passwords did not match');  
    }
    else{
        location.replace('/login.php');
        message.push("Account created successfully");
    }
    
})
var email = document.getElementById("email")
        email.addEventListener('keyup', function(){
                checkEmail(email.value)
        })
    function checkEmail(email){
        var text = document.getElementById("email").value;
    
        var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
            if(regx.test(text)){
                document.getElementById("lbltext").innerHTML = "Valid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "green";
    
            }
            else{
                document.getElementById("lbltext").innerHTML = "InValid email";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "red";
            }
    } 
    function validate(){

        if(!document.getElementById("password").value==document.getElementById("confirm_password").value)alert("Passwords do no match");
        return document.getElementById("password").value==document.getElementById("confirm_password").value;
       return false;
        }

   