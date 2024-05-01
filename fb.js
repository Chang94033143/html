document.getElementById("loginForm").addEventListener("submit", function(event) {
   
    event.preventDefault();

   
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    
    var xhr = new XMLHttpRequest();

    
    var formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);

    
    xhr.open("POST", "a.php", true);

    
    xhr.responseType = "text";

    
    xhr.onload = function() {
        
        console.log(xhr.responseText);
    };

    
    xhr.send(formData);
});



