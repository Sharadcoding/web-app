document.addEventListener("DOMContentLoaded", function () {
    // Wait for the content to load, then hide the loading screen
    setTimeout(function () {
        document.getElementById("loading-screen").style.display = "none";
    }, 3000); // 3000 milliseconds = 3 seconds
});
