function register() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'a.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText);
                }
            };
            xhr.send('username=' + username + '&password=' + password);
        }

