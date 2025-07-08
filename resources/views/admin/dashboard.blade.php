
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets-back/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets-back/img/favicon.png')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <title>
    HOTEL EKOC
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets-back/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets-back/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets-back/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets-back/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>

<style>
  body {
      background-color: #f4f6f9;
  }
  .card {
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      border: none;
  }
  .card-header {
      text-align: center;
      font-weight: bold;
      background-color: #3bcce2;
      color: white;
      padding: 15px;
      font-size: 1.25rem;
  }
  .dataTables_wrapper {
      padding: 20px;
  }
  .dataTables_filter, .dataTables_length {
      margin-bottom: 15px;
  }
  .dataTables_filter input {
      border: 1px solid #17a2b8;
      border-radius: 4px;
      padding: 6px 12px;
      transition: border-color 0.3s ease;
  }
  .dataTables_filter input:focus {
      outline: none;
      border-color: #0056b3;
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
  }
  .dataTables_length select {
      border: 1px solid #17a2b8;
      border-radius: 4px;
      padding: 6px;
  }
  .dataTables_paginate .paginate_button {
      margin: 0 5px;
      padding: 6px 12px;
      border: 1px solid #17a2b8;
      border-radius: 4px;
      background-color: #3bcce2;
      color: white !important;
      cursor: pointer;
      transition: all 0.3s ease;
  }
  .dataTables_paginate .paginate_button:hover {
      background-color: #3bcce2;
  }
  .dataTables_paginate .paginate_button.current {
      background-color: #3bcce2!important;
  }
  .dataTables_paginate .paginate_button.disabled {
      background-color: #6c757d;
      cursor: not-allowed;
  }
  .table thead {
      background-color: #f8f9fa;
  }
  .btn-group .btn {
      background-color: #17a2b8 !important;
      border-color: #17a2b8 !important;
      color: white !important;
      transition: all 0.3s ease;
  }
  .btn-group .btn:hover {
      background-color: #3bcce2 !important;
  }
</style>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank" style="background-color: #b3e5fc;">
        <img src="{{asset('assets-back/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " >
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Reservas</span>
          </a>
          <a class="nav-link  " href="{{ route('hotels.create')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Hotel</span>
          </a>
          <a class="nav-link  " href="{{ route('rooms.create')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Habitación</span>
          </a>
          <a class="nav-link  " href="{{ route('hotels.index')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Datos del hotel</span>
          </a>
          <a class="nav-link  " href="{{ route('rooms.index')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Datos de la habitación</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav ms-auto">
            
            <!-- Menú desplegable con icono de usuario -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a class="nav-link text-body p-0" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle fa-lg cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="userDropdown">
                <!-- Opciones del menú -->
                <li>
                  <!-- Botón de Cerrar sesión -->
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-black">
                      <i class="fas fa-sign-out-alt me-2"></i> Cerrar sesión
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- End Navbar -->
    {{-- <div class="container mt-4">        
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="d-flex justify-content-center align-items-center">
              <h2 class="text-center text-info">Lista de reservas</h2>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                        <th class="text-center text-dark">Usuario</th>
                        <th class="text-center text-dark">Email</th>
                        <th class="text-center text-dark">Hoteles</th>
                        <th class="text-center text-dark">Habitaciones</th>
                        <th class="text-center text-dark">Día de Ingreso</th>
                        <th class="text-center text-dark">Día de Salida</th>
                        <th class="text-center text-dark">Personas</th>
                        <th class="text-center text-dark">Estado</th>
                        <th class="text-center text-dark">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($reservations as $reservation)
                  <tr class="border-b">
                      <td class="px-4 py-2">{{ $reservation->user->name }}</td>
                      <td>{{ $reservation->user->email }}</td>
                      <td>{{ $reservation->hotels->name }}</td>
                      <td class="px-4 py-2">{{ $reservation->room->name }}</td>
                      <td class="px-4 py-2">{{ $reservation->check_in_date  }}</td>
                      <td class="px-4 py-2">{{ $reservation->check_out_date }}</td>
                      <td class="px-4 py-2">{{ $reservation->num_people }}</td>
                      <td class="px-4 py-2">{{ $reservation->status }}</td>
                      <td class="px-4 py-2">
                          <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block">
                              @csrf
                              @method('PUT')
                              <button type="submit" name="status" value="Aprobado" class="btn btn-light">
                                  Aprobar
                                  @if (session('success_reservation_id') == $reservation->id && session('success_status') == 'Aprobado')
                                      <span class="text-success d-block" style="color: #F2EFE7; font-size: 12px;">Actualizado</span>
                                  @endif
                              </button>
                          </form>
                          <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block ml-2">
                              @csrf
                              @method('PUT')
                              <button type="submit" name="status" value="Cancelado" class="btn btn-info text-dark">
                                  Cancelar
                                  @if (session('success_reservation_id') == $reservation->id && session('success_status') == 'Cancelado')
                                      <span class="text-danger d-block" style="color: #F2EFE7; font-size: 12px;">Actualizado</span>
                                  @endif
                              </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach 
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div> --}}
  <div class="container-fluid p-3">
    <div class="card">
        <div class="card-header">
            Tabla de Reservaciones
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped" id="reservationsTable">
                <thead>
                    <tr>
                        <th class="text-center">Usuario</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Hoteles</th>
                        <th class="text-center">Habitaciones</th>
                        <th class="text-center">Día de Ingreso</th>
                        <th class="text-center">Día de Salida</th>
                        <th class="text-center">Personas</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                        <td class="text-center">{{ $reservation->user->name }}</td>
                        <td class="text-center">{{ $reservation->user->email }}</td>
                        <td class="text-center">{{ $reservation->hotels->name }}</td>
                        <td class="text-center">{{ $reservation->room->name }}</td>
                        <td class="text-center">{{ $reservation->check_in_date }}</td>
                        <td class="text-center">{{ $reservation->check_out_date }}</td>
                        <td class="text-center">{{ $reservation->num_people }}</td>
                        <td class="text-center">{{ $reservation->status }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="me-1">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="status" value="Aprobado" class="btn btn-sm">
                                        Aprobar
                                    </button>
                                </form>
                                <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="status" value="Cancelado" class="btn btn-sm">
                                        Cancelar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
  
  </main>
  
  <!--   Core JS Files   -->
  <script src="{{asset('assets-back/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets-back/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-back/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets-back/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets-back/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.9,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets-back/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap5.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#reservationsTable').DataTable({
              language: {
                  sProcessing: "Procesando...",
                  sLengthMenu: "Mostrar _MENU_ registros",
                  sZeroRecords: "No se encontraron resultados",
                  sEmptyTable: "Ningún dato disponible en esta tabla",
                  sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  sInfoEmpty: "Mostrando 0 registros",
                  sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                  sSearch: "Buscar:",
                  oPaginate: {
                      sFirst: "Primero",
                      sLast: "Último",
                      sNext: "Siguiente",
                      sPrevious: "Anterior"
                  }
              },
              responsive: true,
              scrollX: true,
              pageLength: 10,
              lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
              order: [[0, 'asc']],
              dom: '<"row"<"col-sm-6"l><"col-sm-6"f>>' +
                   '<"row"<"col-sm-12"rt>>' +
                   '<"row"<"col-sm-5"i><"col-sm-7"p>>'
          });
      });
  </script>

</body>

</html>


{{-- <div class="container-fluid py-4">
  <div class="row my-4">
      <div class="col">
          <div class="card">
              <div class="card-header pb-0">
                  <div class="row">
                      <div class="d-flex justify-content-center align-items-center">
                          <h2 class="text-center text-info">Lista de reservas</h2>
                      </div>
                      <div class="col-lg-6 col-5 my-auto text-end">
                          <div class="dropdown float-lg-end pe-4"></div>
                      </div>
                  </div>
              </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive">
                      <table class="min-w-full table-auto">
                          <thead>
                              <tr>
                                  <th class="text-center text-dark">Usuario</th>
                                  <th class="text-center text-dark">Email</th>
                                  <th class="text-center text-dark">Hoteles</th>
                                  <th class="text-center text-dark">Habitaciones</th>
                                  <th class="text-center text-dark">Día de Ingreso</th>
                                  <th class="text-center text-dark">Día de Salida</th>
                                  <th class="text-center text-dark">Personas</th>
                                  <th class="text-center text-dark">Estado</th>
                                  <th class="text-center text-dark">Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($reservations as $reservation)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $reservation->user->name }}</td>
                                <td>{{ $reservation->user->email }}</td>
                                <td>{{ $reservation->hotels->name }}</td>
                                <td class="px-4 py-2">{{ $reservation->room->name }}</td>
                                {{-- <td class="px-4 py-2">{{ $reservation->created_at->format('d/m/Y H:i') }}</td> --}}
                                {{-- <td class="px-4 py-2">{{ $reservation->check_in_date  }}</td>
                                <td class="px-4 py-2">{{ $reservation->check_out_date }}</td>
                                <td class="px-4 py-2">{{ $reservation->num_people }}</td>
                                <td class="px-4 py-2">{{ $reservation->status }}</td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="status" value="Aprobado" class="btn btn-light">
                                            Aprobar
                                            @if (session('success_reservation_id') == $reservation->id && session('success_status') == 'Aprobado')
                                                <span class="text-success d-block" style="color: #F2EFE7; font-size: 12px;">Actualizado</span>
                                            @endif
                                        </button>
                                    </form>
                                    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block ml-2">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="status" value="Cancelado" class="btn btn-info text-dark">
                                            Cancelar
                                            @if (session('success_reservation_id') == $reservation->id && session('success_status') == 'Cancelado')
                                                <span class="text-danger d-block" style="color: #F2EFE7; font-size: 12px;">Actualizado</span>
                                            @endif
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach 
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> --}} 