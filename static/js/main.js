(function () {
  'use strict';

  var searchInput = document.getElementById('search-input');
  var searchResults = document.getElementById('search-results');

  if (searchInput && searchResults) {
    var debounceTimer;

    searchInput.addEventListener('input', function () {
      clearTimeout(debounceTimer);
      var query = this.value.trim();

      if (query.length < 2) {
        searchResults.classList.add('d-none');
        return;
      }

      debounceTimer = setTimeout(function () {
        fetch('/api/products/search?q=' + encodeURIComponent(query))
          .then(function (res) { return res.json(); })
          .then(function (data) {
            searchResults.innerHTML = '';
            if (data.length === 0) {
              searchResults.innerHTML =
                '<div class="dropdown-item text-muted">Tidak ada hasil</div>';
            } else {
              data.forEach(function (p) {
                var item = document.createElement('a');
                item.className =
                'dropdown-item d-flex align-items-center gap-2';
                item.href = p.url;
                if (p.image) {
                  var img = document.createElement('img');
                  img.src = p.image;
                  img.alt = p.name;
                  img.style.width = '40px';
                  img.style.height = '40px';
                  img.style.objectFit = 'cover';
                  img.className = 'rounded';
                  item.appendChild(img);
                }
                var text = document.createElement('div');
                text.innerHTML =
                  '<div class="small">' + p.name + '</div>' +
                  '<small class="text-primary fw-bold">' + p.price +
                  '</small>';
                item.appendChild(text);
                searchResults.appendChild(item);
              });
            }
            searchResults.classList.remove('d-none');
          })
          .catch(function () {
            searchResults.classList.add('d-none');
          });
      }, 300);
    });

    document.addEventListener('click', function (e) {
      if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
        searchResults.classList.add('d-none');
      }
    });
  }

  var qtyMinusBtns = document.querySelectorAll('.btn-qty-minus');
  var qtyPlusBtns = document.querySelectorAll('.btn-qty-plus');

  qtyMinusBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var input = this.parentElement.querySelector('input[type="number"]');
      if (input) {
        var val = parseInt(input.value) || 1;
        if (val > 1) input.value = val - 1;
      }
    });
  });

  qtyPlusBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var input = this.parentElement.querySelector('input[type="number"]');
      if (input) {
        var val = parseInt(input.value) || 0;
        input.value = val + 1;
      }
    });
  });

  var qtyCartBtns = document.querySelectorAll('.btn-qty-cart');
  var qtyInputs = document.querySelectorAll('.cart-qty-input');

  function updateCartItem(itemId, quantity) {
    var formData = new FormData();
    formData.append('item_id', itemId);
    formData.append('quantity', quantity);

    fetch('/cart/update', {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(function (res) { return res.json(); })
    .then(function (data) {
      if (data.success) {
        var badge = document.querySelector('.navbar .badge');
        if (badge) {
          if (data.cart_count > 0) {
            badge.textContent = data.cart_count;
          } else {
            badge.remove();
          }
        }
        var totalEl = document.getElementById('cart-total');
        if (totalEl) {
          totalEl.textContent = 'Rp ' + data.total_price.toLocaleString(
            'id-ID');
        }
      }
    });
  }

  qtyCartBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var itemId = this.getAttribute('data-item-id');
      var input = document.querySelector(
        '.cart-qty-input[data-item-id="' + itemId + '"]');
      if (input) {
        var val = parseInt(input.value) || 1;
        if (this.getAttribute('data-action') === 'plus') {
          input.value = val + 1;
        } else if (val > 1) {
          input.value = val - 1;
        }
        updateCartItem(itemId, input.value);
      }
    });
  });

  qtyInputs.forEach(function (input) {
    input.addEventListener('change', function () {
      var val = parseInt(this.value) || 1;
      if (val < 1) val = 1;
      this.value = val;
      updateCartItem(this.getAttribute('data-item-id'), val);
    });

    input.addEventListener('blur', function () {
      var val = parseInt(this.value) || 1;
      if (val < 1) {
        this.value = 1;
        updateCartItem(this.getAttribute('data-item-id'), 1);
      }
    });
  });

  var addToCartForms = document.querySelectorAll(
    'form[action="/cart/add"]');

  addToCartForms.forEach(function (form) {
    form.addEventListener('submit', function (e) {
      var btn = this.querySelector('button[type="submit"]');
      if (btn) {
        btn.disabled = true;
        btn.innerHTML =
          '<span class="spinner-border spinner-border-sm"></span>...';
      }
    });
  });

})();
