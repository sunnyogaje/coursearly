$(document).ready(function() {
    // Load menu dynamically
    var default_ur = $('#gen_url').val();


    // Handle Add to Cart button
    $('.add-to-cart-btn').click(function() {
        const id = $(this).data('id');
        const title = $(this).data('title');
        const price = parseFloat($(this).data('price'));
        const image = $(this).data('image');
        const currency_symbol = $(this).data('symbol');

        const item = {
            id: id,
            title: title,
            price: price,
            image: image,
            quantity: 1,
            symbol: currency_symbol

        };

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const exists = cart.find(i => i.id == id);
        if (exists) {
            alert('Course already in cart.');
            return;
        }

        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart));
        alert('Course added to cart.');
        loadCartSidebar();
        updateCartCount();

    });

    // Remove from cart
    $('#cart-items-container').on('click', '.remove-from-cart', function() {
        const index = $(this).data('index');
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCartSidebar();
        updateCartCount();
    });

    // Load cart when sidebar is opened
    $('#edSidebarCart').on('show.bs.offcanvas', function() {
        loadCartSidebar();
    });

    // Initial cart load
    loadCartSidebar();
    updateCartCount();


    // Load cart items into sidebar
    function loadCartSidebar() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const $container = $('#cart-items-container');
        const $subtotal = $('#cart-subtotal');
        const $emptyMessage = $('#empty-cart-message');

        if (!$container.length || !$subtotal.length || !$emptyMessage.length) return;

        // Remove previous cart items (not the empty message!)
        $container.find('.ed-sidebar-cart-item').remove();

        let subtotal = 0;

        if (cart.length === 0) {
            $emptyMessage.show();
        } else {
            $emptyMessage.hide();
            cart.forEach((item, index) => {
                subtotal += item.price * item.quantity;

                const html = `
                            <div class="ed-sidebar-cart-item" data-index="${index}">
                                <div class="ed-sidebar-cart-main">
                                    <div class="ed-sidebar-cart-img">
                                        <img src="${default_ur}assets/images/course/${item.image}" alt="${item.title}" />
                                    </div>
                                    <div class="ed-sidebar-cart-info">
                                        <span>${item.quantity} x <strong>${item.symbol}${item.price}</strong></span>
                                        <a href="#">${item.title}</a>
                                    </div>
                                </div>
                                <div class="ed-sidebar-cart-remove">
                                    <button type="button" class="remove-from-cart" data-index="${index}">
                                        <i class="fi-rr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        `;

                $container.append(html);
            });
        }

        const currencySymbol = cart.length > 0 ? cart[0].symbol || '$' : '$';

        $subtotal.text(currencySymbol + '' + subtotal.toFixed(2));
    }



    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        $('.pros_total_item_cart').text(cart.length);
    }


    $('body').on('click', '.pros_checkout_btn', function() {

        // Redirect to login page
        window.location.href = default_ur + 'sign-in'; // Change URL to your actual login page
    });


});