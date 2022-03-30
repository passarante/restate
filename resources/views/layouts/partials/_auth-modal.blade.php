<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder tabs-act">
        <div class="main-register-wrapper modal_main fl-wrap">
            <div class="main-register-header color-bg">
                <div class="main-register-logo fl-wrap">
                    <img src="{{ asset('theme/images/white-logo.png') }}" alt="">
                </div>
                <div class="main-register-bg">
                    <div class="mrb_pin"></div>
                    <div class="mrb_pin mrb_pin2"></div>
                </div>
                <div class="mrb_dec"></div>
                <div class="mrb_dec mrb_dec2"></div>
            </div>
            <div class="main-register">
                <div class="close-reg"><i class="fal fa-times"></i></div>
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Giriş</a>
                    </li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Kayıt</a></li>
                </ul>
                <!--tabs -->
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                            <div class="custom-form">
                                <form method="post" name="registerform" action="{{ route('login') }}">
                                    @csrf
                                    <label>Email Addresiniz * <span class="dec-icon"><i
                                                class="fal fa-user"></i></span></label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Şifreniz * <span class="dec-icon"><i
                                                    class="fal fa-key"></i></span></label>
                                        <input name="password" type="password" autocomplete="off"
                                            onClick="this.select()" value="">
                                        <span class="eye"><i class="fal fa-eye"></i> </span>
                                    </div>
                                    <div class="lost_password">
                                        <a href="#">Şifrenizi mi unuttunuz?</a>
                                    </div>
                                    <div class="filter-tags">
                                        <input id="check-a3" type="checkbox" name="remember">
                                        <label for="check-a3">Beni hatırla</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log_btn color-bg"> Giriş </button>
                                </form>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form"
                                        id="main-register-form2" action="{{ route('register') }}">
                                        @csrf
                                        <label>İsim Soyisim * <span class="dec-icon"><i
                                                    class="fal fa-user"></i></span></label>
                                        <input name="name" type="text" onClick="this.select()" value="" required>
                                        @error('name')
                                            <p>
                                                <span style="color:red; font-size:11px;">{{ $message }}</span>
                                            </p>
                                        @enderror

                                        <label>Email Addresiniz * <span class="dec-icon"><i
                                                    class="fal fa-envelope"></i></span></label>
                                        <input name="email" type="text" onClick="this.select()" value="" required>
                                        @error('email')
                                            <p>
                                                <span style="color:red; font-size:11px;">{{ $message }}</span>
                                            </p>
                                        @enderror

                                        <div class="pass-input-wrap fl-wrap">
                                            <label>Şifreniz * <span class="dec-icon"><i
                                                        class="fal fa-key"></i></span></label>
                                            <input name="password" type="password" autocomplete="off"
                                                onClick="this.select()" value="" required>
                                            <span class="eye"><i class="fal fa-eye"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <p>
                                                <span style="color:red; font-size:11px;">{{ $message }}</span>
                                            </p>
                                        @enderror
                                        <div class="filter-tags ft-list">
                                            <input id="check-a2" type="checkbox" name="check">
                                            <label for="check-a2"> <a href="#">Gizlilik Politikası</a>
                                                ve <a href="#">Kullanım Koşullarını kabul ediyorum</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="log_btn color-bg"> Kayıt ol </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#" class="facebook-log"> Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
