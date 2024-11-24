document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var file = document.getElementById('file').value;
    var age = document.getElementById('age').value;

    if (file.type!="text/plain"){
        alert('Type is not match');
        event.preventDefault();
    }

    if (file.size >5*1024*1024){
        alert('File size is too big');
        event.preventDefault();
    }
});