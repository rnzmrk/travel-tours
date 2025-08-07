<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes </title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />

      @include('layouts.includes.links')
  </head>

  <body>
  <!-- Pre-loader start -->
    @include('layouts.includes.pre-loader')
  <!-- Pre-loader end -->
    @include('layouts.includes.header')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            @include('layouts.includes.sidebar')
                <div class="pcoded-content">
                    
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Dashboard</h5>
                                        <p class="m-b-0">Welcome to Mega Able</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page-header end -->

                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-body start -->
                                <div class="page-body">
                                </div>
                                <!-- Page-body end -->
                            </div>
                            <div id="styleSelector"> </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
