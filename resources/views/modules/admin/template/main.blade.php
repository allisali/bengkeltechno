<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel &mdash; Techno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/assets/admin/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    @stack('css')
    <!-- End CSS  -->

    <link rel="stylesheet" href="/assets/admin/css/style.min.css">
    <link rel="stylesheet" href="/assets/admin/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="/assets/admin/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        {{-- Start Header --}}
        @include('modules.admin.template.header')
        {{-- End Header --}}

        {{-- Start Sidebar --}}
        @include('modules.admin.template.sidebar')

        {{-- End Sidebar --}}

        <div class="main-content">
            {{-- Start Content --}}
            @yield('index')
            {{-- End Content --}}

        </div>

        <div class="settings">
            <div class="settings-icon-wrapper">
                <div class="settings-icon">
                    <i class="ti ti-settings"></i>
                </div>
            </div>
            <div class="settings-content">
                <ul>
                    <li class="fix-header">
                        <div class="fix-header-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
                                <input class="form-check-input toggle-settings" name="Header" type="checkbox"
                                    id="settingsFixHeader">
                            </div>

                        </div>
                    </li>
                    <li class="fix-footer">
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
                                <input class="form-check-input toggle-settings" name="Footer" type="checkbox"
                                    id="settingsFixFooter">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="theme-switch">
                            <label for="">Theme Color</label>
                            <div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor"
                                        id="light" value="light">
                                    <label class="form-check-label" for="light">Light</label>
                                </div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor"
                                        id="dark" value="dark">
                                    <label class="form-check-label" for="dark">Dark</label>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
                                <input class="form-check-input toggle-settings" name="Sidebar" type="checkbox"
                                    id="settingsFixFooter">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @include('modules.admin.template.footer')
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="/assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="/assets/admin/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    @stack('js')
    <!-- ======= -->
    <script src="/assets/admin/js/main.js"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
