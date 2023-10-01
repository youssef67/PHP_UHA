console.log("debut");

document.addEventListener("DOMContentLoaded", function() {
    var progressBar = document.getElementById('progress-bar');
    var width = 0;
    var interval = setInterval(function() {
        if (width >= 100) {
            clearInterval(interval);
            //window.location.href = 'pages/solo.php';
        } else {
            width++;
            progressBar.style.width = width + '%';
            progressBar.innerHTML = width + '%';
        }
        
    }, 10);
    
});


// var formTypeGame = document.getElementById('form-typeGame');
// console.log(formTypeGame);

// btnTypeGame.addEventListener('click', function() {
//     formTypeGame.style.display = 'none';
//     console.log("toto");
// }) 