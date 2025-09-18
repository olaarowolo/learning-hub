# TODO: Switch Navbar to Reflect Nigeria Year Groups

## Tasks
- [x] Update `resources/views/partials/navbar.blade.php` to add dropdown menus for Nigeria curriculum (Primary, JSS, SSS) with specific year groups (Primary 1-6, JSS 1-3, SSS 1-3).
- [x] Update `resources/views/welcome.blade.php` to add unique IDs to each year-card for proper linking (e.g., id="primary-1" for Primary 1).
- [x] Update navbar links to point to the new IDs (e.g., href="#primary-1").
- [ ] Test the menu switching and scrolling behavior.
- [ ] Update `resources/js/nav.js` if needed to handle new IDs for active highlighting.

## New Tasks: Add Switch Button Toggle for UK/Nigeria Curriculum
- [x] Add switch toggle button UI in `resources/views/layouts/app.blade.php` just before the NAVIGATION header.
- [x] Add JavaScript logic in `resources/js/side-nav.js` to handle the toggle switch, storing the selected curriculum in localStorage and reloading the page with the selected curriculum as a query parameter (location=uk or location=ng).
- [x] On page load, set the toggle state based on the current curriculum from the URL or localStorage.
- [x] Test the toggle switch functionality.
- [x] Improve toggle UI appearance with CSS classes, hover effects, shadows, and better styling.
