<!doctype html>
<html lang="en" ng-app = "myapp" ng-controller = "mycontroller">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang Quan Tri</title>
        <link rel="icon" type="image/png" href="../assets/user/images/3.png">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/admin/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
        <!-- header -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tim kiem..." aria-label="Tim kiem.." aria-describedby="btnNavbarSearch" ng-model="timkiem"/>
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <!-- sidebar -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/admin">
                                <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                                Trang ch???
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Qu???n l??
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/loaisp">Qu???n l?? lo???i s???n ph???m</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/sanpham">Qu???n l?? s???n ph???m</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/khachhang">Qu???n l?? kh??ch h??ng</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/nhanvien">Qu???n l?? nh??n vi??n</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/nhacungcap">Qu???n l?? nh?? cung c???p</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/donhang">Qu???n l?? ????n h??ng</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/ctdonhang">Qu???n l?? chi ti???t ????n h??ng</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/hoadon">Qu???n l?? h??a ????n</a>
                                    <a class="nav-link" href="http://127.0.0.1:8000/admin/cthoadon">Qu???n l?? chi ti???t h??a ????n</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <!-- content -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Don hang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin">Trang chu</a></li>
                            <li class="breadcrumb-item active">Don hang</li>
                        </ol>
    <button class="btn btn-primary" ng-click="showModal(0)">Create news</button>


    <br>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>M?? kh??ch h??ng</th>
                <th>H??? t??n</th>
                <th>Email</th>
                <th>Phone</th>
                <th>?????a ch???</th>
                <th>Ng??y ?????t</th>
                <th>T???ng ti???n</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr dir-paginate = "ls in DonHang| filter: timkiem|itemsPerPage:10">
                <td>@{{ $index+1 }}</td>
                <td>@{{ ls.makh }}</td>
                <td>@{{ ls.hoten }}</td>
                <td>@{{ ls.email }}</td>
                <td>@{{ ls.phone }}</td>
                <td>@{{ ls.diachi }}</td>
                <td>@{{ ls.ngaydat }}</td>
                <td>@{{ ls.tongtien }}</td>
                <td><button class="btn btn-info" ng-click="showModal(ls.id)">Edit</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(ls.id)">Delete</button></td>
            </tr>
        </tbody>
    </table>

    <dir-pagination-controls
            boundary-links="true"
            direction-links="true" >
            </dir-pagination-controls>


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@{{modalTitle}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="makh">M?? kh??ch h??ng</label>
                      <input type="text"
                        class="form-control" id="makh" ng-model="donhang.makh">
                    </div>
<div class="form-group">
                        <label for="hoten">H??? t??n</label>
                        <input type="text"
                          class="form-control" id="hoten" ng-model="donhang.hoten">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text"
                          class="form-control" id="email" ng-model="donhang.email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text"
                          class="form-control" id="phone" ng-model="donhang.phone">
                      </div>
                      <div class="form-group">
                        <label for="diachi">?????a ch???</label>
                        <input type="text"
                          class="form-control" id="diachi" ng-model="donhang.diachi">
                      </div>
                      <div class="form-group">
                        <label for="ngaydat">Ng??y ?????t</label>
                        <input type="text"
                          class="form-control" id="ngaydat" ng-model="donhang.ngaydat">
                      </div>
                      <div class="form-group">
                        <label for="tongtien">T???ng ti???n</label>
                        <input type="text"
                          class="form-control" id="tongtien" ng-model="donhang.tongtien">
                      </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/angular.min.js">
    </script>
    <script src="/js/dirPagination.js"></script>
    <script>
        var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
        app.controller('mycontroller',function($scope,$http){
            // $scope.hello = 'Toi la angular';
            // $scope.datas = JSON.parse('[{ "firstName":"John", "lastName":"Doe" },{ "firstName":"Anna", "lastName":"Smith" }, { "firstName":"Peter", "lastName":"Jones" }]');
            $scope.timkiem="";
            $scope.reloadData = function(){
                    $http(
                    {
                        method: "GET",
                        url: "http://localhost:8000/api/DonHang"
                    }
                ).then(function(response){
                    $scope.DonHang = response.data;
                });
            }
            $scope.reloadData();
            $scope.clickMe = function(){
                alert('ban vua click vao toi!');
            }

            $scope.showModal = function(id){
                $scope.id=id;
                if(id==0){
                    $scope.modalTitle = "Them don hang";
                    if($scope.donhang) delete $scope.donhang;
                }
                else{
                    $scope.modalTitle = "Sua don hang";
                    $http(
                        {
                            method: "GET",
                            url: "http://localhost:8000/api/DonHang/"+id
                        }
                    ).then(function(response){
                        //console.log(response.data);
                        $scope.donhang = response.data;
                    });
}
                $('#modelId').modal('show');
            }
            $scope.saveData = function(){
                if($scope.id==0){
                    $http(
                        {
                            method: "POST",
                            url: "http://localhost:8000/api/DonHang/",
                            data: $scope.donhang,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
                else{
                    $http(
                        {
                            method: "PUT",
                            url: "http://localhost:8000/api/DonHang/"+$scope.id,
                            data: $scope.donhang,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
                $('#modelId').modal('hide');
            }

            $scope.deleteClick = function(id){
                var chon = confirm("Ban co muon xoa ban ghi khong?");
                if(chon){
                    $http(
                        {
                            method: "DELETE",
                            url: "http://localhost:8000/api/DonHang/"+id
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
            }
        });
    </script>
    </div>
                </main>

                <!-- footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/admin/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../assets/admin/js/datatables-simple-demo.js"></script>
  </body>
</html>
