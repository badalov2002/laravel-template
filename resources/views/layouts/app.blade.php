<x-sections.header />

    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass page-header-dark main-content-boxed">
        <x-sections.nav />

        <!-- Main Container -->
        <main id="main-container" style="padding-top: 68px;">
            <!-- Page Content -->
            <div class="bg-body-extra-light">
                <x-helpers.breadcrumb />

                <!-- Content -->
                <div class="content">
                    {{ $slot }}
                </div>
            </div>
        </main>

        <x-sections.foot />
    </div>

<x-sections.footer />
