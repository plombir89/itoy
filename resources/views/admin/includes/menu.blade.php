<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="{{ request()->routeIs('admin.index') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                    <li class="nav-parent {{ request()->routeIs('admin.information.*') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class='bx bx-info-circle'></i>
                            <span>{{ __('Information') }}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ request()->routeIs('admin.information.seo') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.information.seo') }}">
                                    {{ __('Seo') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.information.activity') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.information.activity') }}">
                                    {{ __('Activity') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ request()->routeIs('admin.pages.*') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="bx bx-layout" aria-hidden="true"></i>
                            <span>{{ __('Pages') }}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ request()->routeIs('admin.pages.page.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.pages.page.index') }}">
                                    {{ __('Page') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.pages.about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.pages.about') }}">
                                    {{ __('About') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.pages.contacts') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.pages.contacts') }}">
                                    {{ __('Contacts') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ request()->routeIs('admin.content.*') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class='bx bx-book-content' ></i>
                            <span>{{ __('Content') }}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent {{ request()->routeIs('admin.content.news.*') ? 'active nav-expanded' : '' }}">
                                <a class="nav-link" href="#">
                                    {{ __('News') }}
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ request()->routeIs('admin.content.news.index') || request()->routeIs('admin.content.news.create') || request()->routeIs('admin.content.news.edit', '^\d+$' ) ? 'active' : '' }}">
                                        <a href="{{ route('admin.content.news.index') }}">
                                            {{ __('List') }}
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('admin.content.news.category.*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.content.news.category.index') }}">
                                            {{ __('Categories') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('admin.content.services.index') || request()->routeIs('admin.content.services.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.content.services.index') }}">
                                    {{ __('Services') }}
                                </a>
                            </li>
                            <li class="nav-parent {{ request()->routeIs('admin.content.products.*') ? 'active nav-expanded' : '' }}">
                                <a class="nav-link" href="#">
                                    {{ __('Products') }}
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ request()->routeIs('admin.content.products.index') || request()->routeIs('admin.content.products.create') || request()->routeIs('admin.content.products.edit', '^\d+$' ) ? 'active' : '' }}">
                                        <a href="{{ route('admin.content.products.index') }}">
                                            {{ __('List') }}
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('admin.content.products.category.*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.content.products.category.index') }}">
                                            {{ __('Categories') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ request()->routeIs('admin.settings.*') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class='bx bx-cog' ></i>
                            <span>{{ __('Settings') }}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ request()->routeIs('admin.settings.site') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.settings.site') }}">
                                    {{ __('Site') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.settings.menu.index') || request()->routeIs('admin.settings.menu.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.settings.menu.index') }}">
                                    {{ __('Menu') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.settings.socials') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.settings.socials') }}">
                                    {{ __('Socials') }}
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('admin.settings.languages') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.settings.languages') }}">
                                    {{ __('Languages') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ request()->routeIs('admin.utilities.*') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class='bx bx-slider' ></i>
                            <span>{{ __('Utilities') }}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ request()->routeIs('admin.utilities.slider') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.utilities.slider') }}">
                                    {{ __('Slider') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>


    </div>

</aside>
