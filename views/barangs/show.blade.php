<html>
<head>
</head>
<body>
<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
@if (count($barangs)==1)
<p>Jumlah barangs adalah satu</p>
@elseif(count($barangs)>1)
<p><b>Perulangan dengan FOR</b></p>
@for ($i = 0; $i < count($barangs); $i++)
<p>{{ 'No :'.$i.' Nama barangs :'.$barangs[$i] }}</p>
@endfor
<hr>
<p><b>Perulangan dengan FOREACH</b></p>
@foreach ($barangs as $x => $v)
<p>{{ 'No :'.$x.' Nama barangs :'.$v }}</p>
@endforeach

<hr>
<p><b>Perulangan dengan WHILE</b></p>
@php
$no = 1;
@endphp
@while ($no<=5)
<p>ini adalah perulangan ke {{ $no }}</p>
@php
$no++;
@endphp


@endwhile
@else
<p>Tidak Ada Data barangs</p>
@endif
</body>
</html>

