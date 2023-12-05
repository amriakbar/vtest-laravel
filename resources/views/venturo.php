<?php
use illuminate\Http\Request;

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Welcome to CodeIgniter</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <style type="text/css">

 ::selection { background-color: #E13300; color: white; }
 ::-moz-selection { background-color: #E13300; color: white; }

 body {
  background-color: #fff;
  margin: 40px;
  font: 13px/20px normal Helvetica, Arial, sans-serif;
  color: #4F5155;
 }

 a {
  color: #003399;
  background-color: transparent;
  font-weight: normal;
  text-decoration: none;
 }

 a:hover {
  color: #97310e;
 }

 h1 {
  color: #444;
  background-color: transparent;
  border-bottom: 1px solid #D0D0D0;
  font-size: 19px;
  font-weight: normal;
  margin: 0 0 14px 0;
  padding: 14px 15px 10px 15px;
 }

 code {
  font-family: Consolas, Monaco, Courier New, Courier, monospace;
  font-size: 12px;
  background-color: #f9f9f9;
  border: 1px solid #D0D0D0;
  color: #002166;
  display: block;
  margin: 14px 0 14px 0;
  padding: 12px 10px 12px 10px;
 }

 #body {
  margin: 0 15px 0 15px;
  min-height: 96px;
 }

 p {
  margin: 0 0 10px;
  padding:0;
 }

 p.footer {
  text-align: right;
  font-size: 11px;
  border-top: 1px solid #D0D0D0;
  line-height: 32px;
  padding: 0 10px 0 10px;
  margin: 20px 0 0 0;
 }

 #container {
  margin: 10px;
  border: 1px solid #D0D0D0;
  box-shadow: 0 0 8px #D0D0D0;
 }
 </style>
</head>
<body>

  <div class="container-fluid">
    <div class="card" style="margin: 2rem 0rem;">
      <div class="card-header">
        Venturo - Laporan penjualan tahunan per menu
      </div>
      <div class="card-body">
        <form action="{{ url('/') }}" method="post">
          <div class="row">
            <div class="col-2">
              <div class="form-group">
                <select id="my-tahun" class="form-control" name="tahun">
                  <option>Pilih Tahun</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary">
                Tampilkan
              </button>
              <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">
                Json Menu
              </a>
              <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                Json Transaksi
              </a>
            </div>
          </div>
        </form>
        <hr>
        <div class="table-responsive">
          <table class="table table-hover table-bordered" style="margin: 0;">
            <thead>
              <tr class="table-dark">
                <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                <th colspan="12" style="text-align: center;">Periode Pada 2021
                </th>
                <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
              </tr>

              <tr class="table-dark">
                <th style="text-align: center;width: 75px;">Jan</th>
                <th style="text-align: center;width: 75px;">Feb</th>
                <th style="text-align: center;width: 75px;">Mar</th>
                <th style="text-align: center;width: 75px;">Apr</th>
                <th style="text-align: center;width: 75px;">May</th>
                <th style="text-align: center;width: 75px;">Jun</th>
                <th style="text-align: center;width: 75px;">Jul</th>
                <th style="text-align: center;width: 75px;">Aug</th>
                <th style="text-align: center;width: 75px;">Sep</th>
                <th style="text-align: center;width: 75px;">Oct</th>
                <th style="text-align: center;width: 75px;">Nov</th>
                <th style="text-align: center;width: 75px;">Dec</th>
              </tr>
            </thead>
            <tbody>
             <tr><td class="table-secondary" colspan="14"><b>Makanan</b></td></tr>
              <tr>
                <td>'.$k->menu.'</td>
                <td style="text-align: right;">'. array_sum($biaya) .'</td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"><b>'.array_sum($th).'</b></td>
              </tr>
              <tr><td class="table-secondary" colspan="14"><b>Minuman</b></td></tr>					
              <tr>
               <td>'.$min->menu.'</td>
               <td style="text-align: right;">'.array_sum($nilai).'</td>
               <td style="text-align: right;">'. ' ' .'</td>
               <td style="text-align: right;"><b>'.array_sum($hasil).'</b></td>
              </tr>
              <tr class="table-dark">
               <td style="text-align: right;">
                <b>'.array_sum($key).'</b>
               </td>
               <td style="text-align: right;"><b>3,965,000</b></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>