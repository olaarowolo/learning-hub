/* ---------- NAV JS ---------- */
/* Global function test() so any other script that expects test() will work */
function test(){
  var $tabs = $('#navbarSupportedContent');
  var $active = $tabs.find('li.active');

  if ($active.length === 0) {
    $active = $tabs.find('li').first().addClass('active');
  }

  var activeHeight = $active.innerHeight();
  var activeWidth = $active.innerWidth();
  var itemPos = $active.position(); // relative to parent (#navbarSupportedContent)

  var $selector = $(".hori-selector");
  // If selector not present, create minimal fallback (ensures no errors)
  if (!$selector.length) {
    $selector = $('<div class="hori-selector"><div class="left"></div><div class="right"></div></div>');
    $('#navbarSupportedContent > ul').prepend($selector);
  }

  $selector.css({
    "top": itemPos.top + "px",
    "left": itemPos.left + "px",
    "height": activeHeight + "px",
    "width": activeWidth + "px"
  });

}

/* Initialize nav behavior (clicks, resize, toggler) */
$(document).ready(function(){
  // Apply active from URL hash (e.g. #ks3) if present
  var hash = window.location.hash;
  if (hash) {
    var $link = $('#navbarSupportedContent ul li a[href="' + hash + '"]');
    if ($link.length) {
      $('#navbarSupportedContent ul li').removeClass('active');
      $link.parent().addClass('active');
    }
  } else {
    // fallback: ensure at least first item active
    if ($('#navbarSupportedContent ul li.active').length === 0) {
      $('#navbarSupportedContent ul li').first().addClass('active');
    }
  }

  // initial position
  setTimeout(function(){ test(); }, 10);

  // click handler (delegated)
  $('#navbarSupportedContent').on('click', 'li', function(e){
    $('#navbarSupportedContent ul li').removeClass('active');
    $(this).addClass('active');
    test();
  });

  // on collapse toggle (mobile)
  $('.navbar-toggler').on('click', function(){
    // let bootstrap finish toggling, then update selector
    setTimeout(function(){ test(); }, 300);
  });

  // resize -> reposition
  $(window).on('resize', function(){
    setTimeout(function(){ test(); }, 300);
  });
});

/* ---------- Scroll-based active highlighting ---------- */
document.addEventListener('DOMContentLoaded', function() {
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  const sections = document.querySelectorAll('main h2[id]');

  if (sections.length > 0 && (window.location.pathname === '/' || window.location.pathname.endsWith('/index.html') || window.location.pathname === '')) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          const $navItems = $('#navbarSupportedContent ul li');
          $navItems.removeClass('active');
          const $activeLink = $('#navbarSupportedContent ul li a[href="#' + id + '"]');
          if ($activeLink.length) {
            $activeLink.parent().addClass('active');
            test();
          }
        }
      });
    }, { root: null, rootMargin: '0px 0px -48% 0px', threshold: 0 });

    sections.forEach(s => observer.observe(s));
  }

  // scroll top button
  window.addEventListener('scroll', () => {
    scrollTopBtn.style.display = (document.documentElement.scrollTop > 300) ? 'flex' : 'none';
  });
  scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
});
