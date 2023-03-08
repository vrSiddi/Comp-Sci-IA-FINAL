<?php 
    include_once 'header.php';
?>
  <main>
    <div class = "container mt-3">
      <!--Essay 1-->
        <div class="card mx-auto d-none" style = "width: 60rem;" id = "essay1">
            <div class="card-header">
                <!--Essay Name-->
                <h4 class = "d-inline-block text-wrap" id="ep1">Essay #1</h4>
                <!--Edit and Delete Buttons-->
                <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delEssay" data-bs-whatever="ed1" >
                    <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this essay from your list"></i>
                </button>
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editEssay" data-bs-whatever="ee1">
                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit essay information"></i>
                </button>
                <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Limit:</h6>
                        <h6 class = "d-inline-block" id = "wl1">250</h6>
                </div>
            </div>
            <form action = "includes/essay.inc.php" method = "post">
              <div class = "card-body bg-light">
                  <label for="response1" class="form-label">Response:</label>
                  <textarea class="form-control" id="response1" oninput = "countWords(1)" rows="10" name = "rsp1"></textarea>
                  <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Count:</h6>
                        <h6 class = "d-inline-block" id = "wc1">250</h6>
                  </div>
                  <label for="notes1" class="form-label mt-2">Notes:</label>
                  <textarea class="form-control" id="notes1" name= "nt1" rows="4"></textarea>
              </div>
              <div class = "card-footer">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="check1" name = "complete1">
                  <label class="form-check-label" for="flexCheckDefault">
                      Completed
                  </label>
                  <button type="submit" class="btn btn-primary mb-2 float-end" value = "1" name = "save">Save</button>
                      
                </div>
                </form> 
              </div>
              
        </div>

        <!--Essay 2-->
        <div class="card mt-4 mx-auto d-none" style = "width: 60rem;" id = "essay2">
            <div class="card-header">
                <!--Essay Name-->
                <h4 class = "d-inline-block text-wrap" id="ep2">Essay #2</h4>
                <!--Edit and Delete Buttons-->
                <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delEssay" data-bs-whatever="ed2" >
                    <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this essay from your list"></i>
                </button>
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editEssay" data-bs-whatever="ee2">
                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit essay information"></i>
                </button>
                <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Limit:</h6>
                        <h6 class = "d-inline-block" id = "wl2">250</h6>
                </div>
            </div>
            <form action = "includes/essay.inc.php" method = "post">
              <div class = "card-body bg-light">
                  <label for="response2" class="form-label">Response:</label>
                  <textarea class="form-control" id="response2" oninput = "countWords(2)" rows="10" name = "rsp2"></textarea>
                  <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Count:</h6>
                        <h6 class = "d-inline-block" id = "wc2">250</h6>
                  </div>
                  <label for="notes2" class="form-label mt-2">Notes:</label>
                  <textarea class="form-control" id="notes2" name = "nt2" rows="4"></textarea>
              </div>
              <div class = "card-footer">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check2" name = "complete2">
                    <label class="form-check-label" for="flexCheckDefault">
                        Completed
                    </label>
                    <button type="submit" class="btn btn-primary mb-2 float-end"  value = "2" name = "save">Save</button>
                </div>
            </form>
            </div>
        </div>


        <!--Essay 3-->
        <div class="card mt-4 mx-auto d-none" style = "width: 60rem;" id = "essay3">
            <div class="card-header">
                <!--Essay Name-->
                <h4 class = "d-inline-block text-wrap" id="ep3">Essay #3</h4>
                <!--Edit and Delete Buttons-->
                <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delEssay" data-bs-whatever="ed3" >
                    <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this essay from your list"></i>
                </button>
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editEssay" data-bs-whatever="ee3">
                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit essay information"></i>
                </button>
                <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Limit:</h6>
                        <h6 class = "d-inline-block" id = "wl3">250</h6>
                </div>
            </div>
            <form action = "includes/essay.inc.php" method = "post">
              <div class = "card-body bg-light">
                  <label for="response2" class="form-label">Response:</label>
                  <textarea class="form-control" oninput = "countWords(3)" id="response3" rows="10" name = "rsp3"></textarea>
                  <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Count:</h6>
                        <h6 class = "d-inline-block" id = "wc3">250</h6>
                  </div>
                  <label for="notes2" class="form-label mt-2">Notes:</label>
                  <textarea class="form-control" id="notes3" name = "nt3" rows="4"></textarea>
              </div>
              <div class = "card-footer">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check3" name = "complete3">
                    <label class="form-check-label" for="flexCheckDefault">
                        Completed
                    </label>
                    <button type="submit" class="btn btn-primary mb-2 float-end"  value = "3" name = "save">Save</button>
                </div>
            </form>
            </div>
        </div>

        <!--Essay 4-->
        <div class="card mt-4 mx-auto d-none" style = "width: 60rem;" id = "essay4">
            <div class="card-header">
                <!--Essay Name-->
                <h4 class = "d-inline-block text-wrap" id="ep4">Essay #4</h4>
                <!--Edit and Delete Buttons-->
                <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delEssay" data-bs-whatever="ed4" >
                    <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this essay from your list"></i>
                </button>
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editEssay" data-bs-whatever="ee4">
                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit essay information"></i>
                </button>
                <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Limit:</h6>
                        <h6 class = "d-inline-block" id = "wl4">250</h6>
                </div>
            </div>
            <form action = "includes/essay.inc.php" method = "post">
              <div class = "card-body bg-light">
                  <label for="response2" class="form-label">Response:</label>
                  <textarea class="form-control" oninput = "countWords(4)" id="response4" rows="10" name = "rsp4"></textarea>
                  <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Count:</h6>
                        <h6 class = "d-inline-block" id = "wc4">250</h6>
                  </div>
                  <label for="notes2" class="form-label mt-2">Notes:</label>
                  <textarea class="form-control" id="notes4" name = "nt4" rows="4"></textarea>
              </div>
              <div class = "card-footer">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check4" name = "complete4">
                    <label class="form-check-label" for="flexCheckDefault">
                        Completed
                    </label>
                    <button type="submit" class="btn btn-primary mb-2 float-end"  value = "4" name = "save">Save</button>
                </div>
            </form>
            </div>
        </div>

        <!--Essay 5-->
        <div class="card mt-4 mx-auto d-none" style = "width: 60rem;" id = "essay5">
            <div class="card-header">
                <!--Essay Name-->
                <h4 class = "d-inline-block text-wrap" id="ep5">Essay #5</h4>
                <!--Edit and Delete Buttons-->
                <button type="button" class="btn btn-danger float-end mx-1"  data-bs-toggle="modal" data-bs-target="#delEssay" data-bs-whatever="ed5" >
                    <i class="bi bi-trash" data-bs-toggle="tooltip" title="Deletes this essay from your list"></i>
                </button>
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#editEssay" data-bs-whatever="ee5">
                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" title="Edit essay information"></i>
                </button>
                <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Limit:</h6>
                        <h6 class = "d-inline-block" id = "wl5">250</h6>
                </div>
            </div>
            <form action = "includes/essay.inc.php" method = "post">
              <div class = "card-body bg-light">
                  <label for="response2" class="form-label">Response:</label>
                  <textarea class="form-control" oninput = "countWords(5)" id="response5" rows="10" name = "rsp5"></textarea>
                  <div class = "justify-content-end"> 
                        <h6 class = "d-inline-block">Word Count:</h6>
                        <h6 class = "d-inline-block" id = "wc5">250</h6>
                  </div>
                  <label for="notes2" class="form-label mt-2">Notes:</label>
                  <textarea class="form-control" id="notes5" name = "nt5" rows="4"></textarea>
              </div>
              <div class = "card-footer">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check5" name = "complete5">
                    <label class="form-check-label" for="flexCheckDefault">
                        Completed
                    </label>
                    <button type="submit" class="btn btn-primary mb-2 float-end"  value = "5" name = "save">Save</button>
                </div>
            </form>
            </div>
        </div>
    <!--End of Cards-->
    </div>

    <!--Add Essay Button-->
    <div class="container mt-3 text-center">
        <button type="button" class="btn btn-primary " style = "width: 60rem;" data-bs-toggle="modal" data-bs-target="#addEssay" id = "addE">Add Essay</button>
    </div>

    <!--Add Essay Modal-->
    <div class="modal fade" id="addEssay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Essay</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action = "includes/essay.inc.php" method = "post">
            <div class="mb-3">
                <label for="essay-prompt" class="col-form-label">Essay Prompt:</label>
                <input type="text" class="form-control" id="Nessay-prompt" name = "newPrompt">
            </div>
            <div class="mb-3">
                <label for="word-limit" class="col-form-label">Word Limit(Enter Integer)</label>
                <input type="number" class="form-control" id="Nword-limit" name = "newWord">
            </div>
            
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name = "add">Add Essay</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!--Edit Essay Information Modal-->
    <div class="modal fade" id="editEssay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Essay Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action = "includes/essay.inc.php" method = "post">
                    <div class="mb-3">
                        <label for="essay-prompt" class="col-form-label">Essay Prompt:</label>
                        <input type="text" class="form-control" id="essay-prompt" name = "updateEP">
                    </div>
                    <div class="mb-3">
                        <label for="word-limit" class="col-form-label">Word Limit (Enter Integer)</label>
                        <input type="number" class="form-control" id="word-limit" name = "updateWL">
                    </div>
                    <div class="mb-3">
                        
                        <input type="hidden" class="form-control" id="essay-id" name = "getEID">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name = "updateEssay">Save Edits</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Delete Essay Confirmation Modal-->
    <div class="modal" id = "delEssay" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Essay?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this essay?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action = "includes/essay.inc.php" method = "post">
                <input type="hidden" class="form-control" id="del-eid" name = "delEID">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name = "deleteE">Delete</button>
              </form>  
            </div>
          </div>
        </div>
      </div>



    <?php 
    
    //Get Database Data
    $uid = $_SESSION["userid"];
    $cCol = $_SESSION['cCollege'];
    $sql = "SELECT * FROM essays WHERE userId = $uid AND collegeId = $cCol;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    
    //Show Essays
    for($n = 1; $n <= $num; $n++){
        echo "<script>var x = document.getElementById('essay' + $n);
        x.classList.remove('d-none')</script>";
    } 
    if($num>=5){
      echo "<script>var x = document.getElementById('addE');
      x.classList.add('d-none')</script>";
  }


    //Match Card Text
    if($num > 0){
      $n = 1;
      while($row = mysqli_fetch_assoc($result)){
          $id = $row['essayId'];
          $_SESSION['eID'.$n] = $id;
          //echo $_SESSION['eID1'];
          $prompt = mysqli_real_escape_string($conn,$row['essayPrompt']);
          $limit = $row['wordLimit'];
          $response = mysqli_real_escape_string($conn, $row['response']);
          $notes = mysqli_real_escape_string($conn,$row['notes']);
          $comp = $row['completed'];
          echo "<script>var ep = document.getElementById('ep' + $n);
          
          ep.innerText = '$prompt';
          var wl = document.getElementById('wl' + $n);
          
          wl.innerText = '$limit';

          var rsp = document.getElementById('response' + $n);
          rsp.value = '$response';

          var nt = document.getElementById('notes' + $n);
          nt.value = '$notes';

          var chk = document.getElementById('check' + $n);
          if('$comp' == 'Yes'){
            chk.checked = true;
          }
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script>
    


    //Tooltip Script
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    var loc = 1;
    //Open Edit Modal
    var editModal = document.getElementById("editEssay");
    editModal.addEventListener("show.bs.modal", function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var essay = button.getAttribute("data-bs-whatever");
        
        var eNum = essay.substring(essay.length-1);
        loc = eNum;
        
        
        var ep = document.getElementById("ep" + eNum);
        var wl = document.getElementById("wl" + eNum);
        // Update the modal's content.
        var prompt = document.getElementById("essay-prompt");
        var limit = document.getElementById("word-limit");
        var hidden = document.getElementById("essay-id");
        prompt.value = ep.textContent;
        limit.value = wl.textContent;
        hidden.value = eNum;
    })

    //Delete Modal Code
    
    var delModal = document.getElementById("delEssay");
    delModal.addEventListener("show.bs.modal", function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var essay = button.getAttribute("data-bs-whatever");
        var eNum = essay.substring(essay.length-1);
        
        var hidden = document.getElementById("del-eid");
        hidden.value = eNum;
        
    })

    //Function for Response Word Count
    function countWords(loc){
        
        var resp = document.getElementById("response" + loc);
        var textR = resp.value;
        
        var count = 0;
        var words = textR.split(' ');
        
        for(var i = 0; i<words.length; i++){
            if(words[i]!=  ''){
                count++;
            }
        }
        
        var counter = document.getElementById("wc"+loc);
        counter.innerHTML = count;

        var max = parseInt(document.getElementById("wl" + loc).textContent);
        
        if(count>max){
            
            counter.classList.add('text-danger');
            document.getElementById("check"+loc).checked = false;
            document.getElementById("check"+loc).disabled = true;
        } else{
            document.getElementById("check"+loc).disabled = false;
            counter.classList.remove('text-danger');
        }

    }

    //Run Function on Load
    for(var i = 1; i<=5; i++){
        countWords(i);
    }

    


  </script>
</body>

</html>