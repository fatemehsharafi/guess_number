/**
 *
 * @param data
 * @param method
 * @param url
 * @returns {{getAllResponseHeaders: function(): *|null, abort: function(*=): this, setRequestHeader: function(*=, *): this, readyState: number, getResponseHeader: function(*): null|*, overrideMimeType: function(*): this, statusCode: function(*=): this}|*|jQuery}
 */
function request(data, method, url) {
    return $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        data: data,
        type: method,
    });
}

function handleWinner(id) {
    const allMessageBoxes = $(".message-box")
    allMessageBoxes.removeClass('d-none').show()

    $.each(allMessageBoxes, function (index) {
        const elmId = $(allMessageBoxes[index]).attr('id')
        const message = $(allMessageBoxes[index]).children('.message')

        if (elmId !== `message-box-${id}`) {
            message[0].innerText = "You Lose!"
        } else {
            $(message[0]).removeClass('text-danger').addClass('text-success')
            message[0].innerText = "You Win🥳"
        }
    });
    $('#winnerModal').modal('show')
}

function sendNumber(id) {
    const name = $(`#name-${id}`).val()
    const number = $(`#number-${id}`).val()
    const data = {
        'name': name,
        'number': number,
    };
    request(data, 'POST', checkNumberUrl).then(function (data) {
        if (data.message !== "Winner!") {
            $(`#message-box-${id}`).removeClass('d-none').show()
            $(`#message-${id}`).text(data.message)

            return false
        }
        handleWinner(id)
    })
}

function reDraw() {
    const players = $(".players")
    $.each(players, function (index) {
        const player = $(players[index])
        const playerNumber = player.attr('data-id')
        $(`#name-${playerNumber}`).val(`Player Number ${playerNumber}`)
        $(`#number-${playerNumber}`).val('')
        $(`#message-box-${playerNumber}`).hide()
        $(`#message-${playerNumber}`).removeClass('text-success').addClass('text-danger')
    })
}

function newGame() {
    request([], 'POST', regenerateNumberUrl).then(function () {
        reDraw()
    })
}
