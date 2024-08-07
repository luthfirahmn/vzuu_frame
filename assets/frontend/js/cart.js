const products = [{
        id: 1,
        name: 'VZUU Mild & Deep Cleansing Pad',
        size: '250 gr',
        price: 479000,
        img: '../assets/img/627.png'
    },
    {
        id: 2,
        name: 'Hydrating & Soothing',
        size: '250 gr',
        price: 429000,
        img: '../assets/img/628.png'
    },
    {
        id: 3,
        name: 'Anti-Oxidant',
        size: '250 gr',
        price: 479000,
        img: '../assets/img/629.png'
    }
];


$(document).ready(function () {
    updateCartBadge();
});

function openCart() {
    var modals = new bootstrap.Modal($('#cartModal'))
    updateCartModal()
    modals.show();
}


function updateCartBadge() {
    const existingCheckout = JSON.parse(localStorage.getItem('checkout')) || [];

    const totalQuantity = existingCheckout.reduce((total, item) => total + item.quantity, 0);

    $('#cart-badge').text(totalQuantity);
}


function checkout(productId, quantity) {
    const product = products.find(p => p.id === productId);

    if (product) {
        const checkoutData = {
            id: product.id,
            name: product.name,
            size: product.size,
            price: product.price,
            img: product.img,
            quantity: quantity
        };

        let existingCheckout = JSON.parse(localStorage.getItem('checkout')) || [];
        existingCheckout.push(checkoutData);

        localStorage.setItem('checkout', JSON.stringify(existingCheckout));

        updateCartBadge();
        updateCartModal();

    } else {
        console.error('Product not found.');
    }
}

function beli_langung(productId, quantity) {
    const product = products.find(p => p.id === productId);

    if (product) {
        const checkoutData = {
            id: product.id,
            name: product.name,
            size: product.size,
            price: product.price,
            img: product.img,
            quantity: quantity
        };

        let existingCheckout = JSON.parse(localStorage.getItem('checkout')) || [];
        existingCheckout.push(checkoutData);

        localStorage.setItem('checkout', JSON.stringify(existingCheckout));

        updateCartBadge();

        window.location.href = '../beauty/checkout.html';

    } else {
        console.error('Product not found.');
    }
}


function updateCartModal() {
    const existingCheckout = JSON.parse(localStorage.getItem('checkout')) || [];

    const $cartItemsContainer = $('#cart-items-container');
    const $cartItemsCount = $('#cart-items-count');
    const $checkoutButton = $('#checkout-button');

    $cartItemsContainer.empty();

    if (existingCheckout.length > 0) {
        $checkoutButton.removeC
        let totalAmount = 0;
        existingCheckout.forEach(item => {
            const itemElement = $(`
                <div class="cart-item">
                    <img src="${item.img}" alt="Product" style="width: 60px; height: 60px;">
                    <div class="item-info ">
                        <p class="text-grey text-demibold mb-1">${item.name}</p>
                        <h6 class="text-grey text-regular">Size: ${item.size}</h6>
                        
                    </div>
                     <div class="item-price">
                        <p class="text-brown text-demibold">Rp ${item.price.toLocaleString()}
                        </p>
                        
                    </div>
                   
                </div>
                <div class="d-flex flex-row align-items-center justify-content-between" style="margin-left:70px">
                   <div class="input-group " style="width: 100px;">
                            <div class="input-group input-group-capsule mb-3">
                                <button class="btn btn-capsule" type="button" onclick="btnQty(this)">-</button>
                                <input type="text" class="form-control input-capsule" value="${item.quantity}">
                                <button class="btn btn-capsule" type="button" onclick="btnQty(this)">+</button>
                            </div>
                        </div>
                        
                         <button class="btn btn-link text-brown remove-btn text-regular" data-product-id="${item.id}" onclick="removeFromCart(${item.id})">HAPUS</button>
                </div>
              
                <hr>
            `);

            $cartItemsContainer.append(itemElement);
            totalAmount += item.price * item.quantity;
        });

        $cartItemsCount.text(`(${existingCheckout.length} items)`);

        $checkoutButton.text(`CHECKOUT - Rp ${totalAmount.toLocaleString()}`);
        $checkoutButton.show();
    } else {
        checkoutButton = 0;
        $cartItemsCount.text('(0 items)');
        $cartItemsContainer.html(`
            <p class="text-center text-regular" style="margin-top: 20px;">Keranjang Anda Kosong</p>
            <a href="./beauty.html" type="button" class="custom-button-brown text-center text-regular w-100" style="margin-top: 20px;">BELANJA SEKARANG</a>
        `);
        $checkoutButton.hide();
    }
}

function removeFromCart(productId) {
    let existingCheckout = JSON.parse(localStorage.getItem('checkout')) || [];
    existingCheckout = existingCheckout.filter(item => item.id !== productId);
    localStorage.setItem('checkout', JSON.stringify(existingCheckout));
    updateCartModal();
}

function btnQty(e) {

    var $input = $(e).closest('.input-group-capsule').find('.input-capsule');
    var currentValue = parseInt($input.val());

    if ($(e).text() === '+') {
        $input.val(currentValue + 1);
    } else if ($(e).text() === '-') {
        if (currentValue > 1) {
            $input.val(currentValue - 1);
        }
    }
};


function paymentDone() {
    localStorage.removeItem('checkout');

}