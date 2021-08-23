<div>
    Show Tweets

    <p>{{$message}}</p>

    <input type="text" name="message" id="message" wire:model='message'>

    <hr>

    <strong>Tweets  <br></strong>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
    
</div>
