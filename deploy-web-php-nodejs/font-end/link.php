<script>
    if (typeof (Storage) !== "undefined") {
        if (!sessionStorage.getItem("session_started")) {
            window.location.href = "index.php";
        } else {
        }
    } else {
        console.error("Browser does not support sessionStorage.");
    }

</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>REPORT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.semanticui.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>

</head>


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        include 'navbar.php'
            ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <!-- Topbar Navbar -->
                <?php
                include 'topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Page Heading -->
                    <br>
                    <h1> <label for="">ใส่ Link meeting</label></h1>
                    <script>
                        var Role = sessionStorage.getItem("Role");

                        if (Role === 'ADMIN') {

                            document.write(`
            <form id="myFormlink" action="">
                <input type="text" id="link" class="form-control">
                <br>
                <input type="datetime-local" id="time" class="form-control">
                <br>
                <button onclick="savelink()" class="btn btn-primary">SUBMIT</button>
            </form>
        `);
                        } 
                    </script>



                    <div class="row text-center">


                        <table id="example" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>LINK</th>
                                    <th>TIME </th>
                                    <script>
                                        var Role = sessionStorage.getItem("Role");
                                        if (Role === 'ADMIN') {
                                            document.write('<th>ACTION</th>');
                                        }
                                    </script>

                                </tr>
                            </thead>
                            <tbody id="userList">

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>LINK</th>
                                    <th>TIME </th>
                                    <script>
                                        var Role = sessionStorage.getItem("Role");
                                        if (Role === 'ADMIN') {
                                            document.write('<th>ACTION</th>');
                                        }
                                    </script>

                                </tr>
                            </tfoot>
                        </table>
                        <div class="modal fade" id="edit_username" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="myForm" method="POST" class="validated" enctype="multipart/form-data">
                                            <div id="showList">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="edituser()" class="btn btn-primary">Save
                                            changes</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'footer.php'
                ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-danger" href="connect\logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function savelink() {
            var formData = {
                URL: $('#link').val(),
                TIME: $('#time').val(),
            };
            $.ajax({
                type: 'POST',
                url: 'http://10.1.1.155:3000/api/v1/link/create',
                contentType: 'application/json',
                data: JSON.stringify(formData),
                success: function (response) {
                    console.log(response);
                    alert('ส่งข้อมูลสำเร็จ');
                    window.location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(error);
                    alert('เกิดข้อผิดพลาดในการส่งข้อมูล');
                }
            });
        }


        window.onload = function () {
            fetch('http://10.1.1.155:3000/api/v1/link/get')
                .then(response => response.json())
                .then(data => {
                    const userList = document.getElementById('userList');
                    let html = '';
                    data.data.forEach((user, index) => {
                        const thaiDate = new Date(user.TIME);
                        const thaiYear = thaiDate.getFullYear() + 543; // เพิ่ม 543 เพื่อเปลี่ยนเป็น พ.ศ.
                        const thaiMonth = thaiDate.getMonth() + 1; // เพิ่ม 1 เนื่องจาก getMonth() นับเริ่มจาก 0
                        const thaiDay = thaiDate.getDate();
                        const thaiHour = thaiDate.getHours();
                        const thaiMinute = thaiDate.getMinutes();
                        const thaiSecond = thaiDate.getSeconds();

                        const thaiTimeString = ` ${thaiDay} - ${thaiMonth} -${thaiYear} เวลา ${thaiHour}:${thaiMinute}:${thaiSecond}`;

                        html += `
                            <tr>
                                <td>${index + 1}</td>
                                <td><a href="${user.URL}">${user.URL}</a></td>
                                <td>วันที่ Live ${thaiTimeString}</td>
                                `;

                        var Role = sessionStorage.getItem("Role");
                        if (Role === 'ADMIN') {
                            html += `
                            <td><button class="btn btn-danger deleteUserButton" > DELETE</td > `;
                        }
                        html += `
                            </tr >`;

                    });
                    userList.innerHTML = html;

                    const deleteButtons = document.querySelectorAll('.deleteUserButton');
                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function () {
                            const on = this.parentNode.parentNode.children[0].textContent;

                            $.ajax({
                                url: 'http://10.1.1.155:3000/api/v1/link/remove?on=' + on,
                                type: 'DELETE',
                                data: { on: on },
                                success: function (response) {
                                    console.log(response);
                                    window.location.reload();
                                    alert('User deleted successfully');
                                },
                                error: function (xhr, status, error) {
                                    console.error(xhr.responseText);
                                    alert('Error deleting user');
                                }
                            });
                        });
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        };

    </script>
    <script src="showuse.js"></script>
</body>

</html>