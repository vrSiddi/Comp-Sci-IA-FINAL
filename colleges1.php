<?php
    include_once 'header.php';

    if(!isset($_SESSION["useruid"])){
        header("location: SignIn.php");
    }
?>




  <main>
  
    <div class="container mt-3" id = "pos">
    <h1 class = "mb-2">Colleges</h1>
        <div id="accordion" >
            <div class="card d-none" id = "college1">
                <div class="card-header">
                        <!--College Name-->
                        <h3 class = "d-inline-block" id="cn1">College Number 1</h3>
                        <!--Edit and Delete Buttons-->
                        <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delCollege" data-bs-whatever="cd1" >
                            <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this college from your list"></i>
                        </button>
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editCollege" data-bs-whatever="ce1">
                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit this college's information"></i>
                        </button>
                        <!--Due Date Information-->
                        <div class = "justify-content-end"> 
                            <h5 class = "d-inline-block">Due Date:</h5>
                            <h5 class = "d-inline-block" id = "dd1">01/15</h5>
                        </div>
                
                    <!--Expand Button-->
                    <div class = "text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                        See More
                        </a>
                    </div>
                </div>
            
                <!--Hidden Card Information-->
                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class = container mt-2>
                            <h6>Essay Completion Progress</h6>
                            <div class="progress">
                                <div class="progress-bar" style="min-width:5%" id = "prog1">2/3</div>
                            </div>
                            <div class = "text-center mt-3">
                            <form action = "includes/colleges.inc.php" method = "post">
                                <button class = "btn btn-info" type = "submit" value = "1" name = "link">Edit Essays </button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="card d-none" id ="college2">
                <div class="card-header">
                        <!--College Name-->
                        <h3 class = "d-inline-block" id = "cn2">College Number 2</h3>
                        <!--Edit and Delete Buttons-->
                        <button type="button" class="btn btn-danger float-end mx-1" data-bs-toggle="modal" data-bs-target="#delCollege" data-bs-whatever="cd2"  >
                            <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this college from your list"></i>
                        </button>
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editCollege" data-bs-whatever="ce2">
                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit this college's information"></i>
                        </button>
                        <!--Due Date Information-->
                        <div class = "justify-content-end"> 
                            <h5 class = "d-inline-block">Due Date:</h5>
                            <h5 class = "d-inline-block" id = "dd2">01/15</h5>
                        </div>
                
                    <!--Expand Button-->
                    <div class = "text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse2">
                        See More
                        </a>
                    </div>
                </div>
            
                <!--Hidden Card Information-->
                <div id="collapse2" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class = container mt-2>
                            <h6>Essay Completion Progress</h6>
                            <div class="progress">
                                <div class="progress-bar" style="min-width:5%" id = "prog2">2/3</div>
                            </div>
                            <div class = "text-center mt-3">
                                <form action = "includes/colleges.inc.php" method = "post">
                                <button class = "btn btn-info" type = "submit" value = "2" name = "link">Edit Essays </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Card 3-->
            <div class="card d-none" id = "college3">
                <div class="card-header">
                        <!--College Name-->
                        <h3 class = "d-inline-block" id="cn3">College Number 3</h3>
                        <!--Edit and Delete Buttons-->
                        <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delCollege" data-bs-whatever="cd3" >
                            <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this college from your list"></i>
                        </button>
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editCollege" data-bs-whatever="ce3">
                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit this college's information"></i>
                        </button>
                        <!--Due Date Information-->
                        <div class = "justify-content-end"> 
                            <h5 class = "d-inline-block">Due Date:</h5>
                            <h5 class = "d-inline-block" id = "dd3">01/15</h5>
                        </div>
                
                    <!--Expand Button-->
                    <div class = "text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse3">
                        See More
                        </a>
                    </div>
                </div>
            
                <!--Hidden Card Information-->
                <div id="collapse3" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class = container mt-2>
                            <h6>Essay Completion Progress</h6>
                            <div class="progress">
                                <div class="progress-bar" style="min-width:5%" id = "prog3">2/3</div>
                            </div>
                            <div class = "text-center mt-3">
                            <form action = "includes/colleges.inc.php" method = "post">
                                <button class = "btn btn-info" type = "submit" value = "3" name = "link">Edit Essays </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Card 4-->
            <div class="card d-none" id = "college4">
                <div class="card-header">
                        <!--College Name-->
                        <h3 class = "d-inline-block" id="cn4">College Number 4</h3>
                        <!--Edit and Delete Buttons-->
                        <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delCollege" data-bs-whatever="cd4" >
                            <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this college from your list"></i>
                        </button>
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editCollege" data-bs-whatever="ce4">
                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit this college's information"></i>
                        </button>
                        <!--Due Date Information-->
                        <div class = "justify-content-end"> 
                            <h5 class = "d-inline-block">Due Date:</h5>
                            <h5 class = "d-inline-block" id = "dd4">01/15</h5>
                        </div>
                
                    <!--Expand Button-->
                    <div class = "text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse4">
                        See More
                        </a>
                    </div>
                </div>
            
                <!--Hidden Card Information-->
                <div id="collapse4" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class = container mt-2>
                            <h6>Essay Completion Progress</h6>
                            <div class="progress">
                                <div class="progress-bar" style="min-width:5%" id = "prog4">2/3</div>
                            </div>
                            <div class = "text-center mt-3">
                            <form action = "includes/colleges.inc.php" method = "post">
                                <button class = "btn btn-info" type = "submit" value = "4" name = "link">Edit Essays </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card d-none" id = "college5">
                <div class="card-header">
                        <!--College Name-->
                        <h3 class = "d-inline-block" id="cn5">College Number 5</h3>
                        <!--Edit and Delete Buttons-->
                        <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delCollege" data-bs-whatever="cd5" >
                            <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this college from your list"></i>
                        </button>
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editCollege" data-bs-whatever="ce5">
                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit this college's information"></i>
                        </button>
                        <!--Due Date Information-->
                        <div class = "justify-content-end"> 
                            <h5 class = "d-inline-block">Due Date:</h5>
                            <h5 class = "d-inline-block" id = "dd5">01/15</h5>
                        </div>
                
                    <!--Expand Button-->
                    <div class = "text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse5">
                        See More
                        </a>
                    </div>
                </div>
            
                <!--Hidden Card Information-->
                <div id="collapse5" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class = container mt-2>
                            <h6>Essay Completion Progress</h6>
                            <div class="progress">
                                <div class="progress-bar" style="min-width:5%" id = "prog5">2/3</div>
                            </div>
                            <div class = "text-center mt-3">
                            <form action = "includes/colleges.inc.php" method = "post">
                                <button class = "btn btn-info" type = "submit" value = "5" name = "link">Edit Essays </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--End of Accordion-->    
        </div>
    </div>

    <!--Add Colleges Button-->
    <div class="container mt-3">
        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addCollege" id = "addC">Add Colleges</button>
    </div>

    <!--Add College Modal-->
    <div class="modal fade" id="addCollege" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add College</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action = "includes/colleges.inc.php" method = "post">
            <div class="mb-3">
                <label for="college-name" class="col-form-label">College Name:</label>
                <input type="text" class="form-control" id="Ncollege-name" name = "newName">
            </div>
            <div class="mb-3">
                <label for="due-date" class="col-form-label">Due Date: (enter m/d)</label>
                <input type="text" class="form-control" id="Ndue-date" name = "newDate">
            </div>
            
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name = "sub">Add College</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!--Edit College Modal-->
    <div class="modal fade" id="editCollege" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit College</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action = "includes/colleges.inc.php" method = "post">
                    <div class="mb-3">
                        <label for="college-name" class="col-form-label">College Name:</label>
                        <input type="text" class="form-control" id="college-name" name = "updateCN">
                    </div>
                    <div class="mb-3">
                        <label for="due-date" class="col-form-label">Due Date: (enter m/d)</label>
                        <input type="text" class="form-control" id="due-date" name = "updateDD">
                    </div>
                    <div class="mb-3 d-none">
                        <label for="college-id" class="col-form-label">ID</label>
                        <input type="text" class="form-control" id="college-id" name = "getID">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="editCollege()" name = "update">Save Edits</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Delete Confirmation Modal-->
    <div class="modal" id = "delCollege" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete College?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this college?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action = "includes/colleges.inc.php" method = "post">
                <input type="hidden" class="form-control" id="del-id" name = "delID">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" onclick="delCollege()" name = "delete">Delete</button>
              </form>  
            </div>
          </div>
        </div>
      </div>
  
    <?php 
    
    
        //Retrieve Database Information
        $uid = $_SESSION["userid"];
        $sql = "SELECT * FROM colleges WHERE userId = $uid;";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        //Show Colleges
        for($n = 1; $n <= $num; $n++){
            echo "<script>var x = document.getElementById('college' + $n);
            x.classList.remove('d-none')</script>";
        }

        if($num>=5){
            echo "<script>var x = document.getElementById('addC');
            x.classList.add('d-none')</script>";
        }

        //Match Card Text
        if($num > 0){
            $n = 1;
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['collegeId'];
                $_SESSION['cID'.$n] = $id;
                
                $name = $row['collegeName'];
                $date = $row['dueDate'];
                echo "<script>var cn = document.getElementById('cn' + $n);
                
                cn.innerText = '$name';
                var dd = document.getElementById('dd' + $n);
                
                dd.innerText = '$date';
                </script>";

                //Progress Bar Code
                $sqlE = "SELECT * FROM essays WHERE collegeId = $id;";
                $resultE = mysqli_query($conn, $sqlE);
                $numE = mysqli_num_rows($resultE);
                $sqlEC = "SELECT * FROM essays WHERE collegeId = $id AND completed = 'Yes';";
                $resultEC = mysqli_query($conn, $sqlEC);
                $numEC = mysqli_num_rows($resultEC);
                $len;
                if($numE!=0){
                    $len = ($numEC/$numE)*100;
                } else{
                    $len = 5;
                }
                echo "<script>var progress = document.getElementById('prog' + $n);
                
                progress.innerText = '$numEC'+ '/'+ '$numE';

                progress.style.width = $len + '%';
                
                </script>";

                $n++;
                
            }
        }
    
  ?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
 
  <script>
    //Tooltip Script
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    
    //Add College to List
    var i = 1;
    function addCollege(){
        i++;
        var cName = document.getElementById("Ncollege-name").value;
        document.getElementById("cn" + i).innerHTML = cName;
        var dDate = document.getElementById("Ndue-date").value;
        document.getElementById("dd" + i).innerHTML = dDate;
        var x = document.getElementById("college" + i);
        x.classList.remove("d-none");
    }

    var loc = 1;
    
    //Open Edit Modal
    var editModal = document.getElementById("editCollege");
    editModal.addEventListener("show.bs.modal", function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var college = button.getAttribute("data-bs-whatever");
        
        var cNum = college.substring(college.length-1);
        loc = cNum;
        
        
        
        var cn = document.getElementById("cn" + cNum);
        var dd = document.getElementById("dd" + cNum);
        // Update the modal's content.
        var name = document.getElementById("college-name");
        var date = document.getElementById("due-date");
        var hidden = document.getElementById("college-id");
        name.value = cn.textContent;
        date.value = dd.textContent;
        hidden.value = cNum;
    })
    
    var delLocator = 1;
    var delModal = document.getElementById("delCollege");
    delModal.addEventListener("show.bs.modal", function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var college = button.getAttribute("data-bs-whatever");
        var cNum = college.substring(college.length-1);
        delLocator = cNum;
        var hidden = document.getElementById("del-id");
        hidden.value = delLocator;
        
    })
    
    function delCollege(){
        var x = document.getElementById("college" + delLocator);
        x.classList.add("d-none");
    }
    </script>  
</body>

</html>