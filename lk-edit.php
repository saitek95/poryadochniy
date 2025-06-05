<?php include 'header.php'; ?>
<div class="max_width_theme breadcrumb">
    <ul>
        <li><a href="">Главная</a></li>
        <img src="assets/svg/arrow_breadcrumb.svg" alt="" class="svg">
        <li>Профиль</li>
    </ul>
</div>
<div class="max_width_theme">
    <div class="personal_lk">
        <div class="sidebar_menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <img src="assets/svg/user.svg" alt="" class="svg">
                        Личные данные
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/svg/shipping-timed_18995127.svg" alt="" class="svg">
                        История заказов
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/svg/wait_list.svg" alt="" class="svg">
                        Лист ожидания
                    </a>
                </li>
            </ul>
            <a href="" class="btn_green">Выйти из профиля</a>
        </div>
        <div class="content">
            <div class="info_personal">
                <form action="" class="edit_info_personal">
                    <span class="error">Не коректно введено ФИО</span>
                    <input type="text" value="Максим">
                    <span class="error">Не коректно введен дата рождения</span>
                    <input type="text" value="26 / 02 1990" id="datepicker">
                    <span class="error">Не коректно введен адрес</span>
                    <input type="text" value="г. Махачкала, улица Гагарина, 13В">
                    <span class="error">Не коректно введен телефон</span>
                    <input type="text" class="phone" value="+7 988 292-68-99">
                    <span class="error">Не коректно введен телефон</span>
                    <input type="text" class="phone" value="+7 988 292-68-99">
                    <span class="error">Не коректно введен email</span>
                    <input type="text" class="phone" value="poryadochniy.shop@gmail.com">
                    <input type="submit" class="btn_default" value="Сохранить изменения">
                </form>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>