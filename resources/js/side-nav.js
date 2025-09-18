console.log('side-nav.js loaded');
document.addEventListener('DOMContentLoaded', function () {
  const sidebar = document.getElementById('sidebar');
  const btnCollapse = document.getElementById('btn-collapse');
  const btnToggle = document.getElementById('btn-toggle');
  const overlay = document.getElementById('overlay');
  const curriculumToggle = document.getElementById('curriculum-toggle');

  // --- Sidebar Collapse (Desktop) ---
  if (btnCollapse && sidebar) {
    btnCollapse.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
    });
  }

  // --- Highlight Active Menu Item ---
  const currentUrl = window.location.pathname;
  const menuLinks = document.querySelectorAll('.menu a');

  menuLinks.forEach((link) => {
    // Use `link.pathname` to handle full URLs and compare only the path
    if (link.pathname === currentUrl) {
      // Add 'active' class to the direct parent `li.menu-item`
      const currentItem = link.closest('.menu-item');
      if (currentItem) {
        currentItem.classList.add('active');
        // Do not open parent sub-menus on load
      }
    }
  });

  // --- Submenu Toggle ---
  // Collapse all submenus on load (after active highlighting)
  // Remove duplicate collapse and event listener code
  document.querySelectorAll('.menu .sub-menu').forEach((subMenu) => {
    subMenu.classList.remove('open');
  });

  document.querySelectorAll('.menu .sub-menu > a').forEach((link) => {
    link.addEventListener('click', (e) => {
      const subMenu = link.parentElement;
      // This logic is for the accordion menu on the expanded sidebar.
      // When collapsed, submenus are handled by CSS on hover.
      if (
        subMenu.classList.contains('sub-menu') &&
        !sidebar.classList.contains('collapsed')
      ) {
        // Prevent page jump if the link is just a placeholder
        if (link.getAttribute('href') === '#') {
          e.preventDefault();
        }

        // Close all other submenus at the same level
        const parentUl = subMenu.parentElement;
        if (parentUl) {
          parentUl.querySelectorAll('.sub-menu').forEach((sibling) => {
            if (sibling !== subMenu) {
              sibling.classList.remove('open');
            }
          });
        }

        subMenu.classList.toggle('open');
      }
    });
  });

  // --- Mobile Sidebar Toggle ---
  const toggleMobileSidebar = () => {
    if (sidebar) {
      sidebar.classList.toggle('toggled');
    }
  };

  if (btnToggle) {
    btnToggle.addEventListener('click', (e) => {
      e.preventDefault();
      toggleMobileSidebar();
    });
  }

  if (overlay) {
    overlay.addEventListener('click', toggleMobileSidebar);
  }

  // --- Curriculum Toggle Switch ---
  // Removed curriculum toggle JS logic as per updated plan
});
