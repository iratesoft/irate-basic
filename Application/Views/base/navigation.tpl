<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{$baseUrl}">
      <b>{$app->param('siteTitle')}</b>
    </a>

    <a role="button"
       class="navbar-burger burger"
       aria-label="menu"
       aria-expanded="false"
       data-target="navigation"
       onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');"
    >
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navigation" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{$baseUrl}">
        Home
      </a>

      {if $session->userData('loggedIn')}
        <a class="navbar-item" href="{$baseUrl}/user/logout">
          Logout ({$session->userData('username')})
        </a>
      {else}
        <a class="navbar-item" href="{$baseUrl}/user/login">
          Login
        </a>
      {/if}
    </div>
  </div>
</nav>
