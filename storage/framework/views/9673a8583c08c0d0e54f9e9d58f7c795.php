
<?php $__env->startSection('content'); ?>

    
    <?php if(Auth::user()->role != 'pelanggan'): ?>
        <h1 class="mt-4">Kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <?php if(Auth::user()->role == 'admin'): ?>
                    <a class="btn btn-primary" href="<?php echo e(url('kategori/create')); ?>">Create</a>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php $__currentLoopData = $kategoriProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no); ?></td>
                                <td><?php echo e($k->nama); ?></td>
                                <td>
                                    
                                    <a href="<?php echo e(url('kategori/edit/' . $k->id)); ?>" class="btn btn-warning">Edit</a>
                                    
                                    <?php if(Auth::user()->role == 'admin'): ?>
                                        <a href="<?php echo e(url('kategori/delete/' . $k->id)); ?>" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kategori?')">Delete</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    <?php else: ?>
        <?php echo $__env->make('admin.access_denied', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI02\praktikum10\resources\views/admin/kategori/kategori.blade.php ENDPATH**/ ?>