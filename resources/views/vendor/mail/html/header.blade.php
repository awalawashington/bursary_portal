<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('portal/assets/img/logo.png')}}" class="logo" alt="TUMSA"> 
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
