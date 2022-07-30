<style>
    .nav-wrapper {
        flex-basis: 300px;
        background-color: #f7f8fa;
        height: 100vh;
        display: flex;
        align-items: start;
    }

    .nav-list {
        padding: 20px 15px;
        width: 100%;
        list-style: none;
    }

    .nav-list li:not(.nav-brand) a {
        padding: 10px !important;
        display: block;
        text-decoration: unset;
        color: #6a6a6a;
        margin-bottom: 5px;
    }

    .nav-list li:not(.nav-brand) a:hover {
        color: #6c8bee;
        border-radius: 5px;
    }
</style>

<nav class="navbar nav-wrapper">
    <!-- Primary Navigation Menu -->
    <ul class="nav-list">
        <li>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link>
                {{ __('Manage All Report') }}
            </x-nav-link>
        </li>
        @admin
        <li>
            <x-nav-link>
                {{ __('Create Report') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link>
                {{ __('Edit Report') }}
            </x-nav-link>
        </li>
        
        @endadmin
    </ul>
</nav>
