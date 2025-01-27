<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
</head>

<body>
  <h1>Form Pengeluaran</h1>
  <form id="form_pembelian">
    <table>
      <tr>
        <td>No. Pembelian</td>
        <td>:</td>
        <td><input type="text" name="noPembelian" id="no_pembelian" required></td>
      </tr>
      <tr>
        <td>Tanggal Pembelian</td>
        <td>:</td>
        <td><input type="date" name="tglPembelian" id="tgl_pembelian" required></td>
      </tr>
      <tr>
        <td>Nama Pelanggan</td>
        <td>:</td>
        <td><input type="text" name="namaPelanggan" id="nama_pelanggan" required></td>
      </tr>
      <tr>
        <td>Code Merek</td>
        <td>:</td>
        <td><input type="text" name="codeMerk" id="code_merk" required></td>
      </tr>
      <tr>
        <td>Merk Disket</td>
        <td>:</td>
        <td><input type="text" name="merkDisket" id="merk_disket" disabled></td>
      </tr>
      <tr>
        <td>Code Jenis</td>
        <td>:</td>
        <td><input type="text" name="codeJenis" id="code_jenis" required></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><input type="text" name="ketJenis" id="ket_jenis" disabled></td>
      </tr>
      <tr>
        <td>Jumlah Pembelian</td>
        <td>:</td>
        <td><input type="number" name="jmlPembelian" id="jml_pembelian" required></td>
        <td>
          <button type="button" id="btn_count">Proses</button>
        </td>
      </tr>
      <tr>
        <td>Harga Disket</td>
        <td>:</td>
        <td><input type="number" name="hrgDisket" id="hrg_disket" disabled></td>
      </tr>
      <tr>
        <td>Jumlah Pembayaran</td>
        <td>:</td>
        <td><input type="number" name="jmlPembayaran" id="jml_pembayaran" disabled></td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
        <td>
          &nbsp;
        </td>
        <td>
          <button type="button" id="btn_save">Save</button>
          <button type="button" id="btn_cancel">Cancel</button>
        </td>
      </tr>
    </table>
  </form>

  <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>