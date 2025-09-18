/* ---------- SEARCH FUNCTIONALITY ---------- */
let lessonsData = [];

fetch('/data/lessons.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    lessonsData = data;
  })
  .catch(error => {
    console.error('Error loading lessons.json:', error);
  });

document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('search-input');
  const searchResults = document.getElementById('search-results');
  const searchOverlay = document.getElementById('search-overlay');

  function closeSearch() {
    searchResults.style.display = 'none';
    searchOverlay.style.display = 'none';
  }

  searchInput.addEventListener('input', function() {
    const query = this.value.toLowerCase().trim();
    searchResults.innerHTML = '';

    if (query === '') {
      closeSearch();
      return;
    }

    const results = lessonsData.filter(lesson => lesson.title.toLowerCase().includes(query));

    if (results.length > 0) {
      // Add close button
      const closeBtn = document.createElement('button');
      closeBtn.className = 'close-btn';
      closeBtn.innerHTML = '×';
      closeBtn.addEventListener('click', closeSearch);
      searchResults.appendChild(closeBtn);

      const ul = document.createElement('ul');
      ul.className = 'week-list';

      results.forEach(lesson => {
        const li = document.createElement('li');
        const a = document.createElement('a');
        a.href = lesson.url;
        a.className = 'week-link';
        a.innerHTML = `<span style="background-color: lightgreen; padding: 2px 4px; border-radius: 3px; font-size: 0.6em;">${lesson.year}</span> - ${lesson.title}`;
        li.appendChild(a);
        ul.appendChild(li);
      });

      searchResults.appendChild(ul);

      // Show overlay and results
      searchResults.style.display = 'block';
      searchOverlay.style.display = 'block';
    } else {
      closeSearch();
    }
  });

  // Close on overlay click
  searchOverlay.addEventListener('click', closeSearch);

  // Close on link click
  searchResults.addEventListener('click', function(e) {
    if (e.target.tagName === 'A') {
      closeSearch();
    }
  });
});
