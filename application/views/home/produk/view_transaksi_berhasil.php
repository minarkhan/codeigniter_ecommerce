<div class="row">
  <div class="col-md-7 mx-auto">


    <div class="mb-3 text-center">
      <h5 class="mb-5">Successful Transaction</h5>
      Your Invoice No : <b><?= $orders; ?></b><br>
      total purchases <b class="text-danger">BDT. <?= $total_bayar; ?></b><br>
      <a target='_BLANK' class="btn btn-sm btn-info mt-3 mb-2" href="<?= base_url(); ?>produk/print_invoice/<?= $orders; ?>"><span class="glyphicon glyphicon-print"></span> Download Invoice</a>
      <br>
    </div>

    <div class="mb-3">
      <p class="text-justify">
        We have also sent your order details to<b class='text-danger'><?= $email; ?></b><br>
        Please transfer the money for the total  <b>BDT. <?= $total_bayar; ?></b>  to one of the bank options below: <br>
      </p>
    </div>

    <div class="col-md-10 mx-auto text-left">
      <table class='table table-borderless table-sm'>
        <thead>
          <tr>
            <th width="20px">No</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>A/C Holder</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($rekening->result_array() as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row[nama_bank]</td>
                <td>$row[no_rekening]</td>
                <td>$row[pemilik_rekening]</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>

    <hr>
    <p class="mt-2 mb-2">
      Setelah melakukan Pembayaran, silahkan konfirmasi pembayaran anda <a href='<?= base_url(); ?>konfirmasi'><strong>disini</strong></a>.
    </p>
  </div>
</div>
<div class="border-top mt-2 mb-5"></div>