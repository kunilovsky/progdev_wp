<?php /* Template Name: Главная страница */ ?>
<?php
get_header();
?>
<!-- Main -->
<main>
    <section>
        <div class="container mt-3 mt-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>
                        Разработка лендингов<br>
                        Интернет магазинов <br>
                        Мобильных приложений <br>
                        Площадок онлайн обучения
                    </h1>
                    <h2 class="mt-3 mt-sm-5">
                        Разработка под ключ, доработка и поддержка на ваш бюджет
                    </h2>
                    <button class="btn mt-3 mt-me-5 target__btn" data-bs-toggle="modal" data-bs-target="#target1">
                        Это дорого ?
                    </button>
                </div>
                <div class="col-lg-6">
                    <lottie-player class="animation__start" src="assets/json/1.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- /Main -->
<?php
get_footer();
?>
<!-- Modal -->
<div class="modal fade" id="targetMain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="exampleModalLabel">Как начать работу по проекту?</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="target__block mt-3 mt-xl-0">
                            <h2>
                                1 Выберите способ связи &#128227;
                            </h2>
                            <hr>
                            <div>
                                <ul>
                                    <li>
                                        <a href="tel:+79617795111" title="Позвонить">Прямой звонок: +7 (961) 77-95-111</a>
                                    </li>
                                    <li>
                                        <a href="" title="Написать в WhatsApp">Через WhatsApp</a>
                                    </li>
                                    <li>
                                        <a href="" title="Написать в Telegram">Через Telegram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="target__block mt-5 mt-xl-0 target__block2">
                            <h2>
                                2 Проведем интервью &#128210;
                            </h2>
                            <hr>
                            <div>
                                <ul>
                                    <li>
                                        Уточняем важные моменты
                                    </li>
                                    <li>
                                        Консультируем по решениям
                                    </li>
                                    <li>
                                        Делаем чек-лист
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="target__block mt-5 mt-xl-0 target__block3">
                            <h2>
                                3 Техническое задание &#9881;
                            </h2>
                            <hr>
                            <div>
                                <ul>
                                    <li>
                                        Предварительное описание
                                    </li>
                                    <li>
                                        Составление ТЗ
                                    </li>
                                    <li>
                                        Согласование ТЗ
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="target__block mt-5 mt-xl-0 target__block4">
                            <h2>
                                4 Начало работы &#128203;
                            </h2>
                            <hr>
                            <div>
                                <ul>
                                    <li>
                                        Определяем срок сдачи
                                    </li>
                                    <li>
                                        Подписываем Договор
                                    </li>
                                    <li>
                                        Приступаем к работе
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mt-xl-5 text-center w-100">
                    <h2>
                        Или оставить свои контакты
                    </h2>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 offset-0 offset-xl-3">
                        <form id="main">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                                <label for="floatingInput">Имя</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Контакты">
                                <label for="floatingInput">Телефон/почта/соц. сеть</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Напишите ваш вопрос или предложение</label>
                            </div>
                            <span class="form__span">
                                Нажимая отправить, вы соглашаетесь с политикой конфиденциальности
                            </span>
                            <button type="submit" class="btn btn-primary w-100">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary target__close" data-bs-dismiss="modal">Закрыть
                    &#128578;</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="target1" tabindex="-1" aria-labelledby="targetMain" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="exampleModalLabel">Дорого - это понятие относительное! &#129400;
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="price__item">
                            <h3>
                                Начнем с того, как определяеться стоимость разработки и из чего она складываеться:
                            </h3>
                            <div class="price__item__description">
                                <ul>
                                    <li>
                                        <strong>Разработка начинается с определения объема</strong> и предварительного бюджета. Например,
                                        разработать интернет магазин можно несколькими инструментами: использовать готовые CMS по типу
                                        Tilda Publishing, WordPress, OpenCart и др., либо разрабатывать отедльную серверную составляющую.
                                        В первом случае бюджет будет размером от 25 000 руб., во втором от 100 000 руб. <br>
                                        Таким образом, одну и туже задачу можно решить в разные сроки и под разный бюджет.
                                    </li>
                                    <li>
                                        <strong>Определяется количество участников проекта:</strong> копирайтер, дизайнер, разработчики.
                                        Если проект разрабатывается "под ключ", тогда размер команды может достигать до 4-5 человек, если
                                        ЗАказчик предоставляет часть материала, например, дизайн-макет, тогда можно обойтись только
                                        разработчиками. После определения количество участников проекта, рассчитываются общие затраты
                                        исходя из ставки человеко-часа, количества часов. <br>
                                        Таким образом, имея понимание объема работы, определяется стоимость по количеству задействованных
                                        членов команды.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="price__item">
                            <h3>
                                Приобретение лицензий, доменов, серверных мощностей и др.:
                            </h3>
                            <div class="price__item__description">
                                <ul>
                                    <li>
                                        <strong>Аренда или приобретение</strong> доменов, хостингов и других необходимых для
                                        функционирования, публикации веб-ресурса элементов. Интернет устроен таким образом, что часто у Заказчика нет понятия о работе этих технологий, т.к. их знание и
                                        не требуется, чтобы осуществлять свою деятельность, и лучше доверить это техническим специалистам.
                                        Данные работы и услуги предоставляются при разработке "под ключ".<br>
                                        Таким образом, затраты на аренды и приобретения элементов рассчитываются отдельно от разработки.
                                    </li>
                                    <li>
                                        <strong>Покупка лицензий</strong> и интеграции их с веб-ресурсом. Например, вам требуется интернет
                                        магазин, с возможностью вести бухглятерский учет, склад, доставку и др., чтобы облегчить работу и освободить время менеджеров от рутинных задач. Для этого приобретаются
                                        системы учета, способные интегрироваться с сайтом, например, 1С продукты, службы доставки и др. <br>
                                        Таким образом, изобретение велосипеда или работа в Excel никогда не окупят затраты на уже
                                        зарекомендованные решения.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 pb-5">
                    <a target="_blank" class="btn__googleForm" href="https://forms.gle/2PAc1GBtNkonqTgu8">Получить предварительный рассчет</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    ОК, все понятно &#128076;
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->