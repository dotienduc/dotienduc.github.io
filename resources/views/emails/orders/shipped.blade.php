@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
@foreach($Products as $key => $items)
| {{ $items->id }}     | {{ $items->name }}      |{{ $items->unit_price }}     |
@endforeach
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
