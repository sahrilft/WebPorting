<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Job</title>
</head>
<?php 
    session_start();
    include 'header.php';


?>
<style>
    body{
        font-family: 'Poppins', sans-serif!important;
    }
    .bg-card-nav{
        background-color: #71f5c9;
    }
    .nav-pills .active{
        background-color: #71f5c9!important;
        color: black!important;
        border-bottom: 4px solid black;
    }
    .nav-item a{
        color: black!important;
    }
     .hideung{
        color: white!important;
    }
    .bodas{
        color: white!important;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 pb-1 col-lg-12 bg-card-nav" style="color:white!important">
            <ul class="nav pt-1 nav-pills justify-content-start">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" >Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=work_add">Add Data</a>
                </li>
              
            </ul>
                
        </div>  
    </div>
</div>
<body>
    <div class="row pt-3">
        <div class="col-12 bg-white py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        Planning Today
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-fluid pt-4">
        <div class="row">
                <div class="col-12 col-md-12 col-lg-4 pb-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pt-2 pb-2" id="btnGroupAddon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <input class="border border-light" type="text" id="min" name="min" placeholder="From" style="width: 125px">&nbsp
                        <div class="input-group-prepend">
                          <div class="input-group-text pt-2 pb-2" id="btnGroupAddon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <input class="border border-light" type="text" id="max" name="max" placeholder="To" style="width: 125px">
                    </div>  
                </div>
                <div class="col-12 col-md-12 col-lg-8 text-lg-end text-md-start">
                    <div id="outside"></div>
                </div>
                <div class="col-12 pt-4">
                    <div class="card bg-card-two shadow-sm border-0">
                        <div class="card-body">
                            <table id="example" class="table" style="background-color:rgba(0, 0, 0, 0); color: grey; ">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Production Date</th>
                                            <th>Line Name</th>
                                            <th>Shift No</th>
                                            <th>Type Product</th>
                                            <th>Production Number</th>
                                            <th>Product/Part No</th>  
                                            <th>Product/Part Name</th>
                                            <th>Target</th>
                                            <th>Cycle Time</th>
                                            <th>Working Time</th> 
                                            <th>Start Time</th>  
                                            <th>End Time</th>      
                                            <th>Status</th>  
                                            <th>Action</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php

                                                include 'koneksi-1.php';

                                                $employee = mysqli_query($koneksi,"select * from planning");
                                                $id = 1;
                                                while($row = mysqli_fetch_array($employee))
                                                {
                                                    $s = $row['production_date'];
                                                    
                                                echo "<tr>
                                                    <td>".$id++."</td>
                                                    <td>".$row['production_date']."</td>
                                                    <td>".$row['name_line']."</td>
                                                    <td>".$row['shft_no']."</td>
                                                    <td>".$row['type_prod']."</td>   
                                                    <td>".$row['no_prod']."</td>   
                                                    <td>".$row['part_no']."</td>   
                                                    <td>".$row['part_name']."</td>   
                                                    <td>".$row['target']."</td>   
                                                    <td>".$row['cycle_time']."</td> 
                                                    <td>".$row['working_time']."</td>  
                                                    <td>".$row['start_time']."</td>   
                                                    <td>".$row['end_time']."</td> 
                                                    <td>".$row['status']."</td>   
                                                    <td>
                                                        <button type='button' class='btn btn-labeled btn-success'>
                                                            <a class='hideung' href='index.php?page=view_user.php?user_id=".$row['id']."'>
                                                                <span class='btn-label'>
                                                                    <i class='fas fa-edit'>
                                                                    </i>
                                                                </span>
                                                            </a>
                                                        </button>

                                                        <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#update".$row['id']."'>
                                                          <span class='btn-label'>
                                                                <i class='fas fa-edit'></i>
                                                            </span>
                                                        </button>

                                                        <div class='modal fade' id='update".$row['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                          <div class='modal-dialog'>
                                                            <div class='modal-content'>
                                                              <div class='modal-header'>
                                                                <h5 class='modal-title' id='exampleModalLabel'>Action Alert</h5>
                                                                <button type='button' class='btn-close' data-bs-dismiss='modal aria-label='Close'></button>
                                                              </div>
                                                              <div class='modal-body'>
                                                                Are you sure to delete this record?
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                                                                <button type='button' class='btn btn-primary'><a class='bodas' href='action/manage_user.php?user_id=".$row['id']."'>
                                                                <span class='btn-label'>
                                                                    Delete
                                                                </span>
                                                            </a></button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>


                                                        
                                                        <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['id']."'>
                                                          <span class='btn-label'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </span>
                                                        </button>

                                                        <div class='modal fade' id='exampleModal".$row['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                          <div class='modal-dialog'>
                                                            <div class='modal-content'>
                                                              <div class='modal-header'>
                                                                <h5 class='modal-title' id='exampleModalLabel'>Action Alert</h5>
                                                                <button type='button' class='btn-close' data-bs-dismiss='modal aria-label='Close'></button>
                                                              </div>
                                                              <div class='modal-body'>
                                                                Are you sure to delete this record?
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                                                                <button type='button' class='btn btn-primary'><a class='bodas' href='action/manage_user.php?user_id=".$row['id']."'>
                                                                <span class='btn-label'>
                                                                    Delete
                                                                </span>
                                                            </a></button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>


                                                        
                                                    </td>
                                                </tr>";
                                                }
                                            ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
</body>
<footer>
    <ul class="nav justify-content-center fixed-bottom">
      <li class="nav-item">
        <a class="nav-link active" href="#" style="color: grey;">Lestari Elektrik Otomasi &copy 2021</a>
      </li>
    </ul>
</footer>

<script>
    var minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[1] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
    var table = $('#example').DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false
    });
   new $.fn.dataTable.Buttons( table, {

    buttons: [
                    {
                        extend:    'colvis',
                        text:      '<i class="fas fa-eye"></i>',
                        titleAttr: 'Visibility',
                        className: 'btn btn-md mr-2 btn-colvis'
                    },
                    {
                        extend:    'copy',
                        text:      '<i class="fas fa-copy"></i>',
                        titleAttr: 'Copy',
                        className: 'btn btn-md mr-2 btn-copy'
                    },
                    {
                        extend:    'excel',
                        text:      '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Excel',
                        className: 'btn btn-md mr-2 btn-excel'
                    },
                    {
                        extend:    'pdf',
                        text:      '<i class="fas fa-file-pdf"></i>',
                        title:     min, 
                        titleAttr: 'PDF',
                        className: 'btn btn-md mr-2 btn-pdf'
                    },
                    {
                        extend:    'print',
                        text:      '<i class="fas fa-print"></i>',
                        titleAttr: 'Print',
                        className: 'btn btn-md mr-2 btn-print'
                    },
                    
    ]
} );
   table.buttons().container()
    .appendTo("#outside" );
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });
});
</script>
    </div>
</body>

</html>