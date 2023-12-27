defer>
        document.addEventListener('DOMContentLoaded', function () {
          const toggleSwitch = document.getElementById('toggleSwitch');
    
          toggleSwitch.addEventListener('change', function () {
            if (toggleSwitch.checked) {
              window.location.href = 'login.html';
            } else {
              window.location.href = 'index.html';
            }
          });
        });

        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
          }