<!--pre-loader-->
<div class="preloader"><span class="beacon"></span></div>
<!--end pre-loader-->

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="auth-wrapper">
                    <div class="form-tabs">
                        <a href="#" data-frm="login-frm" class="tab active">Вход</a>
                        <a href="#" data-frm="register-frm" class="tab">Регистрация</a>
                    </div>
                    <form class="login-frm frm" action="#" method="post">
                        <div class="form-group">
                            <label for="email1">Email:</label>
                            <input type="email" required="" name="email" autocomplete="email" id="email1">
                        </div>
                        <div class="form-group">
                            <label for="pass1">Пароль:</label>
                            <input type="password" required="" name="password" id="pass1">
                        </div>
                        <div class="remember-me">
                            <div>
                                <input type="checkbox" id="test1">
                                <label for="test1">Запомнить меня</label>
                            </div>
                            <a href="#">Забыли пароль?</a>
                        </div>
                        <div class="sub-btn">
                            <input type="submit" class="btn ui-btn info" value="Войти">
                        </div>
                    </form>
                    <form class="register-frm frm hide" action="#" method="post">
                        <div class="form-group">
                            <label for="email2">Email:</label>
                            <input type="email" required="" name="email" autocomplete="email" id="email2">
                        </div>
                        <div class="form-group">
                            <label for="pass3">Пароль:</label>
                            <input type="password" required="" name="password" id="pass3">
                        </div>
                        <div class="form-group">
                            <label for="pass2">Повтор пароля:</label>
                            <input type="password" required="" name="password" id="pass2">
                        </div>
                        <div class="sub-btn">
                            <input type="submit" class="btn ui-btn info" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script src="3rdparty/js/jquery-3.2.1.min.js"></script>
<script src="3rdparty/js/popper.js"></script>
<script src="3rdparty/js/bootstrap.js"></script>
<script src="3rdparty/jquery-nice-select-1.1.0/js/jquery.nice-select.js"></script>
<script src="3rdparty/OwlCarousel2-2.2.1/owl.carousel.min.js"></script>
<script src="3rdparty/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="3rdparty/js/jquery.scrolify.js"></script>
<script src="js/app.js"></script>