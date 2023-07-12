<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <title>Officer Record</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Record</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>


    <div class="container mt-5">
        <div class="card mb-5">
       
            <div class="card-body">
                <h3 class="card-title">Add Record</h3>

                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'success')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>success!</strong> 
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> 
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="insertfunc.php" method="POST">

                    <div class="col-md-4">
                        <label for="exampleInputEmail1">DOCUMENT TYPE </label>

                        <input type="text" id="DOC_TYPE" name="DOC_TYPE" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputPassword1">DOCUMENT CATEGORY</label>

                        <input type="text" id="DOC_CATEG" name="DOC_CATEG" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="input">DOCUMENT TITLE</label>
                        <input type="text" id="DOC_TITLE" name="DOC_TITLE" class="form-control" required>

                    </div>

                    <div class="col-md-6">
                        <label for="input">DOCUMENT DESC</label>

                        <input type="text" id="DOC_DESC" name="DOC_DESC" class="form-control" required>

                    </div>

                    <div class="col-md-6">
                        <label for="input">ATTACHMENT</label>


                        <input type="text" id="ATTACH" name="ATTACH" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">CREATED BY (DESIGNATION)</label>


                        <input type="text"  id="CREATED_BY_DESIG" name="CREATED_BY_DESIG" class=" form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">CREATED BY (ROLE)</label>


                        <input type="text" id="CREATED_BY_ROLE" name="CREATED_BY_ROLE" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">UPDATED BY (NAME)</label>



                        <input type="email"  id="CREATED_BY_EMAIL" name="CREATED_BY_EMAIL" class=" form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">UPDATED BY NAME</label>


                        <input type="text" id="UPDATED_BY_NAME" name="UPDATED_BY_NAME" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">UPDATED BY (DESIGNATION)</label>



                        <input type="text"  id="UPDATED_BY_DESIG" name="UPDATED_BY_DESIG" class=" form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">UPDATED BY (ROLE)</label>



                        <input type="text" id="UPDATED_BY_ROLE" name="UPDATED_BY_ROLE" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">UPDATED BY (EMAIL)</label>



                        <input type="email"  id="UPDATED_BY_EMAIL" name="UPDATED_BY_EMAIL" class=" form-control"  required>
                    </div>


                    <div class="col-md-6">
                        <label for="input">DATE CREATED</label>


                        <input type="date" id="DATE_CREATED" name="DATE_CREATED" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">DATE UPDATED</label>



                        <input type="date"  id="DATE_UPDATED" name="DATE_UPDATED" class=" form-control"  required>
                    </div>


                    <div class="col-md-6">
                        <label for="input">FORWARDED TO (NAME)</label>



                        <input type="text" id="FORWARD_TO_NAME" name="FORWARD_TO_NAME" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">FORWARDED TO (ROLE)</label>



                        <input type="text"  id="FORWARD_TO_ROLE" name="FORWARD_TO_ROLE" class=" form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">FORWARDED TO (DESIGNATION)</label>



                        <input type="text" id="FORWARD_TO_DESIG" name="FORWARD_TO_DESIG" class="form-control"  required>
                    </div>

                    <div class="col-md-6">
                        <label for="input">FORWARDED TO (EMAIL)</label>



                        <input type="email"  id="FORWARD_TO_EMAIL" name="FORWARD_TO_EMAIL" class=" form-control"  required>
                    </div>

                    <div class="col-md-6">

                        <input type="hidden" id="ACTION" name="ACTION" class=" form-control" value="Uploaded document" required>
                    </div>

                    <div class="col-md-12">
                        <label for="input">MESSAGE</label>

                        <input type="text" id="POST_MESSAGE" name="POST_MESSAGE" class=" form-control"  required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success" value="submit" name="submitadd"><span class="ms-2">Add</span></button>
                    </div>
                </form>
            </div>
        </div>






        <!-- notif handler -->
        <?php if (isset($_GET['deletefunc'])) : ?>
            <?php
            if ($_GET['deletefunc'] == 'success')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>success!</strong> 
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>
        <!-- notif handler -->

        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'success')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>success!</strong> 
                <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error!</strong>
                <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- table -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>ID</th> ";
            echo "<th scope='col'>DOCUMENT TYPE</th>";
            echo  "<th scope='col'>DOCUMENT CATEGORY</th>";
            echo  "<th scope='col'>DOCUMENT TITLE</th>";
            echo  "<th scope='col'>DOCUMENT DESC</th>";
            echo  "<th scope='col'>ATTACHMENT</th>";
            echo  "<th scope='col'>CREATED BY (DESIGNATION)</th>";
            echo  "<th scope='col'>CREATED BY (ROLE)</th>";
            echo " <th scope='col'>CREATED BY (ENAIL)</th>";
            echo " <th scope='col'>UPDATED BY (NAME)</th>";
            echo " <th scope='col'>UPDATED BY (DESIGNATION)</th>";
            echo  " <th scope='col'>UPDATED BY (ROLE)</th>";
            echo  " <th scope='col'>UPDATED BY (EMAIL)</th>";
            echo  " <th scope='col'>DATE CREATED</th>";
            echo  " <th scope='col'>DATE UPDATED</th>";
            echo  " <th scope='col'>FORWARDED TO (NAME)</th>";
            echo   " <th scope='col'>FORWARDED TO (ROLE)</th>";
            echo  "  <th scope='col'>FORWARDED TO (DESIGNATION)</th>";
            echo  "  <th scope='col'>FORWARDED TO (EMAIL)</th>";
            echo  "  <th scope='col'>ACTION DONE</th>";
            echo  "  <th scope='col'>MESSAGE</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $min_record = 10;
            $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $count = ($page > 1) ? ($page * $num) - $num : 0;

            $previous = $page - 1;
            $next = $page + 1;

            $data = mysqli_query($db, "SELECT * FROM officer_record");
            $count_data = mysqli_num_rows($data);
            $total_data = ceil($count_data / $min_record);

            $datarecords = mysqli_query($db, "SELECT * FROM officer_record LIMIT $count, $min_record");
            $no = $count + 1;






            while ($data = mysqli_fetch_array($datarecords)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $data['ID'] . "</td>";
                echo "<td>" . $data['ID'] . "</td>";
                echo "<td>" . $data['DOC_TYPE'] . "</td>";
                echo "<td>" . $data['DOC_TITLE'] . "</td>";

                echo "<td>" . $data['DOC_CATEG'] . "</td>";
                echo "<td>" . $data['DOC_DESC'] . "</td>";
                echo "<td>" . $data['ATTACH'] . "</td>";
                echo "<td>" . $data['CREATED_BY_DESIG'] . "</td>";

                echo "<td>" . $data['CREATED_BY_ROLE'] . "</td>";
                echo "<td>" . $data['CREATED_BY_EMAIL'] . "</td>";
                echo "<td>" . $data['UPDATED_BY_NAME'] . "</td>";
                echo "<td>" . $data['UPDATED_BY_DESIG'] . "</td>";
                echo "<td>" . $data['UPDATED_BY_ROLE'] . "</td>";
                echo "<td>" . $data['UPDATED_BY_EMAIL'] . "</td>";
                echo "<td>" . $data['DATE_CREATED'] . "</td>";

                echo "<td>" . $data['DATE_UPDATED'] . "</td>";
                echo "<td>" . $data['FORWARD_TO_NAME'] . "</td>";
                echo "<td>" . $data['FORWARD_TO_ROLE'] . "</td>";
                echo "<td>" . $data['FORWARD_TO_DESIG'] . "</td>";
                echo "<td>" . $data['FORWARD_TO_EMAIL'] . "</td>";
                echo "<td>" . $data['ACTION'] . "</td>";
                echo "<td>" . $data['MESSAGE'] . "</td>";


                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($count_data == 0) {
                echo "<p class='text-center'>No entries</p>";
            } else {
                echo "<p>Total $count_data entries</p>";
            }

            echo "</div>";
            ?>
        </div>

      

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>EDIT RECORD SELECTED</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM officer_record ";
                    $query = mysqli_query($db, $sql);
                    $mahasiswa = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='EDIT_ID' id='EDIT_ID'>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DOCUMENT TYPE </label>

                                <input type="text" name="EDIT_DOC_TYPE" id="EDIT_DOC_TYPE" class="form-control" placeholder="Steve Jobs" required>
                            </div>
                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DOCUMENT CATEGORY </label>

                                <input type="text" name="EDIT_DOC_CATEG" id="EDIT_DOC_CATEG" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DOCUMENT TITLE </label>

                            <input type="text" name="EDIT_DOC_TITLE" id="EDIT_DOC_TITLE" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DOCUMENT DESCRIPTION </label>

                            <input type="text" name="EDIT_DOC_DESC" id="EDIT_DOC_DESC" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">ATTACHMENT </label>

                            <input type="text" name="EDIT_ATTACH" id="EDIT_ATTACH" class="form-control" required>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">CREATED BY DESIGNATION </label>

                            <input type="text" name="EDIT_CREATED_BY_DESIG" id="EDIT_CREATED_BY_DESIG" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">CREATED BY ROLE </label>

                            <input type="text" name="EDIT_CREATED_BY_ROLE" id="EDIT_CREATED_BY_ROLE" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">CREATED BY EMAIL </label>

                                <input type="email" name="EDIT_CREATED_BY_EMAIL" id="EDIT_CREATED_BY_EMAIL" class="form-control" placeholder="Steve Jobs" required>
                            </div>
                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">UPDATED BY NAME  </label>

                                <input type="text" name="EDIT_UPDATED_BY_NAME" id="EDIT_UPDATED_BY_NAME" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1"> UPDATED BY DESIGNATION </label>

                            <input type="text" name="EDIT_UPDATED_BY_DESIG" id="EDIT_UPDATED_BY_DESIG" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">UPDATED BY ROLE </label>

                            <input type="text" name="EDIT_UPDATED_BY_ROLE" id="EDIT_UPDATED_BY_ROLE" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">UPDATED BY EMAIL </label>

                            <input type="email" name="EDIT_UPDATED_BY_EMAIL" id="EDIT_UPDATED_BY_EMAIL" class="form-control" required>
                                </select>
                            </div>


                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DATE CREATED </label>

                            <input type="date" name="EDIT_DATE_CREATED" id="EDIT_DATE_CREATED" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">DATE UPDATED </label>

                            <input type="date" name="EDIT_DATE_UPDATED" id="EDIT_DATE_UPDATED" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">FORWARDED TO NAME </label>

                            <input type="text" name="EDIT_FORWARD_TO_NAME" id="EDIT_FORWARD_TO_NAME" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">FORWARDED TO ROLE </label>

                            <input type="text" name="EDIT_FORWARD_TO_ROLE" id="EDIT_FORWARD_TO_ROLE" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">FORWARDED TO DESIGNATION </label>

                            <input type="text" name="EDIT_FORWARD_TO_DESIG" id="EDIT_FORWARD_TO_DESIG" class="form-control" required>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">FORWARDED TO EMAIL </label>

                            <input type="email" name="EDIT_FORWARD_TO_EMAIL" id="EDIT_FORWARD_TO_EMAIL" class="form-control" required>
                                </select>
                            </div>

                            
                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">ACTION </label>

                            <input type="text" readonly name="EDIT_ACTION" id="EDIT_ACTION" value="updated" class="form-control" required>
                                </select>
                            </div>

                            
                            <div class="col-12 mb-3">
                            <label for="exampleInputEmail1">MESSAGE </label>

                            <input type="textarea" name="EDIT_MESSAGE" id="EDIT_MESSAGE" class="form-control" required>
                                </select>
                            </div>


                         
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Edit</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirm Data Delete</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='deletefunc.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Are you sure you want to delete?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-danger'>Delete</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


     
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#EDIT_ID').val(data[0]);
         
                $('#EDIT_DOC_TYPE').val(data[2]);
                $('#EDIT_DOC_CATEG').val(data[3]);


                $('#EDIT_DOC_TITLE').val(data[4]);
                $('#EDIT_DOC_DESC').val(data[5]);
                $('#EDIT_ATTACH').val(data[6]);
                $('#EDIT_CREATED_BY_DESIG').val(data[7]);
                $('#EDIT_CREATED_BY_ROLE').val(data[8]);
                $('#EDIT_CREATED_BY_EMAIL').val(data[9]);
                $('#EDIT_UPDATED_BY_NAME').val(data[10]);
                $('#EDIT_UPDATED_BY_DESIG').val(data[11]);
                $('#EDIT_UPDATED_BY_ROLE').val(data[12]);
                $('#EDIT_UPDATED_BY_EMAIL').val(data[13]);
                $('#EDIT_DATE_CREATED').val(data[14]);
                $('#EDIT_DATE_UPDATED').val(data[15]);
                $('#EDIT_FORWARD_TO_NAME').val(data[16]);
                $('#EDIT_FORWARD_TO_ROLE').val(data[17]);
                $('#EDIT_FORWARD_TO_DESIG').val(data[18]);
                $('#EDIT_FORWARD_TO_EMAIL').val(data[19]);
                $('#EDIT_ACTION').val(data[20]);
                $('#EDIT_MESSAGE').val(data[21]);


            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>