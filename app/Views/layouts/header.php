<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sofin Group</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    
</head>
<body>

<!-- Dark Theme Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <!-- 1. Logo on the Far Left -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://getbootstrap.com" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
      <span>Brand</span>
    </a>

    <!-- 2. Mobile Toggler Button (Triggers Right-Side Offcanvas) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- 3. Desktop / Main Navbar Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Four links aligned to the left -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('services'); ?>">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
        </li>
      </ul>
    </div>

    <!-- 4. Offcanvas Sidebar (Slides in from the right: 'offcanvas-end') -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Five separate links inside the offcanvas menu -->
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</nav>
       

<div class="container mt-4">