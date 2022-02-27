<nav>
    <figure class="main-logo">
        <a href="/"><img src="/img/main-logo.png" alt="Alessandro Ryo logo"></a>
    </figure>
    <ul>
        <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/">Home</a></li>
        <li class="{{ Request::path() === 'profile' ? 'current_page_item' : ''}}"><a href="/profile">Profile</a></li>
        <li class="{{ Request::path() === 'dashboard' ? 'current_page_item' : ''}}"><a href="/dashboard">Dashboard</a></li>
        <li class="{{ Request::path() === 'faq' ? 'current_page_item' : ''}}"><a href="/faq">FAQ</a></li>
        <li class="{{ Request::path() === 'blog' ? 'current_page_item' : ''}}"><a href="/blog">Blog</a></li>
        <li class="{{ Request::path() === 'others' ? 'current_page_item' : ''}}"><a href="/others">Others</a></li>
    </ul>
    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
