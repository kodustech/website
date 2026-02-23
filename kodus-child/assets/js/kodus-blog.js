(function () {
  'use strict';

  var state = {
    lang: kodusBlog.lang,
    category: 'all',
    offset: kodusBlog.perPage,
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
      'offset=' + (opts.offset || 0)
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

      state.offset = (opts.offset || 0) + kodusBlog.perPage;

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
      state.offset = 0;
      fetchPosts({ offset: 0, replace: true });
    });
  });

  // Load more click
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function () {
      if (state.loading) return;
      fetchPosts({ offset: state.offset, replace: false });
    });
  }
})();
