const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleBtn');
    const mainContent = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
      // Toggle classes for sidebar
      if (sidebar.classList.contains('expanded')) {
        sidebar.classList.remove('expanded');
        sidebar.classList.add('collapsed');
        mainContent.classList.remove('sidebar-expanded');
        mainContent.classList.add('sidebar-collapsed');
      } else {
        sidebar.classList.remove('collapsed');
        sidebar.classList.add('expanded');
        mainContent.classList.remove('sidebar-collapsed');
        mainContent.classList.add('sidebar-expanded');
      }
    });



    function toggleItems() {
        const items = document.getElementById('items');
        const button = document.getElementById('showButton');

        // Toggle visibility of items
        if (items.style.display === 'none' || items.style.display === '') {
            items.style.display = 'block';
            button.textContent = 'Hide Items'; // Change button text
        } else {
            items.style.display = 'none';
            button.textContent = 'Show Items'; // Revert button text
        }
    }