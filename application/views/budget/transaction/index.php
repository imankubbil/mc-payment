<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengeluaran</title>
</head>
<body>
    <h3>Saldo : <?= number_format( ( $saldo_income->saldo - $saldo_transaction->saldo) )?></h3>
    <br>

    <?=form_open('budget/saveTransaction')?>
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
            <?php foreach($transaction as $i => $val) : ?>
                <tr>
                    <td><?=$i + 1?></td>
                    <td><?=$val->jumlah?></td>
                    <td><?=$val->tanggal?></td>
                    <td><?=$val->keterangan?></td>
                    <td>
                        <a href="<?=base_url('budget-application/byTransaction/'.$val->id)?>">Ubah</a>
                        <?=form_open('budget-application/deleteTransaction')?>
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