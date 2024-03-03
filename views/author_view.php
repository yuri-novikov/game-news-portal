<h1>Информация об авторе нашего сайта</h1>
<?php
for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
    $data->data_seek($row_no);
    $row = $data->fetch_assoc();
?>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['fio']; ?></h5>
            <div class="row">
                <div class="col-2">
                    Возраст
                </div>
                <div class="col">
                    <p class="card-text">
                        <?php echo $row['age']; ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    Локация
                </div>
                <div class="col">
                    <p class="card-text">
                        <?php echo $row['location']; ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    BIO
                </div>
                <div class="col">
                    <p class="card-text">
                        <?php echo $row['additional']; ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
<?php
}
?>

<div class="mt-3">
    <a href="/journal/about" class="btn btn-primary">Назад</a>
</div>