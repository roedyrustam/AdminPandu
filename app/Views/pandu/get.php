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
                        <button id="table2-new-row-button" class="btn btn-primary mb-4"> Add Pandu</button>
                        <div class="table-responsive">
                            <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>E-mail</th>
                                        <th name="bstable-actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bella</td>
                                        <td>Chloe</td>
                                        <td>System Developer</td>
                                        <td>2018/03/12</td>
                                        <td>$654,765</td>
                                        <td>b.Chloe@datatables.net</td>
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
                                    <tr>
                                        <td>Donna</td>
                                        <td>Bond</td>
                                        <td>Account Manager</td>
                                        <td>2012/02/21</td>
                                        <td>$543,654</td>
                                        <td>d.bond@datatables.net</td>
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
                                    <tr>
                                        <td>Harry</td>
                                        <td>Carr</td>
                                        <td>Technical Manager</td>
                                        <td>20011/02/87</td>
                                        <td>$86,000</td>
                                        <td>h.carr@datatables.net</td>
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
                                    <tr>
                                        <td>Lucas</td>
                                        <td>Dyer</td>
                                        <td>Javascript Developer</td>
                                        <td>2014/08/23</td>
                                        <td>$456,123</td>
                                        <td>l.dyer@datatables.net</td>
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
                                    <tr>
                                        <td>Karen</td>
                                        <td>Hill</td>
                                        <td>Sales Manager</td>
                                        <td>2010/7/14</td>
                                        <td>$432,230</td>
                                        <td>k.hill@datatables.net</td>
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
                                    <tr>
                                        <td>Dominic</td>
                                        <td>Hudson</td>
                                        <td>Sales Assistant</td>
                                        <td>2015/10/16</td>
                                        <td>$654,300</td>
                                        <td>d.hudson@datatables.net</td>
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