<?php include 'header.php'; ?>
<div class="max_width_theme breadcrumb">
    <ul>
        <li><a href="">Главная</a></li>
        <img src="assets/svg/arrow_breadcrumb.svg" alt="" class="svg">
        <li>Корзина</li>
    </ul>
</div>
<div class="max_width_theme order_cart">
    <h1 class="page_title">Оформление заказа</h1>
    <div class="delete_cart">
        <div class="item">
            <input type="checkbox" name="delete_all" id="delete_all">
            <label for="delete_all">
                Выбрать все
            </label>
        </div>
        <div class="item">
            <a href="">Удалить выбранное <span>(</span>2<span>)</span></a>
        </div>
    </div>
    <div class="basket_items">
        <div class="order_info">
            <table class="basket-items-list-table">
                <tbody>
                <tr class="basket-items-list-item-container">
                    <td class="checkbox">
                        <input type="checkbox">
                    </td>
                    <td class="basket-items-list-item-picture">
                        <a href="" class="basket-item-image-link">
                            <img src="assets/img/e0a3117bcc13b795e34596cb2d527053.png" alt="">
                        </a>
                    </td>
                    <td class="basket-items-list-item-descriptions-inner">
                        <div class="basket-item-block-info">
                            <h3 class="basket-item-info-name">
                                <a href="" class="basket-item-info-name-link">
                                   <span data-entity="basket-item-name">
                                       Комод на колесах deluxe, 4 ящика, 300х385х690 мм (серый)
                                   </span>
                                </a>
                            </h3>
                        </div>
                        <div class="basket-item-amount" data-entity="basket-item-quantity-block">
                           <span class="basket-item-btn-minus" data-entity="basket-item-quantity-minus">
                           </span>
                            <div class="basket-item-amount-filed-block">
                                <input type="text" class="basket-item-amount-filed" value="1">
                            </div>
                            <span class="basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">
                           </span>
                        </div>
                    </td>
                    <td class="basket-items-list-item-price">
                        <div class="basket-item-price">
                            <div class="basket-item-price-current">
                                <div class="prices_block">
                                    <div class="discount">50%</div>
                                    <div class="price">145 ₽</div>
                                    <div class="old_price">145 ₽</div>
                                </div>
                            </div>
                        </div>
                        <div class="basket-items-list-item-removes">
                            <div class="wish_item_button item-action">
                                <a href="" class="wishlist icon-custom active">
                                    <img src="assets/svg/add_favorites.svg" alt="" class="svg">
                                </a>
                            </div>
                            <div class="basket-item-block-actions">
                               <span class="basket-item-actions-remove">
                                    <img src="assets/svg/delete_prod_cart.svg" alt="" class="svg">
                               </span>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="order_total">

        </div>
    </div>

</div>
<?php include 'footer.php'; ?>