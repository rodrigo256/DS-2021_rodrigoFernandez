<form action="{{url('/card')}}" method="POST">
    @csrf
    @include('cards.form')
</form>
