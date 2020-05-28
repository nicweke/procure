<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('/images/cure.png')}}" class="logo" alt="Procure Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
