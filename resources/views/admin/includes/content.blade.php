<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('min_title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">@yield('min_title_name') </li>
                    <li class="breadcrumb-item active">@yield('min_title_subname')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="background-color: white;">
                <div  class="{{ session('error') ? '' : 'd-none' }} alert-new  alert alert-danger col-12 mb-0 py-3 mx-2 my-2">
                    <span class="fs-5">{{ session('error')}}</span>
                </div>
                <div  class="{{ session('success') ? '' : 'd-none' }} alert-new  alert alert-success col-12 mb-0 py-3 mx-2 my-2 ">
                    <span class="fs-5">{{ session('success')}}</span>
                </div>
                    @yield('content')
            </div>
        </div>
    </div>
</div>


<style>

    .w-30 {
        width: 30%  !important;
    }
    .w-70 {
        width: 70%  !important;
    }
</style>

<script>

    document.querySelectorAll('.alert-new').forEach(alert => {
        if(!alert.classList.contains('d-none')) {
            setTimeout(() => {
                alert.classList.add('d-none')
            }, 2000);
        }
    });
</script>
