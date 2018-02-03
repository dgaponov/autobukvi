@extends('layouts.main')

@section('content')
<!--banner-->
<div class="landing-banner block-scroll" data-section-name="Главная">
    <nav class="banner-menu">
        <div class="banner-logo"><a href="#">Автобуквы</a></div>
        <div class="start-here">
            <a href="#" data-toggle="modal" data-target="#Modal" class="btn ui-btn info">Участвовать в конкурсе</a>
        </div>
    </nav>

    <div class="banner-content">
        <h1 class="banner-title">Автобуквы</h1>
        <p>азбука для детей, игрушки и обучающие мультфильмы</p>
    </div>

    <a href="#" class="btn ui-btn btn-planeta">
        Поддержать проект на PLANETA.RU
    </a>

</div>
<!--end banner-->

<!--connecting people-->
<div class="connect block-scroll" data-section-name="Что такое?">
    <h1 class="text-center">Что такое автобуквы?</h1>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="connect-img">
                <img src="img/481x481.png" alt="">
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="connect-info">
                <p>
                    АВТОБУКВЫ - это спасательная организация, состоящая из 33 агентов: говорящих автомобилей, вертолета и даже прицепов.
                </p>
                <p>
                    Каждый Агент в АВТОБУКВАХ обозначен буквой русского алфавита от А до Я, имеет очертания формы кузова в виде соответствующей ему буквы, а также изображение этой буквы на передней и/или задней частях кузова в виде эмблемы.
                </p>
                <p>
                    АВТОБУКВЫ - это целый методический комплекс по изучению алфавита в игровой форме для детей от 1 года, в состав которого входят:
                </p>
                <div class="row">
                <div class="col-md-4 text-center">
                    <span class="text-center">Азбука</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40%
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <span>Игрушки</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40%
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <span>Мультфильм</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40%
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end connecting people-->


<!--top rated-->
<div class="top-rated block-scroll" data-section-name="Последние добавленные персонажи">
    <h2 class="text-center">Конкурс персонажей «33 агента»</h2>
    <div class="row contest-pluses">
        <div class="col-md-4">
            <h4>33 номинации</h4>
            <p>Отдельная номинация для каждой буквы русского
                алфавита. Можно участвовать во всех.</p>
        </div>
        <div class="col-md-4">
            <h4>330 000 Р призовой фонд</h4>
            <p>Общий денежный призовой фонд без
                учета подарков от партнеров.
                </p>
        </div>
        <div class="col-md-4">
            <h4>Народное голосование</h4>
            <p>Любой может принять участие в голосовании.
                Участвуйте в создании детского продукта!</p>
        </div>
    </div>
    <h3 class="text-center">Последние добавленные персонажи</h3>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="user-card">
                <div class="top">
                    <div class="user-photo">
                        <div><img src="img/user.png" alt=""></div>
                        <span><i class="fa fa-star text-rose"></i></span>
                    </div>
                    <div class="user-details">
                        <h6 class="name">Susan Merly</h6>
                        <div class="em-web">
                            <span>@susanm</span>
                            <span>|</span>
                            <span>merly.com</span>
                        </div>
                        <div class="location"><strong>San Fransisco</strong></div>
                    </div>
                    <div class="user-counts">
                        <div class="count-item">
                            <i class="fa fa-twitter text-info"></i>
                            <strong>1241</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-heart text-mayan"></i>
                            <strong>786</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-envelope text-rose"></i>
                            <strong>569</strong>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <p>
                        Short ribs cow pork chop itin pancetta sage jerky
                        bresaola frankfurter swine ribeye pork loin.
                        Leberkas ham.
                    </p>
                </div>
                <div class="bottom">
                    <strong>Services</strong>
                    <span>Design . Tutor . Cook . Web . Developer . Prototype</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="user-card">
                <div class="top">
                    <div class="user-photo">
                        <div><img src="img/user.png" alt=""></div>
                        <span><i class="fa fa-star text-rose"></i></span>
                    </div>
                    <div class="user-details">
                        <h6 class="name">Brandon Zen</h6>
                        <div class="em-web">
                            <span>@randon</span>
                            <span>|</span>
                            <span>bzen.com</span>
                        </div>
                        <div class="location"><strong>Los Angeles</strong></div>
                    </div>
                    <div class="user-counts">
                        <div class="count-item">
                            <i class="fa fa-twitter"></i>
                            <strong>1241</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-heart text-mayan"></i>
                            <strong>786</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-envelope"></i>
                            <strong>569</strong>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <p>
                        Short ribs cow pork chop itin pancetta sage jerky
                        bresaola frankfurter swine ribeye pork loin.
                        Leberkas ham.
                    </p>
                </div>
                <div class="bottom">
                    <strong>Services</strong>
                    <span>Design . Tutor . Cook . Web . Developer . Prototype</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="user-card">
                <div class="top">
                    <div class="user-photo">
                        <div><img src="img/user.png" alt=""></div>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                    <div class="user-details">
                        <h6 class="name">Carol Mitcho</h6>
                        <div class="em-web">
                            <span>@carol</span>
                            <span>|</span>
                            <span>mitc.com</span>
                        </div>
                        <div class="location"><strong>New York</strong></div>
                    </div>
                    <div class="user-counts">
                        <div class="count-item">
                            <i class="fa fa-twitter text-info"></i>
                            <strong>1241</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-heart text-mayan"></i>
                            <strong>786</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-envelope text-rose"></i>
                            <strong>569</strong>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <p>
                        Short ribs cow pork chop itin pancetta sage jerky
                        bresaola frankfurter swine ribeye pork loin.
                        Leberkas ham.
                    </p>
                </div>
                <div class="bottom">
                    <strong>Services</strong>
                    <span>Design . Tutor . Cook . Web . Developer . Prototype</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="user-card">
                <div class="top">
                    <div class="user-photo">
                        <div><img src="img/user.png" alt=""></div>
                        <span><i class="fa fa-star text-rose"></i></span>
                    </div>
                    <div class="user-details">
                        <h6 class="name">Jack Rozov</h6>
                        <div class="em-web">
                            <span>@jacki</span>
                            <span>|</span>
                            <span>rozov.com</span>
                        </div>
                        <div class="location"><strong>Mumbai</strong></div>
                    </div>
                    <div class="user-counts">
                        <div class="count-item">
                            <i class="fa fa-twitter"></i>
                            <strong>1241</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-heart"></i>
                            <strong>786</strong>
                        </div>
                        <div class="count-item">
                            <i class="fa fa-envelope text-rose"></i>
                            <strong>569</strong>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <p>
                        Short ribs cow pork chop itin pancetta sage jerky
                        bresaola frankfurter swine ribeye pork loin.
                        Leberkas ham.
                    </p>
                </div>
                <div class="bottom">
                    <strong>Services</strong>
                    <span>Design . Tutor . Cook . Web . Developer . Prototype</span>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn ui-btn btn-all">
        Все персонажи
    </a>
</div>
<!--end top rated-->

<!--testimonials-->
<div class="testimonials block-scroll" data-section-name="Партнеры">
    <h3 class="text-center">Партнеры проекта</h3>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="testimonial-item">
                <div class="testm-img">
                    <img src="img/user.png" alt="">
                </div>
                <h5>Megan Trevor</h5>
                <i>Graphic Designer</i>
                <p>
                    Bacon ipsum dolor amet cow salami pork pastrami.
                    Pork loin beef ribs drumstick t-bone kielbasa chuck.
                    Bresaola meatball ribeye pig doner boudin. Meatloaf rump spare ribs,
                    salami drumstick corned beef ball tip jerky frankfurter.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-item">
                <div class="testm-img">
                    <img src="img/user.png" alt="">
                </div>
                <h5>Victor Zen</h5>
                <i>Web Developer</i>
                <p>
                    Bacon ipsum dolor amet cow salami pork pastrami.
                    Pork loin beef ribs drumstick t-bone kielbasa chuck.
                    Bresaola meatball ribeye pig doner boudin. Meatloaf rump spare ribs,
                    salami drumstick corned beef ball tip jerky frankfurter.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-item">
                <div class="testm-img">
                    <img src="img/user.png" alt="">
                </div>
                <h5>Carol Mitcho</h5>
                <i>Photographer</i>
                <p>
                    Bacon ipsum dolor amet cow salami pork pastrami.
                    Pork loin beef ribs drumstick t-bone kielbasa chuck.
                    Bresaola meatball ribeye pig doner boudin. Meatloaf rump spare ribs,
                    salami drumstick corned beef ball tip jerky frankfurter.
                </p>
            </div>
        </div>
    </div>
</div>
<!--end testimonials-->


<!--footer section-->
<div class="footer">
    <div class="row">
        <div class="col-lg-2 col-md-6">
            <div class="footer-sec">
                <h6>Who We Are</h6>
                <a href="#">About Us</a>
                <a href="#">Careers</a>
                <a href="#">Feature Tour</a>
                <a href="#">Presentation</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="footer-sec">
                <h6>Support</h6>
                <a href="#">Knowledge Base</a>
                <a href="#">Video Guides</a>
                <a href="#">Report an Issue</a>
                <a href="#">Terms of Use</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="footer-sec">
                <h6>Contact Us</h6>
                <a href="mailto:someone@example.com">someone@example.com</a>
                <span>10100 thuy NY</span>
                <span>+1 285 6658 5476215</span>
                <div class="footer-social">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook-f"></i>
                    <i class="fa fa-rss"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-google-plus"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="footer-sec">
                <h6>News Letter</h6>
                <span>Subscribe to our newsletter and getter some cool staff every week.</span>
                <form action="/" method="post">
                    <input type="email" required placeholder="Your Email Here">
                    <button type="submit" class="btn ui-btn dark-blue"><i class="fa fa-send-o"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-strip">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <h3 class="footer-logo">Автобуквыас</h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav>
                    <a href="#">О проекте</a>
                    <a href="#">33 героя</a>
                    <a href="#">Условия конкурса</a>
                    <a href="#">Контакты</a>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <p class="copyright"><i  class="fa fa-copyright"></i> 2018 - Автобуквы</p>
            </div>
        </div>
    </div>
</div>

<!--end footer section-->
@endsection