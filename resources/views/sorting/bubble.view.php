<form action="{{ route('sort.bubble') }}" method="post">
        @csrf
        <input type='text' name='array' placeholder='array goes here'>
        <input type='submit' value='Sort'>
</form>