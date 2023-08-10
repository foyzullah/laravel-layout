<div class="flex flex-col border-r p-4 w-[192px]">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{__("Dashboard")}}
    </x-nav-link>
</div>



