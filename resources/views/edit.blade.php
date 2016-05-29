@extends('layouts.app')

@section('content')
  <title>CariMakan | EditData</title>
    

        <section class="content-header"></section>

        <section class="content">    
        <div class="col-md-3"></div>
              <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Masukkan Data Warung</h3>
                    </div>
                    {!! Form::model($warung, [
                    	'method' => 'patch',
                    	'route' => ['warung.update', $warung->id]
                    ]) !!}
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                        {!! Form::label('namawarung', 'Nama Warung')!!}
                        {!! Form::text('namawarung', $warung->namawarung, [
                            'class' => 'form-control',
                            'placeholder' => 'Masukkan Nama']) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('waktubuka', 'Waktu Buka')!!}
                        {!! Form::select('waktubuka', array(
                              'pagi' => 'Pagi',
                              'siang' => 'Siang',
                              'sore' => 'Sore',
                              'malam' => 'Malam'), $warung->waktubuka, ['class' => 'form-control', 'placeholder' => 'Pilih Waktu']) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('kategori', 'Kategori Makanan')!!}
                        {!! Form::select('kategori', array(
                              'aneka nasi' => 'Aneka Nasi',
                              'sate' => 'Sate',
                              'menu rumahan' => 'Menu Rumahan',
                              'bubur ayam' => 'Bubur Ayam',
                              'soto' => 'Soto',
                              'masakkan padang' => 'Masakkan Padang',
                              'bakso' => 'Bakso',
                              'mie' => 'Mie',
                              'penyetan' => 'Penyetan'), $warung->kategori, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('alamat', 'Alamat')!!}
                        {!! Form::textarea('alamat',$warung->alamat,[
                          'class' => 'form-control',
                          'rows' => '3',
                          'placeholder' => 'Masukkan Alamat']) !!}
                        </div>
                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        {!! Form::submit('Udate', ['class' => 'btn btn-primary']) !!}
                      </div>
                    </form>
                    {!! Form::close() !!}
                  </div><!-- /.box -->              
                </div><!--/.col (left) -->
            </section>
    
@endsection
