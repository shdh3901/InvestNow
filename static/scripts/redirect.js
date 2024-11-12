function redirectTo(page) {
  // Map page to the exact Flask route
  const routes = {
    login: '/login',
    register: '/register'
  };

  // Redirect to the mapped route
  if (routes[page]) {
    window.location.href = routes[page];
  } else {
    console.error('Invalid page:', page);
  }
}