(function () {
  'use strict';

  var state = {
    lang: kodusBlog.lang,
    category: 'all',
    page: 2,
    loading: false
  };

  var grid = document.getElementById('blog-grid');
  var loadMoreWrap = document.querySelector('.blog-page__load-more');
  var loadMoreBtn = document.getElementById('blog-load-more');
  var catBtns = document.querySelectorAll('.blog-cat-btn');

  function setLoading(on) {
    state.loading = on;
    if (grid) grid.classList.toggle('blog-grid--loading', on);
    if (loadMoreBtn) {
      loadMoreBtn.disabled = on;
      loadMoreBtn.textContent = on
        ? loadMoreBtn.getAttribute('data-loading')
        : loadMoreBtn.getAttribute('data-label');
    }
  }

  function fetchPosts(opts) {
    var params = [
      'action=kodus_blog_posts',
      'lang=' + encodeURIComponent(state.lang),
      'category=' + encodeURIComponent(state.category),
      'page=' + (opts.page || 1)
    ];

    setLoading(true);

    var xhr = new XMLHttpRequest();
    xhr.open('GET', kodusBlog.ajaxurl + '?' + params.join('&'), true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onload = function () {
      setLoading(false);
      if (xhr.status !== 200) return;
      var data;
      try { data = JSON.parse(xhr.responseText); } catch (e) { return; }

      if (opts.replace) {
        grid.innerHTML = data.html || '';
      } else {
        grid.insertAdjacentHTML('beforeend', data.html || '');
      }

      state.page = data.next_page || ((opts.page || 1) + 1);

      if (loadMoreWrap) {
        loadMoreWrap.style.display = data.has_more ? '' : 'none';
      }
    };
    xhr.onerror = function () { setLoading(false); };
    xhr.send();
  }

  // Category click
  catBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      if (state.loading) return;
      catBtns.forEach(function (b) { b.classList.remove('blog-cat-btn--active'); });
      btn.classList.add('blog-cat-btn--active');

      state.category = btn.getAttribute('data-cat');
      state.page = 2;
      fetchPosts({ page: 1, replace: true });
    });
  });

  // Load more click
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function () {
      if (state.loading) return;
      fetchPosts({ page: state.page, replace: false });
    });
  }
})();
