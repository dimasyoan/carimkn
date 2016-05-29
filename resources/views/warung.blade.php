@extends('layouts.app')

@section('content')

@if (count($warung) > 0)
<div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Warung</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Warung</th>
                      <th>Alamat</th>
                      <th>Jam Buka</th>
                      <th>Menu</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($warung as $war)
                    <tr>
                        <td class="table-text">
                            <div>{{ $war->namawarung }}</div>
                        </td>
                        <td>{{ $war->alamat }}</td>
                        <td>{{ $war->waktubuka }}</td>
                        <td>{{ $war->kategori }}</td>
                        <td>
                        {!! Form::open([
                        'method' => 'delete',
                        'route' => ['warung.destroy',$war->id]
                        ]) !!}

                        <a href="{{route('warung.edit',$war->id)}}">Edit</a>  
                        {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
                        <a href="{{route('warung.destroy',$war->id)}}"></a>  

                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
    @endif

@endsection