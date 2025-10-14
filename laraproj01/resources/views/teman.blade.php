<div class="container">

<a href="./">Home</a>
<a href="{{ route('dtteman')">Teman</a>

</div>

<div class="container">
    <h3>Data Teman</h3>

    @if(empty($dt))
        ,<p>Tidak ada Data</p>
    @else

    <table border="1">
    <tr>
        <th>idbuku</th>
        <th>namaTeman</th>
        <th>alamat</th>
        <th>kota</th>
        <th>telp</th>
        <th>wa</th>
    </tr>
    @foreach($dt as $d)
    <tr>
        <td>{{ $d['idbuku']}}</td>
        <td>{{ $d['namateman']}}</td>
        <td>{{ $d['alamat']}}</td>
        <td>{{ $d['kota']}}</td>
        <td>{{ $d['telp']}}</td>
        <td>{{ $d['wa']}}</td>
    </tr>
    </table>
    @endif
</div>