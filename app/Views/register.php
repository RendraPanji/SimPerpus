<div class="container">
    <div class="card w-50 m-4" style="display: flex;">
        <h2 class="text-center mt-3">Pendaftaran Akun SimPerpus</h2>
        <form id="signup-form" method="POST" class="m-2" action="<?= base_url('register') ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
                <label for="emai">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="agrrement">
                <label class="form-check-label" for="exampleCheck1">Saya menyetujui syarat dan ketentuan</label>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>
    const signupForm = document.getElementById('signup-form');
    signupForm.addEventListener('submit', function(event){
        const namaInput = document.getElementById('nama');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const agrrementInput = document.getElementById('agrrement');
        
        if (!isValidName(nama.value)){
            alert('Nama tidak lengkap harus diisi minimal 3 karakter');
            namaInput.focus();
            event.preventDefault();
            return false;
        }
        if (!isValidEmail(email.value)){
            alert('email tidak valid');
            emailInput.focus();
            event.preventDefault();
            return false;
        }
        if (!isValidPassword(password.value)){
            alert('password harus diisi minimal 8 karakter');
            passwordInput.focus();
            event.preventDefault();
            return false;
        }
        if (!agrrementInput.checked){
            alert('anda harus menyetujui syarat dan ketentuan');
            // agrrementInput.focus();
            event.preventDefault();
            return false;
        }
    })

    function isValidName(nama){
        return nama.length >=3;
    }
    function isValidEmail(email){
        const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        return emailRegex.test(email);
    }
    function isValidPassword(password){
        return password.length >=8;
    }
</script>