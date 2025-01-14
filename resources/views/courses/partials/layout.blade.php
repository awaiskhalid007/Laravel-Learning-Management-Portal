<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
  <!-- Libs CSS -->
  <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
  <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
  <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
  <link href="assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
  <link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
  <link href="assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
  <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <link href="assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
  <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  @yield('meta')
</head>
<body>
  <!-- Page content -->
  @include('partials.header')

  @yield('main_content')
  <!-- Footer -->
  {{-- @include('partials.footer') --}}
  @include('partials.scripts')

</body>
</html>