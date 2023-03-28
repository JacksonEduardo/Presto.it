<form class="d-inline" action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        {{-- <img src="{{asset('vendor/blade-flags/languages-' . $lang . '.svg')}}" width="25" height="25" alt=""> --}}
        <i class="bi bi-translate fs-5"></i>
    </button>
</form>