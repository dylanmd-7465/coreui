<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.5.0
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2026 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="en">
  <head>
    <base href="./../../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
     <link rel="stylesheet" href="vendor/fontawesome-free-6.7.2-web/css/all.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <script src="js/config.js"></script>
    <script src="js/color-modes.js"></script>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand me-auto">
          <svg role="img" aria-label="CoreUI Logo Full" class="sidebar-brand-full" width="88" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 312 115">
            <g style="fill: currentColor">
              <path d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
              <path d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
              <g transform="translate(118 33)">
                <path d="M50.745.428c-8.28.01-14.99 6.72-15 15v17.277c0 8.285 6.715 15 15 15 8.284 0 15-6.715 15-15V15.428c-.01-8.28-6.72-14.99-15-15Zm7 32.277a7 7 0 0 1-14 0V15.428a7 7 0 0 1 14 0v17.277ZM14.079 8.488a7.01 7.01 0 0 1 7.868 6.075.99.99 0 0 0 .984.865h6.03a1.01 1.01 0 0 0 1-1.097C29.354 6.206 22.38.046 14.243.447 6.161 1-.086 7.762 0 15.864V32.27c-.087 8.101 6.161 14.864 14.244 15.416 8.137.401 15.11-5.759 15.716-13.883a1.01 1.01 0 0 0-.999-1.098h-6.03a.99.99 0 0 0-.985.865 7.01 7.01 0 0 1-7.868 6.076A7.164 7.164 0 0 1 8 32.461V15.672a7.164 7.164 0 0 1 6.079-7.184ZM96.922 27.994a12.158 12.158 0 0 0 7.184-11.077v-3.7c0-6.71-5.44-12.15-12.149-12.15H75a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-17h6.621l7.916 17.413a1 1 0 0 0 .91.587h6.591a1 1 0 0 0 .91-1.414l-8.026-17.659Zm-.816-11.077a4.154 4.154 0 0 1-4.148 4.15h-9.852v-12h9.852a4.154 4.154 0 0 1 4.148 4.15v3.7ZM139 1.067h-26a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-19v-12h13a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-13v-10h19a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1ZM177 1.067h-6a1 1 0 0 0-1 1v22.647a7.007 7.007 0 1 1-14 0V2.067a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v22.647a15.003 15.003 0 1 0 30 0V2.067a1 1 0 0 0-1-1Z" />
                <rect width="8" height="38" x="186" y="1.067" rx="1" />
              </g>
            </g>
          </svg>
          <svg role="img" aria-label="CoreUI Logo Signet" class="sidebar-brand-narrow" width="88" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 115">
            <g style="fill: currentColor">
              <path d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
              <path d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
            </g>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M425.706 142.294A240 240 0 0 0 16 312v88h144v-32H48v-56c0-114.691 93.309-208 208-208s208 93.309 208 208v56H352v32h144v-88a238.43 238.43 0 0 0-70.294-169.706" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 264h32v32H80zm160-136h32v32h-32zm-104 40h32v32h-32zm264 96h32v32h-32zm-102.778 71.1 69.2-144.173-28.85-13.848-69.183 144.135a64.141 64.141 0 1 0 28.833 13.886M256 416a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
            </svg>
            Dashboard
            <span class="badge badge-sm bg-info ms-auto">NEW</span>
          </a>
        </li>
        <li class="nav-title">Menu de Opciones</li>
       
  
        
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <i class="fa-solid fa-cart-shopping"></i>
            Productos
          </a>
          
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/products/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fa-solid fa-cart-shopping"></i>
                Lista Productos
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/products/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fa-solid fa-cart-shopping"></i> <i class="fa-solid fa-plus"></i>
                Nuevo Producto
              </a>
            </li>
           
          </ul>
        </li>
      

        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
             <i class="fa-solid fa-users"></i>
            Usuarios
          </a>
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/users/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span> <i class="fa-solid fa-users"></i>
               Usuarios
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/users/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span> <i class="fa-solid fa-user-plus"></i>
                Nuevo Usuario
              </a>
            </li>          
          </ul>
        </li>
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <i class="fa-solid fa-user"></i>
            Clientes
          </a>
          
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/clientes/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fa-solid fa-user"></i>
                Clientes
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/clientes/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fa-solid fa-user-plus"></i> 
                Nuevo Cliente
              </a>
            </li>
           
          </ul>
        </li>
         <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <i class="fas fa-truck"></i>
            Proveedor
          </a>
          
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/proveedor/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fas fa-truck"></i>
                Proveedor
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/proveedor/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span><i class="fas fa-plus me-2"></i> 
                Nuevo Proveedor
              </a>
            </li>
           
          </ul>
        </li>
        <li class="nav-item mt-auto">
          <a class="nav-link" href="https://coreui.io/bootstrap/docs/templates/installation/" target="_blank">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M334.627 16H48v480h424V153.373ZM440 166.627V168H320V48h1.373ZM80 464V48h208v152h152v264Z" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="M136 296h224v32H136zm0 80h224v32H136z" class="ci-primary" />
            </svg>
            Docs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary fw-semibold" href="https://coreui.io/product/bootstrap-dashboard-template/" target="_top">
            <svg class="nav-icon text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="m487.938 162.108-224-128a16 16 0 0 0-15.876 0l-224 128a16 16 0 0 0 .382 28l224 120a16 16 0 0 0 15.112 0l224-120a16 16 0 0 0 .382-28M256 277.849 65.039 175.548 256 66.428l190.961 109.12Z" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="M263.711 394.02 480 275.061v-36.522L256 361.74 32 238.539v36.522L248.289 394.02a16 16 0 0 0 15.422 0" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="m32 362.667 216.471 115.451a16 16 0 0 0 15.058 0L480 362.667V326.4L256 445.867 32 326.4Z" class="ci-primary" />
            </svg>
            Try CoreUI PRO
          </a>
        </li>
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px">
            <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 96h352v32H80zm0 144h352v32H80zm0 144h352v32H80z" class="ci-primary" />
            </svg>
          </button>
          <ul class="header-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="m450.27 348.569-43.67-80.624V184c0-83.813-68.187-152-152-152s-152 68.187-152 152v83.945l-43.672 80.623A24 24 0 0 0 80.031 384h86.935a89 89 0 0 0-.367 8 88 88 0 0 0 176 0c0-2.7-.129-5.364-.367-8h86.935a24 24 0 0 0 21.1-35.431ZM310.6 392a56 56 0 1 1-111.419-8h110.837a56 56 0 0 1 .582 8M93.462 352l41.138-75.945V184a120 120 0 0 1 240 0v92.055L415.736 352Z" class="ci-primary" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M136 24H16v120h120Zm-32 88H48V56h56Zm32 88H16v120h120Zm-32 88H48v-56h56Zm32 88H16v120h120Zm-32 88H48v-56h56Zm72-440.002h320v32H176zm0 88h256v32H176zm0 88h320v32H176zm0 88h256v32H176zm0 176h256v32H176zm0-88h320v32H176z" class="ci-primary" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M274.6 25.623a32.01 32.01 0 0 0-37.2 0L16 183.766V496h480V183.766ZM464 402.693 339.97 322.96 464 226.492ZM256 51.662 454.429 193.4 311.434 304.615 256 268.979l-55.434 35.636L57.571 193.4ZM48 226.492l124.03 96.468L48 402.693ZM464 464H48v-23.265l208-133.714 208 133.714Z" class="ci-primary" />
                </svg>
              </a>
            </li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 104c-83.813 0-152 68.187-152 152s68.187 152 152 152 152-68.187 152-152-68.187-152-152-152m0 272a120 120 0 1 1 120-120 120.136 120.136 0 0 1-120 120M240 16h32v48h-32zm0 432h32v48h-32zm208-208h48v32h-48zm-432 0h48v32H16zm372.687 171.314 22.627-22.627 32 32-22.627 22.627zm-320-320 22.628-22.628 32 32-22.628 22.628zm-.002 329.375 32-32 22.628 22.626-32 32zm320.002-320.003 32-32 22.628 22.628-32 32z" class="ci-primary" />
                    </svg>
                    Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M268.279 496c-67.574 0-130.978-26.191-178.534-73.745S16 311.293 16 243.718A252.25 252.25 0 0 1 154.183 18.676a24.44 24.44 0 0 1 34.46 28.958 220.12 220.12 0 0 0 54.8 220.923A218.75 218.75 0 0 0 399.085 333.2a220.2 220.2 0 0 0 65.277-9.846 24.439 24.439 0 0 1 28.959 34.461A252.26 252.26 0 0 1 268.279 496M153.31 55.781A219.3 219.3 0 0 0 48 243.718C48 365.181 146.816 464 268.279 464a219.3 219.3 0 0 0 187.938-105.31 253 253 0 0 1-57.13 6.513 250.54 250.54 0 0 1-178.268-74.016 252.15 252.15 0 0 1-67.509-235.4Z" class="ci-primary" />
                    </svg>
                    Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                    </svg>
                    Auto
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                 <?=$user['nombre'];?>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Cuenta</div>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="modules/account/change_password.php">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M384 200v-56a128 128 0 0 0-256 0v56H88v128c0 92.635 75.364 168 168 168s168-75.365 168-168V200Zm-224-56a96 96 0 0 1 192 0v56H160Zm232 184c0 74.99-61.01 136-136 136s-136-61.01-136-136v-96h272Z" class="ci-primary" />
                  </svg>
                  Cambiar Contraseña
                </a>
                <a class="dropdown-item" href="logout.php">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M77.155 272.034H351.75v-32.001H77.155l75.053-75.053v-.001l-22.628-22.626-113.681 113.68.001.001h-.001L129.58 369.715l22.628-22.627v-.001z" class="ci-primary" />
                    <path fill="var(--ci-primary-color, currentcolor)" d="M160 16v32h304v416H160v32h336V16z" class="ci-primary" />
                  </svg> <span class="navbar-text d-none d-lg-inline text-light small">
                    <i class="fa-solid fa-right-from-bracket"></i> 
                  Cerrar Sesión
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>Home</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">