<div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="post" action="index.php?aksi=login">
                            <h2>Form Login</h2>
                            <div>
                                <input name='username' type="text" class="form-control" placeholder="Username" required />
                            </div>
                            <div>
                                <input name='password' type="password" class="form-control" placeholder="Password" required />
                            </div>
                            <div>
                                <input type='submit' class='btn btn-default submit' value='Login'>
                                <a class="reset_pass" href="#">Lupa Password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Anda Pendaftar Baru?
                                    <a href="#signup" class="to_register"> Buat Akun Baru </a>
                                </p>
                            </div>
                        </form>
                    </section>
                </div>