<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income</title>
</head>
<body>
    <?=form_open('budget/saveIncome')?>
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah" autocapitalize="off" autocomplete="off" autofocus="off" min="0">

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" autocapitalize="off" autocomplete="off" autofocus="off">

        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan" autocapitalize="off" autocomplete="off" autofocus="off" maxlength="50">

        <button type="submit">Simpan</button>
    <?=form_close()?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($income as $i => $val) : ?>
                <tr>
                    <td><?=$i + 1?></td>
                    <td><?=$val->jumlah?></td>
                    <td><?=$val->tanggal?></td>
                    <td><?=$val->keterangan?></td>
                    <td>
                        <a href="<?=base_url('budget-application/byIncome/'.$val->id)?>">Ubah</a>
                        <?=form_open('budget-application/deleteIncome')?>
                            <input type="hidden" name="id" value="<?=$val->id?>">
                            <button type="submit">Hapus</button>
                        <?=form_close()?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>