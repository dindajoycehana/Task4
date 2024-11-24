document
    .getElementById('registrationForm')
    .addEventListener('submit', function (event) {
        const fileInput = document.getElementById('file');
        const file = fileInput.files[0];
        const password = document.getElementById('password').value;
        if (file) {
            if (file.type !== 'text/plain') {
                alert('Hanya file teks (.txt) yang diizinkan.');
                event.preventDefault();
            }
            if (file.size > 2 * 1024 * 1024) {
                // 2MB limit
                alert('Ukuran file maksimal 2MB.');
                event.preventDefault();
            }
        }
        const passwordPattern = /^(?=.[a-z])(?=.[A-Z]).{8,}$/;
        if (!passwordPattern.test(password)) {
            alert(
                'Password harus memiliki minimal 8 karakter, termasuk satu huruf besar dan satu huruf kecil.'
            );
            event.preventDefault();
        }
    });