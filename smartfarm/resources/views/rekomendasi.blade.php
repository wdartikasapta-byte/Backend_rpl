@extends('layouts.app')

@section('content')
<section id="rekom" class="container">
  <div class="section-title">
    <span class="dot"></span><h2>Rekomendasi Tanam</h2>
  </div>

  <form action="{{ route('rekom.cari') }}" method="POST">
    @csrf
    <div class="card">
      <div class="grid grid-2">
        <div>
          <label class="muted">Pilih Musim</label>
          <select name="musim" required>
            <option value="">-- Pilih Musim --</option>
            @foreach($musim as $m)
              <option value="{{ $m->id }}">{{ $m->nama_musim }}</option>
            @endforeach
          </select>

          <div class="space"></div>

          <label class="muted">Pilih Komoditas</label>
          <select name="komoditas" required>
            <option value="">-- Pilih Komoditas --</option>
            @foreach($komoditas as $k)
              <option value="{{ $k->id }}">{{ $k->nama_komoditas }}</option>
            @endforeach
          </select>

          <div class="space"></div>

          <label class="muted">Pilih Lahan</label>
          <select name="lahan" required>
            <option value="">-- Pilih Lahan --</option>
            @foreach($lahan as $l)
              <option value="{{ $l->id }}">{{ $l->tipe_lahan }}</option>
            @endforeach
          </select>

          <div class="space"></div>
          <button type="submit" class="btn primary">Tampilkan Rekomendasi</button>
        </div>
      </div>
    </div>
  </form>

  @if(isset($hasil))
  <div class="card result">
    <h3>Rekomendasi Tanam</h3>
    <p><strong>Musim:</strong> {{ $hasil->musim->nama_musim }}</p>
    <p><strong>Komoditas:</strong> {{ $hasil->komoditas->nama_komoditas }}</p>
    <p><strong>Lahan:</strong> {{ $hasil->lahan->tipe_lahan }}</p>
    <p><strong>Deskripsi:</strong> {{ $hasil->deskripsi }}</p>
  </div>
  @endif
</section>
@endsection
