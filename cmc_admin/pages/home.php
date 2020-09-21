<?php
 session_start();
 if(!isset($_SESSION["username"])){
  header('Location: ../index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.0/tailwind.min.css">
<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <section class="navigation">
    <p class="title">
      CMC PANEL
    </p>
    <div class="pic_container"><img class="profile-pic" src="../assets/img/cmc.png" alt=""></div>
    <p class="name">
     <?php

    echo  $_SESSION['username'];
     
     ?>
   </p>
      <div class="function-wrapper">
      <a id="profile" class="function"><i class="material-icons">account_circle</i></a>
        <div class="mdl-tooltip" for="profile">
        Profile
        </div>
        
      <a id="settings" class="function"><i class="material-icons">settings</i></a>
        <div class="mdl-tooltip" for="settings">
        Settings
        </div>
        
        
      <a id="logout" href="../script/logout_script.php" class="function"><i class="material-icons">logout</i></a>
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
        <i class="material-icons">work</i>
        <p>Your Career</p>
      </div>
      
    <div>
  </section>
<section class="page-content">  
    <div class="header flex items-center">
      <div class="header__container">
      <div class="p-9 justify-end w-1/5">
  <div class="bg-white flex items-left rounded-full shadow-xl">
    <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">
    
    <div class="p-4 ">
      <button class="bg-blue-500 text-white rounded-full hover:bg-blue-400 focus:outline-none w-10 h-10 flex items-center justify-center">
        <i class="material-icons">search</i>
      </button>
      </div>
    </div>
  </div>
      </div>
  
</div>
    </div> 
        <div class="content">
          <div class="statistic">
          <div class="bg-gray-200 flex items-center justify-center px-5 py-5">
        <div class="w-full max-w-3xl">
        <div class="-mx-2 md:flex">
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">News</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">Career</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                            <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
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
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="lower__contents">
  <div class="lower__container flex items-center justify-center px-5 py-5">
    <form action="" class="bg-white shadow-md rounded w-1/2 px-8 pt-6 pb-8 mb-4">
    <h3 class="text-3xl text-gray-600 font-semibold leading-tight my-3">Post Career</h3>
    <div class="mb-8">
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Career Title">
    </div>
    <div class="mb-6">
    <textarea class="resize-y shadow appearance-none border rounded w-full py-6 px-3 rounded leading-tight focus:outline-none focus:shadow-outline" placeholder="Career Description" type="text" placeholder="Career Title"></textarea>
    </div>
    <div class="mb-6 items-center justify-center">
    <button class="bg-blue-500 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
      Post This Career  
    </button>
    </div>
    </form>
  </div>
</div>  
</div>
   
</section>
</body>
<!-- script =============================================-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- main js -->
 <script src="assets/js/main.js"></script>
</html>