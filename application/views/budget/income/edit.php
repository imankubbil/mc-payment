<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pemasukan</title>
</head>
<body>
    <?=form_open('budget/updateIncome')?>
        <input type="hidden" name="id" value="<?=$income->id?>">
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah" autocapitalize="off" autocomplete="off" autofocus="off" min="0" value="<?=$income->jumlah?>">

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" autocapitalize="off" autocomplete="off" autofocus="off" value="<?=$income->tanggal?>">

        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan" autocapitalize="off" autocomplete="off" autofocus="off" maxlength="50" value="<?=$income->keterangan?>">

        <button type="submit">Simpan</button>
    <?=form_close()?>
</body>
</html>