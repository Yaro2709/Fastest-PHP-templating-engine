<!DOCTYPE html>
<html><head></head><body>

    @foreach ($data as $message)
        <p>{{ $message->code }} : {{ $message->message }}</p>
    @endforeach

</body></html>
