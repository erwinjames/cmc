<?php
 session_start();
 if(!isset($_SESSION["username"]) && $_SESSION["id"]){
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
      <div class="panel-option " >
       <i class="material-icons">computer</i>
       <a href="home.php"><p>Dashboard</p></a>
      </div>
      
      <div class="panel-option active">
        <i class="material-icons">work</i>
        <a href="career_table.php"><p>Your Career</p></a>
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
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                <h3 class="text-3xl text-gray-600 font-semibold leading-tight my-3">Posted Career</h3>
                <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Career Title</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Description</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Date</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                        <?php
                include "../../includes/connection.php";
                $sql= "SELECT * FROM career";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $resultSet = $stmt->get_result();
                $result = $resultSet->fetch_all();
                foreach($result as $row){    ?>
                                <tr>
                           
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900"><?php echo $row[1]; ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5"><?php echo $row[2];?></td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5"><?php echo $row[4];?></td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>

                                        <?php
                                           if ($row[5]==1) {
                                            echo " <td class='px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5'>
                                            <span class='relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight'>
                                            <span aria-hidden class='absolute inset-0 bg-green-200 opacity-50 rounded-full'></span>
                                            <span class='relative text-xs'>active</span>
                                            </span>";
                                           }
                                           else {
                                              echo " <td class='px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5'>
                                              <span class='relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight'>
                                              <span aria-hidden class='absolute inset-0 bg-red-200 opacity-50 rounded-full'></span>
                                              <span class='relative text-xs'>not active</span>
                                              </span>";
                                           }
                                        ?>
                                        
                                    </span>
                                    </td>
                                   
                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <a href="../script/changing_status.php?id=<?php echo $row[0]; ?>&&status=<?php echo $row[5]; ?>" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Change Status</a>
                                  </td>
                             </tr>
                <?php } ?>

                        </tbody>
                    </table>
                  <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
        <div>
            <p class="text-sm leading-5 text-blue-700">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">200</span>
                of
                <span class="font-medium">2000</span>
                results
            </p>
        </div>
        <div>
            <nav class="relative z-0 inline-flex shadow-sm">
                <div	>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        1
                    </a>
                  <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        2
                    </a>
                   <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        3
                    </a>
                </div>
                <div v-if="pagination.current_page < pagination.last_page">
                    <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
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
<!-- main js -->
 <script src="../assets/js/main.js"></script>
</html>