@extends('layouts.app')

@section('content')
  <title>CariMakan | InputData</title>

        <section class="content-header"></section>
        <section class="content-header"></section>
        <section class="content-header"></section>
        <section class="content-header"></section>
        <section class="content-header"></section>

        <section class="content">    
          <div class="col-md-3">
          </div>
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Masukkan Kriteria</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
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
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div><!-- /.box -->              
                </div><!--/.col (left) -->
            </section>

@stop