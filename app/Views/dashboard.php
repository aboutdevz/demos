<div class="card w-100 p-lg-5 pt-3 rounded-3 mt-5  shadow-lg " style="max-height: 1000px;">

                        <p class="text-center display-4 mb-5">Daftar User</p>
                        <div class="btn-soal w-100 text-center mb-3">
                            <a href="<?=base_url('Dashboard/inputform')?>"><button id="tambahDataMahasiswa" class="btn flex-grow-1 bg-primary dataMahasiswa">&plus;
                                Tambah User</button></a>
                            <!-- <button class="btn bg-info">&downarrow; Export Data</button> -->
                        </div>
                        <div class="table-wrapper table-responsive">


                            <table id="daftar-mahasiswa" class="display table  table-hover table-striped  w-100">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (!empty($user)) : ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($user as $data) : ?>

                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $data['username']; ?></td>
                                                <td id="action">
                                                    <div class="btn-group ">
                                                        <a class="btn bg-success" href="<?=base_url('Dashboard/updateform/'.$data['id'])?>"><button id="updateDataMahasiswa" data-id="<?= $data['id'] ?>" class="btn w-100 bg-success">Update</button></a>
                                                        <a class="btn bg-danger w-100" href="<?=base_url('Dashboard/hapus/'.$data['id'])?>"><button class="btn w-100 bg-danger">Hapus</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <td class="text-center" colspan="3">No Data</td>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>