<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')

<img src="{{asset('public/assets/img/logosmall.png')}}" alt="" class="logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
