@extends('layouts.app')

@section('content')
<section id="cuaca" class="container">
  <div class="section-title">
    <span class="dot"></span><h2>Informasi Cuaca</h2>
  </div>

  <form action="{{ route('cuaca.cari') }}" method="POST">
    @csrf
    <div class="card">
      <div class="grid grid-2">
        <div>
          <label class="muted">Pilih Kota</label>
          <select name="kota" required>
            <option value="">-- Pilih Kota --</option>
            <option value="Kendari">Kendari</option>
            <option value="Baubau">Baubau</option>
            <option value="Kolaka">Kolaka</option>
            <option value="Wakatobi">Wakatobi</option>
          </select>

          <div class="space"></div>

          <label class="muted">Pilih Tanggal</label>
          <input type="date" name="tanggal" required>

          <div class="space"></div>
          <button type="submit" class="btn primary">Tampilkan Cuaca</button>
        </div>
      </div>
    </div>
  </form>

  @if(isset($dataCuaca))
  <div class="card result">
    <h3>Cuaca di {{ $dataCuaca->kota }} ({{ $dataCuaca->tanggal }})</h3>
    <p><strong>Suhu:</strong> {{ $dataCuaca->suhu }}°C</p>
    <p><strong>Kelembapan:</strong> {{ $dataCuaca->kelembapan }}%</p>
    <p><strong>Kondisi:</strong> {{ $dataCuaca->kondisi }}</p>
  </div>
  @endif
</section>
@endsection
