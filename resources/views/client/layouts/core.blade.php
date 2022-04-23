<!DOCTYPE html>
<html lang="es">

<head>
    @yield('app-metadata')
    <!--  Title Aplication -->
    <title> @yield('name-pagine') {{ config('app.name') }}, Rápido y confiable</title>
    <!--  Meta config tags -->
    @include('client.config-client.metadata.core.config')
    <!--  Meta business identity tags -->
    @include('client.config-client.metadata.socialtags.identity')
    <!--  Meta OG business identity tags -->
    @include('client.config-client.metadata.og.og')
    @yield('og')
    <!-- Social meta tags -->
    @include('client.config-client.metadata.socialtags.social')
    <!-- Links stylesheets CND's -->
    @include('client.config-client.styles.cdn-styles.cdn-styles')
    <!-- Links stylesheets core project -->
    @include('client.config-client.styles.core-styles.core-styles')
    <!-- Scripts config  -->
    @include('client.config-client.metadata.schema.schema')
    <!-- Styles core head  -->
    @include('client.config-client.styles.styles-line.styles-line')
    <!-- Analytics tools  -->
    @include('client.config-client.analytics-tools.google-analytics')
    @yield('styles')
</head>

<body>
    @yield('scripts-head-body')
    {{-- @include('layouts.front.app.scripts.loader') --}}
    @include('client.config-client.analytics-tools.google-analytics-body')
    <!-- Include navbar  -->
    @include('client.layouts.navbar')
    @yield('content')
    <!-- Include footer  -->
    @include('client.layouts.footer')
    <!-- Scripts body  -->
    @include('client.scripts.scripts-body')
     <!-- Scripts body include section -->
    @yield('scripts')
</body>

</html>