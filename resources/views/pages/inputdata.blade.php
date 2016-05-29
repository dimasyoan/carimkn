@extends('master')

@section('content')
	<title>CariMakan | InputData</title>

		<div class="content-wrapper">
		    <section class="content-header"></section>

		    <section class="content">    
					<div class="col-md-3">
					</div>

		            <div class="col-md-6">
		              <!-- general form elements -->
		              <div class="box box-primary">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Masukkan Data Warung</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                <form role="form">
		                  <div class="box-body">
		                    <div class="form-group">
		                      <label for="exampleInputEmail1">Nama Warung</label>
		                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
		                    </div>
		                    <div class="form-group">
		                      <label>Waktu Buka</label>
		                      <select class="form-control">
		                      	<option  value="" disabled selected> Pilih Waktu</option>
		                        <option>Pagi</option>
		                        <option>Siang</option>
		                        <option>Sore</option>
		                        <option>Malam</option>
		                      </select>
		                    </div>
		                    <div class="form-group">
		                      <label>Kategori Makanan</label>
		                      <select class="form-control">
		                      	<option  value="" disabled selected> Pilih Kategori</option>
		                        <option>Aneka Nasi</option>
		                        <option>Sate</option>
		                        <option>Menu Rumahan</option>
		                        <option>Bubur Ayam</option>
		                        <option>Soto</option>
		                        <option>Masakkan Padang</option>
		                        <option>Bakso</option>
		                        <option>Mie</option>
		                        <option>Penyetan</option>
		                      </select>
		                    </div>
		                    <div class="form-group">
		                      <label>Alamat Warung</label>
		                      <textarea class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
		                    </div>
		                    <div class="form-group">
		                      <label>Menu Makanan</label>
		                      <textarea class="form-control" rows="3" placeholder="Masukkan Makanan"></textarea>
		                    </div>
		                  </div><!-- /.box-body -->

		                  <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                  </div>
		                </form>
		              </div><!-- /.box -->              
		            </div><!--/.col (left) -->
		        </section>
    	</div>

@stop