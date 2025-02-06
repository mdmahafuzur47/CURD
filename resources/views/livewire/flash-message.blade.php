<div>
    @if (session()->has('success'))
        <div class="py-5 px-2 rounded-lg border bg-blue-100">
            {{session('success')}}
        </div>
    @endif
</div>
