<div class="card" id="{{ $dashboard->ident() }}">
    <div class="card-header">
        {!! $dashboard->title() !!}
    </div>
    <div class="card-body">
        {!! $dashboard->content() !!}
    </div>
</div>
<style>
    {{ $dashboard->style() }}
</style>
