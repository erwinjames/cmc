<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.0/tailwind.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <section class="navigation">
    <p class="title">
      CMC PANEL
    </p>
    <div class="pic_container"><img class="profile-pic" src="assets/img/cmc.png" alt=""></div>
    <p class="name">
            ADMIN
   </p>
      <div class="function-wrapper">
      <button id="profile" class="function"><i class="material-icons">account_circle</i></button>
        <div class="mdl-tooltip" for="profile">
        Profile
        </div>
        
      <button id="settings" class="function"><i class="material-icons">settings</i></button>
        <div class="mdl-tooltip" for="settings">
        Settings
        </div>
        
        
      <button id="logout" class="function"><i class="material-icons">logout</i></button>
        <div class="mdl-tooltip" for="logout">
        Log out
        </div>
    </div>
    
    <div class="options-wrapper">
      <div class="panel-option active">
        <i class="material-icons">computer</i>
        <p>Dashboard</p>
      </div>
      
      <div class="panel-option">
        <i class="material-icons">account_box</i>
        <p>Users</p>
      </div>
      
      <div class="panel-option">
        <i class="material-icons">pie_chart</i>
        <p>Statistics</p>
      </div>
      
      <div class="panel-option">
        <i class="material-icons">receipt</i>
        <p>Reports</p>
      </div>
      
      <div class="panel-option">
        <i class="material-icons">info</i>
        <p>Info</p>
      </div>
    <div>
  </section>
      
<section class="page-content">  
    <div class="header">

    </div> 
        <div class="content">
        <div class="bg-gray-200 flex items-center justify-center px-5 py-5">
    <div class="w-full max-w-3xl">
        <div class="-mx-2 md:flex">
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">Users</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">Subscribers</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                            <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">Comments</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
</div>
</section>
</body>
<!-- script =============================================-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<!-- main js -->
 <script src="assets/js/main.js"></script>
</html>