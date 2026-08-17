const body = document.body;
const sidebar = document.querySelector('.sidebar');
const toggleButtons = document.querySelectorAll('.sidebar-toggle, .sidebar-title');

if (sidebar && toggleButtons.length) {
  const setSidebarState = (isCollapsed) => {
    body.classList.toggle('sidebar-collapsed', isCollapsed);
    document.querySelector('.sidebar-toggle')?.setAttribute('aria-expanded', String(!isCollapsed));
  };

  toggleButtons.forEach((element) => {
    element.addEventListener('click', () => {
      const isCollapsed = !body.classList.contains('sidebar-collapsed');
      setSidebarState(isCollapsed);
    });
  });
}
