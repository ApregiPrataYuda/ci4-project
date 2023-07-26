<?= $this->extend('Layouting/template') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title"><?= $title ?></h3> -->
          <a href="<?= site_url('Gawian')?>" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i></a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         

        <form action="<?= site_url('Gawian')?>" method="POST">
        <?= csrf_field() ?>
         <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="">Name</label>
               
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="">Desc</label>
               <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            </div>
         </div>

         <button type="submit" class="btn btn-sm btn-secondary"><i class="fa fa-save"></i></button>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <?= $this->endSection() ?>