<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/new/emaillogo.png')}}"  style="width: 80%; height:auto; margin-bottom:2px;"   class="logo" alt="Procure Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
