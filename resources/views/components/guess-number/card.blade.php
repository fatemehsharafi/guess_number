<div class="mr-5 ml-5 pt-4 mb-4 players" data-id="{{$userId}}" id="player-{{$userId}}">
    <div class="card justify-content-center flex-column align-items-center border-w2">
        <img class="card-img-top user-avatar mt-5" src="{{asset('assets/images/user.png')}}" alt="Card image cap">
        <div class="card-body align-items-center justify-content-center flex-column d-flex mt-4">
            <input type="text" name="name" id="name-{{$userId}}" class="form-control text-center input-border"
                   value="Player Number {{$userId}}">
            <input type="number" name="number" id="number-{{$userId}}" class="form-control text-center mt-4">
            <button onclick="sendNumber({{$userId}})" class="btn btn-purple mt-4">Guess Number</button>
        </div>
    </div>
    <div class="card justify-content-center flex-column align-items-center mb-4 mt-4 border-w2 d-none message-box"
         id="message-box-{{$userId}}">
        <p class="text-danger text-center mt-0 mb-0 p-2 message" id="message-{{$userId}}"></p>
    </div>
</div>
