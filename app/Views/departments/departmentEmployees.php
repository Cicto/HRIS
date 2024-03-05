<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 "><span class="label text-primary" id ='dept-label'></span>Department Employees</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>/departments" class="text-muted text-hover-primary">Departments List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a class="btn btn-primary" href="<?= base_url()?>/departments"><i class="bi bi-arrow-left"></i>Departments</a>

        
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center align-items-center" style="width: 18rem; align-items: center; justify-content: center; padding: 10px;">
<div class="card z-depth-0" style="width: 18rem;">
  <div class="card-body center" style="padding: 15px;">
  <div class="symbol symbol-100px d-flex justify-content-center">
    <div class="symbol-label border" style="background-image:url('<?= base_url()?>/public/assets/media/avatars/300-7.jpg')"></div>
</div>
<div class="separator border-secondary my-5" style="padding: 5px; margin"></div>
    <h5 class="card-title d-flex justify-content-center" >Firstname & lastname</h5>
    <p class="card-text d-flex justify-content-center" style="color:gray">Department Head</p>
  </div>
</div>
</div>
<br>
<div class="container d-flex justify-content-center " style="width: 18rem; align-items: center; justify-content: center; padding: 10px;">
<div class="card z-depth-0" style="width: 18rem;">
  <div class="card-body center" style="padding: 15px;">
  <div class="symbol symbol-100px d-flex justify-content-center">
    <div class="symbol-label border" style="background-image:url('<?= base_url()?>/public/assets/media/avatars/default-avatar.png')"></div>
</div>
<div class="separator border-secondary my-5" style="padding: 5px; margin"></div>
    <h5 class="card-title d-flex justify-content-center">Firstname & lastname</h5>
    <p class="card-text d-flex justify-content-center" style="color:gray">Assistant Aid</p>
  </div>
</div>
</div>
<div class="separator separator-dashed border-secondary my-5"></div>

<div class="container px-10 pb-7">
    <div class="row">
        <?php if ( $employeesCards['data']): ?>
        <?php foreach ($employeesCards['data'] as $employee): ?> 
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="symbol symbol-70px d-flex top-50 start-20 me-8" >
                       <div class="symbol-label border" style="background-image:url('<?= base_url()?>/public/assets/media/avatars/default-avatar.png')"></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="card-title "><?=$employee->firstname?> <?=$employee->lastname?></h5>
                        <p class="card-text " style="color:gray"><?=$employee->employment_status?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>


<!-- card employees -->
<!-- <div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container ">
        <div class="card card-body">
                <section>
                    <form class="white" id="employee-form">
                        
                        <table id="employee-table" class = "table table-hover table-rounded border align-middle gs-7 gy-5 my-0" style = "width: 100%">
                            <thead class = "text-primary fw-bold border-bottom border-gray-200">
                                <label class="form-label page-heading d-flex text-primary fw-bold fs-4 flex-column justify-content-center my-0">Department Employees:</label>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th class="w-80">First Name</th>
                                    <th class="w-49">Last Name</th>
                                    <th class="w-49">Employment Status</th>
                                </tr>
                                <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </form>
                </section>
        </div>
    </div>
</div> -->

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
$(document).ready(function () {


        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/departments/getDepartment/<?=$departmentID?>",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    const dept_info = response.data[0];
                    $('#dept-label').text(dept_info.dept_name);
                }
            });

        });

});
</script>

<?= $this->endSection(); ?>

