<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Pandu – Tingkatan </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="side-app">

    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Pandu</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pandu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Level</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Nama Pandu </h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('pandu/add') ?>" button id="table2-new-row-button" class="btn btn-primary mb-4">Add Pandu</a>

                        <div class=" table-responsive">
                            <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Info</th>
                                        <th name="bstable-actions">Actions</th>
                                    </tr>
                                    <?php foreach ($pandu as $key => $value) : ?>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value->name_pandu ?></td>
                                        <td><?= $value->date_pandu ?></td>
                                        <td><?= $value->info_pandu ?></td>
                                        <td name="bstable-actions">
                                            <div class="btn-list">
                                                <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                    <span class="fe fe-edit"> </span>
                                                </button>
                                                <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>
                                                <button id="bAcep" type="button" class="btn  btn-sm btn-primary" style="display:none;">
                                                    <span class="fe fe-check-circle"> </span>
                                                </button>
                                                <button id="bCanc" type="button" class="btn  btn-sm btn-danger" style="display:none;">
                                                    <span class="fe fe-x-circle"> </span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTAINER CLOSED -->
</div>

<?= $this->endSection() ?>