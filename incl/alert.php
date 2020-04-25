<?php if (isset($errors)): ?>
    <div class="alert-box">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h6 class="alert-heading">Errors!</h6>
        <?php if (is_array($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <?php if (is_array($error)): ?>
                <p><?php echo "<b>$error[error_name]</b> <br> $error[error_str] <br> $error[error_file],  Line: $error[error_line]"; ?></p>
            <?php else: ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php else: ?>
            <p><?= $errors; ?></p>
        <?php endif; ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>