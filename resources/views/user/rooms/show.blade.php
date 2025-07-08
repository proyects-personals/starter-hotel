<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets-back/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets-back/img/favicon.png')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
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
          <a class="nav-link " href="{{ route('user.dashboard')}}" >
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
            <span class="nav-link-text ms-1">Agendar</span>
          </a>
          <a class="nav-link  " href="{{ route('reservations.index') }}">
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
            <span class="nav-link-text ms-1">Estado de reservas</span>
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
    
    <!-- End  Navbar -->
    
    {{-- <div class="container mt-4"> 
      <div class="page-inner">
          <div class="row justify-content-center">
              <div class="col-md-12"> <!-- Ancho ajustado para centrar -->
                  <div class="card shadow rounded border border-light"> <!-- Borde gris claro y sombra -->
                      <div class="card-header bg-info text-center text-dark rounded-top py-3"> <!-- Encabezado estilizado -->
                          <h1 class="mb-1">Habitaciones Disponibles</h1>
                          <p class="text-white mb-0" style="font-size: 15px;">Selecciona la habitación que deseas reservar</p>
                      </div>
                      <div class="card-body">
                          <div class="row g-4"> <!-- Espaciado entre las tarjetas -->
                              @foreach ($rooms as $room)
                                  <div class="col-md-6 col-lg-4"> <!-- Ajuste dinámico del tamaño según la pantalla -->
                                      <div class="card shadow-sm h-100 rounded border border-muted"> <!-- Borde gris y sombra suave -->
                                          <div class="card-body d-flex flex-column p-3"> <!-- Contenido vertical centrado -->
                                              <div class="flex text-center">
                                                  @if ($room->image)
                                                      <img class="w-1/3 h-32 object-cover rounded"  src="{{ asset('storage/' . $room->image) }}" alt="Imagen de la habitación">
                                                  @else
                                                      <img style="width: 240px; height: 150px;" class="object-cover rounded" src="{{ asset('imagenes/fondo.jpg') }}" alt="Imagen predeterminada"> 
                                                  @endif
                                              </div>
  
                                              <h3 class="card-title text-center text-black" style="font-weight: bold; font-size: 24px;">
                                                  {{ $room->name }}
                                              </h3>
                                              <p class="card-text text-center flex-grow-1">{{ $room->description }}</p>
                                              <p class="text-gray-600 text-sm text-center">Precio por noche: {{ $room->capacity }}</p>
  
                                              @if ($room->capacity > 0)
                                                  @php
                                                      $reservation = $room->reservations()->where('user_id', auth()->id())->first();
                                                  @endphp
                                                  
                                                  @if ($reservation) 
                                                      @if ($reservation->status == 'pendiente')
                                                          <p class="text-warning text-sm mt-2 text-center">Su reserva está pendiente de aprobación.</p>
                                                      @elseif ($reservation->status == 'Aprobado')
                                                          <p class="text-success text-sm mt-2 text-center">Su reserva ha sido aprobada. ¡Gracias por reservar con nosotros!</p>
                                                      @elseif ($reservation->status == 'Cancelado')
                                                          <p class="text-danger text-sm mt-2 text-center">Por disponibilidad, su reserva ha sido rechazada. Si gusta, tenemos más habitaciones disponibles.</p>
                                                      @endif
                                                  @else
                                                      <form action="{{ route('reservations.create') }}" method="POST">
                                                          @csrf
                                                          <input type="hidden" name="rooms_id" value="{{ $room->id }}">
                                                          <input type="hidden" name="hotels_id" value="{{ $room->hotels_id }}">
                                                          <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                          <input type="hidden" name="status" value="pendiente">
                                                          <div class="form-group">
                                                              <label for="check_in_date">Día de ingreso:</label>
                                                              <input type="date" name="check_in_date" id="check_in_date" class="form-control" required>
                                                          </div>
  
                                                          <div class="form-group">
                                                              <label for="check_out_date">Día de salida:</label>
                                                              <input type="date" name="check_out_date" id="check_out_date" class="form-control" required>
                                                          </div>
  
                                                          <div class="form-group">
                                                              <label for="num_people">Cantidad de personas:</label>
                                                              <input type="number" name="num_people" id="num_people" class="form-control" min="1" required>
                                                          </div>
  
                                                          <div class="mt-4 text-center">
                                                              <button type="submit" class="btn btn-info text-white">Reservar habitación</button>
                                                          </div>
                                                      </form>
                                                  @endif
                                                  
                                              @else
                                                  <p class="text-red-500 text-sm mt-2 text-center">No hay capacidad disponible para esta habitación.</p>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </div>
  </div> --}}
<div class="container mt-4">   
    <div class="page-inner">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow rounded border border-light">
                    <div class="card-header bg-info text-center text-dark rounded-top py-3">
                        <h1 class="mb-1">Habitaciones</h1>
                        <p class="text-white mb-0" style="font-size: 15px;">Selecciona la habitación que deseas reservar</p>
                    </div>
                    <div class="card-body">
                        <!-- Mensajes de éxito o error -->
                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- Mostrar errores de validación -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Lista de habitaciones -->
                        <div class="row g-4">
                            @foreach ($rooms as $room)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm h-100 rounded border border-muted">
                                        <div class="card-body d-flex flex-column p-3">
                                            <div class="text-center">
                                              @if ($room->image)
                                              <img class="img-fluid rounded" src="{{ asset('storage/' . $room->image) }}" alt="Imagen de la habitación">
                                              @else
                                              <img class="img-fluid rounded" src="{{ asset('imagenes/habi.jpeg') }}" alt="Imagen predeterminada">
                                              @endif
                                          
                                                
                                            </div>
                                            <h3 class="card-title text-center text-black" style="font-weight: bold; font-size: 24px;">
                                                {{ $room->name }}
                                            </h3>
                                            
                                            <p class="card-text text-center flex-grow-1">{{ $room->description }}</p>
                                            <p class="text-gray-600 text-sm text-center">Precio por noche: {{ $room->capacity }}</p>
                                            @if ($room->check_in_date = 'check_in_date')
                                                <form action="{{ route('reservations.create') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="hotels_id" value="{{ $room->hotels_id }}">
                                                    <input type="hidden" name="rooms_id" value="{{ $room->id }}">
                                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                    <div class="form-group">
                                                        <label for="check_in_date_{{ $room->id }}">Día de ingreso:</label>
                                                        <input type="date" name="check_in_date" id="check_in_date_{{ $room->id }}" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="check_out_date_{{ $room->id }}">Día de salida:</label>
                                                        <input type="date" name="check_out_date" id="check_out_date_{{ $room->id }}" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="num_people_{{ $room->id }}">Cantidad de personas:</label>
                                                        <input type="number" name="num_people" id="num_people_{{ $room->id }}" class="form-control" min="1" required>
                                                    </div>
                                                    <div class="mt-4 text-center">
                                                        <button type="submit" class="btn btn-info text-white">Reservar habitación</button>
                                                    </div>
                                                </form>
                                            @else
                                                <p class="text-red-500 text-sm mt-2 text-center">No hay capacidad disponible para esta habitación.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

<style>
  .img-fluid {
      width: 100%; /* Ancho completo dentro del contenedor */
      height: 250px; /* Altura fija para todas las imágenes */
      object-fit: cover; /* Ajusta la imagen sin deformarla */
  }
</style>

  
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
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
</body>

</html>










{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Habitaciones Disponibles en: ' . $hotels->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-4">Habitaciones Disponibles</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($rooms as $room)
                            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                                <div class="px-6 py-4">
                                    <td class="w-1/2">
                                        @if ($room->image)
                                            <img class="w-1/3 h-32 object-cover rounded" src="{{ asset('storage/' . $room->image) }}" alt="Imagen de la habitación">
                                        @else
                                        <img style="width: 240px; height: 150px;" class="object-cover rounded" src="{{ asset('imagenes/fondo.jpg') }}" alt="Imagen predeterminada"> 
                                        @endif
                                    </td>
                                    
                                    <div class="font-bold text-xl mb-2">{{ $room->name }}</div>
                                    <p class="text-gray-700 text-base">{{ $room->description }}</p>
                                    <p class="text-gray-600 text-sm">Precio por noche: {{ $room->capacity }}</p>

                                    @if ($room->capacity > 0)
                                        @php
                                            $hasReservation = $room->reservations()->where('user_id', auth()->id())->exists();
                                        @endphp

                                        @if ($hasReservation)
                                            <p class="text-red-500 text-sm mt-2">Debe esperar a que su reservacion sea aprovada.</p>
                                        @else
                                            <!-- Botón para realizar la reserva -->
                                            <form action="{{ route('reservations.create') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="rooms_id" value="{{ $room->id }}">
                                                <input type="hidden" name="hotels_id" value="{{ $room->hotels_id }}">
                                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                <input type="hidden" name="status" value="pendiente">
                                            
                                                <div class="mt-4">
                                                    <button type="submit"  class="btn btn-info text-with">Reservar habitación </button> 
                                                </div>
                                            </form>
                                            
                                        @endif
                                    @else
                                        <p class="text-red-500 text-sm mt-2">No hay capacidad disponible para esta habitacion.</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout> --}}
