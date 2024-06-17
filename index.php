<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        table {
            table-layout: fixed;
            width: 100%;
        }
        th, td {
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body class="bg-primary">
    <h3 class="text-center my-4 text-light">Student Form</h3>
    <div class="container bg-light col-md-6 col-lg-5 col-xl-4 py-4 rounded-3 shadow-sm mb-4">
        <form id="formAction">
        <div class="mb-3">
                <label for="studentName" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="studentName" name="studentname" aria-describedby="studentNameHelp">
            </div>
            <div class="mb-3">
                <label for="college" class="form-label">College</label>
                <input type="text" class="form-control" id="college" name="college" aria-describedby="collegeHelp">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" class="form-control" id="class" name="class" aria-describedby="classHelp" placeholder="example: IV-A">
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department">
                    <option selected>Select Your Department</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="IT">IT</option>
                    <option value="BME">BME</option>
                    <option value="CST">CST</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <h5 class="mt-4 mb-3 text-secondary">Enter Your Grade for These Subjects:</h5>
            <div class="input-group mb-3">
                <span class="input-group-text" id="label-grade1">SOFTWARE ENGINEERING</span>
                <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade1" name="grade1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="label-grade2">CLOUD COMPUTING</span>
                <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade2" name="grade2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="label-grade3">ARTIFICIAL INTELLIGENCE</span>
                <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade3" name="grade3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="label-grade4">WEB TECHNOLOGY</span>
                <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade4" name="grade4">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="label-grade5">DATA SCIENCE</span>
                <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade5" name="grade5">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4">
                <button type="button" id="save" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center bg-success text-white">
                            <tr>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>College</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Software Engineering</th>
                                <th>Cloud Computing</th>
                                <th>Artificial Intelligence</th>
                                <th>Web Technology</th>
                                <th>Data Science</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableData" class="bg-light">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="editData">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Student Data Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formActionEdit">
                        <div class="col-md-12">
                            <label for="studentName" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="studentnameEdit" name="studentnameEdit" aria-describedby="studentNameHelp">
                            <input type="hidden" name="studentId" id="studentId" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="college" class="form-label">College</label>
                            <input type="text" class="form-control" id="collegeEdit" name="collegeEdit" aria-describedby="collegeHelp">
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" class="form-control" id="classEdit" name="classEdit" aria-describedby="classHelp" placeholder="example: IV-A">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select" id="departmentEdit" name="departmentEdit">
                                <option selected>Select Your Department</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="IT">IT</option>
                                <option value="BME">BME</option>
                                <option value="CST">CST</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="addressEdit" name="addressEdit"></textarea>
                        </div>
                        <h5 class="mt-4 mb-3 text-secondary">Enter Your Grade for These Subjects:</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="grade1Edit">SOFTWARE ENGINEERING</span>
                            <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade1Edit" name="grade1Edit">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="grade2Edit">CLOUD COMPUTING</span>
                            <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade2Edit" name="grade2Edit">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="grade3Edit">ARTIFICIAL INTELLIGENCE</span>
                            <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade3Edit" name="grade3Edit">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="grade4Edit">WEB TECHNOLOGY</span>
                            <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade4Edit" name="grade4Edit">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="grade5Edit">DATA SCIENCE</span>
                            <input type="text" aria-label="grade" class="form-control" placeholder="Example: A" id="grade5Edit" name="grade5Edit">
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-info m-3" type="button" id="update">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirmDelete(button) {
            var id = $(button).data('id');
            if (confirm("Do you want to delete this data?")) {
                $.ajax({
                    type: "GET",
                    url: "deleteData.php",
                    dataType: "json",
                    data: { "id": id },
                    success: function(res) {
                        if (res.status == "Done") {
                            $("#row" + id).remove();
                        } else {
                            alert("Failed to delete data");
                        }
                    }
                });
            }
        }

        function getStoredData() {
            $.ajax({
                type: "POST",
                url: "read.php",
                dataType: "json",
                success: function (res) {
                    if (res.data) {
                        $("#tableData").html(res.data);
                    } else {
                        console.log("Error fetching data:", res.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", error);
                }
            });
        }

  function functionEdit(e) {
    var id = $(e).data('id');
    console.log('Edit button clicked, ID:', id);

    $.ajax({
        type: "POST",
        url: "showIdData.php",
        dataType: "json",
        data: { "id": id },
        success: function (res) {
            console.log('Data received from server:', res);
            var modal = new bootstrap.Modal(document.getElementById('editData'), {
                keyboard: false
            });
            modal.show();
            $("#studentId").val(res.id);
            $("#studentnameEdit").val(res.student_name);
            $("#collegeEdit").val(res.college);
            $("#classEdit").val(res.class);
            $("#departmentEdit").val(res.department);
            $("#addressEdit").val(res.address);
            $("#grade1Edit").val(res.software_engineering);
            $("#grade2Edit").val(res.cloud_computing);
            $("#grade3Edit").val(res.artificial_intelligence);
            $("#grade4Edit").val(res.web_technology);
            $("#grade5Edit").val(res.data_science);
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}


        $(document).ready(function () {
            getStoredData();

            $("input[type='text'], textarea").on('input', function () {
                var value = $(this).val();
                var upperValue = value.toUpperCase();
                $(this).val(upperValue);
            });

            $("input, select, textarea").keydown(function(e) {
                if (e.key === "Enter") {
                    e.preventDefault();
                    var $inputs = $("input, select, textarea");
                    var index = $inputs.index(this);
                    if (index < $inputs.length - 1) {
                        $inputs.eq(index + 1).focus();
                    }
                }
            });

            $("#save").click(function () {
                var valid = true;

                $("input, select, textarea").each(function () {
                    if ($(this).val() === "") {
                        $(this).css("border", "1px solid red");
                        $(this).focus();
                        valid = false;
                        return false;
                    } else {
                        $(this).css("border", "1px solid green");
                    }
                });

                if (!valid) return false;

                var formData = {
                    studentname: $("#studentName").val(),
                    college: $("#college").val(),
                    class: $("#class").val(),
                    department: $("#department").val(),
                    address: $("#address").val(),
                    grade1: $("#grade1").val(),
                    grade2: $("#grade2").val(),
                    grade3: $("#grade3").val(),
                    grade4: $("#grade4").val(),
                    grade5: $("#grade5").val()
                };

                $.ajax({
                    type: "POST",
                    url: "save.php",
                    dataType: "json",
                    data: formData,
                    success: function (res) {
                        if (res.status === "Done") {
                            getStoredData();
                        } else {
                            alert(res.message);
                        }
                    }
                });
            });

            $("#update").click(function () {
                var valid = true;

                $("#formActionEdit input, #formActionEdit select, #formActionEdit textarea").each(function () {
                    if ($(this).val() === "") {
                        $(this).css("border", "1px solid red");
                        $(this).focus();
                        valid = false;
                        return false;
                    } else {
                        $(this).css("border", "1px solid green");
                    }
                });

                if (!valid) return false;

                var formData = {
                    studentId: $("#studentId").val(),
                    studentnameEdit: $("#studentnameEdit").val(),
                    collegeEdit: $("#collegeEdit").val(),
                    classEdit: $("#classEdit").val(),
                    departmentEdit: $("#departmentEdit").val(),
                    addressEdit: $("#addressEdit").val(),
                    grade1Edit: $("#grade1Edit").val(),
                    grade2Edit: $("#grade2Edit").val(),
                    grade3Edit: $("#grade3Edit").val(),
                    grade4Edit: $("#grade4Edit").val(),
                    grade5Edit: $("#grade5Edit").val()
                };

                $.ajax({
                    type: "POST",
                    url: "update.php",
                    dataType: "json",
                    data: formData,
                    success: function (res) {
                        if (res.status === "Done") {
                            $("#editData").modal("hide");
                            getStoredData();
                        } else {
                            alert(res.message);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>